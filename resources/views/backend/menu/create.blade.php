@extends('backend.layouts.app')
@section('content')
<div  class="content-wrapper">
    <div class="card new-table">
        <div class="card-header">
            <h5 class="card-title">Category</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">

                    <form action="{{ isset($menuItem)? route('admin.menu.update',$menuItem->id) : route('admin.menu.store') }}" method="post">
                        @csrf
                        @if(isset($menuItem))
                        @method('PUT')
                        @endif

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Name</label>
                                    <input type="text" class="form-control" name="title" id="title" value="{{@$menuItem->title ?? old('title')}}">
                                    @if($errors->has('title'))
                                    <div class="error">{{ $errors->first('title') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-4" id="type">
                                <div class="mb-3">
                                    <label for="type" class="form-label">Type</label>
                                    <select class="form-control m-bot15" name="type">
                                       <option value="url"  @if (@$menuItem->type == 'url') selected @endif>Dirrect Url</option>
                                       <option value="category" @if (@$menuItem->type == 'category') selected @endif>Category</option>
                                     </select>
                                     @if($errors->has('type'))
                                    <div class="error">{{ $errors->first('type') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="url" class="form-label">Url</label>
                                    <input type="text" class="form-control" name="url" id="url" value="{{@$menuItem->url ?? old('url')}}">
                                    @if($errors->has('url'))
                                    <div class="error">{{ $errors->first('url') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-4 " id="category_id">
                                <div class="mb-3">
                                    <label for="category_id" class="form-label">Category</label>
                                    <select class="form-control m-bot15" name="category_id">

                                       <option value="">Select Category</option>

                                       @foreach ($categories as $item)

                                       <option value="{{$item->id}}" @if ($item->id == @$menuItem->category_id) selected

                                       @endif>{{$item->category_name}}</option>

                                       @endforeach


                                     </select>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="order" class="form-label">Order</label>
                                    <input type="text" class="form-control" name="order" id="order" value="{{@$menuItem->order ?? old('order')}}">

                                    @if($errors->has('order'))
                                    <div class="error">{{ $errors->first('order') }}</div>
                                    @endif
                                </div>
                            </div>



                        </div>


                        @if(isset($menuitem))
                        <button type="submit" class="btn btn-primary">Update</button>
                        @else
                        <button type="submit" class="btn btn-primary">Submit</button>
                        @endif
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('js')
@endpush
