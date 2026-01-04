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
        Schema::table('customers', function (Blueprint $table) {
            $table->date("date_of_birth")->nullable(true);
            $table->string("gender")->nullable(true);
            $table->string("img")->nullable(true);
            $table->string("national_id")->nullable(true);
            $table->string("status")->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('customers', function (Blueprint $table) {
            //
        });
    }
};
