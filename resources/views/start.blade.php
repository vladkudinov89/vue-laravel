@extends('layouts.app')

@section('content')
{{--<example-component></example-component>--}}
<prop-component :urldata="{{json_encode($url_data)}}"></prop-component>
@endsection