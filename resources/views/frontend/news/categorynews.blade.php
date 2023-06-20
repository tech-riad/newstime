@extends('frontend.layouts.app')

@section('content')
<div class="top-news">
    <div class="container-fluid">
        <div class="row">
            @foreach($news as $n)
            <div class="col-md-4 mt-2">
                <div class="tn-img">
                    <img src="{{asset('frontend/img/top-news-2.jpg')}}" />
                    <div class="tn-content">
                        <div class="tn-content-inner">
                            <a class="tn-date" href="{{route('show',$n->id)}}"><i
                                    class="far fa-clock"></i>{{@$n->published_date}}</a>
                            <a class="tn-title" href="{{route('show',$n->id)}}">{{@$n->title}}</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</div>
@endsection
