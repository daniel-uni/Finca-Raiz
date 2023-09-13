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
        Schema::table(GlobalValue::TABLE_PROPERTY, function (Blueprint $table) {
            $table->unsignedBigInteger(GlobalValue::PROPERTY_ID_DEPARTAMNET)->after(GlobalValue::PROPERTY_USER_ID);

            $table->foreign(GlobalValue::PROPERTY_ID_DEPARTAMNET)->references('id')->on(GlobalValue::TABLE_DEPARTMENT);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table(GlobalValue::TABLE_PROPERTY, function (Blueprint $table) {
            $table->unsignedBigInteger(GlobalValue::PROPERTY_ID_DEPARTAMNET)->after(GlobalValue::PROPERTY_USER_ID);

            $table->foreign(GlobalValue::PROPERTY_ID_DEPARTAMNET)->references('id')->on(GlobalValue::TABLE_DEPARTMENT);
        });
    }
};
