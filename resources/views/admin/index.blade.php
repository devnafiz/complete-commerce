@extends('admin.admin_master')

@section('admin')


<div class="in-content-wrapper">
					<div class="row no-gutters">

						<div class="col">
							<div class="heading-messages">
								<h3>Dashboard</h3>
							</div><!-- End heading-messages -->
						</div><!-- End column -->
						<div class="col-md-4">
							<div class="breadcrumb">
								<div class="breadcrumb-item"><i class="fas fa-angle-right"></i><a href="#">Dashboard</a>
								</div>
							</div><!-- End Breadcrumbs-->
						</div><!-- End column -->
					</div><!-- End row -->

					<div class="box">
						<div class="dashboard-wrapper">
							<div class="row">
								<div class="col-xl col-md-6">
									<div class="dashboard-boxes primary">
										<div class="row no-gutters">
											<div class="col-4">
												<div class="icon">
													<a href="messages-inbox.html"><i class="fas fa-envelope"></i></a>
												</div>
											</div><!-- End column -->
											<div class="col">
												<a href="messages-inbox.html">
													<h5>10 New Messages</h5>
												</a>
											</div><!-- End column -->
										</div><!-- End row -->
									</div><!-- End dashboard-boxes -->
								</div><!-- End column -->
								<div class="col-xl col-md-6">
									<div class="dashboard-boxes success">
										<div class="row no-gutters">
											<div class="col-4">
												<div class="icon">
													<a href="bookmarks.html"><i class="fas fa-bookmark"></i></a>
												</div>
											</div><!-- End column -->
											<div class="col">
												<a href="bookmarks.html">
													<h5>6 New Bookmarks</h5>
												</a>
											</div><!-- End column -->
										</div><!-- End row -->
									</div><!-- End dashboard-boxes -->
								</div><!-- End column -->
								<div class="col-xl col-md-6">
									<div class="dashboard-boxes danger">
										<div class="row no-gutters">
											<div class="col-4">
												<div class="icon">
													<a href="reviews.html"><i class="fas fa-star"></i></a>
												</div>
											</div><!-- End Columns -->
											<div class="col">
												<a href="reviews.html">
													<h5>10 New Reviews</h5>
												</a>
											</div><!-- End column -->
										</div><!-- End row -->
									</div><!-- End dashboard-boxes -->
								</div><!-- End column -->
								<div class="col-xl col-md-6">
									<div class="dashboard-boxes warning">
										<div class="row no-gutters">
											<div class="col-4">
												<div class="icon">
													<a href="bookings.html"><i class="fas fa-address-book"></i></a>
												</div>
											</div>
											<div class="col">
												<a href="bookings.html">
													<h5>10 New Bookings</h5>
												</a>
											</div><!-- End column -->
										</div><!-- End row -->
									</div><!-- End dashboard-boxes -->
								</div><!-- End column -->
							</div><!-- End row -->
						</div><!-- End dashboard-wrapper -->
						<div class="dashboard1-wrapper">
							<div class="row no-gutters">
								<div class="col">
									<div class="dashboard-boxes1 primary">

										<div class="icon">
											<a href="listing-hotel-all.html"><i class="fas fa-hotel"></i></a>
										</div>


										<a href="listing-hotel-all.html">
											<h5>10 <small class="d-block">New Hotel Listings</small></h5>
										</a>

									</div><!-- End dashboard-boxes1 -->
								</div><!-- End column -->
								<div class="col">
									<div class="dashboard-boxes1 success">

										<div class="icon">
											<a href="listing-tour-all.html"><i class="fas fa-torii-gate"></i></a>
										</div>


										<a href="listing-tour-all.html">
											<h5>26 <small class="d-block">New Tour Listings</small></h5>
										</a>

									</div><!-- End dashboard-boxes1 -->
								</div><!-- End column -->
								<div class="col">
									<div class="dashboard-boxes1 danger">

										<div class="icon">
											<a href="listing-cruise-all.html"><i class="fas fa-anchor"></i></a>
										</div>


										<a href="listing-cruise-all.html">
											<h5>16 <small class="d-block">New Cruise Listings</small></h5>
										</a>

									</div><!-- End dashboard-boxes1 -->
								</div><!-- End column -->
								<div class="col">
									<div class="dashboard-boxes1 last-ones warning">

										<div class="icon">
											<a href="listing-car-all.html"><i class="fas fa-car-alt"></i></a>
										</div>


										<a href="listing-car-all.html">
											<h5>22 <small class="d-block">New Car Listings</small></h5>
										</a>

									</div><!-- End dashboard-boxes1 -->
								</div><!-- End column -->
								<div class="col">
									<div class="dashboard-boxes1 last-ones info">

										<div class="icon">
											<a href="listing-flight-all.html"><i class="fas fa-plane"></i></a>
										</div>


										<a href="listing-flight-all.html">
											<h5>12 <small class="d-block">New Flight Listings</small></h5>
										</a>

									</div><!-- End dashboard-boxes1 -->
								</div><!-- End column -->
							</div><!-- End row -->
						</div><!-- End dashboard1-wrapper -->
						<div class="charts-section">
							<div class="row">
								<div class="col-12 d-block mx-auto canvas1">
									<canvas id="myChart" height="200"></canvas>
								</div><!-- End column -->
								<div class="col-12 d-block mx-auto">
									<canvas id="myChart1" height="200"></canvas>
								</div><!-- End column -->
							</div><!-- End row -->
						</div><!-- End charts-section -->
					</div><!-- End Box -->
				</div><!-- End in-content-wrapper -->

@endsection