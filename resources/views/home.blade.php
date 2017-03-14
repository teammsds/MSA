@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><h1 style="font-size:30px">Welcome</h1></div>

                <div class="content">
                    Congratulations!!!You are registered to the Missouri Soccer Association
                </div>

                <div class="panel-body">
                    <a href="{{action('RegisterController@index')}}">Click Here to Continue</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
