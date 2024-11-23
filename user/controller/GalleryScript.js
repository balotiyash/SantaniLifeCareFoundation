// Image and Video folder mappings for each year
let imageFolders = {
    "2024": [
        "SLCF01.jpeg", "SLCF02.jpeg", "SLCF03.jpeg", "SLCF04.jpeg", "SLCF05.jpeg", "SLCF06.jpeg", "SLCF07.jpeg", "SLCF08.jpeg", "SLCF09.jpeg", "SLCF10.jpeg", "SLCF11.jpeg", "SLCF12.jpeg", "SLCF13.jpeg", "SLCF14.jpeg", "SLCF15.jpeg"
    ],
    "2023": [
        "SLCF01.jpeg", "SLCF02.jpeg", "SLCF03.jpeg", "SLCF04.jpeg"
    ],
    "2022": [
        "SLCF01.jpeg", "SLCF02.jpeg"
    ],
    "2021": [
        "SLCF01.jpeg"
    ],
    "2020": [
        "SLCF01.jpeg", "SLCF02.jpeg", "SLCF03.jpeg"
    ]
};

let videoFolders = {
    "2024": [
        "video1.mp4", "video2.mp4", "video3.mp4"
    ],
    "2023": [
        "video1.mp4", "video2.mp4"
    ],
    "2022": [
        "video1.mp4"
    ],
    "2021": [
        "video1.mp4"
    ],
    "2020": [
        "video1.mp4"
    ]
};

// Get all year links and the gallery containers
const yearLinks = document.querySelectorAll('.nav-link');
const imageContainer = document.getElementById('imagesDiv');
const videoContainer = document.getElementById('videoGallery');

// Function to load images for the selected year
function loadImagesForYear(year) {
    imageContainer.innerHTML = '';  // Clear the current images

    const images = imageFolders[year];

    if (!images || images.length === 0) {
        imageContainer.innerHTML = '<p>No images available for this year.</p>';
        return;
    }

    // Create and append image elements
    images.forEach(image => {
        let img = document.createElement('img');
        img.src = `../../assets/gallery/${year}/${image}`;
        img.alt = image;
        img.onclick = () => openImage(image, year);  // Open image in full view
        imageContainer.appendChild(img);
    });
}

// Function to handle opening an image in full screen
function openImage(imageSrc, year) {
    const fullImageContainer = document.getElementById('fullImageDiv');
    fullImageContainer.innerHTML = '<i class="fa-solid fa-circle-xmark" id="closeButton"></i>';  // Clear previous content and add close button
    fullImageContainer.style.display = "flex"; // Display the full image container

    const fullImage = document.createElement('img');
    fullImage.src = `../../assets/gallery/${year}/${imageSrc}`;
    fullImage.alt = imageSrc;
    fullImageContainer.appendChild(fullImage);

    // Add event listener for the close button
    document.getElementById('closeButton').onclick = closeImage;
}

// Function to close the full image view
function closeImage() {
    document.getElementById('fullImageDiv').style.display = "none";
}

// Function to load videos for the selected year
function loadVideosForYear(year) {
    videoContainer.innerHTML = '';  // Clear the current videos

    const videos = videoFolders[year];

    if (!videos || videos.length === 0) {
        videoContainer.innerHTML = '<p>No videos available for this year.</p>';
        return;
    }

    // Create and append video elements
    videos.forEach(video => {
        let videoElement = document.createElement('video');
        videoElement.controls = true;  // Enable video controls
        videoElement.src = `../../assets/gallery/${year}/${video}`;
        videoElement.alt = video;
        videoElement.classList.add('video-thumbnail');
        videoContainer.appendChild(videoElement);
    });
}

// Function to handle tab switching
function handleTabSwitch(event) {
    const targetTab = event.target;
    const selectedYear = getActiveYear();  // Get the current active year

    if (targetTab.id === 'nav-profile-tab') {
        loadVideosForYear(selectedYear);  // Load videos if the "Videos" tab is selected
    } else if (targetTab.id === 'nav-home-tab') {
        loadImagesForYear(selectedYear);  // Load images if the "Images" tab is selected
    }
}

// Function to get the active year from the sidebar
function getActiveYear() {
    const activeLink = document.querySelector('.nav-link.active');
    return activeLink ? activeLink.getAttribute('data-year') : "2024";  // Default to 2024 if no year is selected
}

// Event listener for the "Images" and "Videos" tab to load content
document.getElementById('nav-home-tab').addEventListener('click', handleTabSwitch);
document.getElementById('nav-profile-tab').addEventListener('click', handleTabSwitch);

// Event listeners for each year link
yearLinks.forEach(link => {
    link.addEventListener('click', (event) => {
        event.preventDefault();  // Prevent the default link behavior
        const selectedYear = event.target.getAttribute('data-year');
        
        // Highlight the active year link
        yearLinks.forEach(link => link.classList.remove('active'));
        event.target.classList.add('active');
        
        // Reload the correct content for the selected year (on both tabs)
        if (document.getElementById('nav-home-tab').classList.contains('active')) {
            loadImagesForYear(selectedYear);  // Load images if "Images" tab is active
        } else {
            loadVideosForYear(selectedYear);  // Load videos if "Videos" tab is active
        }
    });
});

// Initial load of images and videos for the default selected year (2024)
loadImagesForYear("2024");
loadVideosForYear("2024");
