<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tbl_book', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('co_id')->unsigned();
            $table->integer('publisher_id')->unsigned();
            $table->string('book_uniq_id')->unique();
            $table->string('book_name');
            $table->string('cover_photo')->nullable();
            $table->integer('price');
            $table->timestamp('created_timetick')->default(DB::raw('CURRENT_TIMESTAMP'));
            // Add any other columns as needed

            // foreign
            $table->foreign('co_id')->references('id')->on('content_owners')->onDelete('cascade');
            $table->foreign('publisher_id')->references('id')->on('publishers')->onDelete('cascade');



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_book');
    }
};
