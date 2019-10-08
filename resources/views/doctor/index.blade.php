@extends('layouts/_tabcontent_company')

@section('tabcontent')
<form class="form-horizontal" method="POST" action="/dentist/doctor",>
        {{ csrf_field() }} 
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label">医師の名前<span style='color:red;'> *</span></label>

            <div class="col-md-6">
                <input id="name" type="name" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
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
    
    @foreach($data as $doctor)
    <div class="container">

            <table>
                <tr>
                    <td>{{ "医師の名前"  }}</td>
                    <td>{{ $doctor->name }}</td>
                </tr>
            </table>
    </div>  
    @endforeach

@endsection
