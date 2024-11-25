<!-- 
    File: user/view/Livelihoods.php
    Author: Yash Balotiya
    Description: This page contains all the HTML5 code of the Livelihoods page.
    Created on: 03/08/2024
    Last Modified: 25/11/2024
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

        <!-- Section 2 Livelihood Program -->
        <section class="programSection">
            <h2>Livelihoods</h2>
            <img src="../../assets/images/Livelihood.jpg" alt="Livelihood">

            <b>Summary</b>
            <p>A person's livelihood refers to their "means of securing the basic necessities -food, water, shelter and clothing- of life". Livelihood is defined as a set of activities, involving securing water, food, fodder, medicine, shelter, clothing and the capacity to acquire above necessities working either individually or as a group by using endowments (both human and material) for meeting the requirements of the self and his/her household on a sustainable basis with dignity.</p>

            <b>Celebrate Livelihood: The Essence of Sustained Well-being</b>
            <p>A person's livelihood encompasses the "means of securing the basic necessities of life—food, water, shelter, and clothing." It is defined as a set of activities aimed at securing these essentials, whether it be through individual effort or collective action. This involves utilizing various resources, including human skills and material assets, to meet the needs of oneself and one's household sustainably and with dignity.</p>

            <p>Livelihood is more than just a means of survival; it is about ensuring a continuous, dignified existence by providing the capacity to obtain life's essentials. It embodies the resilience and resourcefulness of individuals and communities in maintaining their well-being and independence.</p>

            <b><i><u>Let us celebrate the diverse ways people around the world secure their livelihoods, honor the dignity inherent in each effort, and support sustainable practices that ensure a better quality of life for all.</u></i></b>
        </section>
    </main>

    <!-- Footer -->
    <?php include_once "../../shared/view/Footer.html" ?>

    <!-- Script -->
    <script>
        $(".nav-link").removeClass("active").addClass("link-dark");
        $("#livelihood").removeClass("link-dark").addClass("active");

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