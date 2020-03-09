<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMailsQueue extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mails_queue', function (Blueprint $table) {
            $table->bigIncrements('id');
            // param, store as json data
            $table->text('param')
                ->nullable();
            $table->string('subject')
                ->nullable();
            $table->string('from');
            $table->string('to');
             // waiting, broker not set into queue
             // active, broker already set into queue
             // done, means already send
             // fail, means process cannot be send
            $table->enum('status', array('waiting', 'active', 'done' ,'fail'))
                ->default('waiting');
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
        Schema::dropIfExists('mails_queue');
    }
}
