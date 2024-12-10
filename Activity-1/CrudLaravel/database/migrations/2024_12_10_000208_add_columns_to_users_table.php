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
        Schema::table('users', function (Blueprint $table) {
            $table->string('lastnames')->nullable();
            $table->enum('gender', ['male', 'female', 'other'] );
            $table->string('address');
            $table->string('phone');
            $table->foreignId('country_id')->constrained('country');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('lastnames');
            $table->dropColumn('gender');
            $table->dropColumn('address');
            $table->dropColumn('phone');
            $table->dropForeign(['country_id'])->ondelete('cascade');
        });
    }
};
