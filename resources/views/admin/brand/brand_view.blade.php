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
									<a href="{{route('add.brand')}}">Add New<i class="fas fa-plus"></i></a>
								</div><!-- End add-new-->
							</div><!-- End column-->
							

						</div><!-- end row -->  
					<div class="row no-gutters">

						<div class="col">

							<table id="example" class="display table-hover table-responsive-xl listing">
									<thead>
										<tr>
											<th>#</th>
											<th>Img</th>
											
											<th>Brand name eng</th>
											<th>Brand name hindi</th>
											
											<th>Status</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>



										@foreach($brands as $k=>$val)

										<tr>
											<td>110</td>
											<td><img src="images/cruise3.jpg" alt="table-img"
													class="img-fluid rounded-circle" width="40px"></td>
											
											<td><a href="#">{{$val->brand_name_en}}</a></td>
											<td><a href="#">{{$val->brand_name_hin}}</a></td>
											
											<td class="active"><a href="#">Active</a></td>
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