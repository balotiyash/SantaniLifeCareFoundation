<!-- 
    File: user/view/OurWork.php
    Author: Yash Balotiya
    Description: This page contains all the HTML5 code of the Our Work page.
    Created on: 03/08/2024
    Last Modified: 03/08/2024
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

    <!-- Script -->
    <script src="../controller/OurWorkScript.js"></script>
</head>

<body>
    <!-- Navbar -->
    <?php include_once "../../shared/view/Navbar.html" ?>

    <!-- Main content -->
    <main>
        <!-- Section 1 Side bar -->
        <?php include_once "OurWorkSidebar.html" ?>

        <!-- Section 2 All Programs -->
        <?php include_once "OurPrograms.html" ?>
    </main>

    <!-- Footer -->
    <?php include_once "../../shared/view/Footer.html" ?>
</body>

</html>