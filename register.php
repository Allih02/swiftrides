<?php
// Register PHP logic can be added here
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Process form data here in a real application
    // $name = $_POST['name'];
    // $email = $_POST['email'];
    // $password = $_POST['password'];
    // Database operations, validation, etc.
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nexus | Register</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <style>
        :root {
            --primary: #6c5ce7;
            --secondary: #a29bfe;
            --dark: #2d3436;
            --light: #f5f6fa;
            --gradient: linear-gradient(135deg, var(--primary), var(--secondary));
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            background-color: var(--dark);
            color: var(--light);
            min-height: 100vh;
            overflow-x: hidden;
            position: relative;
        }

        /* Animated Background Elements */
        .bg-blur-1, .bg-blur-2 {
            position: absolute;
            width: 300px;
            height: 300px;
            border-radius: 50%;
            background: var(--gradient);
            filter: blur(100px);
            opacity: 0.2;
            z-index: -1;
            animation: float 15s infinite alternate;
        }

        .bg-blur-1 {
            top: 10%;
            left: 5%;
        }

        .bg-blur-2 {
            bottom: 10%;
            right: 5%;
            animation-delay: 5s;
        }

        @keyframes float {
            0% { transform: translateY(0) rotate(0deg); }
            100% { transform: translateY(-20px) rotate(5deg); }
        }

        /* Navigation */
        .glass-nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.5rem 5%;
            backdrop-filter: blur(10px);
            background: rgba(45, 52, 54, 0.7);
            position: fixed;
            width: 100%;
            z-index: 100;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 700;
            background: var(--gradient);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .glass-nav ul {
            display: flex;
            gap: 2rem;
            list-style: none;
        }

        .glass-nav a {
            color: var(--light);
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            position: relative;
        }

        .glass-nav a.active {
            color: var(--primary);
        }

        .glass-nav a:after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 0;
            background: var(--gradient);
            transition: width 0.3s;
        }

        .glass-nav a:hover:after {
            width: 100%;
        }

        /* Hero Section */
        .hero {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10rem 5% 5rem;
            gap: 5rem;
        }

        .hero-text {
            flex: 1;
            max-width: 600px;
        }

        .hero-text h1 {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            line-height: 1.2;
        }

        .gradient-text {
            background: var(--gradient);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .subtitle {
            font-size: 1.2rem;
            color: rgba(255, 255, 255, 0.7);
            margin-bottom: 2rem;
            line-height: 1.6;
        }

        .cta-buttons {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
        }

        /* Registration Form */
        .registration-form {
            flex: 1;
            max-width: 450px;
            padding: 2.5rem;
            border-radius: 20px;
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease;
        }

        .registration-form:hover {
            transform: translateY(-5px);
        }

        .registration-form h2 {
            margin-bottom: 2rem;
            font-size: 2rem;
            text-align: center;
        }

        .input-group {
            position: relative;
            margin-bottom: 1.5rem;
        }

        .input-group input {
            width: 100%;
            padding: 1rem;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            color: var(--light);
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .input-group input:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 2px rgba(108, 92, 231, 0.2);
        }

        .input-group label {
            position: absolute;
            left: 1rem;
            top: 1rem;
            color: rgba(255, 255, 255, 0.7);
            pointer-events: none;
            transition: all 0.3s ease;
        }

        .input-group input:focus + label,
        .input-group input:valid + label {
            top: -0.5rem;
            left: 0.8rem;
            font-size: 0.8rem;
            background: var(--dark);
            padding: 0 0.5rem;
            color: var(--primary);
        }

        .toggle-password {
            position: absolute;
            right: 1rem;
            top: 1rem;
            cursor: pointer;
            opacity: 0.7;
            transition: opacity 0.3s;
        }

        .toggle-password:hover {
            opacity: 1;
        }

        /* Buttons */
        .btn-primary, .btn-secondary, .btn-submit {
            padding: 0.8rem 1.5rem;
            border-radius: 10px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            border: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        .btn-primary {
            background: var(--gradient);
            color: white;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(108, 92, 231, 0.3);
        }

        .btn-secondary {
            background: transparent;
            color: var(--light);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .btn-secondary:hover {
            background: rgba(255, 255, 255, 0.05);
        }

        .btn-submit {
            width: 100%;
            background: var(--gradient);
            color: white;
            font-size: 1rem;
            margin-top: 1rem;
        }

        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(108, 92, 231, 0.3);
        }

        .btn-submit span {
            margin-left: 0.5rem;
            transition: transform 0.3s;
        }

        .btn-submit:hover span {
            transform: translateX(3px);
        }

        .pulse {
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { box-shadow: 0 0 0 0 rgba(108, 92, 231, 0.7); }
            70% { box-shadow: 0 0 0 10px rgba(108, 92, 231, 0); }
            100% { box-shadow: 0 0 0 0 rgba(108, 92, 231, 0); }
        }

        /* Social Auth */
        .social-auth {
            margin-top: 2rem;
            text-align: center;
        }

        .social-auth p {
            color: rgba(255, 255, 255, 0.7);
            margin-bottom: 1rem;
            font-size: 0.9rem;
        }

        .social-icons {
            display: flex;
            justify-content: center;
            gap: 1rem;
        }

        .social-btn {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: white;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .social-btn:hover {
            transform: translateY(-3px);
            background: rgba(255, 255, 255, 0.1);
        }

        /* Footer */
        .glass-footer {
            padding: 2rem 5%;
            backdrop-filter: blur(10px);
            background: rgba(45, 52, 54, 0.7);
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
        }

        .footer-logo {
            font-size: 1.5rem;
            font-weight: 700;
            background: var(--gradient);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .footer-links {
            display: flex;
            gap: 2rem;
        }

        .footer-links a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-links a:hover {
            color: var(--primary);
        }

        .copyright {
            color: rgba(255, 255, 255, 0.5);
            font-size: 0.9rem;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .hero {
                flex-direction: column;
                padding-top: 8rem;
            }
            
            .hero-text, .registration-form {
                max-width: 100%;
            }
        }

        @media (max-width: 576px) {
            .glass-nav ul {
                display: none;
            }
            
            .hero-text h1 {
                font-size: 2.5rem;
            }
            
            .cta-buttons {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <!-- Animated Background Elements -->
    <div class="bg-blur-1"></div>
    <div class="bg-blur-2"></div>

    <!-- Navigation -->
    <nav class="glass-nav">
        <div class="logo">Nexus</div>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Features</a></li>
            <li><a href="#">Pricing</a></li>
            <li><a href="#" class="active">Register</a></li>
        </ul>
    </nav>

    <!-- Hero + Registration Form -->
    <main>
        <section class="hero">
            <div class="hero-text">
                <h1>Join <span class="gradient-text">Nexus</span> Today</h1>
                <p class="subtitle">Unlock premium features and seamless experiences with our platform.</p>
                <div class="cta-buttons">
                    <button class="btn-primary pulse">Get Started</button>
                    <button class="btn-secondary">Learn More</button>
                </div>
            </div>
            
            <div class="registration-form glass-card">
                <h2>Create Account</h2>
                <form id="registerForm" method="POST">
                    <div class="input-group">
                        <input type="text" id="name" name="name" required>
                        <label for="name">Full Name</label>
                    </div>
                    <div class="input-group">
                        <input type="email" id="email" name="email" required>
                        <label for="email">Email</label>
                    </div>
                    <div class="input-group">
                        <input type="password" id="password" name="password" required>
                        <label for="password">Password</label>
                        <span class="toggle-password">👁️</span>
                    </div>
                    <button type="submit" class="btn-submit">Register Now <span>→</span></button>
                </form>
                <div class="social-auth">
                    <p>Or sign up with:</p>
                    <div class="social-icons">
                        <button class="social-btn google">G</button>
                        <button class="social-btn apple">A</button>
                        <button class="social-btn twitter">X</button>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="glass-footer">
        <div class="footer-content">
            <div class="footer-logo">Nexus</div>
            <div class="footer-links">
                <a href="#">Terms</a>
                <a href="#">Privacy</a>
                <a href="#">Contact</a>
            </div>
            <div class="copyright">© <?php echo date('Y'); ?> Nexus. All rights reserved.</div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Password visibility toggle
            const togglePassword = document.querySelector('.toggle-password');
            const passwordInput = document.getElementById('password');
            
            if (togglePassword && passwordInput) {
                togglePassword.addEventListener('click', function() {
                    const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                    passwordInput.setAttribute('type', type);
                    this.textContent = type === 'password' ? '👁️' : '👁️‍🗨️';
                });
            }

            // Form submission
            const registerForm = document.getElementById('registerForm');
            if (registerForm) {
                registerForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    
                    // Simulate form submission
                    const submitBtn = this.querySelector('.btn-submit');
                    submitBtn.disabled = true;
                    submitBtn.innerHTML = 'Processing... <span class="spinner">⏳</span>';
                    
                    // Simulate API call
                    setTimeout(() => {
                        submitBtn.innerHTML = 'Registration Successful! <span>✓</span>';
                        
                        // Reset form after delay
                        setTimeout(() => {
                            this.reset();
                            submitBtn.disabled = false;
                            submitBtn.innerHTML = 'Register Now <span>→</span>';
                            
                            // Show success message (in a real app, you'd redirect)
                            alert('Account created successfully! Welcome aboard.');
                        }, 1500);
                    }, 2000);
                });
            }

            // Animate elements when scrolling
            const animateOnScroll = () => {
                const elements = document.querySelectorAll('.registration-form, .hero-text');
                
                elements.forEach(el => {
                    const elementPosition = el.getBoundingClientRect().top;
                    const screenPosition = window.innerHeight / 1.3;
                    
                    if (elementPosition < screenPosition) {
                        el.style.opacity = '1';
                        el.style.transform = 'translateY(0)';
                    }
                });
            };
            
            // Set initial state for animation
            document.querySelector('.registration-form').style.opacity = '0';
            document.querySelector('.registration-form').style.transform = 'translateY(20px)';
            document.querySelector('.hero-text').style.opacity = '0';
            document.querySelector('.hero-text').style.transform = 'translateY(20px)';
            
            window.addEventListener('scroll', animateOnScroll);
            animateOnScroll(); // Run once on load
        });
    </script>
</body>
</html>