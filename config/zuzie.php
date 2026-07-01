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
      'title' => 'แบบประเมินโรคซึมเศร้า 2 คำถาม (2Q]',
      'desc' => 'ประเมินภาวะซึมเศร้าเบื้องต้น',
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
    [
      'slug' => '4-disease',
      'title' => 'แบบสังเกตพฤติกรรม 4 โรค',
      'desc' => 'สังเกตพฤติกรรม',
      'icon' => 'selfworth',
      'metric' => 'คะแนน',
      'reverse_scoring' => [
      ],
      'options' => [
        'ไม่ใช่',
        'ใช่',
      ],
      'questions' => [
        [
          'text' => 'เรียนรู้บทเรียนได้ช้ากว่าบุคคลอื่นในห้อง',
          'text_en' => 'Learns lessons more slowly than other people in the room',
        ],
        [
          'text' => 'ลืมง่าย จำในสิ่งที่เพิ่งเรียนไปไม่ได้ ต้องเรียนซ้ำๆ',
          'text_en' => 'Forgets easily, unable to remember what has just been learned. Must study repeatedly',
        ],
        [
          'text' => 'กล้ามเนื้อมือไม่แข็งแรง ทำงานที่ใช้มือดูงุ่มง่าม',
          'text_en' => 'hand muscles are not strong Doing work using your hands seems clumsy.',
        ],
        [
          'text' => 'สรุปใจความสำคัญของเนื้อหาที่เรียนไม่ได้',
          'text_en' => 'Summarize the main points of the content that cannot be learned.',
        ],
        [
          'text' => 'ไหวพริบในการแก้ปัญหาเฉพาะหน้าไม่สมวัย',
          'text_en' => 'His wit in solving immediate problems is inappropriate for his age.',
        ],
        [
          'text' => 'ตอบสนองต่อสิ่งต่าง ๆ ช้า',
          'text_en' => 'Slow to respond to things',
        ],
        [
          'text' => 'ชอบเล่นกับเด็กที่มีอายุน้อยกว่า',
          'text_en' => 'Likes to play with younger children.',
        ],
        [
          'text' => 'ช่วยเหลือตนเองในกิจวัตรประจำวันได้น้อย',
          'text_en' => 'Less able to help oneself in daily activities',
        ],
        [
          'text' => 'การใช้ภาษาไม่สมวัย',
          'text_en' => 'Using inappropriate language',
        ],
        [
          'text' => 'เล่นไม่ค่อยทันเพื่อน',
          'text_en' => 'I can\'t play fast enough with my friends.',
        ],
        [
          'text' => 'ดูฉลาดหรือปกติในด้านอื่นๆ ยกเว้นเรื่องเรียน',
          'text_en' => 'Looks smart or normal in other ways Except for studying',
        ],
        [
          'text' => 'อ่านผิดบ่อย ๆ อ่านไม่คล่อง หรืออ่านไม่ได้',
          'text_en' => 'Frequently reads incorrectly, does not read fluently, or is unable to read',
        ],
        [
          'text' => 'อ่านข้ามคำ อ่านเพิ่มคำ',
          'text_en' => 'Read across words. Read and add words.',
        ],
        [
          'text' => 'อ่านแล้วจับใจความสำคัญไม่ได้',
          'text_en' => 'Read and can\'t understand the main idea.',
        ],
        [
          'text' => 'เขียนพยัญชนะหรือตัวเลขที่คล้ายกันสลับกัน เช่น ม - น , ด – ค',
          'text_en' => 'Write similar consonants or numbers alternately, such as M - N, D - C.',
        ],
        [
          'text' => 'เขียนผิด เขียนไม่คล่องบ่อย ๆ',
          'text_en' => 'Make mistakes, often do not write fluently',
        ],
        [
          'text' => 'สะกดคำตามการผสมเสียงไม่ได้ เขียนคำต่างๆ จากการจำ',
          'text_en' => 'Can\'t spell words based on sound combinations. Write words from memory.',
        ],
        [
          'text' => 'ไม่เข้าใจค่าของจำนวน เช่น หน่วย สิบ ร้อย พัน หมื่น',
          'text_en' => 'Don\'t understand the value of numbers, such as units, tens, hundreds, thousands, ten thousand.',
        ],
        [
          'text' => 'คำนวณ บวก ลบ คูณ หาร ไม่ได้',
          'text_en' => 'Can\'t calculate addition, subtraction, multiplication, and division.',
        ],
        [
          'text' => 'ไม่เข้าใจหลักการพื้นฐานทางคณิตศาสตร์เช่น การเข้าใจความหมายของสัญลักษณ์ เวลา ทิศทาง ขนาด ระยะทาง การจัดลำดับการเปรียบเทียบ',
          'text_en' => 'Not understanding basic mathematical principles such as Understanding the meaning of symbols: time, direction, size, distance, ordering comparisons',
        ],
        [
          'text' => 'ซนมาก อยู่ไม่นิ่ง ยุกยิกตลอดเวลา',
          'text_en' => 'Very naughty, restless, always fidgeting.',
        ],
        [
          'text' => 'พูดมาก',
          'text_en' => 'Talk a lot',
        ],
        [
          'text' => 'ชอบลุกจากที่นั่งเวลาอยู่ในห้องเรียน',
          'text_en' => 'Likes to get up from his seat when in the classroom.',
        ],
        [
          'text' => 'เหม่อบ่อย ๆ ใจลอย ต้องคอยเรียก',
          'text_en' => 'Often absent-minded, distracted, must keep calling',
        ],
        [
          'text' => 'ขี้ลืม ของใช้ส่วนตัวหายบ่อย ๆ',
          'text_en' => 'Forgetful, personal items often lost',
        ],
        [
          'text' => 'ทำงานไม่เรียบร้อย ไม่รอบคอบ',
          'text_en' => 'Not working properly, not careful',
        ],
        [
          'text' => 'ไม่มีสมาธิในการทำงาน หรือทำได้เพียงช่วงสั้น ๆ',
          'text_en' => 'Can\'t concentrate on work or can only be done for a short period of time',
        ],
        [
          'text' => 'ทำงานช้า ทำงานไม่เสร็จ แต่ถ้ามีคนประกบจะทำได้เร็วขึ้น',
          'text_en' => 'Working slowly, not completing work But if there are people involved, it will be faster.',
        ],
        [
          'text' => 'รอคอยไม่ได้',
          'text_en' => 'Can\'t wait.',
        ],
        [
          'text' => 'ใจร้อน ควบคุมอารมณ์ไม่ค่อยได้',
          'text_en' => 'Impatient, unable to control emotions',
        ],
        [
          'text' => 'ชอบแยกตัวอยู่คนเดียว',
          'text_en' => 'like to be separated and be alone',
        ],
        [
          'text' => 'สบตาเพียงช่วงสั้น ๆ หรือไม่สบตา เวลาพูดกับคนอื่น',
          'text_en' => 'Make eye contact only briefly or do not make eye contact when talking to others.',
        ],
        [
          'text' => 'เมื่อเล่นกับเด็กอื่นๆ ไม่เข้าใจกติกา ไม่เข้าใจวิธีการเล่น',
          'text_en' => 'When playing with other children Don\'t understand the rules Don\'t understand how to play',
        ],
        [
          'text' => 'ไม่มีเพื่อนสนิท หรือมีเพื่อนน้อย',
          'text_en' => 'no close friends or have few friends',
        ],
        [
          'text' => 'ไม่สามารถร่วมสนทนากับเพื่อน หรือไม่สามารถต่อบทสนทนากับผู้อื่นได้',
          'text_en' => 'Unable to chat with friends or unable to carry on a conversation with others',
        ],
        [
          'text' => 'มีระดับการใช้ภาษาที่ต่ำกว่าวัย',
          'text_en' => 'Have a lower level of language use than their age',
        ],
        [
          'text' => 'มักพูดแต่สิ่งที่ตนเองสนใจ ไม่สนใจเมื่อเพื่อนพูดเรื่องอื่นๆ',
          'text_en' => 'They often talk about things that interest them. Ignore when friends talk about other things.',
        ],
        [
          'text' => 'ไม่เข้าใจมุขตลก คำพังเพย คำประชด',
          'text_en' => 'Don\'t understand jokes, aphorisms, sarcasm',
        ],
        [
          'text' => 'ไม่ชอบการเปลี่ยนแปลง ชอบทำกิจวัตรเดิมๆซ้ำๆ',
          'text_en' => 'don\'t like change Likes to repeat the same routine',
        ],
        [
          'text' => 'มีพฤติกรรมกระตุ้นตนเอง สะบัดมือ เล่นมือ',
          'text_en' => 'Has self-stimulating behavior, shaking hands, playing with hands',
        ],
      ],
      'title_en' => 'Behavior observation form for 4 diseases',
      'desc_en' => 'observe behavior',
      'options_en' => [
        'no',
        'yes',
      ],
    ],
    [
      'slug' => '8q',
      'title' => 'แบบประเมินแนวโน้มการฆ่าตัวตาย (8Q]',
      'desc' => 'ประเมิน 8Q',
      'icon' => 'selfworth',
      'metric' => 'คะแนน',
      'reverse_scoring' => [
      ],
      'bands' => [
        [
          'min' => 0,
          'max' => 0,
          'label' => 'ไม่มีแนวโน้มฆ่าตัวตายในปัจจุบัน',
        ],
        [
          'min' => 1,
          'max' => 8,
          'label' => 'มีแนวโน้มที่จะฆ่าตัวตายในปัจจุบัน ระดับน้อย',
        ],
        [
          'min' => 9,
          'max' => 16,
          'label' => 'มีแนวโน้มที่จะฆ่าตัวตายในปัจจุบัน ระดับปานกลาง',
        ],
        [
          'min' => 17,
          'max' => NULL,
          'label' => 'มีแนวโน้มที่จะฆ่าตัวตายในปัจจุบัน ระดับรุนแรง',
        ],
      ],
      'questions' => [
        [
          'text' => 'คิดอยากตาย หรือ คิดว่าตายไปจะดีกว่า',
          'text_en' => 'Do you want to die or do you think it would be better to die?',
        ],
        [
          'text' => 'อยากทำร้ายตัวเอง หรือ ทำให้ตัวเองบาดเจ็บ',
          'text_en' => 'Want to hurt yourself or injure yourself.',
        ],
        [
          'text' => 'คิดเกี่ยวกับการฆ่าตัวตาย',
          'text_en' => 'thinking about suicide',
        ],
        [
          'text' => '(ถ้าตอบว่าคิดเกี่ยวกับการฆ่าตัวตายให้ถามต่อ] .... ท่านสามารถควบคุมความอยากฆ่าตัวตายที่ท่านคิดอยู่นั้นได้หรือไม่ หรือบอกได้ไหมว่าคงจะไม่ทำตามความคิดนั้นในขณะนี้',
          'text_en' => '[If you answer that you are thinking about suicide, ask further] .... Are you able to control the suicidal urges that you are thinking about? Or can you say that you probably won\'t act on that idea right now?',
        ],
        [
          'text' => 'มีแผนการที่จะฆ่าตัวตาย',
          'text_en' => 'have a plan to commit suicide',
        ],
        [
          'text' => 'ได้เตรียมการที่จะทำร้ายตนเองหรือเตรียมการจะฆ่าตัวตายโดยตั้งใจว่าจะให้ตายจริง ๆ',
          'text_en' => 'Have prepared to harm yourself or prepared to commit suicide with the intention of actually dying',
        ],
        [
          'text' => 'ได้ทำให้ตนเองบาดเจ็บแต่ไม่ตั้งใจที่จะทำให้เสียชีวิต',
          'text_en' => 'He had injured himself but did not intend to cause death.',
        ],
        [
          'text' => 'ได้พยายามฆ่าตัวตายโดยคาดหวัง/ตั้งใจที่จะให้ตาย',
          'text_en' => 'Attempted suicide with the expectation/intent to die.',
        ],
        [
          'text' => 'ตลอดชีวิตที่ผ่านมา ท่านเคยพยายามฆ่าตัวตาย',
          'text_en' => 'throughout the past life Have you ever tried to commit suicide?',
        ],
      ],
      'title_en' => 'Suicidal Tendency Assessment Scale (8Q]',
      'desc_en' => 'Evaluate 8Q',
    ],
    [
      'slug' => 'autism',
      'title' => 'แบบคัดกรองภาวะออทิสติก',
      'desc' => 'คัดกรองออทิสติก',
      'icon' => 'selfworth',
      'metric' => 'คะแนน',
      'reverse_scoring' => [
        1,
        2,
        3,
        4,
        5,
        11,
        12,
        13,
        14,
        15,
        21,
        22,
        23,
        24,
        25,
      ],
      'options' => [
        'ใช่ / ทำบ่อย',
        'ไม่ใช่ / ไม่ค่อยทำ',
      ],
      'questions' => [
        [
          'text' => 'ตอบสนอง เช่น หันมามองทันทีที่คุณเรียกชื่อเขา',
          'text_en' => 'React, such as turning to look at you as soon as you call his name.',
        ],
        [
          'text' => 'เล่นสมมุติเป็น เช่น ทำท่าป้อนอาหารให้ตุ๊กตา,เล่นขายของ หรือสมมุติในสิ่งอื่นๆ',
          'text_en' => 'Pretend play, such as pretending to feed dolls or play selling things. or assuming other things',
        ],
        [
          'text' => 'ใช้นิ้วของเขา ชี้ ไปที่สิ่งของเพื่อแสดงว่าเขาสนใจหรือต้องการของสิ่งนั้น',
          'text_en' => 'Use his finger to point at an object to show that he is interested or wants it.',
        ],
        [
          'text' => 'สนใจ อยากเข้าไปเล่นกับเด็กคนอื่น เวลาไปโรงเรียนหรืออยู่ในสนามเด็กเล่น',
          'text_en' => 'Interested in wanting to play with other children When going to school or in the playground',
        ],
        [
          'text' => 'ทำท่าทางเลียนแบบผู้ใหญ่ เช่น แต่งหน้า หวีผม โกนหนวด เตรียมตัวไปทำงาน',
          'text_en' => 'Act like an adult, such as putting on makeup, combing hair, shaving, getting ready for work.',
        ],
        [
          'text' => 'ชอบที่จะเล่นคนเดียว หรืออยู่คนเดียวตามลำพัง',
          'text_en' => 'like to play alone or alone',
        ],
        [
          'text' => 'เป็นเด็กหน้าเฉย ไม่ค่อยแสดงอารมณ์',
          'text_en' => 'I\'m a straight-faced child. rarely shows emotion',
        ],
        [
          'text' => 'ทำท่าทางเหมือนไม่ได้ฟังคุณเวลาคุณพูดกับเขา',
          'text_en' => 'Acts like he isn\'t listening when you talk to him.',
        ],
        [
          'text' => 'สนใจที่จะเล่นกับเด็กคนอื่นน้อยมาก',
          'text_en' => 'Very little interest in playing with other children',
        ],
        [
          'text' => 'ชอบทำตาลอย หรือจ้องมองโดยไร้จุดหมาย',
          'text_en' => 'Likes to wander or stare aimlessly',
        ],
        [
          'text' => 'รู้จักแบ่งขนม หรือของเล่นให้เด็กคนอื่น',
          'text_en' => 'Know how to share snacks or toys for other children',
        ],
        [
          'text' => 'พยักหน้าหรือส่ายหน้า เพื่อบอกกับคุณว่า เอาหรือไม่เอา',
          'text_en' => 'Nod or shake your head To tell you that To take it or not?',
        ],
        [
          'text' => 'พยายามทำให้คุณสนใจในสิ่งที่เขากำลังทำอยู่ โดยการเรียกคุณ หรือยื่นของสิ่งนั้นให้คุณดู',
          'text_en' => 'Try to keep you interested in what he\'s doing. by calling you or handing that thing over to you to see',
        ],
        [
          'text' => 'ตอบสนองอย่างเหมาะสม เช่น มองหน้า , สบตา , ยิ้ม หรือยื่นของเล่นให้เวลามีเด็กอื่นเดินเข้ามาหา',
          'text_en' => 'Respond appropriately, such as looking at someone\'s face, making eye contact, smiling, or handing over a toy when another child approaches.',
        ],
        [
          'text' => 'เลียนแบบท่าทางคุณ เช่น แลบลิ้นตาม เวลาที่คุณแลบลิ้นใส่เขา',
          'text_en' => 'Imitate your gestures, such as sticking out your tongue when you stick your tongue out at him.',
        ],
        [
          'text' => 'ยังบอกไม่ได้ว่าต้องการอะไร ไม่ว่าจะด้วยการพูดหรือชี้',
          'text_en' => 'Still can\'t say what I want. Either by speaking or pointing',
        ],
        [
          'text' => 'ทำท่าทางแปลกๆ ซ้ำๆ เช่น โยกตัว , เดินเขย่งเท้า , สะบัดมือ',
          'text_en' => 'Repeated strange gestures such as rocking your body, walking on tiptoes, or flapping your hands.',
        ],
        [
          'text' => 'จับมือคุณไปหยิบของที่เขาอยากได้ โดยไม่มองหน้าคุณ',
          'text_en' => 'Take your hand and pick up the things he wants. without looking at your face',
        ],
        [
          'text' => 'มีความสนใจในของเล่นไม่กี่ชิ้น หรือสิ่งต่าง ๆ ไม่กี่เรื่อง',
          'text_en' => 'Interested in a few toys or things',
        ],
        [
          'text' => 'เล่นของเล่นไม่เป็น เช่น มักจะเอามาเคาะ , โยน , ถือไปมา หรือเอาเข้าปาก',
          'text_en' => 'Doesn\'t know how to play with toys, such as often knocking them over, throwing them, carrying them around, or putting them in the mouth',
        ],
        [
          'text' => 'มองหน้า สบตาคุณ เวลาพูดคุยหรือเล่นกับเขา',
          'text_en' => 'Look at his face, make eye contact when talking or playing with him.',
        ],
        [
          'text' => 'ใช้นิ้วชี้ของเขา ชี้ให้คุณมองของบางสิ่งบางอย่างที่อยู่ไกลออกไป',
          'text_en' => 'Use his index finger. Point out your view of something that is far away.',
        ],
        [
          'text' => 'ยิ้มให้พ่อแม่ เมื่อเห็นพ่อแม่มาแต่ไกล',
          'text_en' => 'Smile at your parents When you see your parents coming from far away',
        ],
        [
          'text' => 'รู้จักปลอบเด็กคนอื่น เวลาเด็กคนอื่นไม่สบายใจ หรือได้รับบาดเจ็บ',
          'text_en' => 'Know how to comfort other children When other children are uncomfortable or injured',
        ],
        [
          'text' => 'มองสิ่งของที่คุณกำลังมองอยู่ หรือสนใจในสิ่งเดียวกันกับสิ่งที่คุณกำลังสนใจ',
          'text_en' => 'Look at the object you are looking at. or are interested in the same things that you are interested in',
        ],
      ],
      'title_en' => 'Autism screening form',
      'desc_en' => 'Autism screening',
      'options_en' => [
        'Yes / do it often',
        'Not / rarely do',
      ],
    ],
    [
      'slug' => 'burnout',
      'title' => 'แบบประเมินภาวะหมดไฟ (Burnout]',
      'desc' => 'ประเมินความเหนื่อยล้าในการทำงาน',
      'icon' => 'selfworth',
      'metric' => 'คะแนน',
      'reverse_scoring' => [
        4,
        7,
        9,
        12,
        17,
        18,
        19,
        21,
      ],
      'options' => [
        'ไม่เคยมีความรู้สึกเช่นนั้นเลย',
        'ปีละ 2-3 ครั้ง',
        'เดือนละ 1 ครั้ง',
        'เดือนละ 2-3 ครั้ง',
        'สัปดาห์ละ 1 ครั้ง',
        'สัปดาห์ละ 2-3 ครั้ง',
        'ทุก ๆ วัน',
      ],
      'questions' => [
        [
          'text' => 'ฉันรู้สึกห่อเหี่ยวจิตใจกับงานที่ทำอยู่',
          'text_en' => 'I feel depressed about the work I\'m doing.',
        ],
        [
          'text' => 'ฉันจะรู้สึกหมดหวังเมื่อถึงเวลาเลิกงาน',
          'text_en' => 'I would feel hopeless when it was time to leave work.',
        ],
        [
          'text' => 'ฉันรู้สึกอ่อนเพลียตอนตื่นนอนและตอนเข้าทำงาน',
          'text_en' => 'I feel tired when I wake up and when I go to work.',
        ],
        [
          'text' => 'ฉันสามารถเข้าใจความรู้สึกนึกคิดของผู้อื่นได้โดยง่าย',
          'text_en' => 'I can easily understand the feelings of others.',
        ],
        [
          'text' => 'ฉันปฏิบัติต่อผู้รับบริการราวกับเขาไม่มีชีวิตจิตใจ',
          'text_en' => 'I treat clients as if they have no soul.',
        ],
        [
          'text' => 'การทำงานบริการผู้อื่นตลอดทั้งวันทำให้ฉันรู้สึกเครียด',
          'text_en' => 'Working all day in the service of others makes me feel stressed out.',
        ],
        [
          'text' => 'ฉันรู้สึกว่าตนเองสามารถแก้ไขปัญหาต่าง ๆ ให้ผู้อื่นได้อย่างมีประสิทธิภาพ',
          'text_en' => 'I feel like I can effectively solve problems for others.',
        ],
        [
          'text' => 'ฉันรู้สึกเหนื่อยหน่ายกับงานที่ทำอยู่',
          'text_en' => 'I feel burnt out from my job.',
        ],
        [
          'text' => 'ฉันรู้สึกว่าได้ทำให้เกิดการเปลี่ยนแปลงที่ดีขึ้นในชีวิตของผู้รับบริการ จากการทำงานของฉัน',
          'text_en' => 'I feel like I have made a change for the better in the lives of my clients. from my work',
        ],
        [
          'text' => 'ฉันกลายเป็นคนแข็งกระด้าง ตั้งแต่เริ่มทำงานนี้',
          'text_en' => 'I became a hardened person. Since starting this work',
        ],
        [
          'text' => 'ฉันกังวลใจว่างานที่ทำอยู่ ทำให้ฉันเป็นคนเจ้าอารมณ์',
          'text_en' => 'I\'m worried about the work I\'m doing. Makes me a moody person',
        ],
        [
          'text' => 'ฉันรู้สึกเต็มเปี่ยมไปด้วยพละกำลัง',
          'text_en' => 'I feel full of strength.',
        ],
        [
          'text' => 'ฉันรู้สึกคับข้องใจจากการทำงาน',
          'text_en' => 'I feel frustrated at work.',
        ],
        [
          'text' => 'ฉันรู้สึกว่ากำลังทำงานในหน้าที่ที่หนักเกินไป',
          'text_en' => 'I feel like I\'m working too hard.',
        ],
        [
          'text' => 'ฉันรู้สึกไม่อยากใส่ใจต่อพฤติกรรมของผู้รับบริการบางคน',
          'text_en' => 'I don\'t feel like paying attention to the behavior of some clients.',
        ],
        [
          'text' => 'การทำงานเกี่ยวข้องกับคนอื่นโดยตรงทำให้ฉันรู้สึกเครียดมากเกินไป',
          'text_en' => 'Working directly with other people causes me too much stress.',
        ],
        [
          'text' => 'ฉันสามารถสร้างบรรยากาศที่เป็นกันเองกับผู้รับบริการได้ไม่ยาก',
          'text_en' => 'I can easily create a friendly atmosphere with my service recipients.',
        ],
        [
          'text' => 'ฉันรู้สึกเป็นสุขภายหลังจากให้บริการกับผู้รับบริการอย่างใกล้ชิด',
          'text_en' => 'I feel happy after serving closely with the clients.',
        ],
        [
          'text' => 'ฉันรู้สึกว่าได้สร้างสิ่งที่มีคุณค่ามากให้กับงานที่ฉันทำอยู่',
          'text_en' => 'I feel like I\'ve brought something very valuable to the work I\'m doing.',
        ],
        [
          'text' => 'ฉันรู้สึกหมดความอดทนกับงานที่ทำอยู่',
          'text_en' => 'I feel impatient with the work I\'m doing.',
        ],
        [
          'text' => 'ในการทำงาน ฉันสามารถเผชิญปัญหาทางอารมณ์ได้อย่างสงบนิ่ง',
          'text_en' => 'At work, I can face emotional problems calmly.',
        ],
        [
          'text' => 'ฉันรู้สึกว่าที่ผู้ร่วมงานและผู้รับบริการตำหนิฉันในส่วนที่เป็นปัญหาของเขา',
          'text_en' => 'I feel that co-workers and clients blame me for their problems.',
        ],
      ],
      'title_en' => 'Burnout assessment form',
      'desc_en' => 'Assess work fatigue',
      'options_en' => [
        'Never had a feeling like that',
        '2-3 times a year',
        '1 time per month',
        '2-3 times a month',
        '1 time a week',
        '2-3 times a week',
        'every day',
      ],
    ],
    [
      'slug' => 'cdi',
      'title' => 'แบบประเมิน CDI ในเด็ก',
      'desc' => 'ประเมินภาวะซึมเศร้าในเด็ก',
      'icon' => 'selfworth',
      'metric' => 'คะแนน',
      'reverse_scoring' => [
        2,
        5,
        7,
        8,
        10,
        11,
        13,
        15,
        16,
        18,
        21,
        24,
        25,
      ],
      'questions' => [
        [
          'text' => '{"id":1,"options":["ฉันรู้สึกเศร้านานๆ ครั้ง","ฉันรู้สึกเศร้าบ่อยครั้ง","ฉันรู้สึกเศร้าตลอดเวลา"]}',
          'text_en' => '{"id":1,"options":["I feel sad for a long time. times","I often feel sad","I feel sad all the time"]}',
        ],
        [
          'text' => '{"id":2,"options":["อะไร ๆ ก็มีอุปสรรคไปเสียหมด","ฉันไม่แน่ใจว่าสิ่งต่างๆ จะเป็นไปด้วยดี","สิ่งต่างๆ จะเป็นไปด้วยดีสำหรับฉัน"]}',
          'text_en' => '{"id":2,"options":["Everything has obstacles.","I\'m not sure how things are. will go well","Things will go well." It will go well for me."]}',
        ],
        [
          'text' => '{"id":3,"options":["ฉันทำอะไรๆ ได้ค่อนข้างดี","ฉันทำผิดพลาดหลายอย่าง","ฉันทำอะไรผิดพลาดไปหมด"]}',
          'text_en' => '{"id":3,"options":["ฉันทำอะไรๆ ได้ค่อนข้างดี","ฉันทำผิดพลาดหลายอย่าง","ฉันทำอะไรผิดพลาดไปหมด"]}',
        ],
        [
          'text' => '{"id":4,"options":["ฉันรู้สึกสนุกกับหลายสิ่งหลายอย่าง","ฉันรู้สึกสนุกกับบางสิ่งบางอย่าง","ไม่มีอะไรสนุกสนานเลยสำหรับฉัน"]}',
          'text_en' => '{"id":4,"options":["ฉันรู้สึกสนุกกับหลายสิ่งหลายอย่าง","ฉันรู้สึกสนุกกับบางสิ่งบางอย่าง","ไม่มีอะไรสนุกสนานเลยสำหรับฉัน"]}',
        ],
        [
          'text' => '{"id":5,"options":["ฉันทำตัวไม่ดีเสมอ","ฉันทำตัวไม่ดีบ่อยครั้ง","ฉันทำตัวไม่ดีนานๆ ที"]}',
          'text_en' => '{"id":5,"options":["ฉันทำตัวไม่ดีเสมอ","ฉันทำตัวไม่ดีบ่อยครั้ง","ฉันทำตัวไม่ดีนานๆ ที"]}',
        ],
        [
          'text' => '{"id":6,"options":["นานๆ ครั้งฉันจะคิดถึงสิ่งไม่ดีที่อาจเกิดขึ้นกับฉัน","ฉันวิตกว่าจะมีสิ่งไม่ดีเกิดขึ้นกับฉัน","จะต้องมีสิ่งเลวร้ายเกิดขึ้นกับฉันแน่ๆ"]}',
          'text_en' => '{"id":6,"options":["นานๆ ครั้งฉันจะคิดถึงสิ่งไม่ดีที่อาจเกิดขึ้นกับฉัน","ฉันวิตกว่าจะมีสิ่งไม่ดีเกิดขึ้นกับฉัน","จะต้องมีสิ่งเลวร้ายเกิดขึ้นกับฉันแน่ๆ"]}',
        ],
        [
          'text' => '{"id":7,"options":["ฉันเกลียดตัวเอง","ฉันไม่ชอบตัวเอง","ฉันชอบตัวเอง"]}',
          'text_en' => '{"id":7,"options":["ฉันเกลียดตัวเอง","ฉันไม่ชอบตัวเอง","ฉันชอบตัวเอง"]}',
        ],
        [
          'text' => '{"id":8,"options":["สิ่งเลวร้ายทั้งหมดที่เกิดขึ้นเป็นความผิดของฉัน","สิ่งเลวร้ายหลายสิ่งที่เกิดขึ้นเป็นความผิดของฉัน","สิ่งเลวร้ายที่เกิดขึ้นมักไม่ใช่ความผิดของฉัน"]}',
          'text_en' => '{"id":8,"options":["สิ่งเลวร้ายทั้งหมดที่เกิดขึ้นเป็นความผิดของฉัน","สิ่งเลวร้ายหลายสิ่งที่เกิดขึ้นเป็นความผิดของฉัน","สิ่งเลวร้ายที่เกิดขึ้นมักไม่ใช่ความผิดของฉัน"]}',
        ],
        [
          'text' => '{"id":9,"options":["ฉันไม่คิดจะฆ่าตัวตาย","ฉันคิดถึงการฆ่าตัวตาย","ฉันต้องการฆ่าตัวตาย"]}',
          'text_en' => '{"id":9,"options":["ฉันไม่คิดจะฆ่าตัวตาย","ฉันคิดถึงการฆ่าตัวตาย","ฉันต้องการฆ่าตัวตาย"]}',
        ],
        [
          'text' => '{"id":10,"options":["ฉันรู้สึกอยากร้องไห้ทุกวัน","ฉันรู้สึกอยากร้องไห้บ่อยครั้ง","ฉันรู้สึกอยากร้องไห้นาน ๆ ครั้ง"]}',
          'text_en' => '{"id":10,"options":["ฉันรู้สึกอยากร้องไห้ทุกวัน","ฉันรู้สึกอยากร้องไห้บ่อยครั้ง","ฉันรู้สึกอยากร้องไห้นาน ๆ ครั้ง"]}',
        ],
        [
          'text' => '{"id":11,"options":["ฉันรู้สึกหงุดหงิดใจตลอดเวลา","ฉันรู้สึกหงุดหงิดใจบ่อยครั้ง","ฉันรู้สึกหงุดหงิดใจนาน ๆ ครั้ง"]}',
          'text_en' => '{"id":11,"options":["ฉันรู้สึกหงุดหงิดใจตลอดเวลา","ฉันรู้สึกหงุดหงิดใจบ่อยครั้ง","ฉันรู้สึกหงุดหงิดใจนาน ๆ ครั้ง"]}',
        ],
        [
          'text' => '{"id":12,"options":["ฉันชอบอยู่กับคนอื่น","ฉันไม่ค่อยชอบอยู่กับคนอื่น","ฉันไม่ต้องการอยู่กับใครเลย"]}',
          'text_en' => '{"id":12,"options":["ฉันชอบอยู่กับคนอื่น","ฉันไม่ค่อยชอบอยู่กับคนอื่น","ฉันไม่ต้องการอยู่กับใครเลย"]}',
        ],
        [
          'text' => '{"id":13,"options":["ฉันไม่สามารถตัดสินใจอะไรต่างๆ ด้วยตนเอง","ฉันตัดสินใจเรื่องต่าง ๆ ได้ลำบาก","ฉันตัดสินใจเรื่องต่าง ๆ ได้ง่าย"]}',
          'text_en' => '{"id":13,"options":["ฉันไม่สามารถตัดสินใจอะไรต่างๆ ด้วยตนเอง","ฉันตัดสินใจเรื่องต่าง ๆ ได้ลำบาก","ฉันตัดสินใจเรื่องต่าง ๆ ได้ง่าย"]}',
        ],
        [
          'text' => '{"id":14,"options":["ฉันเป็นคนหน้าตาดี","ฉันเป็นคนหน้าตาไม่ค่อยดี","ฉันเป็นคนหน้าตาน่าเกลียด"]}',
          'text_en' => '{"id":14,"options":["ฉันเป็นคนหน้าตาดี","ฉันเป็นคนหน้าตาไม่ค่อยดี","ฉันเป็นคนหน้าตาน่าเกลียด"]}',
        ],
        [
          'text' => '{"id":15,"options":["ฉันต้องใช้ความพยายามอย่างหนักทุกครั้งที่ทำการบ้าน","ฉันต้องใช้ความพยายามอย่างหนักบ่อยครั้งเวลาทำการบ้าน","การทำการบ้านไม่ใช่ปัญหาใหญ่สำหรับฉัน"]}',
          'text_en' => '{"id":15,"options":["ฉันต้องใช้ความพยายามอย่างหนักทุกครั้งที่ทำการบ้าน","ฉันต้องใช้ความพยายามอย่างหนักบ่อยครั้งเวลาทำการบ้าน","การทำการบ้านไม่ใช่ปัญหาใหญ่สำหรับฉัน"]}',
        ],
        [
          'text' => '{"id":16,"options":["ฉันนอนไม่หลับทุกคืน","ฉันนอนไม่หลับหลายคืน","ฉันนอนหลับสบาย"]}',
          'text_en' => '{"id":16,"options":["ฉันนอนไม่หลับทุกคืน","ฉันนอนไม่หลับหลายคืน","ฉันนอนหลับสบาย"]}',
        ],
        [
          'text' => '{"id":17,"options":["ฉันรู้สึกเหนื่อยนานๆ ครั้ง","ฉันรู้สึกเหนื่อยบ่อยครั้ง","ฉันรู้สึกเหนื่อยตลอดเวลา"]}',
          'text_en' => '{"id":17,"options":["ฉันรู้สึกเหนื่อยนานๆ ครั้ง","ฉันรู้สึกเหนื่อยบ่อยครั้ง","ฉันรู้สึกเหนื่อยตลอดเวลา"]}',
        ],
        [
          'text' => '{"id":18,"options":["มีหลายวันที่ฉันไม่รู้สึกอยากกินอาหาร","มีบางวันที่ฉันไม่รู้สึกอยากกินอาหาร","ฉันกินอาหารได้ดี"]}',
          'text_en' => '{"id":18,"options":["มีหลายวันที่ฉันไม่รู้สึกอยากกินอาหาร","มีบางวันที่ฉันไม่รู้สึกอยากกินอาหาร","ฉันกินอาหารได้ดี"]}',
        ],
        [
          'text' => '{"id":19,"options":["ฉันไม่กังวลกับการเจ็บป่วย","ฉันกังวลกับการเจ็บป่วยบ่อยครั้ง","ฉันกังวลกับการเจ็บป่วยตลอดเวลา"]}',
          'text_en' => '{"id":19,"options":["ฉันไม่กังวลกับการเจ็บป่วย","ฉันกังวลกับการเจ็บป่วยบ่อยครั้ง","ฉันกังวลกับการเจ็บป่วยตลอดเวลา"]}',
        ],
        [
          'text' => '{"id":20,"options":["ฉันไม่รู้สึกเหงา","ฉันรู้สึกเหงาบ่อย ๆ","ฉันรู้สึกเหงาตลอดเวลา"]}',
          'text_en' => '{"id":20,"options":["ฉันไม่รู้สึกเหงา","ฉันรู้สึกเหงาบ่อย ๆ","ฉันรู้สึกเหงาตลอดเวลา"]}',
        ],
        [
          'text' => '{"id":21,"options":["ฉันไม่รู้สึกสนุกเลย เวลาอยู่ที่โรงเรียน","ฉันรู้สึกสนุกนานๆ ครั้ง เวลาอยู่ที่โรงเรียน","ฉันรู้สึกสนุกบ่อยครั้ง เวลาอยู่ที่โรงเรียน"]}',
          'text_en' => '{"id":21,"options":["ฉันไม่รู้สึกสนุกเลย เวลาอยู่ที่โรงเรียน","ฉันรู้สึกสนุกนานๆ ครั้ง เวลาอยู่ที่โรงเรียน","ฉันรู้สึกสนุกบ่อยครั้ง เวลาอยู่ที่โรงเรียน"]}',
        ],
        [
          'text' => '{"id":22,"options":["ฉันมีเพื่อนมาก","ฉันมีเพื่อนไม่กี่คน และอยากมีมากกว่านี้","ฉันไม่มีเพื่อนเลย"]}',
          'text_en' => '{"id":22,"options":["ฉันมีเพื่อนมาก","ฉันมีเพื่อนไม่กี่คน และอยากมีมากกว่านี้","ฉันไม่มีเพื่อนเลย"]}',
        ],
        [
          'text' => '{"id":23,"options":["การเรียนของฉันอยู่ในขั้นใช้ได้ดี","การเรียนของฉันไม่ค่อยดีเหมือนเมื่อก่อน","การเรียนของฉันแย่ลงมาก"]}',
          'text_en' => '{"id":23,"options":["การเรียนของฉันอยู่ในขั้นใช้ได้ดี","การเรียนของฉันไม่ค่อยดีเหมือนเมื่อก่อน","การเรียนของฉันแย่ลงมาก"]}',
        ],
        [
          'text' => '{"id":24,"options":["ฉันทำอะไรไม่ได้ดีเท่าคนอื่น","ฉันทำอะไร ได้ดีเท่าคนอื่น ถ้าฉันพยายาม","ฉันทำได้ดีพอ ๆ กับคนอื่นอยู่แล้ว ในขณะที่"]}',
          'text_en' => '{"id":24,"options":["ฉันทำอะไรไม่ได้ดีเท่าคนอื่น","ฉันทำอะไร ได้ดีเท่าคนอื่น ถ้าฉันพยายาม","ฉันทำได้ดีพอ ๆ กับคนอื่นอยู่แล้ว ในขณะที่"]}',
        ],
        [
          'text' => '{"id":25,"options":["ไม่มีใครรักฉันจริง","ฉันไม่แน่ใจว่ามีใครรักฉันหรือเปล่า","ฉันแน่ใจว่ามีคนรักฉัน"]}',
          'text_en' => '{"id":25,"options":["ไม่มีใครรักฉันจริง","ฉันไม่แน่ใจว่ามีใครรักฉันหรือเปล่า","ฉันแน่ใจว่ามีคนรักฉัน"]}',
        ],
        [
          'text' => '{"id":26,"options":["ฉันทำตามคำสั่งที่ได้รับเสมอ","ฉันไม่ทำตามคำสั่งบ่อยครั้ง","ฉันไม่เคยทำตามคำสั่ง"]}',
          'text_en' => '{"id":26,"options":["ฉันทำตามคำสั่งที่ได้รับเสมอ","ฉันไม่ทำตามคำสั่งบ่อยครั้ง","ฉันไม่เคยทำตามคำสั่ง"]}',
        ],
        [
          'text' => '{"id":27,"options":["ฉันเข้ากับคนอื่นได้ดี","ฉันทะเลาะกับคนอื่นบ่อยครั้ง","ฉันทะเลาะกับคนอื่นตลอดเวลา"]}',
          'text_en' => '{"id":27,"options":["ฉันเข้ากับคนอื่นได้ดี","ฉันทะเลาะกับคนอื่นบ่อยครั้ง","ฉันทะเลาะกับคนอื่นตลอดเวลา"]}',
        ],
      ],
      'title_en' => 'Pediatric CDI assessment form',
      'desc_en' => 'Assessing depression in children',
    ],
    [
      'slug' => 'depression-9q',
      'title' => 'แบบประเมินโรคซึมเศร้า (9Q]',
      'desc' => '',
      'icon' => 'selfworth',
      'metric' => 'คะแนน',
      'reverse_scoring' => [
        false,
        false,
        false,
        false,
        false,
        false,
        false,
        false,
        false,
      ],
      'options' => [
        'ไม่มีเลย',
        'เป็นบางวัน 1-7 วัน',
        'เป็นบ่อย > 7วัน',
        'เป็นทุกวัน',
      ],
      'questions' => [
        [
          'text' => 'เบื่อ ไม่สนใจอยากทำอะไร',
          'text_en' => 'เบื่อ ไม่สนใจอยากทำอะไร',
        ],
        [
          'text' => 'ไม่สบายใจ ซึมเศร้า ท้อแท้',
          'text_en' => 'ไม่สบายใจ ซึมเศร้า ท้อแท้',
        ],
        [
          'text' => 'หลับยากหรือหลับๆตื่นๆหรือหลับมากไป',
          'text_en' => 'หลับยากหรือหลับๆตื่นๆหรือหลับมากไป',
        ],
        [
          'text' => 'เหนื่อยง่ายหรือไม่ค่อยมีแรง',
          'text_en' => 'เหนื่อยง่ายหรือไม่ค่อยมีแรง',
        ],
        [
          'text' => 'เบื่ออาหารหรือกินมากเกินไป',
          'text_en' => 'เบื่ออาหารหรือกินมากเกินไป',
        ],
        [
          'text' => 'รู้สึกไม่ดีกับตัวเอง คิดว่าตัวเองล้มเหลวหรือครอบครัวผิดหวัง',
          'text_en' => 'รู้สึกไม่ดีกับตัวเอง คิดว่าตัวเองล้มเหลวหรือครอบครัวผิดหวัง',
        ],
        [
          'text' => 'สมาธิไม่ดี เวลาทำอะไร เช่น ดูโทรทัศน์ ฟังวิทยุ หรือทำงานที่ต้องใช้ความตั้งใจ',
          'text_en' => 'สมาธิไม่ดี เวลาทำอะไร เช่น ดูโทรทัศน์ ฟังวิทยุ หรือทำงานที่ต้องใช้ความตั้งใจ',
        ],
        [
          'text' => 'พูดช้า ทำอะไรช้าลงจนคนอื่นสังเกตเห็นได้หรือกระสับกระส่ายไม่สามารถอยู่นิ่งได้เหมือนที่เคยเป็น',
          'text_en' => 'พูดช้า ทำอะไรช้าลงจนคนอื่นสังเกตเห็นได้หรือกระสับกระส่ายไม่สามารถอยู่นิ่งได้เหมือนที่เคยเป็น',
        ],
        [
          'text' => 'คิดทำร้ายตนเอง หรือคิดว่าถ้าตายไปคงจะดี',
          'text_en' => 'คิดทำร้ายตนเอง หรือคิดว่าถ้าตายไปคงจะดี',
        ],
      ],
      'title_en' => 'แบบประเมินโรคซึมเศร้า (9Q]',
      'desc_en' => '',
      'options_en' => [
        'ไม่มีเลย',
        'เป็นบางวัน 1-7 วัน',
        'เป็นบ่อย > 7วัน',
        'เป็นทุกวัน',
      ],
    ],
    [
      'slug' => 'disaster-kid',
      'title' => 'แบบประเมินภัยพิบัติสำหรับเด็ก',
      'desc' => 'ประเมินผลกระทบจากภัยพิบัติ',
      'icon' => 'selfworth',
      'metric' => 'คะแนน',
      'reverse_scoring' => [
      ],
      'options' => [
        0 => 'ไม่เลย',
        1 => 'นานๆ ครั้ง',
        3 => 'บางครั้ง',
        5 => 'บ่อยๆ',
      ],
      'questions' => [
        [
          'text' => 'นึกถึงเหตุการณ์นั้นขึ้นมาโดยไม่ได้ตั้งใจ',
          'text_en' => 'นึกถึงเหตุการณ์นั้นขึ้นมาโดยไม่ได้ตั้งใจ',
        ],
        [
          'text' => 'พยายามลืมเหตุการณ์ที่เกิดขึ้น',
          'text_en' => 'พยายามลืมเหตุการณ์ที่เกิดขึ้น',
        ],
        [
          'text' => 'ไม่มีสมาธิในการเรียน',
          'text_en' => 'ไม่มีสมาธิในการเรียน',
        ],
        [
          'text' => 'ยังรู้สึกผวาเหตุการณ์นั้น',
          'text_en' => 'ยังรู้สึกผวาเหตุการณ์นั้น',
        ],
        [
          'text' => 'สะดุ้งตกใจง่ายกว่าเดิมหลังเหตุการณ์นั้น',
          'text_en' => 'สะดุ้งตกใจง่ายกว่าเดิมหลังเหตุการณ์นั้น',
        ],
        [
          'text' => 'พยายามหลีกเลี่ยงสิ่งที่ทำให้นึกถึงเหตุการณ์นั้น',
          'text_en' => 'พยายามหลีกเลี่ยงสิ่งที่ทำให้นึกถึงเหตุการณ์นั้น',
        ],
        [
          'text' => 'พยายามไม่พูดถึงเหตุการณ์นั้น',
          'text_en' => 'พยายามไม่พูดถึงเหตุการณ์นั้น',
        ],
        [
          'text' => 'มีภาพเหตุการณ์นั้นผุดขึ้นในใจ',
          'text_en' => 'มีภาพเหตุการณ์นั้นผุดขึ้นในใจ',
        ],
        [
          'text' => 'มีสิ่งที่ทำให้ยังคิดถึงเหตุการณ์นั้น',
          'text_en' => 'มีสิ่งที่ทำให้ยังคิดถึงเหตุการณ์นั้น',
        ],
        [
          'text' => 'พยายามที่จะไม่คิดถึงเหตุการณ์นั้น',
          'text_en' => 'พยายามที่จะไม่คิดถึงเหตุการณ์นั้น',
        ],
        [
          'text' => 'รู้สึกหงุดหงิดง่าย',
          'text_en' => 'รู้สึกหงุดหงิดง่าย',
        ],
        [
          'text' => 'ตื่นตัวและระวังตัวเกินเหตุ',
          'text_en' => 'ตื่นตัวและระวังตัวเกินเหตุ',
        ],
        [
          'text' => 'มีปัญหาการนอน (เช่นนอนไม่หลับ ตื่นบ่อย]',
          'text_en' => 'มีปัญหาการนอน (เช่นนอนไม่หลับ ตื่นบ่อย]',
        ],
      ],
      'title_en' => 'แบบประเมินภัยพิบัติสำหรับเด็ก',
      'desc_en' => 'ประเมินผลกระทบจากภัยพิบัติ',
      'options_en' => [
        0 => 'ไม่เลย',
        1 => 'นานๆ ครั้ง',
        3 => 'บางครั้ง',
        5 => 'บ่อยๆ',
      ],
    ],
    [
      'slug' => 'eq-12-17',
      'title' => 'แบบประเมิน EQ เด็ก 12-17 ปี',
      'desc' => 'ความฉลาดทางอารมณ์',
      'icon' => 'selfworth',
      'metric' => 'คะแนน',
      'reverse_scoring' => [
        2,
        3,
        5,
        8,
        9,
        11,
        13,
        16,
        18,
        19,
        21,
        24,
        26,
        27,
        29,
        30,
        33,
        35,
        37,
        40,
        45,
        47,
        51,
        52,
      ],
      'options' => [
        'ไม่จริง',
        'จริงบางครั้ง',
        'ค่อนข้างจริง',
        'จริงมาก',
      ],
      'questions' => [
        [
          'text' => 'เวลาโกรธหรือไม่สบายใจ ฉันรับรู้ได้ว่าเกิดอะไรขึ้นกับฉัน',
          'text_en' => 'เวลาโกรธหรือไม่สบายใจ ฉันรับรู้ได้ว่าเกิดอะไรขึ้นกับฉัน',
        ],
        [
          'text' => 'ฉันบอกไม่ได้ว่าอะไรทำให้ฉันรู้สึกโกรธ',
          'text_en' => 'ฉันบอกไม่ได้ว่าอะไรทำให้ฉันรู้สึกโกรธ',
        ],
        [
          'text' => 'เมื่อถูกขัดใจ ฉันมักรู้สึกหงุดหงิดจนควบคุมอารมณ์ไม่ได้',
          'text_en' => 'เมื่อถูกขัดใจ ฉันมักรู้สึกหงุดหงิดจนควบคุมอารมณ์ไม่ได้',
        ],
        [
          'text' => 'ฉันสามารถรอคอยเพื่อให้บรรลุเป้าหมายที่พอใจ',
          'text_en' => 'ฉันสามารถรอคอยเพื่อให้บรรลุเป้าหมายที่พอใจ',
        ],
        [
          'text' => 'ฉันมักมีปฏิกิริยาโต้ตอบรุนแรงต่อปัญหาเพียงเล็กน้อย',
          'text_en' => 'ฉันมักมีปฏิกิริยาโต้ตอบรุนแรงต่อปัญหาเพียงเล็กน้อย',
        ],
        [
          'text' => 'เมื่อถูกบังคับให้ทำในสิ่งที่ไม่ชอบ ฉันจะอธิบายเหตุผลจนผู้อื่นยอมรับได้',
          'text_en' => 'เมื่อถูกบังคับให้ทำในสิ่งที่ไม่ชอบ ฉันจะอธิบายเหตุผลจนผู้อื่นยอมรับได้',
        ],
        [
          'text' => 'ฉันสังเกตได้ เมื่อคนใกล้ชิดมีอารมณ์เปลี่ยนแปลง',
          'text_en' => 'ฉันสังเกตได้ เมื่อคนใกล้ชิดมีอารมณ์เปลี่ยนแปลง',
        ],
        [
          'text' => 'ฉันไม่สนใจกับความทุกข์ของผู้อื่นที่ฉันไม่รู้จัก',
          'text_en' => 'ฉันไม่สนใจกับความทุกข์ของผู้อื่นที่ฉันไม่รู้จัก',
        ],
        [
          'text' => 'ฉันไม่ยอมรับในสิ่งที่ผู้อื่นทำต่างจากที่ฉันคิด',
          'text_en' => 'ฉันไม่ยอมรับในสิ่งที่ผู้อื่นทำต่างจากที่ฉันคิด',
        ],
        [
          'text' => 'ฉันยอมรับได้ว่าผู้อื่นก็อาจมีเหตุผลที่จะไม่พอใจการกระทำของฉัน',
          'text_en' => 'ฉันยอมรับได้ว่าผู้อื่นก็อาจมีเหตุผลที่จะไม่พอใจการกระทำของฉัน',
        ],
        [
          'text' => 'ฉันรู้สึกว่าผู้อื่นชอบเรียกร้องความสนใจมากเกินไป',
          'text_en' => 'ฉันรู้สึกว่าผู้อื่นชอบเรียกร้องความสนใจมากเกินไป',
        ],
        [
          'text' => 'แม้จะมีภาระที่ต้องทำ ฉันก็ยินดีรับฟังความทุกข์ของผู้อื่นที่ต้องการความช่วยเหลือ',
          'text_en' => 'แม้จะมีภาระที่ต้องทำ ฉันก็ยินดีรับฟังความทุกข์ของผู้อื่นที่ต้องการความช่วยเหลือ',
        ],
        [
          'text' => 'เป็นเรื่องธรรมดาที่จะเอาเปรียบผู้อื่นเมื่อมีโอกาส',
          'text_en' => 'เป็นเรื่องธรรมดาที่จะเอาเปรียบผู้อื่นเมื่อมีโอกาส',
        ],
        [
          'text' => 'ฉันเห็นคุณค่าในน้ำใจที่ผู้อื่นมีต่อฉัน',
          'text_en' => 'ฉันเห็นคุณค่าในน้ำใจที่ผู้อื่นมีต่อฉัน',
        ],
        [
          'text' => 'เมื่อทำผิด ฉันสามารถกล่าวคำ "ขอโทษ" ผู้อื่นได้',
          'text_en' => 'เมื่อทำผิด ฉันสามารถกล่าวคำ "ขอโทษ" ผู้อื่นได้',
        ],
        [
          'text' => 'ฉันยอมรับข้อผิดพลาดของผู้อื่นได้ยาก',
          'text_en' => 'ฉันยอมรับข้อผิดพลาดของผู้อื่นได้ยาก',
        ],
        [
          'text' => 'ถึงแม้จะต้องเสียประโยชน์ส่วนตัวไปบ้าง ฉันก็ยินดีที่จะทำเพื่อส่วนรวม',
          'text_en' => 'ถึงแม้จะต้องเสียประโยชน์ส่วนตัวไปบ้าง ฉันก็ยินดีที่จะทำเพื่อส่วนรวม',
        ],
        [
          'text' => 'ฉันรู้สึกลำบากใจในการทำสิ่งใดสิ่งหนึ่งเพื่อผู้อื่น',
          'text_en' => 'ฉันรู้สึกลำบากใจในการทำสิ่งใดสิ่งหนึ่งเพื่อผู้อื่น',
        ],
        [
          'text' => 'ฉันไม่รู้ว่าฉันเก่งเรื่องอะไร',
          'text_en' => 'ฉันไม่รู้ว่าฉันเก่งเรื่องอะไร',
        ],
        [
          'text' => 'แม้จะเป็นงานยาก ฉันก็มั่นใจว่าสามารถทำได้',
          'text_en' => 'แม้จะเป็นงานยาก ฉันก็มั่นใจว่าสามารถทำได้',
        ],
        [
          'text' => 'เมื่อทำสิ่งใดไม่สำเร็จ ฉันรู้สึกหมดกำลังใจ',
          'text_en' => 'เมื่อทำสิ่งใดไม่สำเร็จ ฉันรู้สึกหมดกำลังใจ',
        ],
        [
          'text' => 'ฉันรู้สึกมีคุณค่าเมื่อได้ทำสิ่งต่าง ๆ อย่างเต็มความสามารถ',
          'text_en' => 'ฉันรู้สึกมีคุณค่าเมื่อได้ทำสิ่งต่าง ๆ อย่างเต็มความสามารถ',
        ],
        [
          'text' => 'เมื่อต้องเผชิญกับอุปสรรคและความผิดหวัง ฉันก็จะไม่ยอมแพ้',
          'text_en' => 'เมื่อต้องเผชิญกับอุปสรรคและความผิดหวัง ฉันก็จะไม่ยอมแพ้',
        ],
        [
          'text' => 'เมื่อเริ่มทำสิ่งหนึ่งสิ่งใด ฉันมักทำต่อไปไม่สำเร็จ',
          'text_en' => 'เมื่อเริ่มทำสิ่งหนึ่งสิ่งใด ฉันมักทำต่อไปไม่สำเร็จ',
        ],
        [
          'text' => 'ฉันพยายามหาสาเหตุที่แท้จริงของปัญหาโดยไม่คิดเอาเองตามใจชอบ',
          'text_en' => 'ฉันพยายามหาสาเหตุที่แท้จริงของปัญหาโดยไม่คิดเอาเองตามใจชอบ',
        ],
        [
          'text' => 'บ่อยครั้งที่ฉันไม่รู้ว่าอะไรทำให้ฉันไม่มีความสุข',
          'text_en' => 'บ่อยครั้งที่ฉันไม่รู้ว่าอะไรทำให้ฉันไม่มีความสุข',
        ],
        [
          'text' => 'ฉันรู้สึกว่าการตัดสินใจแก้ปัญหาเป็นเรื่องยากสำหรับฉัน',
          'text_en' => 'ฉันรู้สึกว่าการตัดสินใจแก้ปัญหาเป็นเรื่องยากสำหรับฉัน',
        ],
        [
          'text' => 'เมื่อต้องทำอะไรหลายอย่างในเวลาเดียวกัน ฉันตัดสินใจได้ว่าจะทำอะไรก่อนหลัง',
          'text_en' => 'เมื่อต้องทำอะไรหลายอย่างในเวลาเดียวกัน ฉันตัดสินใจได้ว่าจะทำอะไรก่อนหลัง',
        ],
        [
          'text' => 'ฉันลำบากใจเมื่อต้องอยู่กับคนแปลกหน้าหรือคนที่ไม่คุ้นเคย',
          'text_en' => 'ฉันลำบากใจเมื่อต้องอยู่กับคนแปลกหน้าหรือคนที่ไม่คุ้นเคย',
        ],
        [
          'text' => 'ฉันทนไม่ได้เมื่อต้องอยู่ในสังคมที่มีกฎระเบียบขัดกับความเคยชินของฉัน',
          'text_en' => 'ฉันทนไม่ได้เมื่อต้องอยู่ในสังคมที่มีกฎระเบียบขัดกับความเคยชินของฉัน',
        ],
        [
          'text' => 'ฉันทำความรู้จักผู้อื่นได้ง่าย',
          'text_en' => 'ฉันทำความรู้จักผู้อื่นได้ง่าย',
        ],
        [
          'text' => 'ฉันมีเพื่อนสนิทหลายคนที่คบกันมานาน',
          'text_en' => 'ฉันมีเพื่อนสนิทหลายคนที่คบกันมานาน',
        ],
        [
          'text' => 'ฉันไม่กล้าบอกความต้องการของฉันให้ผู้อื่นรู้',
          'text_en' => 'ฉันไม่กล้าบอกความต้องการของฉันให้ผู้อื่นรู้',
        ],
        [
          'text' => 'ฉันทำในสิ่งที่ต้องการโดยไม่ทำให้ผู้อื่นเดือดร้อน',
          'text_en' => 'ฉันทำในสิ่งที่ต้องการโดยไม่ทำให้ผู้อื่นเดือดร้อน',
        ],
        [
          'text' => 'เป็นการยากสำหรับฉันที่จะโต้แย้งกับผู้อื่น แม้จะมีเหตุผลเพียงพอ',
          'text_en' => 'เป็นการยากสำหรับฉันที่จะโต้แย้งกับผู้อื่น แม้จะมีเหตุผลเพียงพอ',
        ],
        [
          'text' => 'เมื่อไม่เห็นด้วยกับผู้อื่น ฉันสามารถอธิบายเหตุผลที่เขายอมรับได้',
          'text_en' => 'เมื่อไม่เห็นด้วยกับผู้อื่น ฉันสามารถอธิบายเหตุผลที่เขายอมรับได้',
        ],
        [
          'text' => 'ฉันรู้สึกด้อยกว่าผู้อื่น',
          'text_en' => 'ฉันรู้สึกด้อยกว่าผู้อื่น',
        ],
        [
          'text' => 'ฉันทำหน้าที่ได้ดี ไม่ว่าจะอยู่ในบทบาทใด',
          'text_en' => 'ฉันทำหน้าที่ได้ดี ไม่ว่าจะอยู่ในบทบาทใด',
        ],
        [
          'text' => 'ฉันสามารถทำงานที่ได้รับมอบหมายได้ดีที่สุด',
          'text_en' => 'ฉันสามารถทำงานที่ได้รับมอบหมายได้ดีที่สุด',
        ],
        [
          'text' => 'ฉันไม่มั่นใจในการทำงานที่ยากลำบาก',
          'text_en' => 'ฉันไม่มั่นใจในการทำงานที่ยากลำบาก',
        ],
        [
          'text' => 'แม้สถานการณ์จะเลวร้าย ฉันก็มีความหวังว่าจะดีขึ้น',
          'text_en' => 'แม้สถานการณ์จะเลวร้าย ฉันก็มีความหวังว่าจะดีขึ้น',
        ],
        [
          'text' => 'ทุกปัญหามักมีทางออกเสมอ',
          'text_en' => 'ทุกปัญหามักมีทางออกเสมอ',
        ],
        [
          'text' => 'เมื่อมีเรื่องที่ทำให้เครียด ฉันมักปรับเปลี่ยนให้เป็นเรื่องผ่อนคลายหรือสนุกสนานได้',
          'text_en' => 'เมื่อมีเรื่องที่ทำให้เครียด ฉันมักปรับเปลี่ยนให้เป็นเรื่องผ่อนคลายหรือสนุกสนานได้',
        ],
        [
          'text' => 'ฉันสนุกสนานทุกครั้งกับกิจกรรมในวันสุดสัปดาห์และวันหยุดพักผ่อน',
          'text_en' => 'ฉันสนุกสนานทุกครั้งกับกิจกรรมในวันสุดสัปดาห์และวันหยุดพักผ่อน',
        ],
        [
          'text' => 'ฉันรู้สึกไม่พอใจที่ผู้อื่นได้รับสิ่งดี ๆ มากกว่าฉัน',
          'text_en' => 'ฉันรู้สึกไม่พอใจที่ผู้อื่นได้รับสิ่งดี ๆ มากกว่าฉัน',
        ],
        [
          'text' => 'ฉันพอใจกับสิ่งที่ฉันเป็นอยู่',
          'text_en' => 'ฉันพอใจกับสิ่งที่ฉันเป็นอยู่',
        ],
        [
          'text' => 'ฉันไม่รู้ว่าจะหาอะไรทำ เมื่อรู้สึกเบื่อหน่าย',
          'text_en' => 'ฉันไม่รู้ว่าจะหาอะไรทำ เมื่อรู้สึกเบื่อหน่าย',
        ],
        [
          'text' => 'เมื่อว่างเว้นจากภาระหน้าที่ ฉันจะทำในสิ่งที่ฉันชอบ',
          'text_en' => 'เมื่อว่างเว้นจากภาระหน้าที่ ฉันจะทำในสิ่งที่ฉันชอบ',
        ],
        [
          'text' => 'เมื่อรู้สึกไม่สบายใจ ฉันมีวิธีผ่อนคลายอารมณ์ได้',
          'text_en' => 'เมื่อรู้สึกไม่สบายใจ ฉันมีวิธีผ่อนคลายอารมณ์ได้',
        ],
        [
          'text' => 'ฉันสามารถผ่อนคลายตนเองได้ แม้จะเหน็ดเหนื่อยจากภาระหน้าที่',
          'text_en' => 'ฉันสามารถผ่อนคลายตนเองได้ แม้จะเหน็ดเหนื่อยจากภาระหน้าที่',
        ],
        [
          'text' => 'ฉันไม่สามารถทำใจให้เป็นสุขได้จนกว่าจะได้ทุกสิ่งที่ต้องการ',
          'text_en' => 'ฉันไม่สามารถทำใจให้เป็นสุขได้จนกว่าจะได้ทุกสิ่งที่ต้องการ',
        ],
        [
          'text' => 'ฉันมักทุกข์ร้อนกับเรื่องเล็ก ๆ น้อย ๆ ที่เกิดขึ้นเสมอ',
          'text_en' => 'ฉันมักทุกข์ร้อนกับเรื่องเล็ก ๆ น้อย ๆ ที่เกิดขึ้นเสมอ',
        ],
      ],
      'title_en' => 'แบบประเมิน EQ เด็ก 12-17 ปี',
      'desc_en' => 'ความฉลาดทางอารมณ์',
      'options_en' => [
        'ไม่จริง',
        'จริงบางครั้ง',
        'ค่อนข้างจริง',
        'จริงมาก',
      ],
    ],
    [
      'slug' => 'eq-3-5',
      'title' => 'แบบประเมิน EQ เด็ก 3-5 ปี',
      'desc' => 'ความฉลาดทางอารมณ์',
      'icon' => 'selfworth',
      'metric' => 'คะแนน',
      'reverse_scoring' => [
        14,
      ],
      'options' => [
        1 => 'ไม่เป็นเลย',
        2 => 'เป็นบางครั้ง',
        3 => 'เป็นบ่อยครั้ง',
        4 => 'เป็นประจำ',
      ],
      'questions' => [
        [
          'text' => 'แสดงความเห็นใจเมื่อเห็นเพื่อนหรือผู้อื่นทุกข์ร้อน เช่น บอกว่าสงสาร เข้าไปปลอบหรือเข้าไปช่วย',
          'text_en' => 'แสดงความเห็นใจเมื่อเห็นเพื่อนหรือผู้อื่นทุกข์ร้อน เช่น บอกว่าสงสาร เข้าไปปลอบหรือเข้าไปช่วย',
        ],
        [
          'text' => 'หยุดการกระทำที่ไม่ดีเมื่อผู้ใหญ่ห้าม',
          'text_en' => 'หยุดการกระทำที่ไม่ดีเมื่อผู้ใหญ่ห้าม',
        ],
        [
          'text' => 'แบ่งปันสิ่งของให้คนอื่นๆ เช่น ขนม ของเล่น',
          'text_en' => 'แบ่งปันสิ่งของให้คนอื่นๆ เช่น ขนม ของเล่น',
        ],
        [
          'text' => 'บอกขอโทษหรือแสดงท่าทียอมรับผิดเมื่อรู้ว่าทำผิด',
          'text_en' => 'บอกขอโทษหรือแสดงท่าทียอมรับผิดเมื่อรู้ว่าทำผิด',
        ],
        [
          'text' => 'อดทน และรอคอยได้',
          'text_en' => 'อดทน และรอคอยได้',
        ],
        [
          'text' => 'อยากรู้อยากเห็นกับของเล่นหรือสิ่งแปลกใหม่',
          'text_en' => 'อยากรู้อยากเห็นกับของเล่นหรือสิ่งแปลกใหม่',
        ],
        [
          'text' => 'สนใจ รู้สึกสนุกกับงานหรือกิจกรรมใหม่ๆ',
          'text_en' => 'สนใจ รู้สึกสนุกกับงานหรือกิจกรรมใหม่ๆ',
        ],
        [
          'text' => 'ซักถามในสิ่งที่อยากรู้',
          'text_en' => 'ซักถามในสิ่งที่อยากรู้',
        ],
        [
          'text' => 'เมื่อไม่ได้ของเล่นที่อยากได้ก็สามารถเล่นของอื่นแทน',
          'text_en' => 'เมื่อไม่ได้ของเล่นที่อยากได้ก็สามารถเล่นของอื่นแทน',
        ],
        [
          'text' => 'ยอมรับกฎเกณฑ์หรือข้อตกลง แม้จะผิดหวัง/ไม่ได้สิ่งที่ต้องการ',
          'text_en' => 'ยอมรับกฎเกณฑ์หรือข้อตกลง แม้จะผิดหวัง/ไม่ได้สิ่งที่ต้องการ',
        ],
        [
          'text' => 'แสดงความภาคภูมิใจเมื่อได้รับคำชมเชย เช่น บอกเล่าให้ผู้อื่นรู้',
          'text_en' => 'แสดงความภาคภูมิใจเมื่อได้รับคำชมเชย เช่น บอกเล่าให้ผู้อื่นรู้',
        ],
        [
          'text' => 'รู้จักหาของเล่น หรือกิจกรรมเพื่อสร้างความสนุกสนานเพลิดเพลิน',
          'text_en' => 'รู้จักหาของเล่น หรือกิจกรรมเพื่อสร้างความสนุกสนานเพลิดเพลิน',
        ],
        [
          'text' => 'แสดงอารมณ์สนุกหรือร่วมสนุกตามไปกับสิ่งที่เห็น เช่น ร้องเพลง กระโดดโลดเต้น หัวเราะเฮฮา',
          'text_en' => 'แสดงอารมณ์สนุกหรือร่วมสนุกตามไปกับสิ่งที่เห็น เช่น ร้องเพลง กระโดดโลดเต้น หัวเราะเฮฮา',
        ],
        [
          'text' => 'เก็บตัว ไม่เล่นสนุกสนานกับเด็กคนอื่นๆ',
          'text_en' => 'เก็บตัว ไม่เล่นสนุกสนานกับเด็กคนอื่นๆ',
        ],
        [
          'text' => 'ไม่กลัวเมื่อต้องอยู่กับคนที่ไม่สนิทสนม',
          'text_en' => 'ไม่กลัวเมื่อต้องอยู่กับคนที่ไม่สนิทสนม',
        ],
      ],
      'title_en' => 'แบบประเมิน EQ เด็ก 3-5 ปี',
      'desc_en' => 'ความฉลาดทางอารมณ์',
      'options_en' => [
        1 => 'ไม่เป็นเลย',
        2 => 'เป็นบางครั้ง',
        3 => 'เป็นบ่อยครั้ง',
        4 => 'เป็นประจำ',
      ],
    ],
    [
      'slug' => 'eq-6-11',
      'title' => 'แบบประเมิน EQ เด็ก 6-11 ปี',
      'desc' => 'ความฉลาดทางอารมณ์',
      'icon' => 'selfworth',
      'metric' => 'คะแนน',
      'reverse_scoring' => [
        4,
        5,
        6,
        13,
        20,
        28,
        29,
        40,
        41,
        42,
        47,
        48,
        52,
        53,
        54,
      ],
      'options' => [
        'ไม่เป็นเลย',
        'เป็นบางครั้ง',
        'เป็นบ่อยครั้ง',
        'เป็นประจำ',
      ],
      'questions' => [
        [
          'text' => 'ไม่ใช้กำลังเวลาโกรธหรือไม่พอใจ',
          'text_en' => 'ไม่ใช้กำลังเวลาโกรธหรือไม่พอใจ',
        ],
        [
          'text' => 'รู้จักรอคอยเมื่อยังไม่ถึงคราวหรือเวลาของตน',
          'text_en' => 'รู้จักรอคอยเมื่อยังไม่ถึงคราวหรือเวลาของตน',
        ],
        [
          'text' => 'ยับยั้งที่จะทำอะไรตามอำเภอใจตนเอง',
          'text_en' => 'ยับยั้งที่จะทำอะไรตามอำเภอใจตนเอง',
        ],
        [
          'text' => 'ต้องการอะไรต้องได้ทันที',
          'text_en' => 'ต้องการอะไรต้องได้ทันที',
        ],
        [
          'text' => 'เมื่อมีอารมณ์โกรธ ต้องใช้เวลานานกว่าจะหายโกรธ',
          'text_en' => 'เมื่อมีอารมณ์โกรธ ต้องใช้เวลานานกว่าจะหายโกรธ',
        ],
        [
          'text' => 'หมกมุ่นกับการเล่นมากเกินไป',
          'text_en' => 'หมกมุ่นกับการเล่นมากเกินไป',
        ],
        [
          'text' => 'ชี้แจงเหตุผลแทนการใช้กำลัง',
          'text_en' => 'ชี้แจงเหตุผลแทนการใช้กำลัง',
        ],
        [
          'text' => 'ช่วยปกป้อง ดูแล และช่วยเหลือเด็กที่เล็กกว่า',
          'text_en' => 'ช่วยปกป้อง ดูแล และช่วยเหลือเด็กที่เล็กกว่า',
        ],
        [
          'text' => 'เห็นอกเห็นใจเมื่อผู้อื่นเดือดร้อน',
          'text_en' => 'เห็นอกเห็นใจเมื่อผู้อื่นเดือดร้อน',
        ],
        [
          'text' => 'ใส่ใจหรือรู้ว่าใครชอบอะไร ไม่ชอบอะไร',
          'text_en' => 'ใส่ใจหรือรู้ว่าใครชอบอะไร ไม่ชอบอะไร',
        ],
        [
          'text' => 'เป็นที่พึ่งได้เมื่อเพื่อนต้องการความช่วยเหลือ',
          'text_en' => 'เป็นที่พึ่งได้เมื่อเพื่อนต้องการความช่วยเหลือ',
        ],
        [
          'text' => 'ระมัดระวังที่จะไม่ทำให้ผู้อื่นเดือดร้อนหรือเสียใจ',
          'text_en' => 'ระมัดระวังที่จะไม่ทำให้ผู้อื่นเดือดร้อนหรือเสียใจ',
        ],
        [
          'text' => 'ไม่ช่วยเหลือหรือไม่ให้ความร่วมมือกับผู้อื่น',
          'text_en' => 'ไม่ช่วยเหลือหรือไม่ให้ความร่วมมือกับผู้อื่น',
        ],
        [
          'text' => 'รู้จักให้กำลังใจผู้อื่น',
          'text_en' => 'รู้จักให้กำลังใจผู้อื่น',
        ],
        [
          'text' => 'รู้จักรับฟังผู้อื่น',
          'text_en' => 'รู้จักรับฟังผู้อื่น',
        ],
        [
          'text' => 'รู้จักแสดงความห่วงใยผู้อื่น',
          'text_en' => 'รู้จักแสดงความห่วงใยผู้อื่น',
        ],
        [
          'text' => 'มักสารภาพเมื่อทำผิด',
          'text_en' => 'มักสารภาพเมื่อทำผิด',
        ],
        [
          'text' => 'ไม่ชอบแกล้งเพื่อน',
          'text_en' => 'ไม่ชอบแกล้งเพื่อน',
        ],
        [
          'text' => 'ยอมรับว่าผิดเมื่อถูกถาม',
          'text_en' => 'ยอมรับว่าผิดเมื่อถูกถาม',
        ],
        [
          'text' => 'เมื่อทำผิด มักแก้ตัวว่าไม่ได้ตั้งใจ',
          'text_en' => 'เมื่อทำผิด มักแก้ตัวว่าไม่ได้ตั้งใจ',
        ],
        [
          'text' => 'ยอมรับกฎเกณฑ์ เช่น ยอมรับการลงโทษเมื่อทำผิด',
          'text_en' => 'ยอมรับกฎเกณฑ์ เช่น ยอมรับการลงโทษเมื่อทำผิด',
        ],
        [
          'text' => 'รู้จักขอโทษ',
          'text_en' => 'รู้จักขอโทษ',
        ],
        [
          'text' => 'ยอมรับคำตำหนิหรือตักเตือนเมื่อทำผิด',
          'text_en' => 'ยอมรับคำตำหนิหรือตักเตือนเมื่อทำผิด',
        ],
        [
          'text' => 'มีความตั้งใจเมื่อทำสิ่งต่าง ๆ ที่สนใจ',
          'text_en' => 'มีความตั้งใจเมื่อทำสิ่งต่าง ๆ ที่สนใจ',
        ],
        [
          'text' => 'มีสมาธิในการทำงาน เช่น อ่านหนังสือได้นาน ๆ',
          'text_en' => 'มีสมาธิในการทำงาน เช่น อ่านหนังสือได้นาน ๆ',
        ],
        [
          'text' => 'พยายามทำงานที่ยากให้สำเร็จได้ด้วยตนเอง เช่น การบ้าน การฝีมือ',
          'text_en' => 'พยายามทำงานที่ยากให้สำเร็จได้ด้วยตนเอง เช่น การบ้าน การฝีมือ',
        ],
        [
          'text' => 'สนุกกับการแก้ปัญหายาก ๆ หรือท้าทาย เช่น ปัญหาการบ้าน ของเล่นที่แปลก ๆ ใหม่ ๆ',
          'text_en' => 'สนุกกับการแก้ปัญหายาก ๆ หรือท้าทาย เช่น ปัญหาการบ้าน ของเล่นที่แปลก ๆ ใหม่ ๆ',
        ],
        [
          'text' => 'เฉื่อยชา ไม่สนใจที่จะทำงานให้เสร็จ',
          'text_en' => 'เฉื่อยชา ไม่สนใจที่จะทำงานให้เสร็จ',
        ],
        [
          'text' => 'บ่นหรือต่อรองว่างานต่าง ๆ ยากเกินกว่าที่จะทำได้ทั้ง ๆ ที่ยังไม่ได้ลงมือทำ',
          'text_en' => 'บ่นหรือต่อรองว่างานต่าง ๆ ยากเกินกว่าที่จะทำได้ทั้ง ๆ ที่ยังไม่ได้ลงมือทำ',
        ],
        [
          'text' => 'ทำงานต่อไปจนเสร็จแม้ว่าเพื่อน ๆ ไปเล่นแล้วก็ตาม',
          'text_en' => 'ทำงานต่อไปจนเสร็จแม้ว่าเพื่อน ๆ ไปเล่นแล้วก็ตาม',
        ],
        [
          'text' => 'ไม่ท้อใจเมื่อประสบกับความผิดหวัง',
          'text_en' => 'ไม่ท้อใจเมื่อประสบกับความผิดหวัง',
        ],
        [
          'text' => 'หาทางตกลงกับเพื่อนหรือเด็กคนอื่นเมื่อเกิดขัดแย้งกัน',
          'text_en' => 'หาทางตกลงกับเพื่อนหรือเด็กคนอื่นเมื่อเกิดขัดแย้งกัน',
        ],
        [
          'text' => 'ไม่เอะอะโวยวายเมื่อพบปัญหาหรือความยุ่งยาก',
          'text_en' => 'ไม่เอะอะโวยวายเมื่อพบปัญหาหรือความยุ่งยาก',
        ],
        [
          'text' => 'รู้จักรอจังหวะหรือรอคอยเวลาที่เหมาะสมในการแก้ปัญหา',
          'text_en' => 'รู้จักรอจังหวะหรือรอคอยเวลาที่เหมาะสมในการแก้ปัญหา',
        ],
        [
          'text' => 'เมื่อมีปัญหา จะคิดหาวิธีแก้หลายๆ ทาง',
          'text_en' => 'เมื่อมีปัญหา จะคิดหาวิธีแก้หลายๆ ทาง',
        ],
        [
          'text' => 'ร่วมกิจกรรมที่ตนไม่ชอบ หรือไม่ถนัดกับผู้อื่นได้',
          'text_en' => 'ร่วมกิจกรรมที่ตนไม่ชอบ หรือไม่ถนัดกับผู้อื่นได้',
        ],
        [
          'text' => 'ทักทายหรือทำความรู้จักกับเพื่อนใหม่',
          'text_en' => 'ทักทายหรือทำความรู้จักกับเพื่อนใหม่',
        ],
        [
          'text' => 'กล้าแสดงความสามารถที่มีอยู่ต่อหน้าคนหมู่มาก',
          'text_en' => 'กล้าแสดงความสามารถที่มีอยู่ต่อหน้าคนหมู่มาก',
        ],
        [
          'text' => 'กล้าซักถามข้อสงสัย',
          'text_en' => 'กล้าซักถามข้อสงสัย',
        ],
        [
          'text' => 'เมื่อถูกถาม ใช้วิธีนิ่งเฉย แทนการตอบว่าไม่รู้',
          'text_en' => 'เมื่อถูกถาม ใช้วิธีนิ่งเฉย แทนการตอบว่าไม่รู้',
        ],
        [
          'text' => 'มักจะใช้ข้ออ้างเมื่อไม่กล้าทำอะไร',
          'text_en' => 'มักจะใช้ข้ออ้างเมื่อไม่กล้าทำอะไร',
        ],
        [
          'text' => 'ไม่กล้าออกความเห็นเมื่ออยู่กับผู้อื่น',
          'text_en' => 'ไม่กล้าออกความเห็นเมื่ออยู่กับผู้อื่น',
        ],
        [
          'text' => 'เล่าถึงความสำเร็จของตนเองให้ผู้ใหญ่ฟัง',
          'text_en' => 'เล่าถึงความสำเร็จของตนเองให้ผู้ใหญ่ฟัง',
        ],
        [
          'text' => 'ไม่อายในสิ่งที่ตนมีอยู่ เช่น ฐานะบ้าน อาชีพของพ่อแม่ รูปร่างหน้าตา ความสามารถของตนเอง ฯลฯ',
          'text_en' => 'ไม่อายในสิ่งที่ตนมีอยู่ เช่น ฐานะบ้าน อาชีพของพ่อแม่ รูปร่างหน้าตา ความสามารถของตนเอง ฯลฯ',
        ],
        [
          'text' => 'ภูมิใจที่ตนเองมีจุดดีหรือความสามารถพิเศษบางอย่าง เช่น เรียนเก่ง เล่นกีฬาเก่ง เล่นดนตรีได้',
          'text_en' => 'ภูมิใจที่ตนเองมีจุดดีหรือความสามารถพิเศษบางอย่าง เช่น เรียนเก่ง เล่นกีฬาเก่ง เล่นดนตรีได้',
        ],
        [
          'text' => 'ภูมิใจที่ได้รับความไว้วางใจจากผู้ใหญ่ เช่น ดูแลน้อง ดูแลสัตว์เลี้ยง ช่วยเหลืองานผู้ใหญ่',
          'text_en' => 'ภูมิใจที่ได้รับความไว้วางใจจากผู้ใหญ่ เช่น ดูแลน้อง ดูแลสัตว์เลี้ยง ช่วยเหลืองานผู้ใหญ่',
        ],
        [
          'text' => 'น้อยใจง่าย',
          'text_en' => 'น้อยใจง่าย',
        ],
        [
          'text' => 'รู้สึกน้อยเนื้อต่ำใจที่สู้คนอื่นไม่ได้',
          'text_en' => 'รู้สึกน้อยเนื้อต่ำใจที่สู้คนอื่นไม่ได้',
        ],
        [
          'text' => 'พอใจกับผลการเรียนที่ได้ แม้จะไม่ดีเด่นมากนัก',
          'text_en' => 'พอใจกับผลการเรียนที่ได้ แม้จะไม่ดีเด่นมากนัก',
        ],
        [
          'text' => 'เมื่อไม่ได้สิ่งที่ต้องการก็รู้จักยอมรับสิ่งทดแทนอย่างอื่นได้',
          'text_en' => 'เมื่อไม่ได้สิ่งที่ต้องการก็รู้จักยอมรับสิ่งทดแทนอย่างอื่นได้',
        ],
        [
          'text' => 'แม้เกมหรือกีฬาแพ้ก็ไม่เสียใจนาน',
          'text_en' => 'แม้เกมหรือกีฬาแพ้ก็ไม่เสียใจนาน',
        ],
        [
          'text' => 'แม้เป็นสิ่งที่ไม่จำเป็นก็เรียกร้องที่จะเอาให้ได้ตามที่ต้องการ',
          'text_en' => 'แม้เป็นสิ่งที่ไม่จำเป็นก็เรียกร้องที่จะเอาให้ได้ตามที่ต้องการ',
        ],
        [
          'text' => 'หงุดหงิดอยู่นานเมื่อไม่ได้ดั่งใจ',
          'text_en' => 'หงุดหงิดอยู่นานเมื่อไม่ได้ดั่งใจ',
        ],
        [
          'text' => 'เมื่อทำอะไรไม่ได้ตามต้องการจะผิดหวังมาก เช่น บ่น คร่ำครวญ หรือซึม',
          'text_en' => 'เมื่อทำอะไรไม่ได้ตามต้องการจะผิดหวังมาก เช่น บ่น คร่ำครวญ หรือซึม',
        ],
        [
          'text' => 'มีอารมณ์ขัน',
          'text_en' => 'มีอารมณ์ขัน',
        ],
        [
          'text' => 'เล่นสนุกสนานหรือล้อกันเล่นสนุก ๆ ได้',
          'text_en' => 'เล่นสนุกสนานหรือล้อกันเล่นสนุก ๆ ได้',
        ],
        [
          'text' => 'เมื่ออยู่คนเดียวก็รู้จักหาสิ่งมาทำให้ตัวเองเพลิดเพลินได้',
          'text_en' => 'เมื่ออยู่คนเดียวก็รู้จักหาสิ่งมาทำให้ตัวเองเพลิดเพลินได้',
        ],
        [
          'text' => 'รู้จักผ่อนคลายอารมณ์ด้วยการดูหนัง ฟังเพลง เล่นสนุก วาดรูป พูดคุยกับเพื่อน',
          'text_en' => 'รู้จักผ่อนคลายอารมณ์ด้วยการดูหนัง ฟังเพลง เล่นสนุก วาดรูป พูดคุยกับเพื่อน',
        ],
        [
          'text' => 'เป็นคนแจ่มใส ยิ้มง่าย หัวเราะง่าย',
          'text_en' => 'เป็นคนแจ่มใส ยิ้มง่าย หัวเราะง่าย',
        ],
        [
          'text' => 'สนุกกับการแข่งขันแม้จะรู้ว่าไม่ชนะ',
          'text_en' => 'สนุกกับการแข่งขันแม้จะรู้ว่าไม่ชนะ',
        ],
      ],
      'title_en' => 'แบบประเมิน EQ เด็ก 6-11 ปี',
      'desc_en' => 'ความฉลาดทางอารมณ์',
      'options_en' => [
        'ไม่เป็นเลย',
        'เป็นบางครั้ง',
        'เป็นบ่อยครั้ง',
        'เป็นประจำ',
      ],
    ],
    [
      'slug' => 'gad-7',
      'title' => 'แบบประเมินภาวะวิตกกังวล (GAD-7]',
      'desc' => 'คัดกรองโรควิตกกังวล',
      'icon' => 'selfworth',
      'metric' => 'คะแนน',
      'reverse_scoring' => [
      ],
      'options' => [
        'ไม่เลย',
        'บางวัน',
        'มากกว่าครึ่งหนึ่ง',
        'เกือบทุกวัน',
      ],
      'bands' => [
        [
          'min' => 0,
          'max' => 9,
          'label' => 'มีความวิตกกังวลในระดับเฉลี่ย',
        ],
        [
          'min' => 10,
          'max' => 14,
          'label' => 'มีความวิตกกังวลในระดับปานกลาง',
        ],
        [
          'min' => 15,
          'max' => 21,
          'label' => 'มีความวิตกกังวลในระดับสูง',
        ],
      ],
      'questions' => [
        [
          'text' => 'รู้สึกตึงเครียด วิตกกังวล หรือ กระวนกระวาย',
          'text_en' => 'รู้สึกตึงเครียด วิตกกังวล หรือ กระวนกระวาย',
        ],
        [
          'text' => 'ไม่สามารถหยุดหรือควบคุมความกังวลได้',
          'text_en' => 'ไม่สามารถหยุดหรือควบคุมความกังวลได้',
        ],
        [
          'text' => 'กังวลมากเกินไปในเรื่องต่างๆ',
          'text_en' => 'กังวลมากเกินไปในเรื่องต่างๆ',
        ],
        [
          'text' => 'ผ่อนคลายได้ยาก',
          'text_en' => 'ผ่อนคลายได้ยาก',
        ],
        [
          'text' => 'รู้สึกกระสับกระส่ายจนไม่สามารถนั่งนิ่งๆ ได้',
          'text_en' => 'รู้สึกกระสับกระส่ายจนไม่สามารถนั่งนิ่งๆ ได้',
        ],
        [
          'text' => 'กลายเป็นคนขี้รำคาญ หรือ หงุดหงิดง่าย',
          'text_en' => 'กลายเป็นคนขี้รำคาญ หรือ หงุดหงิดง่าย',
        ],
        [
          'text' => 'รู้สึกกลัวเหมือนว่าจะมีอะไรร้ายๆ เกิดขึ้น',
          'text_en' => 'รู้สึกกลัวเหมือนว่าจะมีอะไรร้ายๆ เกิดขึ้น',
        ],
      ],
      'title_en' => 'แบบประเมินภาวะวิตกกังวล (GAD-7]',
      'desc_en' => 'คัดกรองโรควิตกกังวล',
      'options_en' => [
        'ไม่เลย',
        'บางวัน',
        'มากกว่าครึ่งหนึ่ง',
        'เกือบทุกวัน',
      ],
    ],
    [
      'slug' => 'game-addict',
      'title' => 'แบบประเมินเด็กติดเกมส์',
      'desc' => 'คัดกรองการติดเกม',
      'icon' => 'selfworth',
      'metric' => 'คะแนน',
      'reverse_scoring' => [
      ],
      'options' => [
        'ไม่ใช่เลย',
        'ไม่น่าใช่',
        'น่าจะใช่',
        'ใช่เลย',
      ],
      'questions' => [
        [
          'text' => 'ตั้งแต่ฉันชอบเล่นเกม ฉันสนใจหรือทำกิจกรรมอย่างอื่นน้อยลงมาก',
          'text_en' => 'ตั้งแต่ฉันชอบเล่นเกม ฉันสนใจหรือทำกิจกรรมอย่างอื่นน้อยลงมาก',
        ],
        [
          'text' => 'ตั้งแต่ฉันชอบเล่นเกม ฉันมักเล่นเกมจนลืมเวลา',
          'text_en' => 'ตั้งแต่ฉันชอบเล่นเกม ฉันมักเล่นเกมจนลืมเวลา',
        ],
        [
          'text' => 'ตั้งแต่ฉันชอบเล่นเกม ความสัมพันธ์ระหว่างฉันกับคนในครอบครัวแย่ลง',
          'text_en' => 'ตั้งแต่ฉันชอบเล่นเกม ความสัมพันธ์ระหว่างฉันกับคนในครอบครัวแย่ลง',
        ],
        [
          'text' => 'ตั้งแต่ฉันชอบเล่นเกม ฉันเคยเล่นเกมดึกมาก จนทำให้ตื่นไปเรียนไม่ไหว',
          'text_en' => 'ตั้งแต่ฉันชอบเล่นเกม ฉันเคยเล่นเกมดึกมาก จนทำให้ตื่นไปเรียนไม่ไหว',
        ],
        [
          'text' => 'ตั้งแต่ฉันชอบเล่นเกม ฉันมักเล่นเกมเกินเวลาที่ฉันได้รับอนุญาตให้เล่น',
          'text_en' => 'ตั้งแต่ฉันชอบเล่นเกม ฉันมักเล่นเกมเกินเวลาที่ฉันได้รับอนุญาตให้เล่น',
        ],
        [
          'text' => 'ตั้งแต่ฉันชอบเล่นเกม ฉันมักอารมณ์เสียเวลามีใครมาบอกให้เลิกเล่นเกม',
          'text_en' => 'ตั้งแต่ฉันชอบเล่นเกม ฉันมักอารมณ์เสียเวลามีใครมาบอกให้เลิกเล่นเกม',
        ],
        [
          'text' => 'ตั้งแต่ฉันชอบเล่นเกม ฉันเคยโดดเรียนเพื่อไปเล่นเกม',
          'text_en' => 'ตั้งแต่ฉันชอบเล่นเกม ฉันเคยโดดเรียนเพื่อไปเล่นเกม',
        ],
        [
          'text' => 'ตั้งแต่ฉันชอบเล่นเกม เรื่องที่ฉันคุยกับเพื่อน ๆ มักเป็นเรื่องเกี่ยวกับเกม',
          'text_en' => 'ตั้งแต่ฉันชอบเล่นเกม เรื่องที่ฉันคุยกับเพื่อน ๆ มักเป็นเรื่องเกี่ยวกับเกม',
        ],
        [
          'text' => 'ตั้งแต่ฉันชอบเล่นเกม ฉันใช้เวลาว่างส่วนใหญ่ไปกับการเล่นเกม',
          'text_en' => 'ตั้งแต่ฉันชอบเล่นเกม ฉันใช้เวลาว่างส่วนใหญ่ไปกับการเล่นเกม',
        ],
        [
          'text' => 'ตั้งแต่ฉันชอบเล่นเกม การเรียนของฉันแย่ลงกว่าเดิมมาก',
          'text_en' => 'ตั้งแต่ฉันชอบเล่นเกม การเรียนของฉันแย่ลงกว่าเดิมมาก',
        ],
        [
          'text' => 'ตั้งแต่ฉันชอบเล่นเกม กลุ่มเพื่อนที่ฉันคบด้วย ชอบเล่นเกมเหมือนกับฉัน',
          'text_en' => 'ตั้งแต่ฉันชอบเล่นเกม กลุ่มเพื่อนที่ฉันคบด้วย ชอบเล่นเกมเหมือนกับฉัน',
        ],
        [
          'text' => 'ตั้งแต่ฉันชอบเล่นเกม เวลาที่ฉันพยายามหักห้ามใจตัวเองไม่ให้เล่นเกมมาก ฉันมักทำไม่สำเร็จ',
          'text_en' => 'ตั้งแต่ฉันชอบเล่นเกม เวลาที่ฉันพยายามหักห้ามใจตัวเองไม่ให้เล่นเกมมาก ฉันมักทำไม่สำเร็จ',
        ],
        [
          'text' => 'ตั้งแต่ฉันชอบเล่นเกม เงินของฉันส่วนใหญ่หมดไปกับเกม (เช่น ซื้อบัตรชั่วโมง, ซื้อหนังสือเกม, ซื้อไอเท็มในเกม ฯลฯ]',
          'text_en' => 'ตั้งแต่ฉันชอบเล่นเกม เงินของฉันส่วนใหญ่หมดไปกับเกม (เช่น ซื้อบัตรชั่วโมง, ซื้อหนังสือเกม, ซื้อไอเท็มในเกม ฯลฯ]',
        ],
        [
          'text' => 'ตั้งแต่ฉันชอบเล่นเกม หลายคนบอกว่า อารมณ์ของฉันเปลี่ยนไป (เบื่อง่าย, หงุดหงิดง่าย, ขี้รำคาญ ฯลฯ]',
          'text_en' => 'ตั้งแต่ฉันชอบเล่นเกม หลายคนบอกว่า อารมณ์ของฉันเปลี่ยนไป (เบื่อง่าย, หงุดหงิดง่าย, ขี้รำคาญ ฯลฯ]',
        ],
        [
          'text' => 'ตั้งแต่ฉันชอบเล่นเกม หลายคนบอกว่า พฤติกรรมของฉันเปลี่ยนไป (เถียงเก่ง, ไม่เชื่อฟัง, ไม่รับผิดชอบ ฯลฯ]',
          'text_en' => 'ตั้งแต่ฉันชอบเล่นเกม หลายคนบอกว่า พฤติกรรมของฉันเปลี่ยนไป (เถียงเก่ง, ไม่เชื่อฟัง, ไม่รับผิดชอบ ฯลฯ]',
        ],
        [
          'text' => 'ตั้งแต่ฉันชอบเล่นเกม หลายคนบอกว่าฉันติดเกม',
          'text_en' => 'ตั้งแต่ฉันชอบเล่นเกม หลายคนบอกว่าฉันติดเกม',
        ],
      ],
      'title_en' => 'แบบประเมินเด็กติดเกมส์',
      'desc_en' => 'คัดกรองการติดเกม',
      'options_en' => [
        'ไม่ใช่เลย',
        'ไม่น่าใช่',
        'น่าจะใช่',
        'ใช่เลย',
      ],
    ],
    [
      'slug' => 'kid-anxiety',
      'title' => 'แบบประเมินภาวะกังวลในเด็ก',
      'desc' => 'ประเมินความวิตกกังวล',
      'icon' => 'selfworth',
      'metric' => 'คะแนน',
      'reverse_scoring' => [
      ],
      'options' => [
        'ไม่จริง',
        'จริงบ้าง บางครั้ง',
        'จริง บ่อยๆ',
      ],
      'questions' => [
        [
          'text' => 'เวลารู้สึกกลัวมากๆ ฉันจะหายใจลำบากติดขัด',
          'text_en' => 'เวลารู้สึกกลัวมากๆ ฉันจะหายใจลำบากติดขัด',
        ],
        [
          'text' => 'ฉันมักปวดหัวเวลาอยู่ที่โรงเรียน',
          'text_en' => 'ฉันมักปวดหัวเวลาอยู่ที่โรงเรียน',
        ],
        [
          'text' => 'ฉันไม่ชอบอยู่กับคนที่ไม่คุ้นเคยกัน',
          'text_en' => 'ฉันไม่ชอบอยู่กับคนที่ไม่คุ้นเคยกัน',
        ],
        [
          'text' => 'ฉันรู้สึกกลัวเวลาต้องไปนอนที่อื่นไกลจากบ้าน',
          'text_en' => 'ฉันรู้สึกกลัวเวลาต้องไปนอนที่อื่นไกลจากบ้าน',
        ],
        [
          'text' => 'ฉันกังวลว่าคนอื่นจะรู้สึกชอบ/ ไม่ชอบฉัน',
          'text_en' => 'ฉันกังวลว่าคนอื่นจะรู้สึกชอบ/ ไม่ชอบฉัน',
        ],
        [
          'text' => 'เวลารู้สึกกลัวมากๆ ฉันมีอาการคล้ายจะหมดสติไป',
          'text_en' => 'เวลารู้สึกกลัวมากๆ ฉันมีอาการคล้ายจะหมดสติไป',
        ],
        [
          'text' => 'ฉันเป็นเด็กวิตกกังวลง่าย',
          'text_en' => 'ฉันเป็นเด็กวิตกกังวลง่าย',
        ],
        [
          'text' => 'ฉันชอบตามติดพ่อแม่ (ผู้ปกครอง]ไปทุกที่ไม่ว่าจะไปที่ไหน',
          'text_en' => 'ฉันชอบตามติดพ่อแม่ (ผู้ปกครอง]ไปทุกที่ไม่ว่าจะไปที่ไหน',
        ],
        [
          'text' => 'คนอื่นๆบอกว่าฉันดูวิตกกังวลง่าย',
          'text_en' => 'คนอื่นๆบอกว่าฉันดูวิตกกังวลง่าย',
        ],
        [
          'text' => 'ฉันรู้สึกกังวลเวลาอยู่กับคนที่ไม่คุ้นเคย',
          'text_en' => 'ฉันรู้สึกกังวลเวลาอยู่กับคนที่ไม่คุ้นเคย',
        ],
        [
          'text' => 'ฉันมีอาการปวดท้องเวลาอยู่ที่โรงเรียน',
          'text_en' => 'ฉันมีอาการปวดท้องเวลาอยู่ที่โรงเรียน',
        ],
        [
          'text' => 'เวลารู้สึกกลัวมากๆ ฉันจะรู้สึกเหมือนกำลังจะควบคุมตนเองไม่ได้',
          'text_en' => 'เวลารู้สึกกลัวมากๆ ฉันจะรู้สึกเหมือนกำลังจะควบคุมตนเองไม่ได้',
        ],
        [
          'text' => 'ฉันรู้สึกกังวลถ้าต้องนอนคนเดียว',
          'text_en' => 'ฉันรู้สึกกังวลถ้าต้องนอนคนเดียว',
        ],
        [
          'text' => 'ฉันกังวลว่าตนเองจะดีหรือเก่งเท่าเด็กคนอื่นๆหรือไม่',
          'text_en' => 'ฉันกังวลว่าตนเองจะดีหรือเก่งเท่าเด็กคนอื่นๆหรือไม่',
        ],
        [
          'text' => 'เวลารู้สึกกลัวมากๆ ฉันจะรู้สึกเหมือนสิ่งต่างๆรอบตัวดูไม่จริง',
          'text_en' => 'เวลารู้สึกกลัวมากๆ ฉันจะรู้สึกเหมือนสิ่งต่างๆรอบตัวดูไม่จริง',
        ],
        [
          'text' => 'ฉันมีฝันร้ายว่ามีเหตุการณ์ไม่ดีเกิดขึ้นกับพ่อแม่ (ผู้ปกครอง] ของฉัน',
          'text_en' => 'ฉันมีฝันร้ายว่ามีเหตุการณ์ไม่ดีเกิดขึ้นกับพ่อแม่ (ผู้ปกครอง] ของฉัน',
        ],
        [
          'text' => 'ฉันกังวลเกี่ยวกับการไปโรงเรียน',
          'text_en' => 'ฉันกังวลเกี่ยวกับการไปโรงเรียน',
        ],
        [
          'text' => 'เวลารู้สึกกลัวมากๆ หัวใจฉันจะเต้นรัวเร็ว',
          'text_en' => 'เวลารู้สึกกลัวมากๆ หัวใจฉันจะเต้นรัวเร็ว',
        ],
        [
          'text' => 'ฉันตื่นเต้นง่าย',
          'text_en' => 'ฉันตื่นเต้นง่าย',
        ],
        [
          'text' => 'ฉันฝันร้ายว่ามีเรื่องไม่ดีเกิดขึ้นกับตนเอง',
          'text_en' => 'ฉันฝันร้ายว่ามีเรื่องไม่ดีเกิดขึ้นกับตนเอง',
        ],
        [
          'text' => 'ฉันกังวลว่าสิ่งต่างๆจะเป็นไปด้วยดีหรือไม่',
          'text_en' => 'ฉันกังวลว่าสิ่งต่างๆจะเป็นไปด้วยดีหรือไม่',
        ],
        [
          'text' => 'เวลารู้สึกกลัวมากๆ ฉันจะมีเหงื่อออกมาก',
          'text_en' => 'เวลารู้สึกกลัวมากๆ ฉันจะมีเหงื่อออกมาก',
        ],
        [
          'text' => 'ฉันเป็นเด็กขี้กังวล',
          'text_en' => 'ฉันเป็นเด็กขี้กังวล',
        ],
        [
          'text' => 'ฉันเกิดอาการกลัวขึ้นมาอย่างมากโดยไม่มีเหตุผลชัดเจน',
          'text_en' => 'ฉันเกิดอาการกลัวขึ้นมาอย่างมากโดยไม่มีเหตุผลชัดเจน',
        ],
        [
          'text' => 'ฉันกลัวการอยู่คนเดียวในบ้าน',
          'text_en' => 'ฉันกลัวการอยู่คนเดียวในบ้าน',
        ],
        [
          'text' => 'เป็นเรื่องยากสำหรับฉันที่จะพูดคุยกับคนที่ไม่รู้จักคุ้นเคย',
          'text_en' => 'เป็นเรื่องยากสำหรับฉันที่จะพูดคุยกับคนที่ไม่รู้จักคุ้นเคย',
        ],
        [
          'text' => 'เวลารู้สึกกลัวมากๆ ฉันมีอาการคล้ายกำลังจะสำลัก',
          'text_en' => 'เวลารู้สึกกลัวมากๆ ฉันมีอาการคล้ายกำลังจะสำลัก',
        ],
        [
          'text' => 'คนอื่นๆบอกว่าฉันขี้กังวลมากเกินไป',
          'text_en' => 'คนอื่นๆบอกว่าฉันขี้กังวลมากเกินไป',
        ],
        [
          'text' => 'ฉันไม่ชอบอยู่ห่างจากคนในครอบครัวฉัน',
          'text_en' => 'ฉันไม่ชอบอยู่ห่างจากคนในครอบครัวฉัน',
        ],
        [
          'text' => 'ฉันกลัวว่าจะเกิดอาการกังวลมากคล้ายแพนิค',
          'text_en' => 'ฉันกลัวว่าจะเกิดอาการกังวลมากคล้ายแพนิค',
        ],
        [
          'text' => 'ฉันกังวลว่าอาจมีเรื่องไม่ดีเกิดขึ้นกับพ่อแม่ (ผู้ปกครอง] ของฉัน',
          'text_en' => 'ฉันกังวลว่าอาจมีเรื่องไม่ดีเกิดขึ้นกับพ่อแม่ (ผู้ปกครอง] ของฉัน',
        ],
        [
          'text' => 'ฉันรู้สึกเขินอายเวลาอยู่กับคนที่ไม่รู้จักดี',
          'text_en' => 'ฉันรู้สึกเขินอายเวลาอยู่กับคนที่ไม่รู้จักดี',
        ],
        [
          'text' => 'ฉันกังวลเกี่ยวกับสิ่งที่จะเกิดขึ้นในอนาคต',
          'text_en' => 'ฉันกังวลเกี่ยวกับสิ่งที่จะเกิดขึ้นในอนาคต',
        ],
        [
          'text' => 'เวลารู้สึกกลัวมากๆ ฉันจะมีอาการคล้ายจะอาเจียน',
          'text_en' => 'เวลารู้สึกกลัวมากๆ ฉันจะมีอาการคล้ายจะอาเจียน',
        ],
        [
          'text' => 'ฉันกังวลว่าตนเองทำสิ่งต่างๆได้ดีพอหรือยัง',
          'text_en' => 'ฉันกังวลว่าตนเองทำสิ่งต่างๆได้ดีพอหรือยัง',
        ],
        [
          'text' => 'ฉันกลัวการไปโรงเรียน',
          'text_en' => 'ฉันกลัวการไปโรงเรียน',
        ],
        [
          'text' => 'ฉันกังวลกับสิ่งที่ได้เกิดขึ้นไปแล้ว',
          'text_en' => 'ฉันกังวลกับสิ่งที่ได้เกิดขึ้นไปแล้ว',
        ],
        [
          'text' => 'เวลารู้สึกกลัวมากๆ ฉันรู้สึกคลื่นไส้',
          'text_en' => 'เวลารู้สึกกลัวมากๆ ฉันรู้สึกคลื่นไส้',
        ],
        [
          'text' => 'ฉันรู้สึกกังวลเวลาต้องทำสิ่งต่างๆ ต่อหน้าคนอื่น (เช่น อ่านหนังสือ พูด หรือ เล่นกีฬา]',
          'text_en' => 'ฉันรู้สึกกังวลเวลาต้องทำสิ่งต่างๆ ต่อหน้าคนอื่น (เช่น อ่านหนังสือ พูด หรือ เล่นกีฬา]',
        ],
        [
          'text' => 'ฉันรู้สึกกังวลเวลาไปงานเลี้ยง ปาร์ตี้ หรือ ที่ต่างๆที่มีคนที่ไม่สนิทคุ้นเคยอยู่',
          'text_en' => 'ฉันรู้สึกกังวลเวลาไปงานเลี้ยง ปาร์ตี้ หรือ ที่ต่างๆที่มีคนที่ไม่สนิทคุ้นเคยอยู่',
        ],
        [
          'text' => 'ฉันเป็นคนขี้อาย',
          'text_en' => 'ฉันเป็นคนขี้อาย',
        ],
      ],
      'title_en' => 'แบบประเมินภาวะกังวลในเด็ก',
      'desc_en' => 'ประเมินความวิตกกังวล',
      'options_en' => [
        'ไม่จริง',
        'จริงบ้าง บางครั้ง',
        'จริง บ่อยๆ',
      ],
    ],
    [
      'slug' => 'ld',
      'title' => 'แบบคัดกรองภาวะ LD',
      'desc' => 'บกพร่องทางการเรียนรู้',
      'icon' => 'selfworth',
      'metric' => 'คะแนน',
      'reverse_scoring' => [
      ],
      'options' => [
        'ใช่',
        'ไม่ใช่',
      ],
      'questions' => [
        [
          'text' => 'ดูฉลาดหรือปกติ ในด้านอื่น ๆ นอกจากในด้านการเรียน',
          'text_en' => 'ดูฉลาดหรือปกติ ในด้านอื่น ๆ นอกจากในด้านการเรียน',
        ],
        [
          'text' => 'ต้องมีปัญหาทางการเรียน ซึ่งอาจทำไม่ได้เลยหรือทำได้ต่ำกว่า ๒ชั้นเรียน ในด้านใดด้านหนึ่งหรือมากกว่า ๑ด้าน ต่อไปนี้ (ด้านการอ่าน, ด้านการเขียน, ด้านการคำนวณ]',
          'text_en' => 'ต้องมีปัญหาทางการเรียน ซึ่งอาจทำไม่ได้เลยหรือทำได้ต่ำกว่า ๒ชั้นเรียน ในด้านใดด้านหนึ่งหรือมากกว่า ๑ด้าน ต่อไปนี้ (ด้านการอ่าน, ด้านการเขียน, ด้านการคำนวณ]',
        ],
        [
          'text' => 'ไม่มีปัญหาทางด้านการเห็น การได้ยิน สติปัญญา หรือออทิสติกหรือจากการถูกละทิ้ง ละเลย หรือความด้อยโอกาสอื่น ๆ',
          'text_en' => 'ไม่มีปัญหาทางด้านการเห็น การได้ยิน สติปัญญา หรือออทิสติกหรือจากการถูกละทิ้ง ละเลย หรือความด้อยโอกาสอื่น ๆ',
        ],
        [
          'text' => 'อ่านช้าอ่านข้าม อ่านไม่หมด',
          'text_en' => 'อ่านช้าอ่านข้าม อ่านไม่หมด',
        ],
        [
          'text' => 'จำคำศัพท์คำเดิมไม่ได้ ทั้งๆ ที่เคยผ่านสายตามาแล้วหลายครั้ง',
          'text_en' => 'จำคำศัพท์คำเดิมไม่ได้ ทั้งๆ ที่เคยผ่านสายตามาแล้วหลายครั้ง',
        ],
        [
          'text' => 'อ่านเพิ่มคำ ซ้ำคำ อ่านผิดตำแหน่ง',
          'text_en' => 'อ่านเพิ่มคำ ซ้ำคำ อ่านผิดตำแหน่ง',
        ],
        [
          'text' => 'อ่านสลับตัวอักษรหรือออกเสียงสลับกัน เช่น บก อ่านเป็น กบ',
          'text_en' => 'อ่านสลับตัวอักษรหรือออกเสียงสลับกัน เช่น บก อ่านเป็น กบ',
        ],
        [
          'text' => 'สับสนในพยัญชนะคล้ายกันเช่น ก ภ ถ, ฦ ฎ ฏ, ด ต ค',
          'text_en' => 'สับสนในพยัญชนะคล้ายกันเช่น ก ภ ถ, ฦ ฎ ฏ, ด ต ค',
        ],
        [
          'text' => 'จำศัพท์ใหม่ไม่ค่อยได้',
          'text_en' => 'จำศัพท์ใหม่ไม่ค่อยได้',
        ],
        [
          'text' => 'มีปัญหาในการผสมคำ การอ่านออกเสียงคำ',
          'text_en' => 'มีปัญหาในการผสมคำ การอ่านออกเสียงคำ',
        ],
        [
          'text' => 'สับสนคำที่คล้ายกัน เช่น บาน/ บ้าน',
          'text_en' => 'สับสนคำที่คล้ายกัน เช่น บาน/ บ้าน',
        ],
        [
          'text' => 'อ่านคำที่ไม่คุ้นเคยไม่ได้',
          'text_en' => 'อ่านคำที่ไม่คุ้นเคยไม่ได้',
        ],
        [
          'text' => 'อ่านคำในระดับชั้นของตนเองไม่ได้',
          'text_en' => 'อ่านคำในระดับชั้นของตนเองไม่ได้',
        ],
        [
          'text' => 'ไม่ชอบและหลีกเลี่ยงการเขียน หรือการลอกคำ',
          'text_en' => 'ไม่ชอบและหลีกเลี่ยงการเขียน หรือการลอกคำ',
        ],
        [
          'text' => 'เขียนไม่สวยไม่เรียบร้อย สกปรก ขีดทิ้ง ลบทิ้ง',
          'text_en' => 'เขียนไม่สวยไม่เรียบร้อย สกปรก ขีดทิ้ง ลบทิ้ง',
        ],
        [
          'text' => 'เขียนตัวอักษรและคำที่คล้ายๆ กันผิด',
          'text_en' => 'เขียนตัวอักษรและคำที่คล้ายๆ กันผิด',
        ],
        [
          'text' => 'ลอกคำบนกระดานผิด (ลอกไม่ครบตกหล่น]',
          'text_en' => 'ลอกคำบนกระดานผิด (ลอกไม่ครบตกหล่น]',
        ],
        [
          'text' => 'เขียนหนังสือไม่เว้นวรรค ไม่เว้นช่องไฟ ตัวอักษรเบียดกันจนทำให้อ่านยาก',
          'text_en' => 'เขียนหนังสือไม่เว้นวรรค ไม่เว้นช่องไฟ ตัวอักษรเบียดกันจนทำให้อ่านยาก',
        ],
        [
          'text' => 'เขียนสลับตำแหน่งระหว่างพยัญชนะ สระ เช่น ตโ',
          'text_en' => 'เขียนสลับตำแหน่งระหว่างพยัญชนะ สระ เช่น ตโ',
        ],
        [
          'text' => 'เขียนตามคำบอกของคำในระดับชั้นตนเองไม่ได้',
          'text_en' => 'เขียนตามคำบอกของคำในระดับชั้นตนเองไม่ได้',
        ],
        [
          'text' => 'เขียนตัวอักษรหรือตัวเลขกลับด้าน คล้ายมองกระจกเงา',
          'text_en' => 'เขียนตัวอักษรหรือตัวเลขกลับด้าน คล้ายมองกระจกเงา',
        ],
        [
          'text' => 'เขียนพยัญชนะหรือตัวเลขที่มีลักษณะคล้ายกันสลับกัน เช่น ม-น, ด-ค, พ-ย, b-d, p-q, ๖-๙',
          'text_en' => 'เขียนพยัญชนะหรือตัวเลขที่มีลักษณะคล้ายกันสลับกัน เช่น ม-น, ด-ค, พ-ย, b-d, p-q, ๖-๙',
        ],
        [
          'text' => 'เรียงลำดับตัวอักษรผิด เช่น สถิติ เป็น สติถิ',
          'text_en' => 'เรียงลำดับตัวอักษรผิด เช่น สถิติ เป็น สติถิ',
        ],
        [
          'text' => 'นับเลขเรียงลำดับ นับเพิ่ม นับลดไม่ได้',
          'text_en' => 'นับเลขเรียงลำดับ นับเพิ่ม นับลดไม่ได้',
        ],
        [
          'text' => 'ยากลำบากในการบวก,ลบ จำนวนจริง',
          'text_en' => 'ยากลำบากในการบวก,ลบ จำนวนจริง',
        ],
        [
          'text' => 'ยากลำบากในการใช้เทคนิคการนับจำนวนเพิ่มทีละ ๒, ๕, ๑๐, ๑๐๐',
          'text_en' => 'ยากลำบากในการใช้เทคนิคการนับจำนวนเพิ่มทีละ ๒, ๕, ๑๐, ๑๐๐',
        ],
        [
          'text' => 'ยากลำบากในการประมาณจำนวนค่า',
          'text_en' => 'ยากลำบากในการประมาณจำนวนค่า',
        ],
        [
          'text' => 'ยากลำบากในการเปรียบเทียบ มากกว่า น้อยกว่า',
          'text_en' => 'ยากลำบากในการเปรียบเทียบ มากกว่า น้อยกว่า',
        ],
        [
          'text' => 'แก้โจทย์ปัญหาง่ายๆ ไม่ได้',
          'text_en' => 'แก้โจทย์ปัญหาง่ายๆ ไม่ได้',
        ],
        [
          'text' => 'สับสนไม่เข้าใจเรื่องเวลา ทิศทาง',
          'text_en' => 'สับสนไม่เข้าใจเรื่องเวลา ทิศทาง',
        ],
        [
          'text' => 'บอกความหมาย หรือสัญลักษณ์ทางคณิตศาสตร์ ไม่ได้ เช่น +, -, ×, >, <, =',
          'text_en' => 'บอกความหมาย หรือสัญลักษณ์ทางคณิตศาสตร์ ไม่ได้ เช่น +, -, ×, >, <, =',
        ],
        [
          'text' => 'เปรียบเทียบขนาด รูปทรง ระยะทาง ตำแหน่งไม่ได้',
          'text_en' => 'เปรียบเทียบขนาด รูปทรง ระยะทาง ตำแหน่งไม่ได้',
        ],
        [
          'text' => 'เขียนตัวเลขกลับ เช่น ๕ s , ๖ ๙',
          'text_en' => 'เขียนตัวเลขกลับ เช่น ๕ s , ๖ ๙',
        ],
        [
          'text' => 'ไม่ทำตามคำสั่ง ทำงานไม่เสร็จ',
          'text_en' => 'ไม่ทำตามคำสั่ง ทำงานไม่เสร็จ',
        ],
        [
          'text' => 'มีความยากลำบากในการจัดระบบงาน',
          'text_en' => 'มีความยากลำบากในการจัดระบบงาน',
        ],
        [
          'text' => 'ทำของหายบ่อยๆ เป็นประจำ เช่น ของเล่น ดินสอ หนังสือ อุปกรณ์การเรียน',
          'text_en' => 'ทำของหายบ่อยๆ เป็นประจำ เช่น ของเล่น ดินสอ หนังสือ อุปกรณ์การเรียน',
        ],
        [
          'text' => 'ลืมทำกิจกรรมที่เป็นกิจวัตรประจำวัน',
          'text_en' => 'ลืมทำกิจกรรมที่เป็นกิจวัตรประจำวัน',
        ],
        [
          'text' => 'สับสนด้านซ้าย ขวา',
          'text_en' => 'สับสนด้านซ้าย ขวา',
        ],
        [
          'text' => 'วางสิ่งของเครื่องใช้ไม่เป็นระเบียบ',
          'text_en' => 'วางสิ่งของเครื่องใช้ไม่เป็นระเบียบ',
        ],
        [
          'text' => 'เสียสมาธิง่ายมองไปยังทุกสิ่งที่เคลื่อนไหวผ่านสายตา',
          'text_en' => 'เสียสมาธิง่ายมองไปยังทุกสิ่งที่เคลื่อนไหวผ่านสายตา',
        ],
        [
          'text' => 'มีอาการเครียดขณะอ่าน',
          'text_en' => 'มีอาการเครียดขณะอ่าน',
        ],
        [
          'text' => 'ใจไม่ค่อยจดจ่ออยู่กับงาน มองโน่นมองนี่บ่อยๆ',
          'text_en' => 'ใจไม่ค่อยจดจ่ออยู่กับงาน มองโน่นมองนี่บ่อยๆ',
        ],
        [
          'text' => 'หลีกเลี่ยง ไม่ชอบ หรือลังเลใจที่จะทำงานหรือการบ้านที่ต้องมีระเบียบและใส่ใจในงาน',
          'text_en' => 'หลีกเลี่ยง ไม่ชอบ หรือลังเลใจที่จะทำงานหรือการบ้านที่ต้องมีระเบียบและใส่ใจในงาน',
        ],
        [
          'text' => 'ดูฉลาดหรือปกติ ในด้านอื่น ๆ นอกจากในด้านการเรียน',
          'text_en' => 'ดูฉลาดหรือปกติ ในด้านอื่น ๆ นอกจากในด้านการเรียน',
        ],
        [
          'text' => 'ต้องมีปัญหาทางการเรียน ซึ่งอาจทำไม่ได้เลยหรือทำได้ต่ำกว่า ๒ชั้นเรียน ในด้านใดด้านหนึ่งหรือมากกว่า ๑ด้าน ต่อไปนี้ (ด้านการอ่าน, ด้านการเขียน, ด้านการคำนวณ]',
          'text_en' => 'ต้องมีปัญหาทางการเรียน ซึ่งอาจทำไม่ได้เลยหรือทำได้ต่ำกว่า ๒ชั้นเรียน ในด้านใดด้านหนึ่งหรือมากกว่า ๑ด้าน ต่อไปนี้ (ด้านการอ่าน, ด้านการเขียน, ด้านการคำนวณ]',
        ],
        [
          'text' => 'ไม่มีปัญหาทางด้านการเห็น การได้ยิน สติปัญญา หรือออทิสติกหรือจากการถูกละทิ้ง ละเลย หรือความด้อยโอกาสอื่น ๆ',
          'text_en' => 'ไม่มีปัญหาทางด้านการเห็น การได้ยิน สติปัญญา หรือออทิสติกหรือจากการถูกละทิ้ง ละเลย หรือความด้อยโอกาสอื่น ๆ',
        ],
        [
          'text' => 'อ่านข้ามบรรทัดอ่านซ้ำบรรทัด',
          'text_en' => 'อ่านข้ามบรรทัดอ่านซ้ำบรรทัด',
        ],
        [
          'text' => 'อ่านคำสมาส สนธิ ไม่ได้',
          'text_en' => 'อ่านคำสมาส สนธิ ไม่ได้',
        ],
        [
          'text' => 'อ่านอักษรนำไม่ได้',
          'text_en' => 'อ่านอักษรนำไม่ได้',
        ],
        [
          'text' => 'เปรียบเทียบความหมายของคำไม่ได้',
          'text_en' => 'เปรียบเทียบความหมายของคำไม่ได้',
        ],
        [
          'text' => 'ไม่รู้จักหน้าที่ของคำในประโยค',
          'text_en' => 'ไม่รู้จักหน้าที่ของคำในประโยค',
        ],
        [
          'text' => 'มีปัญหาในการอ่านคำพ้องรูป พ้องเสียง',
          'text_en' => 'มีปัญหาในการอ่านคำพ้องรูป พ้องเสียง',
        ],
        [
          'text' => 'อ่านราชาศัพท์ไม่ได้',
          'text_en' => 'อ่านราชาศัพท์ไม่ได้',
        ],
        [
          'text' => 'อ่านบทร้อยกรองลำบาก',
          'text_en' => 'อ่านบทร้อยกรองลำบาก',
        ],
        [
          'text' => 'อ่านคำยากประจำบทไม่ได้',
          'text_en' => 'อ่านคำยากประจำบทไม่ได้',
        ],
        [
          'text' => 'อ่านจับใจความสำคัญของเรื่องไม่ได้',
          'text_en' => 'อ่านจับใจความสำคัญของเรื่องไม่ได้',
        ],
        [
          'text' => 'ฟังคำบรรยายแล้วจดโน้ตย่อไม่ได้',
          'text_en' => 'ฟังคำบรรยายแล้วจดโน้ตย่อไม่ได้',
        ],
        [
          'text' => 'เขียนคำที่มีตัวการันต์ไม่ได้',
          'text_en' => 'เขียนคำที่มีตัวการันต์ไม่ได้',
        ],
        [
          'text' => 'เขียนสรุปใจความสำคัญไม่ได้',
          'text_en' => 'เขียนสรุปใจความสำคัญไม่ได้',
        ],
        [
          'text' => 'เขียนบรรยายความรู้สึกนึกคิดของตนเองไม่ได้',
          'text_en' => 'เขียนบรรยายความรู้สึกนึกคิดของตนเองไม่ได้',
        ],
        [
          'text' => 'เขียนเรียงความยาวๆ ไม่ได้',
          'text_en' => 'เขียนเรียงความยาวๆ ไม่ได้',
        ],
        [
          'text' => 'เขียนบรรยายภาพไม่ได้',
          'text_en' => 'เขียนบรรยายภาพไม่ได้',
        ],
        [
          'text' => 'เขียนย่อความไม่ได้',
          'text_en' => 'เขียนย่อความไม่ได้',
        ],
        [
          'text' => 'เขียนคำพ้องรูป - พ้องเสียงไม่ได้',
          'text_en' => 'เขียนคำพ้องรูป - พ้องเสียงไม่ได้',
        ],
        [
          'text' => 'เขียนคำยากประจำบทไม่ได้',
          'text_en' => 'เขียนคำยากประจำบทไม่ได้',
        ],
        [
          'text' => 'เขียนตามคำบอกไม่ได้',
          'text_en' => 'เขียนตามคำบอกไม่ได้',
        ],
        [
          'text' => 'ไม่เข้าใจความหมายและสัญลักษณ์ทางคณิตศาสตร์',
          'text_en' => 'ไม่เข้าใจความหมายและสัญลักษณ์ทางคณิตศาสตร์',
        ],
        [
          'text' => 'ไม่สามารถเขียนเศษส่วนในลักษณะทศนิยมและทศนิยมซ้ำ',
          'text_en' => 'ไม่สามารถเขียนเศษส่วนในลักษณะทศนิยมและทศนิยมซ้ำ',
        ],
        [
          'text' => 'ไม่เข้าใจและเขียนจำนวนตรรกยะ และอตรรกยะไม่ได้',
          'text_en' => 'ไม่เข้าใจและเขียนจำนวนตรรกยะ และอตรรกยะไม่ได้',
        ],
        [
          'text' => 'ไม่เข้าใจและเขียนจำนวนในรูปอัตราส่วน สัดส่วนและร้อยละในการแก้โจทย์ปัญหา',
          'text_en' => 'ไม่เข้าใจและเขียนจำนวนในรูปอัตราส่วน สัดส่วนและร้อยละในการแก้โจทย์ปัญหา',
        ],
        [
          'text' => 'ไม่เข้าใจการเขียนระบบจำนวนจริง',
          'text_en' => 'ไม่เข้าใจการเขียนระบบจำนวนจริง',
        ],
        [
          'text' => 'ไม่เข้าใจและเขียนค่าสัมบูรณ์ไม่ได้',
          'text_en' => 'ไม่เข้าใจและเขียนค่าสัมบูรณ์ไม่ได้',
        ],
        [
          'text' => 'ไม่เข้าใจการเขียนจำนวนจริงในรูปเลขยกกำลังที่เป็นจำนวนตรรกยะ จำนวนจริงที่อยู่ในเกณฑ์',
          'text_en' => 'ไม่เข้าใจการเขียนจำนวนจริงในรูปเลขยกกำลังที่เป็นจำนวนตรรกยะ จำนวนจริงที่อยู่ในเกณฑ์',
        ],
        [
          'text' => 'ไม่เข้าใจเรื่องการประมาณค่า',
          'text_en' => 'ไม่เข้าใจเรื่องการประมาณค่า',
        ],
        [
          'text' => 'ไม่เข้าใจเรื่องจำนวนเต็มและเศษส่วน',
          'text_en' => 'ไม่เข้าใจเรื่องจำนวนเต็มและเศษส่วน',
        ],
        [
          'text' => 'ไม่เข้าใจเกี่ยวกับระบบจำนวน',
          'text_en' => 'ไม่เข้าใจเกี่ยวกับระบบจำนวน',
        ],
        [
          'text' => 'ลังเลในความสามารถของตนเอง มักจะพึ่งโชคลางหรือสิ่งภายนอกมากกว่าการทำงานหนัก',
          'text_en' => 'ลังเลในความสามารถของตนเอง มักจะพึ่งโชคลางหรือสิ่งภายนอกมากกว่าการทำงานหนัก',
        ],
        [
          'text' => 'ไม่ทำตามคำสั่ง ทำงานไม่เสร็จ',
          'text_en' => 'ไม่ทำตามคำสั่ง ทำงานไม่เสร็จ',
        ],
        [
          'text' => 'มีความยากลำบากในการจัดระบบงาน',
          'text_en' => 'มีความยากลำบากในการจัดระบบงาน',
        ],
        [
          'text' => 'หลีกเลี่ยง ไม่ชอบ หรือลังเลใจที่จะทำงานหรือการบ้านที่ต้องมีระเบียบและใส่ใจในงาน',
          'text_en' => 'หลีกเลี่ยง ไม่ชอบ หรือลังเลใจที่จะทำงานหรือการบ้านที่ต้องมีระเบียบและใส่ใจในงาน',
        ],
        [
          'text' => 'หันเหความสนใจไปสู่ภายนอกได้ง่าย',
          'text_en' => 'หันเหความสนใจไปสู่ภายนอกได้ง่าย',
        ],
        [
          'text' => 'ลืมทำกิจกรรมที่เป็นกิจวัตรประจำวัน',
          'text_en' => 'ลืมทำกิจกรรมที่เป็นกิจวัตรประจำวัน',
        ],
        [
          'text' => 'สับสนด้านซ้าย ขวา',
          'text_en' => 'สับสนด้านซ้าย ขวา',
        ],
        [
          'text' => 'วางสิ่งของเครื่องใช้ไม่เป็นระเบียบ',
          'text_en' => 'วางสิ่งของเครื่องใช้ไม่เป็นระเบียบ',
        ],
        [
          'text' => 'ใจไม่ค่อยจดจ่ออยู่กับงาน มองโน่นมองนี่บ่อยๆ',
          'text_en' => 'ใจไม่ค่อยจดจ่ออยู่กับงาน มองโน่นมองนี่บ่อยๆ',
        ],
        [
          'text' => 'เสียสมาธิง่ายมองไปยังทุกสิ่งที่เคลื่อนไหวผ่านสายตา',
          'text_en' => 'เสียสมาธิง่ายมองไปยังทุกสิ่งที่เคลื่อนไหวผ่านสายตา',
        ],
      ],
      'title_en' => 'แบบคัดกรองภาวะ LD',
      'desc_en' => 'บกพร่องทางการเรียนรู้',
      'options_en' => [
        'yes',
        'no',
      ],
    ],
    [
      'slug' => 'pises-10',
      'title' => 'แบบประเมิน PISES-10',
      'desc' => 'ประเมินสุขภาพจิต',
      'icon' => 'selfworth',
      'metric' => 'คะแนน',
      'reverse_scoring' => [
      ],
      'options' => [
        'ไม่มีอาการ',
        'อาการเล็กน้อย',
        'อาการมาก',
        'อาการรุนแรง',
      ],
      'questions' => [
        [
          'text' => 'ตึงเครียด',
          'text_en' => 'ตึงเครียด',
        ],
        [
          'text' => 'ไม่มีความสุข/ไม่ร่าเริง',
          'text_en' => 'ไม่มีความสุข/ไม่ร่าเริง',
        ],
        [
          'text' => 'กังวล/หวาดเสียว/เกรงว่าเหตุการณ์รุนแรงจะเกิดขึ้น',
          'text_en' => 'กังวล/หวาดเสียว/เกรงว่าเหตุการณ์รุนแรงจะเกิดขึ้น',
        ],
        [
          'text' => 'คิดถึงเหตุการณ์หรือภาพเหตุการณ์ผุดขึ้นมาซ้ำๆ ทั้งตื่น และหลับ (ฝันถึง]',
          'text_en' => 'คิดถึงเหตุการณ์หรือภาพเหตุการณ์ผุดขึ้นมาซ้ำๆ ทั้งตื่น และหลับ (ฝันถึง]',
        ],
        [
          'text' => 'วิตกกังวลคิดวนเวียนซ้ำๆ เรื่องเดิม',
          'text_en' => 'วิตกกังวลคิดวนเวียนซ้ำๆ เรื่องเดิม',
        ],
        [
          'text' => 'ขาดความมั่นใจ/ความเชื่อมั่นในตนเองลดลง',
          'text_en' => 'ขาดความมั่นใจ/ความเชื่อมั่นในตนเองลดลง',
        ],
        [
          'text' => 'ระแวดระวัง ไม่ไว้ใจสิ่งแวดล้อม',
          'text_en' => 'ระแวดระวัง ไม่ไว้ใจสิ่งแวดล้อม',
        ],
        [
          'text' => 'รู้สึกตนเองหรือสิ่งแวดล้อมเปลี่ยนไป',
          'text_en' => 'รู้สึกตนเองหรือสิ่งแวดล้อมเปลี่ยนไป',
        ],
        [
          'text' => 'เมื่อยล้า ปวดเมื่อยตามส่วนต่างๆ ของร่างกาย',
          'text_en' => 'เมื่อยล้า ปวดเมื่อยตามส่วนต่างๆ ของร่างกาย',
        ],
        [
          'text' => 'อ่อนเพลีย ไม่มีเรี่ยวแรง',
          'text_en' => 'อ่อนเพลีย ไม่มีเรี่ยวแรง',
        ],
      ],
      'title_en' => 'แบบประเมิน PISES-10',
      'desc_en' => 'ประเมินสุขภาพจิต',
      'options_en' => [
        'ไม่มีอาการ',
        'อาการเล็กน้อย',
        'อาการมาก',
        'อาการรุนแรง',
      ],
    ],
    [
      'slug' => 'resilience-rq',
      'title' => 'แบบประเมินพลังสุขภาพจิต (RQ]',
      'desc' => '',
      'icon' => 'selfworth',
      'metric' => 'คะแนน',
      'reverse_scoring' => [
        1,
        5,
        14,
        15,
        16,
      ],
      'options' => [
        'ไม่จริง',
        'จริงบางครั้ง',
        'ค่อนข้างจริง',
        'จริงมาก',
      ],
      'questions' => [
        [
          'text' => 'เรื่องไม่สบายใจเล็กน้อยทำให้ฉันว้าวุ่นใจนั่งไม่ติด',
          'text_en' => 'เรื่องไม่สบายใจเล็กน้อยทำให้ฉันว้าวุ่นใจนั่งไม่ติด',
        ],
        [
          'text' => 'ฉันไม่ใส่ใจคนที่หัวเราะเยาะฉัน',
          'text_en' => 'ฉันไม่ใส่ใจคนที่หัวเราะเยาะฉัน',
        ],
        [
          'text' => 'เมื่อฉันทำผิดพลาดหรือเสียหายฉันยอมรับผิดหรือผลที่ตามมา',
          'text_en' => 'เมื่อฉันทำผิดพลาดหรือเสียหายฉันยอมรับผิดหรือผลที่ตามมา',
        ],
        [
          'text' => 'ฉันเคยยอมทนลำบากเพื่ออนาคตที่ดีขึ้น',
          'text_en' => 'ฉันเคยยอมทนลำบากเพื่ออนาคตที่ดีขึ้น',
        ],
        [
          'text' => 'เวลาทุกข์ใจมาก ๆ ฉันเจ็บป่วยไม่สบาย',
          'text_en' => 'เวลาทุกข์ใจมาก ๆ ฉันเจ็บป่วยไม่สบาย',
        ],
        [
          'text' => 'ฉันสอนและเตือนตัวเอง',
          'text_en' => 'ฉันสอนและเตือนตัวเอง',
        ],
        [
          'text' => 'ความยากลำบากทำให้ฉันแกร่งขึ้น',
          'text_en' => 'ความยากลำบากทำให้ฉันแกร่งขึ้น',
        ],
        [
          'text' => 'ฉันไม่จดจำเรื่องเลวร้ายในอดีต',
          'text_en' => 'ฉันไม่จดจำเรื่องเลวร้ายในอดีต',
        ],
        [
          'text' => 'ถึงแม้ปัญหาจะหนักหนาเพียงใดชีวิตฉันก็ไม่เลวร้ายไปหมด',
          'text_en' => 'ถึงแม้ปัญหาจะหนักหนาเพียงใดชีวิตฉันก็ไม่เลวร้ายไปหมด',
        ],
        [
          'text' => 'เมื่อมีเรื่องหนักใจ ฉันมีคนปรับทุกข์ด้วย',
          'text_en' => 'เมื่อมีเรื่องหนักใจ ฉันมีคนปรับทุกข์ด้วย',
        ],
        [
          'text' => 'จากประสบการณ์ที่ผ่านมาทำให้ฉันมั่นใจว่าจะแก้ปัญหาต่าง ๆ ที่ผ่านเข้ามาในชีวิตได้',
          'text_en' => 'จากประสบการณ์ที่ผ่านมาทำให้ฉันมั่นใจว่าจะแก้ปัญหาต่าง ๆ ที่ผ่านเข้ามาในชีวิตได้',
        ],
        [
          'text' => 'ฉันมีครอบครัวและคนใกล้ชิดเป็นกำลังใจ',
          'text_en' => 'ฉันมีครอบครัวและคนใกล้ชิดเป็นกำลังใจ',
        ],
        [
          'text' => 'ฉันมีแผนการที่จะทำให้ชีวิตก้าวไปข้างหน้า',
          'text_en' => 'ฉันมีแผนการที่จะทำให้ชีวิตก้าวไปข้างหน้า',
        ],
        [
          'text' => 'เมื่อมีปัญหาวิกฤตเกิดขึ้น ฉันรู้สึกว่าตัวเองไร้ความสามารถ',
          'text_en' => 'เมื่อมีปัญหาวิกฤตเกิดขึ้น ฉันรู้สึกว่าตัวเองไร้ความสามารถ',
        ],
        [
          'text' => 'เป็นเรื่องยากสำหรับฉันที่จะทำให้ชีวิตดีขึ้น',
          'text_en' => 'เป็นเรื่องยากสำหรับฉันที่จะทำให้ชีวิตดีขึ้น',
        ],
        [
          'text' => 'ฉันอยากหนีไปให้พ้น หากมีปัญหาหนักหนาต้องรับผิดชอบ',
          'text_en' => 'ฉันอยากหนีไปให้พ้น หากมีปัญหาหนักหนาต้องรับผิดชอบ',
        ],
        [
          'text' => 'การแก้ไขปัญหาทำให้ฉันมีประสบการณ์มากขึ้น',
          'text_en' => 'การแก้ไขปัญหาทำให้ฉันมีประสบการณ์มากขึ้น',
        ],
        [
          'text' => 'ในการพูดคุย ฉันหาเหตุผลที่ทุกคนยอมรับหรือเห็นด้วยกับฉันได้',
          'text_en' => 'ในการพูดคุย ฉันหาเหตุผลที่ทุกคนยอมรับหรือเห็นด้วยกับฉันได้',
        ],
        [
          'text' => 'ฉันเตรียมหาทางออกไว้ หากปัญหาร้ายแรงกว่าที่คิด',
          'text_en' => 'ฉันเตรียมหาทางออกไว้ หากปัญหาร้ายแรงกว่าที่คิด',
        ],
        [
          'text' => 'ฉันชอบฟังความคิดเห็นที่แตกต่างจากฉัน',
          'text_en' => 'ฉันชอบฟังความคิดเห็นที่แตกต่างจากฉัน',
        ],
      ],
      'title_en' => 'แบบประเมินพลังสุขภาพจิต (RQ]',
      'desc_en' => '',
      'options_en' => [
        'ไม่จริง',
        'จริงบางครั้ง',
        'ค่อนข้างจริง',
        'จริงมาก',
      ],
    ],
    [
      'slug' => 'sdq',
      'title' => 'แบบประเมินจุดแข็งจุดอ่อน (SDQ]',
      'desc' => 'ประเมินพฤติกรรม',
      'icon' => 'selfworth',
      'metric' => 'คะแนน',
      'reverse_scoring' => [
        7,
        11,
        14,
        21,
        25,
      ],
      'options' => [
        'ไม่จริง',
        'จริงบ้าง',
        'จริงแน่นอน',
      ],
      'questions' => [
        [
          'text' => 'ฉันพยายามทำดีต่อผู้อื่น ฉันใส่ใจความรู้สึกของผู้อื่น',
          'text_en' => 'ฉันพยายามทำดีต่อผู้อื่น ฉันใส่ใจความรู้สึกของผู้อื่น',
        ],
        [
          'text' => 'ฉันอยู่ไม่สุข ฉันไม่สามารถอยู่นิ่งได้นาน',
          'text_en' => 'ฉันอยู่ไม่สุข ฉันไม่สามารถอยู่นิ่งได้นาน',
        ],
        [
          'text' => 'ฉันปวดศีรษะ ปวดท้องหรือคลื่นไส้บ่อยๆ',
          'text_en' => 'ฉันปวดศีรษะ ปวดท้องหรือคลื่นไส้บ่อยๆ',
        ],
        [
          'text' => 'โดยปกติแล้ว ฉันแบ่งปันกับผู้อื่น (อาหาร เกมส์ ปากกา ฯลฯ]',
          'text_en' => 'โดยปกติแล้ว ฉันแบ่งปันกับผู้อื่น (อาหาร เกมส์ ปากกา ฯลฯ]',
        ],
        [
          'text' => 'ฉันโกรธรุนแรงและมักควบคุมอารมณ์ไม่ได้',
          'text_en' => 'ฉันโกรธรุนแรงและมักควบคุมอารมณ์ไม่ได้',
        ],
        [
          'text' => 'ฉันมักอยู่กับตัวเอง ฉันมักเล่นคนเดียวหรืออยู่ตามลำพัง',
          'text_en' => 'ฉันมักอยู่กับตัวเอง ฉันมักเล่นคนเดียวหรืออยู่ตามลำพัง',
        ],
        [
          'text' => 'โดยปกติแล้ว ฉันทำตามที่คนอื่นบอก',
          'text_en' => 'โดยปกติแล้ว ฉันทำตามที่คนอื่นบอก',
        ],
        [
          'text' => 'ฉันกังวลมาก',
          'text_en' => 'ฉันกังวลมาก',
        ],
        [
          'text' => 'ฉันช่วยเหลือถ้ามีใครบาดเจ็บ ไม่สบายใจหรือเจ็บป่วย',
          'text_en' => 'ฉันช่วยเหลือถ้ามีใครบาดเจ็บ ไม่สบายใจหรือเจ็บป่วย',
        ],
        [
          'text' => 'ฉันหยุกหยิก หรือดิ้นไปดิ้นมาตลอดเวลา',
          'text_en' => 'ฉันหยุกหยิก หรือดิ้นไปดิ้นมาตลอดเวลา',
        ],
        [
          'text' => 'ฉันมีเพื่อนสนิทอย่างน้อยหนึ่งคน',
          'text_en' => 'ฉันมีเพื่อนสนิทอย่างน้อยหนึ่งคน',
        ],
        [
          'text' => 'ฉันมีเรื่องต่อสู้บ่อยๆ ฉันบังคับให้ผู้อื่นทำตามที่ฉันต้องการได้',
          'text_en' => 'ฉันมีเรื่องต่อสู้บ่อยๆ ฉันบังคับให้ผู้อื่นทำตามที่ฉันต้องการได้',
        ],
        [
          'text' => 'ฉันมักไม่มีความสุข เศร้าหรือร้องไห้บ่อย',
          'text_en' => 'ฉันมักไม่มีความสุข เศร้าหรือร้องไห้บ่อย',
        ],
        [
          'text' => 'คนอื่นในวัยเดียวกับฉันมักชอบฉัน',
          'text_en' => 'คนอื่นในวัยเดียวกับฉันมักชอบฉัน',
        ],
        [
          'text' => 'ฉันวอกแวกง่าย ฉันมีความลำบากที่จะใช้สมาธิ',
          'text_en' => 'ฉันวอกแวกง่าย ฉันมีความลำบากที่จะใช้สมาธิ',
        ],
        [
          'text' => 'ฉันวิตกกังวลเมื่ออยู่ในสถานการณ์ใหม่ๆ ฉันเสียความมั่นใจง่าย',
          'text_en' => 'ฉันวิตกกังวลเมื่ออยู่ในสถานการณ์ใหม่ๆ ฉันเสียความมั่นใจง่าย',
        ],
        [
          'text' => 'ฉันใจดีกับเด็กที่อายุน้อยกว่า',
          'text_en' => 'ฉันใจดีกับเด็กที่อายุน้อยกว่า',
        ],
        [
          'text' => 'ฉันถูกกล่าวหาว่า พูดปดหรือขี้โกงบ่อยๆ',
          'text_en' => 'ฉันถูกกล่าวหาว่า พูดปดหรือขี้โกงบ่อยๆ',
        ],
        [
          'text' => 'เด็กคนอื่นๆแกล้งหรือรังแกฉัน',
          'text_en' => 'เด็กคนอื่นๆแกล้งหรือรังแกฉัน',
        ],
        [
          'text' => 'ฉันมักอาสาช่วยเหลือผู้อื่น (พ่อแม่ ครู เด็ก]',
          'text_en' => 'ฉันมักอาสาช่วยเหลือผู้อื่น (พ่อแม่ ครู เด็ก]',
        ],
        [
          'text' => 'ฉันคิดก่อนทำ',
          'text_en' => 'ฉันคิดก่อนทำ',
        ],
        [
          'text' => 'ฉันเอาของที่ไม่ใช่ของฉันออกไปจากบ้าน โรงเรียนหรือที่อื่น',
          'text_en' => 'ฉันเอาของที่ไม่ใช่ของฉันออกไปจากบ้าน โรงเรียนหรือที่อื่น',
        ],
        [
          'text' => 'ฉันเข้ากับผู้ใหญ่ได้ดีกว่าเข้ากับเด็กวัยเดียวกัน',
          'text_en' => 'ฉันเข้ากับผู้ใหญ่ได้ดีกว่าเข้ากับเด็กวัยเดียวกัน',
        ],
        [
          'text' => 'ฉันมีความกลัวหลายอย่าง ฉันหวาดกลัวง่าย',
          'text_en' => 'ฉันมีความกลัวหลายอย่าง ฉันหวาดกลัวง่าย',
        ],
        [
          'text' => 'ฉันทำงานที่ทำอยู่ได้เสร็จ ฉันมีสมาธิดี',
          'text_en' => 'ฉันทำงานที่ทำอยู่ได้เสร็จ ฉันมีสมาธิดี',
        ],
      ],
      'title_en' => 'แบบประเมินจุดแข็งจุดอ่อน (SDQ]',
      'desc_en' => 'ประเมินพฤติกรรม',
      'options_en' => [
        'ไม่จริง',
        'จริงบ้าง',
        'จริงแน่นอน',
      ],
    ],
    [
      'slug' => 'slow-learn',
      'title' => 'แบบประเมินเด็กเรียนรู้ช้า',
      'desc' => 'ประเมินด้านการเรียนรู้',
      'icon' => 'selfworth',
      'metric' => 'คะแนน',
      'reverse_scoring' => [
      ],
      'options' => [
        'ไม่ใช่',
        'ใช่',
      ],
      'questions' => [
        [
          'text' => 'เรียนรู้บทเรียนได้ช้ากว่าเด็กคนอื่นในห้อง',
          'text_en' => 'เรียนรู้บทเรียนได้ช้ากว่าเด็กคนอื่นในห้อง',
        ],
        [
          'text' => 'ลืมง่าย จำในสิ่งที่เพิ่งเรียนไปไม่ได้ ต้องเรียนซ้ำๆ',
          'text_en' => 'Forgets easily, unable to remember what has just been learned. Must study repeatedly',
        ],
        [
          'text' => 'กล้ามเนื้อมือไม่แข็งแรง ทำงานที่ใช้มือดูงุ่มง่าม',
          'text_en' => 'hand muscles are not strong Doing work using your hands seems clumsy.',
        ],
        [
          'text' => 'สรุปใจความสำคัญของเนื้อหาที่เรียนไม่ได้',
          'text_en' => 'Summarize the main points of the content that cannot be learned.',
        ],
        [
          'text' => 'ไหวพริบในการแก้ไขปัญหาเฉพาะหน้าไม่สมวัย',
          'text_en' => 'ไหวพริบในการแก้ไขปัญหาเฉพาะหน้าไม่สมวัย',
        ],
        [
          'text' => 'ตอบสนองต่อสิ่งต่างๆ ช้า',
          'text_en' => 'ตอบสนองต่อสิ่งต่างๆ ช้า',
        ],
        [
          'text' => 'ชอบเล่นกับเด็กที่มีอายุน้อยกว่า',
          'text_en' => 'Likes to play with younger children.',
        ],
        [
          'text' => 'ช่วยเหลือตัวเองในกิจวัตรประจำวันได้น้อย',
          'text_en' => 'ช่วยเหลือตัวเองในกิจวัตรประจำวันได้น้อย',
        ],
        [
          'text' => 'การใช้ภาษาไม่สมวัย',
          'text_en' => 'Using inappropriate language',
        ],
        [
          'text' => 'เล่นไม่ค่อยทันเพื่อน',
          'text_en' => 'I can\'t play fast enough with my friends.',
        ],
        [
          'text' => 'ดูฉลาดหรือปกติในด้านอื่นๆ ยกเว้นเรื่องเรียน',
          'text_en' => 'Looks smart or normal in other ways Except for studying',
        ],
        [
          'text' => 'อ่านผิดบ่อยๆ อ่านไม่คล่อง หรืออ่านไม่ได้',
          'text_en' => 'อ่านผิดบ่อยๆ อ่านไม่คล่อง หรืออ่านไม่ได้',
        ],
        [
          'text' => 'อ่านข้ามคำ อ่านเพิ่มคำ',
          'text_en' => 'Read across words. Read and add words.',
        ],
        [
          'text' => 'อ่านแล้วจับใจความสำคัญไม่ได้',
          'text_en' => 'Read and can\'t understand the main idea.',
        ],
        [
          'text' => 'เขียนพยัญชนะหรือตัวเลขที่คล้ายกันสลับกัน เช่น ม-น ด-ค',
          'text_en' => 'เขียนพยัญชนะหรือตัวเลขที่คล้ายกันสลับกัน เช่น ม-น ด-ค',
        ],
        [
          'text' => 'เขียนผิด เขียนไม่คล่องบ่อยๆ',
          'text_en' => 'เขียนผิด เขียนไม่คล่องบ่อยๆ',
        ],
        [
          'text' => 'สะกดคำตามการผสมเสียงไม่ได้ เขียนคำต่างๆ จากการจำ',
          'text_en' => 'Can\'t spell words based on sound combinations. Write words from memory.',
        ],
        [
          'text' => 'ไม่เข้าใจค่าของจำนวน เช่น หน่วย สิบ ร้อย พัน หมื่น',
          'text_en' => 'Don\'t understand the value of numbers, such as units, tens, hundreds, thousands, ten thousand.',
        ],
        [
          'text' => 'คำนวณ บวก ลบ คูณ หาร ไม่ได้',
          'text_en' => 'Can\'t calculate addition, subtraction, multiplication, and division.',
        ],
        [
          'text' => 'ไม่เข้าใจหลักการพื้นฐานทางคณิตศาสตร์ เช่น การเข้าใจความหมายของสัญลักษณ์ เวลา ทิศทาง ขนาด ระยะทาง การจัดลำดับการเปรียบเทียบ',
          'text_en' => 'ไม่เข้าใจหลักการพื้นฐานทางคณิตศาสตร์ เช่น การเข้าใจความหมายของสัญลักษณ์ เวลา ทิศทาง ขนาด ระยะทาง การจัดลำดับการเปรียบเทียบ',
        ],
        [
          'text' => 'ซนมาก อยู่ไม่นิ่ง ยุกยิกตลอดเวลา',
          'text_en' => 'Very naughty, restless, always fidgeting.',
        ],
        [
          'text' => 'พูดมาก',
          'text_en' => 'Talk a lot',
        ],
        [
          'text' => 'ชอบลุกจากที่นั่งเวลาอยู่ในห้องเรียน',
          'text_en' => 'Likes to get up from his seat when in the classroom.',
        ],
        [
          'text' => 'เหม่อบ่อยๆ ใจลอย ต้องคอยเรียก',
          'text_en' => 'เหม่อบ่อยๆ ใจลอย ต้องคอยเรียก',
        ],
        [
          'text' => 'ขี้ลืม ของใช้ส่วนตัวหายบ่อยๆ',
          'text_en' => 'ขี้ลืม ของใช้ส่วนตัวหายบ่อยๆ',
        ],
        [
          'text' => 'ทำงานไม่เรียบร้อย ไม่รอบคอบ',
          'text_en' => 'Not working properly, not careful',
        ],
        [
          'text' => 'ไม่มีสมาธิในการทำงาน หรือทำได้เพียงช่วงสั้นๆ',
          'text_en' => 'ไม่มีสมาธิในการทำงาน หรือทำได้เพียงช่วงสั้นๆ',
        ],
        [
          'text' => 'ทำงานช้า ทำงานไม่เสร็จ แต่ถ้ามีคนประกบจะทำได้เร็วขึ้น',
          'text_en' => 'Working slowly, not completing work But if there are people involved, it will be faster.',
        ],
        [
          'text' => 'รอคอยไม่ได้',
          'text_en' => 'Can\'t wait.',
        ],
        [
          'text' => 'ใจร้อน ควบคุมอารมณ์ไม่ค่อยได้',
          'text_en' => 'Impatient, unable to control emotions',
        ],
        [
          'text' => 'ชอบแยกตัวอยู่คนเดียว',
          'text_en' => 'like to be separated and be alone',
        ],
        [
          'text' => 'สบตาเพียงช่วงสั้นๆ หรือไม่สบตา เวลาพูดกับผู้อื่น',
          'text_en' => 'สบตาเพียงช่วงสั้นๆ หรือไม่สบตา เวลาพูดกับผู้อื่น',
        ],
        [
          'text' => 'เมื่อเล่นกับเด็กอื่นๆ ไม่เข้าใจกติกา ไม่เข้าใจวิธีการเล่น',
          'text_en' => 'When playing with other children Don\'t understand the rules Don\'t understand how to play',
        ],
        [
          'text' => 'ไม่มีเพื่อนสนิท หรือมีเพื่อนน้อย',
          'text_en' => 'no close friends or have few friends',
        ],
        [
          'text' => 'ไม่สามารถเริ่มสนทนากับเพื่อน หรือไม่สามารถต่อบทสนทนากับผู้อื่นได้',
          'text_en' => 'ไม่สามารถเริ่มสนทนากับเพื่อน หรือไม่สามารถต่อบทสนทนากับผู้อื่นได้',
        ],
        [
          'text' => 'มีระดับการใช้ภาษาพูดที่ต่ำกว่าวัย',
          'text_en' => 'มีระดับการใช้ภาษาพูดที่ต่ำกว่าวัย',
        ],
        [
          'text' => 'มักพูดแต่สิ่งที่ตนเองสนใจ ไม่สนใจเมื่อเพื่อนพูดเรื่องอื่นๆ',
          'text_en' => 'They often talk about things that interest them. Ignore when friends talk about other things.',
        ],
        [
          'text' => 'ไม่เข้าใจมุขตลก คำพังเพย คำประชด',
          'text_en' => 'Don\'t understand jokes, aphorisms, sarcasm',
        ],
        [
          'text' => 'ไม่ชอบการเปลี่ยนแปลง ชอบทำกิจวัตรเดิมๆ ซ้ำๆ',
          'text_en' => 'ไม่ชอบการเปลี่ยนแปลง ชอบทำกิจวัตรเดิมๆ ซ้ำๆ',
        ],
        [
          'text' => 'มีพฤติกรรมกระตุ้นตนเอง สะบัดมือ เล่นมือ',
          'text_en' => 'Has self-stimulating behavior, shaking hands, playing with hands',
        ],
      ],
      'title_en' => 'แบบประเมินเด็กเรียนรู้ช้า',
      'desc_en' => 'ประเมินด้านการเรียนรู้',
      'options_en' => [
        'no',
        'yes',
      ],
    ],
    [
      'slug' => 'spst-20',
      'title' => 'แบบวัดความเครียดสวนปรุง (SPST-20]',
      'desc' => '',
      'icon' => 'selfworth',
      'metric' => 'คะแนน',
      'reverse_scoring' => [
      ],
      'options' => [
        'ไม่รู้สึกเครียด',
        'รู้สึกเครียดเล็กน้อย',
        'รู้สึกเครียดปานกลาง',
        'รู้สึกเครียดมาก',
        'รู้สึกเครียดมากที่สุด',
      ],
      'questions' => [
        [
          'text' => 'กลัวทำงานผิดพลาด',
          'text_en' => 'กลัวทำงานผิดพลาด',
        ],
        [
          'text' => 'ไปไม่ถึงเป้าหมายที่วางไว้',
          'text_en' => 'ไปไม่ถึงเป้าหมายที่วางไว้',
        ],
        [
          'text' => 'ครอบครัวมีความขัดแย้งกันในเรื่องเงินหรือเรื่องงานในบ้าน',
          'text_en' => 'ครอบครัวมีความขัดแย้งกันในเรื่องเงินหรือเรื่องงานในบ้าน',
        ],
        [
          'text' => 'เป็นกังวลกับเรื่องสารพิษหรือมลภาวะในอากาศ น้ำ เสียง และดิน',
          'text_en' => 'เป็นกังวลกับเรื่องสารพิษหรือมลภาวะในอากาศ น้ำ เสียง และดิน',
        ],
        [
          'text' => 'รู้สึกว่าต้องแข่งขันหรือเปรียบเทียบ',
          'text_en' => 'รู้สึกว่าต้องแข่งขันหรือเปรียบเทียบ',
        ],
        [
          'text' => 'เงินไม่พอใช้จ่าย',
          'text_en' => 'เงินไม่พอใช้จ่าย',
        ],
        [
          'text' => 'กล้ามเนื้อตึงหรือปวด',
          'text_en' => 'กล้ามเนื้อตึงหรือปวด',
        ],
        [
          'text' => 'ปวดหัวจากความตึงเครียด',
          'text_en' => 'ปวดหัวจากความตึงเครียด',
        ],
        [
          'text' => 'ปวดหลัง',
          'text_en' => 'ปวดหลัง',
        ],
        [
          'text' => 'ความอยากอาหารเปลี่ยนแปลง',
          'text_en' => 'ความอยากอาหารเปลี่ยนแปลง',
        ],
        [
          'text' => 'ปวดศีรษะข้างเดียว',
          'text_en' => 'ปวดศีรษะข้างเดียว',
        ],
        [
          'text' => 'รู้สึกวิตกกังวล',
          'text_en' => 'รู้สึกวิตกกังวล',
        ],
        [
          'text' => 'รู้สึกคับข้องใจ',
          'text_en' => 'รู้สึกคับข้องใจ',
        ],
        [
          'text' => 'รู้สึกโกรธ หรือหงุดหงิด',
          'text_en' => 'รู้สึกโกรธ หรือหงุดหงิด',
        ],
        [
          'text' => 'รู้สึกเศร้า',
          'text_en' => 'รู้สึกเศร้า',
        ],
        [
          'text' => 'ความจำไม่ดี',
          'text_en' => 'ความจำไม่ดี',
        ],
        [
          'text' => 'รู้สึกสับสน',
          'text_en' => 'รู้สึกสับสน',
        ],
        [
          'text' => 'ตั้งสมาธิลำบาก',
          'text_en' => 'ตั้งสมาธิลำบาก',
        ],
        [
          'text' => 'รู้สึกเหนื่อยง่าย',
          'text_en' => 'รู้สึกเหนื่อยง่าย',
        ],
        [
          'text' => 'เป็นหวัดบ่อย ๆ',
          'text_en' => 'เป็นหวัดบ่อย ๆ',
        ],
      ],
      'title_en' => 'แบบวัดความเครียดสวนปรุง (SPST-20]',
      'desc_en' => '',
      'options_en' => [
        'ไม่รู้สึกเครียด',
        'รู้สึกเครียดเล็กน้อย',
        'รู้สึกเครียดปานกลาง',
        'รู้สึกเครียดมาก',
        'รู้สึกเครียดมากที่สุด',
      ],
    ],
    [
      'slug' => 'st5',
      'title' => 'แบบประเมินความเครียด (ST-5]',
      'desc' => '',
      'icon' => 'selfworth',
      'metric' => 'คะแนน',
      'reverse_scoring' => [
      ],
      'options' => [
        'เป็นน้อยมากหรือแทบไม่มี',
        'เป็นบางครั้ง',
        'เป็นบ่อยครั้ง',
        'เป็นประจำ',
      ],
      'questions' => [
        [
          'text' => 'มีปัญหาการนอน นอนไม่หลับหรือนอนมาก',
          'text_en' => 'มีปัญหาการนอน นอนไม่หลับหรือนอนมาก',
        ],
        [
          'text' => 'มีสมาธิน้อยลง',
          'text_en' => 'มีสมาธิน้อยลง',
        ],
        [
          'text' => 'หงุดหงิด / กระวนกระวาย / ว้าวุ่นใจ',
          'text_en' => 'หงุดหงิด / กระวนกระวาย / ว้าวุ่นใจ',
        ],
        [
          'text' => 'รู้สึกเบื่อ เซ็ง',
          'text_en' => 'รู้สึกเบื่อ เซ็ง',
        ],
        [
          'text' => 'ไม่อยากพบปะผู้คน',
          'text_en' => 'ไม่อยากพบปะผู้คน',
        ],
      ],
      'title_en' => 'แบบประเมินความเครียด (ST-5]',
      'desc_en' => '',
      'options_en' => [
        'เป็นน้อยมากหรือแทบไม่มี',
        'เป็นบางครั้ง',
        'เป็นบ่อยครั้ง',
        'เป็นประจำ',
      ],
    ],
    [
      'slug' => 't-gmha-15',
      'title' => 'แบบประเมินสุขภาพจิตผู้สูงอายุ (T-GMHA-15]',
      'desc' => 'สำหรับผู้สูงอายุ',
      'icon' => 'selfworth',
      'metric' => 'คะแนน',
      'reverse_scoring' => [
        3,
      ],
      'options' => [
        'ไม่เลย',
        'เล็กน้อย',
        'มาก',
        'มากที่สุด',
      ],
      'questions' => [
        [
          'text' => 'ท่านรู้สึกว่าชีวิตท่านมีความหมาย (มีคุณค่ามีประโยชน์]',
          'text_en' => 'ท่านรู้สึกว่าชีวิตท่านมีความหมาย (มีคุณค่ามีประโยชน์]',
        ],
        [
          'text' => 'ท่านรู้สึกว่าชีวิตของท่านมีความสุข',
          'text_en' => 'ท่านรู้สึกว่าชีวิตของท่านมีความสุข',
        ],
        [
          'text' => 'ท่านรู้สึกกังวลใจ',
          'text_en' => 'ท่านรู้สึกกังวลใจ',
        ],
        [
          'text' => 'ท่านพอใจต่อการผูกมิตรหรือเข้ากับบุคคลอื่น',
          'text_en' => 'ท่านพอใจต่อการผูกมิตรหรือเข้ากับบุคคลอื่น',
        ],
        [
          'text' => 'ท่านมีสัมพันธภาพที่ดีกับเพื่อนบ้าน',
          'text_en' => 'ท่านมีสัมพันธภาพที่ดีกับเพื่อนบ้าน',
        ],
        [
          'text' => 'ท่านเห็นว่าปัญหาส่วนใหญ่เป็นสิ่งที่ท่านสามารถแก้ไขได้',
          'text_en' => 'ท่านเห็นว่าปัญหาส่วนใหญ่เป็นสิ่งที่ท่านสามารถแก้ไขได้',
        ],
        [
          'text' => 'ท่านสามารถทำใจยอมรับได้สำหรับปัญหาที่ยากจะแก้ไข (เมื่อมีปัญหา]',
          'text_en' => 'ท่านสามารถทำใจยอมรับได้สำหรับปัญหาที่ยากจะแก้ไข (เมื่อมีปัญหา]',
        ],
        [
          'text' => 'ท่านรู้สึกยินดีกับความสำเร็จของคนอื่น',
          'text_en' => 'ท่านรู้สึกยินดีกับความสำเร็จของคนอื่น',
        ],
        [
          'text' => 'ท่านรู้สึกเห็นอกเห็นใจเมื่อผู้อื่นมีทุกข์',
          'text_en' => 'ท่านรู้สึกเห็นอกเห็นใจเมื่อผู้อื่นมีทุกข์',
        ],
        [
          'text' => 'ท่านพึงพอใจกับความสามารถของตนเอง',
          'text_en' => 'ท่านพึงพอใจกับความสามารถของตนเอง',
        ],
        [
          'text' => 'ท่านรู้สึกภูมิใจในตนเอง',
          'text_en' => 'ท่านรู้สึกภูมิใจในตนเอง',
        ],
        [
          'text' => 'ท่านมีเพื่อนหรือคนอื่น ๆ ในสังคมคอยช่วยเหลือท่านเมื่อท่านต้องการ',
          'text_en' => 'ท่านมีเพื่อนหรือคนอื่น ๆ ในสังคมคอยช่วยเหลือท่านเมื่อท่านต้องการ',
        ],
        [
          'text' => 'ครอบครัวของท่านมีความรักและผูกพันต่อกัน',
          'text_en' => 'ครอบครัวของท่านมีความรักและผูกพันต่อกัน',
        ],
        [
          'text' => 'ถ้าท่านป่วยท่านมั่นใจว่าครอบครัวของท่านจะดูแลท่าน เป็นอย่างดี',
          'text_en' => 'ถ้าท่านป่วยท่านมั่นใจว่าครอบครัวของท่านจะดูแลท่าน เป็นอย่างดี',
        ],
        [
          'text' => 'สมาชิกของครอบครัวให้ความช่วยเหลือท่าน',
          'text_en' => 'สมาชิกของครอบครัวให้ความช่วยเหลือท่าน',
        ],
      ],
      'title_en' => 'แบบประเมินสุขภาพจิตผู้สูงอายุ (T-GMHA-15]',
      'desc_en' => 'สำหรับผู้สูงอายุ',
      'options_en' => [
        'ไม่เลย',
        'เล็กน้อย',
        'มาก',
        'มากที่สุด',
      ],
    ],
    [
      'slug' => 'teen-dep',
      'title' => 'แบบประเมินซึมเศร้าในวัยรุ่น',
      'desc' => 'ประเมินภาวะซึมเศร้าสำหรับวัยรุ่น',
      'icon' => 'selfworth',
      'metric' => 'คะแนน',
      'reverse_scoring' => [
      ],
      'options' => [
        'ไม่มีเลย',
        'มีบางวัน',
        'มีมากกว่า 7 วัน',
        'มีแทบทุกวัน',
      ],
      'questions' => [
        [
          'text' => 'รู้สึกซึม เศร้า หงุดหงิด หรือสิ้นหวัง',
          'text_en' => 'รู้สึกซึม เศร้า หงุดหงิด หรือสิ้นหวัง',
        ],
        [
          'text' => 'เบื่อ ไม่ค่อยสนใจหรือไม่เพลิดเพลิน เวลาทำสิ่งต่างๆ',
          'text_en' => 'เบื่อ ไม่ค่อยสนใจหรือไม่เพลิดเพลิน เวลาทำสิ่งต่างๆ',
        ],
        [
          'text' => 'นอนหลับยาก รู้สึกง่วงทั้งวัน หรือนอนมากเกินไป',
          'text_en' => 'นอนหลับยาก รู้สึกง่วงทั้งวัน หรือนอนมากเกินไป',
        ],
        [
          'text' => 'ไม่อยากอาหาร น้ำหนักลด หรือกินมากกว่าปกติ',
          'text_en' => 'ไม่อยากอาหาร น้ำหนักลด หรือกินมากกว่าปกติ',
        ],
        [
          'text' => 'รู้สึกเหนื่อยล้า หรือไม่ค่อยมีพลัง',
          'text_en' => 'รู้สึกเหนื่อยล้า หรือไม่ค่อยมีพลัง',
        ],
        [
          'text' => 'รู้สึกแย่กับตัวเอง หรือรู้สึกว่าตัวเองล้มเหลว หรือทำให้ตัวเองหรือครอบครัวผิดหวัง',
          'text_en' => 'รู้สึกแย่กับตัวเอง หรือรู้สึกว่าตัวเองล้มเหลว หรือทำให้ตัวเองหรือครอบครัวผิดหวัง',
        ],
        [
          'text' => 'จดจ่อกับสิ่งต่างๆ ได้ยาก เช่น ทำการบ้าน อ่านหนังสือ หรือดูโทรทัศน์',
          'text_en' => 'จดจ่อกับสิ่งต่างๆ ได้ยาก เช่น ทำการบ้าน อ่านหนังสือ หรือดูโทรทัศน์',
        ],
        [
          'text' => 'พูดหรือทำอะไรช้าลงมากจนคนอื่นสังเกตเห็นได้ หรือในทางตรงกันข้ามคือ กระสับกระส่ายหรือกระวนกระวาย จนต้องเคลื่อนไหวไปมามากกว่าปกติ',
          'text_en' => 'พูดหรือทำอะไรช้าลงมากจนคนอื่นสังเกตเห็นได้ หรือในทางตรงกันข้ามคือ กระสับกระส่ายหรือกระวนกระวาย จนต้องเคลื่อนไหวไปมามากกว่าปกติ',
        ],
        [
          'text' => 'คิดว่าถ้าตายไปเสียจะดีกว่า หรือคิดจะทำร้ายตัวเองด้วยวิธีใดวิธีหนึ่ง',
          'text_en' => 'คิดว่าถ้าตายไปเสียจะดีกว่า หรือคิดจะทำร้ายตัวเองด้วยวิธีใดวิธีหนึ่ง',
        ],
      ],
      'title_en' => 'แบบประเมินซึมเศร้าในวัยรุ่น',
      'desc_en' => 'ประเมินภาวะซึมเศร้าสำหรับวัยรุ่น',
      'options_en' => [
        'ไม่มีเลย',
        'มีบางวัน',
        'มีมากกว่า 7 วัน',
        'มีแทบทุกวัน',
      ],
    ],
    [
      'slug' => 'thi-15',
      'title' => 'แบบประเมินความสุขคนไทย (THI-15]',
      'desc' => 'ประเมินความสุข',
      'icon' => 'selfworth',
      'metric' => 'คะแนน',
      'reverse_scoring' => [
        4,
        5,
        6,
      ],
      'options' => [
        'ไม่เลย',
        'เล็กน้อย',
        'มาก',
        'มากที่สุด',
      ],
      'questions' => [
        [
          'text' => 'ท่านรู้สึกพึงพอใจในชีวิต',
          'text_en' => 'ท่านรู้สึกพึงพอใจในชีวิต',
        ],
        [
          'text' => 'ท่านรู้สึกสบายใจ',
          'text_en' => 'ท่านรู้สึกสบายใจ',
        ],
        [
          'text' => 'ท่านรู้สึกภูมิใจในตนเอง',
          'text_en' => 'ท่านรู้สึกภูมิใจในตนเอง',
        ],
        [
          'text' => 'ท่านรู้สึกเบื่อหน่ายท้อแท้กับการดำเนินชีวิตประจำวัน',
          'text_en' => 'ท่านรู้สึกเบื่อหน่ายท้อแท้กับการดำเนินชีวิตประจำวัน',
        ],
        [
          'text' => 'ท่านรู้สึกผิดหวังในตนเอง',
          'text_en' => 'ท่านรู้สึกผิดหวังในตนเอง',
        ],
        [
          'text' => 'ท่านรู้สึกว่าชีวิตมีแต่ความทุกข์',
          'text_en' => 'ท่านรู้สึกว่าชีวิตมีแต่ความทุกข์',
        ],
        [
          'text' => 'ท่านสามารถทำใจยอมรับได้สำหรับปัญหาที่ยากจะแก้ไข (เมื่อมีปัญหา]',
          'text_en' => 'ท่านสามารถทำใจยอมรับได้สำหรับปัญหาที่ยากจะแก้ไข (เมื่อมีปัญหา]',
        ],
        [
          'text' => 'ท่านมั่นใจว่าจะสามารถควบคุมอารมณ์ได้เมื่อมีเหตุการณ์คับขันหรือร้ายแรงที่เกิดขึ้น',
          'text_en' => 'ท่านมั่นใจว่าจะสามารถควบคุมอารมณ์ได้เมื่อมีเหตุการณ์คับขันหรือร้ายแรงที่เกิดขึ้น',
        ],
        [
          'text' => 'ท่านมั่นใจที่จะเผชิญกับเหตุการณ์ร้ายแรงที่เกิดขึ้นในชีวิต',
          'text_en' => 'ท่านมั่นใจที่จะเผชิญกับเหตุการณ์ร้ายแรงที่เกิดขึ้นในชีวิต',
        ],
        [
          'text' => 'ท่านรู้สึกเห็นอกเห็นใจเมื่อผู้อื่นมีความทุกข์',
          'text_en' => 'ท่านรู้สึกเห็นอกเห็นใจเมื่อผู้อื่นมีความทุกข์',
        ],
        [
          'text' => 'ท่านรู้สึกเป็นสุขในการช่วยเหลือผู้อื่นที่มีปัญหา',
          'text_en' => 'ท่านรู้สึกเป็นสุขในการช่วยเหลือผู้อื่นที่มีปัญหา',
        ],
        [
          'text' => 'ท่านให้ความช่วยเหลือแก่ผู้อื่นเมื่อมีโอกาส',
          'text_en' => 'ท่านให้ความช่วยเหลือแก่ผู้อื่นเมื่อมีโอกาส',
        ],
        [
          'text' => 'ท่านรู้สึกมั่นคงปลอดภัยเมื่ออยู่ในครอบครัว',
          'text_en' => 'ท่านรู้สึกมั่นคงปลอดภัยเมื่ออยู่ในครอบครัว',
        ],
        [
          'text' => 'หากท่านป่วยหนัก ท่านเชื่อว่าคนในครอบครัวจะดูแลท่านเป็นอย่างดี',
          'text_en' => 'หากท่านป่วยหนัก ท่านเชื่อว่าคนในครอบครัวจะดูแลท่านเป็นอย่างดี',
        ],
        [
          'text' => 'สมาชิกในครอบครัวมีความรักและผูกพันต่อกัน',
          'text_en' => 'สมาชิกในครอบครัวมีความรักและผูกพันต่อกัน',
        ],
      ],
      'title_en' => 'แบบประเมินความสุขคนไทย (THI-15]',
      'desc_en' => 'ประเมินความสุข',
      'options_en' => [
        'ไม่เลย',
        'เล็กน้อย',
        'มาก',
        'มากที่สุด',
      ],
    ],
    [
      'slug' => 'tmrs',
      'title' => 'แบบประเมิน TMRS',
      'desc' => 'ประเมิน TMRS',
      'icon' => 'selfworth',
      'metric' => 'คะแนน',
      'reverse_scoring' => [
      ],
      'questions' => [
        [
          'text' => 'อารมณ์ครื้นเครง',
          'options' => [
            'ไม่มี',
            'เพิ่มขึ้นเล็กน้อย หรืออาจเพิ่มขึ้นจากการซักถาม',
            'อารมณ์ครื้นเครงอย่างชัดเจนโดยความรู้สึกของผู้ป่วย, มองโลกในแง่ดี, มั่นใจตัวเอง, ร่าเริงอารมณ์เหมาะสมกับเนื้อหาเรื่องราว',
            'อารมณ์ครื้นเครงมาก, ไม่เหมาะสมกับเนื้อหาเรื่องราว; มีอารมณ์ขันตลอดเวลา',
            'สนุกสนานครื้นเครง; หัวเราะอย่างไม่เหมาะสม; ร้องเพลงขึ้นมาไม่สมเหตุผล',
          ],
          'text_en' => 'อารมณ์ครื้นเครง',
          'options_en' => [
            'ไม่มี',
            'เพิ่มขึ้นเล็กน้อย หรืออาจเพิ่มขึ้นจากการซักถาม',
            'อารมณ์ครื้นเครงอย่างชัดเจนโดยความรู้สึกของผู้ป่วย, มองโลกในแง่ดี, มั่นใจตัวเอง, ร่าเริงอารมณ์เหมาะสมกับเนื้อหาเรื่องราว',
            'อารมณ์ครื้นเครงมาก, ไม่เหมาะสมกับเนื้อหาเรื่องราว; มีอารมณ์ขันตลอดเวลา',
            'สนุกสนานครื้นเครง; หัวเราะอย่างไม่เหมาะสม; ร้องเพลงขึ้นมาไม่สมเหตุผล',
          ],
        ],
        [
          'text' => 'การเพิ่มขึ้นของการทำกิจกรรม การเคลื่อนไหว',
          'options' => [
            'ไม่มี',
            'เพิ่มขึ้นโดยความรู้สึกของผู้ป่วย',
            'กระปรี้กระเปร่า ร่าเริง; แสดงท่าทางมากขึ้น',
            'มีพลังเหลือเฟือ; ทำกิจกรรมมากเกินเป็นบางครั้ง; อยู่ไม่สุขกระวนกระวาย (สามารถทำให้สงบได้]',
            'ท่าทางตื่นตัวมาก; ทำกิจกรรมมากตลอดเวลา (ไม่สามารถทำให้สงบได้]',
          ],
          'text_en' => 'การเพิ่มขึ้นของการทำกิจกรรม การเคลื่อนไหว',
          'options_en' => [
            'ไม่มี',
            'เพิ่มขึ้นโดยความรู้สึกของผู้ป่วย',
            'กระปรี้กระเปร่า ร่าเริง; แสดงท่าทางมากขึ้น',
            'มีพลังเหลือเฟือ; ทำกิจกรรมมากเกินเป็นบางครั้ง; อยู่ไม่สุขกระวนกระวาย (สามารถทำให้สงบได้]',
            'ท่าทางตื่นตัวมาก; ทำกิจกรรมมากตลอดเวลา (ไม่สามารถทำให้สงบได้]',
          ],
        ],
        [
          'text' => 'ความสนใจทางเพศ',
          'options' => [
            'ปกติ, ไม่เพิ่มขึ้น',
            'เพิ่มขึ้นเล็กน้อย หรืออาจจะเพิ่มขึ้น',
            'เพิ่มขึ้นอย่างชัดเจนโดยความรู้สึกของผู้ป่วย จากการซักถาม',
            'พูดคุยถึงเรื่องทางเพศขึ้นมาเอง; ต่อเติมรายละเอียดเนื้อหาเรื่องทางเพศ; พูดถึงตัวเองว่ามีความต้องการทางเพศสูง',
            'แสดงพฤติกรรมทางเพศมากเกินไป (ต่อผู้ป่วยคนอื่น, เจ้าหน้าที่หรือผู้สัมภาษณ์]',
          ],
          'text_en' => 'ความสนใจทางเพศ',
          'options_en' => [
            'ปกติ, ไม่เพิ่มขึ้น',
            'เพิ่มขึ้นเล็กน้อย หรืออาจจะเพิ่มขึ้น',
            'เพิ่มขึ้นอย่างชัดเจนโดยความรู้สึกของผู้ป่วย จากการซักถาม',
            'พูดคุยถึงเรื่องทางเพศขึ้นมาเอง; ต่อเติมรายละเอียดเนื้อหาเรื่องทางเพศ; พูดถึงตัวเองว่ามีความต้องการทางเพศสูง',
            'แสดงพฤติกรรมทางเพศมากเกินไป (ต่อผู้ป่วยคนอื่น, เจ้าหน้าที่หรือผู้สัมภาษณ์]',
          ],
        ],
        [
          'text' => 'การนอนหลับ',
          'options' => [
            'รายงานว่าการนอนหลับไม่ลดลง',
            'นอนหลับน้อยกว่าปกติประมาณ 1 ชั่วโมง',
            'นอนหลับน้อยกว่าปกตินานกว่า 1 ชั่วโมง',
            'รายงานว่าความต้องการนอนหลับลดลง',
            'ปฏิเสธความต้องการในการนอนหลับ',
          ],
          'text_en' => 'การนอนหลับ',
          'options_en' => [
            'รายงานว่าการนอนหลับไม่ลดลง',
            'นอนหลับน้อยกว่าปกติประมาณ 1 ชั่วโมง',
            'นอนหลับน้อยกว่าปกตินานกว่า 1 ชั่วโมง',
            'รายงานว่าความต้องการนอนหลับลดลง',
            'ปฏิเสธความต้องการในการนอนหลับ',
          ],
        ],
        [
          'text' => 'ความหงุดหงิด',
          'options' => [
            0 => 'ไม่มี',
            2 => 'หงุดหงิดมากขึ้นโดยความรู้สึกของผู้ป่วย',
            4 => 'หงุดหงิดฉุนเฉียวระหว่างสัมภาษณ์บางครั้ง; แสดงความโกรธ หรือแสดงความรำคาญเป็นช่วงๆ',
            6 => 'มีอาการหงุดหงิดฉุนเฉียวบ่อยระหว่างสัมภาษณ์; แสดงมารยาทไม่ดีตลอดเวลา',
            8 => 'ท่าทางก้าวร้าว ไม่เป็นมิตร ไม่ให้ความร่วมมือ; ไม่สามารถทำการสัมภาษณ์ได้',
          ],
          'text_en' => 'ความหงุดหงิด',
          'options_en' => [
            0 => 'ไม่มี',
            2 => 'หงุดหงิดมากขึ้นโดยความรู้สึกของผู้ป่วย',
            4 => 'หงุดหงิดฉุนเฉียวระหว่างสัมภาษณ์บางครั้ง; แสดงความโกรธ หรือแสดงความรำคาญเป็นช่วงๆ',
            6 => 'มีอาการหงุดหงิดฉุนเฉียวบ่อยระหว่างสัมภาษณ์; แสดงมารยาทไม่ดีตลอดเวลา',
            8 => 'ท่าทางก้าวร้าว ไม่เป็นมิตร ไม่ให้ความร่วมมือ; ไม่สามารถทำการสัมภาษณ์ได้',
          ],
        ],
        [
          'text' => 'การพูด (อัตราเร็วและจำนวนคำพูด]',
          'options' => [
            0 => 'ไม่เพิ่มขึ้น',
            2 => 'รู้สึกว่าช่างพูดคุย',
            4 => 'พูดเร็วขึ้น หรือพูดมากขึ้นเป็นบางครั้ง, พูดมากเกินความจำเป็น ในบางครั้ง',
            6 => 'พูดอย่างรวดเร็ว; พูดเร็วขึ้นหรือพูดมากขึ้นอย่างต่อเนื่อง; ยากที่จะขัดจังหวะ',
            8 => 'พูดอย่างพรั่งพรู; ไม่สามารถขัดจังหวะการพูดได้, พูดตลอดเวลา',
          ],
          'text_en' => 'การพูด (อัตราเร็วและจำนวนคำพูด]',
          'options_en' => [
            0 => 'ไม่เพิ่มขึ้น',
            2 => 'รู้สึกว่าช่างพูดคุย',
            4 => 'พูดเร็วขึ้น หรือพูดมากขึ้นเป็นบางครั้ง, พูดมากเกินความจำเป็น ในบางครั้ง',
            6 => 'พูดอย่างรวดเร็ว; พูดเร็วขึ้นหรือพูดมากขึ้นอย่างต่อเนื่อง; ยากที่จะขัดจังหวะ',
            8 => 'พูดอย่างพรั่งพรู; ไม่สามารถขัดจังหวะการพูดได้, พูดตลอดเวลา',
          ],
        ],
        [
          'text' => 'ภาษา-ความผิดปกติของความคิด',
          'options' => [
            'ไม่มี',
            'พูดอ้อมค้อม; วอกแวกง่ายเล็กน้อย, ความคิดเร็ว',
            'วอกแวกง่าย; ไม่มีจุดหมายของความคิด; เปลี่ยนหัวข้อสนทนาบ่อย, ความคิดแล่นเร็ว',
            'ความคิดเร็วแล่นเร็วมากหลายเรื่อง; พูดไม่ตรงประเด็น; ติดตามเนื้อหาของเรื่องได้ยาก, พูดเป็นจังหวะ',
            'เนื้อหาคำพูดไม่ปะติดปะต่อ; ไม่สามารถทำการสื่อสารได้',
          ],
          'text_en' => 'ภาษา-ความผิดปกติของความคิด',
          'options_en' => [
            'ไม่มี',
            'พูดอ้อมค้อม; วอกแวกง่ายเล็กน้อย, ความคิดเร็ว',
            'วอกแวกง่าย; ไม่มีจุดหมายของความคิด; เปลี่ยนหัวข้อสนทนาบ่อย, ความคิดแล่นเร็ว',
            'ความคิดเร็วแล่นเร็วมากหลายเรื่อง; พูดไม่ตรงประเด็น; ติดตามเนื้อหาของเรื่องได้ยาก, พูดเป็นจังหวะ',
            'เนื้อหาคำพูดไม่ปะติดปะต่อ; ไม่สามารถทำการสื่อสารได้',
          ],
        ],
        [
          'text' => 'เนื้อหาความคิด',
          'options' => [
            0 => 'ปกติ',
            2 => 'น่าสงสัยว่ามีแผนการ, มีความสนใจเรื่องใหม่ๆ',
            4 => 'มีโครงการพิเศษหนึ่งหรือหลายโครงการ; สนใจทางศาสนามาก',
            6 => 'มีความมั่นใจในความสามารถตนเองสูง หรือความคิดหวาดระแวง; คิดว่าคนอื่นพูดถึงตัวเอง',
            8 => 'ความคิดหลงผิด, ประสาทหลอน',
          ],
          'text_en' => 'เนื้อหาความคิด',
          'options_en' => [
            0 => 'ปกติ',
            2 => 'น่าสงสัยว่ามีแผนการ, มีความสนใจเรื่องใหม่ๆ',
            4 => 'มีโครงการพิเศษหนึ่งหรือหลายโครงการ; สนใจทางศาสนามาก',
            6 => 'มีความมั่นใจในความสามารถตนเองสูง หรือความคิดหวาดระแวง; คิดว่าคนอื่นพูดถึงตัวเอง',
            8 => 'ความคิดหลงผิด, ประสาทหลอน',
          ],
        ],
        [
          'text' => 'พฤติกรรมก่อความวุ่นวาย-ก้าวร้าว',
          'options' => [
            0 => 'ไม่มี, ให้ความร่วมมือ',
            2 => 'พูดเหน็บแนม; เสียงดังบางเวลา, ระแวดระวัง ปกป้องตัวเอง',
            4 => 'เรียกร้องความต้องการมาก; คุกคามผู้อื่นขณะที่อยู่ในการดูแลของเจ้าหน้าที่',
            6 => 'คุกคามผู้สัมภาษณ์; ตะโกน; ทำการสัมภาษณ์ได้ยาก',
            8 => 'จู่โจมทำร้าย; พฤติกรรมแสดงการทำลาย; ไม่สามารถทำการสัมภาษณ์',
          ],
          'text_en' => 'พฤติกรรมก่อความวุ่นวาย-ก้าวร้าว',
          'options_en' => [
            0 => 'ไม่มี, ให้ความร่วมมือ',
            2 => 'พูดเหน็บแนม; เสียงดังบางเวลา, ระแวดระวัง ปกป้องตัวเอง',
            4 => 'เรียกร้องความต้องการมาก; คุกคามผู้อื่นขณะที่อยู่ในการดูแลของเจ้าหน้าที่',
            6 => 'คุกคามผู้สัมภาษณ์; ตะโกน; ทำการสัมภาษณ์ได้ยาก',
            8 => 'จู่โจมทำร้าย; พฤติกรรมแสดงการทำลาย; ไม่สามารถทำการสัมภาษณ์',
          ],
        ],
        [
          'text' => 'ลักษณะภายนอก การแต่งตัว',
          'options' => [
            'สวมใส่เสื้อผ้าและแต่งตัวอย่างเหมาะสม',
            'แต่งกายไม่สะอาดเรียบร้อยบ้าง',
            'แต่งกายไม่เรียบร้อย; ผมยุ่งเหยิง; แต่งตัวมากเกินไป',
            'ผมเป็นกระเซิง เสื้อผ้าไม่สะอาด; ใส่เสื้อผ้าไม่ปกปิดมิดชิด; แต่งหน้าเข้มจัด',
            'แต่งกายไม่สะอาดเรียบร้อยเลย; ใส่เครื่องประดับมากเกินควร; ใส่เสื้อผ้าแปลกๆ',
          ],
          'text_en' => 'ลักษณะภายนอก การแต่งตัว',
          'options_en' => [
            'สวมใส่เสื้อผ้าและแต่งตัวอย่างเหมาะสม',
            'แต่งกายไม่สะอาดเรียบร้อยบ้าง',
            'แต่งกายไม่เรียบร้อย; ผมยุ่งเหยิง; แต่งตัวมากเกินไป',
            'ผมเป็นกระเซิง เสื้อผ้าไม่สะอาด; ใส่เสื้อผ้าไม่ปกปิดมิดชิด; แต่งหน้าเข้มจัด',
            'แต่งกายไม่สะอาดเรียบร้อยเลย; ใส่เครื่องประดับมากเกินควร; ใส่เสื้อผ้าแปลกๆ',
          ],
        ],
        [
          'text' => 'ความเข้าใจตนเอง',
          'options' => [
            'มีความเข้าใจตนเอง; ยอมรับว่ามีความเจ็บป่วย; ต้องการการรักษา',
            'สงสัยว่าตนเองอาจจะเจ็บป่วย',
            'ยอมรับว่ามีพฤติกรรมเปลี่ยนแปลง, แต่ปฏิเสธความเจ็บป่วย',
            'ยอมรับว่าอาจมีพฤติกรรมเปลี่ยนแปลง, แต่ปฏิเสธความเจ็บป่วย',
            'ปฏิเสธการเปลี่ยนแปลงพฤติกรรมของตนเอง',
          ],
          'text_en' => 'ความเข้าใจตนเอง',
          'options_en' => [
            'มีความเข้าใจตนเอง; ยอมรับว่ามีความเจ็บป่วย; ต้องการการรักษา',
            'สงสัยว่าตนเองอาจจะเจ็บป่วย',
            'ยอมรับว่ามีพฤติกรรมเปลี่ยนแปลง, แต่ปฏิเสธความเจ็บป่วย',
            'ยอมรับว่าอาจมีพฤติกรรมเปลี่ยนแปลง, แต่ปฏิเสธความเจ็บป่วย',
            'ปฏิเสธการเปลี่ยนแปลงพฤติกรรมของตนเอง',
          ],
        ],
      ],
      'title_en' => 'แบบประเมิน TMRS',
      'desc_en' => 'ประเมิน TMRS',
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
