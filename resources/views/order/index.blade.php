@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="pull-right">
                <a href=""><button type="button" class="btn btn-default">保存する</button></a>
                <a href=""><button type="button" class="btn btn-default">発注する</button></a>
                <a href=""><button type="button" class="btn btn-default">発注書を見る</button></a>
                <a href=""><button type="button" class="btn btn-default disabled" disabled>作成中</button></a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class='box-header with-border'>
                  <h3 class='box-title'><strong class='text-orange'>{{ $orders->total() }}</strong> 件が該当しました。</h3>
                </div>
                <div class="box-body table-responsive no-padding">
                    <div class="pull-left">
                        {{ $orders->links() }}
                    </div>
                    <div class="pull-right">
                        <p class="text-right mt-10 mr-10">
                        {{ $orders->currentPage() }} / {{ $orders->lastPage() }} ページ（{{ $orders->count() }} 件表示中）
                        </p>
                    </div>

                    <table class="table table-hover table-striped table-bordered">
                    <tr>
                        <th class="col-xs-2">発注ID</th>
                        <th>クリニック名</th>
                        <th>歯科医</td>
                        <th>患者</td>
                        <th>登録日</td>
                    </tr>
                    @foreach($orders as $order)
                    <tr>
                        <td>{{$order->id}}</td>
                        <td>{{$order->clinic}}</td>
                        <td>{{$order->doctor}}</td>
                        <td>{{$order->patient}}</td>
                        <td>{{$order->created_at}}</td>
                    </tr>
                    @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
