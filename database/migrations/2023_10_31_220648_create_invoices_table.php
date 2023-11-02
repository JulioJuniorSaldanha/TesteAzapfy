<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('key');
            $table->integer('number');
            $table->integer('sender_CNPJ');
            $table->string('sender_name');
            $table->integer('trasporter_CNPJ');
            $table->string('transporter_name');
            $table->string('dest_name');
            $table->bigInteger('dest_code');
            $table ->boolean('status');
            $table->integer('volumes');
            $table->double('value');
            $table->dateTime('dt_emis');
            $table->dateTime('dt_delivery')->nullable; 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
