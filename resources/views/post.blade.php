@extends('layouts.master')

@section('title', 'Home')

@section('style')

<link rel="stylesheet" href="/css/post.css">

@endsection

@section('content')

<div class="container py-3">
    <div class="row">
        <div class="col-md-8 col-12">
            <h3>နိုင်ငံဝန်ထမ်းများ အငြိမ်းစားယူရမည့် အသက်အား ၆၂ နှစ်အဖြစ် ပြင်ဆင်သတ်မှတ်</h3>
            <h5 class="text-danger">Post Category</h5>
            <img src="images/sea.jpeg" class="post-img mt-3" alt="">
            <div class="bg-grey text-center p-2"><i>ပုံစာ - ပင်စင်လစာထုတ်ယူရန် စောင့်ဆိုင်းနေသည့် အငြိမ်းစားနိုင်ငံ့ဝန်ထမ်းများကို မြန်မာ့စီးပွားရေးဘဏ်ရှေ့တွင် တွေ့ရစဉ်</i></div>
            <div class="d-flex justify-content-between my-3">
                <div>
                    <i class="fa-solid fa-calendar-days me-2 text-danger"></i>
                    <span class="text-secondary me-1">PUBLISHED</span>
                    <span class="text-danger">31 MARCH 2022</span>
                </div>
                <div class="mt-3">
                    <i class="fa-brands fa-facebook fs-5 me-2 text-danger"></i>
                    <i class="fa-brands fa-twitter fs-5 me-2 text-danger"></i>
                    <i class="fa-brands fa-linkedin fs-5 text-danger"></i>
                </div>
            </div>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse sed tenetur enim nostrum atque nam. Repudiandae, neque minus quisquam consequuntur magni reprehenderit optio maxime sapiente nemo voluptate excepturi saepe sunt?Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse sed tenetur enim nostrum atque nam. Repudiandae, neque minus quisquam consequuntur magni reprehenderit optio maxime sapiente nemo voluptate excepturi saepe sunt?Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse sed tenetur enim nostrum atque nam. Repudiandae, neque minus quisquam consequuntur magni reprehenderit optio maxime sapiente nemo voluptate excepturi saepe sunt?
            </p>
        </div>
        <div class="col-md-4 col-12">
            <!-- most read -->
            <h3>MOST READ</h3>
            <hr>
            <div class="row mb-2">
                <div class="col-md-6 col-12">
                    <img src="images/moon.jpeg" class="read-img" alt="">
                </div>
                <div class="col-md-6 col-12">
                    <p>Lorem ipsum dolor sit amet.dolor sit amet.</p>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-6 col-12">
                    <img src="images/moon.jpeg" class="read-img" alt="">
                </div>
                <div class="col-md-6 col-12">
                    <p>Lorem ipsum dolor sit amet.dolor sit amet.</p>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-6 col-12">
                    <img src="images/moon.jpeg" class="read-img" alt="">
                </div>
                <div class="col-md-6 col-12">
                    <p>Lorem ipsum dolor sit amet.dolor sit amet.</p>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-6 col-12">
                    <img src="images/moon.jpeg" class="read-img" alt="">
                </div>
                <div class="col-md-6 col-12">
                    <p>Lorem ipsum dolor sit amet.dolor sit amet.</p>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-6 col-12">
                    <img src="images/moon.jpeg" class="read-img" alt="">
                </div>
                <div class="col-md-6 col-12">
                    <p>Lorem ipsum dolor sit amet.dolor sit amet.</p>
                </div>
            </div>
            
            <!-- most recent -->
            <h3 class="mt-5">MOST RECENT</h3>
            <hr>
            <div class="row mb-2 bg-grey">
                <div>Lorem ipsum dolor, sit amet consectetur adipisicing.</div>
                <div class="text-danger">4 HOURS AGO</div>
            </div>
            <div class="row mb-2 bg-grey">
                <div>Lorem ipsum dolor, sit amet consectetur adipisicing.</div>
                <div class="text-danger">4 HOURS AGO</div>
            </div>
            <div class="row mb-2 bg-grey">
                <div>Lorem ipsum dolor, sit amet consectetur adipisicing.</div>
                <div class="text-danger">4 HOURS AGO</div>
            </div>
            <div class="row mb-2 bg-grey">
                <div>Lorem ipsum dolor, sit amet consectetur adipisicing.</div>
                <div class="text-danger">4 HOURS AGO</div>
            </div>
            <div class="row mb-2 bg-grey">
                <div>Lorem ipsum dolor, sit amet consectetur adipisicing.</div>
                <div class="text-danger">4 HOURS AGO</div>
            </div>
        </div>
    </div>
    <h3>RELATED ARTICLES</h3>
    <hr>
    <div class="row">
        <div class="related-box">
            <img src="images/mountain.jpeg" class="related-img" alt="...">
            <div class="card-body">
                <h5 class="text-danger">Post Category</h5>
                <p class="">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
        <div class="related-box">
            <img src="images/mountain.jpeg" class="related-img" alt="...">
            <div class="card-body">
                <h5 class="text-danger">Post Category</h5>
                <p class="">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
        <div class="related-box">
            <img src="images/mountain.jpeg" class="related-img" alt="...">
            <div class="card-body">
                <h5 class="text-danger">Post Category</h5>
                <p class="">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
        <div class="related-box">
            <img src="images/mountain.jpeg" class="related-img" alt="...">
            <div class="card-body">
                <h5 class="text-danger">Post Category</h5>
                <p class="">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
    </div>
</div>

@endsection