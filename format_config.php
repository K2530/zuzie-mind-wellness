<?php
$data = require 'config/zuzie.php';
$jsonFiles = glob('*.json');
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
    'spst-20' => ['title' => 'แบบวัดความเครียดสวนปรุง (SPST-20)'],
    'depression-9q' => ['title' => 'แบบประเมินโรคซึมเศร้า (9Q)'],
    'resilience-rq' => ['title' => 'แบบประเมินพลังสุขภาพจิต (RQ)'],
    'st5' => ['title' => 'แบบประเมินความเครียด (ST-5)'],
];

$items = [];
foreach ($jsonFiles as $f) {
    if ($f == 'package.json' || $f == 'package-lock.json' || $f == 'composer.json') continue;
    $slug = str_replace('.json', '', $f);
    $d = json_decode(file_get_contents($f), true);
    $item = [
        'slug' => $slug,
        'title' => $meta[$slug]['title'] ?? $slug,
        'desc' => $meta[$slug]['desc'] ?? '',
        'icon' => 'selfworth',
        'metric' => 'คะแนน',
    ];
    if (isset($d['reverse_scoring'])) $item['reverse_scoring'] = $d['reverse_scoring'];
    if (isset($d['options'])) {
        $opts = [];
        foreach ($d['options'] as $k => $v) {
            if (is_array($v)) $opts[$v['score'] ?? $k] = $v['text'] ?? $v['label'] ?? '';
            else $opts[$k] = $v;
        }
        $item['options'] = $opts;
    }
    if (isset($d['bands'])) {
        $v1 = array_values($d['bands'])[0] ?? null;
        if ($v1 && isset($v1['label'])) {
            $item['bands'] = $d['bands'];
        }
    }
    if (isset($d['questions'])) {
        $qs = [];
        foreach ($d['questions'] as $q) {
            $qs[] = is_array($q) ? ($q['text'] ?? json_encode($q, JSON_UNESCAPED_UNICODE)) : $q;
        }
        $item['questions'] = $qs;
    }
    $items[] = $item;
}
$data['assessment_page_items'] = $items;

$str = var_export($data, true);
$str = preg_replace('/array\s*\(/', '[', $str);
$str = preg_replace('/\)/', ']', $str);
file_put_contents('config/zuzie.php', "<?php\n\nreturn " . $str . ";\n");
