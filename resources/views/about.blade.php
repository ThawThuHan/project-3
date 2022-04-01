@extends('layouts/master')

@section('title', 'About')

@section('content')

<div class="container mt-3">
    <h1 class="text-center text-danger">Leadership</h1>
    <div class="row mt-5 mb-3">
        <div class="col-md-4 col-12">
            <div class="mx-5 mx-md-0" style="width: 18rem;">
                <div class="d-flex justify-content-center">
                    <img src="images/ceo1.jpg" class="rounded-circle" alt="..." style="width: 200px; height: 200px; object-fit: cover; box-shadow: 5px 5px 12px black;">
                </div>
                <div class="card-body">
                    <h5 class="text-center text-primary">Xi LuHan</h5>
                    <p class="text-center">CO-FOUNDER & CEO</p>
                    <p class="text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-12">
            <div class="mx-5 mx-md-0" style="width: 18rem;">
                <div class="d-flex justify-content-center">
                    <img src="images/ceo2.jpg" class="rounded-circle" alt="..." style="width: 200px; height: 200px; object-fit: cover; box-shadow: 5px 5px 12px black;">
                </div>
                <div class="card-body">
                    <h5 class="text-center text-primary">Roseanne Park</h5>
                    <p class="text-center">FOUNDER & CEO</p>
                    <p class="text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-12">
            <div class="mx-5 mx-md-0" style="width: 18rem;">
                <div class="d-flex justify-content-center">
                    <img src="images/ceo3.jpeg" class="rounded-circle" alt="..." style="width: 200px; height: 200px; object-fit: cover; box-shadow: 5px 5px 12px black;">
                </div>
                <div class="card-body">
                    <h5 class="text-center text-primary">Wang Yibo</h5>
                    <p class="text-center">CO-FOUNDER & CEO</p>
                    <p class="text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- story -->
    <h1 class="text-center text-success">Our Story</h1>
    <div class="d-flex justify-content-center">
        <img src="images/heart.png" alt="" style="width: 50px; height: 50px; object-fit: cover;">
    </div>
    <div class="row mt-4">
        <div class="col-md-6 col-12">
            <img src="images/about.jpg" alt="" style="width: 100%; height: 280px; object-fit: cover; box-shadow: 5px 5px 12px black;">
        </div>
        <div class="col-md-6 col-12">
            <p class="mt-3">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas, ea ipsam odit quas quasi doloribus dolor. Maiores suscipit non voluptatem obcaecati consectetur tenetur in eius deleniti nulla. Error, quibusdam consequuntur.
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas, ea ipsam odit quas quasi doloribus dolor. Maiores suscipit non voluptatem obcaecati consectetur tenetur in eius deleniti nulla. Error, quibusdam consequuntur.
                Ipsam odit quas quasi doloribus dolor. Maiores suscipit non voluptatem obcaecati consectetur tenetur in eius deleniti nulla.
            </p>
            <button class="btn btn-info text-white rounded float-end float-md-start">Read more</button>
        </div>
    </div>
</div>

@endsection