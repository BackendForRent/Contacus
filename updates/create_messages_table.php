<?php namespace Goosy\Contacus\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateMessagesTable extends Migration
{
    public function up()
    {
        Schema::create('goosy_contacus_messages', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');

            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('telephone',25);
            $table->text('message');
            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('goosy_contacus_messages');
    }
}
