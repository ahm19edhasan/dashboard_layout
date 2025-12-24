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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('email_address');
            $table->string('fax_address');
            $table->string('phone_number');
            $table->string('facebook_address');
            $table->string('twitter_address');

            $table->enum('product_enable', [0, 1])->default(1);

            $table->string('header_image');
            $table->string('footer_image');

            $table->string('footer_description');
            $table->json('certifications');
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
        Schema::dropIfExists('settings');
    }
};
