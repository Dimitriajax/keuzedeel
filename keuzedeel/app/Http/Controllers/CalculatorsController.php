<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorsController extends Controller
{

    protected array $types = ['bmi', 'calorie-inname'];

    public function index(Request $request)
    {
        $calculator = $request->route('type');

        if (!in_array($calculator, $this->types)) {
            abort(404);
        }

        return view($calculator);
    }

    public function calculateBmi($request)
    {
        $weight = $request->input('weight');



        $height = $request->input('height') / 100;

        $bmi =  $weight / pow($height, 2);


        if ($bmi < 18.5) {
            $status = 'Ondergewicht';
            $statusColor = 'red-500';
        }

        if ($bmi > 18.5 && $bmi < 24.9) {

            $status = 'Gezond';
            $statusColor = 'green-500';
        }

        if ($bmi > 24.9 && $bmi < 29.9) {
            $status = 'Overgewicht';
            $statusColor = 'red-500';
        }

        if ($bmi > 29.9) {
            $status = 'Zwaar overgewicht';
            $statusColor = 'red-500';
        }


        return view("bmi", ["bmi" => round($bmi, 1), 'status' => $status, 'statusColor' => $statusColor]);
    }

    public function calculateCalorieIntake($request)
    {
        $sedentary = 1.2;
        $lightActivity = 1.375;
        $moderateActivity = 1.55;
        $veryActive = 1.725;

        $gender = $request->input('gender');
        $age = $request->input('age');
        $weight = $request->input('weight');
        $bmr = 0;
        $height = $request->input('height');

        // Men: (10 × weight in kg) + (6.25 × height in cm) - (5 × age in years) + 5
        // Women: (10 × weight in kg) + (6.25 × height in cm) - (5 × age in years) - 161

        if ($gender == 'men') {
            $bmr = (10 * $weight) + (6.25 * $height) - (5 * $age) + 5;
        } else {
            $bmr = (10 * $weight) + (6.25 * $height) - (5 * $age) - 161;
        }

        $activity = $request->input('activity');

        $tdee = $bmr * floatval($activity);

    

        return view('calorie-intake', [
            'tdee' => round($tdee, 0), 'bmr' => round($bmr, 0), 'sedentary' => round($bmr * $sedentary, 0),
            'moderate' => round($bmr * $moderateActivity, 0), 'light' => round($bmr * $lightActivity, 0), 'active' => round($bmr * $veryActive, 0)
        ]);
    }

    public function calculate(Request $request)
    {
        $calculator = $request->route('type');

        $strings = explode("-", $calculator);

        foreach ($strings as  $string) {
            $captilizeStrings[] = ucwords($string);
        }

        $method = "calculate" . implode("", $captilizeStrings);

        return $this->$method($request);
    }
}