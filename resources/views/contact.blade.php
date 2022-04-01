@extends('layouts/master')

@section('title', 'Contact')

@section('content')

<div class="container mt-3">
    <h2 class="text-center text-danger">Get In Touch</h2>
    <p class="text-center">Want to get in touch? We'd love to hear from you. Here's how you can reach us <a href="#" class="text-decoration-none fw-bold">example@mail.com</a></p>
    <div class="row">
        <div class="col-md-6">
            <form action="" class="mx-auto needs-validation" novalidate>
                <div class="row mb-3">
                    <div class="col-12 col-md-6 form-group">
                        <label for="name" class="form-label text-primary">Name</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Enter name.." required>
                        <div class="invalid-feedback">*require</div>
                    </div>
                    <div class="col-12 col-md-6 form-group">
                        <label for="email" class="form-label text-primary">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email address.." required>
                        <div class="invalid-feedback">*require</div>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label for="subject" class="form-label text-primary">Subject</label>
                    <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject.." required>
                    <div class="invalid-feedback">*require</div>
                </div>
                <div class="form-group mb-3">
                    <label for="message" class="form-label text-primary">Message</label>
                    <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Enter message.." required></textarea>
                    <div class="invalid-feedback">*require</div>
                </div>
                <button class="btn btn-outline-primary w-100 rounded-pill">SUBMIT MESSAGE HERE</button>
            </form>
        </div>
        <div class="col-md-6">
            <img src="images/contact.jpg" alt="" style="width: 100%; height: 500px; object-fit: cover;">
        </div>
    </div>
</div>

@endsection

@section('script')
<script src="js/validation.js"></script>
@endsection