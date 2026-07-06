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

Route::post('/assessment/{assessment}', function (string $assessment) use ($securityHeaders) {
    $assessmentItem = collect(config('zuzie.assessment_page_items'))
        ->firstWhere('slug', $assessment);

    abort_unless($assessmentItem, 404);

    $questionCount = count($assessmentItem['questions']);
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
    
    $score = 0;
    $reverseScoring = $assessmentItem['reverse_scoring'] ?? [];
    foreach ($answers as $index => $val) {
        if (in_array($index, $reverseScoring)) {
            $score += ($minVal + $maxVal - $val);
        } else {
            $score += $val;
        }
    }
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
