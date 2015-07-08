@extends('layout')

@section('header')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/design_form.css') }}"/>
    <script src="{{ asset('js/jquery.autosize.js') }}"></script>
    <script>
       $(document).ready(function() {
           $('textarea').autosize();
       });
    </script>
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1>CREATE A QUESTION</h1>
                    </div>
                    <div class="panel-body">
                        {!! Form::open(['url'=>'quiz/design']) !!}
                        @include('design.form',['submit_text'=>'Add question'])
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop