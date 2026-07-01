<?php

$slug = $argv[1] ?? '';
$jsonFile = $argv[2] ?? '';

if (!$slug || !$jsonFile || !file_exists($jsonFile)) {
    die("Usage: php update_config.php <slug> <json_file>\n");
}

$data = json_decode(file_get_contents($jsonFile), true);
if (!$data) {
    die("Invalid JSON\n");
}

$configFile = __DIR__ . '/config/zuzie.php';
$content = file_get_contents($configFile);

// This is a naive regex-based replacer for the array in zuzie.php
// Since zuzie.php is large, we should locate the specific slug block.

$pattern = '/(\[\s*\'slug\'\s*=>\s*\''.preg_quote($slug, '/').'\'.*?)(?=\n\s*\[\s*\'slug\'|\n\s*\]\s*,|\n\s*\]\s*$)/s';

if (preg_match($pattern, $content, $matches)) {
    $block = $matches[1];
    
    // We want to replace 'questions' => [...], with the new questions
    if (isset($data['questions'])) {
        $qStr = "    'questions' => [\n";
        foreach ($data['questions'] as $q) {
            $text = is_array($q) ? ($q['text'] ?? json_encode($q, JSON_UNESCAPED_UNICODE)) : $q;
            $text = str_replace("'", "\'", $text);
            $qStr .= "                '$text',\n";
        }
        $qStr .= "            ],";
        
        // Find existing questions block
        $block = preg_replace('/\'questions\'\s*=>\s*\[.*?\]\s*,/s', $qStr, $block);
    }
    
    if (isset($data['reverse_scoring'])) {
        $rStr = "    'reverse_scoring' => [";
        $rStr .= implode(', ', $data['reverse_scoring']);
        $rStr .= "],";
        
        if (strpos($block, "'reverse_scoring'") !== false) {
             $block = preg_replace('/\'reverse_scoring\'\s*=>\s*\[.*?\],/s', $rStr, $block);
        } else {
             // Insert after metric
             $block = preg_replace('/(\'metric\'\s*=>\s*.*?,)/s', "$1\n        $rStr", $block);
        }
    }
    
    if (isset($data['options'])) {
        $oStr = "    'options' => [\n";
        foreach ($data['options'] as $k => $v) {
            if (is_array($v)) {
                $score = $v['score'] ?? $k;
                $text = $v['text'] ?? $v['label'] ?? '';
            } else {
                $score = $k;
                $text = $v;
            }
            $text = str_replace("'", "\'", $text);
            $oStr .= "                $score => '$text',\n";
        }
        $oStr .= "            ],";
        $block = preg_replace('/\'options\'\s*=>\s*\[.*?\]\s*,/s', $oStr, $block);
    }
    
    if (isset($data['bands'])) {
        $bStr = "    'bands' => [\n";
        krsort($data['bands']); // High to low
        foreach ($data['bands'] as $k => $v) {
            $label = str_replace("'", "\'", $v['label']);
            $tone = $v['tone'];
            $summary = str_replace("'", "\'", $v['summary']);
            $bStr .= "                $k => ['label' => '$label', 'tone' => '$tone', 'summary' => '$summary'],\n";
        }
        $bStr .= "            ],";
        $block = preg_replace('/\'bands\'\s*=>\s*\[.*?\]\s*,/s', $bStr, $block);
    }

    $newContent = str_replace($matches[1], $block, $content);
    file_put_contents($configFile, $newContent);
    echo "Updated config for $slug\n";
} else {
    echo "Slug $slug not found in config\n";
}
