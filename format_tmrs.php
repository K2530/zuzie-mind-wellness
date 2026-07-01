<?php
$data = require 'config/zuzie.php';
$tmrs = json_decode(file_get_contents('tmrs.json'), true);
$tmrsOptions = $tmrs['options'] ?? [];
$titles = $tmrs['questions'] ?? [];

$newQuestions = [];
foreach ($titles as $idx => $title) {
    $opts = [];
    if (isset($tmrsOptions[$idx])) {
        foreach ($tmrsOptions[$idx] as $opt) {
            $opts[$opt['score']] = $opt['text'];
        }
    }
    $newQuestions[] = [
        'text' => $title,
        'options' => $opts
    ];
}

foreach ($data['assessment_page_items'] as &$item) {
    if ($item['slug'] == 'tmrs') {
        $item['questions'] = $newQuestions;
        // Unset global options for tmrs
        unset($item['options']);
        break;
    }
}

$str = var_export($data, true);
$str = preg_replace('/array\s*\(/', '[', $str);
$str = preg_replace('/\)/', ']', $str);
file_put_contents('config/zuzie.php', "<?php\n\nreturn " . $str . ";\n");
