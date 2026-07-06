<?php

return [
  'nav_items' => 
  [
    [
      'href' => '/#home',
      'key' => 'navHome',
    ],
    [
      'href' => '/assessment',
      'key' => 'navAssessment',
    ],
    [
      'href' => '/services',
      'key' => 'navServices',
    ],
    [
      'href' => '/courses',
      'key' => 'navCourses',
    ],
    [
      'href' => '/videos',
      'key' => 'navVideos',
    ],
    [
      'href' => '/hashtags',
      'key' => 'navHashtags',
    ],
    [
      'href' => '/blogs',
      'key' => 'navArticles',
    ],
    [
      'href' => '/booking',
      'key' => 'navBooking',
    ],
    [
      'href' => '/contact',
      'key' => 'navContact',
    ],
  ],
  'trust_items' => 
  [
    [
      'icon' => 'heart-hands',
      'key' => 'stat1',
    ],
    [
      'icon' => 'shield',
      'key' => 'stat2',
    ],
    [
      'icon' => 'lock',
      'key' => 'stat3',
    ],
    [
      'icon' => 'users',
      'key' => 'stat4',
    ],
    [
      'icon' => 'calendar',
      'key' => 'stat5',
    ],
    [
      'icon' => 'home',
      'key' => 'stat6',
    ],
  ],
  'assessments' => 
  [
    [
      'key' => 'stress',
      'desc' => 'stressDesc',
      'pos' => 'object-[58%_42%]',
    ],
    [
      'key' => 'depression',
      'desc' => 'depressionDesc',
      'pos' => 'object-[64%_46%]',
    ],
    [
      'key' => 'anxiety',
      'desc' => 'anxietyDesc',
      'pos' => 'object-[70%_48%]',
    ],
    [
      'key' => 'relationship',
      'desc' => 'relationshipDesc',
      'pos' => 'object-[78%_55%]',
    ],
  ],
  'assessment_page_items' => 
  [
    [
      'slug' => '2p',
      'title' => 'แบบคัดกรองความเสี่ยงต่อการเกิดโรคเครียดหลังเหตุการณ์สะเทือนขวัญ (2P)',
      'desc' => 'ประเมินความเสี่ยงต่อการเกิดโรคเครียดหลังเหตุการณ์สะเทือนขวัญ (PTSD)',
      'icon' => 'selfworth',
      'metric' => 'คะแนน',
      'reverse_scoring' => [
        false,
        false,
      ],
      'options' => [
        'ไม่ใช่',
        'ใช่',
      ],
      'questions' => [
        [
          'text' => 'ในปัจจุบัน เหตุการณ์ดังกล่าวส่งผลให้เกิดอาการ เช่น พยายามหลีกเลี่ยงสถานการณ์ที่ทำให้คิดถึงเหตุการณ์ รู้สึกตื่นตัวระแวดระวังตลอดเวลา หรือหวนระลึกถึงหรือฝันถึงเหตุการณ์นั้นซ้ำๆ หรือไม่',
          'text_en' => 'Currently, the event results in symptoms such as trying to avoid situations that make one think about the event. Feeling alert and vigilant all the time Or do you relive or dream about the event repeatedly?',
        ],
        [
          'text' => 'ในปัจจุบัน อาการที่เกิดส่งผลต่อการดำเนินชีวิตเช่น การดูแลตัวเอง การทำงาน หรือความสัมพันธ์กับคนอื่นหรือไม่',
          'text_en' => 'At present, the symptoms affect the way people live their lives, such as Taking care of yourself, your work, or your relationships with others?',
        ],
      ],
      'title_en' => 'Depression Assessment 2 Questions (2Q]',
      'desc_en' => 'Initial depression assessment',
      'options_en' => [
        'no',
        'yes',
      ],
    ],
  ],
  'video_categories' => 
  [
    [
      'id' => 'all',
      'label' => 'ทั้งหมด',
      'key' => 'catAll',
    ],
    [
      'id' => 'relationship',
      'label' => 'ความสัมพันธ์',
      'key' => 'catRelationship',
    ],
    [
      'id' => 'depression',
      'label' => 'ซึมเศร้า',
      'key' => 'catDepression',
    ],
    [
      'id' => 'anxiety',
      'label' => 'ความวิตกกังวล',
      'key' => 'catAnxiety',
    ],
    [
      'id' => 'sleep',
      'label' => 'นอนหลับ',
      'key' => 'catSleep',
    ],
    [
      'id' => 'burnout',
      'label' => 'Burnout',
      'key' => 'catBurnout',
    ],
    [
      'id' => 'selfdev',
      'label' => 'พัฒนาตัวเอง',
      'key' => 'catSelfDev',
    ],
  ],
  'videos' => 
  [
    [
      'title' => '5 สัญญาณว่าคุณกำลังเจอความสัมพันธ์เป็นพิษ',
      'time' => '01:09',
      'category' => 'relationship',
      'source' => 'YouTube',
    ],
    [
      'title' => 'วิธีพูดกับคนที่ทำร้ายจิตใจเรา',
      'time' => '04:31',
      'category' => 'relationship',
      'source' => 'YouTube',
    ],
    [
      'title' => 'เทคนิคจัดการความคิดลบ',
      'time' => '03:41',
      'category' => 'anxiety',
      'source' => 'TikTok',
    ],
    [
      'title' => 'ทำไมเราถึงเลิกคน Toxic ไม่ได้',
      'time' => '00:35',
      'category' => 'relationship',
      'source' => 'Instagram',
    ],
    [
      'title' => '5 วิธีเริ่มรักตัวเองในวันที่แย่ที่สุด',
      'time' => '06:12',
      'category' => 'selfdev',
      'source' => 'YouTube',
    ],
    [
      'title' => 'เยียวยาใจจากความสัมพันธ์ Toxic',
      'time' => '03:30',
      'category' => 'depression',
      'source' => 'Facebook',
    ],
    [
      'title' => 'Narcissist คืออะไร? ทำไมเราต้องระวัง',
      'time' => '04:02',
      'category' => 'relationship',
      'source' => 'YouTube',
    ],
    [
      'title' => 'ฝึกหายใจ 4-7-8 ลดความวิตกกังวล',
      'time' => '03:30',
      'category' => 'anxiety',
      'source' => 'TikTok',
    ],
  ],
  'hashtags' => 
  [
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
  ],
  'hashtag_categories' => 
  [
    [
      'title' => 'ความสัมพันธ์',
      'bg' => 'bg-[#faeed6]',
      'tags' => [
        '#ความสัมพันธ์เป็นพิษ_zz',
        '#นาร์ซิสซิสต์_zz',
        '#เลิกไม่ได้_zz',
        '#รักตัวเอง_zz',
      ],
    ],
    [
      'title' => 'สุขภาพใจ',
      'bg' => 'bg-[#eef3ed]',
      'tags' => [
        '#ซึมเศร้าzz',
        '#โรคซึมเศร้า',
        '#แพนิค_zz',
        '#วิตกกังวล_zz',
        '#นอนไม่หลับ_zz',
      ],
    ],
    [
      'title' => 'พัฒนาตัวเอง',
      'bg' => 'bg-[#f8ebf1]',
      'tags' => [
        '#selfworth_zz',
        '#boundaries_zz',
        '#healing_zz',
        '#moveon_zz',
      ],
    ],
    [
      'title' => 'อื่น ๆ',
      'bg' => 'bg-[#f5f5f5]',
      'tags' => [
        '#burnout_zz',
        '#overthinking_zz',
        '#trauma_zz',
      ],
    ],
  ],
  'courses' => 
  [
    [
      'title' => 'หลุดจากความสัมพันธ์ที่ทำร้ายใจ',
      'desc' => 'เยียวยาใจและสร้างชีวิตใหม่อย่างมั่นคง',
      'badge' => 'แนะนำ',
      'price' => '2,590',
      'old_price' => '3,590',
      'image' => NULL,
    ],
    [
      'title' => 'รักตัวเองเป็น ไม่เจ็บซ้ำเดิม',
      'desc' => 'สร้างคุณค่าและความมั่นใจจากภายใน',
      'badge' => NULL,
      'price' => '2,590',
      'old_price' => '3,590',
      'image' => 'assets/images/hero-woman-tea.png',
    ],
    [
      'title' => 'จัดการความคิดลบและความกังวล',
      'desc' => 'เทคนิคทางจิตวิทยาเพื่อการหยุดคิดวนที่ได้ผลจริง',
      'badge' => NULL,
      'price' => '1,890',
      'old_price' => '2,590',
      'image' => 'assets/images/hero-woman-tea.png',
    ],
    [
      'title' => 'เยียวยาใจจากเด็กในตัวคุณ',
      'desc' => 'กลับมารับรู้และโอบกอดตัวเองในอดีต',
      'badge' => NULL,
      'price' => '2,590',
      'old_price' => '3,590',
      'image' => 'assets/images/hero-woman-tea.png',
    ],
  ],
];
