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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
//            $table->unsignedBigInteger('massage_id');
            $table->string('name',225);
            $table->string('adress')->nullable();
            $table->string('phone', 30);
            $table->boolean('resident');
            $table->date('birthday');
            $table->enum('satus',['active','inactive']);
//            $table->foreign('massage_id')->references('id')->on('massages')
//                ->onDelete('CASCADE')
//                ->onUpdate('CASCADE');
            $table->string('photo')->default('users/default.png')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
