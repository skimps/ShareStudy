@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Register</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('class_id') ? ' has-error' : '' }}">
                                <label for="class_id" class="col-md-4 control-label">Class</label>
                                <div class="col-md-6">
                                    <select name="class_id" class="custom-select">
                                        <option value="" selected="selected" disabled>選択してください</option>
                                        <option value="1A">1A</option>
                                        <option value="1B">1B</option>
                                        <option value="1C">1C</option>
                                        <option value="1D">1D</option>
                                        <option value="1E">1E</option>
                                        <option value="1F">1F</option>
                                        <option value="1G">1G</option>
                                        <option value="1H">1H</option>
                                        <option value="2A">2A</option>
                                        <option value="2B">2B</option>
                                        <option value="2C">2C</option>
                                        <option value="2D">2D</option>
                                        <option value="2E">2E</option>
                                        <option value="2F">2F</option>
                                        <option value="2G">2G</option>
                                        <option value="2H">2H</option>
                                        <option value="3A">3A</option>
                                        <option value="3B">3B</option>
                                        <option value="3C">3C</option>
                                        <option value="3D">3D</option>
                                        <option value="3E">3E</option>
                                        <option value="3F">3F</option>
                                        <option value="3G">3G</option>
                                        <option value="4A">4A</option>
                                        <option value="4B">4B</option>
                                        <option value="4C">4C</option>
                                        <option value="4D">4D</option>
                                        <option value="4E">4E</option>
                                        <option value="4F">4F</option>
                                        <option value="4G">4G</option>
                                    </select>
                                    @if ($errors->has('class_id'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('class_id') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Register
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
