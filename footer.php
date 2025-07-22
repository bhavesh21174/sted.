    <!-- Footer Start -->
    <footer class="footer" style="background-image: url(images/footer-bg.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="mb-4">
                        <a href="images/white%20color%20logo%20(2).png"><img
                                src="images/white%20color%20logo%20(2).png" alt=""
                                class="" height="60" /></a>
                        <p class="text-white-50 my-4">The STED Incubation Forum (Startup Technologies and
                            Entrepreneurship Development) is a private, non-governmental organization established on
                            April 26, 2024, in Shirpur, Maharashtra, India..</p>
                    </div>
                </div>
                <!-- end col -->

                <div class="col-lg-7 ms-lg-auto">
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <div class="mt-4 mt-lg-0">
                                <h4 class="text-white font-size-18 mb-3">Home</h4>
                                <ul class="list-unstyled footer-sub-menu">
                                    <li><a href="#what"  class="footer-link">What We Do</a></li>
                                    <li><a href="index.php#features" class="footer-link">Abous us</a></li>
                                   
                                    <li><a href="#member" class="footer-link">Membership</a></li>
                                    <li><a href="#team" class="footer-link">Team</a></li>
                                    <li><a href="#community" class="footer-link">Community</a></li>
                                    
                                </ul>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-lg-3 col-6">
                            <div class="mt-4 mt-lg-0">
                                <h4 class="text-white font-size-18 mb-3">PAGES</h4>
                                <ul class="list-unstyled footer-sub-menu">
                                    <li><a href="index.php""javascript: void(0);" class="footer-link">HOME</a></li>
                                    <li><a href="about2.php""javascript: void(0);" class="footer-link">ABOUT</a></li>
                                    <li><a href="news.php""javascript: void(0);" class="footer-link">NEWS</a></li>
                                    <li><a href="program.php""javascript: void(0);" class="footer-link">PROGRAM</a>
                                    </li>
                                    <li><a href="membership.php""pricing""javascript: void(0);" class="footer-link">MEMBERSHIP</a></li>
                                    <li><a href="contact.php""javascript: void(0);" class="footer-link">CONTACT US</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- end col -->
                        <!-- <div class="col-lg-3 col-6">
                                <div class="mt-4 mt-lg-0">
                                    <h4 class="text-white font-size-18 mb-3">Information</h4>
                                    <ul class="list-unstyled footer-sub-menu">
                                        <li><a href="javascript: void(0);" class="footer-link">Developers</a></li>
                                        <li><a href="javascript: void(0);" class="footer-link">Support</a></li>
                                        <li><a href="javascript: void(0);" class="footer-link">Customer Service</a></li>
                                        <li><a href="javascript: void(0);" class="footer-link">Get Started</a></li>
                                        <li><a href="javascript: void(0);" class="footer-link">Guide</a></li>
                                    </ul>
                                </div>
                            </div>-->
                        <!-- end col -->
                        <div class="col-lg-3 col-6">
                            <div class="mt-4 mt-lg-0">
                                <h4 class="text-white font-size-18 mb-3">Support</h4>
                                <ul class="list-unstyled footer-sub-menu">
                                    <li><a href="javascript: void(0);" class="footer-link">contact@sted.org</a></li>
                                    <li><a href="javascript: void(0);" class="footer-link">(+91) 8767020690</a></li>
                                    <li><a href="javascript: void(0);" class="footer-link">(+91) 7741011763</a></li>

                                </ul>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center mt-5">
                       <p class="text-white-50 f-15 mb-0">
    <script>
        document.write(new Date().getFullYear())
    </script> © STED INCUBATION FORUM. DEVELOPED BY 
    <a href="https://www.asorg.co/" style="color: #ffffff;">ASORG SOFTTECH INDIA PVT. LTD.</a>
</p>

                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </footer>
    <!-- Footer End -->

    <!-- Style switcher -->
   <!-- <div id="style-switcher">
        <div class="bottom">
            <a href="javascript: void(0);" id="mode" class="mode-btn text-white">
                <i class="mdi mdi-white-balance-sunny mode-light"></i>
                <i class="mdi mdi-moon-waning-crescent mode-dark"></i>
            </a>
            <a href="javascript: void(0);" class="settings" onclick="toggleSwitcher()"><i
                    class="mdi mdi-cog  mdi-spin"></i></a>
        </div>
    </div>-->

    <!-- javascript -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/smooth-scroll.polyfills.min.js"></script>

    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- App Js -->
    <script src="js/app.js"></script>
    
    <script>
function validateForm() {
    let name = document.forms["myForm"]["name"].value.trim();
    let email = document.forms["myForm"]["email"].value.trim();
    let subject = document.forms["myForm"]["subject"].value.trim();
    let comments = document.forms["myForm"]["comments"].value.trim();

    if (name === "" || email === "" || subject === "" || comments === "") {
        document.getElementById("error-msg").innerText = "All fields are required.";
        return false;
    }

    // Validate email format
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        document.getElementById("error-msg").innerText = "Invalid email format.";
        return false;
    }

    document.getElementById("error-msg").innerText = "";
    return true;
}
</script>

</body>

<!-- Mirrored from themesbrand.com/qexal/layout/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Dec 2024 14:00:06 GMT -->