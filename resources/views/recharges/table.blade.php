<table class="table table-responsive" id="recharges-table">
    <thead>
        <th>Project Id</th>
        <th>Source Card</th>
        <th>Destination Card</th>
        <th>Beneficiary</th>
        <th>Amount</th>
        <th>Transaction Type</th>
        <th>Depositor</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($recharges as $recharge)
        <tr>
            <td>{!! $recharge->project_id !!}</td>
            <td>{!! $recharge->source_card !!}</td>
            <td>{!! $recharge->destination_card !!}</td>
            <td>{!! $recharge->beneficiary !!}</td>
            <td>{!! $recharge->amount !!}</td>
            <td>{!! $recharge->transaction_type !!}</td>
            <td>{!! $recharge->depositor !!}</td>
            <td>
                {!! Form::open(['route' => ['recharges.destroy', $recharge->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('recharges.show', [$recharge->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('recharges.edit', [$recharge->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>