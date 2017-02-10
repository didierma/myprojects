<table class="table table-responsive" id="deposits-table">
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
    @foreach($deposits as $deposit)
        <tr>
            <td>{!! $deposit->project_id !!}</td>
            <td>{!! $deposit->source_card !!}</td>
            <td>{!! $deposit->destination_card !!}</td>
            <td>{!! $deposit->beneficiary !!}</td>
            <td>{!! $deposit->amount !!}</td>
            <td>{!! $deposit->transaction_type !!}</td>
            <td>{!! $deposit->depositor !!}</td>
            <td>
                {!! Form::open(['route' => ['deposits.destroy', $deposit->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('deposits.show', [$deposit->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('deposits.edit', [$deposit->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>