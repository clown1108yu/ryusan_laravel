@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ Auth::user()->name }}</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class='text-center'>
                    @if(auth()->user()->type == config('const.role.TYPE_DENTIST'))
                    <a href="{{ route('dentist.company.index') }}"><button type="button" class="btn btn-app"><i class="fas fa-cog"></i><br>設定</button></a>
                    <a href="{{ route('dentist.order.create') }}"><button type="button" class="btn btn-app"><i class="fas fa-clipboard"></i><br>オーダー</button></a>
                    <a href="{{ route('dental-engineer.order.index') }}"><button type="button" class="btn btn-app"><i class="fas fa-clipboard-list"></i><br>オーダーリスト</button></a>
                    @elseif(auth()->user()->type == config('const.role.TYPE_DENTAL_ENGINEER'))
                    <a href="{{ route('dental-engineer.company.index') }}"><button type="button" class="btn btn-app"><i class="fas fa-cog"></i><br>設定</button></a>
                    <a href="{{ route('dental-engineer.order.create') }}"><button type="button" class="btn btn-app"><i class="fas fa-clipboard"></i><br>オーダー</button></a>
                    <a href="{{ route('dental-engineer.order.index') }}"><button type="button" class="btn btn-app"><i class="fas fa-clipboard-list"></i><br>オーダーリスト</button></a>
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
