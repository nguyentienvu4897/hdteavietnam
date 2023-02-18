<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnAddressToSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->string('address3', 225)->nullable();
            $table->string('address4', 225)->nullable();
            $table->string('address5', 225)->nullable();
            $table->string('phone3')->nullable();
            $table->string('phone4')->nullable();
            $table->string('phone5')->nullable();
            $table->string('map1')->nullable();
            $table->string('map2')->nullable();
            $table->string('map3')->nullable();
            $table->string('map4')->nullable();
            $table->string('map5')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->dropColumn('address3');
            $table->dropColumn('address4');
            $table->dropColumn('address5');
            $table->dropColumn('phone3');
            $table->dropColumn('phone4');
            $table->dropColumn('phone5');
            $table->dropColumn('map1');
            $table->dropColumn('map2');
            $table->dropColumn('map3');
            $table->dropColumn('map4');
            $table->dropColumn('map5');
        });
    }
}
