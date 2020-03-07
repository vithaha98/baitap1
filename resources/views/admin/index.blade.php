@extends('admin.layouts.layouts')

@section('contents')
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3></h3>
                    {{$posts->count()}}
                    <p>Post</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="{{route('admin.post_show')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->

        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{$users->count()}}</h3>

                    <p>User </p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="{{route('admin.users_index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
    </div>



    </div>
@stop
{{--        <tbody>--}}
{{--        @foreach ($posts as $key =>$value)--}}

{{--            <tr>--}}
{{--                <th scope="row">{{$value->id}}</th>--}}
{{--                <td>{{$value->title}}</td>--}}
{{--                <td>{{$value->content}}</td>--}}
{{--            </tr>--}}
{{--        @endforeach--}}

{{--        </tbody>--}}
