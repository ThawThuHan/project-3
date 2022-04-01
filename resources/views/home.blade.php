@extends('layouts.master')

@section('title', 'Home')

@section('style')
    <link rel="stylesheet" href="/css/home.css">
@endsection
    
@section('content')
   <div class="container">
       <div class="bg-black text-white my-2 p-2">
           <h3>Breaking News</h3>
       </div>
       
       {{-- Breaking News --}}
       <div class="breaking-news-container">
            <div class="main-news">
                <div class="main-news-card">
                    <img src="/images/slider/Slider 1.jpg" alt="">
                    <div class="main-news-content">
                        <span class="badge bg-secondary">Entertainment</span>
                        <h4 class="text-white">
                            Lee Min-Ho နှင့် Gong Hyo-jin တို့ ကိုရီးယားဒရာမာ ဇာတ်လမ်းတွဲတစ်ခုတွင် တွဲဖက်သရုပ်ဆောင်ထား
                        </h4>
                        <h6 class="text-white">Aug-07-2021</h6>
                    </div>
                </div>
            </div>
            <div class="main-news">
                <div class="main-news-card">
                    <img src="/images/slider/Slider 2.jpg" alt="">
                    <div class="main-news-content">
                        <span class="badge bg-secondary">Entertainment</span>
                        <h4 class="text-white">
                            Lee Min-Ho နှင့် Gong Hyo-jin တို့ ကိုရီးယားဒရာမာ ဇာတ်လမ်းတွဲတစ်ခုတွင် တွဲဖက်သရုပ်ဆောင်ထား
                        </h4>
                        <h6 class="text-white">Aug-07-2021</h6>
                    </div>
                </div>
            </div>
            <div class="main-news">
                <div class="main-news-card">
                    <img src="/images/slider/Slider 3.jpg" alt="">
                    <div class="main-news-content">
                        <span class="badge bg-secondary">Entertainment</span>
                        <h4 class="text-white">
                            Lee Min-Ho နှင့် Gong Hyo-jin တို့ ကိုရီးယားဒရာမာ ဇာတ်လမ်းတွဲတစ်ခုတွင် တွဲဖက်သရုပ်ဆောင်ထား
                        </h4>
                        <h6 class="text-white">Aug-07-2021</h6>
                    </div>
                </div>
            </div>
       </div>

       <div class="row">
            <div class="col-9">
                <h3 class="border-3 border-bottom border-dark p-2">Latest News</h3>
                <div class="d-flex flex-wrap">
                    <div class="latest-news">
                        <div class="latest-news-card">
                            <img src="https://news-eleven.com/sites/news-eleven.com/files/styles/news_category_overview_medium_image_/public/news-images/reuters_27.jpg?itok=_zPk-Lq1" alt="">
                            <div>
                                <span class="badge bg-warning">Entertainment</span>
                                <h5>အော်စကာစင်မြင့်ထက်မှ သူ့လုပ်ရပ်မှားကြောင်း အစီအစဉ်တင်ဆက်သူ ခရစ္စရော့ခ်ကို ဝယ်လ်စမစ်...</h5>
                                <div class="d-flex justify-content-between">
                                    <span class="fw-bold">View Count</span>
                                    <span class="fw-bold">Aug-07-2021</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="latest-news">
                        <div class="latest-news-card">
                            <img src="https://news-eleven.com/sites/news-eleven.com/files/styles/news_category_large_image/public/news-images/aung_la_n_seng.jpg?itok=n_gbeW2H" alt="">
                            <div>
                                <span class="badge bg-warning">Sport</span>
                                <h5>အောင်လအန်ဆန်၏ လိုက်ဟဲဗီးဝိတ်တန်း ကမ္ဘာ့ချန်ပီယံကာကွယ်ပွဲပါဝင်သည့် ONE TNT IV တွင် ထည့်သွင်းကျင်းပမည့်တွဲဆိုင်းများ ထုတ်ပြန်ကြေညာ</h5>
                                <div class="d-flex justify-content-between">
                                    <span class="fw-bold">View Count</span>
                                    <span class="fw-bold">Aug-07-2021</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="latest-news">
                        <div class="latest-news-card">
                            <img src="https://news-eleven.com/sites/news-eleven.com/files/styles/news_category_large_image/public/news-images/10_hl_ap_81.jpg?itok=Bh7vPanK" alt="">
                            <div>
                                <span class="badge bg-warning">Healthy</span>
                                <h5>တရုတ်နိုင်ငံ ရှန်ဟိုင်းမြို့တွင် သီတင်းနှစ်ပတ်အတွင်း ပထမဆုံးအကြိမ်အဖြစ် နေ့အလိုက် ကိုရိုနာဗိုင်းရပ်စ် ကူးစက်သူ ကျဆင်းခဲ့</h5>
                                <div class="d-flex justify-content-between">
                                    <span class="fw-bold">View Count</span>
                                    <span class="fw-bold">Aug-07-2021</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @foreach ($latestNews as $news)
                    <div class="latest-news">
                        <div class="latest-news-card">
                            <img src="{{ $news->image }}" alt="">
                            <div>
                                <div class="d-flex justify-content-between my-1">
                                    <span class="badge bg-warning">{{ $news->category->name  }}</span>
                                    <span>by <b>{{ $news->user->name }}</b></span>
                                </div>
                                <h5>{{$news->content}}</h5>
                                <div class="d-flex justify-content-between">
                                    <span class="text-muted"><i class="fa-solid fa-eye"></i> {{ $news->view_count }}</span>
                                    <span class="text-muted">{{ $news->updated_at->diffForHumans() }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                {{ $latestNews->onEachSide(1)->links() }}
            </div>
            <div class="col-3">
                <h3 class="border-3 border-bottom border-dark p-2">Popular News</h3>
                <div class="popular-news-card">
                    <img src="https://news-eleven.com/sites/news-eleven.com/files/styles/most_read_img/public/news-images/315.0.1224421482-0136-kk3g-1081x611gazzetta-web_1081x611.jpg?itok=vIcpYf-Z" alt="">
                    <span>
                        မီလန်မြို့ကို စွန့်ခွာ၍ ကွင်းသစ်စီမံကိန်း ဆောင်ရွက်ရန် အေစီမီလန်နှင့် အင်တာမီလန်
                    </span>
                </div>
                @foreach ($popularNews as $news)
                <div class="popular-news-card">
                    <img src="{{ $news->image }}" alt="">
                    <span>
                        {{ mb_strimwidth($news->content, 0, 50, '....') }}
                    </span>
                </div>
                @endforeach
            </div>
       </div>
   </div>

   <div class="container-fluid bg-black">
        <div class="container py-4">
            <div class="row">
                <div class="col-12 col-md-4">
                    <h1 class="logo-title">GoodVide</h1>
                    <div class="footer-link">
                        <a href="">About Us</a>
                        <a href="">Contact Us</a>
                        <a href="">Subscribe</a>
                    </div>
                </div>
            </div>
        </div>
   </div>
@endsection