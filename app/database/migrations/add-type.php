<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add_Type extends Migration {
    /**
 * Make changes to the database.
 *
 * @return void
     */
    public function up() {
        Schema::table('user', function($table)
            {
                $table->string('type');
            });
    }

    /**
 * Revert the changes to the database.
 *
 * @return void
     */
    public function down() {
        Schema::table('user', function($table)
            {
                $table->drop_column('type');
            });
    }

}