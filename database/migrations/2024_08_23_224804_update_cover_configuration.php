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
        Schema::table('configurations', function (Blueprint $table) {
            $table->dropColumn('is_cover_automatic');
            $table->boolean('is_cover_automatic')->default(true)->after('id');
            $table->integer('cover_count')->default(5)->after('is_cover_automatic');
            $table->json('cover_ids')->nullable()->after('cover_count');
            $table->dropColumn('cover_id');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('configurations', function (Blueprint $table) {
            $table->dropColumn('cover_ids');
            $table->dropColumn('cover_count');
            $table->string('cover_id')->nullable()->after('is_cover_automatic');
            $table->dropColumn('is_cover_automatic');
            $table->string('is_cover_automatic')->after('id');
        });

    }
};
