<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewColumnToCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('customers', function (Blueprint $table) {
            $table->string('state', 100);
            $table->string('email', 100);
            $table->string('city', 100);
            $table->string('zip_code', 100);
            $table->boolean('etat_payment');
            $table->string('type_payment');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('customers', function (Blueprint $table) {
            $table->dropColumn(['state', 'city', 'zip_code', 'etat_payment', 'type_payment', 'email']);
        });
    }
}
