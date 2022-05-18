<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnCommisionFinanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('commision_finance', function (Blueprint $table) {
            //
            $table->string('company')->nullable();
            $table->string('client')->nullable();
            $table->string('nomor_invoice')->nullable();
            $table->string('date_input')->nullable();
            $table->string('inv_img')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
