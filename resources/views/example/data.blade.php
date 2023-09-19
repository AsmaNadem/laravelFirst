
<tr>
    <td>{{$data->name}}</td>
    <td>{{$data->status}}</td>
    <td>{{$data->show == 1? 'show':'hide'}}</td>
    <td>{{$data->cont}}</td>
    <td>{{$data->created_at}}</td>
    <td>{{$data->updated_at}}</td>
    <td>{{$data->deleted_at}}</td>
    <td>
        <a href="example/{{$data->id}}/edit">Edit</a>
        <a href="example/{{$data->id}}">Show</a>
        <form action="{{route('example.destroy',['example'=>$data->id])}}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Delete">
        </form>

        <form action="{{route('example.force',['example'=>$data->id])}}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="forceDelete">
        </form>
    </td>
</tr>
