@extends('frontend.layouts.app')

@section('content')
  <!-- Breadcrumb Start -->
  <div class="breadcrumb-wrap">
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">News</a></li>
            <li class="breadcrumb-item active">News details</li>
        </ul>
    </div>
</div>
<!-- Breadcrumb End -->


<!-- Single News Start-->
<div class="single-news">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="sn-img">
                    <img src="{{asset($view->image)}}" />
                </div>
                <div class="sn-content">
                    <a class="sn-title" href="">{{$view->title}}</a>
                    <a class="sn-date" href=""><i class="far fa-clock"></i>{{$view->created_at}}</a>
                    <p>
                        {{$view->description}}
                    </p>

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
<!-- Single News End-->


@endsection
