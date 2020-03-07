@extends('layouts')

@section('contents')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Cap nhat</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" method="post" action="{{route('update',$users->id)}}" enctype="multipart/form-data">
        {{method_field('put')}}
        @csrf
        <div class="card-body">
            <img  src="{{url('storage/'.$users->avatar)}}" alt="{{$users->avatar}}" class="brand-image img-circle elevation-3" width="100px">

            <div class="form-group">
                <label >Name </label>

                <input type="number" name="id" class="form-control" id="exampleInputEmail1" value="{{$users->id}}" hidden="hidden" autocomplete="off">
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{$users->name}}"  autocomplete="off">
            </div>
            <div class="form-group">
                <label >Email</label>
                <input  name="email" class="form-control" id="exampleInputPassword1" value="{{$users->email}}" >
            </div>
            <div class="form-group">
                <label >Birthday</label>
                <input type="date"  name="dob" class="form-control" id="exampleInputPassword1" value="{{$users->dob}}" >
            </div>
            <div class="form-group">
                <a href="">
                    <img src="" alt="">
                </a>

                <td width="30"><input type="file" name="select_file" />
                </td>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@stop
