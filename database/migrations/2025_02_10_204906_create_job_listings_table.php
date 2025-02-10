<?php

use App\Models\JobListings;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create(table: JobListings::TABLE, callback: function (Blueprint $table) {
            $table->id();
            $table->foreignId(column: 'company_id');
            $table->string(column: 'original_url');
            $table->string(column: 'apply_url');
            $table->tinyInteger(column: 'status');
            $table->text(column: 'description')->nullable();
            $table->string(column: 'role')->nullable();
            $table->string(column: 'type')->nullable();
            $table->string(column: 'location')->nullable();
            $table->date(column: 'published_at')->nullable();
            $table->date(column: 'ends_at')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists(table: JobListings::TABLE);
    }
};
