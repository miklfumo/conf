<?php
// index.php for Conference Website

// Begin HTML Structure
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conference Name</title>
    <link rel="stylesheet" href="style.css"> <!-- Reference to a stylesheet -->
</head>
<body>
    <header>
        <h1>Welcome to the Conference Name</h1>
        <p>Your tagline goes here.</p>
    </header>

    <nav>
        <ul>
            <li><a href="#about">About</a></li>
            <li><a href="#speakers">Speakers</a></li>
            <li><a href="#agenda">Agenda</a></li>
            <li><a href="#registration">Registration</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>

    <main>
        <section id="about">
            <h2>About the Conference</h2>
            <p>Details about the conference... </p>
        </section>

        <section id="speakers">
            <h2>Featured Speakers</h2>
            <p>Information about the speakers... </p>
        </section>

        <section id="agenda">
            <h2>Agenda</h2>
            <p>Conference schedule... </p>
        </section>

        <section id="registration">
            <h2>Registration</h2>
            <p>How to register... </p>
        </section>

        <section id="contact">
            <h2>Contact Us</h2>
            <p>Contact details... </p>
        </section>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Conference Name. All rights reserved.</p>
    </footer>
</body>
</html>
