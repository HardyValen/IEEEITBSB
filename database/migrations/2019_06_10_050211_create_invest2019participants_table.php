<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvest2019participantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invest2019participants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('teamName')->nullable()->default(NULL);
            $table->string('subtheme')->nullable()->default(NULL);
            $table->string('gelombang')->nullable()->default(NULL);
            $table->string('email')->nullable()->default(NULL);
            $table->string('phone')->nullable()->default(NULL);
            $table->string('lineID')->nullable()->default(NULL);
            $table->string('namaKetua')->nullable()->default(NULL);
            $table->string('namaAnggota1')->nullable()->default(NULL);
            $table->string('namaAnggota2')->nullable()->default(NULL);
            $table->string('nimKetua')->nullable()->default(NULL);
            $table->string('nimAnggota1')->nullable()->default(NULL);
            $table->string('nimAnggota2')->nullable()->default(NULL);
            $table->tinyInteger('issetFotoKetua')->default(0);
            $table->tinyInteger('issetFotoAnggota1')->default(0);
            $table->tinyInteger('issetFotoAnggota2')->default(0);
            $table->tinyInteger('issetKTMKetua')->default(0);
            $table->tinyInteger('issetKTMAnggota1')->default(0);
            $table->tinyInteger('issetKTMAnggota2')->default(0);
            $table->tinyInteger('issetEssay')->default(0);
            $table->tinyInteger('issetInvoice')->default(0);
            $table->longText('urlFotoKetua')->nullable()->default(NULL);
            $table->longText('urlFotoAnggota1')->nullable()->default(NULL);
            $table->longText('urlFotoAnggota2')->nullable()->default(NULL);
            $table->longText('urlKTMKetua')->nullable()->default(NULL);
            $table->longText('urlKTMAnggota1')->nullable()->default(NULL);
            $table->longText('urlKTMAnggota2')->nullable()->default(NULL);
            $table->longText('urlEssay')->nullable()->default(NULL);
            $table->longText('urlInvoice')->nullable()->default(NULL);
            $table->longText('preliminaryScore')->nullable()->default(NULL);
            $table->tinyInteger('isFinalist')->default(0);
            $table->string('finalScore')->nullable()->default(NULL);
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
        Schema::dropIfExists('invest2019participants');
    }
}
