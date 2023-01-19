<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnBook extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        schema::table('books',function($table)
        {
            $table->string('entered_by');
        }
    );
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
