<?php

$jsonFiles = glob('*.json');
$assessments = [];

$meta = [
    '2p' => ['title' => 'แบบประเมินโรคซึมเศร้า 2 คำถาม (2Q)', 'desc' => 'ประเมินภาวะซึมเศร้าเบื้องต้น'],
    'cdi' => ['title' => 'แบบประเมิน CDI ในเด็ก', 'desc' => 'ประเมินภาวะซึมเศร้าในเด็ก'],
    'thi-15' => ['title' => 'แบบประเมินความสุขคนไทย (THI-15)', 'desc' => 'ประเมินความสุข'],
    'teen-dep' => ['title' => 'แบบประเมินซึมเศร้าในวัยรุ่น', 'desc' => 'ประเมินภาวะซึมเศร้าสำหรับวัยรุ่น'],
    't-gmha-15' => ['title' => 'แบบประเมินสุขภาพจิตผู้สูงอายุ (T-GMHA-15)', 'desc' => 'สำหรับผู้สูงอายุ'],
    'disaster-kid' => ['title' => 'แบบประเมินภัยพิบัติสำหรับเด็ก', 'desc' => 'ประเมินผลกระทบจากภัยพิบัติ'],
    'game-addict' => ['title' => 'แบบประเมินเด็กติดเกมส์', 'desc' => 'คัดกรองการติดเกม'],
    'slow-learn' => ['title' => 'แบบประเมินเด็กเรียนรู้ช้า', 'desc' => 'ประเมินด้านการเรียนรู้'],
    'ld' => ['title' => 'แบบคัดกรองภาวะ LD', 'desc' => 'บกพร่องทางการเรียนรู้'],
    'autism' => ['title' => 'แบบคัดกรองภาวะออทิสติก', 'desc' => 'คัดกรองออทิสติก'],
    'sdq' => ['title' => 'แบบประเมินจุดแข็งจุดอ่อน (SDQ)', 'desc' => 'ประเมินพฤติกรรม'],
    'kid-anxiety' => ['title' => 'แบบประเมินภาวะกังวลในเด็ก', 'desc' => 'ประเมินความวิตกกังวล'],
    'gad-7' => ['title' => 'แบบประเมินภาวะวิตกกังวล (GAD-7)', 'desc' => 'คัดกรองโรควิตกกังวล'],
    'burnout' => ['title' => 'แบบประเมินภาวะหมดไฟ (Burnout)', 'desc' => 'ประเมินความเหนื่อยล้าในการทำงาน'],
    '4-disease' => ['title' => 'แบบสังเกตพฤติกรรม 4 โรค', 'desc' => 'สังเกตพฤติกรรม'],
    'eq-3-5' => ['title' => 'แบบประเมิน EQ เด็ก 3-5 ปี', 'desc' => 'ความฉลาดทางอารมณ์'],
    'eq-6-11' => ['title' => 'แบบประเมิน EQ เด็ก 6-11 ปี', 'desc' => 'ความฉลาดทางอารมณ์'],
    'eq-12-17' => ['title' => 'แบบประเมิน EQ เด็ก 12-17 ปี', 'desc' => 'ความฉลาดทางอารมณ์'],
    'pises-10' => ['title' => 'แบบประเมิน PISES-10', 'desc' => 'ประเมินสุขภาพจิต'],
    'tmrs' => ['title' => 'แบบประเมิน TMRS', 'desc' => 'ประเมิน TMRS'],
    '8q' => ['title' => 'แบบประเมินแนวโน้มการฆ่าตัวตาย (8Q)', 'desc' => 'ประเมิน 8Q'],
];

foreach ($jsonFiles as $f) {
    if ($f == 'package.json' || $f == 'package-lock.json' || $f == 'composer.json') continue;
    $slug = str_replace('.json', '', $f);
    $data = json_decode(file_get_contents($f), true);
    
    $item = [
        'slug' => $slug,
        'title' => $meta[$slug]['title'] ?? $slug,
        'desc' => $meta[$slug]['desc'] ?? '',
        'icon' => 'selfworth',
        'metric' => 'คะแนน',
    ];
    
    if (isset($data['reverse_scoring'])) {
        $item['reverse_scoring'] = $data['reverse_scoring'];
    }
    if (isset($data['options'])) {
        $opts = [];
        foreach ($data['options'] as $k => $v) {
            if (is_array($v)) {
                $opts[$v['score'] ?? $k] = $v['text'] ?? $v['label'] ?? '';
            } else {
                $opts[$k] = $v;
            }
        }
        $item['options'] = $opts;
    }
    if (isset($data['bands'])) {
        // If it's multi-dimensional (like burnout), just skip for now and use default bands in frontend
        if (!isset(array_values($data['bands'])[0]['label']) && !isset(array_values($data['bands'])[0]['tone'])) {
            // Nested
        } else {
            $item['bands'] = $data['bands'];
        }
    }
    if (isset($data['questions'])) {
        $qs = [];
        foreach ($data['questions'] as $q) {
            $qs[] = is_array($q) ? ($q['text'] ?? json_encode($q, JSON_UNESCAPED_UNICODE)) : $q;
        }
        $item['questions'] = $qs;
    }
    
    $assessments[] = $item;
}

$phpArray = var_export($assessments, true);
// convert array ( to [
$phpArray = preg_replace('/array \(/', '[', $phpArray);
$phpArray = preg_replace('/\)$/m', ']', $phpArray);

$configFile = __DIR__ . '/config/zuzie.php';
$content = file_get_contents($configFile);

$content = preg_replace('/\'assessment_page_items\'\s*=>\s*\[.*?(?=\n\s*\]\s*,|\n\s*\]\s*$)/s', "'assessment_page_items' => " . $phpArray, $content);
file_put_contents($configFile, $content);
echo "Done replacing assessment_page_items!\n";
