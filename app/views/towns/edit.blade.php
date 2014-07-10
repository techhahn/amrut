@extends('layout.main')

@section('content')

<section class="row">
    <div class="col-md-12">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        {{ Form::model($town, array('method' => 'PATCH', 'class' => 'form-horizontal', 'role' => 'form', 'route' => array('towns.update', $town->id))) }}
        <div class="form-group">
            <label for="town" class="col-sm-2 control-label">Town Name</label>
            <div class="col-sm-10">
                {{ Form::text('TownName', null, ['class'=>'form-control', 'placeholder'=>'Pandarpur', 'required' => '']) }}
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                {{ Form::submit('Save', ['class'=>'btn btn-default']) }}
                <a href="{{url('/towns')}}" class="btn btn-danger">Cancel</a>
            </div>
        </div>
        {{ Form::close() }}
    </div>
</section>
@stop