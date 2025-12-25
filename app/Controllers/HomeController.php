<?php
namespace App\Controllers;
use App\Core\Controller;

class HomeController extends Controller {
    
    public function index() {
        // Sample video data (တကယ်တော့ database ကနေယူရပါမယ်)
        $videos = [
            [
                'id' => 1,
                'title' => 'မြန်မာ့ရိုးရာ ဂီတအကအခုန်',
                'channel' => 'မြန်မာယဉ်ကျေးမှု',
                'views' => '1.2M',
                'time' => '2 ရက် လွန်ခဲ့သည်',
                'duration' => '12:45',
                'thumbnail' => 'https://picsum.photos/seed/video1/320/180'
            ],
            [
                'id' => 2,
                'title' => 'PHP MVC Tutorial မြန်မာလို (အပိုင်း ၁)',
                'channel' => 'Myanmar Coding',
                'views' => '345K',
                'time' => '1 ပတ် လွန်ခဲ့သည်',
                'duration' => '25:30',
                'thumbnail' => 'https://picsum.photos/seed/video2/320/180'
            ],
            [
                'id' => 3,
                'title' => 'အင်တာနက်ကနေ ဝင်ငွေရှာနည်း ၁၀ နည်း',
                'channel' => 'Digital Myanmar',
                'views' => '2.3M',
                'time' => '3 ရက် လွန်ခဲ့သည်',
                'duration' => '18:20',
                'thumbnail' => 'https://picsum.photos/seed/video3/320/180'
            ],
            [
                'id' => 4,
                'title' => 'မနက်ခင်းလေ့ကျင့်ခန်း လုပ်နည်း',
                'channel' => 'Health Tips MM',
                'views' => '890K',
                'time' => '5 ရက် လွန်ခဲ့သည်',
                'duration' => '15:45',
                'thumbnail' => 'https://picsum.photos/seed/video4/320/180'
            ],
            [
                'id' => 5,
                'title' => 'လက်ဖက်ရည်ဆိုင်ဖွင့်နည်း အဆင့်ဆင့်',
                'channel' => 'Small Business MM',
                'views' => '1.5M',
                'time' => '2 ပတ် လွန်ခဲ့သည်',
                'duration' => '22:10',
                'thumbnail' => 'https://picsum.photos/seed/video5/320/180'
            ],
            [
                'id' => 6,
                'title' => 'ဗုဒ္ဓဘာသာ အခြေခံတရားတော်များ',
                'channel' => 'Dhamma Talks',
                'views' => '3.7M',
                'time' => '1 လ လွန်ခဲ့သည်',
                'duration' => '45:20',
                'thumbnail' => 'https://picsum.photos/seed/video6/320/180'
            ]
        ];
        
        $data = [
            'title' => 'M-Tube - Myanmar Video Sharing Platform',
            'videos' => $videos,
            'trending_categories' => ['ဂီတ', 'သင်ခန်းစာ', 'ဖျော်ဖြေရေး', 'အားကစား', 'သတင်း']
        ];
        
        $this->view('home/index', $data);
    }
    
    public function trending() {
        $data = ['title' => 'လူကြိုက်များဗီဒီယိုများ - M-Tube'];
        $this->view('home/trending', $data);
    }
    
    public function subscriptions() {
        $data = ['title' => 'စာရင်းသွင်းထားများ - M-Tube'];
        $this->view('home/subscriptions', $data);
    }
}
?>