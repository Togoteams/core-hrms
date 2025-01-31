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
        Schema::create('tasks', function (Blueprint $table) {
            $table->uuid();
            $table->id();
            $table->string('task_name');
            $table->integer('assignor_user_id');
            $table->integer('assignee_user_id');
            $table->date('task_date')->nullable();
            $table->date('due_date')->nullable();
            $table->string('link_1')->nullable();
            $table->longtext('descriptions')->nullable();
            $table->string('priority')->nullable();
            $table->string('link_2')->nullable();
            $table->string('status')->default('no-started')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
