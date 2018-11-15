@extends('layouts.master')

@section('title', 'Dashboard')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1 class="text-center">
            <a href="{{route('logo.create')}}" class="btn btn-info">Add New</a>
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
                            <h3 class="box-title">Logo Manage</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table class="table table-bordered text-center">
                                <tbody>
                                    <tr>
                                        <th>No.</th>
                                        <th> Type</th>
                                        <th> Image</th>
                                        <th> Status</th>
                                        <th>Action</th>
                                    </tr>
                                    @foreach($logos as $logo)
                                    <tr>
                                        <td>{{ $loop->index +1}}</td>
                                        <td>
                                            @if($logo->type == 1)
                                            {{ "Logo" }}
                                            @elseif($logo->type == 2)
                                            {{ "Our Clients" }}
                                            @elseif($logo->type == 3)
                                            {{ "Our Partner" }}
                                            @endif
                                        </td>
                                        <td class="manage-image"> <img src="{{asset('storage')}}/{{$logo->image}}" alt="" height="200px" ; width="200px"></td>
                                        <td>{{ $logo->status? 'Publish' : 'Unpublished' }}
                                        
                                                @if($logo->status==1)
                                                <form action="{{route('logo.status', $logo->id)}}" method="POST">
                                                @csrf
                                                <input type="hidden" name="status" value="0">
                                                <button type="submit" class="thumbs_up" title="unpublished"><i class="fa fa-thumbs-down"></i></button>
                                                </form>
                                                @else
                                                <form action="{{route('logo.status', $logo->id)}}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="status" value="1">
                                                    <button type="submit" class="thumbs_down" title="published"><i class="fa fa-thumbs-up"></i></button>
                                                </form>
                                                @endif
                                        
                                        </td>

                                        <td>
                                            <a href="{{ route('logo.edit', $logo->id) }}"><span class="glyphicon glyphicon-edit"></span></a> 
                                            |
                                            <form id="delete-form-{{ $logo->id }}" action="{{ route('logo.destroy', $logo->id) }}" method="get" style="display: none">

                                                @csrf
                                                {{ method_field('DELETE') }}
                                            </form>
                                            <a href="" onclick="
                                    if (confirm('Are you sure, You want to delete this?'))
                                    {
                                    event.preventDefault();document.getElementById('delete-form-{{ $logo->id }}').submit()
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
                           {{ $logos->links()}}
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

@section('footer-script')
{!! Toastr::message() !!}
@endsection