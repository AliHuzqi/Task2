<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FileTags extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('file_tags', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('tag_id')->nullable();
            $table->foreign('tag_id', 'tag_id_fk_0000001')->references('id')->on('tags');
            $table->unsignedBigInteger('file_id')->nullable();
            $table->foreign('file_id', 'file_id_fk_0000001')->references('id')->on('files');
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
        Schema::dropIfExists('file_tags');

    }
}
