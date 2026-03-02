<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conference Website</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <section id="hero">
        <h1>Welcome to Our Conference</h1>
        <p>Join us for an unforgettable experience!</p>
    </section>

    <section id="about">
        <h2>About Us</h2>
        <p>Details about the conference.</p>
    </section>

    <section id="goals">
        <h2>Our Goals</h2>
        <p>Information about goals.</p>
    </section>

    <section id="speakers">
        <h2>Our Speakers</h2>
        <p>Details of speakers.</p>
    </section>

    <section id="schedule">
        <h2>Conference Schedule</h2>
        <p>Schedule details.</p>
    </section>

    <section id="partners">
        <h2>Our Partners</h2>
        <p>Partner details.</p>
    </section>

    <section id="gallery">
        <h2>Gallery</h2>
        <p>Gallery of images.</p>
    </section>

    <section id="conditions">
        <h2>Conditions</h2>
        <p>Conference conditions.</p>
    </section>

    <section id="registration">
        <h2>Registration</h2>
        <form action="handle-registration.php" method="POST">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <button type="submit">Register</button>
        </form>
    </section>

    <section id="venue">
        <h2>Venue</h2>
        <div id="map"></div>
    </section>

    <?php include 'includes/footer.php'; ?>
    <script src="assets/js/main.js"></script>
</body>
</html>