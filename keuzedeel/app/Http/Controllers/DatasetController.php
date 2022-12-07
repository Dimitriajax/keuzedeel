<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class DatasetController extends Controller
{
    //

    public function insert()
    {

        $dataUrl = dirname(__DIR__, 3) . "/public/data.csv";

        $data =   file_get_contents($dataUrl);

        $newData = str_getcsv($data);

        $i = 0;
        $j = $i ^;

        echo $newData[$i];

        // var_dump($newData[$i]);
        echo "<pre>";
        // var_dump($newData);
        echo "</pre>";


        // for ($i = 0; $i <= 51; $i++) {
        //     $rows[] = $newData[$i];

        //     // for ($y = 0; $y >= $i; $y++) {
        //     //     echo "<pre>";

        //     //     // var_dump($newData[$y][$i]);
        //     //     echo "</pre>";
        //     // }
        // }

        // for ($i = 0; $i < ceil(count($newData) / 51); $i++) {

        //     for ($y = 51 * $i; $i < 51 * ($i + 1); $y++) {
        //         if ($y <= (count($newData) - 1)) {
        //             // echo $test[$y] = $newData[$y];
        //         }
        //     }
        // }
        // echo count($newData);
        echo "<pre>";
        // var_dump($test[0]);
        echo "</pre>";
    }
}