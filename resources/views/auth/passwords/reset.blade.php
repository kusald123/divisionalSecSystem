@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Reset Password</div>

                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/reset') }}">
<<<<<<< HEAD
                        {!! csrf_field() !!}
=======
<<<<<<< HEAD
                        {!! csrf_field() !!}
=======
                        {{ csrf_field() }}
>>>>>>> e055a0f7cc05b2a4e3d0659f2d15cb2a10be7c56
>>>>>>> 9433c531a44c6f164c418979d3209923dfbd288e

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 9433c531a44c6f164c418979d3209923dfbd288e
                            <label class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ $email or old('email') }}">
<<<<<<< HEAD
=======
=======
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}">
>>>>>>> e055a0f7cc05b2a4e3d0659f2d15cb2a10be7c56
>>>>>>> 9433c531a44c6f164c418979d3209923dfbd288e

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 9433c531a44c6f164c418979d3209923dfbd288e
                            <label class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password">
<<<<<<< HEAD
=======
=======
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">
>>>>>>> e055a0f7cc05b2a4e3d0659f2d15cb2a10be7c56
>>>>>>> 9433c531a44c6f164c418979d3209923dfbd288e

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
<<<<<<< HEAD
                            <label class="col-md-4 control-label">Confirm Password</label>
                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password_confirmation">
=======
<<<<<<< HEAD
                            <label class="col-md-4 control-label">Confirm Password</label>
                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password_confirmation">
=======
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
>>>>>>> e055a0f7cc05b2a4e3d0659f2d15cb2a10be7c56
>>>>>>> 9433c531a44c6f164c418979d3209923dfbd288e

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
<<<<<<< HEAD
                                    <i class="fa fa-btn fa-refresh"></i>Reset Password
=======
<<<<<<< HEAD
                                    <i class="fa fa-btn fa-refresh"></i>Reset Password
=======
                                    <i class="fa fa-btn fa-refresh"></i> Reset Password
>>>>>>> e055a0f7cc05b2a4e3d0659f2d15cb2a10be7c56
>>>>>>> 9433c531a44c6f164c418979d3209923dfbd288e
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
