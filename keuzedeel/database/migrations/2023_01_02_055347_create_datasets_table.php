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
            $table->string('zipcode')->nullable();
            $table->string('gender')->nullable();
            $table->string('group_size_cat')->nullable();
            $table->string('age_cat')->nullable();
            $table->string('age_t1')->nullable();
            $table->string('age_t2')->nullable();
            $table->string('bmi_t1')->nullable();
            $table->string('weight_t1')->nullable();
            $table->string('height_t1')->nullable();
            $table->string('bmi_t2')->nullable();
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