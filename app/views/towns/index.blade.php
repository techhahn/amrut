@extends('layout.main')

@section('content')

    <section class="row">
        <div class="col-md-12">

            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Town ID</th>
                    <th>Town Name</th>
                    <th>Operations</th>
                </tr>
                </thead>
                <tbody>
                <tr id='addr0'>
                    <td></td>
                    <td>
                        <input type="search" name='name0'  placeholder='Search...' class="form-control"/>
                    </td>
                    <td colspan="2"><a href="{{ url('towns/create', $parameters = array(), $secure = null); }}" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-plus"></span>Add New Town</a></td>
                </tr>
                @foreach($towns as $town)
                <tr>
                    <td>{{ $town->id }}</td>
                    <td>{{ $town->TownName }}</td>
                    <td>
                        <a href="{{url('/towns/'.$town->id.'/edit')}}" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                    </td>
                    <td>
                    	 {{ Form::open(array('route' => array('towns.destroy', $town->id), 'method' => 'delete', 'role' => 'form')) }}                                 
                                 <button type="submit" href="{{ URL::route('towns.destroy', $town->id) }}" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> Delete</button>
                         {{ Form::close() }}                  	
                    		
                    </td>

                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>
@stop