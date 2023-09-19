
@extends('index')
@section('content')

<p>{{$test->id}}</p>
<p>{{$test->name}}</p>
<p>{{$test->cont}}</p>
<p>{{$test->created_at}}</p>
<p>{{$test->updated_at}}</p>

@endsection
