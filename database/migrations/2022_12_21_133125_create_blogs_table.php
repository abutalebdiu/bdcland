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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->text('title');
            $table->text('title_bn');
            $table->text('slug')->nullable();
            $table->foreignId('blog_category_id');
            $table->string('image')->nullable();
            $table->longText('description')->nullable();
            $table->longText('description_ar')->nullable();
            $table->integer('count')->default(1);
            $table->enum('status',['Pending','Review','Publish','Daft','Delete'])->default('Pending');
            $table->softDeletes();
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
        Schema::dropIfExists('blogs');
    }
};
