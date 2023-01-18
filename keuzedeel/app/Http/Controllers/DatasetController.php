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

            if ($colomn == 'dbp') {
                $dataList = Dataset::select($colomn, 'gender')
                    ->get();


                foreach ($dataList as $value) {

                    if ($value['gender'] == 1) {
                        $dps['men'][] = $value['dbp'];
                    }
                    if ($value['gender'] == 2) {
                        $dps['women'][] = $value['dbp'];
                    }
                }

                $avgBbp['men'] =  round(array_sum($dps['men']) / (count($dps['men'])), 2);
                $avgBbp['women'] =  round(array_sum($dps['women']) / (count($dps['women'])),2);


                return response($avgBbp);
            }


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

                $kcalMen['30-40'] = [];
                foreach ($dataList as $value) {

                    if ($value['gender'] == 1) {
                        if ($value['age'] >= 30 && $value['age'] <= 40) {
                            $kcalMen['30-40'][] = $value['kcal_intake'];
                        }

                        if ($value['age'] >= 41 && $value['age'] <= 50) {
                            $kcalMen['41-50'][] = $value['kcal_intake'];
                        }

                        if ($value['age'] >= 51 && $value['age'] <= 65) {
                            $kcalMen['51-65'][] = $value['kcal_intake'];
                        }
                    }

                    if ($value['gender'] == 2) {
                        if ($value['age'] < 30) {
                        }

                        if ($value['age'] >= 30 && $value['age'] <= 40) {
                            $kcalWomen['30-40'][] = $value['kcal_intake'];
                        }

                        if ($value['age'] >= 41 && $value['age'] <= 50) {
                            $kcalWomen['41-50'][] = $value['kcal_intake'];
                        }

                        if ($value['age'] >= 51 && $value['age'] <= 65) {
                            $kcalWomen['51-65'][] = $value['kcal_intake'];
                        }
                    }
                }

                $avgKcalMen['30-40'] = array_sum($kcalMen['30-40']) / (count($kcalMen['30-40']));
                $avgKcalMen['41-50'] = array_sum($kcalMen['41-50']) / (count($kcalMen['41-50']));
                $avgKcalMen['51-65'] = array_sum($kcalMen['51-65']) / (count($kcalMen['51-65']));

                $avgKcalMens = array('30-40' => round($avgKcalMen['30-40'], 0), '41-50' => round($avgKcalMen['41-50'], 0), '51-65' => round($avgKcalMen['51-65'], 0));

                $avgKcalWomen['30-40'] = array_sum($kcalWomen['30-40']) / (count($kcalWomen['30-40']));
                $avgKcalWomen['41-50'] = array_sum($kcalWomen['41-50']) / (count($kcalWomen['41-50']));
                $avgKcalWomen['51-65'] = array_sum($kcalWomen['51-65']) / (count($kcalWomen['51-65']));

                $avgKcalMens = array('a' => round($avgKcalMen['30-40'], 0), 'b' => round($avgKcalMen['41-50'], 0), 'c' => round($avgKcalMen['51-65'], 0));
                $avgKcalWomens = array('a' => round($avgKcalWomen['30-40'], 0), '41-50' => round($avgKcalWomen['41-50'], 0), '51-65' => round($avgKcalWomen['51-65'], 0));


                return response()->json(['men' => $avgKcalMens, 'women' => $avgKcalWomens]);
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