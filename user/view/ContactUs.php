<!-- 
    File: user/view/ContactUs.php
    Author: Yash Balotiya
    Description: This page contains all the HTML5 code of the Contact Us page.
    Created on: 31/07/2024
    Last Modified: 08/11/2024
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Data -->
    <?php include_once "../../shared/view/HeadMetaData.html" ?>

    <!-- Main Style -->
    <link rel="stylesheet" href="../style/ContactUsStyle.css">
    <link rel="stylesheet" href="../style/mobile/ContactUsMobile.css">
</head>

<body>
    <!-- Navbar -->
    <?php include_once "../../shared/view/Navbar.html" ?>

    <!-- Main Content -->
    <main>
        <!-- Section 1 Intro -->
        <section id="introTitle">
            <h1>Santani Life Care Foundation</h1>
        </section>

        <!-- Section 2 Phone -->
        <section class="contactDiv">
            <p>Contact Us On</p>
            <div>
                <span>
                    <i class="fa-duotone fa-solid fa-phone-volume"></i>
                    &nbsp;
                    <a href="">+91 90047 52929</a>
                </span>

                <span>
                    <i class="fa-duotone fa-solid fa-phone-volume"></i>
                    &nbsp;
                    <a href="">+91 98213 24150</a>
                </span>

                <span>
                    <i class="fa-duotone fa-solid fa-phone-volume"></i>
                    &nbsp;
                    <a href="">+91 83696 37088</a>
                </span>
            </div>
        </section>

        <!-- Section 3 Mail -->
        <section class="contactDiv">
            <p>Mail Us On</p>
            <div>
                <span>
                    <i class="fa-duotone fa-solid fa-envelope" style="color: gray;"></i>
                    &nbsp;
                    <a href="">aiims.foundation24@gmail.com</a>
                </span>
            </div>
        </section>

        <!-- Section 4 Address1 -->
        <section class="contactDiv">
            <p>Reach Us At</p>
            <div class="map">
                <span>
                    <i class="fa-duotone fa-solid fa-location-dot" style="color: black;"></i>
                    &nbsp;
                    <b>Regd. Office: </b>
                    <a href="https://maps.app.goo.gl/ohsZmaDeoNpGsyP57">C-214, 2nd Floor, C-Wing, Laxmi Niwas CHS., N. M. Joshi Marg, V.J.B. Udyan, Byculla (West), Mumbai - 400 027</a>
                    <br><br>

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3772.457519319121!2d72.8310377501986!3d18.9995507810144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7cef27d421cf9%3A0xf03fb971d5a4481e!2sLaxmi%20Niwas!5e0!3m2!1sen!2sin!4v1722436468769!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </span>
            </div>
        </section>

        <!-- Section 5 Address2 -->
        <section class="contactDiv">
            <p>Reach Us At</p>
            <div class="map">
                <span>
                    <i class="fa-duotone fa-solid fa-location-dot" style="color: black;"></i>
                    &nbsp;
                    <b>Corp. Office: </b>
                    <a href="https://maps.app.goo.gl/fxVHavRCaKVncdSG7">Shop No. 12, La View Shopping Centre, K. K. Marg, Jacob Circle, Saath Rasta, Mumbai - 400 011</a>
                    <br><br>

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3772.8922499240066!2d72.82729860038914!3d18.98036546610136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7cf0025c7ce25%3A0x62c1e9b17a0ec613!2sLa%20view%20tower!5e0!3m2!1sen!2sin!4v1722436720209!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </span>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <?php include_once "../../shared/view/Footer.html" ?>
</body>

</html>