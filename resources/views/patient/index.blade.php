@extends('layouts/_tabcontent_company')

@section('tabcontent')
<form class="form-horizontal" method="POST" action="patient",>
        {{ csrf_field() }} 
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label">患者の名前<span style='color:red;'> *</span></label>

            <div class="col-md-6">
                <input id="name" type="name" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
            <label for="age" class="col-md-4 control-label">患者の年齢<span style='color:red;'> *</span></label>

            <div class="col-md-6">
                <input id="age" type="age" class="form-control" name="age" value="{{ old('age') }}" required autofocus>

                @if ($errors->has('age'))
                    <span class="help-block">
                        <strong>{{ $errors->first('age') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group{{ $errors->has('sex') ? ' has-error' : '' }}">
            <label for="sex" class="col-md-4 control-label">患者の性別<span style='color:red;'> *</span></label>

            <div class="col-md-6">
                <input id="sex" type="sex" class="form-control" name="sex" value="{{ old('sex') }}" required autofocus>

                <!-- <select name="sex">
                    <option value="man">男性</option>
                    <option value="women">女性</option>
                </select> -->
                @if ($errors->has('sex'))
                    <span class="help-block">
                        <strong>{{ $errors->first('sex') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group{{ $errors->has('company_id') ? ' has-error' : '' }}">
            <input type="hidden" name="company_id" value=<?php echo $company_id; ?>>
        </div>

        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    Register
                </button>
            </div>
        </div>
    </form>
        
            <table>
                <tr>
                    <td>{{ "患者の名前"  }}</td>
                    <td>{{ "患者の年齢" }}</td>
                    <td>{{ "患者の性別" }}</td>
                </tr>
                @foreach($data as $patient)
                <tr>
                    <td>{{ $patient->name }}</td>
                    <td>{{ $patient->age }}</td>
                    <td>{{ $patient->sex }}</td>

                </tr>
                @endforeach
            </table>

@endsection
