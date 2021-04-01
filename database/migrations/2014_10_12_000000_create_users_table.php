<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('nis')->nullable();
            $table->string('nama');
            $table->enum('jns_kelamin', ['Pria', 'Wanita'])->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->text('alamat')->nullable();
            $table->string('asal_sekolah')->nullable();
            $table->string('kelas')->nullable();
            $table->string('jurusan')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('role', ['admin', 'user'])->default('user');
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
        Schema::dropIfExists('users');
    }
}
