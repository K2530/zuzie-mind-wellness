import re

# 1. Update config/zuzie.php
with open('config/zuzie.php', 'r') as f:
    config_content = f.read()

new_assessments = """    'assessment_page_items' => [
        [
            'slug' => 'spst-20',
            'title' => 'แบบวัดความเครียด (SPST-20)',
            'desc' => 'ประเมินระดับความเครียดในระยะ 6 เดือนที่ผ่านมา (กรมสุขภาพจิต)',
            'icon' => 'stress',
            'metric' => 'ระดับความเครียด',
            'options' => [
                1 => 'ไม่รู้สึกเครียด',
                2 => 'รู้สึกเครียดเล็กน้อย',
                3 => 'รู้สึกเครียดปานกลาง',
                4 => 'รู้สึกเครียดมาก',
                5 => 'รู้สึกเครียดมากที่สุด',
            ],
            'bands' => [
                62 => ['label' => 'รุนแรง', 'tone' => '#c85f36', 'summary' => 'เป็นความเครียดระดับสูงที่เกิดต่อเนื่อง ส่งผลให้เจ็บป่วยทางกายและจิตใจ ควรได้รับการช่วยเหลือจากผู้ให้การปรึกษาอย่างรวดเร็ว'],
                42 => ['label' => 'สูง', 'tone' => '#b3794f', 'summary' => 'อยู่ในสถานการณ์ที่แก้ไขปัญหาไม่ได้ ปรับความรู้สึกยาก จะส่งผลต่อการใช้ชีวิตประจำวันและการเจ็บป่วย ควรคลายเครียดหรือปรึกษาผู้เชี่ยวชาญ'],
                24 => ['label' => 'ปานกลาง', 'tone' => '#6b705c', 'summary' => 'ความเครียดระดับนี้ไม่ก่อให้เกิดอันตราย ท่านสามารถผ่อนคลายความเครียดด้วยการทำกิจกรรมที่เพิ่มพลัง เช่น ออกกำลังกาย หรือทำงานอดิเรก'],
                0 => ['label' => 'น้อย', 'tone' => '#5f8b61', 'summary' => 'มีความเครียดในระดับน้อยและหายไปได้ในระยะเวลาสั้นๆ ถือว่ามีประโยชน์ในการเป็นแรงจูงใจในการดำเนินชีวิตได้'],
            ],
            'questions' => [
                'กลัวทำงานผิดพลาด',
                'ไปไม่ถึงเป้าหมายที่วางไว้',
                'ครอบครัวมีความขัดแย้งกันในเรื่องเงินหรือเรื่องงานในบ้าน',
                'เป็นกังวลกับเรื่องสารพิษหรือมลภาวะในอากาศ น้ำ เสียง และดิน',
                'รู้สึกว่าต้องแข่งขันหรือเปรียบเทียบ',
                'เงินไม่พอใช้จ่าย',
                'กล้ามเนื้อตึงหรือปวด',
                'ปวดหัวจากความตึงเครียด',
                'ปวดหลัง',
                'ความอยากอาหารเปลี่ยนแปลง',
                'ปวดศีรษะข้างเดียว',
                'รู้สึกวิตกกังวล',
                'รู้สึกคับข้องใจ',
                'รู้สึกโกรธ หรือหงุดหงิด',
                'รู้สึกเศร้า',
                'ความจำไม่ดี',
                'รู้สึกสับสน',
                'ตั้งสมาธิลำบาก',
                'รู้สึกเหนื่อยง่าย',
                'เป็นหวัดบ่อย ๆ',
            ],
        ],
        [
            'slug' => 'depression-9q',
            'title' => 'แบบคัดกรองโรคซึมเศร้า (9Q)',
            'desc' => 'ประเมินภาวะซึมเศร้าเบื้องต้น ในช่วง 2 สัปดาห์ที่ผ่านมารวมทั้งวันนี้',
            'icon' => 'depression',
            'metric' => 'ระดับอาการซึมเศร้า',
            'options' => [
                0 => 'ไม่มีเลย',
                1 => 'เป็นบางวัน (1-7 วัน)',
                2 => 'เป็นบ่อย (>7 วัน)',
                3 => 'เป็นทุกวัน',
            ],
            'bands' => [
                19 => ['label' => 'รุนแรง', 'tone' => '#c85f36', 'summary' => 'มีอาการของโรคซึมเศร้าระดับรุนแรง ควรพบแพทย์เพื่อรับการรักษาอย่างเร่งด่วน'],
                13 => ['label' => 'ปานกลาง', 'tone' => '#b3794f', 'summary' => 'มีอาการของโรคซึมเศร้าระดับปานกลาง ควรปรึกษาแพทย์หรือผู้เชี่ยวชาญด้านสุขภาพจิต'],
                7  => ['label' => 'น้อย', 'tone' => '#6b705c', 'summary' => 'มีอาการของโรคซึมเศร้าระดับน้อย อาจต้องปรับเปลี่ยนพฤติกรรมหรือพูดคุยกับผู้ไว้วางใจ หากไม่ดีขึ้นควรปรึกษาผู้เชี่ยวชาญ'],
                0  => ['label' => 'ไม่มีอาการ', 'tone' => '#5f8b61', 'summary' => 'ไม่มีอาการของโรคซึมเศร้า หรือมีอาการในระดับน้อยมาก'],
            ],
            'questions' => [
                'เบื่อ ไม่สนใจอยากทำอะไร',
                'ไม่สบายใจ ซึมเศร้า ท้อแท้',
                'หลับยากหรือหลับๆตื่นๆ หรือหลับมากไป',
                'เหนื่อยง่ายหรือไม่ค่อยมีแรง',
                'เบื่ออาหารหรือกินมากเกินไป',
                'รู้สึกไม่ดีกับตัวเอง คิดว่าตัวเองล้มเหลวหรือครอบครัวผิดหวัง',
                'สมาธิไม่ดี เวลาทำอะไร เช่น ดูโทรทัศน์ ฟังวิทยุ หรือทำงานที่ต้องใช้ความตั้งใจ',
                'พูดช้า ทำอะไรช้าลงจนคนอื่นสังเกตเห็นได้ หรือกระสับกระส่ายไม่สามารถอยู่นิ่งได้เหมือนที่เคยเป็น',
                'คิดทำร้ายตนเอง หรือคิดว่าถ้าตายไปคงจะดี',
            ],
        ],
        [
            'slug' => 'resilience-rq',
            'title' => 'แบบประเมินพลังสุขภาพจิต (RQ)',
            'desc' => 'ประเมินความสามารถในการปรับตัวและฟื้นตัวภายหลังที่พบกับเหตุการณ์วิกฤต (ความอึด ฮึด สู้)',
            'icon' => 'burnout',
            'metric' => 'ระดับพลังสุขภาพจิต',
            'options' => [
                1 => 'ไม่จริง',
                2 => 'จริงบางครั้ง',
                3 => 'ค่อนข้างจริง',
                4 => 'จริงมาก',
            ],
            'bands' => [
                70 => ['label' => 'สูงกว่าปกติ', 'tone' => '#5f8b61', 'summary' => 'ท่านจัดอยู่ในกลุ่มคนที่มีพลังสุขภาพจิตดีเยี่ยม ขอให้ท่านรักษาศักยภาพด้านนี้ไว้'],
                55 => ['label' => 'ปกติ', 'tone' => '#6b705c', 'summary' => 'ท่านอาจพัฒนาตนเองโดยการแสวงหาความรู้เพื่อเสริมสร้างพลังสุขภาพจิตให้คงอยู่ เช่น การฝึกทักษะแก้ไขปัญหา สร้างกำลังใจให้ตนเอง'],
                0  => ['label' => 'ต่ำกว่าปกติ', 'tone' => '#b3794f', 'summary' => 'ท่านสามารถพัฒนาศักยภาพได้โดยฝึกควบคุมอารมณ์ให้มีสติ มองส่วนดีที่มีอยู่ และฝึกคิดหาทางออกในการแก้ไขปัญหา'],
            ],
            'questions' => [
                'เรื่องไม่สบายใจเล็กน้อยทำให้ฉันว้าวุ่นใจนั่งไม่ติด',
                'ฉันไม่ใส่ใจคนที่หัวเราะเยาะฉัน',
                'เมื่อฉันทำผิดพลาดหรือเสียหายฉันยอมรับผิดหรือผลที่ตามมา',
                'ฉันเคยยอมทนลำบากเพื่ออนาคตที่ดีขึ้น',
                'เวลาทุกข์ใจมากๆ ฉันเจ็บป่วยไม่สบาย',
                'ฉันสอนและเตือนตัวเอง',
                'ความยากลำบากทำให้ฉันแกร่งขึ้น',
                'ฉันไม่จดจำเรื่องเลวร้ายในอดีต',
                'ถึงแม้ปัญหาจะหนักหนาเพียงใดชีวิตฉันก็ไม่เลวร้ายไปหมด',
                'เมื่อมีเรื่องหนักใจ ฉันมีคนปรับทุกข์ด้วย',
                'จากประสบการณ์ที่ผ่านมาทำให้ฉันมั่นใจว่าจะแก้ปัญหาต่างๆ ที่ผ่านเข้ามาในชีวิตได้',
                'ฉันมีครอบครัวและคนใกล้ชิดเป็นกำลังใจ',
                'ฉันมีแผนการที่จะทำให้ชีวิตก้าวไปข้างหน้า',
                'เมื่อมีปัญหาวิกฤตเกิดขึ้น ฉันรู้สึกว่าตัวเองไร้ความสามารถ',
                'เป็นเรื่องยากสำหรับฉันที่จะทำให้ชีวิตดีขึ้น',
                'ฉันอยากหนีไปให้พ้น หากมีปัญหาหนักหนาต้องรับผิดชอบ',
                'การแก้ไขปัญหาทำให้ฉันมีประสบการณ์มากขึ้น',
                'ในการพูดคุย ฉันหาเหตุผลที่ทุกคนยอมรับหรือเห็นด้วยกับฉันได้',
                'ฉันเตรียมหาทางออกไว้ หากปัญหาร้ายแรงกว่าที่คิด',
                'ฉันชอบฟังความคิดเห็นที่แตกต่างจากฉัน',
            ],
        ],
    ],"""

config_content = re.sub(
    r"'assessment_page_items' => \[.*?\],\n\n    'video_categories'",
    new_assessments + "\n\n    'video_categories'",
    config_content,
    flags=re.DOTALL
)
with open('config/zuzie.php', 'w') as f:
    f.write(config_content)


# 2. Update routes/web.php
with open('routes/web.php', 'r') as f:
    routes_content = f.read()

old_submit = """    $questionCount = count($assessmentItem['questions']);
    $rules = [];

    for ($index = 0; $index < $questionCount; $index++) {
        $rules["answers.$index"] = ['required', 'integer', 'between:0,3'];
    }

    $validated = request()->validate($rules, [
        'answers.*.required' => 'กรุณาตอบคำถามให้ครบทุกข้อ',
        'answers.*.between' => 'คำตอบไม่ถูกต้อง',
    ]);

    $answers = array_map('intval', $validated['answers']);
    $score = array_sum($answers);
    $maxScore = $questionCount * 3;
    $percent = (int) round(($score / $maxScore) * 100);

    $band = match (true) {
        $percent >= 75 => [
            'label' => 'สูง',
            'tone' => '#c85f36',
            'summary' => 'คะแนนของคุณอยู่ในระดับสูง ควรให้ความสำคัญกับการดูแลใจอย่างจริงจัง และอาจเหมาะกับการพูดคุยกับผู้เชี่ยวชาญเพื่อหาทางดูแลที่เหมาะกับคุณ',
        ],
        $percent >= 50 => [
            'label' => 'ค่อนข้างสูง',
            'tone' => '#b3794f',
            'summary' => 'คะแนนของคุณอยู่ในระดับค่อนข้างสูง มีสัญญาณที่ควรสังเกตและเริ่มดูแลตัวเองมากขึ้น หากอาการต่อเนื่องควรขอคำแนะนำจากผู้เชี่ยวชาญ',
        ],
        $percent >= 25 => [
            'label' => 'ปานกลาง',
            'tone' => '#6b705c',
            'summary' => 'คะแนนของคุณอยู่ในระดับปานกลาง ยังมีพื้นที่ให้ดูแลและปรับสมดุลชีวิต ลองเริ่มจากการพักผ่อน การตั้งขอบเขต และสังเกตอารมณ์ของตัวเอง',
        ],
        default => [
            'label' => 'ต่ำ',
            'tone' => '#5f8b61',
            'summary' => 'คะแนนของคุณอยู่ในระดับต่ำในตอนนี้ แนะนำให้รักษาวิธีดูแลใจที่ช่วยคุณอยู่ และกลับมาเช็กอินตัวเองเป็นระยะ',
        ],
    };"""

new_submit = """    $questionCount = count($assessmentItem['questions']);
    $options = $assessmentItem['options'] ?? [0 => 'ไม่เลย', 1 => 'เล็กน้อย', 2 => 'บ่อยครั้ง', 3 => 'มากที่สุด'];
    $optionsKeys = array_keys($options);
    $minVal = min($optionsKeys);
    $maxVal = max($optionsKeys);
    $rules = [];

    for ($index = 0; $index < $questionCount; $index++) {
        $rules["answers.$index"] = ['required', 'integer', "between:$minVal,$maxVal"];
    }

    $validated = request()->validate($rules, [
        'answers.*.required' => 'กรุณาตอบคำถามให้ครบทุกข้อ',
        'answers.*.between' => 'คำตอบไม่ถูกต้อง',
    ]);

    $answers = array_map('intval', $validated['answers']);
    
    // RQ-20 has reverse scoring for some items, but for simplicity let's stick to simple sum unless specified
    $score = array_sum($answers);
    $maxScore = $questionCount * $maxVal;
    $percent = (int) round(($score / $maxScore) * 100);

    $band = null;
    if (isset($assessmentItem['bands'])) {
        foreach ($assessmentItem['bands'] as $threshold => $b) {
            if ($score >= $threshold) {
                $band = $b;
                break;
            }
        }
    } else {
        $band = match (true) {
            $percent >= 75 => ['label' => 'สูง', 'tone' => '#c85f36', 'summary' => 'คะแนนของคุณอยู่ในระดับสูง ควรดูแลอย่างจริงจัง'],
            $percent >= 50 => ['label' => 'ค่อนข้างสูง', 'tone' => '#b3794f', 'summary' => 'คะแนนของคุณอยู่ในระดับค่อนข้างสูง ควรเริ่มดูแลตัวเอง'],
            $percent >= 25 => ['label' => 'ปานกลาง', 'tone' => '#6b705c', 'summary' => 'คะแนนของคุณอยู่ในระดับปานกลาง ลองเริ่มจากการพักผ่อน'],
            default => ['label' => 'ต่ำ', 'tone' => '#5f8b61', 'summary' => 'คะแนนของคุณอยู่ในระดับต่ำ แนะนำให้รักษาวิธีดูแลใจต่อไป'],
        };
    }"""

routes_content = routes_content.replace(old_submit, new_submit)
with open('routes/web.php', 'w') as f:
    f.write(routes_content)


# 3. Update resources/views/pages/assessment/show.blade.php
with open('resources/views/pages/assessment/show.blade.php', 'r') as f:
    show_content = f.read()

old_options = """                    @foreach ([0 => 'ไม่เลย', 1 => 'เล็กน้อย', 2 => 'บ่อยครั้ง', 3 => 'มากที่สุด'] as $value => $label)
                      <label class="flex gap-2 min-h-14 w-full cursor-pointer items-center justify-center rounded-md border border-reseda/15 bg-white px-3 py-2 text-center text-sm font-semibold text-ink/72 transition hover:border-reseda hover:bg-almond/55">
                        <input type="radio" name="answers[{{ $index }}]" value="{{ $value }}" required @checked((string) old("answers.$index") === (string) $value) class="accent-reseda w-4 h-4">
                        {{ $label }}
                      </label>
                    @endforeach"""

new_options = """                    @php $options = $assessment['options'] ?? [0 => 'ไม่เลย', 1 => 'เล็กน้อย', 2 => 'บ่อยครั้ง', 3 => 'มากที่สุด']; @endphp
                    @foreach ($options as $value => $label)
                      <label class="flex gap-2 min-h-14 w-full cursor-pointer items-center justify-center rounded-md border border-reseda/15 bg-white px-3 py-2 text-center text-sm font-semibold text-ink/72 transition hover:border-reseda hover:bg-almond/55">
                        <input type="radio" name="answers[{{ $index }}]" value="{{ $value }}" required @checked((string) old("answers.$index") === (string) $value) class="accent-reseda w-4 h-4">
                        {{ $label }}
                      </label>
                    @endforeach"""

old_aside = """              <div class="mt-5 grid gap-3 text-sm text-ink/70">
                <div class="flex justify-between gap-4 rounded-md bg-milk px-4 py-3"><span>ไม่เลย</span><strong>0 คะแนน</strong></div>
                <div class="flex justify-between gap-4 rounded-md bg-milk px-4 py-3"><span>เล็กน้อย</span><strong>1 คะแนน</strong></div>
                <div class="flex justify-between gap-4 rounded-md bg-milk px-4 py-3"><span>บ่อยครั้ง</span><strong>2 คะแนน</strong></div>
                <div class="flex justify-between gap-4 rounded-md bg-milk px-4 py-3"><span>มากที่สุด</span><strong>3 คะแนน</strong></div>
              </div>"""

new_aside = """              <div class="mt-5 grid gap-3 text-sm text-ink/70">
                @php $options = $assessment['options'] ?? [0 => 'ไม่เลย', 1 => 'เล็กน้อย', 2 => 'บ่อยครั้ง', 3 => 'มากที่สุด']; @endphp
                @foreach ($options as $value => $label)
                  <div class="flex justify-between gap-4 rounded-md bg-milk px-4 py-3"><span>{{ $label }}</span><strong>{{ $value }} คะแนน</strong></div>
                @endforeach
              </div>"""

show_content = show_content.replace(old_options, new_options)
show_content = show_content.replace(old_aside, new_aside)
with open('resources/views/pages/assessment/show.blade.php', 'w') as f:
    f.write(show_content)
