<?php
include 'includes/header.php';
include 'includes/navbar.php';
?>

<!-- Header Section -->
<header class="text-white">
    <div class="container text-center">
        <h1>Welcome to Tech Solutions</h1>
        <p>Your partner in technology innovation and support.</p>
    </div>
</header>

<!-- Featurette Section -->
<section class="features py-5">
    <div class="container">
        <h2 class="text-center mb-5">Our Key Features</h2>
        <div class="row text-center">
            <div class="col-md-4">
                <img src="assets/images/feature1.png" alt="Feature 1" class="mb-3">
                <h3>Expert Guidance</h3>
                <p>Leverage years of industry expertise for optimal solutions.</p>
            </div>
            <div class="col-md-4">
                <img src="assets/images/feature2.png" alt="Feature 2" class="mb-3">
                <h3>Innovative Solutions</h3>
                <p>Stay ahead with cutting-edge tools and methodologies.</p>
            </div>
            <div class="col-md-4">
                <img src="assets/images/feature3.png" alt="Feature 3" class="mb-3">
                <h3>Reliable Support</h3>
                <p>Experience dependable support tailored to your business needs.</p>
            </div>
        </div>
    </div>
</section>

<!-- About Us Section -->
<section class="about-us py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2>About Us</h2>
                <p>Tech Solutions is your trusted partner in navigating the complexities of modern technology. We bring a wealth of experience and innovation to the table, ensuring your business thrives in a competitive environment.</p>
                <p>From IT consulting to cloud solutions and cybersecurity, our comprehensive services are designed to meet the diverse needs of our clients. Our team of experts is committed to delivering unparalleled service and support at every step of your journey.</p>
            </div>
            <div class="col-md-4">
                <?php include 'includes/about-sidebar.php'; ?>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
