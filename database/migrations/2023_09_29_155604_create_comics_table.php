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
    Schema::create('comics', function (Blueprint $table) {
      $table->id();

      // recupero tutto ciò che mi serve dal file comics per le tabelle
      // assegno le tipologie di dati
      $table->string('title', 60)->nullable(false);
      $table->text('description')->nullable(false);
      $table->string('thumb')->nullable(false);
      $table->decimal('price', 8,2)->nullable(false);
      $table->string('series', 60)->nullable(false);
      $table->date('sale_date')->nullable(false);
      $table->string('type', 30)->nullable(false);
      $table->text('artists')->nullable();
      $table->text('writers')->nullable();

      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('comics');
  }
};
