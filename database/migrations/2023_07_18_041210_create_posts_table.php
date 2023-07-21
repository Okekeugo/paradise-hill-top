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
            $table->string('slug', 200)->nullable();

            // main post content
            $table->text('pg1');
            $table->text('pg2');
            $table->text('pg3')->nullalbe();
            $table->text('pg4')->nullable();
            $table->text('pg5')->nullable();


            // media files related to post
            $table->string('default_img')->nullable();
            $table->string('img1')->nullable();
            $table->string('img2')->nullable();
            $table->string('img3')->nullable();

            $table->string('tags')->nullable();
            
            $table->string('author', 20)->default('editor');


            // foreign keys
            // $table->foreignIdFor(Comment::class)
            $table->timestamp('created_at')->default(now());
            $table->timestamp('updated_at')->default(now());

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
