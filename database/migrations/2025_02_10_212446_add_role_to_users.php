<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table(table: User::TABLE, callback: function (Blueprint $table) {
            $table->string('role')->after(column: 'email')->default(value: 'user');
        });
    }

    public function down(): void
    {
        Schema::table(table: User::TABLE, callback: function (Blueprint $table) {
            $table->dropColumn(columns: 'role');
        });
    }
};
