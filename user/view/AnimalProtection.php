<!--
    File: user/view/AnimalProtection.php
    Author: Yash Balotiya
    Description: This page contains all the HTML5 code of the Animal Protection page.
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
            <h2>Animal Protection</h2>
            <img src="../../assets/images/StreetAnimal.png" alt="">

            <b>Summary</b>
            <p>To Protect, preserve arrange collaborate and open centers for the work and welfare related to stray animals and Pets.</p>

            <b>Protecting and Preserving Stray Animals and Pets: A Comprehensive Approach</b>
            <p>Our mission is to safeguard and enhance the well-being of stray animals and pets through a multifaceted approach that includes protection, preservation, organization, collaboration, and the establishment of dedicated centers. This holistic strategy aims to address the needs of animals in our communities and improve their quality of life.</p>

            <b>Protection and Welfare:</b>
            <ol>
                <li>
                    <b>Safeguarding Animals:</b>
                    <p>Our primary goal is to ensure the safety and well-being of stray animals and pets. This involves providing shelter, medical care, and protection from abuse or neglect. We strive to create environments where animals are secure and their basic needs are met.</p>
                </li>
                <li>
                    <b>Health and Medical Care:</b>
                    <p>We focus on offering veterinary services, including vaccinations, treatments for illnesses and injuries, and routine health check-ups. This care is crucial for preventing the spread of diseases and ensuring that animals live healthy, fulfilling lives.</p>
                </li>
            </ol>

            <b>Preservation and Conservation:</b>
            <ol>
                <li>
                    <b>Environmental Enrichment:</b>
                    <p>We work on creating environments that support the natural behaviors and needs of animals. This includes providing safe spaces, proper nutrition, and opportunities for social interaction and physical activity.</p>
                </li>
                <li>
                    <b>Responsible Pet Ownership:</b>
                    <p>By promoting responsible pet ownership practices, we aim to reduce the number of animals that become stray and ensure that pets are cared for throughout their lives.</p>
                </li>
            </ol>

            <b>Organization and Management:</b>
            <ol>
                <li>
                    <b>Establishing Centers:</b>
                    <p>We are dedicated to setting up specialized centers focused on the welfare of stray animals and pets. These centers will offer shelter, medical treatment, and adoption services, serving as hubs for animal care and community outreach.</p>
                </li>
                <li>
                    <b>Structured Programs:</b>
                    <p>Our centers will implement organized programs for animal rescue, rehabilitation, and adoption. This structured approach helps manage resources efficiently and ensures that animals receive comprehensive care.</p>
                </li>
            </ol>

            <b>Collaboration and Community Engagement:</b>
            <ol>
                <li>
                    <b>Partnering with Organizations:</b>
                    <p>Collaboration with animal welfare organizations, veterinary clinics, and community groups is essential for maximizing our impact. By working together, we can share resources, expertise, and support to address the challenges faced by stray animals and pets.</p>
                </li>
                <li>
                    <b>Public Education and Outreach:</b>
                    <p>We aim to engage with the community through educational programs and awareness campaigns. By informing the public about responsible pet ownership and animal welfare issues, we foster a culture of compassion and support for animals.</p>
                </li>
            </ol>

            <b>Opening Centers:</b>
            <ol>
                <li>
                    <b>Local and Regional Centers:</b>
                    <p>We plan to open multiple centers across various locations to ensure broad accessibility. These centers will be equipped to handle different aspects of animal care and welfare, from rescue operations to adoption services.</p>
                </li>
                <li>
                    <b>Community Involvement:</b>
                    <p>Each center will actively involve the local community, encouraging volunteerism and donations to support ongoing operations. Community engagement is crucial for the success of our programs and for creating a network of support for animals in need.</p>
                </li>
            </ol>

            <b><i><u>By focusing on these key areas—protection, preservation, organization, collaboration, and the establishment of dedicated centers—we aim to make a significant and positive impact on the lives of stray animals and pets. Our commitment to their welfare reflects a broader vision of compassion and responsibility towards all living beings.</u></i></b>
        </section>
    </main>

    <!-- Footer -->
    <?php include_once "../../shared/view/Footer.html" ?>

    <!-- Script -->
    <script>
        $(".nav-link").removeClass("active").addClass("link-dark");
        $("#animalProtection").removeClass("link-dark").addClass("active");

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