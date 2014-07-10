@extends('layout.main')

@section('content')

<section class="row">
    <div class="col-md-12">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        {{ Form::open(array('url' => '/towns', 'class' => 'form-horizontal', 'role' => 'form')) }}

            <div class="form-group">
                <label for="town" class="col-sm-2 control-label">Town Name</label>
                <div class="col-sm-10">
                    {{ Form::text('TownName', '', ['class'=>'form-control', 'placeholder'=>'Pandarpur', 'required' => '']) }}
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    {{ Form::submit('Add New Town', ['class'=>'btn btn-default']) }}
                    <a href="{{url('/towns')}}" class="btn btn-danger">Cancel</a>
                </div>
            </div>
        {{ Form::close() }}
    </div>
</section>
@stop