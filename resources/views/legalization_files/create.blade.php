@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Legalization File
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'legalizationFiles.store']) !!}

                        @include('legalization_files.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
