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
                            <h1 class="font-weight-semibold mb-4 hero-3-title"><b>The STED's Mission To Innovate and Succeed</b></h1>
                            <p class="mb-5 text-muted subtitle w-75 mx-auto">STED empowers student entrepreneurs through partnerships, fueling the transformation of ideas into successful
ventures for economic and societal progress.</p>
                            
                            <div>
                                <a href="membership.php" type="button" class="btn btn-primary rounded-pill me-2">JOIN US</a>
                                <a href="contact.php" type="button" class="btn btn-light rounded-pill me-2" >CONTACT US</a>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade bd-example-modal-lg" id="watchvideomodal" data-keyboard="false" tabindex="-1"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog modal-lg">
                                    <div class="modal-content hero-modal-0 bg-transparent">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        <video id="VisaChipCardVideo" class="w-100" controls="">
                                            <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
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

      <section class="container py-5">
    <div class="row justify-content-center">
        <!-- Cards Section -->
        <div class="col-lg-10">
            <div class="row g-4">
                <!-- Card 1 -->
                <div class="col-md-6">
                    <div class="card h-100 shadow">
                        <div class="card-body text-center">
                            <div class="bg-primary text-white rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                <i class="bi bi-gear-fill fs-4"></i>
                            </div>
                            <h5 class="card-title">Our Mission & Vision</h5>
                            <p class="card-text">
                               Our mission extends beyond education—it's a mission to inspire. We are dedicated to empowering the student body to see beyond the classroom, to envision their entrepreneurial ventures not just as possibilities, but as future realities. STED provides the toolkit for success—mentorship from industry veterans, access to cutting-edge resources, and a thriving network, all in place to turn students into leaders of tomorrow.

STED's vision is bold and far-reaching: to be the springboard for a new generation of entrepreneurs who drive economic dynamism and societal progress. We envision a future where our students lead the charge in innovation, pioneering sustainable solutions and businesses that challenge the status quo and contribute to a better world. </p>
                            <a href="contact.html" class="btn btn-primary rounded-pill">MORE INFO</a>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-md-6">
                    <div class="card h-100 shadow">
                        <div class="card-body text-center">
                            <div class="bg-primary text-white rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                <i class="bi bi-tools fs-4"></i>
                            </div>
                            <h5 class="card-title">Charmakar Council of Skill and Entrepreneurship Development</h5>
                            <p class="card-text">
                                The Charmakar Council of Skill and Entrepreneurship Development (CCSED) is an initiative designed to empower the Charmakar community through targeted entrepreneurship and skill development programs. It aims to provide comprehensive support including financial, legal, and technical assistance to promote business acumen and self-reliance among its members.
                            </p>
                            <a href="contact.html" class="btn btn-primary rounded-pill">MORE INFO</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



       <?php
include'footer.php';
?>