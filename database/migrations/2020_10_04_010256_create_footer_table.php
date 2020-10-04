<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFooterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footer', function (Blueprint $table) {
            $table->id();
            $table->string('copyright');
            $table->string('link1');
            $table->string('link2');
            $table->string('link3');
            $table->text('link1_text');
            $table->string('link2_sublink1');
            $table->string('link2_sublink2');
        });

        $footer_data = [
            'copyright'=>'Copyright Ajar Uji - All Rights Reserved',
            'link1'=>'Address',
            'link2'=>'About Us',
            'link3'=>'Contact',
            'link1_text'=>'Jl. Warung Buncit Raya No.40D, RT.1/RW.2, Duren Tiga, Kec. Pancoran, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12760',
            'link2_sublink1'=>'Home',
            'link2_sublink2'=>'Privacy Policy'
        ];

        DB::table('footer')->insert($footer_data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('footer');
    }
}
