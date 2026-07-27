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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // 名前
            $table->string('email'); // メールアドレス
            $table->string('subject'); // 件名
            $table->text('body'); // 本文
            $table->string('status')->default('new'); // ステータス（new: 新規, in_progress: 対応中, resolved: 解決済み）
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
