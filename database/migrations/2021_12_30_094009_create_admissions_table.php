<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admissions', function (Blueprint $table) {
            $table->id();
            $table->string('name',25);
             $table->string('mobile',15);
              $table->string('email',50)->nullable();
               $table->string('score',10)->nullable();
                $table->string('course',25)->nullable();
                 $table->string('state',25)->nullable();
                 $table->string('subject',200)->nullable();
                 $table->string('message')->nullable();
                  $table->boolean('status')->default(1);
                   $table->boolean('is_del')->default(0);
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
        Schema::dropIfExists('admissions');
    }
}
