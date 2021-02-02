<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submissions', function (Blueprint $table) {
            $table->id();
            $table->string('lat');
            $table->string('lon');
            $table->date('incident-date');
            $table->string('while-i-was');
            $table->string('relationship');
            $table->string('incident-type');
            $table->string('involving');
            $table->string('involving-2');
            $table->boolean('injured');
            $table->boolean('was-police-informed');
            $table->string('possible-cause');
            $table->string('contributed');
            $table->text('what-happened');
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
        Schema::dropIfExists('submissions');
    }
}
