@extends('index')
@section('content')

    {{$myvar}}
<form action="{{route('example.store')}}" method="post">
   @csrf



    <input type="text" name="name" placeholder="Name" value="{{old('name')}}">
    @error('name')
    <p style="color: red">{{$message}}</p>
    @enderror
    <hr>

    <textarea name="cont" placeholder="Content">{{old('cont')}}</textarea>
    @error('cont')
    <p style="color: red">{{$message}}</p>
    @enderror
    <hr>
        <label for="show">Show Data</label>
        <input type="radio" name="show" value="1" id="show"/>
    <hr>
    <hr>
        <label for="hide">Hide Data</label>
        <input type="radio" name="show" value="0" id="hide"/>
    <hr>
<label for="status">Status</label>
    <select name="status">
        <option value="enable">Enable</option>
        <option value="disable">Disable</option>
    </select>
    <hr>
   <input type="submit" value="create">
</form>

@endsection

@push('css')
    <style>
       h1{
        color: #2d4373;
        }
    </style>
{{--    <h4>hiii osssssiiii</h4>--}}
@endpush


@push('js')
    <script>
        // alert('you are creating a new record')
    </script>
@endpush

