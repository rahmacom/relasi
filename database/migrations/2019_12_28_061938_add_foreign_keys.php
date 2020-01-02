<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mhs',function(Blueprint $table) {
            $table->foreign('prodi_id','fk_mhs_prodi_0')->references('id')->on('prodi')->onUpdate('NO ACTION')->onDelete('NO ACTION');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mhs',function(Blueprint $table) {
            $table->dropForeign('fk_mhs_prodi_0');
        });
    }
}
