<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    protected array $awnsers =
    [
        'question-one' => ['BMI', 'bmi', 'Bmi'],
        'question-two' => [2000],
        'question-three' => ['true'],
    ];

    public function index()
    {
        return view('quiz');
    }

    public function checkResult(Request $request)
    {

        $totalQuestions = count($this->awnsers);

        $correctAwnsers = 0;

        foreach ($request->except('_token') as $question => $awnser) {
            if (in_array($awnser, $this->awnsers[$question])) {
                $correctAwnsers++;
            }
        }

        $score = $correctAwnsers / $totalQuestions * 100;

        return view('quiz', ['score' => round($score, 0)]);
    }
}