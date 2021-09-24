<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DossierMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dossiers', function (Blueprint $table) {
            $table->bigIncrements("id_dossier");
            $table->integer('id_client');
            $table->string('n_cahier_chantier');
            $table->string('lieux_travaux');
            $table->date('date_depot');
            $table->decimal('superfecie');
            $table->string('n_autorisation');
            $table->string('nature');
            $table->date('date_evancement');
            $table->string('pvs');
            $table->date('date_acheivement');
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
        //
    }
}
