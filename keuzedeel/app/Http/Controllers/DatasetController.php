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

            if ($colomn == 'weight' || $colomn == 'height' || $colomn == 'kcal_intake' || $colomn == 'dbp') {
                $dataList = Dataset::select($colomn, 'gender', 'age')
                    ->get();

                $values = array();
                foreach ($dataList as $value) {

                    if ($value['gender'] == 1) {
                        if ($value['age'] >= 30 && $value['age'] <= 40) {
                            $values['men']['30-40'][] = $value[$colomn];
                        }

                        if ($value['age'] >= 41 && $value['age'] <= 50) {
                            $values['men']['41-50'][] = $value[$colomn];
                        }

                        if ($value['age'] >= 51 && $value['age'] <= 65) {
                            $values['men']['51-65'][] = $value[$colomn];
                        }
                    }
                    if ($value['gender'] == 2) {

                        if ($value['age'] >= 30 && $value['age'] <= 40) {
                            $values['women']['30-40'][] = $value[$colomn];
                        }

                        if ($value['age'] >= 41 && $value['age'] <= 50) {
                            $values['women']['41-50'][] = $value[$colomn];
                        }

                        if ($value['age'] >= 51 && $value['age'] <= 65) {
                            $values['women']['51-65'][] = $value[$colomn];
                        }
                    }
                }
                $avgValues['men']['_30_40'] = round(array_sum($values['men']['30-40']) / (count($values['men']['30-40'])), 2);
                $avgValues['men']['_41_50'] = round(array_sum($values['men']['41-50']) / (count($values['men']['41-50'])), 2);
                $avgValues['men']['_51_65'] = round(array_sum($values['men']['51-65']) / (count($values['men']['51-65'])), 2);

                $avgValues['women']['_30_40'] = round(array_sum($values['women']['30-40']) / (count($values['women']['30-40'])), 2);
                $avgValues['women']['_41_50'] = round(array_sum($values['women']['41-50']) / (count($values['women']['41-50'])), 2);
                $avgValues['women']['_51_65'] = round(array_sum($values['women']['51-65']) / (count($values['women']['51-65'])), 2);


                return response($avgValues);
            }
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