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
        Schema::create('web_settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_name')->nullable();
            $table->string('site_name_bn')->nullable();
            $table->string('web_url')->nullable();
            $table->longText('description')->nullable();
            $table->longText('description_ar')->nullable();

            $table->string('logo')->nullable();
            $table->string('mobile_logo')->nullable();
            $table->string('favicon')->nullable();
            $table->string('footer_logo')->nullable();

            $table->text('meta_title')->nullable();
            $table->text('meta_title_bn')->nullable();
            $table->longText('meta_description')->nullable();
            $table->longText('meta_description_ar')->nullable();
            $table->longText('meta_keyword')->nullable();
            $table->longText('meta_keyword_ar')->nullable();

            $table->string('copyright')->nullable();
            $table->string('copyright_ar')->nullable();
            $table->string('email')->nullable();
            $table->string('altemail')->nullable();
            $table->string('phone')->nullable();
            $table->string('altphone')->nullable();
            $table->string('location')->nullable();

            $table->text('address')->nullable();
            $table->text('address_ar')->nullable();
            $table->text('developed_by')->nullable();
            $table->text('developed_by_ar')->nullable();

            $table->string('status')->nullable();
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
        Schema::dropIfExists('web_settings');
    }
};
