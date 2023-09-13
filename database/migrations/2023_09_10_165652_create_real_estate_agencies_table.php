<?php

use App\Global\GlobalValue;
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
        Schema::create(GlobalValue::TABLE_REAL_ESTATE_AGENCY, function (Blueprint $table) {
            $table->id();
            $table->string(GlobalValue::REAL_AGENCY_NAME);
            $table->string(GlobalValue::REAL_AGENCY_ADDRESS);
            $table->string(GlobalValue::REAL_AGENCY_PHONE);
            $table->string(GlobalValue::REAL_AGENCY_EMAIL);
            $table->string(GlobalValue::REAL_AGENCY_GAIN);
            $table->string(GlobalValue::REAL_AGENCY_FIXED_PHONE);
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
        Schema::dropIfExists(GlobalValue::TABLE_REAL_ESTATE_AGENCY);
    }
};
