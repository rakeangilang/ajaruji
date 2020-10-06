<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

class SeedImagesData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('images', function (Blueprint $table) {
            //
        });

        $navbar_images = [
            [
                'item_id'=>1,
                'screen_size'=>1,
                'path'=>'assets/Logo Ajar Uji white-1.png',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'item_id'=>1,
                'screen_size'=>2,
                'path'=>'assets/Logo Ajar Uji white-1@2x.png',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]
        ];

        $section2_images = [
            [
                'item_id'=>2,
                'screen_size'=>1,
                'path'=>'assets/Home Illustration.png',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'item_id'=>2,
                'screen_size'=>2,
                'path'=>'assets/Home Illustration@2x.png',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
        ];
    
        $section3_images = [
            [
                'item_id'=>3,
                'screen_size'=>1,
                'path'=>'assets/bank soal.png',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'item_id'=>3,
                'screen_size'=>2,
                'path'=>'assets/bank soal@2x.png',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'item_id'=>4,
                'screen_size'=>1,
                'path'=>'assets/Group 5.png',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'item_id'=>4,
                'screen_size'=>2,
                'path'=>'assets/Group 5@2x.png',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'item_id'=>5,
                'screen_size'=>1,
                'path'=>'assets/Group 3.png',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'item_id'=>5,
                'screen_size'=>2,
                'path'=>'assets/Group 3@2x.png',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'item_id'=>6,
                'screen_size'=>1,
                'path'=>'assets/Group 2.png',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'item_id'=>6,
                'screen_size'=>2,
                'path'=>'assets/Group 2@2x.png',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'item_id'=>7,
                'screen_size'=>1,
                'path'=>'assets/book.png',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'item_id'=>7,
                'screen_size'=>2,
                'path'=>'assets/book@2x.png',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]
        ];
    
        $section5_images = [
            [
                'item_id'=>8,
                'screen_size'=>1,
                'path'=>'assets/study1.jpg',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'item_id'=>9,
                'screen_size'=>1,
                'path'=>'assets/study2.jpg',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'item_id'=>10,
                'screen_size'=>1,
                'path'=>'assets/study3.jpg',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'item_id'=>11,
                'screen_size'=>1,
                'path'=>'assets/study4.jpg',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'item_id'=>12,
                'screen_size'=>1,
                'path'=>'assets/study5.jpg',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]
        ];

        $section6_images = [
            [
                'item_id'=>13,
                'screen_size'=>1,
                'path'=>'assets/monthly.png',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'item_id'=>13,
                'screen_size'=>2,
                'path'=>'assets/monthly@2x.png',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'item_id'=>14,
                'screen_size'=>1,
                'path'=>'assets/yearly.png',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'item_id'=>14,
                'screen_size'=>2,
                'path'=>'assets/yearly@2x.png',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'item_id'=>15,
                'screen_size'=>1,
                'path'=>'assets/group.png',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'item_id'=>15,
                'screen_size'=>2,
                'path'=>'assets/group@2x.png',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]
        ];

        $section7_images = [
            [
                'item_id'=>16,
                'screen_size'=>1,
                'path'=>'assets/profilepic1.png',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'item_id'=>17,
                'screen_size'=>1,
                'path'=>'assets/profilepic2.png',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'item_id'=>18,
                'screen_size'=>1,
                'path'=>'assets/profilepic3.png',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'item_id'=>19,
                'screen_size'=>1,
                'path'=>'assets/profilepic4.png',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'item_id'=>20,
                'screen_size'=>1,
                'path'=>'assets/profilepic3.png',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'item_id'=>21,
                'screen_size'=>1,
                'path'=>'assets/profilepic4.png',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
        ];

        $footer_images = [
            [
                'item_id'=>22,
                'screen_size'=>1,
                'path'=>'assets/Logo Ajar Uji white-1.png',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'item_id'=>22,
                'screen_size'=>2,
                'path'=>'assets/Logo Ajar Uji white-1@2x.png',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'item_id'=>23,
                'screen_size'=>1,
                'path'=>'assets/mail.png',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'item_id'=>23,
                'screen_size'=>2,
                'path'=>'assets/mail@2x.png',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'item_id'=>24,
                'screen_size'=>1,
                'path'=>'assets/instagram.png',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'item_id'=>24,
                'screen_size'=>2,
                'path'=>'assets/instagram@2x.png',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'item_id'=>25,
                'screen_size'=>1,
                'path'=>'assets/whatsapp.png',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'item_id'=>25,
                'screen_size'=>2,
                'path'=>'assets/whatsapp-1@2x.png',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]
        ];

        DB::table('images')->insert($navbar_images);
        DB::table('images')->insert($section2_images);
        DB::table('images')->insert($section3_images);
        DB::table('images')->insert($section5_images);
        DB::table('images')->insert($section6_images);
        DB::table('images')->insert($section7_images);
        DB::table('images')->insert($footer_images);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('images', function (Blueprint $table) {
            //
        });
    }
}
