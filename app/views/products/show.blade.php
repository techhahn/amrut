@extends('layout.main')

@section('content')
	<div class="row">
	<h2>{{$product->Name}}</h2>
		<div class="pull-right">
			<a class="btn btn-success btn-lg" href="#"><span class="glyphicon glyphicon-pencil"></span> Edit</a>
			<a class="btn btn-danger btn-lg" href="#"><span class="glyphicon glyphicon-trash"></span> Delete</a>
		</div>
		<div class="table-responsive">
			<table class="table table-hover table-bordered">
				<tbody>
					<tr>
						<td colspan="2"><b>Product-Code:</b> {{$product->Code}}</td>
						<td colspan="2"><b>Product Name:</b> {{$product->Name}}</td>
						<td><b>CM Code:</b> {{$product->CMcode}}</td>
					</tr>
					<tr>
						<td><b>CL Code:</b> {{$product->Clcode}}</td>
						<td><b>G Code:</b> {{$product->Gcode}}</td>							
						<td colspan="2"><b>S Ched:</b> {{$product->Sched}}</td>
						<td><b>Rack:</b> {{$product->Rack}}</td>
					</tr>
					<tr>
							<td colspan="2"><b>Manufacturer:</b> {{$product->Mfr}}</td> 
							<td><b>Rol:</b> {{$product->Rol}}</td> 
							<td><b>Ro Quantity:</b> {{$product->Roqty}}</td> 
							<td><b>Max Quantity:</b> {{$product->MaxQty}}</td> 
					</tr>
					<tr>
							<td><b>Unit 1:</b> {{$product->unit1}}</td> 
							<td><b>Unit 2:</b> {{$product->unit2}}</td> 
							<td><b>S Rate:</b> {{$product->SRate}}</td> 
							<td><b>P Rate:</b> {{$product->PRate}}</td> 
							<td><b>MRP:</b> {{$product->MRP}}</td>
					</tr>
					<tr>
							<td><b>CST:</b> {{$product->CST}}</td>
							<td><b>ST:</b> {{$product->St}}</td>
							<td><b>Case 1:</b> {{$product->case1}}</td>
							<td><b>Case 2:</b> {{$product->case2}}</td>	
							<td><b>Case 3:</b> {{$product->Case3}}</td>
					</tr>

					<tr>
							<td><b>Fr Stock:</b> {{$product->FrStock}}</td>
							<td><b>LRD:</b> {{$product->Lrd}}</td>
							<td><b>LID:</b> {{$product->Lid}}</td>
							<td><b>Deleted:</b> {{$product->Deleted}}</td>
							<td><b>Alisas Code:</b> {{$product->AliasCode}}</td>	
					</tr>
					<tr>
							<td><b>Tax Free:</b> {{$product->Taxfree}}</td>
							<td><b>Tmp Code:</b> {{$product->TmpCode}}</td>
							<td><b>Tmp Cm code:</b> {{$product->TmpCmCode}}</td>
							<td><b>Cre Dt:</b> {{$product->CreDt}}</td>
							<td><b>Msg:</b> {{$product->Msg}}</td>
					</tr>
					<tr>
							<td><b>Unit3:</b> {{$product->Unit3}}</td>
							<td><b>Pndord:</b> {{$product->Pndord}}</td>
							<td><b>MinbQty:</b> {{$product->MinbQty}}</td>
							<td><b>mrptax:</b> {{$product->mrptax}}</td>
							<td><b>NoRtn:</b> {{$product->NoRtn}}</td>
					</tr>

					<tr>
							<td><b>No Sl Rtn:</b> {{$product->NoSlRtn}}</td>
							<td><b>Srtn Msg:</b> {{$product->srtnmsg}}</td>
							<td><b>Rack1:</b> {{$product->RACK1}}</td>
							<td><b>No repl:</b> {{$product->norepl}}</td>
							<td><b>Notinpnj:</b> {{$product->NOTINPNJ}}</td>
					</tr>

					<tr>
							<td><b>NOTINMRG:</b> {{$product->NOTINMRG}}</td>
							<td><b>FREZ:</b> {{$product->FREZ}}</td>
							<td colspan="2"><b>SALESMAN:</b> {{$product->SALESMAN}}</td>
							<td><b>C25:</b> {{$product->C25}}</td>
					</tr>

					<tr>
							<td colspan="2"><b>PFLG:</b> {{$product->PFLG}}</td>
							<td colspan="2"><b>updtopopsunmap:</b> {{$product->updtopopsunmap}}</td>
							<td><b>disclmt:</b> {{$product->disclmt}}</td>
					</tr>

				</tbody>
			</table>
		</div>

	</div>
							
							
														











@stop