<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('nim');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->tinyInteger('id_lomba');
            $table->string('afiliasi');
            $table->string('nama_anggota1')->nullable();
            $table->string('nim_anggota1')->nullable();
            $table->string('nama_anggota2')->nullable();
            $table->string('nim_anggota2')->nullable();
            $table->tinyInteger('is_verified')->default('0');
            $table->tinyInteger('is_admin')->default('0');
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
        Schema::dropIfExists('users');
    }
}
