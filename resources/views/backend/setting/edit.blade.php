@extends('backend.layouts.app')
@section('content')
<div class="content-wrapper">
    <div class="card new-table">
        <div class="card-header">
            <h6>Setting Edit</h6>
        </div>
        <div class="card-body">

            <form action="{{route('admin.generalsetting.update',$setting->id)}}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input id="name" name="name" type="text " class="form-control"
                                value="{{@$setting->name ?? @old('name')}}" class="@error('name') is-invalid @enderror">

                            @error('name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-8">
                        <label for="customFile">Website Logo</label>
                        <div class="custom-file">
                            <input type="file" name="image" class="custom-file-input" id="logoimage"
                                onchange="document.getElementById('showlogoimage').src = window.URL.createObjectURL(this.files[0])"
                                class="@error('image') is-invalid @enderror">
                            <label class="custom-file-label" for="logoimage">Choose Image</label>
                            @error('image')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <img class="mt-2 d-none" id="showlogoimage" alt="image" width="100" height="100" />
                        @if ($setting->image)
                        <div class="old_image mt-2">
                            <label class="mb-0" for="">Old Image:</label><br>
                            <img class="mt-2" id="oldimage" src="{{ asset($setting->image) }}" alt="image" width="100"
                                height="100" />
                        </div>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input id="email" name="email" type="text " class="form-control"
                                value="{{@$setting->email ?? @old('email')}}"
                                class="@error('email') is-invalid @enderror">

                            @error('email')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input id="phone" name="phone" type="text " class="form-control"
                                value="{{@$setting->phone ?? @old('phone')}}"
                                class="@error('phone') is-invalid @enderror">

                            @error('phone')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="location" class="form-label">Location</label>
                            <input id="location" name="location" type="text " class="form-control"
                                value="{{@$setting->location ?? @old('location')}}"
                                class="@error('location') is-invalid @enderror">

                            @error('location')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="facebook" class="form-label">Facebook</label>
                            <input id="facebook" name="facebook" type="text " class="form-control"
                                value="{{@$setting->facebook ?? @old('facebook')}}"
                                class="@error('facebook') is-invalid @enderror">

                            @error('facebook')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="instagram" class="form-label">Instagram</label>
                            <input id="instagram" name="instagram" type="text " class="form-control"
                                value="{{@$setting->instagram ?? @old('instagram')}}"
                                class="@error('instagram') is-invalid @enderror">

                            @error('instagram')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="twitter" class="form-label">Twitter</label>
                            <input id="twitter" name="twitter" type="text " class="form-control"
                                value="{{@$setting->twitter ?? @old('twitter')}}"
                                class="@error('twitter') is-invalid @enderror">

                            @error('twitter')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="linkdein" class="form-label">Linkdein</label>
                            <input id="linkdein" name="linkdein" type="text " class="form-control"
                                value="{{@$setting->linkdein ?? @old('linkdein')}}"
                                class="@error('linkdein') is-invalid @enderror">

                            @error('linkdein')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="youtube" class="form-label">Youtube</label>
                            <input id="youtube" name="youtube" type="text " class="form-control"
                                value="{{@$setting->youtube ?? @old('youtube')}}"
                                class="@error('youtube') is-invalid @enderror">

                            @error('youtube')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="notice" class="form-label">Notice</label>
                            <textarea class="form-control" id="editor" name="notice" rows="10"
                                class="@error('image') is-invalid @enderror">{{@$setting->notice ?? @old('notice')}}</textarea>

                            @error('notice')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary mt-4">Update</button>
            </form>


        </div>
    </div>
</div>


@endsection
