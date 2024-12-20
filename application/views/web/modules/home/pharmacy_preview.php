<!-- Breadcrumb -->
<div class="breadcrumb-bar">
	<div class="container-fluid">
		<div class="row align-items-center">
			<div class="col-md-12 col-12">
				<nav aria-label="breadcrumb" class="page-breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">Pharmacy Details</li>
					</ol>
				</nav>
				<h2 class="breadcrumb-title">Pharmacy Details</h2>
			</div>
		</div>
	</div>
</div>
<!-- /Breadcrumb -->

<!-- Page Content -->
<div class="content">
	<div class="container">

		<!-- Doctor Widget -->
		<div class="card">
			<div class="card-body">
				<div class="doctor-widget">
					<div class="doc-info-left">
						<div class="doctor-img1">
							<a href="#">
								<img src="<?php
								/** @var array $pharmacy  */
								 echo base_url().$pharmacy['profileimage'] ?>" class="img-fluid" alt="User Image">
							</a>
						</div>
						<div class="doc-info-cont">
							<h4 class="doc-name mb-2"><a href="pharmacy-details.html"><?php echo ucwords($pharmacy['first_name']) ?></a></h4>
							<div class="clinic-details">
								<div class="clini-infos pt-3">							
								<p class="doc-location mb-2"><i class="fas fa-phone-volume mr-1"></i> <?php echo '+'.$pharmacy['phonecode'].' '.$pharmacy['mobileno'] ?></p>
								<p class="doc-location mb-2 text-ellipse"><i class="fas fa-map-marker-alt mr-1"></i><?php echo $pharmacy['address1'].','.$pharmacy['address2'] ?>.</p>
								<p class="doc-location mb-2 text-ellipse"><i class="fas fa-map-marker-alt mr-1"></i><?php echo $pharmacy['city'].','.$pharmacy['statename'].','.$pharmacy['country']?>-<?php echo $pharmacy['postal_code'] ?>.</p>
									<p class="doc-location mb-2"><i class="fas fa-chevron-right mr-1">Home Delivery : <?php if($pharmacy['home_delivery']!='no') echo 'Available';else echo 'Not Available';?></i></p>
									<p class="doc-location mb-2"><i class="fas fa-chevron-right mr-1">24 hours open  : <?php if($pharmacy['24hrsopen']!='no') echo 'Available';else echo 'Not Available';?></i></p>
								<?php if($pharmacy['hrsopen'] !='no') {?>
									<p class="doc-location mb-2"><i class="fas fa-chevron-right mr-1"></i>Opens at <?php echo $pharmacy['pharamcy_opens_at'];?></p>
								<?php }?>
							</div>
							<?php //echo "<pre>";print_r($pharmacy); ?>
							</div>
						</div>
					</div>
					<div class="doc-info-right d-flex align-items-center justify-content-center">
						<div class="clinic-booking">
							<!-- <a class="view-pro-btn" href="chat.html">Send Message</a> -->
							<!-- <a class="apt-btn" href="#" data-toggle="modal" data-target="#voice_call">Call Now</a> -->
							<a href="<?php echo base_url().'home/view_pharmacy_products/'.base64_encode($pharmacy["pharmacy_id"])?>" class="apt-btn">Browse Products</a>
						</div>
					</div>
				</div>
				
			</div>
		</div>
		<!-- /Doctor Widget -->
		
		<!-- Doctor Details Tab -->
		<div class="card">
			<div class="card-body pt-0">
			
				<!-- Tab Menu -->
				<nav class="user-tabs mb-4">
					<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
						<!-- <li class="nav-item">
							<a class="nav-link active" href="#doc_overview" data-toggle="tab">Overview</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#doc_locations" data-toggle="tab">Locations</a>
						</li> -->
						<!-- <li class="nav-item">
							<a class="nav-link" href="#doc_reviews" data-toggle="tab">Reviews</a>
						</li> -->
						<!-- <li class="nav-item">
							<a class="nav-link" href="#doc_business_hours" data-toggle="tab">Business Hours</a>
						</li> -->
					</ul>
				</nav>
				<!-- /Tab Menu -->
				
				<!-- Tab Content -->
				<div class="tab-content pt-0">
				
					<!-- Overview Content -->
					<div role="tabpanel" id="doc_overview" class="tab-pane fade show ">
						<div class="row">
							<div class="col-md-9">
							
								<!-- About Details -->
								<div class="widget about-widget">
									<h4 class="widget-title">About Me</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								</div>
								<!-- /About Details -->
							
							
								<!-- Awards Details -->
								<div class="widget awards-widget">
									<h4 class="widget-title">Awards</h4>
									<div class="experience-box">
										<ul class="experience-list">
											<li>
												<div class="experience-user">
													<div class="before-circle"></div>
												</div>
												<div class="experience-content">
													<div class="timeline-content">
														<p class="exp-year">July 2019</p>
														<h4 class="exp-title">Humanitarian Award</h4>
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
													</div>
												</div>
											</li>
											<li>
												<div class="experience-user">
													<div class="before-circle"></div>
												</div>
												<div class="experience-content">
													<div class="timeline-content">
														<p class="exp-year">March 2011</p>
														<h4 class="exp-title">Certificate for International Volunteer Service</h4>
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
													</div>
												</div>
											</li>
											<li>
												<div class="experience-user">
													<div class="before-circle"></div>
												</div>
												<div class="experience-content">
													<div class="timeline-content">
														<p class="exp-year">May 2008</p>
														<h4 class="exp-title">The Dental Professional of The Year Award</h4>
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
													</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
								<!-- /Awards Details -->

							</div>
						</div>
					</div>
					<!-- /Overview Content -->
					
					<!-- Locations Content -->
					<div role="tabpanel" id="doc_locations" class="tab-pane fade">
					
						<!-- Location List -->
						<div class="location-list">
							<div class="row">
							
								<!-- Clinic Content -->
								<div class="col-md-6">
									<div class="clinic-content">
										<h4 class="clinic-name"><a href="#">Medlife Medical</a></h4>
										<div class="rating">
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star"></i>
											<span class="d-inline-block average-rating">(4)</span>
										</div>
										<div class="clinic-details mb-0">
											<h5 class="clinic-direction"> <i class="fas fa-map-marker-alt"></i> 96 Red Hawk Road Cyrus, MN 56323  <br><a href="javascript:void(0);">Get Directions</a></h5>
											<ul>
												<li>
													<a href="assets/img/features/feature-01.jpg" data-fancybox="gallery2">
														<img src="assets/img/features/feature-01.jpg" alt="Feature Image">
													</a>
												</li>
												<li>
													<a href="assets/img/features/feature-02.jpg" data-fancybox="gallery2">
														<img src="assets/img/features/feature-02.jpg" alt="Feature Image">
													</a>
												</li>
												<li>
													<a href="assets/img/features/feature-03.jpg" data-fancybox="gallery2">
														<img src="assets/img/features/feature-03.jpg" alt="Feature Image">
													</a>
												</li>
												<li>
													<a href="assets/img/features/feature-04.jpg" data-fancybox="gallery2">
														<img src="assets/img/features/feature-04.jpg" alt="Feature Image">
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<!-- /Clinic Content -->
								
								<!-- Clinic Timing -->
								<div class="col-md-6">
									<div class="clinic-timing">
										<div>
											<p class="timings-days">
												<span> Mon - Sat </span>
											</p>
											<p class="timings-times">
												<span>10:00 AM - 2:00 PM</span>
												<span>4:00 PM - 9:00 PM</span>
											</p>
										</div>
										<div>
										<p class="timings-days">
											<span>Sun</span>
										</p>
										<p class="timings-times">
											<span>10:00 AM - 2:00 PM</span>
										</p>
										</div>
									</div>
								</div>
								<!-- /Clinic Timing -->
								
							</div>
						</div>
						<!-- /Location List -->
						
						<!-- Location List -->
						<div class="location-list">
							<div class="row">
							
								<!-- Clinic Content -->
								<div class="col-md-6">
									<div class="clinic-content">
										<h4 class="clinic-name"><a href="#">Medlife Medical</a></h4>
										<div class="rating">
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star"></i>
											<span class="d-inline-block average-rating">(4)</span>
										</div>
										<div class="clinic-details mb-0">
											<p class="clinic-direction"> <i class="fas fa-map-marker-alt"></i> 310 Cambridge Drive New River, AZ 85020  <br><a href="javascript:void(0);">Get Directions</a></p>
											<ul>
												<li>
													<a href="assets/img/features/feature-01.jpg" data-fancybox="gallery2">
														<img src="assets/img/features/feature-01.jpg" alt="Feature Image">
													</a>
												</li>
												<li>
													<a href="assets/img/features/feature-02.jpg" data-fancybox="gallery2">
														<img src="assets/img/features/feature-02.jpg" alt="Feature Image">
													</a>
												</li>
												<li>
													<a href="assets/img/features/feature-03.jpg" data-fancybox="gallery2">
														<img src="assets/img/features/feature-03.jpg" alt="Feature Image">
													</a>
												</li>
												<li>
													<a href="assets/img/features/feature-04.jpg" data-fancybox="gallery2">
														<img src="assets/img/features/feature-04.jpg" alt="Feature Image">
													</a>
												</li>
											</ul>
										</div>

									</div>
								</div>
								<!-- /Clinic Content -->
								
								<!-- Clinic Timing -->
								<div class="col-md-6">
									<div class="clinic-timing">
										<div>
											<p class="timings-days">
												<span> Tue - Fri </span>
											</p>
											<p class="timings-times">
												<span>11:00 AM - 1:00 PM</span>
												<span>6:00 PM - 11:00 PM</span>
											</p>
										</div>
										<div>
											<p class="timings-days">
												<span>Sat - Sun</span>
											</p>
											<p class="timings-times">
												<span>8:00 AM - 10:00 AM</span>
												<span>3:00 PM - 7:00 PM</span>
											</p>
										</div>
									</div>
								</div>
								<!-- /Clinic Timing -->
								
							</div>
						</div>
						<!-- /Location List -->

					</div>
					<!-- /Locations Content -->
					
					<!-- Reviews Content -->
					<div role="tabpanel" id="doc_reviews" class="tab-pane fade">
					
						<!-- Review Listing -->
						<div class="widget review-listing">
							<ul class="comments-list">
							
								<!-- Comment List -->
								<li>
									<div class="comment">
										<img class="avatar avatar-sm rounded-circle" alt="User Image" src="assets/img/patients/patient.jpg">
										<div class="comment-body">
											<div class="meta-data">
												<span class="comment-author">Armando Pack</span>
												<span class="comment-date">Reviewed 2 Days ago</span>
												<div class="review-count rating">
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star"></i>
												</div>
											</div>
											<p class="recommended"><i class="far fa-thumbs-up"></i> I recommend the doctor</p>
											<p class="comment-content">
												Lorem ipsum dolor sit amet, consectetur adipisicing elit,
												sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
												Ut enim ad minim veniam, quis nostrud exercitation.
												Curabitur non nulla sit amet nisl tempus
											</p>
											<div class="comment-reply">
												<a class="comment-btn" href="#">
													<i class="fas fa-reply"></i> Reply
												</a>
											   <p class="recommend-btn">
												<span>Recommend?</span>
												<a href="#" class="like-btn">
													<i class="far fa-thumbs-up"></i> Yes
												</a>
												<a href="#" class="dislike-btn">
													<i class="far fa-thumbs-down"></i> No
												</a>
											</p>
											</div>
										</div>
									</div>
									
									<!-- Comment Reply -->
									<ul class="comments-reply">
										<li>
											<div class="comment">
												<img class="avatar avatar-sm rounded-circle" alt="User Image" src="assets/img/patients/patient1.jpg">
												<div class="comment-body">
													<div class="meta-data">
														<span class="comment-author">Lindsey Kesterson</span>
														<span class="comment-date">Reviewed 3 Days ago</span>
														<div class="review-count rating">
															<i class="fas fa-star filled"></i>
															<i class="fas fa-star filled"></i>
															<i class="fas fa-star filled"></i>
															<i class="fas fa-star filled"></i>
															<i class="fas fa-star"></i>
														</div>
													</div>
													<p class="comment-content">
														Lorem ipsum dolor sit amet, consectetur adipisicing elit,
														sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
														Ut enim ad minim veniam.
														Curabitur non nulla sit amet nisl tempus
													</p>
													<div class="comment-reply">
														<a class="comment-btn" href="#">
															<i class="fas fa-reply"></i> Reply
														</a>
														<p class="recommend-btn">
															<span>Recommend?</span>
															<a href="#" class="like-btn">
																<i class="far fa-thumbs-up"></i> Yes
															</a>
															<a href="#" class="dislike-btn">
																<i class="far fa-thumbs-down"></i> No
															</a>
														</p>
													</div>
												</div>
											</div>
										</li>
									</ul>
									<!-- /Comment Reply -->
									
								</li>
								<!-- /Comment List -->
								
								<!-- Comment List -->
								<li>
									<div class="comment">
										<img class="avatar avatar-sm rounded-circle" alt="User Image" src="assets/img/patients/patient2.jpg">
										<div class="comment-body">
											<div class="meta-data">
												<span class="comment-author">Travis Trimble</span>
												<span class="comment-date">Reviewed 4 Days ago</span>
												<div class="review-count rating">
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star"></i>
												</div>
											</div>
											<p class="comment-content">
												Lorem ipsum dolor sit amet, consectetur adipisicing elit,
												sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
												Ut enim ad minim veniam, quis nostrud exercitation.
												Curabitur non nulla sit amet nisl tempus
											</p>
											<div class="comment-reply">
												<a class="comment-btn" href="#">
													<i class="fas fa-reply"></i> Reply
												</a>
												<p class="recommend-btn">
													<span>Recommend?</span>
													<a href="#" class="like-btn">
														<i class="far fa-thumbs-up"></i> Yes
													</a>
													<a href="#" class="dislike-btn">
														<i class="far fa-thumbs-down"></i> No
													</a>
												</p>
											</div>
										</div>
									</div>
								</li>
								<!-- /Comment List -->
								
							</ul>
							
							<!-- Show All -->
							<div class="all-feedback text-center">
								<a href="#" class="btn btn-primary btn-sm">
									Show all feedback <strong>(167)</strong>
								</a>
							</div>
							<!-- /Show All -->
							
						</div>
						<!-- /Review Listing -->
					
						<!-- Write Review -->
						<div class="write-review">
							<h4>Write a review for <strong>Medlife Medical</strong></h4>
							
							<!-- Write Review Form -->
							<form>
								<div class="form-group">
									<label>Review</label>
									<div class="star-rating">
										<input id="star-5" type="radio" name="rating" value="star-5">
										<label for="star-5" title="5 stars">
											<i class="active fa fa-star"></i>
										</label>
										<input id="star-4" type="radio" name="rating" value="star-4">
										<label for="star-4" title="4 stars">
											<i class="active fa fa-star"></i>
										</label>
										<input id="star-3" type="radio" name="rating" value="star-3">
										<label for="star-3" title="3 stars">
											<i class="active fa fa-star"></i>
										</label>
										<input id="star-2" type="radio" name="rating" value="star-2">
										<label for="star-2" title="2 stars">
											<i class="active fa fa-star"></i>
										</label>
										<input id="star-1" type="radio" name="rating" value="star-1">
										<label for="star-1" title="1 star">
											<i class="active fa fa-star"></i>
										</label>
									</div>
								</div>
								<div class="form-group">
									<label>Title of your review</label>
									<input class="form-control" type="text" placeholder="If you could say it in one sentence, what would you say?">
								</div>
								<div class="form-group">
									<label>Your review</label>
									<textarea id="review_desc" maxlength="100" class="form-control"></textarea>
								  
								  <div class="d-flex justify-content-between mt-3"><small class="text-muted"><span id="chars">100</span> characters remaining</small></div>
								</div>
								<hr>
								<div class="form-group">
									<div class="terms-accept">
										<div class="custom-checkbox">
										   <input type="checkbox" id="terms_accept">
										   <label for="terms_accept">I have read and accept <a href="#">Terms &amp; Conditions</a></label>
										</div>
									</div>
								</div>
								<div class="submit-section">
									<button type="submit" class="btn btn-primary submit-btn">Add Review</button>
								</div>
							</form>
							<!-- /Write Review Form -->
							
						</div>
						<!-- /Write Review -->
			
					</div>
					<!-- /Reviews Content -->
					
					<!-- Business Hours Content -->
					<div role="tabpanel" id="doc_business_hours" class="tab-pane fade">
						<div class="row">
							<div class="col-md-6 offset-md-3">
							
								<!-- Business Hours Widget -->
								<div class="widget business-widget">
									<div class="widget-content">
										<div class="listing-hours">
											<div class="listing-day current">
												<div class="day">Today <span>5 Nov 2019</span></div>
												<div class="time-items">
													<span class="open-status"><span class="badge bg-success-light">Open Now</span></span>
													<span class="time">07:00 AM - 09:00 PM</span>
												</div>
											</div>
											<div class="listing-day">
												<div class="day">Monday</div>
												<div class="time-items">
													<span class="time">07:00 AM - 09:00 PM</span>
												</div>
											</div>
											<div class="listing-day">
												<div class="day">Tuesday</div>
												<div class="time-items">
													<span class="time">07:00 AM - 09:00 PM</span>
												</div>
											</div>
											<div class="listing-day">
												<div class="day">Wednesday</div>
												<div class="time-items">
													<span class="time">07:00 AM - 09:00 PM</span>
												</div>
											</div>
											<div class="listing-day">
												<div class="day">Thursday</div>
												<div class="time-items">
													<span class="time">07:00 AM - 09:00 PM</span>
												</div>
											</div>
											<div class="listing-day">
												<div class="day">Friday</div>
												<div class="time-items">
													<span class="time">07:00 AM - 09:00 PM</span>
												</div>
											</div>
											<div class="listing-day">
												<div class="day">Saturday</div>
												<div class="time-items">
													<span class="time">07:00 AM - 09:00 PM</span>
												</div>
											</div>
											<div class="listing-day closed">
												<div class="day">Sunday</div>
												<div class="time-items">
													<span class="time"><span class="badge bg-danger-light">Closed</span></span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /Business Hours Widget -->
						
							</div>
						</div>
					</div>
					<!-- /Business Hours Content -->
					
				</div>
			</div>
		</div>
		<!-- /Doctor Details Tab -->

	</div>
</div>		
<!-- /Page Content
