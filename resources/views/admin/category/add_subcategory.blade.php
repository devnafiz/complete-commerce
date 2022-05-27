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

						<div class="col">
							<div class="heading-messages">
								<h3>Sub Category Listing</h3>
							</div><!-- End heading-messages -->
						</div><!-- End column -->
						<div class="col-md-4">
							<div class="breadcrumb">
								<div class="breadcrumb-item"><i class="fas fa-angle-right"></i><a href="#">Listing</a>
								</div>
								<div class="breadcrumb-item active"><i class="fas fa-angle-right"></i>Create
								</div>
							</div><!-- end breadcrumb -->
						</div><!-- End column -->

					</div><!-- end row -->

					<div class="box">

						<div class="row">
							<div class="col">
								<div class="details-text">
									<h4>Add Sub Category</h4>
								</div><!-- end details-text -->
							</div><!-- End column -->
						</div><!-- end row -->
						<div class="cruise-listing-form">
							<form class="text-center" action="{{route('subcategory.store')}}" method="POST" enctype="multipart/form-data">
								@csrf

                                  <div class="form-row">
									<div class="col-md">
										<div class="form-group">
											<label for="inputGroupSelect00" class="">Title English:</label>
										<select class="form-control" id="sub category" name="category_id">

											<option value="">Select Category</option>
                                             @foreach($categories as $k=>$val)
											<option value="{{$val->id}}">{{$val->category_name_en}}</option>

											@endforeach

											

										</select>
										</div><!-- end form-group -->
									</div><!-- end column -->
									
								</div><!-- end form-row -->

								<div class="form-row">
									<div class="col-md">
										<div class="form-group">
											<label for="inputGroupSelect00" class="">Title English:</label>
											<input type="text" class="form-control" required id="inputGroupSelect00" name="subcategory_name_en">
										</div><!-- end form-group -->
									</div><!-- end column -->
									
								</div><!-- end form-row -->

								<div class="form-row">
									<div class="col-md">
										<div class="form-group">
											<label for="inputGroupSelect00" class="">Title Hindi:</label>
											<input type="text" class="form-control" required id="inputGroupSelect00" name="subcategory_name_hin" >
										</div><!-- end form-group -->
									</div><!-- end column -->
									
								</div><!-- end form-row -->
								
								<!--<div class="form-row">
									<div class="col-md">
										<div class="form-group">
											<label for="inputGroupSelect00" class="">Image Upload:</label>
											<input type="file" class="form-control" required id="inputGroupSelect00"  name="category_icon">
										</div>
									</div>
									
								</div>-->
								
							

								<!-- <div action="/upload" class="dropzone needsclick dz-clickable" id="demo-upload">
									<i class="fas fa-cloud-upload-alt"></i>
									<div class="dz-message needsclick">
										<p>
											Drop files here or click to upload.
										</p>
										<span class="note needsclick">(This is just a demo dropzone. Selected files are
											<strong>not</strong> actually uploaded.)</span>
									</div>

								</div> --><!-- end dropzone -->


								

							
								<ul class="list-inline">
									<li class="list-inline-item">
										<button class="btn">Submit</button>
									</li>
									<li class="list-inline-item">
										<button class="btn">Cancel</button>
									</li>
								</ul>
							</form>
						</div><!-- end cruise-listing-form -->
					</div><!-- end box -->
				</div><!-- end in-content-wrapper -->




@endsection