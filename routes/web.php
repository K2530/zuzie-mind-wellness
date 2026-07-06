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
    foreach ($assessmentItem['questions'] as $index => $q) {
        $rules["answers.$index"] = ['required', 'integer', 'between:1,4'];
    }

    $validated = request()->validate($rules, [
        'answers.*.required' => 'กรุณาตอบคำถามให้ครบทุกข้อ',
        'answers.*.between' => 'คำตอบไม่ถูกต้อง',
    ]);

    $answers = array_values(array_map('intval', $validated['answers']));

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
    foreach ($assessmentItem['questions'] as $index => $q) {
        $rules["answers.$index"] = ['required', 'integer', 'between:1,4'];
    }

    $validated = request()->validate($rules, [
        'answers.*.required' => 'กรุณาตอบคำถามให้ครบทุกข้อ',
        'answers.*.between' => 'คำตอบไม่ถูกต้อง',
    ]);

    $answers = array_values(array_map('intval', $validated['answers']));

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



Route::post('/assessment/rq', function () {
    $assessmentItem = collect(config('zuzie.assessment_page_items'))
        ->firstWhere('slug', 'rq');

    abort_unless($assessmentItem, 404);

    $rules = [];
    foreach ($assessmentItem['questions'] as $index => $q) {
        $rules["answers.$index"] = ['required', 'integer', 'between:0,3'];
    }

    $validated = request()->validate($rules, [
        'answers.*.required' => 'กรุณาตอบคำถามให้ครบทุกข้อ',
        'answers.*.between' => 'คำตอบไม่ถูกต้อง',
    ]);

    $answers = array_map('intval', $validated['answers']);

    // Indices for reverse scoring: Q1(0), Q5(4), Q14(13), Q15(14), Q16(15)
    $reverse_indices = [0, 4, 13, 14, 15];
    $scored_answers = [];
    foreach ($answers as $index => $ans) {
        if (in_array($index, $reverse_indices)) {
            $scored_answers[$index] = 4 - $ans;
        } else {
            $scored_answers[$index] = $ans + 1;
        }
    }

    // Scales indices
    $scales = [
        'emotional' => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9],
        'morale' => [10, 11, 12, 13, 14],
        'problem' => [15, 16, 17, 18, 19],
    ];

    $scale_scores = [];
    foreach ($scales as $key => $indices) {
        $scale_scores[$key] = 0;
        foreach ($indices as $i) {
            $scale_scores[$key] += $scored_answers[$i];
        }
    }

    $total_score = array_sum($scale_scores);

    // Cut-offs
    $cutoffs = [
        'total' => ['low' => 55, 'high' => 70],
        'emotional' => ['low' => 27, 'high' => 35],
        'morale' => ['low' => 14, 'high' => 20],
        'problem' => ['low' => 13, 'high' => 19],
    ];

    return view('pages.assessment.result-rq', [
        'assessment' => $assessmentItem,
        'answers' => $answers,
        'scored_answers' => $scored_answers,
        'scale_scores' => $scale_scores,
        'total_score' => $total_score,
        'cutoffs' => $cutoffs,
    ]);
});


Route::post('/assessment/scared', function () {
    $assessmentItem = collect(config('zuzie.assessment_page_items'))
        ->firstWhere('slug', 'scared');

    abort_unless($assessmentItem, 404);

    $rules = [];
    foreach ($assessmentItem['questions'] as $index => $q) {
        $rules["answers.$index"] = ['required', 'integer', 'between:0,2'];
    }

    $validated = request()->validate($rules, [
        'answers.*.required' => 'กรุณาตอบคำถามให้ครบทุกข้อ',
        'answers.*.between' => 'คำตอบไม่ถูกต้อง',
    ]);

    $answers = array_map('intval', $validated['answers']);

    // Scales indices
    $scales = [
        'panic' => [0, 5, 8, 11, 14, 17, 18, 21, 23, 26, 29, 33, 37],
        'gad' => [4, 6, 13, 20, 22, 27, 32, 34, 36],
        'sad' => [3, 7, 12, 15, 19, 24, 28, 30], // wait, index 19 is 'ฉันฝันร้ายว่ามีเรื่องไม่ดีเกิดขึ้นกับตนเอง' which is item 20. But GAD also has 19 (item 20)?
        // Let's check GAD: 5, 7, 14, 21, 23, 28, 33, 35, 37
        // GAD indices: 4, 6, 13, 20, 22, 27, 32, 34, 36
        // Let's check SAD: 4, 8, 13, 16, 20, 25, 29, 31
        // SAD indices: 3, 7, 12, 15, 19, 24, 28, 30
        'soc' => [2, 9, 25, 31, 38, 39, 40],
        'sch' => [1, 10, 16, 35],
    ];

    $scale_scores = [];
    foreach ($scales as $key => $indices) {
        $scale_scores[$key] = 0;
        foreach ($indices as $i) {
            $scale_scores[$key] += $answers[$i];
        }
    }

    $total_score = array_sum($answers);

    // Cut-offs
    $cutoffs = [
        'total' => 25,
        'panic' => 7,
        'gad' => 9,
        'sad' => 5,
        'soc' => 8,
        'sch' => 3,
    ];

    return view('pages.assessment.result-scared', [
        'assessment' => $assessmentItem,
        'answers' => $answers,
        'scale_scores' => $scale_scores,
        'total_score' => $total_score,
        'cutoffs' => $cutoffs,
    ]);
});


Route::post('/assessment/gad7', function () {
    $assessmentItem = collect(config('zuzie.assessment_page_items'))
        ->firstWhere('slug', 'gad7');

    abort_unless($assessmentItem, 404);

    $rules = [];
    foreach ($assessmentItem['questions'] as $index => $q) {
        $rules["answers.$index"] = ['required', 'integer', 'between:0,3'];
    }

    $validated = request()->validate($rules, [
        'answers.*.required' => 'กรุณาตอบคำถามให้ครบทุกข้อ',
        'answers.*.between' => 'คำตอบไม่ถูกต้อง',
    ]);

    $answers = array_map('intval', $validated['answers']);
    $total_score = array_sum($answers);

    // Determine band
    $currentBand = null;
    foreach ($assessmentItem['bands'] as $band) {
        if ($total_score <= $band['max']) {
            $currentBand = $band;
            break;
        }
    }
    // Fallback if score exceeds all maxes (should not happen since max is 21)
    if (!$currentBand) {
        $currentBand = end($assessmentItem['bands']);
    }

    return view('pages.assessment.result-gad7', [
        'assessment' => $assessmentItem,
        'answers' => $answers,
        'total_score' => $total_score,
        'band' => $currentBand,
    ]);
});


Route::post('/assessment/mbi', function () {
    $assessmentItem = collect(config('zuzie.assessment_page_items'))
        ->firstWhere('slug', 'mbi');

    abort_unless($assessmentItem, 404);

    $rules = [];
    foreach ($assessmentItem['questions'] as $index => $q) {
        $rules["answers.$index"] = ['required', 'integer', 'between:0,6'];
    }

    $validated = request()->validate($rules, [
        'answers.*.required' => 'กรุณาตอบคำถามให้ครบทุกข้อ',
        'answers.*.between' => 'คำตอบไม่ถูกต้อง',
    ]);

    $answers = array_map('intval', $validated['answers']);

    // 0-indexed mapped to questions
    // EE: 1, 2, 3, 6, 8, 13, 14, 16, 20
    // DP: 5, 10, 11, 15, 22
    // PA: 4, 7, 9, 12, 17, 18, 19, 21
    $ee_indices = [0, 1, 2, 5, 7, 12, 13, 15, 19];
    $dp_indices = [4, 9, 10, 14, 21];
    $pa_indices = [3, 6, 8, 11, 16, 17, 18, 20];

    $ee_score = 0;
    foreach ($ee_indices as $i) $ee_score += $answers[$i];

    $dp_score = 0;
    foreach ($dp_indices as $i) $dp_score += $answers[$i];

    $pa_score = 0;
    foreach ($pa_indices as $i) $pa_score += $answers[$i];

    // Levels
    // EE: Low (0-16), Moderate (17-26), High (27+)
    // DP: Low (0-6), Moderate (7-12), High (13+)
    // PA: Low (39+), Moderate (32-38), High (0-31) -> PA is reverse, high burnout is low PA

    $ee_level = 'high';
    if ($ee_score <= 16) $ee_level = 'low';
    elseif ($ee_score <= 26) $ee_level = 'moderate';

    $dp_level = 'high';
    if ($dp_score <= 6) $dp_level = 'low';
    elseif ($dp_score <= 12) $dp_level = 'moderate';

    $pa_level = 'high';
    if ($pa_score >= 39) $pa_level = 'low';
    elseif ($pa_score >= 32) $pa_level = 'moderate';

    return view('pages.assessment.result-mbi', [
        'assessment' => $assessmentItem,
        'answers' => $answers,
        'ee_score' => $ee_score,
        'dp_score' => $dp_score,
        'pa_score' => $pa_score,
        'ee_level' => $ee_level,
        'dp_level' => $dp_level,
        'pa_level' => $pa_level,
    ]);
});


Route::post('/assessment/observe4', function () {
    $assessmentItem = collect(config('zuzie.assessment_page_items'))
        ->firstWhere('slug', 'observe4');

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

    // Calculate scores for each dimension
    $score_id = 0; // 0-9
    for ($i = 0; $i < 10; $i++) {
        $score_id += $answers[$i];
    }
    
    $score_ld = 0; // 10-19
    for ($i = 10; $i < 20; $i++) {
        $score_ld += $answers[$i];
    }
    
    $score_adhd = 0; // 20-29
    for ($i = 20; $i < 30; $i++) {
        $score_adhd += $answers[$i];
    }
    
    $score_autism = 0; // 30-39
    for ($i = 30; $i < 40; $i++) {
        $score_autism += $answers[$i];
    }

    $risk_id = $score_id >= 6;
    $risk_ld = $score_ld >= 6;
    $risk_adhd = $score_adhd >= 6;
    $risk_autism = $score_autism >= 6;

    $has_any_risk = $risk_id || $risk_ld || $risk_adhd || $risk_autism;

    return view('pages.assessment.result-observe4', [
        'assessment' => $assessmentItem,
        'answers' => $answers,
        'score_id' => $score_id,
        'score_ld' => $score_ld,
        'score_adhd' => $score_adhd,
        'score_autism' => $score_autism,
        'risk_id' => $risk_id,
        'risk_ld' => $risk_ld,
        'risk_adhd' => $risk_adhd,
        'risk_autism' => $risk_autism,
        'has_any_risk' => $has_any_risk,
    ]);
});


Route::post('/assessment/thi15', function () {
    $assessmentItem = collect(config('zuzie.assessment_page_items'))
        ->firstWhere('slug', 'thi15');

    abort_unless($assessmentItem, 404);

    $rules = [];
    foreach ($assessmentItem['questions'] as $index => $q) {
        $rules["answers.$index"] = ['required', 'integer', 'between:0,3'];
    }

    $validated = request()->validate($rules, [
        'answers.*.required' => 'กรุณาตอบคำถามให้ครบทุกข้อ',
        'answers.*.between' => 'คำตอบไม่ถูกต้อง',
    ]);

    $answers = array_map('intval', $validated['answers']);

    // Reverse scores for negative questions (index 3, 4, 5)
    // 0->3, 1->2, 2->1, 3->0 => 3 - answer
    $score_total = 0;
    foreach ($answers as $index => $ans) {
        if (in_array($index, [3, 4, 5])) {
            $score_total += (3 - $ans);
        } else {
            $score_total += $ans;
        }
    }

    if ($score_total >= 35) {
        $level = 'high';
        $level_text = 'มีความสุขมาก';
    } elseif ($score_total >= 28) {
        $level = 'moderate';
        $level_text = 'มีความสุขปานกลาง';
    } else {
        $level = 'low';
        $level_text = 'มีความสุขน้อย';
    }

    return view('pages.assessment.result-thi15', [
        'assessment' => $assessmentItem,
        'answers' => $answers,
        'score_total' => $score_total,
        'level' => $level,
        'level_text' => $level_text,
    ]);
});


Route::post('/assessment/phqa', function () {
    $assessmentItem = collect(config('zuzie.assessment_page_items'))
        ->firstWhere('slug', 'phqa');

    abort_unless($assessmentItem, 404);

    $rules = [];
    foreach ($assessmentItem['questions'] as $index => $q) {
        if ($q['type'] === 'scale') {
            $rules["answers.$index"] = ['required', 'integer', 'between:0,3'];
        } else {
            $rules["answers.$index"] = ['required', 'integer', 'between:0,1'];
        }
    }

    $validated = request()->validate($rules, [
        'answers.*.required' => 'กรุณาตอบคำถามให้ครบทุกข้อ',
        'answers.*.between' => 'คำตอบไม่ถูกต้อง',
    ]);

    $answers = array_map('intval', $validated['answers']);

    // Calculate total score only for the first 9 questions
    $score_total = 0;
    for ($i = 0; $i < 9; $i++) {
        $score_total += $answers[$i];
    }

    // Determine depression level
    if ($score_total >= 20) {
        $level = 'severe';
        $level_text = 'มีภาวะซึมเศร้ารุนแรง';
    } elseif ($score_total >= 15) {
        $level = 'moderate_severe';
        $level_text = 'มีภาวะซึมเศร้ามาก';
    } elseif ($score_total >= 10) {
        $level = 'moderate';
        $level_text = 'มีภาวะซึมเศร้าปานกลาง';
    } elseif ($score_total >= 5) {
        $level = 'mild';
        $level_text = 'มีภาวะซึมเศร้าเล็กน้อย';
    } else {
        $level = 'normal';
        $level_text = 'ไม่มีภาวะซึมเศร้า';
    }

    // Determine suicide risk
    // Question 9 > 0 or Q10 == 1 or Q11 == 1
    $suicide_risk = ($answers[8] > 0 || $answers[9] == 1 || $answers[10] == 1);

    return view('pages.assessment.result-phqa', [
        'assessment' => $assessmentItem,
        'answers' => $answers,
        'score_total' => $score_total,
        'level' => $level,
        'level_text' => $level_text,
        'suicide_risk' => $suicide_risk,
    ]);
});


Route::post('/assessment/tgmha15', function () {
    $assessmentItem = collect(config('zuzie.assessment_page_items'))
        ->firstWhere('slug', 'tgmha15');

    abort_unless($assessmentItem, 404);

    $rules = [];
    foreach ($assessmentItem['questions'] as $index => $q) {
        $rules["answers.$index"] = ['required', 'integer', 'between:0,3'];
    }

    $validated = request()->validate($rules, [
        'answers.*.required' => 'กรุณาตอบคำถามให้ครบทุกข้อ',
        'answers.*.between' => 'คำตอบไม่ถูกต้อง',
    ]);

    $answers = array_map('intval', $validated['answers']);

    // T-GMHA-15 scoring logic:
    // Option index 0=ไม่เลย, 1=เล็กน้อย, 2=มาก, 3=มากที่สุด
    // Normal score: Index + 1 (1 to 4)
    // Reverse score (for item 3): 4 - Index (4 to 1)

    $score_total = 0;
    foreach ($answers as $index => $ans) {
        if ($index === 2) { // Item 3 (0-based index is 2)
            $score_total += (4 - $ans);
        } else {
            $score_total += ($ans + 1);
        }
    }

    if ($score_total >= 50) {
        $level = 'high';
        $level_text = 'สุขภาพจิตดีกว่าคนทั่วไป';
    } elseif ($score_total >= 43) {
        $level = 'moderate';
        $level_text = 'สุขภาพจิตเท่ากับคนทั่วไป';
    } else {
        $level = 'low';
        $level_text = 'สุขภาพจิตต่ำกว่าคนทั่วไป';
    }

    return view('pages.assessment.result-tgmha15', [
        'assessment' => $assessmentItem,
        'answers' => $answers,
        'score_total' => $score_total,
        'level' => $level,
        'level_text' => $level_text,
    ]);
});


Route::post('/assessment/cries13', function () {
    $assessmentItem = collect(config('zuzie.assessment_page_items'))
        ->firstWhere('slug', 'cries13');

    abort_unless($assessmentItem, 404);

    $rules = [];
    foreach ($assessmentItem['questions'] as $index => $q) {
        $rules["answers.$index"] = ['required', 'integer', 'between:0,3'];
    }

    $validated = request()->validate($rules, [
        'answers.*.required' => 'กรุณาตอบคำถามให้ครบทุกข้อ',
        'answers.*.between' => 'คำตอบไม่ถูกต้อง',
    ]);

    $answers = array_map('intval', $validated['answers']);

    // CRIES-13 scoring logic:
    // Index 0 -> 0 score
    // Index 1 -> 1 score
    // Index 2 -> 3 score
    // Index 3 -> 5 score
    
    $score_map = [0 => 0, 1 => 1, 2 => 3, 3 => 5];
    
    $score_total = 0;
    $mapped_answers = [];
    foreach ($answers as $index => $ans) {
        $score = $score_map[$ans];
        $mapped_answers[$index] = $score;
        $score_total += $score;
    }

    // Cut-off score = 25
    if ($score_total >= 25) {
        $level = 'high_risk';
        $level_text = 'มีความเสี่ยงต่อภาวะ PTSD';
    } else {
        $level = 'low_risk';
        $level_text = 'ความเสี่ยงต่ำ';
    }

    return view('pages.assessment.result-cries13', [
        'assessment' => $assessmentItem,
        'answers' => $answers,
        'mapped_answers' => $mapped_answers,
        'score_total' => $score_total,
        'level' => $level,
        'level_text' => $level_text,
    ]);
});

Route::post('/assessment/{assessment}', function ($assessmentSlug) {
    if (!in_array($assessmentSlug, ['sdq-self', 'sdq-parent', 'sdq-teacher'])) {
        abort(404);
    }
    
    $assessmentItem = collect(config('zuzie.assessment_page_items'))
        ->firstWhere('slug', $assessmentSlug);

    abort_unless($assessmentItem, 404);

    $rules = [];
    foreach ($assessmentItem['questions'] as $index => $q) {
        $rules["answers.$index"] = ['required', 'integer', 'between:0,2'];
    }

    $validated = request()->validate($rules, [
        'answers.*.required' => 'กรุณาตอบคำถามให้ครบทุกข้อ',
        'answers.*.between' => 'คำตอบไม่ถูกต้อง',
    ]);

    $answers = array_map('intval', $validated['answers']);

    // Indices for reverse scoring: 6, 10, 13, 20, 24
    $reverse_indices = [6, 10, 13, 20, 24];
    $scored_answers = [];
    foreach ($answers as $index => $ans) {
        if (in_array($index, $reverse_indices)) {
            $scored_answers[$index] = 2 - $ans;
        } else {
            $scored_answers[$index] = $ans;
        }
    }

    // Scales indices
    $scales = [
        'emotional' => [2, 7, 12, 15, 23],
        'conduct' => [4, 6, 11, 17, 21],
        'hyperactivity' => [1, 9, 14, 20, 24],
        'peer' => [5, 10, 13, 18, 22],
        'prosocial' => [0, 3, 8, 16, 19],
    ];

    $scale_scores = [];
    foreach ($scales as $key => $indices) {
        $scale_scores[$key] = 0;
        foreach ($indices as $i) {
            $scale_scores[$key] += $scored_answers[$i];
        }
    }

    $total_difficulties = $scale_scores['emotional'] + $scale_scores['conduct'] + $scale_scores['hyperactivity'] + $scale_scores['peer'];

    // Cut-offs
    $cutoffs = [
        'sdq-parent' => [
            'total' => ['risk' => 14, 'problem' => 17],
            'emotional' => ['risk' => 5, 'problem' => 6],
            'conduct' => ['risk' => 3, 'problem' => 4],
            'hyperactivity' => ['risk' => 6, 'problem' => 7],
            'peer' => ['risk' => 3, 'problem' => 4],
            'prosocial' => ['risk' => 5, 'problem' => 4], // for prosocial, lower is worse (risk=5, problem<=4)
        ],
        'sdq-teacher' => [
            'total' => ['risk' => 12, 'problem' => 16],
            'emotional' => ['risk' => 5, 'problem' => 6],
            'conduct' => ['risk' => 3, 'problem' => 4],
            'hyperactivity' => ['risk' => 6, 'problem' => 7],
            'peer' => ['risk' => 4, 'problem' => 5],
            'prosocial' => ['risk' => 5, 'problem' => 4],
        ],
        'sdq-self' => [
            'total' => ['risk' => 16, 'problem' => 20],
            'emotional' => ['risk' => 6, 'problem' => 7],
            'conduct' => ['risk' => 4, 'problem' => 5],
            'hyperactivity' => ['risk' => 6, 'problem' => 7],
            'peer' => ['risk' => 4, 'problem' => 6],
            'prosocial' => ['risk' => 5, 'problem' => 4],
        ],
    ];

    $c = $cutoffs[$assessmentSlug];

    return view('pages.assessment.result-sdq', [
        'assessment' => $assessmentItem,
        'answers' => $answers,
        'scored_answers' => $scored_answers,
        'scale_scores' => $scale_scores,
        'total_difficulties' => $total_difficulties,
        'cutoffs' => $c,
    ]);
})->where('assessment', 'sdq-(self|parent|teacher)');


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

    foreach ($assessmentItem['questions'] as $index => $q) {
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

    $percent = $maxScore > 0 ? (int) round(($score / $maxScore) * 100) : 0;

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
