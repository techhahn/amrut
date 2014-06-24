@extends('layout.main')

@section('content')

    <section class="row">
        <div class="col-md-12" ng-controller="AreaController">

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
                    <td><a href="{{ url('areas/create', $parameters = array(), $secure = null); }}" class="btn btn-default btn-block"><span class="glyphicon glyphicon-plus"></span>Add New Town</a></td>
                </tr>
                @foreach($towns as $town)
                <tr>
                    <td>{{ $town->id }}</td>
                    <td>{{ $town->TownName }}</td>
                    <td>
                        <a href="{{url('/areas/'.$town->id.'/edit')}}" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span></a>
                        <button onclick="deleteArea($town->id)" type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
                    </td>

                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>
@stop