<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_addresses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            //cascade 级联删除
            // 这里的 user_id 是 user 表的 id 字段的外键，并且做了级联删除，一旦删除了用户，所关联的用户文章也会删除.
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('province');
            $table->string('city');
            $table->string('district');
            $table->string('address');
            $table->unsignedInteger('zip');
            $table->string('contact_name');
            $table->string('contact_phone');
            $table->dateTime('last_used_at')->nullable();
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
        Schema::dropIfExists('user_addresses');
    }
}
