<?php

declare(strict_types=1);

$navItems = [
    ['href' => 'index.php#home', 'key' => 'navHome'],
    ['href' => 'index.php#assessment', 'key' => 'navAssessment'],
    ['href' => 'index.php#services', 'key' => 'navServices'],
    ['href' => 'index.php#courses', 'key' => 'navCourses'],
    ['href' => 'videos.php', 'key' => 'navVideos'], 
    ['href' => 'index.php#hashtags', 'key' => 'navHashtags'],
    ['href' => 'index.php#articles', 'key' => 'navArticles'],
    ['href' => 'index.php#booking', 'key' => 'navBooking'],
    ['href' => 'index.php#contact', 'key' => 'navContact'],
];

$trustItems = [
    ['icon' => 'heart-hands', 'key' => 'stat1'],
    ['icon' => 'shield', 'key' => 'stat2'],
    ['icon' => 'lock', 'key' => 'stat3'],
    ['icon' => 'users', 'key' => 'stat4'],
    ['icon' => 'calendar', 'key' => 'stat5'],
    ['icon' => 'home', 'key' => 'stat6'],
];

$assessments = [
    ['key' => 'stress', 'desc' => 'stressDesc', 'pos' => 'object-[58%_42%]'],
    ['key' => 'depression', 'desc' => 'depressionDesc', 'pos' => 'object-[64%_46%]'],
    ['key' => 'anxiety', 'desc' => 'anxietyDesc', 'pos' => 'object-[70%_48%]'],
    ['key' => 'relationship', 'desc' => 'relationshipDesc', 'pos' => 'object-[78%_55%]'],
];

// 1. เพิ่ม ID และ Key สำหรับแปลภาษา (i18n) ในหมวดหมู่วิดีโอ
$videoCategories = [
    ['id' => 'all', 'label' => 'ทั้งหมด', 'key' => 'catAll'],
    ['id' => 'relationship', 'label' => 'ความสัมพันธ์', 'key' => 'catRelationship'],
    ['id' => 'depression', 'label' => 'ซึมเศร้า', 'key' => 'catDepression'],
    ['id' => 'anxiety', 'label' => 'ความวิตกกังวล', 'key' => 'catAnxiety'],
    ['id' => 'sleep', 'label' => 'นอนหลับ', 'key' => 'catSleep'],
    ['id' => 'burnout', 'label' => 'Burnout', 'key' => 'catBurnout'],
    ['id' => 'selfdev', 'label' => 'พัฒนาตัวเอง', 'key' => 'catSelfDev'],
];

// 2. จัดกลุ่มวิดีโอ (mock) โดยใส่ 'category' ให้ตรงกับ id ของหมวดหมู่ด้านบน
$videos = [
    ['title' => '5 สัญญาณว่าคุณกำลังเจอความสัมพันธ์เป็นพิษ', 'time' => '01:09', 'category' => 'relationship'],
    ['title' => 'วิธีพูดกับคนที่ทำร้ายจิตใจเรา', 'time' => '04:31', 'category' => 'relationship'],
    ['title' => 'เทคนิคจัดการความคิดลบ', 'time' => '03:41', 'category' => 'anxiety'],
    ['title' => 'ทำไมเราถึงเลิกคน Toxic ไม่ได้', 'time' => '00:35', 'category' => 'relationship'],
    ['title' => '5 วิธีเริ่มรักตัวเองในวันที่แย่ที่สุด', 'time' => '06:12', 'category' => 'selfdev'],
    ['title' => 'เยียวยาใจจากความสัมพันธ์ Toxic', 'time' => '03:30', 'category' => 'depression'],
    ['title' => 'Narcissist คืออะไร? ทำไมเราต้องระวัง', 'time' => '04:02', 'category' => 'relationship'],
    ['title' => 'ฝึกหายใจ 4-7-8 ลดความวิตกกังวล', 'time' => '03:30', 'category' => 'anxiety'],
];

$hashtags = [
    '#ความสัมพันธ์เป็นพิษ_zz',
    '#นาร์ซิสซิสต์_zz',
    '#เลิกไม่ได้แต่เจ็บ_zz',
    '#ซึมเศร้าzz',
    '#แพนิค_zz',
    '#วิตกกังวล_zz',
    '#นอนไม่หลับ_zz',
    '#overthinking_zz',
    '#selflove_zz',
    '#selfworth_zz',
    '#moveon_zz',
    '#healing_zz',
];