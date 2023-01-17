<?php

namespace Database\Seeders;

use App\Models\Dataset;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatasetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Read the contents of the CSV file into a string
        $csv = Storage::get('csv/dataset.csv');

        // Parse the CSV string into an array of rows
        $rows = array_map('str_getcsv', explode("\n", $csv));


        
        unset($rows[0]);
        foreach ($rows as $row) {
            Dataset::query()->create([
                'gender' => $row[0],
                'age' => $row[1],
                'bmi' => $row[2],
                'weight' => $row[3],
                'height' => $row[4],
                'dbp' => $row[5],
                'packyears' => $row[6],
                'smoking' => $row[7],
                'kcal_intake' => $row[8],
                'ldi_sum' => $row[9],

            ]);
        }
    }
}