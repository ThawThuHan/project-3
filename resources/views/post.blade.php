@extends('layouts.master')

@section('title', 'Home')

@section('style')

<link rel="stylesheet" href="/css/post.css">

@endsection

@section('content')

<div class="container py-3">
    <div class="row">
        <div class="col-md-8 col-12">
            <h3>{{ $news->title }}</h3>
            <h5 class="text-danger">Post Category - <span class="badge bg-info">{{ $news->category->name }}</span></h5>
            <img src="{{ $news->image }}" class="post-img mt-3" alt="">
            <div class="bg-grey text-center p-2"><i>ပုံစာ - ပင်စင်လစာထုတ်ယူရန် စောင့်ဆိုင်းနေသည့် အငြိမ်းစားနိုင်ငံ့ဝန်ထမ်းများကို မြန်မာ့စီးပွားရေးဘဏ်ရှေ့တွင် တွေ့ရစဉ်</i></div>
            <div class="d-flex justify-content-between my-3">
                <div>
                    <i class="fa-solid fa-calendar-days me-2 text-danger"></i>
                    <span class="text-secondary me-1">PUBLISHED</span>
                    <span class="text-danger">{{ $news->created_at->diffForHumans() }}</span>
                </div>
                <div class="mt-3">
                    <i class="fa-brands fa-facebook fs-5 me-2 text-danger"></i>
                    <i class="fa-brands fa-twitter fs-5 me-2 text-danger"></i>
                    <i class="fa-brands fa-linkedin fs-5 text-danger"></i>
                </div>
            </div>
            <p>
                {{ $news->content }}
            </p>
        </div>
        <div class="col-md-4 col-12">
            <!-- most read -->
            <h3 class="mt-5 mt-md-0">MOST READ</h3>
            <hr>
            @foreach ($mostRead as $news)
            <a href="/news/{{$news->id}}" class="link-style">
                <div class="row mb-2">
                    <div class="col-md-6 col-12">
                        <img src="{{ $news->image }}" class="read-img" alt="">
                    </div>
                    <div class="col-md-6 col-12">
                        <p>{{ $news->title }}</p>
                    </div>
                </div>
            </a>
            @endforeach
            
            <!-- most recent -->
            <h3 class="mt-5">MOST RECENT</h3>
            <hr>
            @foreach ($mostRecent as $news)
            <a href="/news/{{$news->id}}" class="link-style">
                <div class="row mb-2 bg-grey">
                    <div>{{ mb_strimwidth($news->content, 0, 100, '...', 'utf-8') }}</div>
                    <div class="text-danger">{{ $news->created_at->diffForHumans() }}</div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
    <h3 class="mt-5 mt-md-0">RELATED ARTICLES</h3>
    <hr>
    <div class="row">
        @foreach ($related as $news)
        <div class="related-box">
            <a href="/news/{{$news->id}}"><img src="{{ $news->image }}" class="related-img" alt="..."></a>
            <div class="card-body">
                <h5 class="text-danger"><span>{{ $news->category->name }}</span></h5>
                <p class="">{{ $news->title }}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection