@extends('layouts.master')

@section('title', 'Dashboard')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1 class="text-center">
            <a href="{{route('slider.create')}}" class="btn btn-info">Add New</a>
        </h1>
        

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

                <!-------------------- table start  ------------------------------->

                <div class="col-md-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Slider Manage</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th>No.</th>
                                        <th>Slider Name</th>
                                        <th>Slider Title</th>
                                        <th>Slider subtitle</th>
                                        <th>Slider Image</th>
                                        <th>Slider Status</th>
                                        <th>Action</th>
                                    </tr>
                                    @foreach($sliders as $slider)
                                    <tr>
                                        <td>{{ $loop->index +1}}</td>
                                        <td>{{ $slider->slider_name }}</td>
                                        <td>{{ $slider->slider_title }}</td>
                                        <td>{{ $slider->slider_subtitle }}</td>
                                        <td class="manage-image"> <img src="{{asset('storage')}}/{{$slider->image}}" alt="" height="200px" ; width="200px"></td>
                                        <td>{{ $slider->status? 'Active' : 'Unpublished' }}

                                            @if($slider->status==1)
                                            <form action="{{route('slider.status', $slider->id)}}" method="POST">
                                            @csrf
                                            <input type="hidden" name="status" value="0">
                                            <button type="submit" class="thumbs_up" title="unpublished"><i class="fa fa-thumbs-down"></i></button>
                                            </form>
                                            @else
                                            <form action="{{route('slider.status', $slider->id)}}" method="POST">
                                                @csrf
                                                <input type="hidden" name="status" value="1">
                                                <button type="submit" class="thumbs_down" title="published"><i class="fa fa-thumbs-up"></i></button>
                                            </form>
                                            @endif

                                        </td>

                                        <td>
                                            <a href="{{ route('slider.edit', $slider->id) }}"><span class="glyphicon glyphicon-edit"></span></a> 
                                            |
                                            <form id="delete-form-{{ $slider->id }}" action="{{ route('slider.destroy', $slider->id) }}" method="get" style="display: none">

                                                @csrf
                                                {{ method_field('DELETE') }}
                                            </form>
                                            <a href="" onclick="
                                    if (confirm('Are you sure, You want to delete this?'))
                                    {
                                    event.preventDefault();document.getElementById('delete-form-{{ $slider->id }}').submit()
                                    }
                                    else
                                    {
                                    event.preventDefault();
                                    }
                                    "><span class="glyphicon glyphicon-trash"></span></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer clearfix pull-right">
                           {{ $sliders->links()}}
                        </div>
                    </div>
                    <!-- /.box -->

                    <!--------------- table  end   ------------------------------>



                </div>
                <div class="box-body">
<!--                    Start creating your amazing application!-->
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

<!-- /.content-wrapper -->
@endsection
