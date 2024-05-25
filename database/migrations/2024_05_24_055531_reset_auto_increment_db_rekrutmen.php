<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class ResetAutoIncrementDbRekrutmen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('ALTER TABLE pelamars AUTO_INCREMENT = 1');

        DB::statement('ALTER TABLE alternatifs AUTO_INCREMENT = 1');

        DB::statement('ALTER TABLE normalisasis AUTO_INCREMENT = 1');

        DB::statement('ALTER TABLE hasils AUTO_INCREMENT = 1');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Tidak perlu melakukan apa pun dalam metode down()
    }
}
