@include('layouts.header')
{{--@includeIf('layouts.message')--}}
@includeWhen(true,'layouts.message')
@yield('content')
@include('layouts.footer')
{{--@checkVal('UTC')--}}
{{--correct IS UTC--}}
{{--@elsecheckVal('300')--}}
{{--is 100--}}
{{--@else--}}
{{--    no value--}}
{{--@endcheckVal--}}
{{--    <br>--}}
{{--    @unlesscheckVal('UTC')--}}
{{--        is not equal UTC--}}
{{--    @endcheckVal--}}

{{$myvar}}
