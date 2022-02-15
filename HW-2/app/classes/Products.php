<?php


namespace App\Classes;


class Products
{

    protected $allProducts;
    protected $result=[];
    public function index()
    {

        return [
            0=>[
                'id' => 1,
                'category_id' => 2,
                'name'=> 'রাজধানীর যেসব এলাকায় মঙ্গলবার গ্যাস থাকবে না',
                'price' => '10 mins ago',
                'description' => 'বিজ্ঞপ্তিতে বলা হয়েছে, হাতিরপুল, সার্কুলার রোড, ফ্রি স্কুল স্ট্রিট, গ্রিন রোড, কাঠালবাগান, পূর্ব রাজাবাজার, পশ্চিম রাজাবাজার, শুক্রাবাদ ও সার্কুলার রোড, ফ্রি স্কুল স্ট্রিট, গ্রিন রোড, কাঠালবাগান, পূর্ব রাজাবাজার, পশ্চিম ',
                'image' => 'assest/img/a1.jpg',
            ],
            1=>[
                'id' => 2,
                'category_id' => 2,
                'name'=> 'ইজিবাইক ছিনিয়ে নিতে তাঁরা যাত্রী সাজেন, জিম্মি করেন, করেন খুনও',
                'price' => '50 mins ago',
                'description' => '৭ ফেব্রুয়ারি গাইবান্ধার সাদুল্যাপুরের একবারপুর এলাকায় ইজিবাইকচালক আবদুল মজিদ মিয়া (৬০) খুনের ঘটনা তদন্ত করতে গিয়ে এমন এক',
                'image' => 'assest/img/a2.jpg',
            ],
            2=>[
                'id' => 2,
                'category_id' => 2,
                'name'=> 'রড চুরির অভিযোগে ট্রাকচালকসহ তিনজনকে বেঁধে রেখে মারধর',
                'price' => '10 hours ago',
                'description' => 'ওজনে ঘাটতি হয় ৫১০ কেজি রড। শরিফ ট্রেডার্সের মালিকের চাপে তাঁরা ৪০ হাজার টাকা ক্ষতিপূরণ দেন। এরপরও গুদামঘরে আটকে রেখে',
                'image' => 'assest/img/3.png',
            ],
            3=>[
                'id' => 4,
                'category_id' => 1,
                'name'=> 'গুমের ১৭ অভিযোগ খতিয়ে দেখল জাতিসংঘের ওয়ার্কিং গ্রুপ, তালিকায় বাংলাদেশও',
                'price' => '2 hours ago',
                'description' => 'অধিবেশন চলার সময় ওয়ার্কিং গ্রুপ ১৭টি গুমের ঘটনা খতিয়ে দেখেছে। ২০২১ সালের ২৯ অধিবেশন চলার সময় ওয়ার্কিং গ্রুপ ১৭টি গুমের ঘটনা খতিয়ে দেখেছে।',
                'image' => 'assest/img/b1.jpg',
            ],
            4=>[
                'id' => 5,
                'category_id' => 1,
                'name'=> 'ভারতে দলবদ্ধ ধর্ষণের পর ছাদ থেকে ফেলে দেওয়া হল নারীকে',
                'price' =>'59 mins ago',
                'description' => 'পুলিশ জানায়, নারীকে কাজ দেওয়ার কথা বলে চার যুবক ডেকে নিয়ে ধর্ষণ করে। নারীকে নেশাদ্রব্য খাইয়ে তাঁর হাত-পা বেঁধে ফেলে তারা।',
                'image' => 'assest/img/b2.jpg',
            ],
            5=>[
                'id' => 6,
                'category_id' => 1,
                'name'=> 'ইসরায়েলি বাহিনীর গুলিতে ফিলিস্তিনি কিশোর নিহত',
                'price' => '1 hours ago',
                'description' => 'ইসরায়েলি বাহিনীর গুলিতে এক ফিলিস্তিনি কিশোর নিহত হয়েছে। আজ সোমবার ফিলিস্তিনের পশ্চিম তীরে এ ঘটনা ঘটে। । আজ সোমবার ফিলিস্তিনের । আজ সোমবার ফিলিস্তিনের  সেখানে',
                'image' => 'assest/img/b3.jpg',
            ],
            6=>[
                'id' => 7,
                'category_id' => 3,
                'name'=> 'শ্রমিকের ডিজিটাল তথ্যভান্ডার করবে সরকার',
                'price' =>'6 hours ago',
                'description' => 'ডিজিটাল তথ্যভান্ডার হলে কোন খাতে কত শ্রমিক কাজ করেন, তার প্রকৃত সংখ্যা জানা যাবে। শ্রমিকদের সব ধরনের সুযোগ-সুবিধা প্রদান',
                'image' => 'assest/img/c1.jpg',
            ],
            7=>[
                'id' => 8,
                'category_id' => 3,
                'name'=> 'নতুন নির্দেশনা জারি কেন্দ্রীয় ব্যাংকের চেকের বিপরীতে ঋণ ছাড় নয়',
                'price' => '9 mins ago',
                'description' => 'কোনো কোনো আর্থিক প্রতিষ্ঠান ঋণের টাকা ব্যবহার করছে। এর মাধ্যমে বাংলাদেশ ব্যাংকে রক্ষিত ',
                'image' => 'assest/img/c2.jpeg',
            ],
            8=>[
                'id' => 9,
                'category_id' => 3,
                'name'=> 'ফুলের ব্যবসা যশোরের কৃষক হাসে ফুল চাষে',
                'price' => '3 hours ago',
                'description' => 'ফুলচাষি হযরত আলী ৭৫০টি গোলাপ ফুল নিয়ে যশোরের ঝিকরগাছা ফুল নিয়ে উপজেলার গদখালী পাইকারি ফুল নিয়ে ফুলের মোকামে যান। সকাল আটটার',
                'image' => 'assest/img/c3.png',
            ],
        ];
    }


    public function shortProducts($category_id)
    {
        $this->allProducts = $this->index();
        foreach ($this->allProducts as $product)
        {
            if ($product['category_id'] == $category_id)
            {
              array_push($this->result, $product);
            }
        }
        return $this->result;
    }

    public function getProductDetails ($productId)
    {
        $this->allProducts = $this->index();
        foreach ($this->allProducts as $product)
        {
            if ($product['id'] == $productId)
            {
                return $product;
            }
        }
    }
}