@extends('layouts.default')

@section('content')

<div class="row">

    <div class="col-md-6">

        <h1>Reset your password</h1>

            {{Form::open()}}

                {{ Form::hidden('token', $token) }}

                    <div class="form-group">
                         {{ Form::label('email', 'Email:') }}
                         {{ Form::email('email', null, ['class' => 'form-control', 'required' => 'required']) }}
                    </div>

                    <div class="form-group">
                        {{ Form::label('password', 'Password:') }}
                        {{ Form::password('password', ['class' => 'form-control', 'required' => 'required']) }}
                    </div>

                    <div class="form-group">
                        {{ Form::label('password_confirmation', 'Password confirmation:') }}
                        {{ Form::password('password_confirmation',   ['class' => 'form-control', 'required' => 'required']) }}
                    </div>

                    <div class="form-group">
                        {{ Form::submit('Reset', ['class' => 'btn btn-primary form-control'])}}
                    </div>

                {{Form::close()}}

    </div>

</div>

@endsection