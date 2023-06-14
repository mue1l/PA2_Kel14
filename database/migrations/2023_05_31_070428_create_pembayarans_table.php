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
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id();
            $table->string('nama_bank')->nullable();
            $table->string('no_rekening')->nullable();
            $table->string('avatar')->nullable();
            $table->date('batas_pembayaran')->nullable();
            $table->string('uang_pendaftaran');
            $table->string('avatar_bank')->nullable();
            $table->string('status')->default('menunggu');
            $table->string('status_pembayaran')->default('tutup');
            $table->string('notif')->nullable();
            $table->longText('pemberitahuan')->nullable();
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
        Schema::dropIfExists('pembayaran');
    }
};
