@extends('admin.admin_master')
@section('extra-css')

 <!-- Data Tables Stylesheet -->
	<link rel="stylesheet" type="text/css" href="{{asset('backend/vendors/datatables/datatables.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('backend/css/custom.datatables.css')}}">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
								<h3>Cruise Listing</h3>
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

	                         	<div class="cruise-listing-form">

							                              <form method="post" action="{{ route('product-store') }}" enctype="multipart/form-data" >
									 	@csrf


								<div class="form-row">
									<div class="col-md">
										<div class="form-group">
											<label for="inputGroupSelect00" class="">Brand Select:</label>
												<select name="brand_id" class="form-control" required="" >
													<option value="" selected="" disabled="">Select Brand</option>
													@foreach($brands as $brand)
									                <option value="{{ $brand->id }}">{{ $brand->brand_name_en }}</option>	
													@endforeach
												</select>
												@error('brand_id') 
											 <span class="text-danger">{{ $message }}</span>
											 @enderror 
										</div><!-- end form-group -->
									</div><!-- End column -->

								    <div class="col-md">
										<div class="form-group">
											<label for="inputGroupSelect00" class="">Category Select :</label>
											<select name="category_id" class="form-control" required="" >
													<option value="" selected="" disabled="">Select Brand</option>
													@foreach($categories as $category)
										 <option value="{{ $category->id }}">{{ $category->category_name_en }}</option>	
													@endforeach
												</select>
												@error('category_id') 
											 <span class="text-danger">{{ $message }}</span>
											 @enderror
										</div><!-- end form-group -->
									</div><!-- End column -->
								</div>

								<div class="form-row">
									<div class="col-md">
										<div class="form-group">
											<label for="inputGroupSelect00" class="">SubCategory Select:</label>
											<select name="subcategory_id" class="form-control" required="" >
												<option value="" selected="" disabled="">Select SubCategory</option>
												 
											</select>
											@error('subcategory_id') 
										 <span class="text-danger">{{ $message }}</span>
										 @enderror 
										</div><!-- end form-group -->
									</div><!-- End column -->

									<div class="col-md">
										<div class="form-group">
											<label for="inputGroupSelect00" class="">Product NAme eng:</label>
													<input type="text" name="product_name_en" class="form-control" required="">
										     @error('product_name_en') 
											 <span class="text-danger">{{ $message }}</span>
											 @enderror
										</div><!-- end form-group -->
									</div><!-- End column -->
								</div>	

                                <div class="form-row">
									<div class="col-md">
										<div class="form-group">
											<label for="inputGroupSelect00" class="">Product Name Hin:</label>
											<input type="text" name="product_name_hin" class="form-control" required="">
										     @error('product_name_hin') 
											 <span class="text-danger">{{ $message }}</span>
											 @enderror
										</div><!-- end form-group -->
									</div><!-- End column -->

									<div class="col-md">
										<div class="form-group">
											<label for="inputGroupSelect00" class="">Product Code:</label>
														<input type="text" name="product_code" class="form-control" required="">
							     @error('product_code') 
								 <span class="text-danger">{{ $message }}</span>
								 @enderror
										</div><!-- end form-group -->
									</div><!-- End column -->
								</div>

								<div class="form-row">
									<div class="col-md">
										<div class="form-group">
											<label for="inputGroupSelect00" class="">Product Quantity:</label>
											<input type="text" name="product_qty" class="form-control" required="">
										     @error('product_qty') 
											 <span class="text-danger">{{ $message }}</span>
											 @enderror
										</div><!-- end form-group -->
									</div><!-- End column -->

									<div class="col-md">
										<div class="form-group">
											<label for="inputGroupSelect00" class="">Product Tags En:</label>
														<input type="text" name="product_tags_en" class="form-control" value="Lorem,Ipsum,Amet" data-role="tagsinput" required="">
							     @error('product_tags_en') 
								 <span class="text-danger">{{ $message }}</span>
								 @enderror
										</div><!-- end form-group -->
									</div><!-- End column -->
								</div>


								<div class="form-row">
									<div class="col-md">
										<div class="form-group">
											<label for="inputGroupSelect00" class="">Product Tags Hin:</label>
											 <input type="text" name="product_tags_hin" class="form-control" value="Lorem,Ipsum,Amet" data-role="tagsinput" required="">
											     @error('product_tags_hin') 
												 <span class="text-danger">{{ $message }}</span>
												 @enderror
										</div><!-- end form-group -->
									</div><!-- End column -->

									<div class="col-md">
										<div class="form-group">
											<label for="inputGroupSelect00" class="">Product Size En:</label>
															 <input type="text" name="product_size_en" class="form-control" value="Small,Midium,Large" data-role="tagsinput" required="">
							     @error('product_size_en') 
								 <span class="text-danger">{{ $message }}</span>
								 @enderror
										</div><!-- end form-group -->
									</div><!-- End column -->
								</div>


								<div class="form-row">
									<div class="col-md">
										<div class="form-group">
											<label for="inputGroupSelect00" class="">Product Size Hin:</label>
											<input type="text" name="product_size_en" class="form-control" value="Small,Midium,Large" data-role="tagsinput" required="">
							     @error('product_size_en') 
								 <span class="text-danger">{{ $message }}</span>
								 @enderror
										</div><!-- end form-group -->
									</div><!-- End column -->

									<div class="col-md">
										<div class="form-group">
											<label for="inputGroupSelect00" class="">Product Color En:</label>
															<input type="text" name="product_color_en" class="form-control" value="red,Black,Amet" data-role="tagsinput" required="">
							     @error('product_color_en') 
								 <span class="text-danger">{{ $message }}</span>
								 @enderror
										</div><!-- end form-group -->
									</div><!-- End column -->
								</div>

								<div class="form-row">
									<div class="col-md">
										<div class="form-group">
											<label for="inputGroupSelect00" class="">Product Color Hin:</label>
											 <input type="text" name="product_color_hin" class="form-control" value="red,Black,Large" data-role="tagsinput" required="">
							     @error('product_color_hin') 
								 <span class="text-danger">{{ $message }}</span>
								 @enderror
										</div><!-- end form-group -->
									</div><!-- End column -->

									<div class="col-md">
										<div class="form-group">
											<label for="inputGroupSelect00" class="">Product Selling Price:</label>
															<input type="text" name="selling_price" class="form-control" required="">
							     @error('selling_price') 
								 <span class="text-danger">{{ $message }}</span>
								 @enderror
										</div><!-- end form-group -->
									</div><!-- End column -->
								</div>


								<div class="form-row">
									<div class="col-md">
										<div class="form-group">
											<label for="inputGroupSelect00" class="">Product Discount Price :</label>
											 <input type="text" name="discount_price" class="form-control"  required="">
							     @error('discount_price') 
								 <span class="text-danger">{{ $message }}</span>
								 @enderror
										</div><!-- end form-group -->
									</div><!-- End column -->

									<div class="col-md">
										<div class="form-group">
											<label for="inputGroupSelect00" class="">Main Thambnail:</label>
															 <input type="file" name="product_thambnail" class="form-control" onChange="mainThamUrl(this)" required="" >
							     @error('product_thambnail') 
								 <span class="text-danger">{{ $message }}</span>
								 @enderror
								 <img src="" id="mainThmb">
										</div><!-- end form-group -->
									</div><!-- End column -->
								</div>

								<div class="form-row">
									<div class="col-md">
										<div class="form-group">
											<label for="inputGroupSelect00" class="">Multi image :</label>
											  <input type="file" name="multi_img[]" class="form-control" multiple="" id="multiImg" required="">
							     @error('multi_img') 
								 <span class="text-danger">{{ $message }}</span>
								 @enderror
								 <div class="row" id="preview_img"></div>
										</div><!-- end form-group -->
									</div><!-- End column -->

									
								</div>

									<div class="form-row">
									<div class="col-md">
										<div class="form-group">
											
											<textarea name="short_descp_en" id="textarea" class="form-control" required placeholder="Textarea text"></textarea> 
										</div><!-- end form-group -->
									</div><!-- End column -->

									<div class="col-md">
										<div class="form-group">
											
															 <textarea name="short_descp_hin" id="textarea" class="form-control" required placeholder="Textarea text"></textarea>   
								
										</div><!-- end form-group -->
									</div><!-- End column -->
								</div>

									<div class="form-row">
									<div class="col-md">
										<div class="form-group">
										
											<textarea name="long_descp_en" id="editor2" class="form-control" required placeholder="Textarea text" rows="10" cols="50">Long Description English</textarea> 
										</div><!-- end form-group -->
									</div><!-- End column -->

									<div class="col-md">
										<div class="form-group">
										
															<textarea id="editor2" name="long_descp_hin" rows="10" cols="50">
									Long Description Hindi
													</textarea>    
								
										</div><!-- end form-group -->
									</div><!-- End column -->
								</div>

								<div class="form-row">
									<div class="col-md">
										<div class="form-group">
											<div class="controls">
											<fieldset>
												<input type="checkbox" id="checkbox_2" name="hot_deals" value="1">
												<label for="checkbox_2">Hot Deals</label>
											</fieldset>
											<fieldset>
												<input type="checkbox" id="checkbox_3" name="featured" value="1">
												<label for="checkbox_3">Featured</label>
											</fieldset>
									</div>
										</div><!-- end form-group -->
									</div><!-- End column -->

									<div class="col-md">
										<div class="form-group">
											<div class="controls">
											<fieldset>
												<input type="checkbox" id="checkbox_4" name="special_offer" value="1">
												<label for="checkbox_4">Special Offer</label>
											</fieldset>
											<fieldset>
												<input type="checkbox" id="checkbox_5" name="special_deals" value="1">
												<label for="checkbox_5">Special Deals</label>
											</fieldset>
									     </div> 
								
										</div><!-- end form-group -->
									</div><!-- End column -->
								</div>

								<div class="form-row">
									<div class="col-md">
										<div class="form-group">
                                              	<label for="inputGroupSelect00" class="">Digital Product :</label>
											 <input type="file" name="file" class="form-control" > 

										</div>
									</div>
								</div>			




													 
													<div class="text-xs-right">
							<input type="submit" class="btn btn-rounded btn-primary mb-5" value="Add Product">
					 </div>
					</form>
				


              </div>
            </div>
 </div>


 <script type="text/javascript">
 	
$(document).ready(function() {

        $('select[name="category_id"]').on('change', function(){
            var category_id = $(this).val();
            //alert('hi');
        
            if(category_id) {
                $.ajax({
                    url: "{{  url('/category/subcategory/ajax') }}/"+category_id,
                    type:"GET",
                    dataType:"json",
                    success:function(data) {
                    	$('select[name="subsubcategory_id"]').html('');
                       var d =$('select[name="subcategory_id"]').empty();
                          $.each(data, function(key, value){
                              $('select[name="subcategory_id"]').append('<option value="'+ value.id +'">' + value.subcategory_name_en + '</option>');
                          });
                    },
                });
            } else {
                alert('danger');
            }
        });
        });

 </script>
 <script type="text/javascript">
	function mainThamUrl(input){
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e){
				$('#mainThmb').attr('src',e.target.result).width(80).height(80);
			};
			reader.readAsDataURL(input.files[0]);
		}
	}	
</script>


 <script>
 
  $(document).ready(function(){
   $('#multiImg').on('change', function(){ //on file input change
      if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
      {
          var data = $(this)[0].files; //this file data
           
          $.each(data, function(index, file){ //loop though each file
              if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){ //check supported file type
                  var fRead = new FileReader(); //new filereader
                  fRead.onload = (function(file){ //trigger function on successful read
                  return function(e) {
                      var img = $('<img/>').addClass('thumb').attr('src', e.target.result) .width(80)
                  .height(80); //create image element 
                      $('#preview_img').append(img); //append image to output element
                  };
                  })(file);
                  fRead.readAsDataURL(file); //URL representing the file's data.
              }
          });
           
      }else{
          alert("Your browser doesn't support File API!"); //if File API is absent
      }
   });
  });
   
  </script>


 @endsection                       










							
