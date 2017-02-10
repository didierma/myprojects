<table class="table table-striped table-bordered table-hover table-checkable order-column" id="cards-table">
    <thead>
        <th>Number</th>
        <th>Status</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($cards as $card)
        <tr>
            <td>{!! $card->number !!}</td>
            <td>{!! $card->status !!}</td>
            <td>
                {!! Form::open(['route' => ['cards.destroy', $card->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <button class="btn btn-default btn-rounded btn-condensed btn-sm"><span class="fa fa-pencil"></span></button>
                    <button class="btn btn-danger btn-rounded btn-condensed btn-sm" onClick="delete_row('trow_2');"><span class="fa fa-times"></span></button>
                    <a href="{!! route('cards.show', [$card->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('cards.edit', [$card->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>