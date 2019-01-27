<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
        {
            Schema::create('news', function (Blueprint $table) {
                $table->increments('id');
                $table->char('user_id', 225);
                $table->char('type', 10);
                $table->char('subject', 25);
                $table->longText('content');
                $table->timestamps();
            });
        }

        public function down()
        {
            Schema::dropIfExists('news');
        }
}
