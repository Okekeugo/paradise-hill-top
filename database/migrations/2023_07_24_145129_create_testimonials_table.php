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
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('client_img')->nullable();
            $table->string('client_fname');
            $table->string('client_lname');
            $table->string('client_message');
            
            // the client role in the life of the child or the client's occupation
            $table->string('client_role');

            $table->timestamp('created_at')->default(now());
            $table->timestamp('updated_at')->default(now());

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};
