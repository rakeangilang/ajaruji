<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

class CreateSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title');
            $table->text('description');
            $table->string('button')->default(null)->nullable();
        });

        $base_data = [
            [
                'title'=>'navbar',
                'description'=>'navbar',
                'button'=>null,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'title'=>'Platform Sekolah Online yang Menyenangkan',
                'description'=>'Belajar lebih mudah, kapanpun, di manapun, mudah dijangkau hingga ke pelosok negeri.',
                'button'=>'Mulai Belajar',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'title'=>'Manfaat yang Kamu Dapatkan',
                'description'=>'Dapatkan pengalaman belajar terbaik dengan fitur menarik di Ajar Uji',
                'button'=>null,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'title'=>'Demo Ajar Uji',
                'description'=>'Uji coba kemampuan kamu dalam menjawab soal Try Out di Ajar Uji',
                'button'=>'Mulai Uji Coba',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'title'=>'Apa itu Ajar Uji?',
                'description'=>'Ajar uji merupakan platform belajar online yang mempermudah siswa, guru, dan sekolah dalam melaksanakan kegiatan belajar dan mengajar. Ajar uji menyediakan kelas online, penjelasan yang disajikan dengan menarik, bank soal, mata pelajaran, dan kurikulum yang lengkap.',
                'button'=>null,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'title'=>'Penawaran Terbaik',
                'description'=>'Dapatkan penawaran menarik untuk akses tak terhingga belajar dengan Ajar Uji.',
                'button'=>null,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'title'=>'Mengapa Memilih Ajar Uji?',
                'description'=>'Ajar uji memiliki banyak keunggalan yang menjadi pilihan terbaik. Berikut kata mereka yang telah bergabung dan belajar dengan Ajar Uji:',
                'button'=>null,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'title'=>'footer',
                'description'=>'footer',
                'button'=>null,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]
        ];

        DB::table('sections')->insert($base_data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sections');
    }
}
