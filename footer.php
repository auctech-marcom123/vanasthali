<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class="auto-container">
    <!--Widgets Section-->
    <div class="widgets-section">
        <div class="row clearfix">
            <!--big column-->
            <div class="big-column col-lg-8 col-md-12 col-sm-12">
                <div class="row clearfix">
                    <!--Footer Column-->
                    <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                        <div class="footer-widget contact-widget">
                            <h4 class="widget-title">Address</h4>
                            <ul class="contact-info-list">
                                <li><strong>Write us:</strong> <a
                                        href="contactus@vanasthaligroup.in">contactus@vanasthaligroup.in</a></li>
                                <li><strong>Call us:</strong> <a href="tel:+91 8433332666">+91 – 84333 32666 , <a
                                            href="tel:+917239000078">+91 – 72390 00078,</a></a></li>
                                <li><strong>Visit us:</strong> 1/543, VARDAN KHAND, SEC.-1 <br>GOMTI NAGAR EXTENSION
                                    LUCKNOW- 226010</li>
                            </ul>
                            <ul class="social-links d-flex mt-3">
                                <li><a href="https://x.com/i/flow/login?redirect_after_login=%2Fvanasthaligroup"><span><i class="fa-brands fa-x-twitter"></i></span></a></li>
                                <li><a href="https://www.facebook.com/VANASTHALIGROUP?mibextid=LQQJ4d&rdid=OmA8IqtEmAgzXwCy&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2FcZRVe3rrFjxemYRS%2F%3Fmibextid%3DLQQJ4d#"><span class="fab fa-facebook-square"></span></a></li>
                                <li><a href="https://www.youtube.com/@vanasthaligroup8480"><span><i class="fa-brands fa-youtube"></i></span></a></li>
                                <li><a href="https://www.instagram.com/vanasthaligroup/?igsh=MTB3aXB5ZXAxa3NpaQ%3D%3D&utm_source=qr"><span class="fab fa-instagram"></span></a></li>
                            </ul>

                        </div>
                    </div>

                    <!--Footer Column-->
                    <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                        <div class="footer-widget agent-widget">
                            <h4 class="widget-title">Quick Links</h4>
                            <ul class="contact-info-list">
                                <li><a href="https://www.auctech.in/vanasthali/">Home</a></li>
                                <li> <a href="https://www.auctech.in/vanasthali/about.php">About Us</a></li>
                                <li><a href="https://www.auctech.in/vanasthali/director-message.php">Director Message</a></li>
                                <li><a href="https://www.auctech.in/vanasthali/vision&mission.php">Vanasthali Farm</a></li>
                                <li><a href="https://www.auctech.in/vanasthali/Vanasthali Farms.php">Vision & Mission</a></li>
                                <li><a href="https://www.auctech.in/vanasthali/gallery.php">Gallery</a></li>
                                <li><a href="https://www.auctech.in/vanasthali/contact.php">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>


                </div>
            </div>

            <!--big column-->
            <div class="big-column col-lg-4 col-md-12 col-sm-12">
                <div class="row clearfix">
                    <!--Footer Column-->
                    <div class="footer-column col-lg-12 col-md-12 col-sm-12">
                        <div class="footer-widget form-widget">
                            <h4 class="widget-title">ENQUIRE</h4>

                            <div class="request-form">
                                <form method="POST" action="save_contact.php" id="enquiryForm" class="contact-form">
                                    <div class="form-group">
                                        <input type="text" name="name" placeholder="Your name" required="">
                                    </div>

                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Email address" required="">
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="phone" placeholder="Phone number" required="">
                                    </div>

                                    <div class="form-group" style="height: 100px;">
                                        <textarea style="height: 90px;" name="message"
                                            placeholder="Write message"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <button class="theme-btn btn-style-one" type="submit" name="Submit"><span
                                                class="btn-title">Send message</span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer Bottom -->
<div class="footer-bottom">
    <div class="auto-container">
        <div class="inner-container">
            <div class="clearfix">
                <!-- Social Links -->


                <div class="copyright">&copy; Copyright 2024 Vanasthali Group | Design & Developed by- <a
                        href="https://auctech.in" class="text-warning">Auctech MarCom</a></div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
$(document).ready(function() {
    $('#enquiryForm').submit(function(e) {
        e.preventDefault(); // Prevent the form from submitting normally

        // Serialize the form data
        var formData = $(this).serialize();

        // AJAX request
        $.ajax({
            url: 'save_contact.php', // PHP file that processes the form
            type: 'POST',
            data: formData,
            success: function(response) {
                if (response == 'success') {
                    // Display a success message using SweetAlert
                    Swal.fire({
                        icon: 'success',
                        title: 'Message Sent!',
                        text: 'Your message has been sent successfully.',
                    }).then(function() {
                        // Clear the form fields after successful submission
                        $('#enquiryForm')[0]
                    .reset(); // This will reset all form fields
                    });
                } else {
                    // Display an error message
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong. Please try again later.',
                    });
                }
            },
            error: function() {
                // In case of AJAX failure
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Something went wrong. Please try again later.',
                });
            }
        });
    });
});
</script>
<style>
    .social-links {
    list-style: none;  /* Remove default list styling */
    padding: 0;         /* Remove default padding */
    margin: 0;          /* Remove default margin */
    display: flex;      /* Display list items in a row */
}

.social-links li {
    margin-right: 15px; /* Space between social icons */
}

.social-links li:last-child {
    margin-right: 0; /* Remove space after the last item */
}

.social-links a {
    display: inline-block;
    text-decoration: none;  /* Remove underline from links */
    color: inherit;         /* Inherit color from parent */
}

.social-links span {
    font-size: 17px;
    color: orange;   /* Adjust the icon size */
}

</style>