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


        foreach ($rows as $row) {
            Dataset::query()->create([
                'zipcode' => $row[0],
                'gender' => $row[1],
                'group_size_cat' => $row[2],
                'age_cat' => $row[3],
                'age_t1' => $row[5],
                'age_t2' => $row[6],
                'bmi_t1' => $row[7],
                'weight_t1' => $row[8],
                'height_t1' => $row[9],
            ]);
        }
    }
}