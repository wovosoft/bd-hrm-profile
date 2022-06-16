<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Wovosoft\BdHrmProfile\Enums\Relations;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create(config("bd-hrm-profile.table_prefix") .'family_members', function (Blueprint $table) {
            $table->id();

            // x is related to y (wrt x).
            $table->unsignedBigInteger("profile_id");   // let x
            $table->unsignedBigInteger("related_to");   // let y
            $table->string("relation")->comment(Relations::class);
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
        Schema::dropIfExists(config("bd-hrm-profile.table_prefix") .'family_members');
    }
};
