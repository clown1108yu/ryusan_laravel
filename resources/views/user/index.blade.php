@extends('layouts/_tabcontent_company')

@section('tabcontent')
    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}
        <input type="hidden" name="type" value="2">

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="col-md-4 control-label">メールアドレス<span style='color:red;'> *</span></label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('login_id') ? ' has-error' : '' }}">
            <label for="login_id" class="col-md-4 control-label">ログインID<span style='color:red;'> *</span></label>

            <div class="col-md-6">
                <input id="login_id" type="text" class="form-control" name="login_id" value="{{ old('login_id') }}" required>

                @if ($errors->has('login_id'))
                    <span class="help-block">
                        <strong>{{ $errors->first('login_id') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password" class="col-md-4 control-label">パスワード<span style='color:red;'> *</span></label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control" name="password" required>

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label">技工名<span style='color:red;'> *</span></label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required>

                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
            <label for="location" class="col-md-4 control-label">所在地</label>

            <div class="col-md-6">
                <input id="location" type="text" class="form-control" name="location" value="{{ old('location') }}">

                @if ($errors->has('location'))
                    <span class="help-block">
                        <strong>{{ $errors->first('location') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('telephone') ? ' has-error' : '' }}">
            <label for="telephone" class="col-md-4 control-label">電話番号</label>

            <div class="col-md-6">
                <input id="telephone" type="tel" class="form-control" name="telephone" value="{{ old('telephone') }}">

                @if ($errors->has('telephone'))
                    <span class="help-block">
                        <strong>{{ $errors->first('telephone') }}</strong>
                    </span>
                @endif
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
@endsection
