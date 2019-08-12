<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShortmovie2019participantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shortmovie2019participants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('teamName')->nullable()->default(NULL);
            $table->string('subtheme')->nullable()->default(NULL);
            $table->string('email')->nullable()->default(NULL);
            $table->string('phone')->nullable()->default(NULL);
            $table->string('lineID')->nullable()->default(NULL);
            $table->string('namaKetua')->nullable()->default(NULL);
            $table->string('nimKetua')->nullable()->default(NULL);
            $table->string('URL')->nullable()->default(NULL);
            $table->tinyInteger('issetLetterOfRecommendation')->default(0);
            $table->tinyInteger('issetInvoice')->default(0);
            $table->tinyInteger('issetURL')->default(0);
            $table->longText('urlLetterOfRecommendation')->nullable()->default(NULL);
            $table->longText('urlInvoice')->nullable()->default(NULL);
            $table->longText('nameURL')->nullable()->default(NULL);
            $table->string('voteScore')->nullable()->default(NULL);
            $table->string('teamScore')->nullable()->default(NULL);
            $table->string('rank')->nullable()->default(NULL);
            $table->timestamps();

            $table
                ->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shortmovie2019participants');
    }
}
