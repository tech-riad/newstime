@extends('backend.layouts.app')
@section('content')

<div  class="content-wrapper">
    <div class="card new-table">
        <div class="card-header">
            <h5 class="card-title">News</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">

                    <form action="{{ isset($news)? route('admin.news.update',$news->id) : route('admin.news.store') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @if(isset($news))
                        @method('PUT')
                        @endif

                        <div class="row">

                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control" name="title" id="title" value="{{@$news->title ?? old('title')}}">
                                    @if($errors->has('title'))
                                    <div class="error">{{ $errors->first('title') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="category_id" class="form-label">Category</label>
                                    <select name="category_id" class="form-control" >
                                        <option value="">select</option>
                                        @foreach($categories as $cat)
                                        <option value="{{ $cat->id }}" @if ($cat->id == @$news->category_id) selected

                                            @endif>
                                            {{ $cat->category_name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="subcategory_id" class="form-label">Sub Category</label>
                                    <select name="subcategory_id" class="form-control" >
                                        <option value="">select</option>
                                        @foreach($subcategories as $cat)
                                        <option value="{{ $cat->id }}" @if ($cat->id == @$news->category_id) selected

                                            @endif>
                                            {{ $cat->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label for="customFile">Image</label>
                                <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input" id="customFile"
                                        onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])"
                                        class="@error('image') is-invalid @enderror">
                                    <label class="custom-file-label" for="customFile">Choose Image</label>

                                    @if($errors->has('image'))
                                    <div class="error">{{ $errors->first('image') }}</div>
                                    @endif
                                </div>
                                <img class="mt-2" id="image" alt="image" width="100" height="100" />

                                @if (isset($news) && $news->image)
                                    <div class="old_image mt-2">
                                        <label class="mb-0" for="">Old Image:</label><br>
                                        <img class="mt-2" id="oldimage" src="{{ asset($news->image) }}"
                                            alt="image" width="100" height="100" />
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="editor" class="form-label">Desctiption</label>
                                    <textarea class="form-control" id="editor" name="description"
                                        rows="3" style="background-color: #000">{{@$news->description ?? old('description')}}</textarea>
                                    @if($errors->has('description'))
                                    <div class="error">{{ $errors->first('description') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="form-check mb-4" >
                                    <input type="checkbox" class="form-check-input status" id="status" name="status" value="1" style="margin-top:15px"
                                        @if(isset($news)){{($news->status == 1)?'checked':''}}@endif>
                                    <label class="form-check-label" style="margin-left:5px;margin-top:3px;padding-top:5px;"
                                        for="status">Status</label>
                                    @if($errors->has('status'))
                                    <div class="error">{{ $errors->first('status') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        @if(isset($news))
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
    $("#image").hide();


    $("#customFile").change(function () {
        $("#image").show();
    });



</script>







@endpush
