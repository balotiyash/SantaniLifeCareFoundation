<!-- 
    File: user/view/Gallery.php
    Author: Yash Balotiya
    Description: This page contains all the HTML5 code of the Gallery page.
    Created on: 06/08/2024
    Last Modified: 25/11/2024
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Data -->
    <?php include_once "../../shared/view/HeadMetaData.html" ?>

    <!-- Main Styles -->
    <link rel="stylesheet" href="../style/GalleryStyle.css">
    <link rel="stylesheet" href="../style/mobile/GalleryMobile.css">
</head>

<body>
    <!-- Navbar -->
    <?php include_once "../../shared/view/Navbar.html" ?>

    <!-- Full image -->
    <div id="fullImageDiv">
        <i class="fa-solid fa-circle-xmark" onclick="closeImage()"></i>
    </div>

    <main>
        <!-- Section 1 Sidebar -->
        <?php include_once "GallerySidebar.html" ?>

        <!-- Section 2 Tabs -->
        <section id="tabs">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Images</button>
                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Videos</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <!-- Images -->
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div id="imageGallery">
                        <!-- Dynamic Data Here -->
                        <div id="imagesDiv"></div>
                    </div>
                </div>

                <!-- Videos -->
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div id="videoGallery">
                        <img src="../../assets/vectors/Not Found.svg" alt="Data Not Found" id="notFound">
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <?php include_once "../../shared/view/Footer.html" ?>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.21/lodash.min.js"></script>
    <script>
        let arr = [
            "SLCF01.jpeg", "SLCF02.jpeg", "SLCF03.jpeg", "SLCF04.jpeg", "SLCF05.jpeg", "SLCF06.jpeg", "SLCF07.jpeg", "SLCF08.jpeg", "SLCF09.jpeg", "SLCF10.jpeg", "SLCF11.jpeg", "SLCF12.jpeg", "SLCF13.jpeg", "SLCF14.jpeg"
        ];

        arr = _.shuffle(arr); // Shuffle the array using Lodash
        const container = document.getElementById('imagesDiv');

        arr.forEach(image => {
            let img = document.createElement('img');
            img.src = `../../assets/gallery/2024/${image}`;
            img.alt = image;
            img.onclick = () => openImage(image); // Use a function to handle click event
            container.appendChild(img);
        });

        let fullImageContainer = document.getElementById('fullImageDiv');

        function openImage(imageSrc) {
            fullImageContainer.innerHTML = '<i class="fa-solid fa-circle-xmark" id="closeButton"></i>'; // Clear previous content and add close button
            fullImageContainer.style.display = "flex"; // Display the full image container

            const fullImage = document.createElement('img');
            fullImage.src = `../../assets/gallery/2024/${imageSrc}`;
            fullImage.alt = imageSrc;
            fullImageContainer.appendChild(fullImage);

            // Add event listener for the close button
            document.getElementById('closeButton').onclick = closeImage;
        }

        function closeImage() {
            fullImageContainer.style.display = "none";
        }
    </script>

</body>

</html>