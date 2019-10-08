<div class="row">
    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover table-striped table-bordered">
                <tr>
                    <th class="col-xs-1"></th>
                    <th class="col-xs-3">クリニック名</th>
                    <th class="col-xs-1">最終更新日</th>
                    <th>メモ</th>
                </tr>
                @foreach($dental_engineers as $dental_engineer)
                            
                <tr>
                    <td>
                        <input id="company_id_{{ $dental_engineer->id }}" type="radio" name="company_id" value="{{ $dental_engineer->id }}">
                    </td>

                    <td>
                        <label for="company_id_{{ $dental_engineer->id }}" style="width: 100%">
                            {{$dental_engineer->name}}
                        </label>
                    </td>

                    <td>
                        <label for="company_id_{{ $dental_engineer->id }}" style="width: 100%">
                            {{ isset($dental_engineer->companymemos->updated_at) ? $dental_engineer->companymemos->updated_at->format('Y/m/d') : null }}
                        </label>
                    </td>

                    <td>
                        <label for="company_id_{{ $dental_engineer->id }}" style="width: 100%">
                                {{ @$dental_engineer->companymemos->overview }}
                        </label>
                    </td>

                </tr>
                            
                @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
