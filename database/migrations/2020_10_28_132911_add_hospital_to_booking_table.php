<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddHospitalToBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hospitals', function (Blueprint $table) {
            $table->foreignId('booking_id')->constrained();
        });
        Schema::table('patients', function (Blueprint $table) {
            $table->foreignId('hospital_id')->constrained();
            $table->foreignId('doctor_id')->nullable()->constrained();
            
        });
        Schema::table('doctors', function (Blueprint $table) {
            $table->foreignId('hospital_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hospitals', function (Blueprint $table) {
            $table->dropColumn('booking_id');
        });

        Schema::table('patients', function (Blueprint $table) {
            $table->dropColumn(['hospital_id' , 'doctor_id']);
        });

        Schema::table('doctors', function (Blueprint $table) {
            $table->dropColumn('hospital_id');
        });
    }
}
