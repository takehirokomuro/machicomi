<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHospitalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospitals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('medical_institution'); // 医療機関名を保存するカラム
            $table->string('medical_treatment');  // 診療科目を保存するカラム
            $table->string('business_hours'); // 営業時間を保存するカラム
            $table->string('regular_holiday');  // 定休日を保存するカラム
            $table->string('access'); // アクセスを保存するカラム
            $table->string('street_address');  // 住所を保存するカラム
            $table->string('phone_number'); // 電話番号を保存するカラム
            $table->string('url');  // URLを保存するカラム
            $table->string('image'); // 画像を保存するカラム
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hospitals');
    }
}
