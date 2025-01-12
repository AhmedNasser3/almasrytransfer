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
        Schema::create('wallets', function (Blueprint $table) {
            $table->id();
            $table->string('category_id');


            $table->string('section_1_name');
            $table->decimal('section_1_rate', 10, 2);
            $table->string('section_1_currency');

            $table->string('section_2_name');
            $table->decimal('section_2_rate', 10, 2);
            $table->string('section_2_currency');

            $table->string('section_3_name');
            $table->decimal('section_3_rate', 10, 2);
            $table->string('section_3_currency');

            $table->string('section_4_name');
            $table->decimal('section_4_rate', 10, 2);
            $table->string('section_4_currency');

            $table->string('section_5_name');
            $table->decimal('section_5_rate', 10, 2);
            $table->string('section_5_currency');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wallets');
    }
};