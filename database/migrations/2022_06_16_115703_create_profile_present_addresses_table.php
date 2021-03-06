<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create(config("bd-hrm-profile.table_prefix") . 'present_addresses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("profile_id");
            /**
             * Uses https://github.com/wovosoft/bd-geocode/
             */
            $table->unsignedBigInteger("division_id")->nullable();
            $table->unsignedBigInteger("district_id")->nullable();
            $table->unsignedBigInteger("upazila_id")->nullable();
            $table->unsignedBigInteger("union_id")->nullable();

            $table->string("village")->nullable();
            $table->string("post_office")->nullable();
            $table->string("road")->nullable();
            $table->string("word")->nullable();
            $table->string("phone")->nullable();
            $table->string("email")->nullable();

            //when above fields don't satisfy the needs
            $table->text("address")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists(config("bd-hrm-profile.table_prefix") . 'present_addresses');
    }
};
