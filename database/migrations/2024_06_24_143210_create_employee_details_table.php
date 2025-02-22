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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->uuid();
            $table->string('employee_id')->nullable();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('department_id');
            $table->foreignId('designation_id');
            $table->string('passport_no')->nullable();
            $table->string('passport_expiry_date')->nullable();
            $table->string('company')->nullable();
            $table->string('passport_tel')->nullable();
            $table->string('nationality')->nullable();
            $table->string('religion')->nullable();  
            $table->string('about')->nullable();  
            $table->string('ethnicity')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('spouse_occupation')->nullable();
            $table->string('no_of_children')->nullable();
            $table->json('emergency_contacts')->nullable();
            $table->date('date_joined')->nullable();
            $table->date('dob')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_details');
    }
};
