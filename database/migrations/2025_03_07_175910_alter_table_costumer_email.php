<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // add email column to costumers table
        Schema::table('costumers', function (Blueprint $table) {
            $table->string('email', 100)->unique();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // drop email column from costumers table
        Schema::table('costumers', function (Blueprint $table) {
            $table->dropColumn('email');
        });
    }
};
