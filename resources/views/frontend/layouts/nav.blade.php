     <!-- Top Header Start -->
     <div class="top-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-4">
                    <div class="logo">
                        <a href="">
                            <img src="{{asset('frontend/img/logo.png')}}" alt="Logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4">
                    <div class="search">
                        <input type="text" placeholder="Search">
                        <button><i class="fa fa-search"></i></button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="social">
                        <a href=""><i class="fab fa-twitter"></i></a>
                        <a href=""><i class="fab fa-facebook"></i></a>
                        <a href=""><i class="fab fa-linkedin"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a>
                        <a href=""><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Header End -->


    <!-- Header Start -->
    <div class="header">
        <div class="container">
            <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                <a href="#" class="navbar-brand">MENU</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav m-auto">
                        @foreach($menuItems as $menuItem)
                            <a href="{{ $menuItem->url }}" class="nav-item nav-link{{ Request::url() == $menuItem->url ? ' active' : '' }}">{{ $menuItem->title }}</a>
                        @endforeach
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Header End -->
