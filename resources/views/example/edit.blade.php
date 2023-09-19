@extends('index')
@section('content')

<form action="{{route('example.update',['example'=>$test->id])}}" method="post">
    @csrf
    @method('put')
    <input type="text" name="name" placeholder="Name" value="{{$test->name}}">
    @error('name')
    <p style="color: red">{{$message}}</p>
    @enderror
    <hr>
    <label for="show">Show Data</label>
    <input type="radio" name="show" value="1" @checked($test->show == 1) id="show"/>
    <hr>
    <hr>
    <label for="hide">Hide Data</label>
    <input type="radio" name="show" value="0" @checked($test->show == 0 ) id="hide"/>
    <hr>
    <label for="status">Status</label>
    <select name="status">
        <option @selected($test->status == 'enable') value="enable">Enable</option>
        <option @selected($test->status == 'disable')value="disable">Disable</option>
    </select>
    <hr>
    <textarea name="cont" placeholder="content" >{{$test->cont}}</textarea>
    @error('cont')
    <p style="color: red">{{$message}}</p>
    @enderror
    <hr>
    <input type="submit" value="update"/>
</form>
@endsection
