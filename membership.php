<?php
include'head.php';
?>
        <!-- Navbar End -->

        <!-- Hero Start -->
        <section class="hero-3 bg-center position-relative" style="background-image: url(images/hero-3-bg.png);" id="home">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center">
                            <h1 class="font-weight-semibold mb-4 hero-3-title"><b>Membership page</b></h1>
                            <p class="mb-5 text-muted subtitle w-75 mx-auto">Becoming a member of the STED Incubation Forum opens the door to a world of opportunities for innovators, entrepreneurs, and startups.</p>
                            
                          
                        <div>
                            <button type="button" class="btn btn-primary rounded-pill me-2"><a href="contact.php" style="  color: #fff;">Contact Us</a></button>
                           <!-- <button type="button" class="btn btn-light rounded-pill me-2" data-bs-toggle="modal"
                                ><a href="contact.php">CONTACT US</a></button-->
                        </div>
                            <!-- Modal -->
                            <div class="modal fade bd-example-modal-lg" id="watchvideomodal" data-keyboard="false" tabindex="-1"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog modal-lg">
                                    <div class="modal-content hero-modal-0 bg-transparent">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        <video id="VisaChipCardVideo" class="w-100" controls="">
                                            <source src="" type="video/mp4">
                                            <!--Browser does not support <video> tag -->
                                        </video>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div>
        </section>
        <!-- Hero End -->

        <!-- Pricing start -->
        <section class="section" id="pricing">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-7 text-center">
                        <h2 class="fw-bold">Membership Plan</h2>
                        <p class="text-muted">The STED Incubation Forum offers flexible pricing plans designed to cater to the diverse needs of student entrepreneurs and innovators. Our goal is to ensure that every aspiring entrepreneur has access to resources, mentorship, and opportunities regardless of their financial background.</p>
                    </div>
                </div>
                <!-- end row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mb-4 pricing-tab">
                           <!-- <ul class="nav nav-pills rounded-pill justify-content-center d-inline-block shadow-sm" id="pricingpills-tab" role="tablist">
                                <li class="nav-item d-inline-block">
                                    <a class="nav-link rounded-pill active" id="pills-monthly-tab" data-bs-toggle="pill" href="#pills-monthly" role="tab" aria-controls="pills-monthly" aria-selected="true">Monthly</a>
                                </li>
                                <li class="nav-item d-inline-block">
                                    <a class="nav-link rounded-pill" id="pills-yearly-tab" data-bs-toggle="pill" href="#pills-yearly" role="tab" aria-controls="pills-yearly" aria-selected="false">Yearly</a>
                                </li>
                            </ul>-->
                        </div>
                        <div class="tab-content" id="pricingpills-tabContent">
                            <div class="tab-pane fade show active" id="pills-monthly" role="tabpanel" aria-labelledby="pills-monthly-tab">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="card plan-card mt-4 rounded text-center border-0 shadow overflow-hidden">
                                            <div class="card-body px-4 py-5">
                                                <!-- <div class="icon-mono avatar-md bg-soft-primary text-primary rounded mx-auto mb-5"><i class="icon-lg" data-feather="circle"></i></div> -->
                                                <div class="icon-mono avatar-md bg-soft-primary rounded mx-auto mb-5 p-3">
                                                    <img src="images/pricing/1.png" alt="" class="img-fluid d-block mx-auto" />
                                                </div>
                                                <h4 class="text-uppercase mb-4 pb-1"><b>College Entrepreneurship</b></h4>
                                                <p <b>Idea Validation</b></p>
                                                <p <b>Pitch & Finance Review</b></p>
                                                <p <b>Seed Fund & Gov. Fund Support</b></p>
                                                <p <b>Investor Presentation</b></p>
                                                <p <b>One Click Mentorship</b></p>
                                                <p <b>DPIIT & Incubation Support</b></p>
                                                <p <b>One-Year Membership</b></p>
                                                <p <b>Additional Benefits</b></p>
                                               <!-- <p class="text-muted">Onlinespace: <span class="fw-bold">50MB</span></p>
                                                <p class="text-muted">Support: <span class="fw-bold">No</span></p>
                                                <p class="text-muted mb-4 pb-1">Domain 1</p>
                                                <p class="text-muted font-size-14 mb-1">All Extension Included</p>-->
                                                <p class="font-size-16 font-weight-semibold mb-4 price-tag">Rs.999/-Year</p>
                                                <a href="javascript: void(0);" class="btn btn-soft-primary">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-lg-4">
                                        <div class="card plan-card mt-4 rounded text-center border-0 shadow overflow-hidden">
                                            <div class="card-body px-4 py-5">
                                               <!-- <span class="badge badge-primary pricing-badge shadow-lg">Most Popular</span>-->
                                                <!-- <div class="icon-mono avatar-md bg-soft-primary text-primary rounded mx-auto mb-5"><i class="icon-lg" data-feather="square"></i></div> -->
                                                <div class="icon-mono avatar-md bg-soft-primary rounded mx-auto mb-5 p-3">
                                                    <img src="images/pricing/2.png" alt="" class="img-fluid d-block mx-auto" />
                                                </div>
                                                <h4 class="text-uppercase mb-4 pb-1"><b>Learn & Earn Entrepreneurship</b></h4>
                                                <p <b>Internship Support</b></p>
                                                <p <b>Paid Internship Support</b></p>
                                                <p <b>Job Support</b></p>
                                                <p <b>Part-Time Job Support</b></p>
                                                <p <b>Free Resume Writing Course</b></p>
                                                <p <b>Mock Interview Practices</b></p>
                                                <p <b>Interview Tips & Tricks</b></p>
                                                <p <b>One-Year Membership</b></p>
                                                <p <b></b></p>
                                                <p <b></b></p>
                                                
                                               <!-- <p class="text-muted">Onlinespace: <span class="fw-bold">100MB</span></p>
                                                <p class="text-muted">Support: <span class="fw-bold">Yes</span></p>
                                                <p class="text-muted mb-4 pb-1">Domain 1</p>
                                                <p class="text-muted font-size-14 mb-1">All Extension Included</p>-->
                                                <p class="font-size-16 font-weight-semibold mb-4 price-tag">Rs.399/-Year</p>
                                                <a href="javascript: void(0);" class="btn btn-primary">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-lg-4">
                                        <div class="card plan-card mt-4 rounded text-center border-0 shadow overflow-hidden">
                                            <div class="card-body px-4 py-5">
                                                <!-- <div class="icon-mono avatar-md bg-soft-primary text-primary rounded mx-auto mb-5"><i class="icon-lg" data-feather="triangle"></i></div> -->
                                                <div class="icon-mono avatar-md bg-soft-primary rounded mx-auto mb-5 p-3">
                                                    <img src="images/pricing/3.png" alt="" class="img-fluid d-block mx-auto" />
                                                </div>
                                                <h4 class="text-uppercase mb-4 pb-1"><b>STED Premium Membership (With Member Card)</b></h4>
                                                <p <b>Free Access to Workshops</b></p>
                                                <p <b>Priority Service</b></p>
                                                <p <b>Exclusive Offers</b></p>
                                                <p <b>Networking Opportunities</b></p>
                                                <p <b>Discounts on Services</b></p>
                                                <p <b>Early Access to New Programs</b></p>
                                                <p <b>Special Recognition</b></p>
                                                <p <b>Personalized Guidance</b></p>
                                                <p <b></b></p>
                                                <p <b></b></p>
                                                <p <b></b></p>
                                               <!-- <p class="text-muted">Onlinespace: <span class="fw-bold">200MB</span></p>
                                                <p class="text-muted">Support: <span class="fw-bold">No</span></p>
                                                <p class="text-muted mb-4 pb-1">Domain 1</p>
                                                <p class="text-muted font-size-14 mb-1">All Extension Included</p>-->
                                                <p class="font-size-16 font-weight-semibold mb-4 price-tag">Rs.1,500/-Year</p>
                                                <a href="javascript: void(0);" class="btn btn-soft-primary">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                </div>
                                <!-- end row -->
                            </div>
                            <!-- end monthly tab pane -->

                            <div class="tab-pane fade" id="pills-yearly" role="tabpanel" aria-labelledby="pills-yearly-tab">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="card plan-card mt-4 rounded text-center border-0 shadow overflow-hidden">
                                            <div class="card-body px-4 py-5">
                                                <!-- <div class="icon-mono avatar-md bg-soft-primary text-primary rounded mx-auto mb-5"><i class="icon-lg" data-feather="circle"></i></div> -->
                                                <div class="icon-mono avatar-md bg-soft-primary rounded mx-auto mb-5 p-3">
                                                    <img src="images/pricing/1.png" alt="" class="img-fluid d-block mx-auto" />
                                                </div>
                                                <h4 class="text-uppercase mb-4 pb-1">Basic</h4>
                                                <p class="text-muted">Onlinespace: <span class="fw-bold">50MB</span></p>
                                                <p class="text-muted">Support: <span class="fw-bold">No</span></p>
                                                <p class="text-muted mb-4 pb-1">Domain 1</p>
                                                <p class="text-muted font-size-14 mb-1">All Extension Included</p>
                                                <p class="font-size-16 font-weight-semibold mb-4 price-tag">$29.00 / Year</p>
                                                <a href="javascript: void(0);" class="btn btn-soft-primary">Buy Now</a>
                                            </div>
                                            <!-- end cardbody -->
                                        </div>
                                        <!-- end card -->
                                    </div>
                                    <!-- end col -->
                                    <div class="col-lg-4">
                                        <div class="card plan-card mt-4 rounded text-center border-0 shadow overflow-hidden">
                                            <div class="card-body px-4 py-5">
                                                <!-- <div class="icon-mono avatar-md bg-soft-primary text-primary rounded mx-auto mb-5"><i class="icon-lg" data-feather="square"></i></div> -->
                                                <div class="icon-mono avatar-md bg-soft-primary rounded mx-auto mb-5 p-3">
                                                    <img src="images/pricing/2.png" alt="" class="img-fluid d-block mx-auto" />
                                                </div>
                                                <h4 class="text-uppercase mb-4 pb-1">Standard</h4>
                                                <p class="text-muted">Onlinespace: <span class="fw-bold">100MB</span></p>
                                                <p class="text-muted">Support: <span class="fw-bold">Yes</span></p>
                                                <p class="text-muted mb-4 pb-1">Domain 1</p>
                                                <p class="text-muted font-size-14 mb-1">All Extension Included</p>
                                                <p class="font-size-16 font-weight-semibold mb-4 price-tag">$49.00 / Year</p>
                                                <a href="javascript: void(0);" class="btn btn-soft-primary">Buy Now</a>
                                            </div>
                                            <!-- end cardbody -->
                                        </div>
                                        <!-- end card -->
                                    </div>
                                    <!-- end col -->
                                    <div class="col-lg-4">
                                        <div class="card plan-card mt-4 rounded text-center border-0 shadow overflow-hidden">
                                            <div class="card-body px-4 py-5">
                                                <span class="badge badge-primary pricing-badge shadow-lg">Most Popular</span>
                                                <!-- <div class="icon-mono avatar-md bg-soft-primary text-primary rounded mx-auto mb-5"><i class="icon-lg" data-feather="triangle"></i></div> -->
                                                <div class="icon-mono avatar-md bg-soft-primary rounded mx-auto mb-5 p-3">
                                                    <img src="images/pricing/3.png" alt="" class="img-fluid d-block mx-auto" />
                                                </div>
                                                <h4 class="text-uppercase mb-4 pb-1">Premium</h4>
                                                <p class="text-muted">Onlinespace: <span class="fw-bold">200MB</span></p>
                                                <p class="text-muted">Support: <span class="fw-bold">No</span></p>
                                                <p class="text-muted mb-4 pb-1">Domain 1</p>
                                                <p class="text-muted font-size-14 mb-1">All Extension Included</p>
                                                <p class="font-size-16 font-weight-semibold mb-4 price-tag">$99.00 / Year</p>
                                                <a href="javascript: void(0);" class="btn btn-soft-primary">Buy Now</a>
                                            </div>
                                            <!-- end cardbody -->
                                        </div>
                                        <!-- end card -->
                                    </div>
                                    <!-- end col -->
                                </div>
                            </div>
                            <!-- end yearly tab pane -->
                        </div>
                        <!-- end tab content -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- Pricing end -->

        <!-- Contact us start -->
     <!--   <section class="section" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="fw-bold mb-4">Get in Touch</h2>
                        <p class="text-muted mb-5">Got questions about the STED Incubation Forum? Whether you're a student entrepreneur seeking guidance, a mentor looking to inspire, or an organization aiming to collaborate, our team is ready to connect with you and help you join our programs or partner with us!</p>
                       
                        <div>
                            <form method="post" name="myForm" onsubmit="return validateForm()">
                                <p id="error-msg"></p>
                                <div id="simple-msg"></div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <label for="name" class="text-muted form-label">Name</label>
                                            <input name="name" id="name" type="text" class="form-control" placeholder="Enter name*" >
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <label for="email" class="text-muted form-label">Email</label>
                                            <input name="email" id="email" type="email" class="form-control" placeholder="Enter email*">
                                        </div>
                                    </div>
                        
                                    <div class="col-md-12">
                                        <div class="mb-4">
                                            <label for="subject" class="text-muted form-label">Subject</label>
                                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject.." />
                                        </div>
    
                                        <div class="mb-4 pb-2">
                                            <label for="comments" class="text-muted form-label">Message</label>
                                            <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Enter message..."></textarea>
                                        </div>
    
                                        <button type="submit" id="submit" name="send" class="btn btn-primary">Send Message</button>
                                    </div>
                                    
                                </div>
                            
                            </form>
                    
                        </div>
                    </div>
                    

                    <div class="col-lg-5 ms-lg-auto">
                        <div class="mt-5 mt-lg-0">
                            <img src="images/contact.png" alt="" class="img-fluid d-block" />
                            <p class="text-muted mt-5 mb-3"><i class="me-2 text-muted icon icon-xs" data-feather="mail"></i> Support@info.com</p>
                            <p class="text-muted mb-3"><i class="me-2 text-muted icon icon-xs" data-feather="phone"></i>+91 8767020690 </p>
                            <p class="text-muted mb-3"><i class="me-2 text-muted icon icon-xs" data-feather="phone"></i>+91 7741011763</p>
                            <p class="text-muted mb-3"><i class="me-2 text-muted icon icon-xs" data-feather="map-pin"></i>Asorg Group office,Shirpur </p>
                            <ul class="list-inline pt-4">
                                <li class="list-inline-item me-3">
                                    <a href="https://www.linkedin.com/company/icedorgnisation/""javascript: void(0);" class="social-icon icon-mono avatar-xs rounded-circle"><i class="icon-xs" data-feather="facebook"></i></a>
                                </li>
                                <li class="list-inline-item me-3">
                                    <a href=" https://x.com/STEDForum""javascript: void(0);" class="social-icon icon-mono avatar-xs rounded-circle"><i class="icon-xs" data-feather="twitter"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://www.instagram.com/asorg.in?igsh=aHQ1Y2RleW92OGVs""javascript: void(0);" class="social-icon icon-mono avatar-xs rounded-circle"><i class="icon-xs" data-feather="instagram"></i></a>
                                </li>
                            </ul>
                        </div>s
                    </div>
                    
                </div>
            
            </div>
            
        </section>-->
        <!-- Contact us end -->

        <!-- Footer Start -->
        <?php
include'footer.php';
?>