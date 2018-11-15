@extends('layouts.master')

@section('title', 'Dashboard')

@section('content')
{!! Toastr::message() !!}
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1 class="text-center">
            <a href="{{route('gallery.create')}}" class="btn btn-info">Add New</a>
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
                            <h3 class="box-title">Gallery Manage</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table class="table table-bordered text-center">
                                <tbody>
                                    <tr>
                                        <th>No.</th>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    @foreach($gallerys as $gallery)
                                    <tr>
                                        <td>{{ $loop->index +1}}</td>
                                        <td>{{ $gallery->title }}</td>
                                        <td class="manage-image"> <img src="{{asset('storage')}}/{{$gallery->image}}" alt="" height="200px" ; width="200px"></td>
                                        <td>
                                            {{ $gallery->status? 'Publish' : 'Unpublished' }}
                                            
                                            @if($gallery->status==1)
                                            <form action="{{route('gallery.status', $gallery->id)}}" method="POST">
                                            @csrf
                                            <input type="hidden" name="status" value="0">
                                            <button type="submit" class="thumbs_up" title="unpublished"><i class="fa fa-thumbs-down"></i></button>
                                            </form>
                                            @else
                                            <form action="{{route('gallery.status', $gallery->id)}}" method="POST">
                                                @csrf
                                                <input type="hidden" name="status" value="1">
                                                <button type="submit" class="thumbs_down" title="published"><i class="fa fa-thumbs-up"></i></button>
                                            </form>
                                            @endif
                                        </td>

                                        <td>
                                            <a href="{{ route('gallery.edit', $gallery->id) }}"><span class="glyphicon glyphicon-edit"></span></a> 
                                            |
                                            <form id="delete-form-{{$gallery->id}}" action="{{ route('gallery.destroy', $gallery->id) }}" method="get" style="display: none">

                                                @csrf
                                                {{ method_field('DELETE') }}
                                            </form>
                                            <a href="" onclick="
                                    if (confirm('Are you sure, You want to delete this?'))
                                    {
                                    event.preventDefault();document.getElementById('delete-form-{{$gallery->id}}').submit()
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
                           {{ $gallerys->links()}}
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

<!-- /.content-wrapper --
@endsection
