<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCMSServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c_m_s_services', function (Blueprint $table) {
            $table->id();
            $table->integer('order');
<<<<<<< HEAD
            $table->string('title')->nullable();
            $table->string('image');
            $table->text('description')->nullable();
=======
            $table->string('icon')->nullable();
            $table->string('title');
            $table->string('slug');
            $table->string('image')->nullable();
            $table->text('description');
>>>>>>> 822ee076bca64d8e30d558f829e399fa65984dc6
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
        Schema::dropIfExists('c_m_s_services');
    }
}
