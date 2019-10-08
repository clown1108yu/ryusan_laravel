@extends('layouts/_tabcontent_company')

@section('tabcontent')

<div>
    <div>
    {{ $company->name }}
    </div>
    <div>
    {{ $company->location }}
    </div>
    <div>
    {{ $company->telephone }}
    </div>

    
</div>

@endsection
