<?php

namespace App\Http\Controllers;

use App\Models\Dataset;
use Illuminate\Http\Request;


class DatasetController extends Controller
{
    //

    public function index()
    {
        $dataList = Dataset::select()
            ->get();

        return $dataList;
    }

    public function showFilter(Request $request)
    {

        $colomn = $request->route('colomn');
        $filter = $request->route('filter');

        if ($colomn == 'gender') {
            // Sort evert gender in an array.
            $dataList = Dataset::select($colomn)
                ->orderBy($colomn)
                ->get();

            $dataList = $dataList->groupBy($colomn);

            // Check if filter is count.
            if ($filter == 'count') {


                // Count total amount of each gender.
                $genderCount['men'] = count($dataList[1]);
                $genderCount['women'] = count($dataList[2]);

                return response($genderCount);
            }
        }

        if ($filter == 'avg') {

            $deniedAccess = array('gender');

            if (in_array($colomn, $deniedAccess)) {
                return "This value can not be filtered by avarage.";
            }

            $dataList = Dataset::select($colomn)
                ->avg($colomn);

            return response()->json([$colomn => round($dataList, 0)]);
        }

        if ($filter == 'group_by') {
            $dataList = Dataset::select($colomn)
                ->orderBy($colomn)
                ->get();

            $dataList = $dataList->groupBy($colomn);

            return response()->json([$colomn => $dataList]);
        }

        if ($filter == 'max') {
            $deniedAccess = array('gender');

            if (in_array($colomn, $deniedAccess)) {
                return "This value can not be filtered by max.";
            }

            $dataList = Dataset::max($colomn);

            return response()->json([$colomn => $dataList]);
        }

        if ($filter == 'min') {
            $deniedAccess = array('gender');

            if (in_array($colomn, $deniedAccess)) {
                return "This value can not be filtered by min.";
            }

            $dataList = Dataset::min($colomn);

            return response()->json([$colomn => $dataList]);
        }

        if ($filter == "count") {

            if ($colomn == 'bmi') {

                $dataList = Dataset::select($colomn)
                    ->get();

                $bmi = array();

                $bmi['underweight'] = [];
                $bmi['healthy'] = [];
                $bmi['overweight'] = [];
                $bmi['obese'] = [];


                foreach ($dataList as $value) {

                    if ($value['bmi'] < 18.5) {
                        $bmi['underweight'][] = $value;
                    }

                    if ($value['bmi'] > 18.5 && $value['bmi'] < 24.9) {
                        $bmi['healthy'][] = $value;
                    }

                    if ($value['bmi'] > 24.9 && $value['bmi'] < 29.9) {
                        $bmi['overweight'][] = $value;
                    }

                    if ($value['bmi'] > 29.9) {
                        $bmi['obese'][] = $value;
                    }
                }

                $bmiCount = array('underweight' => count($bmi['underweight']), 'healthy' => count($bmi['healthy']), 'overweight' => count($bmi['overweight']), 'obese' => count($bmi['obese']));

                return response($bmiCount);
            }
            if ($colomn == 'weight') {
                $dataList = Dataset::select($colomn, 'gender')
                    ->get();

                foreach ($dataList as $value) {
                    if ($value['gender'] == 1) {
                        $weightMens[] = $value['weight'];
                    }

                    if ($value['gender'] == 2) {
                        $weightWomens[] = $value['weight'];
                    }
                }


                $avgMenWeight = array_sum($weightMens) / (count($weightMens));
                $avgWomenWeight = array_sum($weightWomens) / (count($weightWomens));


                return response()->json(['men' => round($avgMenWeight, 2), 'women' => round($avgWomenWeight, 2)]);
            }

            if ($colomn == 'height') {
                $dataList = Dataset::select($colomn, 'gender')
                    ->get();

                foreach ($dataList as $value) {
                    if ($value['gender'] == 1) {
                        $heightMens[] = $value['height'];
                    }

                    if ($value['gender'] == 2) {
                        $heightWomens[] = $value['height'];
                    }
                }

                $avgMenHeight = array_sum($heightMens) / (count($heightMens));
                $avgWomenHeight = array_sum($heightWomens) / (count($heightWomens));


                return response()->json(['men' => round($avgMenHeight, 2), 'women' => round($avgWomenHeight, 2)]);
            }

            if ($colomn == 'kcal_intake') {
                $dataList = Dataset::select($colomn, 'gender', 'age')
                    ->get();


                return $dataList;
            }
        }
    }

    public function show(Request $request)
    {
        $colomn = $request->route('colomn');

        $dataList = Dataset::select($colomn)
            ->get();

        return response()->json([$colomn => $dataList]);
    }
}