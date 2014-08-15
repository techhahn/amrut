@extends('layout.main')

@section('content')
	
	<div class="row">
		<div class="col-md-12">		
			{{$products->links()}}
			
			<div class="input-group custom-search-form">
              <input type="text" placeholder="Search..." class="form-control">
              <span class="input-group-btn">
              <button class="btn btn-default" type="button">
              <span class="glyphicon glyphicon-search"></span>
             </button>
             </span>
            </div><!-- /input-group -->
				<table class="table table-hover table-condensed table-bordered">
					<thead>
						<tr>
							<th>Code</th>
							<th>Name</th>
							<th>CMcode</th>					
							<th>Clcode</th>
							<th>Gcode</th>	
							<th></th>				
							<th></th>
							<!-- <th>Sched</th>
							<th>Rack</th>
							<th>Mfr</th>
							<th>Rol</th>
							<th>Roqty</th>
							<th>MaxQty</th>
							<th>unit1</th>
							<th>unit2</th>
							<th>SRate</th>
							<th>PRate</th>
							<th>MRP</th>
							<th>CST</th>
							<th>St</th>
							<th>Taxfree</th>
							<th>case1</th>
							<th>case}</th>
							<th>FrStock</th>
							<th>Lrd</th>
							<th>Lid</th>
							<th>Deleted</th>
							<th>AliasCode</th>
							<th>TmpCode</th>
							<th>TmpCmCode</th>
							<th>CreDt</th>
							<th>Msg</th>
							<th>Case3</th>
							<th>Unit3</th>
							<th>Pndord</th>
							<th>MinbQty</th>
							<th>mrptax</th>
							<th>NoRtn</th>
							<th>NoSlRtn</th>
							<th>srtnmsg</th>
							<th>RACK1</th>
							<th>norepl</th>
							<th>NOTINPNJ</th>
							<th>NOTINMRG</th>
							<th>FREZ</th>
							<th>SALESMAN</th>
							<th>C25</th>
							<th>PFLG</th>
							<th>updtopopsunmap</th>
							<th>disclmt</th> -->
						</tr>
					</thead>
					<tbody>
			@foreach($products as $product)
						<tr>
							<td>{{ HTML::link('products/'.$product->Code, $product->Code)}}</td>
							<td>{{ HTML::link('products/'.$product->Code, $product->Name)}}</td>
							<td>{{$product->CMcode}}</td>							
							<td>{{$product->Clcode}}</td>
							<td>{{$product->Gcode}}</td>	
							<td><a class="btn btn-success btn-block btn-sm" href="#"><span class="glyphicon glyphicon-pencil"></span> Edit</a></td>
							<td><a class="btn btn-danger btn-block btn-sm" href="#"><span class="glyphicon glyphicon-trash"> Delete</a></td>								
						</tr>
			@endforeach

					</tbody>
				</table>
			{{$products->links()}}
		</div>
	</div>

@stop