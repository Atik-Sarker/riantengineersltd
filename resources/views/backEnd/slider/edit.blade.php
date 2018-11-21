@extends('layouts.master')

@section('title', 'Dashboard')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Blank page
            <small>it all starts here</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Examples</a></li>
            <li class="active">Blank page</li>
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
                            <h3 class="box-title">Update Slider</h3>
                        </div>
                        <!-- form start -->
                        <form role="form" name="edit-form" method="post" action="{{ route('slider.update', $slider->id) }}" enctype="multipart/form-data">

                            @csrf
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="slider_name">Slider Name</label>
                                    <input type="text" class="form-control{{ $errors->has('slider_name') ? ' is-invalid' : '' }}" id="slider_name" name="slider_name" placeholder="Slider name" value="{{ old('slider_name')? old('slider_name') : $slider->slider_name }}">

                                    @if ($errors->has('slider_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('slider_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="slider_title">Slider Title</label>
                                    <input type="text" class="form-control{{ $errors->has('slider_title') ? ' is-invalid' : '' }}" id="slider_title" name="slider_title" placeholder="Slider title" value="{{ old('slider_title') ? old('slider_title') : $slider->slider_title}}">

                                    @if ($errors->has('slider_title'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('slider_title') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="slider_subtitle">Slider Subtitle</label>
                                    <input type="text" class="form-control{{ $errors->has('slider_subtitle') ? ' is-invalid' : '' }}" id="slider_subtitle" name="slider_subtitle" placeholder="Slider Subtitle" value="{{ old('slider_subtitle') ?  old('slider_subtitle') :  $slider->slider_subtitle}}">

                                    @if ($errors->has('slider_subtitle'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('slider_subtitle') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-lg-3">
                                    <div class="checkbox{{ $errors->has('status') ? ' is-invalid' : '' }}">
                                        <label class="custom-checkbox">
                                            <input type="radio" name="status" value="1" > 
                                            <span class="checkmark"></span>
                                            Publish
                                        </label>
                                    </div>

                                    <div class="checkbox{{ $errors->has('status') ? ' is-invalid' : '' }}">
                                        <label class="custom-checkbox">
                                            <input type="radio" name="status" value="0" > 
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

                                <div class="col-lg-4">
                                    <div class="manage-image">
                                        <img src="{{asset('storage')}}/{{$slider->image}}" alt="">
                                    </div>
                                </div>
                                
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="slider_image">Upload Image</label>
                                        <input type="file" id="slider_image" name="slider_image" value="{{ old('slider_image') }}">
                                    </div>
                                    @if ($errors->has('slider_image'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('slider_image') }}</strong>
                                    </span>
                                    @endif
    
                                </div>
    
                            </div>


                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!--------------- form end   ------------------------------>



            </div>
            <div class="box-body">
                Start creating your amazing application!
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

    document.forms["edit-form"].elements["status"].value="{{$slider->status}}";
</script>
<!-- /.content-wrapper -->
@endsection
