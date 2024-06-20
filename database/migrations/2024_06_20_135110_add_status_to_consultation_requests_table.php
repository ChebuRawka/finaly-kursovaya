<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusToConsultationRequestsTable extends Migration
{
    public function up()
    {
        Schema::table('consultation_requests', function (Blueprint $table) {
            // Добавляем столбец user_id как внешний ключ
            $table->unsignedBigInteger('user_id');

            // Связываем с таблицей users по столбцу id
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            // Добавляем столбец status
            $table->string('status')->default('pending');
        });
    }

    public function down()
    {
        Schema::table('consultation_requests', function (Blueprint $table) {
            // Удаляем внешний ключ и столбцы
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
            $table->dropColumn('status');
        });
    }
}
