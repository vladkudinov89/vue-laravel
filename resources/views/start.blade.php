@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-sm-4">
            <div class="btn-toolbar justify-content-center" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group mr-2" role="group" aria-label="First group">
                    <a href="#1" type="button" class="btn btn-secondary">
                        Example Component
                    </a>
                    <a href="#2" type="button" class="btn btn-secondary">
                        PropComponent
                    </a>
                    <a href="#3" type="button" class="btn btn-secondary">
                        Ajax Component
                    </a>
                </div>
            </div>
        </div>

    </div>

    <div class="row">

        <div class="col-sm-12">
            <div class="owl-carousel owl-theme mt-5">
                <div class="row m-2" data-hash="1">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body" style="min-height: 720px">
                                <h2 class="text-center">#1 Example component</h2>
                                <example-component></example-component>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row m-2" data-hash="2">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body" style="min-height: 720px">
                                <h2 class="text-center">#2 PropComponent</h2>
                                <prop-component :urldata="{{json_encode($url_data)}}"></prop-component>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row m-2" data-hash="3">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body" style="min-height: 720px">
                                <h2 class="text-center">#3 Ajax component</h2>
                                <ajax-component></ajax-component>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div>

    {{--<example-component></example-component>--}}




@endsection

