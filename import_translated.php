<?php

$json = file_get_contents('translated.json');
$data = json_decode($json, true);

if (!$data) {
    die("Failed to decode JSON");
}

function arrayToCode($array, $indentLevel = 1) {
    if (!is_array($array)) {
        return var_export($array, true);
    }
    
    $isList = array_is_list($array);
    
    $indent = str_repeat('  ', $indentLevel);
    $innerIndent = str_repeat('  ', $indentLevel + 1);
    
    $code = "[\n";
    foreach ($array as $key => $value) {
        $keyStr = $isList ? "" : var_export($key, true) . " => ";
        $valueStr = arrayToCode($value, $indentLevel + 1);
        $code .= $innerIndent . $keyStr . $valueStr . ",\n";
    }
    $code .= $indent . "]";
    return $code;
}

$code = "<?php\n\nreturn [\n";
foreach ($data as $key => $value) {
    $code .= "  " . var_export($key, true) . " => \n";
    $code .= "  " . arrayToCode($value, 1) . ",\n";
}
$code .= "];\n";

file_put_contents('config/zuzie.php', $code);
echo "Successfully wrote to config/zuzie.php\n";
