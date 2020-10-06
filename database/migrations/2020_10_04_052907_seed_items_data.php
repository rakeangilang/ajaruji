<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

class SeedItemsData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('items', function (Blueprint $table) {
            //
        });

        $navbar_data = [ //1
            'section_id'=>1,
            'item_number'=>1,
            'title'=>null,
            'description'=>null,
            'additional_info'=>null,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ];

        $section2_data = [ //2
            'section_id'=>2,
            'item_number'=>1,
            'title'=>null,
            'description'=>null,
            'additional_info'=>null,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ];
    
        $section3_data = [
            [   // 3-7
                'section_id'=>3,
                'item_number'=>1,
                'title'=>'20.000 Lebih Soal Tersedia',
                'description'=>'Ajar uji memiliki bank soal lengkap, dengan 20.000 lebih soal tersedia.',
                'additional_info'=>null,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'section_id'=>3,
                'item_number'=>2,
                'title'=>'Penjelasan yang Menarik',
                'description'=>'Materi disakin dengan cara yang menarik, belajar jadi menyenangkan',
                'additional_info'=>null,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'section_id'=>3,
                'item_number'=>3,
                'title'=>'Rekam Perkembangan',
                'description'=>'Perkembangan nilai dapat dengan mudah dilihat atau dipantau',
                'additional_info'=>null,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'section_id'=>3,
                'item_number'=>4,
                'title'=>'Kemudahan Aset',
                'description'=>'Belajar di manapun dan kapanpun dengan kemudahan akses Ajar uji',
                'additional_info'=>null,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'section_id'=>3,
                'item_number'=>5,
                'title'=>'Mata Pelajaran Lengkap',
                'description'=>'Ajar uji menyediakan mata pelajaran dan kurikulum yang lengkap',
                'additional_info'=>null,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]
        ];
    
        $section5_data = [
            [   // 8-12
                'section_id'=>5,
                'item_number'=>1,
                'title'=>null,
                'description'=>null,
                'additional_info'=>null,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'section_id'=>5,
                'item_number'=>2,
                'title'=>null,
                'description'=>null,
                'additional_info'=>null,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'section_id'=>5,
                'item_number'=>3,
                'title'=>null,
                'description'=>null,
                'additional_info'=>null,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'section_id'=>5,
                'item_number'=>4,
                'title'=>null,
                'description'=>null,
                'additional_info'=>null,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'section_id'=>5,
                'item_number'=>5,
                'title'=>null,
                'description'=>null,
                'additional_info'=>null,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]
        ];

        $section6_data = [
            [   // 13-15
                'section_id'=>6,
                'item_number'=>1,
                'title'=>'Rp39.000/Bulan',
                'description'=>'Akses tak terhingga dengan berlangganan bulanan di Ajar Uji.',
                'additional_info'=>'Bulanan',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'section_id'=>6,
                'item_number'=>2,
                'title'=>'Rp29.000/Bulan',
                'description'=>'Penawaran terbaik dengan berlangganan selama setahun.',
                'additional_info'=>'Tahunan',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'section_id'=>6,
                'item_number'=>3,
                'title'=>'Rp550.000/Bulan',
                'description'=>'Belajar bersama Ajar Uji bersama teman lebih menarik.',
                'additional_info'=>'Grup',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]
        ];

        $section7_data = [
            [   // 16-21
                'section_id'=>7,
                'item_number'=>1,
                'title'=>'Ria Kamila',
                'description'=>'Ajaruji mempermudah saya dalammemahami mata pelajaran yang sebelumnya tidak saya mengeri. Kini nilai saya menjadi lebih baik...',
                'additional_info'=>'Siswi SMP Jakarta',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'section_id'=>7,
                'item_number'=>2,
                'title'=>'Samuel',
                'description'=>'Cara penyampaian materi yang menarik, tidak membuat bosan, dan saya sangat senang belajar dengan Ajaruji.',
                'additional_info'=>'Siswa SMP Yogyakarta',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'section_id'=>7,
                'item_number'=>3,
                'title'=>'Ratnasari',
                'description'=>'Tidak keluar keluar uang untuk beli buku les. Semua materi sudah tercantum online, mudahnya belajar di Ajaruji.',
                'additional_info'=>'Siswi SMA Surabaya',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'section_id'=>7,
                'item_number'=>4,
                'title'=>'Antoni',
                'description'=>'Pengajarnya asik dan menyenangkan, belajar di Ajaruji rasanya seperti sedang bermain.',
                'additional_info'=>'Siswa SD Bekasi',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'section_id'=>7,
                'item_number'=>5,
                'title'=>'Syifa',
                'description'=>'Ujian sekolahku sangat terbantu!',
                'additional_info'=>'Siswi SD Magelang',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'section_id'=>7,
                'item_number'=>6,
                'title'=>'Jodhi',
                'description'=>'Murah, menarik, dan bermanfaat.',
                'additional_info'=>'Siswa SMA Tangerang',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]
        ];

        $footer_data = [
            [   // 22-25
                'section_id'=>8,
                'item_number'=>1,
                'title'=>null,
                'description'=>null,
                'additional_info'=>null,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [   
                'section_id'=>8,
                'item_number'=>2,
                'title'=>null,
                'description'=>'info@ajaruji.com',
                'additional_info'=>null,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [   
                'section_id'=>8,
                'item_number'=>3,
                'title'=>null,
                'description'=>'ajaruji',
                'additional_info'=>null,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [   
                'section_id'=>8,
                'item_number'=>4,
                'title'=>null,
                'description'=>'0812-1314-1516',
                'additional_info'=>null,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
        ];

        DB::table('items')->insert($navbar_data);
        DB::table('items')->insert($section2_data);
        DB::table('items')->insert($section3_data);
        DB::table('items')->insert($section5_data);
        DB::table('items')->insert($section6_data);
        DB::table('items')->insert($section7_data);
        DB::table('items')->insert($footer_data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('items', function (Blueprint $table) {
            //
        });
    }
}
