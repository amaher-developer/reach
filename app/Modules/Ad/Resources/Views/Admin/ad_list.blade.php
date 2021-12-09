@extends('ad::Admin.list')


@section('styles')

@endsection
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    {{$title}}
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="{{route('home')}}">Dashboard</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-table"></i> {{$title}}
                        <a href="{{route('createAd')}}" class="text-right btn btn-success" style="float: right;">Add Ad</a>

                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-lg-12">
                <h2>{{$title}}</h2>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Start Date</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($ads) > 0)
                        @foreach($ads as $ad)
                        <tr>
                            <td>{{$ad->id}}</td>
                            <td>{{$ad->title}}</td>
                            <td>{{$ad->category->name}}</td>
                            <td>{{\Carbon\Carbon::parse($ad->start_date)->toDateString()}}</td>
                            <td>{{$ad->status}}</td>
                            <td><a href="{{route('editAd', $ad->id)}}"><i class="fa fa-edit"></i> Edit</a>
                                <a href="{{route('deleteAd', $ad->id)}}"><i class="fa fa-trash"></i> Delete</a> </td>
                        </tr>
                        @endforeach
                        @else
                            <tr><td colspan="6" class="text-center">No records found!</td></tr>
                        @endif
                        </tbody>
                    </table>
                    <div class="col-lg-5 col-md-5 col-md-offset-5">
                        {!! $ads->render()  !!}
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->


    </div>
    <!-- /.container-fluid -->
@endsection
@section('scripts')

@endsection
