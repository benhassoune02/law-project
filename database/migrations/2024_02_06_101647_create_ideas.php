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
        Schema::create('ideas', function (Blueprint $table) {
            $table->id();
            $table->string('title');  // Title of the idea
            $table->text('description')->nullable();  // Description of the idea
            $table->unsignedBigInteger('utilisateur_id');
            $table->timestamps();
        });

        Schema::table('ideas', function (Blueprint $table) {
            $table->foreign('utilisateur_id')->references('id')->on('utilisateur')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ideas');
    }
};
