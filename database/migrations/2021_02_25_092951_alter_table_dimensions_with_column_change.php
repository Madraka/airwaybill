<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableDimensionsWithColumnChange extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        // Schema::table('dimensions', function (Blueprint $table) {
        //     $table->string( 'pieces' )->nullable()->change();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        // Schema::table('dimensions', function (Blueprint $table) {
        //     $table->string('pieces')->nullable(false)->change();
        // });
    }
}
