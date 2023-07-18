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
            $table->string('title', 200);
            $table->string('slug', 200);

            // main post content
            $table->text('pg1');
            $table->text('pg2');
            $table->text('pg3')->nullalbe();
            $table->text('pg4')->nullable();
            $table->text('pg5')->nullable();


            // media files related to post
            $table->string('display_img');
            $table->string('img1');
            $table->string('img2');

            $table->string('tags');
            
            $table->string('author', 20)->default('admin');


            // foreign keys
            // $table->foreignIdFor(Comment::class)
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
