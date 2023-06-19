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

                    <form action="{{ isset($categories)? route('admin.category.update',$categories->id) : route('category.store') }}" method="post">
                        @csrf
                        @if(isset($categories))
                        @method('PUT')
                        @endif

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="category_name" class="form-label">Name</label>
                                    <input type="text" class="form-control" name="category_name" id="category_name" value="{{@$categories->category_name ?? old('category_name')}}">
                                    @if($errors->has('category_name'))
                                    <div class="error">{{ $errors->first('category_name') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control" name="title" id="title" value="{{@$categories->title ?? old('title')}}">
                                    @if($errors->has('title'))
                                    <div class="error">{{ $errors->first('title') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="editor" class="form-label">Desctiption</label>
                                    <textarea class="form-control" id="editor" name="description"
                                        rows="3">{{@$categories->description ?? old('description')}}</textarea>
                                    @if($errors->has('description'))
                                    <div class="error">{{ $errors->first('description') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        @if(isset($categories))
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
<script>
     $("#accounts_setting").addClass('active');
     $('#settings-nav').removeClass('d-none');
</script>
@endpush
