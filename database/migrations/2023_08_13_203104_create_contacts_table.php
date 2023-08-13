<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->comment('ユーザーID');
            $table->string('title')->comment('タイトル');
            $table->string('name')->comment('名前');
            $table->string('email')->comment('メールアドレス');
            $table->text('message')->comment('メッセージ');
            $table->string('memo')->nullable()->comment('メモ');
            $table->boolean('is_status')->comment('対応状況');
            $table->boolean('is_contact_speed')->comment('連絡速度');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
};
