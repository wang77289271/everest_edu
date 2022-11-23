<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sce_applications', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('fname')->nullable();
            $table->string('mname')->nullable();
            $table->string('lname')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('postcode')->nullable();
            $table->string('phone_code')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('university_name')->nullable();
            $table->string('degreefile')->nullable();
            $table->string('marksheetsfile')->nullable();
            $table->string('company_name')->nullable();
            $table->string('work_position')->nullable();
            $table->string('work_exp')->nullable();
            $table->string('resume')->nullable();
            $table->string('languageType')->nullable();
            $table->string('score_listening')->nullable();
            $table->string('score_speaking')->nullable();
            $table->string('score_writing')->nullable();
            $table->string('score_reading')->nullable();
            $table->string('language_score')->nullable();
            $table->string('status')->default('Applied');
            $table->timestamp('created_at')->useCurrentOnUpdate()->useCurrent();
            $table->string('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sce_applications');
    }
};
