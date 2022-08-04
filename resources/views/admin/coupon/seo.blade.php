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
								<h3>SEo Setting</h3>
							</div><!-- End heading-messages -->
						</div><!-- End column -->
						
					</div><!-- end row -->

					<div class="box">

						<div class="row">
							<div class="col">
								<div class="details-text">
									<h4>Add seo </h4>
								</div><!-- end details-text -->
							</div><!-- End column -->
						</div><!-- end row -->
						<div class="cruise-listing-form">
							<form class="text-center" action="{{route('update.seo')}}" method="POST" enctype="multipart/form-data">
								@csrf

								
								<div class="form-row">
									<div class="col-md">
										<div class="form-group">
											<label for="inputGroupSelect00" class="">meta Title</label>
											<input type="text" class="form-control" required id="inputGroupSelect00" name="meta_title" value="{{($seo->meta_title)? $seo->meta_title : ''}}">
										</div><!-- end form-group -->
									</div><!-- end column -->
									
								</div><!-- end form-row -->

								<div class="form-row">
									<div class="col-md">
										<div class="form-group">
											<label for="inputGroupSelect00" class="">Meta Author</label>
											<input type="text" class="form-control" required id="inputGroupSelect00" name="mata_author" value="{{$seo->mata_author}}" >
										</div><!-- end form-group -->
									</div><!-- end column -->
									
								</div><!-- end form-row -->

								<div class="form-row">
									<div class="col-md">
										<div class="form-group">
											
											<textarea cols="30" rows="4" name="meta_description">
												{{$seo->meta_description}}
											</textarea>
										</div><!-- end form-group -->
									</div><!-- end column -->
									
								</div><!-- end form-row -->
								
								
								
							        <div class="form-row">
									<div class="col-md">
										<div class="form-group">
											<label for="inputGroupSelect00" class="">meta tag</label>
											<input type="text" class="form-control" required id="inputGroupSelect00" name="meta_tag" value="{{($seo->meta_tag)? $seo->meta_tag : ''}}">
										</div><!-- end form-group -->
									</div><!-- end column -->
									
								</div><!-- end form-row -->

								 <div class="form-row">
									<div class="col-md">
										<div class="form-group">
											<label for="inputGroupSelect00" class="">Google Analytics</label>
											<input type="text" class="form-control" required id="inputGroupSelect00" name="google_analytics" value="{{$seo->google_analytics}}">
										</div><!-- end form-group -->
									</div><!-- end column -->
									
								</div><!-- end form-row -->
								 <div class="form-row">
									<div class="col-md">
										<div class="form-group">
											<label for="inputGroupSelect00" class="">bing Analytics</label>
											<input type="text" class="form-control" required id="inputGroupSelect00" name="bing_analytics" value="{{$seo->bing_analytics}}">
										</div><!-- end form-group -->
									</div><!-- end column -->
									
								</div><!-- end form-row -->


								
                          <input type="hidden" name="id" value="{{$seo->id}}">

								

							
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