<div class="sidebar-left">
			<div class="sidebar-topbar text-center">
				<i class="fa fa-plane"></i><span class="text">Stays Hotels</span>
			</div> <!-- End sidebar-topbar -->
			<!-- End sidebar-topbar -->

			<div class="side-menu">
				<ul class="navbar-nav">
					<li class="nav-item" id="dashboard-link">
						<a href="index.html" class="items-list first active">
							<span><i class="fa fa-home link-icon" data-toggle="tooltip" data-html="true"
									title="Dashboard"></i></span>
							<span class="items-list-text">Dashboard</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="#users" class="items-list" data-toggle="collapse" aria-expanded="false">
							<span><i class="fas fa-user-tie" data-toggle="tooltip" data-html="true"
									title="Users"></i></span>
							<span class="items-list-text">Users</span>
							<span><i class="fa fa-chevron-down arrow"></i></span>
						</a>
						<div class="collapse sub-menu" id="users">
							<a class="items-list1" href="users-create-user.html">Create User</a>
							<a class="items-list1" href="users-list.html">List</a>
						</div><!-- End sub-menu -->
					</li><li class="nav-item">
						<a href="#users" class="items-list" data-toggle="collapse" aria-expanded="false">
							<span><i class="fas fa-user-tie" data-toggle="tooltip" data-html="true"
									title="Users"></i></span>
							<span class="items-list-text">Category</span>
							<span><i class="fa fa-chevron-down arrow"></i></span>
						</a>
						<div class="collapse sub-menu" id="users">
							<a class="items-list1" href="{{url('category/add')}}">Create category</a>
							<a class="items-list1" href="{{route('all.category')}}">List</a>
						</div><!-- End sub-menu -->
					</li>
					<li class="nav-item">
						<a href="#users" class="items-list" data-toggle="collapse" aria-expanded="false">
							<span><i class="fas fa-user-tie" data-toggle="tooltip" data-html="true"
									title="Users"></i></span>
							<span class="items-list-text">Sub Category</span>
							<span><i class="fa fa-chevron-down arrow"></i></span>
						</a>
						<div class="collapse sub-menu" id="users">
							<a class="items-list1" href="{{url('category/sub/add')}}">Create sub category</a>
							<a class="items-list1" href="{{route('all.subcategory')}}">List</a>
						</div><!-- End sub-menu -->
					</li>
					<li class="nav-item">
						<a href="#users" class="items-list" data-toggle="collapse" aria-expanded="false">
							<span><i class="fas fa-user-tie" data-toggle="tooltip" data-html="true"
									title="Users"></i></span>
							<span class="items-list-text">Brand</span>
							<span><i class="fa fa-chevron-down arrow"></i></span>
						</a>
						<div class="collapse sub-menu" id="users">
							<a class="items-list1" href="{{url('brand/add')}}">Create brand</a>
							<a class="items-list1" href="{{route('all.brand')}}">List</a>
						</div><!-- End sub-menu -->
					</li>
					
					<li class="nav-item">
						<a href="#users" class="items-list" data-toggle="collapse" aria-expanded="false">
							<span><i class="fas fa-user-tie" data-toggle="tooltip" data-html="true"
									title="Users"></i></span>
							<span class="items-list-text">Users</span>
							<span><i class="fa fa-chevron-down arrow"></i></span>
						</a>
						<div class="collapse sub-menu" id="users">
							<a class="items-list1" href="users-create-user.html">Create User</a>
							<a class="items-list1" href="users-list.html">List</a>
						</div><!-- End sub-menu -->
					</li>
					<li class="nav-item">
						<a href="#users" class="items-list" data-toggle="collapse" aria-expanded="false">
							<span><i class="fas fa-user-tie" data-toggle="tooltip" data-html="true"
									title="Users"></i></span>
							<span class="items-list-text">Users</span>
							<span><i class="fa fa-chevron-down arrow"></i></span>
						</a>
						<div class="collapse sub-menu" id="users">
							<a class="items-list1" href="users-create-user.html">Create User</a>
							<a class="items-list1" href="users-list.html">List</a>
						</div><!-- End sub-menu -->
					</li>
					<li class="nav-item">
						<a href="#Listing" class="items-list" data-toggle="collapse" aria-expanded="false">
							<span><i class="fas fa-list-alt" data-toggle="tooltip" data-html="true"
									title="Listing"></i></span>
							<span class="items-list-text">Listing</span>
							<span><i class="fa fa-chevron-down arrow"></i></span>
						</a>
						<div class="collapse sub-menu" id="Listing">
							<a href="#Hotel-Listing" class="items-list2" data-toggle="collapse" aria-expanded="false">
								<span><i class="fas fa-hotel" data-toggle="tooltip" data-html="true"
										title="Hotel"></i></span>
								<span class="items-list-text">Hotel Listing</span>
								<span><i class="fa fa-chevron-down arrow"></i></span>
							</a>
							<div class="collapse sub-sub-menu" id="Hotel-Listing">
								<a class="items-list3" href="listing-hotel-create.html">Create</a>
								<a class="items-list3" href="listing-hotel-all.html">All</a>
								<a class="items-list3" href="listing-hotel-active.html">Active</a>
								<a class="items-list3" href="listing-hotel-drafts.html">Drafts</a>
								<a class="items-list3" href="listing-hotel-expired.html">Expired</a>
								<a class="items-list3" href="listing-hotel-featured.html">Featured</a>
							</div>
						</div><!-- End sub-menu -->
						<div class="collapse sub-menu" id="Listing">
							<a href="#Tour-Listing" class="items-list2" data-toggle="collapse" aria-expanded="false">
								<span><i class="fas fa-torii-gate" data-toggle="tooltip" data-html="true"
										title="Tour"></i></span>
								<span class="items-list-text">Tour Listing</span>
								<span><i class="fa fa-chevron-down arrow"></i></span>
							</a>
							<div class="collapse sub-sub-menu" id="Tour-Listing">
								<a class="items-list3" href="listing-tour-create.html">Create</a>
								<a class="items-list3" href="listing-tour-all.html">All</a>
								<a class="items-list3" href="listing-tour-active.html">Active</a>
								<a class="items-list3" href="listing-tour-drafts.html">Drafts</a>
								<a class="items-list3" href="listing-tour-expired.html">Expired</a>
								<a class="items-list3" href="listing-tour-featured.html">Featured</a>
							</div>
						</div><!-- End sub-menu -->
						<div class="collapse sub-menu" id="Listing">
							<a href="#Cruise-Listing" class="items-list2" data-toggle="collapse" aria-expanded="false">
								<span><i class="fas fa-anchor" data-toggle="tooltip" data-html="true"
										title="Cruise"></i></span>
								<span class="items-list-text">Product</span>
								<span><i class="fa fa-chevron-down arrow"></i></span>
							</a>
							<div class="collapse sub-sub-menu" id="Cruise-Listing">
								<a class="items-list3" href="{{route('all.product')}}">Product View</a>
								<a class="items-list3" href="listing-cruise-all.html">All</a>
								<a class="items-list3" href="listing-cruise-active.html">Active</a>
								<a class="items-list3" href="listing-cruise-drafts.html">Drafts</a>
								<a class="items-list3" href="listing-cruise-expired.html">Expired</a>
								<a class="items-list3" href="listing-cruise-featured.html">Featured</a>
							</div>
						</div><!-- End sub-menu -->
						<div class="collapse sub-menu" id="Listing">
							<a href="#Car-Listing" class="items-list2" data-toggle="collapse" aria-expanded="false">
								<span><i class="fas fa-car-alt" data-toggle="tooltip" data-html="true"
										title="Car"></i></span>
								<span class="items-list-text">Blog</span>
								<span><i class="fa fa-chevron-down arrow"></i></span>
							</a>
							<div class="collapse sub-sub-menu" id="Car-Listing">
								<a class="items-list3" href="{{route('blog.category')}}">Blog Category</a>
								<a class="items-list3" href="{{route('add.post')}}">Blog Add</a>
								<a class="items-list3" href="{{route('list.post')}}">Blog List</a>
								<a class="items-list3" href="listing-car-drafts.html">Drafts</a>
								<a class="items-list3" href="listing-car-expired.html">Expired</a>
								<a class="items-list3" href="listing-car-featured.html">Featured</a>
							</div>
						</div><!-- End sub-menu -->
						<div class="collapse sub-menu" id="Listing">
							<a href="#Flight-Listing" class="items-list2" data-toggle="collapse" aria-expanded="false">
								<span><i class="fas fa-plane" data-toggle="tooltip" data-html="true"
										title="Flight"></i></span>
								<span class="items-list-text">Flight Listing</span>
								<span><i class="fa fa-chevron-down arrow"></i></span>
							</a>
							<div class="collapse sub-sub-menu" id="Flight-Listing">
								<a class="items-list3" href="listing-flight-create.html">Create</a>
								<a class="items-list3" href="listing-flight-all.html">All</a>
								<a class="items-list3" href="listing-flight-active.html">Active</a>
								<a class="items-list3" href="listing-flight-drafts.html">Drafts</a>
								<a class="items-list3" href="listing-flight-expired.html">Expired</a>
								<a class="items-list3" href="listing-flight-featured.html">Featured</a>
							</div>
						</div><!-- End sub-menu -->
					</li>
					<li class="nav-item">
						<a href="#booking" class="items-list" data-toggle="collapse" aria-expanded="false">
							<span><i class="fas fa-suitcase-rolling" data-toggle="tooltip" data-html="true"
									title="Bookings"></i></span>
							<span class="items-list-text">Coupon</span>
							<span><i class="fa fa-chevron-down arrow"></i></span>
						</a>
						<div class="collapse sub-menu" id="booking">
							<a class="items-list1" href="{{route('admin.manage-coupon')}}"> Coupon</a>
							
						</div><!-- End sub-menu -->
					</li>
					<li class="nav-item">
						<a href="reviews.html" class="items-list">
							<span><i class="fas fa-sync-alt" data-toggle="tooltip" data-html="true"
									title="Reviews"></i></span>
							<span class="items-list-text">Reviews</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="bookmarks.html" class="items-list">
							<span><i class="far fa-bookmark" data-toggle="tooltip" data-html="true"
									title="Messages"></i></span>
							<span class="items-list-text">Bookmarks</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="#messages" class="items-list" data-toggle="collapse" aria-expanded="false">
							<span><i class="far fa-envelope" data-toggle="tooltip" data-html="true"
									title="Messages"></i></span>
							<span class="items-list-text">Messages</span>
							<span><i class="fa fa-chevron-down arrow"></i></span>
						</a>
						<div class="collapse sub-menu" id="messages">
							<a class="items-list1" href="messages-inbox.html">Inbox</a>
							<a class="items-list1" href="messages-compose.html">Compose</a>
							<a class="items-list1" href="messages-details.html">Details</a>
							<a class="items-list1" href="messages-starred.html">Starred</a>
							<a class="items-list1" href="messages-important.html">Important</a>
							<a class="items-list1" href="messages-sent.html">Sent</a>
							<a class="items-list1" href="messages-drafts.html">Drafts</a>
							<a class="items-list1" href="messages-trash.html">Trash</a>
						</div><!-- End sub-menu -->
					</li>
					<li class="nav-item">
						<a href="#pages" class="items-list" data-toggle="collapse" aria-expanded="false">
							<span><i class="fas fa-pager" data-toggle="tooltip" data-html="true"
									title="Pages"></i></span>
							<span class="items-list-text">Pages</span>
							<span><i class="fa fa-chevron-down arrow"></i></span>
						</a>
						<div class="collapse sub-menu" id="pages">
							<a href="#forms" class="items-list2" data-toggle="collapse" aria-expanded="false">
								<span><i class="fas fa-hotel" data-toggle="tooltip" data-html="true"
										title="Forms"></i></span>
								<span class="items-list-text">Forms</span>
								<span><i class="fa fa-chevron-down arrow"></i></span>
							</a>
							<div class="collapse sub-sub-menu" id="forms">
								<a class="items-list3" href="form-login.html">Login</a>
								<a class="items-list3" href="form-registration.html">Sign Up</a>
								<a class="items-list3" href="form-forgot-password.html">Forgot Password</a>
							</div>
							<a class="items-list1" href="invoices.html">Invoices</a>
							<a class="items-list1" href="faq.html">FAQ</a>
							<a class="items-list1" href="privacy-policy.html">Privacy Policy</a>
							<a class="items-list1" href="pricing-tables.html">Pricing</a>
							<a class="items-list1" href="coming-soon.html">Coming Soon</a>
							<a class="items-list1" href="404.html">404</a>
						</div><!-- End sub-menu -->
					</li>


					<!--site setting-->

					<li class="nav-item">
						<a href="#siteSetting" class="items-list" data-toggle="collapse" aria-expanded="false">
							<span><i class="fas fa-pager" data-toggle="tooltip" data-html="true"
									title="Pages"></i></span>
							<span class="items-list-text">Site Setting</span>
							<span><i class="fa fa-chevron-down arrow"></i></span>
						</a>
						<div class="collapse sub-menu" id="siteSetting">
							<!--<a href="#forms" class="items-list2" data-toggle="collapse" aria-expanded="false">
								<span><i class="fas fa-hotel" data-toggle="tooltip" data-html="true"
										title="Forms"></i></span>
								<span class="items-list-text">Forms</span>
								<span><i class="fa fa-chevron-down arrow"></i></span>
							</a>
							<div class="collapse sub-sub-menu" id="forms">
								<a class="items-list3" href="form-login.html">Login</a>
								<a class="items-list3" href="form-registration.html">Sign Up</a>
								<a class="items-list3" href="form-forgot-password.html">Forgot Password</a>
							</div>-->
							<a class="items-list1" href="privacy-policy.html">Category</a>
							<a class="items-list1" href="{{route('all.brand')}}">Brand View</a>
							<a class="items-list1" href="{{route('all.category')}}">Category View</a>
							<a class="items-list1" href="{{route('all.subcategory')}}">SubCategory View</a>
							<a class="items-list1" href="pricing-tables.html">Pricing</a>
							<a class="items-list1" href="coming-soon.html">Coming Soon</a>
							<a class="items-list1" href="404.html">404</a>
						</div><!-- End sub-menu -->
					</li>

					<!--end site setting-->

					<li class="nav-item">
						<a href="#profile" class="items-list" data-toggle="collapse" aria-expanded="false">
							<span><i class="fas fa-building" data-toggle="tooltip" data-html="true"
									title="Profile"></i></span>
							<span class="items-list-text">Profile</span>
							<span><i class="fa fa-chevron-down arrow"></i></span>
						</a>
						<div class="collapse sub-menu" id="profile">
							<a class="items-list1" href="profile-view-profile.html">View Profile</a>
							<a class="items-list1" href="profile-edit-profile.html">Edit Profile</a>
							<a class="items-list1" href="profile-change-password.html">Change Password

							</a>
						</div><!-- End sub-menu -->
					</li>
				</ul>
			</div><!-- End side-menu -->
			<div class="side-bar-bottom">
				<ul class="list-unstyled">
					<li class="list-inline-item" data-toggle="tooltip" data-html="true" title="Edit Profile"><a
							href="profile-edit-profile.html"><i class="fas fa-cog"></i></a></li>
					<li class="list-inline-item" data-toggle="tooltip" data-html="true" title="Change Password"><a
							href="profile-change-password.html"><i class="fas fa-key"></i></li>
					<li class="list-inline-item" data-toggle="tooltip" data-html="true" title="Lockscreen"><a
							href="#"><i class="fas fa-unlock"></i></a></li>
					<li class="list-inline-item" data-toggle="tooltip" data-html="true" title="Logout"><a href="#"><i
								class="fas fa-power-off"></i></a></li>
				</ul>
			</div><!-- End side-bar-bottom -->
		</div>