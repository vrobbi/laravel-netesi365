<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableAnagrafica extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anagrafica', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 64);
            $table->string('cognome', 64);
            $table->string('email')->unique();
            $table->string('codice_fiscale', 20)->unique();
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
        Schema::dropIfExists('table_anagrafica');
    }
}
