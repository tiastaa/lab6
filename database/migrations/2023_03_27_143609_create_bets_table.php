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
        Schema::create('bets', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->float('price' , 20 , 2);

//            $table->unsignedBigInteger('lot_id', );
            $table->bigInteger('lot_id', )
            ->unsigned()
            ->nullable(false);

            $table->timestamps();
            $table->foreign('lot_id')
                ->references ('id')
                ->on('lots');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bets');
    }
};
