<?php

use App\Category;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_categories', function (Blueprint $table) {
            $table->id();
            $table->string('title', 45);
            $table->string('description', 100);
            $table->enum('status', ['Visible', 'InVisible'])->default('Visible');

            // $table->unsignedBigInteger('category_id');
            // $table->foreignId('category_id');
            // $table->foreignIdFor(Category::class);

            // $table->foreignUuid('category_id');

            $table->foreignId('category_id');
            $table->foreign('category_id')->on('categories')->references('id');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_categories');
    }
}
