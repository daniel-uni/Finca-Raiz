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
        Schema::create(GlobalValue::TABLE_USER, function (Blueprint $table) {
            $table->id();
            $table->string(GlobalValue::USER_NAME);
            $table->string(GlobalValue::USER_EMAIL)->unique();
            $table->timestamp(GlobalValue::USER_EMAIL_VERIFICATE_AT)->nullable();
            $table->string(GlobalValue::USER_PASSWORD);
            $table->string(GlobalValue::USER_ADDRESS)->nullable();
            $table->string(GlobalValue::USER_PHONE)->nullable();
            $table->boolean(GlobalValue::USER_VALIDATE);
            $table->rememberToken();
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
        Schema::dropIfExists(GlobalValue::TABLE_USER);
    }
};
