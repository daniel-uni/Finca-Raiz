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
        Schema::table(GlobalValue::TABLE_USER, function (Blueprint $table) {
            $table->unsignedBigInteger(GlobalValue::USER_ROL)->after(GlobalValue::USER_VALIDATE);

            $table->foreign(GlobalValue::USER_ROL)->references('id')->on(GlobalValue::TABLE_USER);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table(GlobalValue::TABLE_USER, function (Blueprint $table) {
            $table->unsignedBigInteger(GlobalValue::USER_ROL)->after(GlobalValue::USER_VALIDATE);

            $table->foreign(GlobalValue::USER_ROL)->references('id')->on(GlobalValue::TABLE_USER);
        });
    }
};
