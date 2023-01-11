<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
        	'product_name'			=>'Beras Jasmine',
        	'category'	        	=>'Pantry',
        	'description'	        =>'Jasmines range of basmathi rice are highly sought by food connoisseurs for their taste and unique features.',
        	'quantity'	        	=>'10',
        	'price'		        	=>'44.99',
        	'product_img'			=>'1.png',
        	'shop_id'				=>'1'
        ]);
        Product::create([
        	'shop_id'				=>'1',
        	'category'		        =>'Pantry',
        	'product_name'			=>'Beras Super',
        	'description'	        =>'Jasmine Sunwhite Fragrant Rice texture is soft, fragrant and smooth. Suitable for restaurants, home cooking and special functions.',
        	'price'			        =>'23.99',
        	'quantity'		        =>'10',
        	'product_img'			=>'2.png'
        ]);
        Product::create([
        	'shop_id'				=>'1',
        	'category'	        	=>'Pantry',
        	'product_name'			=>'Beras Basmathi',
        	'description'	        =>'aj Mahal Herba Rice is imported from South India. Planted in river banks with 100% organic fertilizer.',
        	'price'			        =>'37.99',
        	'quantity'	         	=>'10',
        	'product_img'			=>'3.png'
        ]);
        Product::create([
        	'shop_id'				=>'1',
        	'category'	        	=>'Fastfood',
        	'product_name'			=>'Mi Goreng',
        	'description'        	=>'Indomie is a brand of instant noodle produced by the Indonesian company Indofood.',
        	'price'	        		=>'3.39',
        	'quantity'	        	=>'10',
        	'product_img'			=>'4.png'
        ]);
        Product::create([
        	'shop_id'				=>'2',
        	'category'      		=>'Bakery',
        	'product_name'			=>'Sapuan Mentega',
        	'description'	        =>'Mentega boleh digunakan sebagai sapuan dan perasa, selain dari penggunaan dalam masakan seperti membakar, membuat sos dan menggoreng',
        	'price'			        =>'14.99',
        	'quantity'		        =>'10',
        	'product_img'			=>'5.png'
        ]);
        Product::create([
        	'shop_id'		 		=>'2',
        	'category'      		=>'Bakery',
        	'product_name'			=>'Mentega FarmCows 250gm',
        	'description'	        =>'Mentega boleh digunakan sebagai sapuan dan perasa, selain dari penggunaan dalam masakan seperti membakar, membuat sos dan menggoreng',
        	'price'			        =>'4.79',
        	'quantity'		        =>'10',
        	'product_img'			=>'6.png'
        ]);
        Product::create([
        	'shop_id'				=>'2',
        	'category'      		=>'Snack',
        	'product_name'			=>'Keju Chesdale',
        	'description'	        =>'Mainland Chesdale Cheddar Cheese Spread 12 pcs 250g. Mainland Chesdale Cheddar Cheese Spread 12 pcs 250g.',
        	'price'			        =>'9.89',
        	'quantity'		        =>'10',
        	'product_img'			=>'7.png'
        ]);
        Product::create([
        	'shop_id'				=>'3',
        	'category'      		=>'Drinks',
        	'product_name'			=>'Susu',
        	'description'	        =>'No.1 Jenama Pilihan Ibu-ibu di Malaysia bersama DHA Tertinggi^ untuk Si Manja! Pilihan lebih bijak untuk pertumbuhan dan perkembangan Si Manja',
        	'price'			        =>'5.38',
        	'quantity'		        =>'10',
        	'product_img'			=>'8.png'
        ]);
        Product::create([
        	'shop_id'				=>'3',
        	'category'      		=>'Drinks',
        	'product_name'			=>'Susu Segar',
        	'description'	        =>'Beli Produk Susu 1 Liter Berkualitas Dengan Harga Murah.',
        	'price'			        =>'13.49',
        	'quantity'		        =>'10',
        	'product_img'			=>'9.png'
        ]);
        Product::create([
        	'shop_id'				=>'3',
        	'category'      		=>'Drink',
        	'product_name'			=>'Vitegen',
        	'description'	        =>'VITAGEN is a premium probiotic milk drink.',
        	'price'			        =>'3.89',
        	'quantity'		        =>'10',
        	'product_img'			=>'10.png'
        ]);
        Product::create([
        	'shop_id'				=>'4',
        	'category'      		=>'Snack',
        	'product_name'			=>'Munchys Oatcrunch',
        	'description'	        =>'Munchys Nutty Chocolate Oat Krunch with Hazelnuts is a great choice for a healthy snack',
        	'price'			        =>'7.99',
        	'quantity'		        =>'10',
        	'product_img'			=>'11.png'
        ]);
        Product::create([
        	'shop_id'				=>'4',
        	'category'      		=>'Meat',
        	'product_name'			=>'Ikan Tongkol Putih',
        	'description'	        =>'Weight : 700-900gm (Allow 10-20% for fluctuations in weight).',
        	'price'			        =>'9.00',
        	'quantity'		        =>'10',
        	'product_img'			=>'12.png'
        ]);
        Product::create([
        	'shop_id'				=>'4',
        	'category'      		=>'Meat',
        	'product_name'			=>'Ikan Tenggiri',
        	'description'	        =>'Tenggiri Sliced 500g',
        	'price'			        =>'14.00',
        	'quantity'		        =>'10',
        	'product_img'			=>'13.png'
        ]);
        Product::create([
        	'shop_id'				=>'4',
        	'category'      		=>'Meat',
        	'product_name'			=>'Ikan Selayang',
        	'description'	        =>'lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.',
        	'price'			        =>'9.50',
        	'quantity'		        =>'10',
        	'product_img'			=>'14.png'
        ]);
        Product::create([
        	'shop_id'				=>'5',
        	'category'      		=>'Fozen',
        	'product_name'			=>'Ketam',
        	'description'	        =>'[Frozen] Ketam Bunga (3 Ekor)',
        	'price'			        =>'31.00',
        	'quantity'		        =>'10',
        	'product_img'			=>'15.png'
        ]);
        Product::create([
        	'shop_id'				=>'5',
        	'category'      		=>'Meat',
        	'product_name'			=>'Ikan Siakap',
        	'description'	        =>'PREMIUM LANGKAWI SIAKAP (NO NEED RM160 1KG) WEIGHT 1KG 2NOS',
        	'price'			        =>'16.00',
        	'quantity'		        =>'10',
        	'product_img'			=>'16.png'
        ]);
        Product::create([
        	'shop_id'				=>'5',
        	'category'      		=>'Meat',
        	'product_name'			=>'Chicken',
        	'description'	        =>'Size 1.4-1.6kg',
        	'price'			        =>'19.50',
        	'quantity'		        =>'10',
        	'product_img'			=>'17.png'
        ]);
        Product::create([
        	'shop_id'				=>'4',
        	'category'      		=>'Meat',
        	'product_name'			=>'Beef',
        	'description'	        =>'HALAL 100% Fresh Quality',
        	'price'			        =>'34.00',
        	'quantity'		        =>'10',
        	'product_img'			=>'18.png'
        ]);
        Product::create([
        	'shop_id'				=>'6',
        	'category'      		=>'Household',
        	'product_name'			=>'Pencuci Pakaian',
        	'description'	        =>'Soft, So Fragrant, Worry-Free Clean with Sakura Perfume.',
        	'price'			        =>'11.90',
        	'quantity'		        =>'10',
        	'product_img'			=>'19.png'
        ]);
        Product::create([
        	'shop_id'				=>'6',
        	'category'      		=>'Household',
        	'product_name'			=>'Pencuci Pakaian',
        	'description'	        =>'Soft, So Fragrant, Worry-Free Clean with Sakura Perfume.',
        	'price'			        =>'8.90',
        	'quantity'		        =>'10',
        	'product_img'			=>'20.png'
        ]);
        Product::create([
            'shop_id'               =>'7',
            'category'              =>'Meat',
            'product_name'          =>'Chicken Drumstick',
            'description'           =>'Chicken Drumstick *Halal Certified* (1kg±)',
            'price'                 =>'18.90',
            'quantity'              =>'10',
            'product_img'           =>'21.png'
        ]);
        Product::create([
            'shop_id'               =>'7',
            'category'              =>'Meat',
            'product_name'          =>'Chicken Wing',
            'description'           =>'Chicken Wing (6-7pcs) 1Kg',
            'price'                 =>'14.90',
            'quantity'              =>'10',
            'product_img'           =>'22.png'
        ]);
        Product::create([
            'shop_id'               =>'8',
            'category'              =>'Fruit',
            'product_name'          =>'Mangga',
            'description'           =>'Mangga (500g)',
            'price'                 =>'4.90',
            'quantity'              =>'10',
            'product_img'           =>'23.png'
        ]);
         Product::create([
            'shop_id'               =>'8',
            'category'              =>'Fruit',
            'product_name'          =>'Limau Mandarin',
            'description'           =>'Fresh Fruit Grade A (XL) 1Kg Mandarin Orange',
            'price'                 =>'12.90',
            'quantity'              =>'10',
            'product_img'           =>'24.png'
        ]);
         Product::create([
            'shop_id'               =>'8',
            'category'              =>'Fruit',
            'product_name'          =>'Epal Merah',
            'description'           =>'Fresh Fruit South Africa Red Apple (L) 1pc',
            'price'                 =>'1.90',
            'quantity'              =>'10',
            'product_img'           =>'25.png'
        ]);
         Product::create([
            'shop_id'               =>'8',
            'category'              =>'Fruit',
            'product_name'          =>'Buah Belimbing',
            'description'           =>'1kg Buah Belimbing Madu',
            'price'                 =>'18.90',
            'quantity'              =>'10',
            'product_img'           =>'26.png'
        ]);
         Product::create([
            'shop_id'               =>'8',
            'category'              =>'Fruit',
            'product_name'          =>'Buah Nenas',
            'description'           =>'Buah Nenas MD2 Segar ',
            'price'                 =>'8.90',
            'quantity'              =>'10',
            'product_img'           =>'27.png'
        ]);
         Product::create([
            'shop_id'               =>'8',
            'category'              =>'Fruit',
            'product_name'          =>'Buah Betik',
            'description'           =>'Buah Betik 2kg ',
            'price'                 =>'5.90',
            'quantity'              =>'10',
            'product_img'           =>'28.png'
        ]);
         Product::create([
            'shop_id'               =>'8',
            'category'              =>'Fruit',
            'product_name'          =>'Buah Betik',
            'description'           =>'Buah Betik 2kg ',
            'price'                 =>'5.90',
            'quantity'              =>'10',
            'product_img'           =>'28.png'
        ]);
          Product::create([
            'shop_id'               =>'9',
            'category'              =>'Household',
            'product_name'          =>'Axion Lime Dishwash Paste 750g',
            'description'           =>'Try Axion Lime Dishwashing Paste to effectively clean dishes, pots, and pans. ',
            'price'                 =>'6.90',
            'quantity'              =>'10',
            'product_img'           =>'29.png'
        ]);
          Product::create([
            'shop_id'               =>'9',
            'category'              =>'Household',
            'product_name'          =>'Axion Pandan Lime Dishwashing Paste 750g',
            'description'           =>'Try Axion Lime Dishwashing Paste to effectively clean dishes, pots, and pans. ',
            'price'                 =>'6.90',
            'quantity'              =>'10',
            'product_img'           =>'30.png'
        ]);
          Product::create([
            'shop_id'               =>'9',
            'category'              =>'Household',
            'product_name'          =>'Axion Pandan Lime Dishwashing Paste 750g',
            'description'           =>'Try Axion Lime Dishwashing Paste to effectively clean dishes, pots, and pans. ',
            'price'                 =>'6.90',
            'quantity'              =>'10',
            'product_img'           =>'30.png'
        ]);
           Product::create([
            'shop_id'               =>'9',
            'category'              =>'Household',
            'product_name'          =>'Ajax Fabuloso Lavender Multi Purpose Floor Cleaner',
            'description'           =>'Cleaning with Ajax Fabuloso kills 99.9% of bacteria from your household surfaces ',
            'price'                 =>'12.90',
            'quantity'              =>'10',
            'product_img'           =>'31.png'
        ]);
           Product::create([
            'shop_id'               =>'9',
            'category'              =>'Household',
            'product_name'          =>'Ajax Fabuloso Apple Multi Purpose Floor Cleaner',
            'description'           =>'Cleaning with Ajax Fabuloso kills 99.9% of bacteria from your household surfaces ',
            'price'                 =>'12.90',
            'quantity'              =>'10',
            'product_img'           =>'32.png'
        ]);
            Product::create([
            'shop_id'               =>'9',
            'category'              =>'Drinks',
            'product_name'          =>'F&N PET DRINK 1.5L ICE CREAM SODA ',
            'description'           =>'F&N Fun Flavours is all about fun. Spread cheer and share the fun while you build great friendship through fun experiences.',
            'price'                 =>'4.90',
            'quantity'              =>'10',
            'product_img'           =>'33.png'
        ]);
            Product::create([
            'product_name'          =>'Beetroot',
            'category'              =>'Vegetables',
            'description'           =>'Beetroots are good for the human; because they are rich in antioxidants and have anti-inflammatory properties as well. ',
            'quantity'              =>'10',
            'price'                 =>'5',
            'product_img'           =>'34.png',
            'shop_id'               =>'1'
        ]);
        Product::create([
            'shop_id'               =>'1',
            'category'              =>'Vegetables',
            'product_name'          =>'Carrot',
            'description'           =>'Carrots have carotenoids a fat-soluble antioxidant pigment that has the potential to protect cells and tissues from free radical damage. ',
            'price'                 =>'2',
            'quantity'              =>'10',
            'product_img'           =>'35.png'
        ]);
        Product::create([
            'shop_id'               =>'1',
            'category'              =>'Vegetables',
            'product_name'          =>'Celeriac',
            'description'           =>'Celeriac contains Vitamin C and Vitamin K for healthy bones. It also contains potassium which will ensure one maintains normal blood pressure.',
            'price'                 =>'3',
            'quantity'              =>'10',
            'product_img'           =>'36.png'
        ]);
        Product::create([
            'shop_id'               =>'1',
            'category'              =>'Vegetables',
            'product_name'          =>'Jerusalem Articho',
            'description'           =>'Jerusalem artichokes might not look that good but is a source of inulin a fiber that promotes good gut health.',
            'price'                 =>'3',
            'quantity'              =>'10',
            'product_img'           =>'37.png'
        ]);
        Product::create([
            'shop_id'               =>'2',
            'category'              =>'Vegetables',
            'product_name'          =>'Swede',
            'description'           =>'Swedes are a good source of protein and fiber and are low in calories.',
            'price'                 =>'3',
            'quantity'              =>'10',
            'product_img'           =>'38.png'
        ]);
        Product::create([
            'shop_id'               =>'2',
            'category'              =>'Vegetables',
            'product_name'          =>'Radish',
            'description'           =>'Radishes have glucoraphanin that has anti-cancer properties.',
            'price'                 =>'4',
            'quantity'              =>'10',
            'product_img'           =>'39.png'
        ]);
        Product::create([
            'shop_id'               =>'2',
            'category'              =>'Vegetables',
            'product_name'          =>'Parsnip',
            'description'           =>'Parsnips have high fiber content and a great source of folate which is needed for a healthy brain and nervous system.',
            'price'                 =>'2',
            'quantity'              =>'10',
            'product_img'           =>'40.png'
        ]);
        Product::create([
            'shop_id'               =>'3',
            'category'              =>'Vegetables',
            'product_name'          =>'Potato',
            'description'           =>'Potatoes are a good source of fiber, iron, Vitamin C, folate, and Vitamin B.',
            'price'                 =>'2',
            'quantity'              =>'10',
            'product_img'           =>'41.png'
        ]);
        Product::create([
            'shop_id'               =>'3',
            'category'              =>'Vegetables',
            'product_name'          =>'Sweet Potato',
            'description'           =>'Sweet potatoes when boiled have a low glycaemic index which measures the effect of foods on blood glucose.',
            'price'                 =>'2',
            'quantity'              =>'10',
            'product_img'           =>'42.png'
        ]);
        Product::create([
            'shop_id'               =>'3',
            'category'              =>'Vegetables',
            'product_name'          =>'Turnip',
            'description'           =>'Turnips are high in fiber which is needed for good gut health.',
            'price'                 =>'3',
            'quantity'              =>'10',
            'product_img'           =>'43.png'
        ]);
         Product::create([
            'shop_id'               =>'11',
            'category'              =>'Canned',
            'product_name'          =>'AYAM BRAND Tuna Chunks in Water',
            'description'           =>'Just tuna, water and salt',
            'price'                 =>'7.29',
            'quantity'              =>'10',
            'product_img'           =>'44.png'
        ]);
         Product::create([
            'shop_id'               =>'11',
            'category'              =>'Canned',
            'product_name'          =>'Ayam Brand Sardines 155g',
            'description'           =>'Product: Ayam Brand Sardines',
            'price'                 =>'5.29',
            'quantity'              =>'10',
            'product_img'           =>'45.png'
        ]);
         Product::create([
            'shop_id'               =>'13',
            'category'              =>'Pet',
            'product_name'          =>'Whiskas cat dry food',
            'description'           =>'Whiskas cat dry food 1.1kg - 1.2kgs',
            'price'                 =>'14.29',
            'quantity'              =>'10',
            'product_img'           =>'46.png'
        ]);
         Product::create([
            'shop_id'               =>'13',
            'category'              =>'Health & Beauty',
            'product_name'          =>'Palmolive Naturals Intensive Moisture (Dry/Coarse Hair) Shampoo & Conditioner 350ml',
            'description'           =>' specialized formula with Coco Cream and Milk Protein extracts, instantly adds essential hydration to your hair',
            'price'                 =>'7.29',
            'quantity'              =>'10',
            'product_img'           =>'47.png'
        ]);
         Product::create([
            'shop_id'               =>'13',
            'category'              =>'Health & Beauty',
            'product_name'          =>'Palmolive Naturals Healthy & Smooth (Normal Hair) Shampoo & Conditioner 350ml',
            'description'           =>' specialized formula with Coco Cream and Milk Protein extracts, instantly adds essential hydration to your hair',
            'price'                 =>'7.29',
            'quantity'              =>'10',
            'product_img'           =>'48.png'
        ]);
         Product::create([
            'shop_id'               =>'13',
            'category'              =>'Health & Beauty',
            'product_name'          =>'Palmolive Naturals Anti Dandruff Shampoo & Conditioner 350ml',
            'description'           =>' specialized formula with Coco Cream and Milk Protein extracts, instantly adds essential hydration to your hair',
            'price'                 =>'7.29',
            'quantity'              =>'10',
            'product_img'           =>'49.png'
        ]);
         Product::create([
            'shop_id'               =>'13',
            'category'              =>'Health & Beauty',
            'product_name'          =>'Colgate Total Whitening Toothpaste 150g',
            'description'           =>'New & Improved Colgate Total Whitening Toothpaste provides 12 Hour Whole Mouth Protection',
            'price'                 =>'11.29',
            'quantity'              =>'10',
            'product_img'           =>'50.png'
        ]);
         Product::create([
            'shop_id'               =>'13',
            'category'              =>'Health & Beauty',
            'product_name'          =>'Colgate Total Clean Mint Toothpaste 150g',
            'description'           =>'New & Improved Colgate Total Whitening Toothpaste provides 12 Hour Whole Mouth Protection',
            'price'                 =>'11.29',
            'quantity'              =>'10',
            'product_img'           =>'51.png'
        ]);
         Product::create([
            'shop_id'               =>'15',
            'category'              =>'Baby Care',
            'product_name'          =>'MamyPoko Standard Pants L48+4 (9-14kg)',
            'description'           =>'Superior Absorbency Enables longer use up to 10 hours keeps baby comfortable all day long',
            'price'                 =>'33.29',
            'quantity'              =>'10',
            'product_img'           =>'52.png'
        ]);
         Product::create([
            'shop_id'               =>'15',
            'category'              =>'Baby Care',
            'product_name'          =>'ORIGINAL DRYPERS Wee Wee Dry Newborn Disposable Diaper',
            'description'           =>'NEW Drypers Wee Wee Dry Newborn is designed for the comfort of your precious little one.',
            'price'                 =>'29.29',
            'quantity'              =>'10',
            'product_img'           =>'53.png'
		 ]);
		Product::create([
				'product_name'			=>'Beras Jasmine',
				'category'	        	=>'Pantry',
				'description'	        =>'Jasmines range of basmathi rice are highly sought by food connoisseurs for their taste and unique features.',
				'quantity'	        	=>'10',
				'price'		        	=>'44.99',
				'product_img'			=>'1.png',
				'shop_id'				=>'2'
			]);
			Product::create([
				'shop_id'				=>'1',
				'category'		        =>'Pantry',
				'product_name'			=>'Beras Super',
				'description'	        =>'Jasmine Sunwhite Fragrant Rice texture is soft, fragrant and smooth. Suitable for restaurants, home cooking and special functions.',
				'price'			        =>'23.99',
				'quantity'		        =>'10',
				'product_img'			=>'2.png'
			]);
			Product::create([
				'shop_id'				=>'2',
				'category'	        	=>'Pantry',
				'product_name'			=>'Beras Basmathi',
				'description'	        =>'aj Mahal Herba Rice is imported from South India. Planted in river banks with 100% organic fertilizer.',
				'price'			        =>'37.99',
				'quantity'	         	=>'10',
				'product_img'			=>'3.png'
			]);
			Product::create([
				'shop_id'				=>'2',
				'category'	        	=>'Fastfood',
				'product_name'			=>'Mi Goreng',
				'description'        	=>'Indomie is a brand of instant noodle produced by the Indonesian company Indofood.',
				'price'	        		=>'3.39',
				'quantity'	        	=>'10',
				'product_img'			=>'4.png'
			]);
			Product::create([
				'shop_id'				=>'2',
				'category'      		=>'Bakery',
				'product_name'			=>'Sapuan Mentega',
				'description'	        =>'Mentega boleh digunakan sebagai sapuan dan perasa, selain dari penggunaan dalam masakan seperti membakar, membuat sos dan menggoreng',
				'price'			        =>'14.99',
				'quantity'		        =>'10',
				'product_img'			=>'5.png'
			]);
			Product::create([
				'shop_id'		 		=>'2',
				'category'      		=>'Bakery',
				'product_name'			=>'Mentega FarmCows 250gm',
				'description'	        =>'Mentega boleh digunakan sebagai sapuan dan perasa, selain dari penggunaan dalam masakan seperti membakar, membuat sos dan menggoreng',
				'price'			        =>'4.79',
				'quantity'		        =>'10',
				'product_img'			=>'6.png'
			]);
			Product::create([
				'shop_id'				=>'2',
				'category'      		=>'Snack',
				'product_name'			=>'Keju Chesdale',
				'description'	        =>'Mainland Chesdale Cheddar Cheese Spread 12 pcs 250g. Mainland Chesdale Cheddar Cheese Spread 12 pcs 250g.',
				'price'			        =>'9.89',
				'quantity'		        =>'10',
				'product_img'			=>'7.png'
			]);
			Product::create([
				'shop_id'				=>'2',
				'category'      		=>'Drinks',
				'product_name'			=>'Susu',
				'description'	        =>'No.1 Jenama Pilihan Ibu-ibu di Malaysia bersama DHA Tertinggi^ untuk Si Manja! Pilihan lebih bijak untuk pertumbuhan dan perkembangan Si Manja',
				'price'			        =>'5.38',
				'quantity'		        =>'10',
				'product_img'			=>'8.png'
			]);
			Product::create([
				'shop_id'				=>'2',
				'category'      		=>'Drinks',
				'product_name'			=>'Susu Segar',
				'description'	        =>'Beli Produk Susu 1 Liter Berkualitas Dengan Harga Murah.',
				'price'			        =>'13.49',
				'quantity'		        =>'10',
				'product_img'			=>'9.png'
			]);
			Product::create([
				'shop_id'				=>'2',
				'category'      		=>'Drink',
				'product_name'			=>'Vitegen',
				'description'	        =>'VITAGEN is a premium probiotic milk drink.',
				'price'			        =>'3.89',
				'quantity'		        =>'10',
				'product_img'			=>'10.png'
			]);
			Product::create([
				'shop_id'				=>'2',
				'category'      		=>'Snack',
				'product_name'			=>'Munchys Oatcrunch',
				'description'	        =>'Munchys Nutty Chocolate Oat Krunch with Hazelnuts is a great choice for a healthy snack',
				'price'			        =>'7.99',
				'quantity'		        =>'10',
				'product_img'			=>'11.png'
			]);
			Product::create([
				'shop_id'				=>'2',
				'category'      		=>'Meat',
				'product_name'			=>'Ikan Tongkol Putih',
				'description'	        =>'Weight : 700-900gm (Allow 10-20% for fluctuations in weight).',
				'price'			        =>'9.00',
				'quantity'		        =>'10',
				'product_img'			=>'12.png'
			]);
			Product::create([
				'shop_id'				=>'2',
				'category'      		=>'Meat',
				'product_name'			=>'Ikan Tenggiri',
				'description'	        =>'Tenggiri Sliced 500g',
				'price'			        =>'14.00',
				'quantity'		        =>'10',
				'product_img'			=>'13.png'
			]);
			Product::create([
				'shop_id'				=>'2',
				'category'      		=>'Meat',
				'product_name'			=>'Ikan Selayang',
				'description'	        =>'lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.',
				'price'			        =>'9.50',
				'quantity'		        =>'10',
				'product_img'			=>'14.png'
			]);
			Product::create([
				'shop_id'				=>'2',
				'category'      		=>'Fozen',
				'product_name'			=>'Ketam',
				'description'	        =>'[Frozen] Ketam Bunga (3 Ekor)',
				'price'			        =>'31.00',
				'quantity'		        =>'10',
				'product_img'			=>'15.png'
			]);
			Product::create([
				'shop_id'				=>'2',
				'category'      		=>'Meat',
				'product_name'			=>'Ikan Siakap',
				'description'	        =>'PREMIUM LANGKAWI SIAKAP (NO NEED RM160 1KG) WEIGHT 1KG 2NOS',
				'price'			        =>'16.00',
				'quantity'		        =>'10',
				'product_img'			=>'16.png'
			]);
			Product::create([
				'shop_id'				=>'2',
				'category'      		=>'Meat',
				'product_name'			=>'Chicken',
				'description'	        =>'Size 1.4-1.6kg',
				'price'			        =>'19.50',
				'quantity'		        =>'10',
				'product_img'			=>'17.png'
			]);
			Product::create([
				'shop_id'				=>'2',
				'category'      		=>'Meat',
				'product_name'			=>'Beef',
				'description'	        =>'HALAL 100% Fresh Quality',
				'price'			        =>'34.00',
				'quantity'		        =>'10',
				'product_img'			=>'18.png'
			]);
			Product::create([
				'shop_id'				=>'2',
				'category'      		=>'Household',
				'product_name'			=>'Pencuci Pakaian',
				'description'	        =>'Soft, So Fragrant, Worry-Free Clean with Sakura Perfume.',
				'price'			        =>'11.90',
				'quantity'		        =>'10',
				'product_img'			=>'19.png'
			]);
			Product::create([
				'shop_id'				=>'2',
				'category'      		=>'Household',
				'product_name'			=>'Pencuci Pakaian',
				'description'	        =>'Soft, So Fragrant, Worry-Free Clean with Sakura Perfume.',
				'price'			        =>'8.90',
				'quantity'		        =>'10',
				'product_img'			=>'20.png'
			]);
			Product::create([
				'shop_id'               =>'2',
				'category'              =>'Meat',
				'product_name'          =>'Chicken Drumstick',
				'description'           =>'Chicken Drumstick *Halal Certified* (1kg±)',
				'price'                 =>'18.90',
				'quantity'              =>'10',
				'product_img'           =>'21.png'
			]);
			Product::create([
				'shop_id'               =>'2',
				'category'              =>'Meat',
				'product_name'          =>'Chicken Wing',
				'description'           =>'Chicken Wing (6-7pcs) 1Kg',
				'price'                 =>'14.90',
				'quantity'              =>'10',
				'product_img'           =>'22.png'
			]);
			Product::create([
				'shop_id'               =>'2',
				'category'              =>'Fruit',
				'product_name'          =>'Mangga',
				'description'           =>'Mangga (500g)',
				'price'                 =>'4.90',
				'quantity'              =>'10',
				'product_img'           =>'23.png'
			]);
			 Product::create([
				'shop_id'               =>'2',
				'category'              =>'Fruit',
				'product_name'          =>'Limau Mandarin',
				'description'           =>'Fresh Fruit Grade A (XL) 1Kg Mandarin Orange',
				'price'                 =>'12.90',
				'quantity'              =>'10',
				'product_img'           =>'24.png'
			]);
			 Product::create([
				'shop_id'               =>'2',
				'category'              =>'Fruit',
				'product_name'          =>'Epal Merah',
				'description'           =>'Fresh Fruit South Africa Red Apple (L) 1pc',
				'price'                 =>'1.90',
				'quantity'              =>'10',
				'product_img'           =>'25.png'
			]);
			 Product::create([
				'shop_id'               =>'2',
				'category'              =>'Fruit',
				'product_name'          =>'Buah Belimbing',
				'description'           =>'1kg Buah Belimbing Madu',
				'price'                 =>'18.90',
				'quantity'              =>'10',
				'product_img'           =>'26.png'
			]);
			 Product::create([
				'shop_id'               =>'2',
				'category'              =>'Fruit',
				'product_name'          =>'Buah Nenas',
				'description'           =>'Buah Nenas MD2 Segar ',
				'price'                 =>'8.90',
				'quantity'              =>'10',
				'product_img'           =>'27.png'
			]);
			 Product::create([
				'shop_id'               =>'2',
				'category'              =>'Fruit',
				'product_name'          =>'Buah Betik',
				'description'           =>'Buah Betik 2kg ',
				'price'                 =>'5.90',
				'quantity'              =>'10',
				'product_img'           =>'28.png'
			]);
			 Product::create([
				'shop_id'               =>'2',
				'category'              =>'Fruit',
				'product_name'          =>'Buah Betik',
				'description'           =>'Buah Betik 2kg ',
				'price'                 =>'5.90',
				'quantity'              =>'10',
				'product_img'           =>'28.png'
			]);
			  Product::create([
				'shop_id'               =>'2',
				'category'              =>'Household',
				'product_name'          =>'Axion Lime Dishwash Paste 750g',
				'description'           =>'Try Axion Lime Dishwashing Paste to effectively clean dishes, pots, and pans. ',
				'price'                 =>'6.90',
				'quantity'              =>'10',
				'product_img'           =>'29.png'
			]);
			  Product::create([
				'shop_id'               =>'2',
				'category'              =>'Household',
				'product_name'          =>'Axion Pandan Lime Dishwashing Paste 750g',
				'description'           =>'Try Axion Lime Dishwashing Paste to effectively clean dishes, pots, and pans. ',
				'price'                 =>'6.90',
				'quantity'              =>'10',
				'product_img'           =>'30.png'
			]);
			  Product::create([
				'shop_id'               =>'2',
				'category'              =>'Household',
				'product_name'          =>'Axion Pandan Lime Dishwashing Paste 750g',
				'description'           =>'Try Axion Lime Dishwashing Paste to effectively clean dishes, pots, and pans. ',
				'price'                 =>'6.90',
				'quantity'              =>'10',
				'product_img'           =>'30.png'
			]);
			   Product::create([
				'shop_id'               =>'2',
				'category'              =>'Household',
				'product_name'          =>'Ajax Fabuloso Lavender Multi Purpose Floor Cleaner',
				'description'           =>'Cleaning with Ajax Fabuloso kills 99.9% of bacteria from your household surfaces ',
				'price'                 =>'12.90',
				'quantity'              =>'10',
				'product_img'           =>'31.png'
			]);
			   Product::create([
				'shop_id'               =>'2',
				'category'              =>'Household',
				'product_name'          =>'Ajax Fabuloso Apple Multi Purpose Floor Cleaner',
				'description'           =>'Cleaning with Ajax Fabuloso kills 99.9% of bacteria from your household surfaces ',
				'price'                 =>'12.90',
				'quantity'              =>'10',
				'product_img'           =>'32.png'
			]);
				Product::create([
				'shop_id'               =>'2',
				'category'              =>'Drinks',
				'product_name'          =>'F&N PET DRINK 1.5L ICE CREAM SODA ',
				'description'           =>'F&N Fun Flavours is all about fun. Spread cheer and share the fun while you build great friendship through fun experiences.',
				'price'                 =>'4.90',
				'quantity'              =>'10',
				'product_img'           =>'33.png'
			]);
				Product::create([
				'product_name'          =>'Beetroot',
				'category'              =>'Vegetables',
				'description'           =>'Beetroots are good for the human; because they are rich in antioxidants and have anti-inflammatory properties as well. ',
				'quantity'              =>'10',
				'price'                 =>'5',
				'product_img'           =>'34.png',
				'shop_id'               =>'2'
			]);
			Product::create([
				'shop_id'               =>'2',
				'category'              =>'Vegetables',
				'product_name'          =>'Carrot',
				'description'           =>'Carrots have carotenoids a fat-soluble antioxidant pigment that has the potential to protect cells and tissues from free radical damage. ',
				'price'                 =>'2',
				'quantity'              =>'10',
				'product_img'           =>'35.png'
			]);
			Product::create([
				'shop_id'               =>'2',
				'category'              =>'Vegetables',
				'product_name'          =>'Celeriac',
				'description'           =>'Celeriac contains Vitamin C and Vitamin K for healthy bones. It also contains potassium which will ensure one maintains normal blood pressure.',
				'price'                 =>'3',
				'quantity'              =>'10',
				'product_img'           =>'36.png'
			]);
			Product::create([
				'shop_id'               =>'2',
				'category'              =>'Vegetables',
				'product_name'          =>'Jerusalem Articho',
				'description'           =>'Jerusalem artichokes might not look that good but is a source of inulin a fiber that promotes good gut health.',
				'price'                 =>'3',
				'quantity'              =>'10',
				'product_img'           =>'37.png'
			]);
			Product::create([
				'shop_id'               =>'2',
				'category'              =>'Vegetables',
				'product_name'          =>'Swede',
				'description'           =>'Swedes are a good source of protein and fiber and are low in calories.',
				'price'                 =>'3',
				'quantity'              =>'10',
				'product_img'           =>'38.png'
			]);
			Product::create([
				'shop_id'               =>'2',
				'category'              =>'Vegetables',
				'product_name'          =>'Radish',
				'description'           =>'Radishes have glucoraphanin that has anti-cancer properties.',
				'price'                 =>'4',
				'quantity'              =>'10',
				'product_img'           =>'39.png'
			]);
			Product::create([
				'shop_id'               =>'2',
				'category'              =>'Vegetables',
				'product_name'          =>'Parsnip',
				'description'           =>'Parsnips have high fiber content and a great source of folate which is needed for a healthy brain and nervous system.',
				'price'                 =>'2',
				'quantity'              =>'10',
				'product_img'           =>'40.png'
			]);
			Product::create([
				'shop_id'               =>'2',
				'category'              =>'Vegetables',
				'product_name'          =>'Potato',
				'description'           =>'Potatoes are a good source of fiber, iron, Vitamin C, folate, and Vitamin B.',
				'price'                 =>'2',
				'quantity'              =>'10',
				'product_img'           =>'41.png'
			]);
			Product::create([
				'shop_id'               =>'2',
				'category'              =>'Vegetables',
				'product_name'          =>'Sweet Potato',
				'description'           =>'Sweet potatoes when boiled have a low glycaemic index which measures the effect of foods on blood glucose.',
				'price'                 =>'2',
				'quantity'              =>'10',
				'product_img'           =>'42.png'
			]);
			Product::create([
				'shop_id'               =>'2',
				'category'              =>'Vegetables',
				'product_name'          =>'Turnip',
				'description'           =>'Turnips are high in fiber which is needed for good gut health.',
				'price'                 =>'3',
				'quantity'              =>'10',
				'product_img'           =>'43.png'
			]);
			 Product::create([
				'shop_id'               =>'2',
				'category'              =>'Canned',
				'product_name'          =>'AYAM BRAND Tuna Chunks in Water',
				'description'           =>'Just tuna, water and salt',
				'price'                 =>'7.29',
				'quantity'              =>'10',
				'product_img'           =>'44.png'
			]);
			 Product::create([
				'shop_id'               =>'2',
				'category'              =>'Canned',
				'product_name'          =>'Ayam Brand Sardines 155g',
				'description'           =>'Product: Ayam Brand Sardines',
				'price'                 =>'5.29',
				'quantity'              =>'10',
				'product_img'           =>'45.png'
			]);
			 Product::create([
				'shop_id'               =>'2',
				'category'              =>'Pet',
				'product_name'          =>'Whiskas cat dry food',
				'description'           =>'Whiskas cat dry food 1.1kg - 1.2kgs',
				'price'                 =>'14.29',
				'quantity'              =>'10',
				'product_img'           =>'46.png'
			]);
			 Product::create([
				'shop_id'               =>'2',
				'category'              =>'Health & Beauty',
				'product_name'          =>'Palmolive Naturals Intensive Moisture (Dry/Coarse Hair) Shampoo & Conditioner 350ml',
				'description'           =>' specialized formula with Coco Cream and Milk Protein extracts, instantly adds essential hydration to your hair',
				'price'                 =>'7.29',
				'quantity'              =>'10',
				'product_img'           =>'47.png'
			]);
			 Product::create([
				'shop_id'               =>'2',
				'category'              =>'Health & Beauty',
				'product_name'          =>'Palmolive Naturals Healthy & Smooth (Normal Hair) Shampoo & Conditioner 350ml',
				'description'           =>' specialized formula with Coco Cream and Milk Protein extracts, instantly adds essential hydration to your hair',
				'price'                 =>'7.29',
				'quantity'              =>'10',
				'product_img'           =>'48.png'
			]);
			 Product::create([
				'shop_id'               =>'2',
				'category'              =>'Health & Beauty',
				'product_name'          =>'Palmolive Naturals Anti Dandruff Shampoo & Conditioner 350ml',
				'description'           =>' specialized formula with Coco Cream and Milk Protein extracts, instantly adds essential hydration to your hair',
				'price'                 =>'7.29',
				'quantity'              =>'10',
				'product_img'           =>'49.png'
			]);
			 Product::create([
				'shop_id'               =>'2',
				'category'              =>'Health & Beauty',
				'product_name'          =>'Colgate Total Whitening Toothpaste 150g',
				'description'           =>'New & Improved Colgate Total Whitening Toothpaste provides 12 Hour Whole Mouth Protection',
				'price'                 =>'11.29',
				'quantity'              =>'10',
				'product_img'           =>'50.png'
			]);
			 Product::create([
				'shop_id'               =>'2',
				'category'              =>'Health & Beauty',
				'product_name'          =>'Colgate Total Clean Mint Toothpaste 150g',
				'description'           =>'New & Improved Colgate Total Whitening Toothpaste provides 12 Hour Whole Mouth Protection',
				'price'                 =>'11.29',
				'quantity'              =>'10',
				'product_img'           =>'51.png'
			]);
			 Product::create([
				'shop_id'               =>'2',
				'category'              =>'Baby Care',
				'product_name'          =>'MamyPoko Standard Pants L48+4 (9-14kg)',
				'description'           =>'Superior Absorbency Enables longer use up to 10 hours keeps baby comfortable all day long',
				'price'                 =>'33.29',
				'quantity'              =>'10',
				'product_img'           =>'52.png'
			]);
			 Product::create([
				'shop_id'               =>'2',
				'category'              =>'Baby Care',
				'product_name'          =>'ORIGINAL DRYPERS Wee Wee Dry Newborn Disposable Diaper',
				'description'           =>'NEW Drypers Wee Wee Dry Newborn is designed for the comfort of your precious little one.',
				'price'                 =>'29.29',
				'quantity'              =>'10',
				'product_img'           =>'53.png'
			]);
		}
		}

