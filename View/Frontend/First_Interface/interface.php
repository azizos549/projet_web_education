<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skill Swap</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <nav class="navbar">
            <div class="logo">Skill Swap</div>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#staff">Our Staff</a></li>
                <li><a href="#news">News</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#help">Help Center</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>


            <div class="auth-buttons">
                <form action="login&signUp\login.php"><button > Connexion</a></button>   </form>
               <!--formulaire sign up--> 
               <form action="login&signUp\SignUp.php"><button > S'inscrire</a></button> </form>
            </div>
        </nav>

        <!-- Sliding background images -->
        <div class="background-slider">
            <div class="background-slide active" style="background-image: url('ai.jpg');"></div>
            <div class="background-slide" style="background-image: url('hands.jpg');"></div>
        </div>

        <div class="hero-content">
            <h1>Skills Are the Seeds of Growth</h1>
            <p>Join a community dedicated to learning and sharing knowledge.</p>
            <a href="#about" class="cta-button">Discover Skills</a>
        </div>
    </header>

    <!-- About Us Section -->
    <section id="about" class="about">
        <div class="about-text">
            <h2>Skill swap</h2>
            <p>Skill Swap is a community where individuals can come together to learn, share, and grow their skills through collaboration and knowledge exchange. We focus on creating meaningful connections through skill-sharing opportunities.</p>
        </div>
        <div class="about-image">
            <img src="meet.avif" alt="About Us Image">
        </div>
    </section>

    <!-- Our Staff Section -->
    <section id="staff" class="staff">
        <h2>Our Members</h2>
        <div class="member-container">
            <div class="member">
                <img src="ai.jpg" alt="Member 1">
                <h3>John Doe</h3>
                <p>Founder of Skill Swap. Passionate about knowledge sharing.</p>
            </div>
            <div class="member">
                <img src="member2.jpg" alt="Member 2">
                <h3>Jane Smith</h3>
                <p>Co-founder and community manager, dedicated to helping members connect.</p>
            </div>
        </div>
        <div class="member-container">
            <div class="member">
                <img src="member3.jpg" alt="Member 3">
                <h3>Sam Wilson</h3>
                <p>Creative Director. Focused on crafting engaging content for our members.</p>
            </div>
            <div class="member">
                <img src="member4.jpg" alt="Member 4">
                <h3>Emily Turner</h3>
                <p>Lead Developer. Ensures the platform runs smoothly for all users.</p>
            </div>
        </div>
        <div class="member-container">
            <div class="member">
                <img src="member5.jpg" alt="Member 5">
                <h3>Michael Brown</h3>
                <p>Marketing Head. Spreading the word about Skill Swap and reaching new members.</p>
            </div>
            <div class="member">
                <img src="member6.jpg" alt="Member 6">
                <h3>Sarah Lee</h3>
                <p>Customer Support Manager. Always ready to assist with any platform inquiries.</p>
            </div>
        </div>
    </section>

    <!-- Help Center Section -->
    <section id="help" class="help-center">
        <h2>Help Center</h2>
        <div class="help-content">
            <div class="quick-links">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#staff">Our Staff</a></li>
                    <li><a href="#news">News</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>

            <div class="faq">
                <h3>FAQs</h3>
                <div class="faq-item">
                    <button class="faq-question">What is Skill Swap?</button>
                    <div class="faq-answer">
                        <p>Skill Swap is a community-driven platform where people can exchange knowledge and skills.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-question">How do I join?</button>
                    <div class="faq-answer">
                        <p>Simply click the 'Join' button on the navbar and follow the registration process.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-question">How do I contact support?</button>
                    <div class="faq-answer">
                        <p>You can reach us by emailing support@skillswap.com or calling (123) 456-7890.</p>
                    </div>
                </div>
            </div>

            <div class="contact-info">
                <h3>Contact Information</h3>
                <p>Email: <a href="mailto:support@skillswap.com">support@skillswap.com</a></p>
                <p>Phone: (123) 456-7890</p>
                <div class="contact-image">
                    <img src="contact-image.jpg" alt="Contact Image">
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 Skill Swap. All rights reserved.</p>
    </footer>

    <script src="function.js"></script>
</body>
</html>
