<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */ 
    public function up()
    {
        Schema::create('proposals', function (Blueprint $table) {
            $table->id();
            $table->integer('package_authen');
            $table->string('package_prepared');
            $table->longText('package_description');
            $table->text('package_jurisdiction');
            $table->text('package_full_details');
            $table->longText('package_remark');
            $table->string('package_name', 50);
            $table->date('package_date');
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
        Schema::dropIfExists('proposals');
    }
};
