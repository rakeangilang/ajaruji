<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNavbarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('navbar', function (Blueprint $table) {
            $table->id();
            $table->string('link1');
            $table->string('link2');
            $table->string('link3');
            $table->string('link4');
            $table->string('link5');
            $table->string('button');
        });

        $navbar_data = [
            'link1'=>'Beranda',
            'link2'=>'Uji Coba',
            'link3'=>'Fitur',
            'link4'=>'Berlangganan',
            'link5'=>'Tentang Kami',
            'button'=>"Masuk"
        ];

        DB::table('navbar')->insert($navbar_data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('navbar');
    }
}
