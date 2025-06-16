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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            // $table->string('author');

            // Cara ini jika namanya beda, karena adanya users_id, 
            // di ganti jadi author id bisa pake cara ini atau cara kedua

            // $table->unsignedBigInteger('author_id');
            // $table->foreign('author_id')->references('id')->on('users');

            $table->foreignId('author_id')->constrained(table: 'users', indexName: 'posts_author_id');
            $table->foreignId('category_id')->constrained(table: 'categories', indexName: 'posts_category_id');
            $table->string('date');
            $table->text('body');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
