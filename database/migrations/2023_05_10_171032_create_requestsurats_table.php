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
        Schema::create('requestsurat', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('alamat');
            $table->longText('deskripsi');
            $table->string('file_path')->default('');
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
        Schema::dropIfExists('requestsurat');
    }
};
