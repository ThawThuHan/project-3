@extends('layouts/master')

@section('title', 'About')

@section('content')

<div class="container">
    <h1 class="text-center">Leadership</h1>
    <div class="row mt-5 mb-3">
        <div class="col-md-4">
            <div class="" style="width: 18rem;">
                <div class="d-flex justify-content-center">
                    <img src="images/ceo1.jpg" class="rounded-circle" alt="..." style="width: 200px; height: 200px; object-fit: cover;">
                </div>
                <div class="card-body">
                    <h5 class="text-center">Xi LuHan</h5>
                    <p class="text-center">CO-FOUNDER & CEO</p>
                    <p class="text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="" style="width: 18rem;">
                <div class="d-flex justify-content-center">
                    <img src="images/ceo2.jpg" class="rounded-circle" alt="..." style="width: 200px; height: 200px; object-fit: cover;">
                </div>
                <div class="card-body">
                    <h5 class="text-center">Roseanne Park</h5>
                    <p class="text-center">FOUNDER & CEO</p>
                    <p class="text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="" style="width: 18rem;">
                <div class="d-flex justify-content-center">
                    <img src="images/ceo3.jpeg" class="rounded-circle" alt="..." style="width: 200px; height: 200px; object-fit: cover;">
                </div>
                <div class="card-body">
                    <h5 class="text-center">Wang Yibo</h5>
                    <p class="text-center">CO-FOUNDER & CEO</p>
                    <p class="text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- story -->
    <h1 class="text-center">Our Story</h1>
    <div class="d-flex justify-content-center">
        <img src="images/heart.png" alt="" style="width: 50px; height: 50px; object-fit: cover;">
    </div>
    <div class="row mt-4">
        <div class="col-md-6">
            <img src="images/about.jpg" alt="" style="width: 100%; height: 280px; object-fit: cover;">
        </div>
        <div class="col-md-6">
            <p class="mt-3">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas, ea ipsam odit quas quasi doloribus dolor. Maiores suscipit non voluptatem obcaecati consectetur tenetur in eius deleniti nulla. Error, quibusdam consequuntur.
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas, ea ipsam odit quas quasi doloribus dolor. Maiores suscipit non voluptatem obcaecati consectetur tenetur in eius deleniti nulla. Error, quibusdam consequuntur.
            </p>
            <button class="btn btn-outline-info rounded">Read more</button>
        </div>
    </div>
</div>

@endsection