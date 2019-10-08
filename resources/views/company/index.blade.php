@extends('layouts/_tabcontent_company')

@section('tabcontent')


    <form class="form-horizontal" method="POST" action="{{ route('dentist.company.index') }}">
        {{ csrf_field() }}
        <input type="hidden" name="type" value="2">

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="col-md-4 control-label">メールアドレス<span style='color:red;'> *</span></label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email',$company->email) }}" required autofocus>

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>


        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label">技工名<span style='color:red;'> *</span></label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="name" value="{{ old('name',$company->name) }}" required>

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
                <input id="location" type="text" class="form-control" name="location" value="{{ old('location',$company->location) }}">

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
                <input id="telephone" type="tel" class="form-control" name="telephone" value="{{ old('telephone',$company->telephone) }}">

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
                    更新
                </button>
                <a class="btn btn-primary" href="{{route('dentist.companypreview')}}">プレビュー</a>
            </div>
        </div>
    </form>
@endsection
