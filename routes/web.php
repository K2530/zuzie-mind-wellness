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

Route::get('/assessment', function () use ($securityHeaders) {
    return response()
        ->view('pages.assessment', [
            'navItems' => config('zuzie.nav_items'),
            'assessments' => config('zuzie.assessment_page_items'),
        ])
        ->withHeaders($securityHeaders);
})->name('assessment');

Route::get('/assessment/result', function () {
    return redirect()->route('assessment');
});

Route::get('/assessment/{assessment}', function (string $assessment) use ($securityHeaders) {
    $assessmentItem = collect(config('zuzie.assessment_page_items'))
        ->firstWhere('slug', $assessment);

    abort_unless($assessmentItem, 404);

    return response()
        ->view('pages.assessment-show', [
            'navItems' => config('zuzie.nav_items'),
            'assessment' => $assessmentItem,
        ])
        ->withHeaders($securityHeaders);
})->name('assessment.show');

Route::post('/assessment/{assessment}', function (string $assessment) use ($securityHeaders) {
    $assessmentItem = collect(config('zuzie.assessment_page_items'))
        ->firstWhere('slug', $assessment);

    abort_unless($assessmentItem, 404);

    $questionCount = count($assessmentItem['questions']);
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
    };

    return response()
        ->view('pages.assessment-result', [
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
