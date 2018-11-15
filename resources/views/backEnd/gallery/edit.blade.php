@extends('layouts.master')

@section('title', 'Dashboard')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Gallery
            <small>it all starts here</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Gallery</a></li>
            <li class="active">Manage</li>
        </ol>

        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif

    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <!-------------------- form start  ------------------------------->
                <!-- general form elements -->
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Create Gallery</h3>
                        </div>
                        <!-- form start -->
                        <form role="form" name="edit-form" method="post" action="{{ route('gallery.update', $gallery->id) }}" enctype="multipart/form-data">

                            @csrf
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                <input type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" id="title" name="title" placeholder="Image Title" value="{{ old('title') ? old('title') : $gallery->title }}">

                                    @if ($errors->has('title'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="col-lg-12">
                                    <div class="manage-image">
                                        <img src="{{asset('storage')}}/{{$gallery->image}}" alt="">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="image"> Upload Image </label>
                                    <input type="file" id="image" class="form-control" name="image" value="{{ old('image') }}" class="custom-file-input">
                                    
                                    @if ($errors->has('image'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="col-lg-4">
                                    <div class="checkbox{{ $errors->has('status') ? ' is-invalid' : '' }}">
                                        <label class="custom-checkbox">
                                            <input type="radio" name="status" value="1" value="{{ old('status') }}"> 
                                            <span class="checkmark"></span>
                                            Publish
                                        </label>
                                    </div>
                                    @if ($errors->has('status'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('status') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="col-lg-4">
                                    <div class="checkbox{{ $errors->has('status') ? ' is-invalid' : '' }}">
                                        <label class="custom-checkbox">
                                            <input type="radio" name="status" value="0" value="{{ old('status') }}"> 
                                            <span class="checkmark"></span>
                                            Unpublished
                                        </label>
                                    </div>
                                    @if ($errors->has('status'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('status') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!--------------- form end   ------------------------------>
            </div>
            <div class="box-body">
                {{-- Start creating your amazing application! --}}
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                Footer
            </div>
            <!-- /.box-footer-->
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
</div>
<script>;

    document.forms["edit-form"].elements["status"].value={{$gallery->status}};
</script>
<!-- /.content-wrapper --
@endsection
