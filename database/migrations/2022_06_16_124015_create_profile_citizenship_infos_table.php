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
        Schema::create(config("bd-hrm-profile.table_prefix") .'citizenship_infos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("profile_id");
            $table->string("nid")->nullable();
            $table->string("birth_certificate")->nullable();
            $table->string("tin")->nullable();
            $table->string("bin")->nullable();
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
        Schema::dropIfExists(config("bd-hrm-profile.table_prefix") .'citizenship_infos');
    }
};
