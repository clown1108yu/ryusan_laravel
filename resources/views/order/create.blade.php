@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="pull-right">
                <a href=""><button type="button" class="btn btn-default">保存する</button></a>
                <a href=""><button type="button" class="btn btn-default">発注する</button></a>
                <a href=""><button type="button" class="btn btn-default">発注書を見る</button></a>
                <a href=""><button type="button" class="btn btn-creating btn-default disabled" disabled>作成中</button></a>
            </div>
        </div>
    </div>

    <div class="row">

        <hr style="margin: 10px 0;">

        <ul class="nav nav-pills nav-justified">
            @include('order._create_tab')
        </ul>

        <hr style="margin: 10px 0;">

        <div class="tab-content">
          <div role="tabpanel" class="tab-pane fade active in" id="sample-pill1">
            @include('order._create_panel_select_dental_engineer')
          </div>
          <div role="tabpanel" class="tab-pane fade" id="sample-pill2">
            @include('order._create_panel_select_order_detail')
          </div>
          <div role="tabpanel" class="tab-pane fade" id="sample-pill3">
            @include('order._create_panel_select_draw')
          </div>
          <div role="tabpanel" class="tab-pane fade" id="sample-pill4">
            @include('order._create_panel_upload_file')
          </div>
        </div>
    </div>
</div>
@endsection
