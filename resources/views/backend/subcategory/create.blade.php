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

                    <form action="{{ isset($subcategories)? route('admin.subcategory.update',$subcategories->id) : route('subcategory.store') }}" method="post">
                        @csrf
                        @if(isset($subcategories))
                        @method('PUT')
                        @endif

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" name="name" id="name" value="{{@$subcategories->name ?? old('name')}}">
                                    @if($errors->has('name'))
                                    <div class="error">{{ $errors->first('name') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        @if(isset($subcategories))
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
