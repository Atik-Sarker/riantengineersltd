@extends('layouts.master')

@section('title', 'Dashboard')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Edit Logo
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Logo</a></li>
            <li class="active">Edit</li>
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
                            <h3 class="box-title">Create Logo</h3>
                        </div>
                        <!-- form start -->
                        <form role="form" name="edit-form" method="post" action="{{ route('logo.update', $logos->id) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="box-body">
                                <div class="form-group">
                                    <div class="form-image">
                                        <img src="{{ asset('storage') }}/{{$logos->image}}" alt="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="image">Update Image</label>
                                    <input type="file" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" id="slider_name" name="image" value="{{ old('image') }}">

                                    @if ($errors->has('image'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label>Logo Type</label>
                                    <select class="form-control" name="type">
                                        <option value="0">Select</option>
                                        <option value="1">Logo</option>
                                        <option value="2">Our Clients</option>
                                        <option value="3">Our Partner</option>
                                    </select>
                                    @if ($errors->has('slider_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                    <div class="col-lg-4">
                                        <div class="checkbox{{ $errors->has('status') ? ' is-invalid' : '' }}">
                                            <label class="custom-checkbox">
                                                <input type="radio" name="status" value="1" > 
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
                <!-- Start creating your amazing application! -->
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
<script>
    document.forms["edit-form"].elements["type"].value={{$logos->type}};

    document.forms["edit-form"].elements["status"].value={{$logos->status}};
</script>
<!-- /.content-wrapper --
@endsection
