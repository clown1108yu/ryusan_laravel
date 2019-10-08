@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <ul class="nav nav-pills">
                @if(auth()->user()->type == config('const.role.TYPE_DENTAL_ENGINEER'))
                <li @if($procname == "company") class="nav-item active" @endif ><a href="{{ route('dental-engineer.company.index') }}" class="active nav-link">アカウント情報</a> </li>
                <li @if($procname == "doctor") class="nav-item active" @endif> <a href="{{ route('dental-engineer.doctor.index') }}" class="nav-link">デフォルト値登録</a> </li>
                <li @if($procname == "user") class="nav-item active" @endif> <a href="{{ route('dental-engineer.user.index') }}" class="nav-link">ユーザ登録</a> </li>
                <li @if($procname == "dentalengineer") class="nav-item active" @endif> <a href="{{ route('home') }}" class="nav-link">病院メモ</a> </li>
                @elseif(auth()->user()->type == config('const.role.TYPE_DENTIST'))
                <li @if($procname == "company") class="nav-item active" @endif ><a href="{{ route('dentist.company.index') }}" class="active nav-link">アカウント情報</a> </li>
                <li @if($procname == "patient") class="nav-item active" @endif> <a href="{{ route('dentist.patient.index') }}" class="nav-link">患者登録</a> </li>
                <li @if($procname == "doctor") class="nav-item active" @endif> <a href="{{ route('dentist.doctor.index') }}" class="nav-link">医師登録</a> </li>
                <li @if($procname == "default") class="nav-item active" @endif> <a href="{{ route('dentist.doctor.index') }}" class="nav-link">デフォルト値登録</a> </li>
                <li @if($procname == "user") class="nav-item active" @endif> <a href="{{ route('dentist.user.index') }}" class="nav-link">ユーザ登録</a> </li>
                <li @if($procname == "dentalengineer") class="nav-item active" @endif> <a href="{{ route('home') }}" class="nav-link">歯科技工メモ</a> </li>
                @endif
            </ul>

            @yield('tabcontent')
        </div>
    </div>
</div>
@endsection
