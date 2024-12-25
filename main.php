<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/stylee.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Voting System</title>
</head>

<body>

    <div class="background-container">
        <div class="content-container">
            <header>
                <nav class="navbar">
                    <h3 class="brand">Vote Now</h3>
                   
                    <ul class="nav-links">
                        <li><a href="main.php" class="active">Home</a></li>
                        <li><a href="aboutus.php">About Us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                    <div class="auth-links">
                        <a href="index.php" class="user"><i class="ri-user-fill"></i> Register</a>
                    </div>
                    <!-- Hamburger Icon -->
                    <div class="hamburger">
                        <i class="ri-menu-line"></i>
                    </div>
                </nav>
            </header>

            <section class="hero_container">
                <div class="hero_left">
                    <div class="left_content">
                        <h2 class="animated-heading">ONLINE <span>VOTING</span></h2>
                        <p>The vote is precious. It is almost sacred. It is the most powerful nonviolent tool we have in a democratic society, and we must use it. — John Lewis.</p>
                    </div>
                </div>
                <div class="hero_right">
                    <img src="assets/images/vote1.png" alt="Hero Image">
                </div>
            </section>
        </div>
    </div>
    <footer>
        <div class="footer-content">
            <h3> Follow Us</h3>
            <p>Follow us on these social media platforms</p>
            <ul class="socials">
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
            <p>Copyright &copy; 2020 codeOpacity.</p>
        </div>
    </footer>
    <!-- JavaScript for Toggling Menu -->
    <script>
        const hamburger = document.querySelector('.hamburger');
        const navLinks = document.querySelector('.nav-links');
        const authLinks = document.querySelector('.auth-links');

        hamburger.addEventListener('click', () => {
            navLinks.classList.toggle('nav-active');
            authLinks.classList.toggle('nav-active');
        });
    </script>

</body>

</html>