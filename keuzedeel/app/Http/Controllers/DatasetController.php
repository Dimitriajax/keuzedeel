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

            return response()->json([$colomn => $bmiCount]);
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