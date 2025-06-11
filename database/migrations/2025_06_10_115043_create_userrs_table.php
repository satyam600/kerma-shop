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
        Schema::create('userrs', function (Blueprint $table) {
             $table->id();
            $table->string('user_name', 60);
            $table->string('f_name', 60);
            $table->string('l_name', 60);
            $table->unsignedBigInteger('gender_id');
            $table->foreign('gender_id')->references('id')->on('genders')->onDelete('cascade');
            $table->integer('phone');
            $table->string('email')->unique();
            $table->text('address');
            $table->string('state');
            $table->date('r_date');
            $table->text('terms');
            $table->text('newsletters');
            $table->string('promotion');
            $table->string('status');
            $table->date('email_verified_at');
            $table->string('password');
            $table->string('remember_tocken');
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
        Schema::dropIfExists('userrs');
    }
};
