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
        Schema::create('main_contents', function (Blueprint $table) {
            $table->id();
            $table->longText('services_title_ar');
            $table->longText('services_title_en');



            $table->string('header_logo_ar');
            $table->integer('header_logo_height_ar')->default(70);
            $table->integer('header_logo_width_ar')->default(130);

            $table->string('header_logo_en');
            $table->integer('header_logo_height_en')->default(70);
            $table->integer('header_logo_width_en')->default(130);



            $table->string('footer_logo_ar');
            $table->integer('footer_logo_height_ar')->default(180);
            $table->integer('footer_logo_width_ar')->default(180);

            $table->string('footer_logo_en');
            $table->integer('footer_logo_height_en')->default(180);
            $table->integer('footer_logo_width_en')->default(180);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('main_contents');
    }
};
