<?php

use Illuminate\Database\Seeder;

class ApartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('apartmentms')->truncate();
        \Illuminate\Support\Facades\DB::table('apartmentms')->insert([
            [
                'name'=>'Chung cư Mỹ Đình',
                'address'=>'Mỹ Đình 1, Nam Từ Liêm',
                'price'=>1000,
                'description'=>'Chung cư giá rẻ, danh cho người thu nhập thấp',
                'detail'=>'chung cư giá rẻ',
                'images'=>'http://cafefcdn.com/thumb_w/650/2018/3/23/photo1521774301313-1521774301314494853817.jpg',
            ],
            [
                'name'=>'Chung cư Mỹ Đình II',
                'address'=>'Mỹ Đình 2, Nam Từ Liêm',
                'price'=>2000,
                'description'=>'Khu nhà cao cấp , day du tiên nghi',
                'detail'=>'Chung cư cao cấp, đáp ứng mọi nhu cầu',
                'images'=>'https://batdongsan24h.com.vn/images/Private/images/can-ho-chung-cu-quan-7.jpg',
            ],
            [
                'name'=>'Chung cư Hoàn Kiếm ',
                'address'=>'Hoàn kiếm, Hà Nội',
                'price'=>5000,
                'description'=>'Khu nhà cao cấp ,Trung tâm thành phố',
                'detail'=>'Chung cư cao cấp, đáp ứng mọi nhu cầu',
                'images'=>'https://images.vov.vn/w600/uploaded/g3zdcpr1cvuly8uzveukg/2017_09_28/chung_cu_bitp.jpg',
            ],
            [
                'name'=>'Chung cư Mễ Trì ',
                'address'=>'Mễ Trì, Hà Nội',
                'price'=>5000,
                'description'=>'Khu nhà cao cấp ',
                'detail'=>'Chung cư cao cấp, đáp ứng mọi nhu cầu',
                'images'=>'http://sohanews.sohacdn.com/thumb_w/660/2018/3/23/photo1521774599988-15217745999901604465211.jpg',
            ],[
                'name'=>'Chung cư Lê Văn Lương ',
                'address'=>'Hà Nội',
                'price'=>2000,
                'description'=>'Khu nhà cao cấp ,',
                'detail'=>'Chung cư cao cấp, đáp ứng mọi nhu cầu',
                'images'=>'http://media.doisongphapluat.com/thumb_x500x/529/2018/3/23/carina.jpg',
            ],[
                'name'=>'Chung cư Nguyễn Trãi',
                'address'=>'Nguyễn Trãi, Hà Nội',
                'price'=>5000,
                'description'=>'Khu nhà cao cấp ,Dân trí cao',
                'detail'=>'Chung cư cao cấp, đáp ứng mọi nhu cầu',
                'images'=>'http://thongtinchungcu.com.vn/wp-content/uploads/2016/12/phoi-canh-chung-cu-eurowindow-river-park-long-bien-1024x704.jpg',
            ],[
                'name'=>'Chung cư Thanh Xuân ',
                'address'=>'50 Thanh Xuân, Hà Nội',
                'price'=>5000,
                'description'=>'Chung cư dân trí cao.',
                'detail'=>'Chung cư khu vực dân trí cao, có tiện ích trường học, bệnh viện',
                'images'=>'http://baochinhphu.vn/Uploaded/nguyenthikimhue/2016_03_02/chung-cu-afoffice.jpg',
            ],[
                'name'=>'Chung Cư Linh đàm ',
                'address'=>'Linh Đàm, Hà Nội',
                'price'=>4000,
                'description'=>'Tổ hợp nhà ở đáp ưứng mọi nhu cầu người dân',
                'detail'=>'Chung cư cao cấp, đáp ứng mọi nhu cầu',
                'images'=>'http://nld.mediacdn.vn/2018/4/1/chung-cu-hqc-plazza-15225586162421694624222.jpg',
            ],[
                'name'=>'Chung Cư Bắc linh Đàm ',
                'address'=>'Linh Đàm, Hà Nội',
                'price'=>3000,
                'description'=>'Khu nhà cao cấp ,Trung tâm thành phố',
                'detail'=>'Chung cư cao cấp, đáp ứng mọi nhu cầu',
                'images'=>'https://cms.luatvietnam.vn/uploaded/Images/Original/2018/06/27/chung-cu_2706112039.jpg',
            ],[
                'name'=>'Chung cư ',
                'address'=>'Hoàn kiếm, Hà Nội',
                'price'=>5000,
                'description'=>'Khu nhà cao cấp ,Trung tâm thành phố',
                'detail'=>'Chung cư cao cấp, đáp ứng mọi nhu cầu',
                'images'=>'https://images.vov.vn/w600/uploaded/g3zdcpr1cvuly8uzveukg/2017_09_28/chung_cu_bitp.jpg',
            ],[
                'name'=>'Chung cư Hoàn Kiếm ',
                'address'=>'Hoàn kiếm, Hà Nội',
                'price'=>5000,
                'description'=>'Khu nhà cao cấp ,Trung tâm thành phố',
                'detail'=>'Chung cư cao cấp, đáp ứng mọi nhu cầu',
                'images'=>'https://images.vov.vn/w600/uploaded/g3zdcpr1cvuly8uzveukg/2017_09_28/chung_cu_bitp.jpg',
            ],[
                'name'=>'Chung cư Hoàn Kiếm ',
                'address'=>'Hoàn kiếm, Hà Nội',
                'price'=>5000,
                'description'=>'Khu nhà cao cấp ,Trung tâm thành phố',
                'detail'=>'Chung cư cao cấp, đáp ứng mọi nhu cầu',
                'images'=>'https://images.vov.vn/w600/uploaded/g3zdcpr1cvuly8uzveukg/2017_09_28/chung_cu_bitp.jpg',
            ],[
                'name'=>'Chung cư Hoàn Kiếm ',
                'address'=>'Hoàn kiếm, Hà Nội',
                'price'=>5000,
                'description'=>'Khu nhà cao cấp ,Trung tâm thành phố',
                'detail'=>'Chung cư cao cấp, đáp ứng mọi nhu cầu',
                'images'=>'https://images.vov.vn/w600/uploaded/g3zdcpr1cvuly8uzveukg/2017_09_28/chung_cu_bitp.jpg',
            ],[
                'name'=>'Chung cư Hoàn Kiếm ',
                'address'=>'Hoàn kiếm, Hà Nội',
                'price'=>5000,
                'description'=>'Khu nhà cao cấp ,Trung tâm thành phố',
                'detail'=>'Chung cư cao cấp, đáp ứng mọi nhu cầu',
                'images'=>'https://images.vov.vn/w600/uploaded/g3zdcpr1cvuly8uzveukg/2017_09_28/chung_cu_bitp.jpg',
            ],[
                'name'=>'Chung cư Hoàn Kiếm ',
                'address'=>'Hoàn kiếm, Hà Nội',
                'price'=>5000,
                'description'=>'Khu nhà cao cấp ,Trung tâm thành phố',
                'detail'=>'Chung cư cao cấp, đáp ứng mọi nhu cầu',
                'images'=>'https://images.vov.vn/w600/uploaded/g3zdcpr1cvuly8uzveukg/2017_09_28/chung_cu_bitp.jpg',
            ],[
                'name'=>'Chung cư Hoàn Kiếm ',
                'address'=>'Hoàn kiếm, Hà Nội',
                'price'=>5000,
                'description'=>'Khu nhà cao cấp ,Trung tâm thành phố',
                'detail'=>'Chung cư cao cấp, đáp ứng mọi nhu cầu',
                'images'=>'https://images.vov.vn/w600/uploaded/g3zdcpr1cvuly8uzveukg/2017_09_28/chung_cu_bitp.jpg',
            ],[
                'name'=>'Chung cư Hoàn Kiếm ',
                'address'=>'Hoàn kiếm, Hà Nội',
                'price'=>5000,
                'description'=>'Khu nhà cao cấp ,Trung tâm thành phố',
                'detail'=>'Chung cư cao cấp, đáp ứng mọi nhu cầu',
                'images'=>'https://images.vov.vn/w600/uploaded/g3zdcpr1cvuly8uzveukg/2017_09_28/chung_cu_bitp.jpg',
            ],[
                'name'=>'Chung cư Hoàn Kiếm ',
                'address'=>'Hoàn kiếm, Hà Nội',
                'price'=>5000,
                'description'=>'Khu nhà cao cấp ,Trung tâm thành phố',
                'detail'=>'Chung cư cao cấp, đáp ứng mọi nhu cầu',
                'images'=>'https://images.vov.vn/w600/uploaded/g3zdcpr1cvuly8uzveukg/2017_09_28/chung_cu_bitp.jpg',
            ],[
                'name'=>'Chung cư Hoàn Kiếm ',
                'address'=>'Hoàn kiếm, Hà Nội',
                'price'=>5000,
                'description'=>'Khu nhà cao cấp ,Trung tâm thành phố',
                'detail'=>'Chung cư cao cấp, đáp ứng mọi nhu cầu',
                'images'=>'https://images.vov.vn/w600/uploaded/g3zdcpr1cvuly8uzveukg/2017_09_28/chung_cu_bitp.jpg',
            ],[
                'name'=>'Chung cư Hoàn Kiếm ',
                'address'=>'Hoàn kiếm, Hà Nội',
                'price'=>5000,
                'description'=>'Khu nhà cao cấp ,Trung tâm thành phố',
                'detail'=>'Chung cư cao cấp, đáp ứng mọi nhu cầu',
                'images'=>'https://images.vov.vn/w600/uploaded/g3zdcpr1cvuly8uzveukg/2017_09_28/chung_cu_bitp.jpg',
            ],

        ]);
    }
}
