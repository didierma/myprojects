@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Recharge
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($recharge, ['route' => ['recharges.update', $recharge->id], 'method' => 'patch']) !!}

                        @include('recharges.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection