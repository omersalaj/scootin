<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('points', static function (Blueprint $table) {
            $table->id();
            $table->bigInteger('scooter_id')->unsigned();
            $table->foreign('scooter_id')->references('id')
                ->on('scooters')->onDelete('cascade');
            $table->enum('status', ['free', 'occupied'])->default('free');
            // Could use Point type but for simplicity preferred double
            $table->double('lat', 10, 8)->nullable();
            $table->double('lng', 11, 8)->nullable();
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
        Schema::dropIfExists('points');
    }
};
