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
        Schema::create('mailbox_user_folder', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("user_id")->unsigned();
            $table->integer("mailbox_id")->unsigned();
            $table->integer("folder_id")->unsigned();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('mailbox_id')->references('id')->on('mailbox')->onDelete('cascade');
            $table->foreign('folder_id')->references('id')->on('mailbox_folder');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mailbox_user_folders');
    }
};
