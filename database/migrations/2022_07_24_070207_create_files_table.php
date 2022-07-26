<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilesTable extends Migration
{
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('folder_id');
            $table->foreign('folder_id')->on('folders')->references('id')->cascadeOnDelete();
            $table->string('name');
            $table->string('extension');
            $table->string('file_link');
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('files');
    }
}
