<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        // Loop through the array of rows and insert each one into the database
        Schema::create('datasets', function (Blueprint $table) {
            $table->id();
            $table->integer('gender')->nullable();
            $table->float('age')->nullable();
            $table->float('bmi')->nullable();
            $table->float('weight')->nullable();
            $table->float('height')->nullable();
            $table->float('dbp')->nullable();
            $table->float('packyears')->nullable();
            $table->float('smoking')->nullable();
            $table->float('kcal_intake')->nullable();
            $table->float('ldi_sum')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datasets');
    }
};