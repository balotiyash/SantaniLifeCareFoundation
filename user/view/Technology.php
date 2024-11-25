<!-- 
    File: user/view/Technology.php
    Author: Yash Balotiya
    Description: This page contains all the HTML5 code of the Technology page.
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

        <!-- Section 2 Technology Program -->
        <section class="programSection">
            <h2>Technology</h2>
            <img src="../../assets/images/Technology.jpg" alt="Technology">

            <b>Summary</b>
            <p>Technology, the application of scientific knowledge for practical purposes and problem-solving, holds immense potential for driving progress and innovation. Our focus is on leveraging technology to enhance the lives of traditional practitioners, landless laborers, and marginalized communities through research, development, and adoption of E-science.</p>

            <b>Key Areas of Focus:</b>
            <ol>
                <li>
                    <b>Promoting Research and Development (R&D)</b>
                    <ul>
                        <li>
                            <b>Objective:</b>
                            <p>Advance technological solutions that address specific challenges faced by traditional practitioners and disadvantaged groups.</p>
                        </li>
                        <li>
                            <b>Actions:</b>
                            <p>Invest in research to develop new tools and methods, foster partnerships with academic and research institutions, and support innovation that directly benefits these communities.</p>
                        </li>
                    </ul>
                </li>
                <li>
                    <b>Integrating E-Science</b>
                    <ul>
                        <li>
                            <b>Objective:</b>
                            <p>Utilize electronic and digital sciences to improve practices and access to resources.</p>
                        </li>
                        <li>
                            <b>Actions:</b>
                            <p>Implement technologies like data analysis, digital record-keeping, and remote sensing to optimize traditional methods and enhance efficiency in agriculture, craftsmanship, and other areas.</p>
                        </li>
                    </ul>
                </li>
                <li>
                    <b>Enhancing Traditional Practices</b>
                    <ul>
                        <li>
                            <b>Objective:</b>
                            <p>Modernize and support traditional artisans and practitioners by integrating technology into their work.</p>
                        </li>
                        <li>
                            <b>Actions:</b>
                            <p>Provide training and resources for adopting new tools and techniques, improve access to markets through digital platforms, and support the development of innovative products that blend traditional skills with modern technology.</p>
                        </li>
                    </ul>
                </li>
                <li>
                    <b>Supporting Landless Laborers</b>
                    <ul>
                        <li>
                            <b>Objective:</b>
                            <p>Offer technological solutions to improve livelihoods and job opportunities for landless laborers.</p>
                        </li>
                        <li>
                            <b>Actions:</b>
                            <p>Develop platforms for skill training, create opportunities for remote work, and implement technology-driven agricultural support systems to enhance productivity and income.</p>
                        </li>
                    </ul>
                </li>
                <li>
                    <b>Empowering Weaker Sections</b>
                    <ul>
                        <li>
                            <b>Objective:</b>
                            <p>Bridge the technology gap for marginalized communities, enabling them to benefit from advancements in E-science.</p>
                        </li>
                        <li>
                            <b>Actions:</b>
                            <p>Ensure access to technology and digital literacy programs, support community-based projects that leverage technology for local development, and advocate for inclusive policies that address digital divides.</p>
                        </li>
                    </ul>
                </li>
            </ol>

            <b>Celebrating Technological Integration</b>
            <p>By fostering the development and adoption of technology, we aim to improve the quality of life for traditional practitioners, landless laborers, and weaker sections of society. Technology not only solves practical problems but also empowers individuals and communities to thrive in an increasingly digital world. Join us in celebrating the transformative power of E-science and technology in creating a more inclusive and equitable future.</p>
        </section>
    </main>

    <!-- Footer -->
    <?php include_once "../../shared/view/Footer.html" ?>

    <!-- Script -->
    <script>
        $(".nav-link").removeClass("active").addClass("link-dark");
        $("#technology").removeClass("link-dark").addClass("active");

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