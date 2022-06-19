<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Wovosoft\BdHrmProfile\Enums\Genders;
use Wovosoft\BdHrmProfile\Enums\MaritalStatuses;
use Wovosoft\BdHrmProfile\Enums\Religions;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create(config("bd-hrm-profile.table_prefix") . 'profiles', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("bn_name")->nullable();
            $table->date("dob")->nullable();

            //current profile photo. A profile might have multiple photos. This column denotes current photo.
            $table->unsignedBigInteger("profile_photo_id")->nullable();

            $table->string("fathers_name")->nullable();
            $table->string("bn_fathers_name")->nullable();

            $table->string("mothers_name")->nullable();
            $table->string("bn_mothers_name")->nullable();

            $table->string("spouse_name")->nullable();
            $table->string("bn_spouse_name")->nullable();

            $table->string("gender")->nullable()->comment(Genders::class);
            $table->string("religion")->nullable()->comment(Religions::class);
            $table->string("marital_status")->nullable()->comment(MaritalStatuses::class);

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
        Schema::dropIfExists(config("bd-hrm-profile.table_prefix") . 'profiles');
    }
};
