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
        Schema::create('kuisionerawal', function (Blueprint $table) {
            $table->id();
            $table->string('A1')->nullable();
            $table->string('A2')->nullable();
            $table->string('A3')->nullable();
            $table->string('A4')->nullable();
            $table->string('A5')->nullable();
            $table->string('A6')->nullable();
            $table->string('A7')->nullable();
            $table->string('A8')->nullable();
            $table->string('A9')->nullable();
            $table->string('A10')->nullable();
            $table->string('A11')->nullable();
            $table->string('A12')->nullable();
            $table->string('A13')->nullable();
            $table->string('ka1')->nullable();
            $table->string('ka2')->nullable();
            $table->string('ka3')->nullable();
            $table->string('ka4')->nullable();
            $table->string('ka5')->nullable();
            $table->string('ka6')->nullable();
            $table->string('ka7')->nullable();
            $table->string('ka8')->nullable();
            $table->string('ka9')->nullable();
            $table->string('ka10')->nullable();
            $table->string('ka11')->nullable();
            $table->string('ka12')->nullable();
            $table->string('ka13')->nullable();
            $table->string('ka14')->nullable();
            $table->string('ka15')->nullable();
            $table->string('ka16')->nullable();
            $table->string('ka17')->nullable();
            $table->string('ka18')->nullable();
            $table->string('ka19')->nullable();
            $table->string('ka20')->nullable();
            $table->string('ka21')->nullable();
            $table->string('ka22')->nullable();
            $table->string('ka23')->nullable();
            $table->string('ka24')->nullable();
            $table->string('ka25')->nullable();
            $table->string('kb1')->nullable();
            $table->string('kb2')->nullable();
            $table->string('kb3')->nullable();
            $table->string('kb4')->nullable();
            $table->string('kb5')->nullable();
            $table->string('C1')->nullable();
            $table->string('C2')->nullable();
            $table->string('C3')->nullable();
            $table->string('C4')->nullable();
            $table->string('C5')->nullable();
            $table->string('C6')->nullable();
            $table->string('D1')->nullable();
            $table->string('D2')->nullable();
            $table->string('D3')->nullable();
            $table->string('D4')->nullable();
            $table->string('D5')->nullable();
            $table->string('E1')->nullable();
            $table->string('E2')->nullable();
            $table->string('E21')->nullable();
            $table->string('E3')->nullable();
            $table->string('E31')->nullable();
            $table->string('E32')->nullable();
            $table->string('E4')->nullable();
            $table->string('E41')->nullable();
            $table->string('E42')->nullable();
            $table->string('E5')->nullable();

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
        Schema::dropIfExists('kuisionerawal');
    }
};
