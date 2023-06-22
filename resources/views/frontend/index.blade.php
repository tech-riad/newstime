@extends('frontend.layouts.app')

@section('content')
        <!-- Top News Start-->
        <div class="top-news">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 tn-left">
                        <div class="tn-img">
                            <a href="{{route('show',@$featured->id)}}">
                                <img src="{{asset(@$featured->image)}}" />
                            </a>

                            <div class="tn-content">
                                <div class="tn-content-inner">
                                    <a class="tn-date" href="{{route('show',@$featured->id)}}"><i class="far fa-clock"></i>{{@$featured->created_at}}</a>
                                    <a class="tn-title" href="{{route('show',@$featured->id)}}">{!! Str::limit(@$featured->title,60) !!}</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 tn-right">
                        <div class="row">
                            @foreach($news as $n)
                            <div class="col-md-6">
                                <div class="tn-img">
                                    <a href="{{route('show',$n->id)}}">
                                        <img src="{{asset(@$n->image)}}" />
                                    </a>

                                    <div class="tn-content">
                                        <div class="tn-content-inner">
                                            <a class="tn-date" href="{{route('show',$n->id)}}"><i class="far fa-clock"></i>{{@$n->created_at}}</a>
                                            <a class="tn-title" href="{{route('show',$n->id)}}">{!! Str::limit(@$n->title,60) !!}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top News End-->


        <!-- Category News Start-->
        <div class="cat-news">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <h2><i class="fas fa-align-justify"></i>খেলাধুলা</h2>
                        <div class="row cn-slider">
                            @foreach ($sportsnews as $sports)
                            <div class="col-md-6">
                                <div class="cn-img">
                                    <a href="{{route('show',$sports->id)}}">
                                        <img src="{{asset(@$sports->image)}}"/>
                                    </a>

                                    <div class="cn-content">
                                        <div class="cn-content-inner">
                                            <a class="cn-date" href="{{route('show',$sports->id)}}"><i class="far fa-clock"></i>{{@$sports->created_at}}</a>
                                            <a class="cn-title" href="{{route('show',$sports->id)}}">{!! Str::limit(@$sports->title,60) !!}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach


                        </div>
                    </div>
                    <div class="col-md-6">
                        <h2><i class="fas fa-align-justify"></i>জাতীয়</h2>
                        <div class="row cn-slider">
                            @foreach ($technologynews as $technology)
                            <div class="col-md-6">
                                <div class="cn-img">
                                    <a href="{{route('show',$technology->id)}}">
                                        <img src="{{asset(@$technology->image)}}" />
                                    </a>
                                    <div class="cn-content">
                                        <div class="cn-content-inner">
                                            <a class="cn-date" href="{{route('show',$technology->id)}}"><i class="far fa-clock"></i>{{@$technology->created_at}}</a>
                                            <a class="cn-title" href="{{route('show',$technology->id)}}">{!! Str::limit(@$technology->title,60) !!}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category News End-->


        <!-- Category News Start-->
        <div class="cat-news">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <h2><i class="fas fa-align-justify"></i>রাজনীতি</h2>
                        <div class="row cn-slider">
                            @foreach ($businessnews as $business)
                            <div class="col-md-6">
                                <div class="cn-img">
                                    <a href="{{route('show',$business->id)}}">
                                        <img src="{{asset(@$business->image)}}" />
                                    </a>

                                    <div class="cn-content">
                                        <div class="cn-content-inner">
                                            <a class="cn-date" href="{{route('show',$business->id)}}"><i class="far fa-clock"></i>{{@$business->created_at}}</a>
                                            <a class="cn-title" href="{{route('show',$business->id)}}">{!! Str::limit(@$business->title,60) !!}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                    <div class="col-md-6">
                        <h2><i class="fas fa-align-justify"></i>বিনোদন</h2>
                        <div class="row cn-slider">
                            @foreach ($entertainmentnews as $entertainment)
                            <div class="col-md-6">
                                <div class="cn-img">
                                    <a href="{{route('show',$entertainment->id)}}">
                                        <img src="{{asset(@$entertainment->image)}}" />
                                    </a>
                                    <div class="cn-content">
                                        <div class="cn-content-inner">
                                            <a class="cn-date" href="{{route('show',$entertainment->id)}}"><i class="far fa-clock"></i>{{@$entertainment->created_at}}</a>
                                            <a class="cn-title" href="{{route('show',$entertainment->id)}}">{!! Str::limit(@$entertainment->title,60) !!}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category News End-->


        <!-- Main News Start-->
        <div class="main-news">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-12">
                                <h2><i class="fas fa-align-justify"></i>Latest News</h2>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mn-img">
                                            <a href="{{route('show',$latestTopNews->id)}}">
                                                <img src="{{asset($latestTopNews->image)}}" />
                                            </a>

                                        </div>
                                        <div class="mn-content">
                                            <a class="mn-title" href="{{route('show',$latestTopNews->id)}}">{!! Str::limit(@$latestTopNews->title,80) !!}</a>
                                            <a class="mn-date" href="{{route('show',$latestTopNews->id)}}"><i class="far fa-clock"></i>{{@$latestTopNews->created_at}}</a>
                                            <p>
                                                {!! Str::limit(@$latestTopNews->description,120) !!}

                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        @foreach ($latestTopsix as $lt)
                                        <div class="mn-list">
                                            <div class="mn-img">
                                                <a href="{{route('show',$lt->id)}}">
                                                    <img src="{{asset($lt->image)}}" />
                                                </a>

                                            </div>
                                            <div class="mn-content">
                                                <a class="mn-title" href="{{route('show',$lt->id)}}">{!! Str::limit(@$lt->title,80) !!}</a>
                                                <a class="mn-date" href="{{route('show',$lt->id)}}"><i class="far fa-clock"></i>{{@$lt->created_at}}</a>
                                            </div>
                                        </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <h2><i class="fas fa-align-justify"></i>জনপ্রিয় সংবাদ</h2>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mn-img">
                                            <a href="{{route('show',$toppopular->id)}}">
                                                <img src="{{asset($toppopular->image)}}" />

                                            </a>

                                        </div>
                                        <div class="mn-content">
                                            <a class="mn-title" href="{{route('show',$toppopular->id)}}">{{$toppopular->title}}</a>
                                            <a class="mn-date" href="{{route('show',$toppopular->id)}}"><i class="far fa-clock"></i>{{$toppopular->created_at}}</a>
                                            <p>
                                                {!! Str::limit(@$latestTopNews->description,120) !!}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        @foreach ($popularnews as $popular)
                                        <div class="mn-list">
                                            <div class="mn-img">
                                                <a href="{{route('show',$popular->id)}}">
                                                    <img src="{{asset($popular->image)}}" />
                                                </a>

                                            </div>
                                            <div class="mn-content">
                                                <a class="mn-title" href="{{route('show',$popular->id)}}">{{@$popular->title}}</a>
                                                <a class="mn-date" href="{{route('show',$popular->id)}}"><i class="far fa-clock"></i>{{@$popular->created_at}}</a>
                                            </div>
                                        </div>

                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="sidebar">
                            <div class="sidebar-widget">
                                <h2><i class="fas fa-align-justify"></i>ক্যাটেগরি</h2>
                                <div class="category">
                                    <ul class="fa-ul">
                                        @foreach ($categories as $category)
                                        <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span><a href="">{{$category->category_name}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>

                            <div class="sidebar-widget">
                                <h2><i class="fas fa-align-justify"></i>Tags</h2>
                                <div class="tags">
                                    @foreach ($tags as $tag)
                                    <a href="">{{@$tag->name}}</a>
                                    @endforeach

                                </div>
                            </div>

                            <div class="sidebar-widget">
                                <h2><i class="fas fa-align-justify"></i>Ads 1 column</h2>
                                <div class="image">
                                    <a href=""><img src="{{asset('frontend/img/adds-1.jpg')}}" alt="Image"></a>
                                </div>
                            </div>

                            <div class="sidebar-widget">
                                <h2><i class="fas fa-align-justify"></i>Ads 2 column</h2>
                                <div class="image">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <a href=""><img src="{{asset('frontend/img/adds-2.jpg')}}" alt="Image"></a>
                                        </div>
                                        <div class="col-sm-6">
                                            <a href=""><img src="{{asset('frontend/img/adds-2.jpg')}}" alt="Image"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main News End-->


@endsection
