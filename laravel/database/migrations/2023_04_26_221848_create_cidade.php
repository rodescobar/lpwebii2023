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
        Schema::create('cidade', function (Blueprint $table) {
            $table->id();
            $table->string('nome',60);
            $table->string('cep', 10);
            $table->timestamps();
        });

        DB::table('cidade')->insert(
            [
                'nome'          => 'Bauru',
                'cep'           => '17000000',
                'created_at'    => now(),
                'updated_at'    => now()
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cidade');
    }
};
