<?php

namespace App\Http\Controllers;

use App\Models\Badge;
use App\Models\BadgesUser;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    protected array $awnsers =
    [
        'bmi' => [
            'question-one' => ['BMI', 'bmi', 'Bmi'],
            'question-two' => [2000],
            'question-three' => ['true']
        ],
        'weight' => [
            'question-one' => ['false'],
            'question-two' => ['true'],
            'question-three' => ['true']
        ],
        'height' => [
            'question-one' => ['false'],
            'question-two' => ['false'],
            'question-three' => ['true']
        ],
        'gender' => [
            'question-one' => ['50'],
            'question-two' => ['true'],
            'question-three' => ['mom']
        ],
        'kcal' => [
            'question-one' => ['false'],
            'question-two' => ['true'],
            'question-three' => ['true']
        ],
        'bp' => [
            'question-one' => ['true'],
            'question-two' => ['false'],
            'question-three' => ['true']
        ]

    ];

    public function index()
    {
        return view('quiz');
    }

    public function checkResult(Request $request)
    {

        $topic = $request->route('topic');

        $totalQuestions = count($this->awnsers[$topic]);

        $correctAwnsers = 0;

        foreach ($request->except('_token') as $question => $awnser) {
            if (in_array($awnser, $this->awnsers[$topic][$question])) {
                $correctAwnsers++;
            }
        }


        $score = $correctAwnsers / $totalQuestions * 100;

        if ($score > 80) {
            $badgeId = Badge::where('title', $topic)
                ->get('id')
                ->toArray();

            $userId = auth()->user()->id ?? 0;
            
            if ($userId != 0) {

                $collectedBadge = BadgesUser::where('user_id', $userId)
                    ->where('badge_id', $badgeId)
                    ->get();

                if (empty($collectedBadge[0])) {
                    $values = [
                        'user_id' => $userId,
                        'badge_id' => $badgeId[0]['id']
                    ];
                    BadgesUser::create($values);
                }

            } 
        }

        $view = 'quiz-' . $topic;

        return view($view, ['score' => round($score, 0)]);
    }

    public function show(Request $request)
    {
        $topic = $request->route('topic');
        $view = 'quiz-' . $topic;
        return view($view);
    }
}