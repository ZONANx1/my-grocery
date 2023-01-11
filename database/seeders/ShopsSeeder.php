<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Shop;

class ShopsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		Shop::create([
        	'shop_name'		    	=>'SemestaMart Bangi (Pasar Mini Bangi Enterprise)',
        	'tell_no'		        =>'019-253 0284',
        	'shop_img'		    	=>'1.png',
			'address'	            =>'D.E, No 43-G, Jalan 4/11a, Seksyen 4 Bangi',
			'user_id'               =>'1',
			'city'	            =>'Bangi',
			'state'	            =>'Selangor',
			'postcode'	            =>'43650'
        ]);
        Shop::create([
        	'shop_name'	     		=>'Happy Mart',
        	'tell_no'		        =>'016-476 1852',
        	'shop_img'		    	=>'2.png',
			'address'	            =>'G-58, Jalan 8/35, Sri Bangi',
			'user_id'               =>'2',
			'city'	            =>'Bangi',
			'state'	            =>'Selangor',
			'postcode'	            =>'43650'
        ]);
        Shop::create([
        	'shop_name'		    	=>'Ria Gerai',
        	'tell_no'		        =>'017-210 3471',
        	'shop_img'		    	=>'3.png',
			'address'	            =>'KG. SG. Ramal Dalam Timur, Seksyen 8',
			'user_id'               =>'3',
			'city'	            =>'Bangi',
			'state'	            =>'Selangor',
			'postcode'	            =>'43650'
        ]);
        Shop::create([
        	'shop_name'		    	=>'Cempaka Tasek Mini Market',
            'tell_no'		        =>'012-375 0606',
        	'shop_img'		    	=>'4.png',
			'address'	            =>'No. 197, Jalan 8/1, Seksyen 8,',
			'user_id'               =>'4',
			'city'	            =>'Bangi',
			'state'	            =>'Selangor',
			'postcode'	            =>'43650'
        ]);
        Shop::create([
        	'shop_name'		    	=>'My shop',
        	'tell_no'			    =>'012-375 0606',
        	'shop_img'		    	=>'5.png',
			'address'	            =>'Jalan Abim, Kampung Sungai Ramal Dalam',
			'user_id'               =>'5',
			'city'	            =>'Kajang',
			'state'	            =>'Selangor',
			'postcode'	            =>'43000'
        ]); 
        Shop::create([
        	'shop_name'		    	=>'Pasar Segar NJ',
        	'tell_no'    	        =>' 03-8920 1820',
        	'shop_img'		    	=>'6.png',
			'address'	            =>'Lot 1658, Jalan Sungai Ramal Dalam',
			'user_id'               =>'6',
			'city'	            =>'Kajang',
			'state'	            =>'Selangor',
			'postcode'	            =>'43000'
        ]);
        Shop::create([
        	'shop_name'		    	=>'Kedai Runcit Ramal Indah',
        	'tell_no'	            =>'010-884 5580',
        	'shop_img'		    	=>'7.png',
			'address'	            =>'No. 4, Jalan Ramal 1/1, Taman Ramal Indah,',
			'user_id'               =>'7',
			'city'	            =>'Kajang',
			'state'	            =>'Selangor',
			'postcode'	            =>'43300'
        ]);
        Shop::create([
        	'shop_name'		     	=>'Kedai Runcit Pak Din',
        	'tell_no'    	        =>'012-656 3771',
        	'shop_img'		    	=>'8.png',
			'address'	            =>'Jalan 6c/6, Bandar Baru Bang',
			'user_id'               =>'8',
			'city'	            =>'Bangi',
			'state'	            =>'Selangor',
			'postcode'	            =>'43650'
        ]);
        Shop::create([
        	'shop_name'		    	=>'Murahshops Bangi',
        	'tell_no'		        =>'012-656 3771',
        	'shop_img'		    	=>'9.png',
			'address'	            =>'55G, Jalan 7/7a, Seksyen 7',
			'user_id'               =>'9',
			'city'	            =>'Bangi',
			'state'	            =>'Selangor',
			'postcode'	            =>'43650'
        ]); 
        Shop::create([
        	'shop_name'		    	=>'Kedai Acheh',
        	'tell_no'    	        =>'010-884 5580',
        	'shop_img'		     	=>'10.png',
			'address'	            =>'Taman Sepakat Indah 2',
			'user_id'               =>'10',
			'city'	            =>'Kajang',
			'state'	            =>'Selangor',
			'postcode'	            =>'43000'
        ]);
        Shop::create([
            'shop_name'             =>'Raudhah Mart Sdn Bhd',
            'tell_no'               =>'03-8922 9699',
            'shop_img'              =>'11.png',
            'address'               =>'37, Jalan 8/1, Seksyen 8',
            'user_id'               =>'11',
            'city'              =>'43650',
            'state'             =>'Selangor',
            'postcode'              =>'43650'
        ]);
        Shop::create([
            'shop_name'             =>'Yakin Halal Mart',
            'tell_no'               =>'03-8928 0590',
            'shop_img'              =>'12.png',
            'address'               =>'58, Jalan 7/7b, Seksyen 7,',
            'user_id'               =>'12',
            'city'              =>'Bangi',
            'state'             =>'Selangor',
            'postcode'              =>'43650'
        ]);
        Shop::create([
            'shop_name'             =>'Gembira Mini Market',
            'tell_no'               =>'017-672 2241',
            'shop_img'              =>'13.png',
            'address'               =>'No. 11, Jalan Melur 1',
            'user_id'               =>'13',
            'city'              =>'Kajang',
            'state'             =>'Selangor',
            'postcode'              =>'43000'
        ]);
        Shop::create([
            'shop_name'             =>'Pasar Mini Metro Mart',
            'tell_no'               =>'010-884 5580',
            'shop_img'              =>'14.png',
            'address'               =>'T44, Jalan 4/11b, Seksyen 4 Tambahan',
            'user_id'               =>'14',
            'city'              =>'Bangi',
            'state'             =>'Selangor',
            'postcode'              =>'43650'
        ]);
        Shop::create([
            'shop_name'             =>'Kedai Runcit Cahaya Laman',
            'tell_no'               =>'019-211 2012',
            'shop_img'              =>'15.png',
            'address'               =>'20, Jalan 3/7, Seksyen 3',
            'user_id'               =>'15',
            'city'              =>'Bangi',
            'state'             =>'Selangor',
            'postcode'              =>'43650'
        ]);
        Shop::create([
            'shop_name'             =>'A&A Kedai Runcit',
            'tell_no'               =>'011-6096 9978',
            'shop_img'              =>'16.png',
            'address'               =>'Sri Cempaka Apartment, Jalan Sepakat Indah 2/1, Taman Sepakat Indah 2',
            'user_id'               =>'16',
            'city'              =>'Kajang',
            'state'             =>'Selangor',
            'postcode'              =>'43000'
        ]);
        Shop::create([
            'shop_name'             =>'Ray Mini Market',
            'tell_no'               =>'019-271 6648',
            'shop_img'              =>'17.png',
            'address'               =>'8082, B13, Kampung Sungai Merab Luar',
            'user_id'               =>'17',
            'city'              =>'Kajang',
            'state'             =>'Selangor',
            'postcode'              =>'43000'
        ]);
        Shop::create([
            'shop_name'             =>'Kedai Runcit Hj Baharum',
            'tell_no'               =>'010-540 2447',
            'shop_img'              =>'18.png',
            'address'               =>'Jalan Sungai Merab, Kampung Sungai Merab Luar',
            'user_id'               =>'18',
            'city'              =>'Kajang',
            'state'             =>'Selangor',
            'postcode'              =>'43000'
        ]);
        Shop::create([
            'shop_name'             =>'Hijas Super Bazar',
            'tell_no'               =>'014-627 3755',
            'shop_img'              =>'19.png',
            'address'               =>'2, 10, Jalan Sri Kenari 10, Taman Sri Kenari',
            'user_id'               =>'19',
            'city'              =>'Kajang',
            'state'             =>'Selangor',
            'postcode'              =>'43000'
        ]);
        Shop::create([
            'shop_name'             =>'Hijrah Mart',
            'tell_no'               =>'016-676 3699',
            'shop_img'              =>'20.png',
            'address'               =>'Seksyen 7 Bangi',
            'user_id'               =>'20',
            'city'              =>'016-676 3699',
            'state'             =>'Selangor',
            'postcode'              =>'43000'
        ]);
		Shop::create([
        	'shop_name'		    	=>'Pasaraya Borong Big',
        	'tell_no'		        =>'018-6542133',
        	'shop_img'		    	=>'21.png',
			'address'	            =>'Jalan 18/35, Taman Sri Serdang, 43300 Seri Kembangan, Selangor, Malaysia',
			'user_id'               =>'21',
			'city'	                =>'Seri Kembangan',
			'state'	                =>'Selangor',
			'postcode'	            =>'43300'
        ]);
        Shop::create([
        	'shop_name'	     		=>'Millennial Mart',
        	'tell_no'		        =>'019-6185020',
        	'shop_img'		    	=>'22.png',
			'address'	            =>'No. 14G, Blok F, Jalan 18/14, Taman Seri Serdang, 43300 Seri Kembangan, Selangor, Malaysia',
			'user_id'               =>'22',
			'city'	                =>'Seri Kembangan',
			'state'	                =>'Selangor',
			'postcode'	            =>'43300'
        ]);
        Shop::create([
        	'shop_name'		    	=>'Sin Sheng Kee',
        	'tell_no'		        =>'010-2215116',
        	'shop_img'		    	=>'23.png',
			'address'	            =>'S-G-2, Pangsapuri Vista Impiana, Jalan BS 10/2, Taman Bukit Serdang Seksyen 10, 43300 Seri Kembangan, Selangor',
			'user_id'               =>'23',
			'city'	                =>'Seri Kembangan',
			'state'	                =>'Selangor',
			'postcode'	            =>'43300'
        ]);
        Shop::create([
        	'shop_name'		    	=>'Hosana Mini Market',
            'tell_no'		        =>'013-4568042',
        	'shop_img'		    	=>'24.png',
			'address'	            =>'B-G-01, South City Condo, Taman Serdang Perdana, 43300 Taman Serdang Perdana, Malaysia',
			'user_id'               =>'24',
			'city'	                =>'Taman Serdang Perdana',
			'state'	                =>'Selangor',
			'postcode'	            =>'43300'
        ]);
        Shop::create([
        	'shop_name'		    	=>'Alish Supermart',
        	'tell_no'			    =>'03-79829504',
        	'shop_img'		    	=>'25.png',
			'address'	            =>'G-S-08, Pangsapuri Vista Impiana, Jalan BS 10/2, 43300 Seri Kembangan, Selangor, Malaysia',
			'user_id'               =>'25',
			'city'	                =>'Seri Kembangan',
			'state'	                =>'Selangor',
			'postcode'	            =>'43300'
        ]); 
        Shop::create([
        	'shop_name'		    	=>'Pasar Mini Czip Lee',
        	'tell_no'    	        =>'03-8948 5749',
        	'shop_img'		    	=>'26.png',
			'address'	            =>'Pangsapuri Timur, Jalan Kasturi, Seksyen 11, Taman Bukit Serdang, 43300 Seri Kembangan, Selangor, Malaysia',
			'user_id'               =>'26',
			'city'	                =>'Seri Kembangan',
			'state'	                =>'Selangor',
			'postcode'	            =>'43300'
        ]);
        Shop::create([
        	'shop_name'		    	=>'Pasaraya Faisal',
        	'tell_no'	            =>'010-9500141',
        	'shop_img'		    	=>'27.png',
			'address'	            =>'Lot 1232, Bt 11 3/4, Kg sungai serai, Jalan Hulu Langat 43100 Cheras, Selangor, Malaysia',
			'user_id'               =>'27',
			'city'	                =>'Cheras',
			'state'	                =>'Selangor',
			'postcode'	            =>'43100'
        ]);
        Shop::create([
        	'shop_name'		     	=>'Gtt Grocer',
        	'tell_no'    	        =>'017-3997763',
        	'shop_img'		    	=>'28.png',
			'address'	            =>'68000 Hulu Langat, Selangor, Malaysia',
			'user_id'               =>'28',
			'city'	                =>'Hulu Langat',
			'state'	                =>'Selangor',
			'postcode'	            =>'68000'
        ]);
        Shop::create([
        	'shop_name'		    	=>'Kedai Runcit Rustam',
        	'tell_no'		        =>'03-90212743',
        	'shop_img'		    	=>'29.png',
			'address'	            =>'1, Persiaran Intan, Taman Sri Nanding, 43100 Hulu Langat, Selangor',
			'user_id'               =>'29',
			'city'	                =>'Hulu Langat',
			'state'	                =>'Selangor',
			'postcode'	            =>'43100 '
        ]); 
        Shop::create([
        	'shop_name'		    	=>'Pasaraya CS Hulu Langat',
        	'tell_no'    	        =>'03-90215833',
        	'shop_img'		     	=>'30.png',
			'address'	            =>'No. 72A, 86, Jalan Lagenda Suria 3, Jalan, 43100 Hulu Langat, Selangor',
			'user_id'               =>'30',
			'city'	                =>'Hulu Langat',
			'state'	                =>'Selangor',
			'postcode'	            =>'43100 '
        ]);
		Shop::create([
        	'shop_name'		    	=>'Giant Mini Hulu Langat',
        	'tell_no'    	        =>'03-77239393',
        	'shop_img'		     	=>'31.png',
			'address'	            =>'12, Jln Seri Mas 1, Taman Perkasa, 43100 Hulu Langat, Selangor',
			'user_id'               =>'31',
			'city'	                =>'Hulu Langat',
			'state'	                =>'Selangor',
			'postcode'	            =>'43100 '
        ]);
		Shop::create([
        	'shop_name'		    	=>'kedai serbaneka Taqwa Ehsan',
        	'tell_no'    	        =>'019-216 4491',
        	'shop_img'		     	=>'32.png',
			'address'	            =>'2447, Jln Hulu Langat, Kampung Sungai Serai, 43100 Hulu Langat, Selangor',
			'user_id'               =>'32',
			'city'	                =>'Hulu Langat',
			'state'	                =>'Selangor',
			'postcode'	            =>'43100 '
        ]);

		Shop::create([
        	'shop_name'		    	=>'JR Minimart',
        	'tell_no'    	        =>'017-351 5776',
        	'shop_img'		     	=>'33.png',
			'address'	            =>'Lot 1101-A1, Jalan Felcra Semungkis, 1/4, Batu 14 Hulu Langat, 43100 Hulu Langat, Selangor',
			'user_id'               =>'33',
			'city'	                =>'Hulu Langat',
			'state'	                =>'Selangor',
			'postcode'	            =>'43100 '
        ]);

		Shop::create([
        	'shop_name'		    	=>'Sathiabamah',
        	'tell_no'    	        =>'014-6349012',
        	'shop_img'		     	=>'34.png',
			'address'	            =>'A-G-12A, SBK 14 Pusat Perdagangan BS, Jalan BS 14/1, Taman Bukit Serdang, 43300 Seri Kembangan, Selangor',
			'user_id'               =>'34',
			'city'	                =>'Seri Kembangan',
			'state'	                =>'Selangor',
			'postcode'	            =>'43300 '
        ]);

		Shop::create([
        	'shop_name'		    	=>'Pasaraya Megah',
        	'tell_no'    	        =>'014-23222456',
        	'shop_img'		     	=>'35.png',
			'address'	            =>'1-11, Jalan Putra 2, Taman Desa Dengkil, 43800 Dengkil, Selangor',
			'user_id'               =>'35',
			'city'	                =>'Dengkil',
			'state'	                =>'Selangor',
			'postcode'	            =>'43800 '
        ]);

		Shop::create([
        	'shop_name'		    	=>'PASARAYA JOMMART SDN. BHD.',
        	'tell_no'    	        =>'011-10830000',
        	'shop_img'		     	=>'36.png',
			'address'	            =>'WISMA KONG SIEW TIONG, TAMAN AMETIS UTAMA, JALAN AU 3/1, 43800 Dengkil, Selangor',
			'user_id'               =>'36',
			'city'	                =>'Dengkil',
			'state'	                =>'Selangor',
			'postcode'	            =>'43800'
        ]);

		Shop::create([
        	'shop_name'		    	=>'Kedai Runcit Sungai Melut',
        	'tell_no'    	        =>'011-10830000',
        	'shop_img'		     	=>'37.png',
			'address'	            =>'43900 Dengkil, Selangor',
			'user_id'               =>'37',
			'city'	                =>'Dengkil',
			'state'	                =>'Selangor',
			'postcode'	            =>'43900'
        ]);

		Shop::create([
        	'shop_name'		    	=>'Pasaraya Mun Seng Sdn Bhd',
        	'tell_no'    	        =>'012-2893845',
        	'shop_img'		     	=>'38.png',
			'address'	            =>'No. 3, 5, Jalan Mutiara 1j, Taman Mutiara, 43800 Dengkil, Selangor',
			'user_id'               =>'38',
			'city'	                =>'Dengkil',
			'state'	                =>'Selangor',
			'postcode'	            =>'43800 '
        ]);

		Shop::create([
        	'shop_name'		    	=>'TH CASH & CARRY',
        	'tell_no'    	        =>'012-3997152',
        	'shop_img'		     	=>'39.png',
			'address'	            =>'Jalan 1, Pekan Dengkil, 43800 Dengkil, Selangor',
			'user_id'               =>'39',
			'city'	                =>'Dengkil',
			'state'	                =>'Selangor',
			'postcode'	            =>'43800 '
        ]);

		Shop::create([
        	'shop_name'		    	=>'Pasar Segar Haslaily Tranding',
        	'tell_no'    	        =>'018-3900514',
        	'shop_img'		     	=>'40.png',
			'address'	            =>'No 1.lorong 7.kedai PLB.kg selangor dredging, 43800 Dengkil, Selangor',
			'user_id'               =>'40',
			'city'	                =>'Dengkil',
			'state'	                =>'Selangor',
			'postcode'	            =>'43800'
        ]);
    }
}
