<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * 'text',
    'link',
    'text_link',
    'slider_image',
     */
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_p_our_partners', function (Blueprint $table) {
            $table->id();
            $table->string('text');
            $table->string('link_action');
            $table->string('link_text');
            $table->enum('link_active', [0, 1])->default(1);
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
        Schema::dropIfExists('m_p_our_partners');
    }
};
