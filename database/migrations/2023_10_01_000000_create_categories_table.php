<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('slug')->nullable();
            $table->string('slug_title_url')->nullable();
            $table->string('page_title')->nullable();
            $table->text("body")->nullable();
            $table->integer('sort')->default(0);

            $table->string('h1_title')->nullable();
            $table->text('seo_meta_description')->nullable();
            $table->text('seo_schema_code')->nullable();
            $table->text('children_ids')->nullable();

            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
};
