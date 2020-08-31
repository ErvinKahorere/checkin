<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFingerprintsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fingerprints', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('business_id')->unsigned();
            $table->bigInteger('fingerprint_id')->unsigned();
         

            $table->string('fingerprint');

            $table->foreign('business_id')->references('id')->on('businesses');
            $table->foreign('fingerprint_id')->references('id')->on('fingerprints');
            
            
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
        Schema::dropIfExists('fingerprints');
    }
}
