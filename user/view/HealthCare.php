<!-- 
    File: user/view/HealthCare.php
    Author: Yash Balotiya
    Description: This page contains all the HTML5 code of the Health Care page.
    Created on: 03/08/2024
    Last Modified: 05/08/2024
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Data -->
    <?php include_once "../../shared/view/HeadMetaData.html" ?>

    <!-- Main Styles -->
    <link rel="stylesheet" href="../style/OurProgramsStyle.css">
    <link rel="stylesheet" href="../style/OurWorkStyle.css">
    <link rel="stylesheet" href="../style/mobile/OurWorkMobile.css">
    <link rel="stylesheet" href="../style/mobile/OurWorkMobileMain.css">
</head>

<body>
    <!-- Navbar -->
    <?php include_once "../../shared/view/Navbar.html" ?>

    <!-- Main content -->
    <main>
        <!-- Section 1 Side bar -->
        <?php include_once "OurWorkSidebar.html" ?>

        <!-- Section 2 All Programs -->
        <section class="programSection">
            <h2>Health Care</h2>
            <img src="../../assets/images/HealthCare.jpg" alt="" >

            <b>Summary</b>
            <p>Health care is the improvement of health, by the prevention, diagnosis, treatment, amelioration or cure of disease, illness, injury, and other physical and mental impairments in people. Health care is delivered by health professionals and allied health fields. Generating small centers for diagnosis and treatment through a Qualified and Professional team of Doctors at an Affordable price.</p>

            <b>Healthcare for All: Quality and Affordability</b>
            <p>Healthcare involves the enhancement of well-being through the prevention, diagnosis, treatment, and management of diseases, illnesses, injuries, and other physical and mental impairments. It is provided by a dedicated team of health professionals across various disciplines.</p>

            <p>At our small centers, we are committed to delivering high-quality diagnostic and treatment services. Our qualified and professional team of doctors and allied health professionals work together to offer comprehensive care. We strive to make healthcare accessible and affordable, ensuring that everyone has the opportunity to receive the care they need.</p>

            <b><i><u>Celebrate health and well-being with us. Whether you're seeking preventative care or treatment, our centers are here to support your journey to better health.</u></i></b>
        </section>
    </main>

    <!-- Footer -->
    <?php include_once "../../shared/view/Footer.html" ?>

    <!-- Script -->
    <script>
        $(".nav-link").removeClass("active").addClass("link-dark");
        $("#healthCare").removeClass("link-dark").addClass("active");

        // Our Programs
        const allPrograms = [
            "OurWork",
            "Health", "HealthCare", "AYUSH", "Livelihoods",
            "JobOrientedEducation", "Employment", "Technology", "HumanRights",
            "SpeciallyAbled", "WomenEmpowerment", "ArtAndCulture", "AnimalProtection"
        ];

        for (let i = 0; i < allPrograms.length; i++) {
            const sideElement = document.getElementsByClassName("nav-link")[i];

            if (sideElement) { // Check if element exists to avoid errors
                sideElement.addEventListener("click", () => {
                    window.location.href = `${allPrograms[i]}.php`;
                });
            }
        }
    </script>
</body>

</html>