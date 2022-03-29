<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- main css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/font.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/all.css">

    @yield('css')

    <!-- favicon -->
    <link href="img/favicon.ico" rel="icon">
</head>
<body>
    @include('layouts/header')

    @yield('content')

    @include('layouts/footer')
    
    <!-- main js -->
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/up.js"></script>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <script>
        var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) {
                myIndex = 1
            }
            x[myIndex - 1].style.display = "block";
            setTimeout(carousel, 2500);
        }
    </script>

    @yield("script")
</body>
</html>