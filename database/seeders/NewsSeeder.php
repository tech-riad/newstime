<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        News::updateOrCreate([
            'category_id'       => 1,
            'subcategory_id'    => 1,
            'image'             => 'public/images/20230621072626.jpg',
            'published_date'    => '2023/06/11',
            'title'             => 'বর্তমানে হাজ্জাজ আলীর খামারের মূল্য  ৪ কোটি',
            'description'       => 'আসছে পবিত্র ঈদুল আজহা, প্রতিবছর কোরবানির পশুর হাটে মৌসুমি ব্যবসায়ীদের পছন্দের তালিকায় শীর্ষে থাকে হাজ্জাজ আলীর খামারের গরু ।  এ গরু কেনার পর তাঁরা ঢাকায় নিয়ে বিচিত্র সব নাম দিয়ে বিক্রি করেন। এর অন্যতম কারণ, হাজ্জাজ আলীর খামারের গরু দেখতে যেমন বলবান ও সুন্দর হয়ে থাকে, তেমনি গায়ের রং ও আকারেও আকর্ষণীয়। উন্নতজাতের গরু উৎপাদন, পালন ও বিপণনে রাজধানী ঢাকাসহ দেশজুড়ে ছড়িয়ে রয়েছে তাঁর খ্যাতি।
            ',
            'status'            => 1,
        ]);
        


        // Sports News
        News::updateOrCreate([
            'category_id'       => 6,
            'subcategory_id'    => 2,
            'image'             => 'public/images/20230621072444.jpg',
            'published_date'    => '2023/06/15',
            'title'             => 'ইতিহাসের তৃতীয় বৃহত্তম টেস্ট জয় বাংলাদেশের',
            'description'       => 'চরম নাটকীয়তার মধ্য দিয়ে শেষ হলো ঢাকা টেস্ট। তাসকিনের বলে উইকেটের পিছনে ক্যাচ ধরলেন লিটন, আম্পায়ারও আউট দিলেন। উল্লাসে মেতে উঠলেন সবাই, রিভিউ নিলেন  ব্যাটার জহির খান।⛑  রিপ্লেতে দেখা গেল ব্যাটে বল লাগেনি। থার্ড আম্পায়ার নট আউট দিলেন।',
            'status'            => 1,
        ]);
        News::updateOrCreate([
            'category_id'       => 6,
            'subcategory_id'    => 2,
            'image'             => 'public/images/20230621072739.jpg',
            'published_date'    => '2023/06/15',
            'title'             => 'শান্ত ডাবল সেঞ্চুরি না পেলেও সন্তুষ্ট',
            'description'       => 'রানটা যখন একশ ছাড়াল তখন থেকেই নাজমুল হোসেন শান্তকে নিয়ে অনেকে ভবিষ্যদ্বাণী করেছেন। শান্তর থেকে ডাবল সেঞ্চুরি দেখতে চান দর্শকরা। সেটি করার পথেই ছিলেন বাঁহাতি এই ব্যাটার। কিন্তু আউট হয়ে গেলেন ১৪৬ রানের মাথায়। ম্যাচ শেষে সংবাদ সম্মেলনে এ নিয়ে অবশ্য কোনো আক্ষেপ নেই বলেই জানালেন প্রথম দিনের সেরা পারফর্মার।⛑
            ',
            'status'            => 1,
        ]);
        News::updateOrCreate([
            'category_id'       => 6,
            'subcategory_id'    => 2,
            'image'             => 'public/images/20230621073534.jpg',
            'published_date'    => '2023/06/15',
            'title'             => 'ভারতকে হারিয়ে বিশ্বসেরা অস্ট্রেলিয়া',
            'description'       => 'বিশ্ব টেস্ট চ্যাম্পিয়নশিপের প্রথম আসরে সাউদাম্পটনে ফাইনাল ম্যাচে নিউজিল্যান্ডের বিপক্ষে হেরে শিরোপা হাতছাড়া হয়েছিল ভারতের। অথচ গোটা মৌসুমেই দারুণ খেলেছিল দলটি।
                                    ভারতীদের ভাগ্য এবারও বদলায়নি। গতকাল ওভালে টেস্ট চ্যাম্পিয়নশিপের  আসরের ফাইনালের শেষ দিনে অস্ট্রেলিয়ার বিপক্ষে আত্মসমর্পন করে ভারত দল ।
                                    ভারতের দরকার ছিল ২৮০ রান, অস্ট্রেলিয়ার ৭ উইকেট। ভারত যোগ করতে পারে ৭০ রান। চতুর্থ ইনিংসে ৪৪৪ রানের বিশাল লক্ষ্য ব্যাট করতে নেমে ২৩৪ রানে অলআউট হয় ভারত। ২০৯ রানের বিশাল জয় নিয়ে প্রথমবারের মতো টেস্ট চ্যাম্পিয়ন হয় অস্ট্রেলিয়া। নিউজিল্যান্ডের পর টেস্টের শ্রেষ্ঠত্বের মুকুট- পেয়ে গেল ক্রিকেট ইতিহাসের সবচেয়ে সফলতম দল।
                                    ',
            'status'            => 1,
        ]);

        // Technology News
        News::updateOrCreate([
            'category_id'       => 3,
            'subcategory_id'    => 2,
            'image'             => 'image_1670493095.jpg',
            'published_date'    => '2023/06/15',
            'title'             => '6th post',
            'description'       => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit accusantium ratione distinctio!',
            'status'            => 1,
        ]);
        News::updateOrCreate([
            'category_id'       => 3,
            'subcategory_id'    => 2,
            'image'             => 'image_1670493095.jpg',
            'published_date'    => '2023/06/15',
            'title'             => '7th post',
            'description'       => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit accusantium ratione distinctio!',
            'status'            => 1,
        ]);
        News::updateOrCreate([
            'category_id'       => 3,
            'subcategory_id'    => 2,
            'image'             => 'image_1670493095.jpg',
            'published_date'    => '2023/06/15',
            'title'             => '8th post',
            'description'       => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit accusantium ratione distinctio!',
            'status'            => 1,
        ]);
        News::updateOrCreate([
            'category_id'       => 3,
            'subcategory_id'    => 2,
            'image'             => 'image_1670493095.jpg',
            'published_date'    => '2023/06/15',
            'title'             => '9th post',
            'description'       => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit accusantium ratione distinctio!',
            'status'            => 1,
        ]);
// Entertainment News
        News::updateOrCreate([
            'category_id'       => 4,
            'subcategory_id'    => 2,
            'image'             => 'image_1670493095.jpg',
            'published_date'    => '2023/06/15',
            'title'             => '6th post',
            'description'       => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit accusantium ratione distinctio!',
            'status'            => 1,
        ]);
        News::updateOrCreate([
            'category_id'       => 4,
            'subcategory_id'    => 2,
            'image'             => 'image_1670493095.jpg',
            'published_date'    => '2023/06/15',
            'title'             => '7th post',
            'description'       => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit accusantium ratione distinctio!',
            'status'            => 1,
        ]);
        News::updateOrCreate([
            'category_id'       => 4,
            'subcategory_id'    => 2,
            'image'             => 'image_1670493095.jpg',
            'published_date'    => '2023/06/15',
            'title'             => '8th post',
            'description'       => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit accusantium ratione distinctio!',
            'status'            => 1,
        ]);
        News::updateOrCreate([
            'category_id'       => 4,
            'subcategory_id'    => 2,
            'image'             => 'image_1670493095.jpg',
            'published_date'    => '2023/06/15',
            'title'             => '9th post',
            'description'       => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit accusantium ratione distinctio!',
            'status'            => 1,
        ]);


    }
}
