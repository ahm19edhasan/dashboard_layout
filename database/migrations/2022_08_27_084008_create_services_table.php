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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('service_name');
            $table->text('short_description');
            $table->string('icon');
            $table->string('button_text');
            $table->enum('button_active', [0, 1])->default(1);
            $table->string('title');
            $table->text('description');
            $table->string('header_image');
            $table->string('s_button_text');
            $table->enum('s_button_active', [0, 1])->default(1);
            $table->text('long_description');
            $table->string('image');
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
        Schema::dropIfExists('services');
    }
};
