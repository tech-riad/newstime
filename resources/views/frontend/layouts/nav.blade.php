     <!-- Top Header Start -->
     <div class="top-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-4">
                    <div class="logo">
                        <a href="{{url('/')}}">
                            <img src="{{asset(@$setting->image)}}" alt="Logo">
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
                            <a href="{{@$setting->twitter}}"><i class="fab fa-twitter"></i></a>
                            <a href="{{@$setting->facebook}}"><i class="fab fa-facebook"></i></a>
                            <a href="{{@$setting->linkdein}}"><i class="fab fa-linkedin"></i></a>
                            <a href="{{@$setting->instagram}}"><i class="fab fa-instagram"></i></a>
                            <a href="{{@$setting->youtube}}"><i class="fab fa-youtube"></i></a>
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
                        @php
                            if ($menuItem->type == 'category') {

                                # code...
                                 $cat           = App\Models\Category::find($menuItem->category_id);
                                 $menuItem->url = route('news.category', $cat->slug);

                            }
                        @endphp
                        <a href="{{ $menuItem->url }}" class="nav-item nav-link">{{ $menuItem->title }}</a>
                    @endforeach
                    </div>
                </div>
            </nav>
        </div>
    </div>


    <!-- Header End -->

   {{-- <div class="merque">
    <div class="container-fluid">
        <div class="h2"><span>Notice</span></div>
        <marquee  direction="left" >
            This is a sample scrolling text that has scrolls texts to left.
            </marquee>
    </div>
   </div> --}}

<section >
    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-lg-12">
                <div class="newstiker">
                    <div class="newstiker-title">শিরোনাম</div>
                    <div class="newstiker-content">



                        <marquee direction="left" behavior="scroll" onmouseover="this.stop();" onmouseout="this.start();">

                            @foreach ($marquenews as $item)
                                <a href="{{route('show',$item->id)}}">
                                {{$item->title}}
                                </a>
                            @endforeach

                        </marquee>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
