@extends('layouts/master')

@section('title', 'Home')

@section('css')
<link rel="stylesheet" href="/css/index.css">
@endsection

@section('content')

<div class="container-fluid px-3 mb-4">
    <!-- update news -->
    <div class="row mb-5">
        <div class="col-6">
            <h3 class="mb-3">Update News</h3>
        </div>
        <div class="col-6 text-right">
            <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                <i class="fa fa-arrow-left"></i>
            </a>
            <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                <i class="fa fa-arrow-right"></i>
            </a>
        </div>
        <div class="col-12">
            <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="images/Slider 1.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Special title treatment</h4>
                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="images/Slider 2.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Special title treatment</h4>
                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="images/Slider 3.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Special title treatment</h4>
                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="images/moon.jpeg">
                                    <div class="card-body">
                                        <h4 class="card-title">Special title treatment</h4>
                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="images/beach.jpeg">
                                    <div class="card-body">
                                        <h4 class="card-title">Special title treatment</h4>
                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="images/mountain.jpeg">
                                    <div class="card-body">
                                        <h4 class="card-title">Special title treatment</h4>
                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="images/sea.jpeg">
                                    <div class="card-body">
                                        <h4 class="card-title">Special title treatment</h4>
                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="images/moon2.jpeg">
                                    <div class="card-body">
                                        <h4 class="card-title">Special title treatment</h4>
                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="images/moon3.jpeg">
                                    <div class="card-body">
                                        <h4 class="card-title">Special title treatment</h4>
                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row g-5">
        <div class="col-md-6">
            <div class="mb-5">
                <h1>TITLE HEADING</h1>
                <h5>Title Description, Dec 7, 2017</h5>
                <iframe width="100%" height="250px" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                </iframe>
                <p>Lorem ipsum dolor sit amet consectetur.</p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem placeat suscipit ratione sed error! Aliquid iure quod veritatis deserunt eius amet excepturi? Saepe laborum ad quis itaque reprehenderit expedita blanditiis?</p>
            </div>
            <div class="">
                <h1>TITLE HEADING</h1>
                <h5>Title Description, Sep 2, 2017</h5>
                <img width="100%" height="200px" src="images/girl.gif" alt="" srcset="">
                <p>Ukarine Update News</p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem placeat suscipit ratione sed error! Aliquid iure quod veritatis deserunt eius amet excepturi? Saepe laborum ad quis itaque reprehenderit expedita blanditiis?</p>
            </div>
        </div>
        
        <div class="col-md-6">
            <!-- breaking & trending -->
            <div class="d-flex justify-content-between mb-2" style="background-color: rgb(185, 184, 184);">
                <a href="#" class="btn btn-danger py-2" style="width: 30%;">Breaking News</a>
                <span class="py-2" style="width: 67%;">Lorem ipsum dolor sit amet, consectetur adipisicing.</span>
            </div>
            <div class="d-flex justify-content-between mb-2" style="background-color: rgb(185, 184, 184);">
                <a href="#" class="btn btn-dark py-2" style="width: 30%;">Trending</a>
                <span class="py-2" style="width: 67%;">Lorem ipsum dolor sit amet, consectetur adipisicing.</span>
            </div>

            <!-- popular post -->
            <h1 class="mt-5">Popular Post</h1>
            <div class="d-flex justify-content-between mb-2">
                <img src="images/moon.jpeg" alt="" style="width: 30%; height: 100px;">
                <div style="width: 66%;">
                    <h3 class="text-danger">Finance</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, dolores?</p>
                </div>
            </div>
            <div class="d-flex justify-content-between mb-2">
                <img src="images/moon2.jpeg" alt="" style="width: 30%; height: 100px;">
                <div style="width: 66%;">
                    <h3 class="text-danger">Finance</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, dolores?</p>
                </div>
            </div>
            <div class="d-flex justify-content-between mb-2">
                <img src="images/moon3.jpeg" alt="" style="width: 30%; height: 100px;">
                <div style="width: 66%;">
                    <h3 class="text-danger">Finance</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, dolores?</p>
                </div>
            </div>
            <div class="d-flex justify-content-between mb-2">
                <img src="images/sea.jpeg" alt="" style="width: 30%; height: 100px;">
                <div style="width: 66%;">
                    <h3 class="text-danger">Finance</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, dolores?</p>
                </div>
            </div>

            <!-- follower -->
            <h2 class="mt-5">Stay Connected</h2>
            <div class="d-flex justify-content-between mt-3">
                <div>
                    <img src="images/facebook.png" alt="" style="width: 50px; height: 50px;">
                    <span class="ms-4">6879 Fans</span>
                </div>
                <h4 class="text-right mt-2">LIKE</h4>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <div>
                    <img src="images/twitter.png" alt="" style="width: 50px; height: 50px;">
                    <span class="ms-4">568 Followers</span>
                </div>
                <h4 class="text-right mt-2">FOLLOW</h4>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <div>
                    <img src="images/youtube.png" alt="" style="width: 50px; height: 50px;">
                    <span class="ms-4">5039 subscribers</span>
                </div>
                <h4 class="text-right mt-2">SUBCRIBE</h4>
            </div>
        </div>
    </div>
</div>

@endsection