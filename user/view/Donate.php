<!-- 
    File: user/view/Donate.php
    Author: Yash Balotiya
    Description: This page contains all the HTML5 code of the Donate Payment Description page.
    Created on: 25/11/2024
    Last Modified: 27/11/2024
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Data -->
    <?php include_once "../../shared/view/HeadMetaData.html" ?>

    <!-- Main Style -->
    <link rel="stylesheet" href="../style/DonateStyle.css">
    <link rel="stylesheet" href="../style/mobile/DonateMobile.css">
</head>

<body>
    <!-- Navbar -->
    <?php include_once "../../shared/view/Navbar.html" ?>

    <!-- Main Content -->
    <main>
        <!-- Section 1 Intro -->
        <section id="introTitle">
            <h1>Santani Life Care Foundation</h1>
            <p id="sloganTxt">Alone we can do so little, Together we can do so much!!</p>
            <!-- <p id="memoryTxt">In Loving Memory of My Mother, Late Mrs. Vimal Suryawanshi</p> -->
        </section>

        <!-- Section 2 Info -->
        <section id="accountDetails">
            <div id="child1">
                <p>The <big>Santani Life Care Foundation</big> is a non-profit organization, established in 2024 that works primarily in the domain of Health care, Education, Employment, Technology and Livelihoods.</p>
                <p>Your generous donations help us enhance the quality of life for individuals and communities. With your support, we can provide accessible healthcare, job-oriented education, empower women, and protect animal welfare. Every contribution, big or small, makes a meaningful impact.</p>
                <p>Join us in creating a healthier, more equitable society. Thank you for your generosity!</p>
                <p>Use following details for payment to <b>SANTANI LIFE CARE FOUNDATION</b> or <a href="./ContactUs.php">click here</a> to Contact Us</p>
            </div>

            <!-- Account Details -->
            <div id="child2">
                <div>
                    <h2 style="color: #3b8a69;">Account Details</h2>
                    <br>
                    <p><b>Bank Name:</b> State Bank of India</p>
                    <p><b>Account Holder:</b> Santani Life Care Foundation</p>
                    <p><b>Account Number:</b> 43074195142</p>
                    <p><b>IFSC Code:</b> SBIN0001835</p>
                    <p><b>Branch:</b> Jacob Circle, Mumbai, Maharashtra</p>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <?php include_once "../../shared/view/Footer.html" ?>
</body>

</html>