<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRisksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('risks', function (Blueprint $table) {
            $table->increments('id'); // ID_Risk sebagai Primary Key
            $table->string('title'); // Judul risiko
            $table->string('description'); // Deskripsi risiko
            $table->integer('severity'); // Tingkat keparahan
            $table->integer('occurrence'); // Frekuensi terjadi
            $table->integer('detection'); // Tingkat deteksi
            $table->string('status')->default('Risk!'); // Status risiko
            $table->integer('risk_priority_number'); // Risk Priority Number
            $table->timestamp('time_added')->default(now()); // Waktu ditambahkan
            $table->timestamps(); // created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('risks');
    }
}
