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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->longText('name'); // لتخزين JSON نستخدم longText بدلاً من string
            $table->string('slug');
            $table->longText('description'); // لتخزين JSON نستخدم longText بدلاً من text
            $table->string('image');
            $table->tinyInteger('is_showing')->default(0);
            $table->tinyInteger('is_popular')->default(0);
            $table->longText('meta_title'); // لتخزين JSON نستخدم longText بدلاً من text
            $table->longText('meta_description'); // لتخزين JSON نستخدم longText بدلاً من text
            $table->text('meta_keywords');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
