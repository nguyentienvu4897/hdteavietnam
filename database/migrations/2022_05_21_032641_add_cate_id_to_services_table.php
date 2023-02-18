<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCateIdToServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('services', function (Blueprint $table) {
            $table->integer('category_id')->nullable();
            $table->string('category_slug')->nullable();
            $table->integer('type_id')->nullable();
            $table->string('type_slug')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('services', function (Blueprint $table) {
            $table->dropColumn('category_id');
            $table->dropColumn('category_slug');
            $table->dropColumn('type_id');
            $table->dropColumn('type_slug');
        });
    }
}
