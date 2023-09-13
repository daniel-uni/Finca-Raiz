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
        Schema::create(GlobalValue::TABLE_PROPERTY, function (Blueprint $table) {
            $table->id();
            $table->string(GlobalValue::PROPERTY_NAME);
            $table->string(GlobalValue::PROPERTY_ADDRESS);
            $table->string(GlobalValue::PROPERTY_PRICE);
            $table->string(GlobalValue::PROPERTY_FOR_SALE);
            $table->string(GlobalValue::PROPERTY_TYPE);
            $table->string(GlobalValue::PROPERTY_BEDROOMS);
            $table->string(GlobalValue::PROPERTY_BATHROOMS);
            $table->string(GlobalValue::PROPERTY_PARKING);
            $table->string(GlobalValue::PROPERTY_AREA);
            $table->string(GlobalValue::PROPERTY_STRATUM);
            $table->string(GlobalValue::PROPERTY_ANTIQUITY);
            $table->string(GlobalValue::PROPERTY_FLOOR);
            $table->string(GlobalValue::PROPERTY_ADMINISTRATION);
            $table->unsignedBigInteger(GlobalValue::PROPERTY_USER_ID);
            $table->unsignedBigInteger(GlobalValue::PROPERTY_ID_REAL_AGENCY);
            $table->foreign(GlobalValue::PROPERTY_USER_ID)->references('id')->on(GlobalValue::TABLE_USER);
            $table->foreign(GlobalValue::PROPERTY_ID_REAL_AGENCY)->references('id')->on(GlobalValue::TABLE_REAL_ESTATE_AGENCY);
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
        Schema::dropIfExists(GlobalValue::TABLE_PROPERTY);
    }
};
