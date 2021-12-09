@extends('ad::Admin.form')


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
                        <i class="fa fa-edit"></i> {{$title}}
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-lg-12">

                <form role="form" method="post" action="">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>Name</label>
                        <input name="name" value="{{old('name', $category->name)}}" class="form-control">
                    </div>


                    <button type="submit" class="btn btn-default">Submit Button</button>
                    <button type="reset" class="btn btn-default">Reset Button</button>

                </form>

            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->
@endsection
@section('scripts')

@endsection
