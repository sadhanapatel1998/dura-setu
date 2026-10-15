<?php
ob_start();
include("include/data.php");
?>

<main>
    <!-- Start Page Header -->
    <section class="cs_page_header cs_bg_filed" data-src="assets/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="cs_page_header_text">
                <h1 class="cs_page_header_title cs_fs_64">Conact Us</h1>
                <ul class="cs_breadcrumb cs_mp_0 cs_fs_16">
                    <li><a href="index.php">Home</a></li>
                    <li>Conact Us</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Page Header -->

    <!-- Start Contact Section -->
    <section class="cs_contact_section cs_section_padding">
        <div class="container">
            <div class="row cs_gap_y_30">
                <div class="col-lg-4 order-lg-2" data-aos="fade-up">
                    <aside class="cs_contact_info cs_radius_20 ms-lg-auto">

                        <div class="cs_contact_info_item">
                            <h2 class="cs_fs_20 cs_semibold">Office Address</h2>
                            <p class="cs_fs_14 mb-0">
                                DuraSetu Education Services<br>
                                New Delhi, India
                            </p>
                        </div>

                        <div class="cs_contact_info_item">
                            <h2 class="cs_fs_20 cs_semibold">Call Us</h2>
                            <p class="cs_fs_14 mb-0">
                                <a href="tel:+919876543210">+91 98765 43210</a><br>
                                Mon-Sat, 9:00 AM - 7:00 PM
                            </p>
                        </div>

                        <div class="cs_contact_info_item">
                            <h2 class="cs_fs_20 cs_semibold">Email</h2>
                            <div class="cs_fs_14">
                                <a href="mailto:info@durasetu.com">info@durasetu.com</a>
                                <div>We'll respond within 24 hours</div>
                            </div>
                        </div>

                        <div class="cs_contact_info_item">
                            <h2 class="cs_fs_20 cs_semibold">Connect With Us</h2>
                            <div class="cs_contact_social">
                                <a href="#" aria-label="Facebook">
                                    <i class="ri-facebook-fill"></i>
                                </a>
                                <a href="#" aria-label="X">
                                    <i class="ri-twitter-x-fill"></i>
                                </a>
                                <a href="#" aria-label="LinkedIn">
                                    <i class="ri-linkedin-fill"></i>
                                </a>
                                <a href="#" aria-label="Instagram">
                                    <i class="ri-instagram-line"></i>
                                </a>
                            </div>
                        </div>

                    </aside>
                </div>
                <div class="col-lg-8">
                    <div class="cs_contact_form_wrap">
                        <h2 class="cs_fs_32 cs_semibold cs_contact_form_title mb-4">
                            Get in Touch With DuraSetu
                        </h2>

                        <form class="cs_contact_form" action="#" method="post">

                            <div class="cs_form_input">
                                <label class="cs_form_label" for="fname">First Name</label>
                                <input class="cs_form_field cs_radius_5"
                                    type="text"
                                    id="fname"
                                    name="first-name"
                                    placeholder="Enter your first name"
                                    autocomplete="off"
                                    required>
                            </div>

                            <div class="cs_form_input">
                                <label class="cs_form_label" for="lname">Last Name</label>
                                <input class="cs_form_field cs_radius_5"
                                    type="text"
                                    id="lname"
                                    name="last-name"
                                    placeholder="Enter your last name"
                                    autocomplete="off"
                                    required>
                            </div>

                            <div class="cs_form_input">
                                <label class="cs_form_label" for="email">Email Address</label>
                                <input class="cs_form_field cs_radius_5"
                                    type="email"
                                    id="email"
                                    name="email"
                                    placeholder="Enter your email address"
                                    autocomplete="off"
                                    required>
                            </div>

                            <div class="cs_form_input">
                                <label class="cs_form_label" for="subject">Subject</label>
                                <input class="cs_form_field cs_radius_5"
                                    type="text"
                                    id="subject"
                                    name="subject"
                                    placeholder="How can DuraSetu help you?">
                            </div>

                            <div class="cs_form_input cs_full">
                                <label class="cs_form_label" for="message">Message</label>
                                <textarea class="cs_form_field cs_radius_5"
                                    id="message"
                                    name="message"
                                    rows="5"
                                    placeholder="Tell us about the university, course or admission guidance you need..."></textarea>
                            </div>

                            <div class="cs_form_input">
                                <button type="submit" class="cs_primary_btn">
                                    <span>Send Message</span>
                                    <span><i class="ri-arrow-right-s-line"></i></span>
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Section -->
    <!-- Start Map Section -->
    <!-- <div class="cs_map_section">
        <div class="cs_contact_map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48385.92470293174!2d-74.11004740347975!3d40.71536828371961!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c250d225bfafdd%3A0x249f013a2cd25d9!2sJersey%20City%2C%20NJ%2C%20USA!5e0!3m2!1sen!2sbd!4v1786764326638!5m2!1sen!2sbd" title="Lerntix office location" loading="lazy"></iframe>
        </div>
    </div> -->
    <!-- End Map Section -->

</main>







<?php
$content = ob_get_clean();
require 'layout.php';
?>