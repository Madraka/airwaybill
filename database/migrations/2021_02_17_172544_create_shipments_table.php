<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShipmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('account_number');
            $table->bigInteger('awb_no');
            $table->string('customer_reference');
            $table->unsignedBigInteger('service_id');
            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
            $table->string('shipper_name')->comment('From');
            $table->string('shipper_contact_person');
            $table->string('shipper_address');
            $table->string('shipper_city');
            $table->string('shipper_state')->comment('State/Provience')->nullable();
            $table->string('shipper_country');
            $table->string('shipper_phone');
            $table->string('shipper_postcode')->comment('Post/Zipcode');
            $table->string('receiver_name')->comment('To');
            $table->string('receiver_contact_person');
            $table->string('receiver_address');
            $table->string('receiver_city');
            $table->string('receiver_state')->comment('State/Provience')->nullable();
            $table->string('receiver_country');
            $table->string('receiver_phone');
            $table->string('receiver_postcode')->comment('Post/Zipcode');
            $table->string('goods_description');
            $table->string('currency');
            $table->float('declared_value_for_custom',8,2);
            $table->smallInteger('pieces');
            $table->smallInteger('kilograms');
            $table->smallInteger('grams');
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
        Schema::dropIfExists('shipments');
    }
}
