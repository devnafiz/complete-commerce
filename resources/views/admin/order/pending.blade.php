@extends('admin.admin_master')
@section('extra-css')

 <!-- Data Tables Stylesheet -->
	<link rel="stylesheet" type="text/css" href="{{asset('backend/vendors/datatables/datatables.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('backend/css/custom.datatables.css')}}">

@endsection

@section('extra-js')
<script src="{{asset('backend/vendors/datatables/datatables.min.js')}}"></script>
<script>
		$(document).ready(function () {
			$('#example').DataTable();
		});
	</script>


@endsection

@section('admin')

<div class="in-content-wrapper">

					<div class="row no-gutters">
							<div class="col text-left">
								<div class="add-new">
									
								</div><!-- End add-new-->
							</div><!-- End column-->
							

						</div><!-- end row -->  
					<div class="row no-gutters">

						<div class="col">
                             <h3>Order list</h3>
							<table id="example" class="display table-hover table-responsive-xl listing">
									<thead>
										<tr>
											<th>Payment  type </th>
											
											
											<th>Transection Id</th>
											<th>Subtotal</th>
											 <th>Shipping</th>
											 <th>date</th>
											 <th>total</th>
											<th>Status</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>



										@foreach($orders as $k=>$val)

										<tr>
											<td>{{$val->payment_type}}</td>
											
											
											<td><a href="#">{{$val->blnc_transection}}</a></td>
											<td><a href="#">{{$val->subtotal}}$</a></td>
											<td><a href="#">{{$val->shipping}}$</a></td>
											<td><a href="#">{{$val->date}}$</a></td>
											<td><a href="#">{{$val->total}}$</a></td>

											<td><a href="#">{{($val->status==0)? 'Pending' : 'Active'}}</a></td>
											
											
											<td>
												<a href="#"><i class="fas fa-edit"></i></a>
												<a href="#"><i class="fas fa-trash-alt"></i></a>
											</td>
										</tr>
										
										@endforeach

									</tbody>
								</table>

						</div>
					</div>
				</div>


@endsection