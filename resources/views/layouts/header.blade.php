<div class="container-fluid bg-light shadow-sm">
       <div class="container pt-3">
           <div class="d-flex flex-wrap justify-content-between align-items-center">
               <img src="/images/logo.png" alt="" class="w-25">
               <div>
                    <form action="">
                        <div class="row">
                            <div class="col-8">
                                <input type="text" name="" id="" class="form-control form-control-sm" placeholder="Enter your email address...">
                            </div>
                            <div class="col-4">
                                <button class="btn btn-dark btn-sm text-white">Subscribe</button>
                            </div>
                        </div>
                    </form>
                    {{-- <a class="btn btn-outline-dark btn-sm" href="{{ route('login') }}">Login</a> --}}
               </div>
           </div>
       </div>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/home">Home</a>
                </li>
                <x-category-menu />
                {{-- <li class="nav-item"><a class="nav-link" href="#">Entertainment</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Healthy</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Sport</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Beauty</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Technology</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Other</a></li> --}}
            </ul>
            
            </div>
            <form class="d-flex position-relative">
                <input id="search-input" class="form-control rounded-pill" type="search" name="search"  placeholder="Search" aria-label="Search">
                <button id="search-btn" type="submit" class="border-0 bg-white position-absolute top-50 end-0 translate-middle"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>
    </nav>
   </div>
