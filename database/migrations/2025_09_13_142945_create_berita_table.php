<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('berita', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->date('tanggal');
            $table->string('sumber');
            $table->string('gambar_url')->nullable();
            $table->text('deskripsi');
            $table->timestamps(); // created_at & updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('berita');
    }
};
