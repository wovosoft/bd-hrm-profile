<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Wovosoft\BdHrmProfile\Enums\HumanColors;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create(config("bd-hrm-profile.table_prefix") .'physical_attributes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("profile_id");
            $table->unsignedDouble("height")->nullable();          //unit: cm
            $table->unsignedDouble("weight")->nullable();          //unit: kg
            $table->boolean("is_disabled")->default(false);
            $table->string("body_color")->nullable()->comment(HumanColors::class);
            $table->string("eye_color")->nullable()->comment(HumanColors::class);

            //https://vu.ca/en/journal/how-do-optometrists-measure-vision/#:~:text=Visual%20acuity%20is%20usually%20measured,lines%2C%20from%20biggest%20to%20smallest.
            $table->string("eye_vision")->nullable();   // 6/6 etc
            $table->string("blood_group")->nullable();   // 6/6 etc

            //some other fields can be added here

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
        Schema::dropIfExists(config("bd-hrm-profile.table_prefix") .'physical_attributes');
    }
};
