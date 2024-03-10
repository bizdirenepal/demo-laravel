<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
        <a href="{{route('home')}}" class="logo d-flex align-items-center me-auto me-lg-0">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1>{{$model->title}}</h1>
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="{{route('home')}}" class="{{ Request::is('home') ? 'active' : '' }}">Home</a></li>
                <li><a href="{{route('service')}}" class="{{ Request::is('service') ? 'active' : '' }}">{{$model->type}}s</a></li>
                <li><a href="{{route('aboutus')}}" class="{{ Request::is('aboutus') ? 'active' : '' }}">About Us</a></li>
                <li><a href="{{route('reviews')}}" class="{{ Request::is('reviews') ? 'active' : '' }}">Reviews</a></li>
                <li><a href="{{route('contact')}}" class="d-xs-block d-sm-block d-md-none d-lg-none">Contact Us</a></li>
            </ul>
        </nav>
        <!-- .navbar -->

        <a href="{{route('contact')}}" class="btn-book-a-table d-none d-md-block">Contact Us</a>
        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
    </div>
</header>
<!-- End Header -->
