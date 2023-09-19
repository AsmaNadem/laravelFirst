@extends('index')
@section('content')

<a href="example/create">Create</a>

<table width="100%">
{{--    <caption>My table</caption>--}}
    <thead>
        <tr>
            <th>Name</th>
            <th>Status</th>
            <th>Show</th>
            <th>Content</th>
            <th>created</th>
            <th>updated</th>
            <th>deleted</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>

    @each('example.data',$test,'data','example.empty_data')
{{--    @foreach($test as $data)--}}
{{--        <tr>--}}
{{--            <td>{{$data->name}}</td>--}}
{{--            <td>{{$data->cont}}</td>--}}
{{--            <td>{{$data->created_at}}</td>--}}
{{--            <td>{{$data->updated_at}}</td>--}}
{{--            <td>{{$data->deleted_at}}</td>--}}
{{--            <td>--}}
{{--                <a href="example/{{$data->id}}/edit">Edit</a>--}}
{{--                <a href="example/{{$data->id}}">Show</a>--}}
{{--                <form action="{{route('example.destroy',['example'=>$data->id])}}" method="post">--}}
{{--                    @csrf--}}
{{--                    @method('delete')--}}
{{--                    <input type="submit" value="Delete">--}}
{{--                </form>--}}

{{--                <form action="{{route('example.force',['example'=>$data->id])}}" method="post">--}}
{{--                    @csrf--}}
{{--                    @method('delete')--}}
{{--                    <input type="submit" value="forceDelete">--}}
{{--                </form>--}}
{{--            </td>--}}
{{--            --}}{{----}}{{--            <td>--}}

{{--                <a href="example/{{$data->id}}">Show</a>--}}
{{--                <form action="{{route('example.destroy',['example'=>$data->id])}}" method="post">--}}
{{--                    @csrf--}}
{{--                    @method('delete')--}}
{{--                    <input type="submit" value="Delete">--}}
{{--                </form>--}}
{{--            </td>--}}


{{--        </tr>--}}
{{--    @endforeach--}}
    </tbody>
</table>
@endsection

{{--<form action="{{route('example.destroy',['example'=>1 ])}}" method="post">--}}
{{--    @csrf--}}
{{--    @method('delete')--}}
{{--    <input type="submit" value="Delete">--}}
<!--</form>-->

{{--welcome ya ossiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii--}}

