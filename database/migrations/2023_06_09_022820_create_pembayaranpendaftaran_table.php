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
        Schema::create('pembayaranpendaftaran', function (Blueprint $table) {
            $table->id();
            $table->string('nama_anak');
            $table->string('tanggal_lahir');
            $table->string('umur');
            $table->string('jenis_kelamin');
            $table->string('nama_orangtua');
            $table->string('alamat');
            $table->string('image');
            $table->string('status')->default('menunggu');
            $table->string('notif')->nullable();
            $table->longText('pemberitahuan')->nullable();
            $table->foreignId('user_id')->constrained('users');
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
        Schema::dropIfExists('pembayaranpendaftaran');
    }
};
