@extends('admin.layouts.layouts')

@section('contents')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Cap nhat</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" method="post" action="{{route('admin.users_store')}}" enctype="multipart/form-data">
            {{method_field('put')}}
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label >Name </label>
                    @error('name')
                    <strong style="color:red;">{{$message}}</strong>
                    @enderror
                    <input type="number" name="id" class="form-control" id="exampleInputEmail1" hidden="hidden" autocomplete="off">
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1"   autocomplete="off">
                </div>
                <div class="form-group">
                    <label >Email</label>
                    @error('email')
                    <strong style="color:red;">{{$message}}</strong>
                    @enderror
                    <input  name="email" class="form-control" id="exampleInputPassword1" >
                </div>
                <div class="form-group">
                    <label >Birthday</label>
                    @error('dob')
                    <strong style="color:red;">{{$message}}</strong>
                    @enderror
                    <input type="date"  name="dob" class="form-control" id="exampleInputPassword1"  >
                </div>
                <div class="form-group">
                    <label >Password</label>
                    @error('password')
                    <strong style="color:red;">{{$message}}</strong>
                    @enderror
                    <input type="password"  name="password" class="form-control" id="exampleInputPassword1"  >
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@stop
