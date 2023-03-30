<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('demandetransports', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("condTransp");
            $table->string("nom");
            $table->string("prenom");
            $table->string("email");
            $table->date("date_Dep");
            $table->string("adresse_Dep");
            $table->string("adresse_Arriv");
            $table->string("estUrgent")->default(false);
            $table->string("estFacture")->default(true);
            $table->string("idChauffeur");

    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demandetransports');
    }
};
