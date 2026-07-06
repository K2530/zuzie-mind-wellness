<?php

use Illuminate\Support\Facades\Route;

$securityHeaders = [
    'X-Frame-Options' => 'SAMEORIGIN',
    'X-Content-Type-Options' => 'nosniff',
    'Referrer-Policy' => 'strict-origin-when-cross-origin',
    'Permissions-Policy' => 'camera=(), microphone=(), geolocation=()',
];

if (app()->isProduction()) {
    $securityHeaders['Content-Security-Policy'] = "default-src 'self'; img-src 'self' data:; script-src 'self'; style-src 'self' 'unsafe-inline' https://fonts.googleapis.com; font-src 'self' https://fonts.gstatic.com; form-action 'self'; base-uri 'self'; frame-ancestors 'self'; upgrade-insecure-requests";
}

Route::get('/', function () use ($securityHeaders) {
    return response()
        ->view('pages.home', [
            'navItems' => config('zuzie.nav_items'),
            'trustItems' => config('zuzie.trust_items'),
            'assessments' => config('zuzie.assessments'),
            'videos' => config('zuzie.videos'),
            'hashtags' => config('zuzie.hashtags'),
        ])
        ->withHeaders($securityHeaders);
})->name('home');

Route::get('/videos', function () use ($securityHeaders) {
    return response()
        ->view('pages.videos', [
            'navItems' => config('zuzie.nav_items'),
            'videoCategories' => config('zuzie.video_categories'),
            'videos' => config('zuzie.videos'),
        ])
        ->withHeaders($securityHeaders);
})->name('videos');

Route::get('/videos/{id}', function ($id) use ($securityHeaders) {
    $videos = config('zuzie.videos');
    $video = $videos[$id] ?? abort(404);
    return response()
        ->view('pages.video-show', [
            'navItems' => config('zuzie.nav_items'),
            'video' => $video,
            'relatedVideos' => array_slice($videos, 0, 4)
        ])
        ->withHeaders($securityHeaders);
})->name('video.show');

Route::get('/assessment', function () use ($securityHeaders) {
    return response()
        ->view('pages.assessment.index', [
            'navItems' => config('zuzie.nav_items'),
            'assessments' => config('zuzie.assessment_page_items'),
        ])
        ->withHeaders($securityHeaders);
})->name('assessment');

Route::get('/assessment/result', function () {
    return redirect()->route('assessment');
});
Route::get('/assessment/2p', function () use ($securityHeaders) {
    $assessmentItem = collect(config('zuzie.assessment_page_items'))
        ->firstWhere('slug', '2p');
    return response()
        ->view('pages.assessment.2p', [
            'navItems' => config('zuzie.nav_items'),
            'assessment' => $assessmentItem,
        ])
        ->withHeaders($securityHeaders);
})->name('assessment.2p');

Route::post('/assessment/2p', function () use ($securityHeaders) {
    $assessmentItem = collect(config('zuzie.assessment_page_items'))
        ->firstWhere('slug', '2p');

    $request = request();
    $hasEvent = $request->input('has_event') === '1';
    
    $score = 0;
    if ($hasEvent) {
        $q1p = $request->input('q1p') === '1';
        $q2p = $request->input('q2p') === '1';
        if ($q1p && $q2p) {
            $score = 2; // At risk
        }
    }

    $band = match (true) {
        $score >= 2 => ['label' => 'มีความเสี่ยง', 'tone' => '#c85f36', 'summary' => 'ควรส่งพบบุคลากรทางการแพทย์เพื่อยืนยันการวินิจฉัยและให้การรักษาที่เหมาะสมต่อไป'],
        default => ['label' => 'ไม่มีความเสี่ยง', 'tone' => '#5f8b61', 'summary' => 'คะแนนของคุณอยู่ในระดับปกติ แนะนำให้รักษาวิธีดูแลใจต่อไป'],
    };

    return response()
        ->view('pages.assessment.result', [
            'navItems' => config('zuzie.nav_items'),
            'assessment' => $assessmentItem,
            'answers' => [],
            'score' => $score,
            'maxScore' => 2,
            'percent' => $score >= 2 ? 100 : 0,
            'band' => $band,
            'videos' => array_slice(config('zuzie.videos'), 0, 4),
        ])
        ->withHeaders($securityHeaders);
})->name('assessment.2p.submit');

Route::get('/assessment/2q', function () use ($securityHeaders) {
    $assessmentItem = collect(config('zuzie.assessment_page_items'))
        ->firstWhere('slug', '2q');
    return response()
        ->view('pages.assessment.2q', [
            'navItems' => config('zuzie.nav_items'),
            'assessment' => $assessmentItem,
        ])
        ->withHeaders($securityHeaders);
})->name('assessment.2q');

Route::post('/assessment/2q', function () use ($securityHeaders) {
    $assessmentItem = collect(config('zuzie.assessment_page_items'))
        ->firstWhere('slug', '2q');

    $request = request();

    // 1. Calculate 2Q Score
    $score2q = 0;
    if ($request->input('q2q_1') === '1') $score2q += 1;
    if ($request->input('q2q_2') === '1') $score2q += 1;

    $band2q = match (true) {
        $score2q >= 1 => ['label' => 'มีความเสี่ยง', 'tone' => '#c85f36'],
        default => ['label' => 'ปกติ', 'tone' => '#5f8b61'],
    };

    // 2. Calculate 9Q Score
    $score9q = 0;
    if ($score2q >= 1) {
        for ($i = 1; $i <= 9; $i++) {
            $score9q += (int) $request->input("q9q_$i", 0);
        }
    }

    $band9q = match (true) {
        $score9q >= 19 => ['label' => 'รุนแรง', 'tone' => '#8f2d2d'],
        $score9q >= 13 => ['label' => 'ปานกลาง', 'tone' => '#c85f36'],
        $score9q >= 7 => ['label' => 'น้อย', 'tone' => '#b3794f'],
        default => ['label' => 'ไม่มี/น้อยมาก', 'tone' => '#5f8b61'],
    };

    // 3. Calculate 8Q Score
    $score8q = 0;
    if ($score9q >= 7) {
        if ($request->input('q8q_1') === '1') $score8q += 1;
        if ($request->input('q8q_2') === '1') $score8q += 2;
        if ($request->input('q8q_3') === '1') {
            $score8q += 6;
            if ($request->input('q8q_3_1') === '1') $score8q += 8; // Cannot control
        }
        if ($request->input('q8q_4') === '1') $score8q += 8;
        if ($request->input('q8q_5') === '1') $score8q += 9;
        if ($request->input('q8q_6') === '1') $score8q += 4;
        if ($request->input('q8q_7') === '1') $score8q += 10;
        if ($request->input('q8q_8') === '1') $score8q += 4;
    }

    $band8q = match (true) {
        $score8q >= 17 => ['label' => 'รุนแรง', 'tone' => '#8f2d2d', 'summary' => 'แนะนำให้ส่งต่อโรงพยาบาลที่มีจิตแพทย์ด่วน'],
        $score8q >= 9 => ['label' => 'ปานกลาง', 'tone' => '#c85f36', 'summary' => 'มีแนวโน้มที่จะฆ่าตัวตายในปัจจุบัน ระดับปานกลาง แนะนำให้ปรึกษาผู้เชี่ยวชาญ'],
        $score8q >= 1 => ['label' => 'น้อย', 'tone' => '#b3794f', 'summary' => 'มีแนวโน้มที่จะฆ่าตัวตายในปัจจุบัน ระดับน้อย แนะนำให้พูดคุยกับผู้เชี่ยวชาญ'],
        default => ['label' => 'ไม่มี', 'tone' => '#5f8b61', 'summary' => 'ไม่มีแนวโน้มฆ่าตัวตายในปัจจุบัน'],
    };

    return response()
        ->view('pages.assessment.result-2q', [
            'navItems' => config('zuzie.nav_items'),
            'assessment' => $assessmentItem,
            'score2q' => $score2q,
            'band2q' => $band2q,
            'score9q' => $score9q,
            'band9q' => $band9q,
            'score8q' => $score8q,
            'band8q' => $band8q,
            'videos' => array_slice(config('zuzie.videos'), 0, 4),
        ])
        ->withHeaders($securityHeaders);
})->name('assessment.2q.submit');

Route::post('/assessment/eq35', function () use ($securityHeaders) {
    $assessmentItem = collect(config('zuzie.assessment_page_items'))
        ->firstWhere('slug', 'eq35');

    abort_unless($assessmentItem, 404);

    $rules = [];
    for ($index = 0; $index < 15; $index++) {
        $rules["answers.$index"] = ['required', 'integer', 'between:1,4'];
    }

    $validated = request()->validate($rules, [
        'answers.*.required' => 'กรุณาตอบคำถามให้ครบทุกข้อ',
        'answers.*.between' => 'คำตอบไม่ถูกต้อง',
    ]);

    $answers = array_map('intval', $validated['answers']);

    $scoreGood = $answers[0] + $answers[1] + $answers[2] + $answers[3] + $answers[4];
    $scoreSmart = $answers[5] + $answers[6] + $answers[7] + $answers[8] + $answers[9];
    $scoreHappy = $answers[10] + $answers[11] + $answers[12] + (5 - $answers[13]) + $answers[14];
    $scoreTotal = $scoreGood + $scoreSmart + $scoreHappy;

    $getBand = function($score, $tNormal, $tHigh) {
        if ($score >= $tHigh) return ['label' => 'สูงกว่าปกติ', 'tone' => '#5f8b61'];
        if ($score >= $tNormal) return ['label' => 'ปกติ', 'tone' => '#e8a365'];
        return ['label' => 'ต่ำกว่าปกติ', 'tone' => '#c85f36'];
    };

    $bandGood = $getBand($scoreGood, 12, 20);
    $bandSmart = $getBand($scoreSmart, 13, 20);
    $bandHappy = $getBand($scoreHappy, 13, 19);
    $bandTotal = $getBand($scoreTotal, 40, 56);

    return response()
        ->view('pages.assessment.result-eq35', [
            'navItems' => config('zuzie.nav_items'),
            'assessment' => $assessmentItem,
            'scoreGood' => $scoreGood,
            'bandGood' => $bandGood,
            'scoreSmart' => $scoreSmart,
            'bandSmart' => $bandSmart,
            'scoreHappy' => $scoreHappy,
            'bandHappy' => $bandHappy,
            'scoreTotal' => $scoreTotal,
            'bandTotal' => $bandTotal,
            'videos' => array_slice(config('zuzie.videos'), 0, 4),
        ])
        ->withHeaders($securityHeaders);
})->name('assessment.eq35.submit');


Route::post('/assessment/eq611', function () use ($securityHeaders) {
    $assessmentItem = collect(config('zuzie.assessment_page_items'))
        ->firstWhere('slug', 'eq611');

    abort_unless($assessmentItem, 404);

    $rules = [];
    for ($index = 0; $index < 60; $index++) {
        $rules["answers.$index"] = ['required', 'integer', 'between:1,4'];
    }

    $validated = request()->validate($rules, [
        'answers.*.required' => 'กรุณาตอบคำถามให้ครบทุกข้อ',
        'answers.*.between' => 'คำตอบไม่ถูกต้อง',
    ]);

    $answers = array_map('intval', $validated['answers']);

    // Reverse scoring for items (0-indexed)
    $reverseItems = [3, 4, 5, 12, 19, 27, 28, 39, 40, 41, 46, 47, 51, 52, 53];
    foreach ($reverseItems as $index) {
        $answers[$index] = 5 - $answers[$index];
    }

    $s11 = array_sum(array_slice($answers, 0, 7));
    $s12 = array_sum(array_slice($answers, 7, 9));
    $s13 = array_sum(array_slice($answers, 16, 7));
    $s21 = array_sum(array_slice($answers, 23, 7));
    $s22 = array_sum(array_slice($answers, 30, 6));
    $s23 = array_sum(array_slice($answers, 36, 6));
    $s31 = array_sum(array_slice($answers, 42, 6));
    $s32 = array_sum(array_slice($answers, 48, 6));
    $s33 = array_sum(array_slice($answers, 54, 6));

    $getBand = function($score, $tNormal, $tHigh) {
        if ($score >= $tHigh) return ['label' => 'สูงกว่าปกติ', 'tone' => '#5f8b61'];
        if ($score >= $tNormal) return ['label' => 'ปกติ', 'tone' => '#e8a365'];
        return ['label' => 'ต่ำกว่าปกติ', 'tone' => '#c85f36'];
    };

    $b11 = $getBand($s11, 18, 25);
    $b12 = $getBand($s12, 22, 32);
    $b13 = $getBand($s13, 19, 26);
    $b21 = $getBand($s21, 20, 26);
    $b22 = $getBand($s22, 16, 22);
    $b23 = $getBand($s23, 14, 21);
    $b31 = $getBand($s31, 16, 22);
    $b32 = $getBand($s32, 15, 21);
    $b33 = $getBand($s33, 16, 22);

    return response()
        ->view('pages.assessment.result-eq611', [
            'navItems' => config('zuzie.nav_items'),
            'assessment' => $assessmentItem,
            'scores' => [
                's11' => ['score' => $s11, 'max' => 28, 'band' => $b11],
                's12' => ['score' => $s12, 'max' => 36, 'band' => $b12],
                's13' => ['score' => $s13, 'max' => 28, 'band' => $b13],
                's21' => ['score' => $s21, 'max' => 28, 'band' => $b21],
                's22' => ['score' => $s22, 'max' => 24, 'band' => $b22],
                's23' => ['score' => $s23, 'max' => 24, 'band' => $b23],
                's31' => ['score' => $s31, 'max' => 24, 'band' => $b31],
                's32' => ['score' => $s32, 'max' => 24, 'band' => $b32],
                's33' => ['score' => $s33, 'max' => 24, 'band' => $b33],
            ],
            'totalGood' => $s11 + $s12 + $s13,
            'totalSmart' => $s21 + $s22 + $s23,
            'totalHappy' => $s31 + $s32 + $s33,
            'videos' => array_slice(config('zuzie.videos'), 0, 4),
        ])
        ->withHeaders($securityHeaders);
})->name('assessment.eq611.submit');


Route::post('/assessment/eq1217', function () use ($securityHeaders) {
    $assessmentItem = collect(config('zuzie.assessment_page_items'))
        ->firstWhere('slug', 'eq1217');

    abort_unless($assessmentItem, 404);

    $rules = [];
    for ($index = 0; $index < 52; $index++) {
        $rules["answers.$index"] = ['required', 'integer', 'between:1,4'];
    }

    $validated = request()->validate($rules, [
        'answers.*.required' => 'กรุณาตอบคำถามให้ครบทุกข้อ',
        'answers.*.between' => 'คำตอบไม่ถูกต้อง',
    ]);

    $answers = array_map('intval', $validated['answers']);

    // Reverse scoring for items (0-indexed)
    $reverseItems = [1, 2, 4, 7, 8, 10, 12, 15, 17, 18, 20, 23, 25, 26, 28, 29, 32, 34, 36, 39, 44, 46, 50, 51];
    foreach ($reverseItems as $index) {
        $answers[$index] = 5 - $answers[$index];
    }

    $s11 = array_sum(array_slice($answers, 0, 6));
    $s12 = array_sum(array_slice($answers, 6, 6));
    $s13 = array_sum(array_slice($answers, 12, 6));
    $s21 = array_sum(array_slice($answers, 18, 6));
    $s22 = array_sum(array_slice($answers, 24, 6));
    $s23 = array_sum(array_slice($answers, 30, 6));
    $s31 = array_sum(array_slice($answers, 36, 4));
    $s32 = array_sum(array_slice($answers, 40, 6));
    $s33 = array_sum(array_slice($answers, 46, 6));

    $getBand = function($score, $tNormal, $tHigh) {
        if ($score > $tHigh) return ['label' => 'สูงกว่าปกติ', 'tone' => '#5f8b61'];
        if ($score >= $tNormal) return ['label' => 'ปกติ', 'tone' => '#e8a365'];
        return ['label' => 'ต่ำกว่าปกติ', 'tone' => '#c85f36'];
    };

    $b11 = $getBand($s11, 13, 18);
    $b12 = $getBand($s12, 16, 21);
    $b13 = $getBand($s13, 17, 22);
    $b21 = $getBand($s21, 15, 20);
    $b22 = $getBand($s22, 14, 19);
    $b23 = $getBand($s23, 15, 20);
    $b31 = $getBand($s31, 9, 13);
    $b32 = $getBand($s32, 16, 22);
    $b33 = $getBand($s33, 15, 21);

    return response()
        ->view('pages.assessment.result-eq1217', [
            'navItems' => config('zuzie.nav_items'),
            'assessment' => $assessmentItem,
            'scores' => [
                's11' => ['score' => $s11, 'max' => 24, 'band' => $b11],
                's12' => ['score' => $s12, 'max' => 24, 'band' => $b12],
                's13' => ['score' => $s13, 'max' => 24, 'band' => $b13],
                's21' => ['score' => $s21, 'max' => 24, 'band' => $b21],
                's22' => ['score' => $s22, 'max' => 24, 'band' => $b22],
                's23' => ['score' => $s23, 'max' => 24, 'band' => $b23],
                's31' => ['score' => $s31, 'max' => 16, 'band' => $b31],
                's32' => ['score' => $s32, 'max' => 24, 'band' => $b32],
                's33' => ['score' => $s33, 'max' => 24, 'band' => $b33],
            ],
            'totalGood' => $s11 + $s12 + $s13,
            'totalSmart' => $s21 + $s22 + $s23,
            'totalHappy' => $s31 + $s32 + $s33,
            'videos' => array_slice(config('zuzie.videos'), 0, 4),
        ])
        ->withHeaders($securityHeaders);
})->name('assessment.eq1217.submit');

Route::get('/assessment/{assessment}', function (string $assessment) use ($securityHeaders) {
    $assessmentItem = collect(config('zuzie.assessment_page_items'))
        ->firstWhere('slug', $assessment);

    abort_unless($assessmentItem, 404);

    return response()
        ->view('pages.assessment.show', [
            'navItems' => config('zuzie.nav_items'),
            'assessment' => $assessmentItem,
        ])
        ->withHeaders($securityHeaders);
})->name('assessment.show');


Route::post('/assessment/rajanukul40', function () {
    $assessmentItem = collect(config('zuzie.assessment_page_items'))
        ->firstWhere('slug', 'rajanukul40');

    abort_unless($assessmentItem, 404);

    $rules = [];
    for ($index = 0; $index < 40; $index++) {
        $rules["answers.$index"] = ['required', 'integer', 'between:0,1'];
    }

    $validated = request()->validate($rules, [
        'answers.*.required' => 'กรุณาตอบคำถามให้ครบทุกข้อ',
        'answers.*.between' => 'คำตอบไม่ถูกต้อง',
    ]);

    $answers = array_map('intval', $validated['answers']);

    $scores = [
        'slow_learner' => array_sum(array_slice($answers, 0, 10)),
        'ld' => array_sum(array_slice($answers, 10, 10)),
        'adhd' => array_sum(array_slice($answers, 20, 10)),
        'autism' => array_sum(array_slice($answers, 30, 10)),
    ];

    return view('pages.assessment.result-rajanukul40', [
        'assessment' => $assessmentItem,
        'scores' => $scores,
        'answers' => $answers,
    ]);
});


Route::post('/assessment/ld-{level}', function ($level) {
    if (!in_array($level, ['primary', 'secondary'])) {
        abort(404);
    }
    
    $slug = 'ld-' . $level;
    $assessmentItem = collect(config('zuzie.assessment_page_items'))
        ->firstWhere('slug', $slug);

    abort_unless($assessmentItem, 404);

    $rules = [];
    for ($index = 0; $index < 43; $index++) {
        $rules["answers.$index"] = ['required', 'integer', 'between:0,1'];
    }

    $validated = request()->validate($rules, [
        'answers.*.required' => 'กรุณาตอบคำถามให้ครบทุกข้อ',
        'answers.*.between' => 'คำตอบไม่ถูกต้อง',
    ]);

    $answers = array_map('intval', $validated['answers']);

    $preScreenScore = array_sum(array_slice($answers, 0, 3));
    $passPreScreen = $preScreenScore === 3;

    $scores = [
        'reading' => array_sum(array_slice($answers, 3, 10)),
        'writing' => array_sum(array_slice($answers, 13, 10)),
        'math' => array_sum(array_slice($answers, 23, 10)),
        'behavior' => array_sum(array_slice($answers, 33, 10)),
    ];

    $cutOffs = $level === 'primary' 
        ? ['reading' => 7, 'writing' => 7, 'math' => 6, 'behavior' => 4]
        : ['reading' => 7, 'writing' => 7, 'math' => 5, 'behavior' => 4];

    return view('pages.assessment.result-ld', [
        'assessment' => $assessmentItem,
        'level' => $level,
        'passPreScreen' => $passPreScreen,
        'scores' => $scores,
        'cutOffs' => $cutOffs,
        'answers' => $answers,
    ]);
});


Route::post('/assessment/pddsq', function () {
    $assessmentItem = collect(config('zuzie.assessment_page_items'))
        ->firstWhere('slug', 'pddsq');

    abort_unless($assessmentItem, 404);

    $rules = [];
    foreach ($assessmentItem['questions'] as $index => $q) {
        $rules["answers.$index"] = ['required', 'integer', 'between:0,1'];
    }

    $validated = request()->validate($rules, [
        'answers.*.required' => 'กรุณาตอบคำถามให้ครบทุกข้อ',
        'answers.*.between' => 'คำตอบไม่ถูกต้อง',
    ]);

    $answers = array_map('intval', $validated['answers']);

    $score = 0;
    // Reverse scoring for group 1 (0-4), group 3 (10-14), group 5 (20-24)
    $reverse_indices = [0,1,2,3,4, 10,11,12,13,14, 20,21,22,23,24];
    
    foreach ($answers as $index => $ans) {
        if (in_array($index, $reverse_indices)) {
            $score += (1 - $ans);
        } else {
            $score += $ans;
        }
    }

    $resultBand = null;
    foreach ($assessmentItem['bands'] as $minScore => $band) {
        if ($score >= $minScore) {
            $resultBand = $band;
            break;
        }
    }

    return view('pages.assessment.result', [
        'assessment' => $assessmentItem,
        'score' => $score,
        'band' => $resultBand,
        'answers' => $answers,
    ]);
});

Route::post('/assessment/{assessment}', function (string $assessment) use ($securityHeaders) {
    $assessmentItem = collect(config('zuzie.assessment_page_items'))
        ->firstWhere('slug', $assessment);

    abort_unless($assessmentItem, 404);

    $questionCount = count($assessmentItem['questions']);
    $options = $assessmentItem['options'] ?? [0 => 'ไม่เลย', 1 => 'เล็กน้อย', 2 => 'บ่อยครั้ง', 3 => 'มากที่สุด'];
    $optionsKeys = array_keys($options);
    $globalMinVal = min($optionsKeys);
    $globalMaxVal = max($optionsKeys);
    $rules = [];
    $maxScore = 0;

    for ($index = 0; $index < $questionCount; $index++) {
        $q = $assessmentItem['questions'][$index];
        if (is_array($q) && isset($q['options'])) {
            $qKeys = array_keys($q['options']);
            $qMin = min($qKeys);
            $qMax = max($qKeys);
        } else {
            $qMin = $globalMinVal;
            $qMax = $globalMaxVal;
        }
        $rules["answers.$index"] = ['required', 'integer', "between:$qMin,$qMax"];
        $maxScore += $qMax;
    }

    $validated = request()->validate($rules, [
        'answers.*.required' => 'กรุณาตอบคำถามให้ครบทุกข้อ',
        'answers.*.between' => 'คำตอบไม่ถูกต้อง',
    ]);

    $answers = array_map('intval', $validated['answers']);
    
    $score = 0;
    $reverseScoring = $assessmentItem['reverse_scoring'] ?? [];
    foreach ($answers as $index => $val) {
        if (in_array($index, $reverseScoring)) {
            $score += ($globalMinVal + $globalMaxVal - $val);
        } else {
            $score += $val;
        }
    }

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
    }

    return response()
        ->view('pages.assessment.result', [
            'navItems' => config('zuzie.nav_items'),
            'assessment' => $assessmentItem,
            'answers' => $answers,
            'score' => $score,
            'maxScore' => $maxScore,
            'percent' => $percent,
            'band' => $band,
            'videos' => array_slice(config('zuzie.videos'), 0, 4),
        ])
        ->withHeaders($securityHeaders);
})->name('assessment.submit');

Route::get('/hashtags', function () use ($securityHeaders) {
    return response()
        ->view('pages.hashtags', [
            'navItems' => config('zuzie.nav_items'),
            'categories' => config('zuzie.hashtag_categories'),
        ])
        ->withHeaders($securityHeaders);
})->name('hashtags');

Route::get('/courses', function () use ($securityHeaders) {
    return response()->view('pages.courses', [
        'navItems' => config('zuzie.nav_items'),
        'courses' => config('zuzie.courses'),
    ])->withHeaders($securityHeaders);
})->name('courses');

Route::get('/courses/{id}', function ($id) use ($securityHeaders) {
    return response()->view('pages.course-detail', [
        'navItems' => config('zuzie.nav_items'),
        'course' => config('zuzie.courses')[0]
    ])->withHeaders($securityHeaders);
})->name('course.detail');

Route::get('/login', function () use ($securityHeaders) {
    return response()
        ->view('pages.login', [
            'navItems' => config('zuzie.nav_items'),
        ])
        ->withHeaders($securityHeaders);
})->name('login');

Route::post('/login', function () {
    session(['logged_in' => true, 'user' => [
        'name' => 'katanyu',
        'email' => 'ss0952728788ss@gmail.com',
        'initial' => 'K'
    ]]);
    return redirect()->route('home');
})->name('login.submit');

Route::get('/logout', function () {
    session()->forget(['logged_in', 'user']);
    return redirect()->route('home');
})->name('logout');

Route::get('/register', function () use ($securityHeaders) {
    return response()
        ->view('pages.register', [
            'navItems' => config('zuzie.nav_items'),
        ])
        ->withHeaders($securityHeaders);
})->name('register');

Route::post('/register', function () {
    return redirect()->route('home');
})->name('register.submit');

Route::post('/cart/add', function () {
    $course = config('zuzie.courses')[0];
    session(['cart' => [$course]]);
    return redirect()->route('cart');
})->name('cart.add');

Route::get('/cart/remove', function () {
    session()->forget('cart');
    return redirect()->route('cart');
})->name('cart.remove');

Route::get('/cart', function () use ($securityHeaders) {
    return response()
        ->view('pages.cart', [
            'navItems' => config('zuzie.nav_items'),
        ])
        ->withHeaders($securityHeaders);
})->name('cart');

Route::get('/checkout', function () use ($securityHeaders) {
    if (!session('cart')) return redirect()->route('home');
    return response()
        ->view('pages.checkout', [
            'navItems' => config('zuzie.nav_items'),
        ])
        ->withHeaders($securityHeaders);
})->name('checkout');

Route::post('/checkout', function () {
    $cart = session('cart', []);
    $myCourses = session('my_courses', []);
    $myCourses = array_merge($myCourses, $cart);
    session(['my_courses' => $myCourses]);
    session()->forget('cart');
    return redirect()->route('checkout.success');
})->name('checkout.submit');

Route::get('/checkout/success', function () use ($securityHeaders) {
    return response()
        ->view('pages.checkout-success', [
            'navItems' => config('zuzie.nav_items'),
        ])
        ->withHeaders($securityHeaders);
})->name('checkout.success');

Route::get('/my-courses', function () use ($securityHeaders) {
    return response()
        ->view('pages.my-courses', [
            'navItems' => config('zuzie.nav_items'),
        ])
        ->withHeaders($securityHeaders);
})->name('my.courses');

Route::get('/learn/{id}', function ($id) use ($securityHeaders) {
    return response()
        ->view('pages.learn', [
            'navItems' => config('zuzie.nav_items'),
            'course' => config('zuzie.courses')[0]
        ])
        ->withHeaders($securityHeaders);
})->name('learn');

Route::get('/booking', function () use ($securityHeaders) {
    return response()
        ->view('pages.booking', [
            'navItems' => config('zuzie.nav_items')
        ])
        ->withHeaders($securityHeaders);
})->name('booking');

Route::post('/booking', function (\Illuminate\Http\Request $request) {
    session([
        'booking' => [
            'service' => $request->input('service'),
            'date' => $request->input('date'),
            'time' => $request->input('time'),
        ]
    ]);
    return redirect()->route('booking.payment');
})->name('booking.submit');

Route::get('/booking/payment', function () use ($securityHeaders) {
    if (!session('booking')) return redirect()->route('booking');
    return response()
        ->view('pages.booking-payment', [
            'navItems' => config('zuzie.nav_items')
        ])
        ->withHeaders($securityHeaders);
})->name('booking.payment');

Route::post('/booking/payment', function () {
    return redirect()->route('booking.success');
})->name('booking.payment.submit');

Route::get('/booking/success', function () use ($securityHeaders) {
    return response()
        ->view('pages.booking-success', [
            'navItems' => config('zuzie.nav_items')
        ])
        ->withHeaders($securityHeaders);
})->name('booking.success');

Route::get('/blogs', function () use ($securityHeaders) {
    return response()
        ->view('pages.blogs', [
            'navItems' => config('zuzie.nav_items')
        ])
        ->withHeaders($securityHeaders);
})->name('blogs');

Route::get('/blogs/{id}', function ($id) use ($securityHeaders) {
    return response()
        ->view('pages.article', [
            'navItems' => config('zuzie.nav_items')
        ])
        ->withHeaders($securityHeaders);
})->name('article');

Route::get('/services', function () use ($securityHeaders) {
    return response()
        ->view('pages.services', [
            'navItems' => config('zuzie.nav_items')
        ])
        ->withHeaders($securityHeaders);
})->name('services');

Route::get('/contact', function () use ($securityHeaders) {
    return response()
        ->view('pages.contact', [
            'navItems' => config('zuzie.nav_items')
        ])
        ->withHeaders($securityHeaders);
})->name('contact');

Route::get('/community', function () use ($securityHeaders) {
    return response()
        ->view('pages.community', [
            'navItems' => config('zuzie.nav_items')
        ])
        ->withHeaders($securityHeaders);
})->name('community');
