<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechSkill Library - Improve Your Computer Skills</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), 
                        url('https://images.unsplash.com/photo-1481627834876-b7833e8f5570?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1400&q=80') no-repeat center center fixed;
            background-size: cover;
            color: #fff;
            line-height: 1.6;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* Header Styles */
        header {
            padding: 20px 0;
            background: rgba(0, 0, 0, 0.7);
            position: sticky;
            top: 0;
            z-index: 100;
        }
        
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            font-size: 28px;
            font-weight: 700;
            color: #4facfe;
        }
        
        .nav-links {
            display: flex;
            gap: 25px;
        }
        
        .nav-links a {
            color: #fff;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }
        
        .nav-links a:hover {
            color: #4facfe;
        }
        
        .auth-buttons {
            display: flex;
            gap: 15px;
        }
        
        .btn {
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
            cursor: pointer;
            border: none;
        }
        
        .btn-login {
            background: transparent;
            border: 2px solid #4facfe;
            color: #4facfe;
        }
        
        .btn-login:hover {
            background: #4facfe;
            color: #fff;
        }
        
        .btn-signup {
            background: #4facfe;
            border: 2px solid #4facfe;
            color: #fff;
        }
        
        .btn-signup:hover {
            background: #3a8fd8;
            border-color: #3a8fd8;
        }
        
        /* Hero Section */
        .hero {
            text-align: center;
            padding: 120px 0 80px;
        }
        
        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            background: linear-gradient(to right, #4facfe, #00f2fe);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-weight: 800;
        }
        
        .hero p {
            font-size: 1.5rem;
            max-width: 800px;
            margin: 0 auto 40px;
            color: #e2e2e2;
        }
        
        .btn-waiting {
            background: linear-gradient(to right, #4facfe, #00f2fe);
            color: white;
            padding: 15px 40px;
            font-size: 1.2rem;
            border-radius: 50px;
            display: inline-block;
            margin-top: 20px;
            text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 0 4px 15px rgba(79, 172, 254, 0.4);
            cursor: pointer;
            text-decoration: none;
        }
        
        .btn-waiting:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(79, 172, 254, 0.6);
        }
        
        /* Features Section */
        .features {
            padding: 80px 0;
            background: rgba(0, 0, 0, 0.6);
        }
        
        .features h2 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 50px;
            color: #4facfe;
        }
        
        .feature-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .feature-card {
            background: rgba(255, 255, 255, 0.1);
            padding: 30px;
            border-radius: 10px;
            text-align: center;
            backdrop-filter: blur(10px);
            transition: transform 0.3s;
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
        }
        
        .feature-icon {
            font-size: 40px;
            color: #4facfe;
            margin-bottom: 20px;
        }
        
        .feature-card h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
        }
        
        /* Process Section */
        .process {
            padding: 80px 0;
            text-align: center;
        }
        
        .process h2 {
            font-size: 2.5rem;
            margin-bottom: 50px;
            color: #4facfe;
        }
        
        .steps {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 30px;
            margin-bottom: 50px;
        }
        
        .step {
            background: rgba(255, 255, 255, 0.1);
            padding: 25px;
            border-radius: 10px;
            width: 250px;
            backdrop-filter: blur(10px);
        }
        
        .step-number {
            background: linear-gradient(to right, #4facfe, #00f2fe);
            color: white;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
            font-weight: bold;
        }
        
        /* Courses Section */
        .courses {
            padding: 80px 0;
            background: rgba(0, 0, 0, 0.6);
        }
        
        .courses h2 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 50px;
            color: #4facfe;
        }
        
        .course-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .course-card {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            overflow: hidden;
            backdrop-filter: blur(10px);
            transition: transform 0.3s;
        }
        
        .course-card:hover {
            transform: translateY(-10px);
        }
        
        .course-img {
            height: 200px;
            background-size: cover;
            background-position: center;
        }
        
        .course-content {
            padding: 20px;
        }
        
        .course-content h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
            color: #4facfe;
        }
        
        .course-content p {
            margin-bottom: 15px;
            color: #e2e2e2;
        }
        
        .progress-bar {
            height: 8px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 4px;
            margin-bottom: 10px;
            overflow: hidden;
        }
        
        .progress {
            height: 100%;
            background: linear-gradient(to right, #4facfe, #00f2fe);
            border-radius: 4px;
            width: 0%;
            transition: width 1s ease;
        }
        
        /* Footer */
        footer {
            background: rgba(0, 0, 0, 0.8);
            padding: 40px 0;
            text-align: center;
        }
        
        .footer-content {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 30px;
            margin-bottom: 20px;
        }
        
        .footer-section {
            flex: 1;
            min-width: 250px;
        }
        
        .footer-section h3 {
            color: #4facfe;
            margin-bottom: 20px;
        }
        
        .footer-bottom {
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            z-index: 1000;
            align-items: center;
            justify-content: center;
        }
        
        .modal-content {
            background: rgba(30, 30, 40, 0.9);
            padding: 30px;
            border-radius: 10px;
            width: 90%;
            max-width: 500px;
            backdrop-filter: blur(10px);
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.5);
            position: relative;
        }
        
        .close-modal {
            position: absolute;
            top: 15px;
            right: 15px;
            font-size: 24px;
            cursor: pointer;
            color: #fff;
        }
        
        .modal h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #4facfe;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
        }
        
        .form-group input {
            width: 100%;
            padding: 12px;
            border-radius: 5px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            background: rgba(0, 0, 0, 0.3);
            color: #fff;
            font-size: 16px;
        }
        
        .form-submit {
            width: 100%;
            padding: 12px;
            background: linear-gradient(to right, #4facfe, #00f2fe);
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            margin-top: 10px;
        }
        
        .form-submit:hover {
            opacity: 0.9;
        }
        
        .form-footer {
            text-align: center;
            margin-top: 20px;
            color: #e2e2e2;
        }
        
        .form-footer a {
            color: #4facfe;
            text-decoration: none;
        }
        
        /* Dashboard Styles */
        .dashboard {
            display: none;
            padding: 40px 0;
        }
        
        .dashboard-header {
            text-align: center;
            margin-bottom: 40px;
        }
        
        .dashboard-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 40px;
        }
        
        .dashboard-card {
            background: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            backdrop-filter: blur(10px);
        }
        
        .dashboard-card h3 {
            color: #4facfe;
            margin-bottom: 10px;
        }
        
        /* Verification Section */
        .verification {
            display: none;
            text-align: center;
            padding: 40px 0;
        }
        
        .verification-code {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin: 20px 0;
        }
        
        .verification-code input {
            width: 50px;
            height: 50px;
            text-align: center;
            font-size: 24px;
            border-radius: 5px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            background: rgba(0, 0, 0, 0.3);
            color: #fff;
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .hero p {
                font-size: 1.2rem;
            }
            
            .nav-links {
                display: none;
            }
            
            .steps {
                flex-direction: column;
                align-items: center;
            }
            
            .verification-code {
                flex-wrap: wrap;
            }
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <header>
        <div class="container">
            <nav>
                <div class="logo">TechSkill</div>
                <div class="nav-links">
                    <a href="#">Home</a>
                    <a href="#">Courses</a>
                    <a href="#">About</a>
                    <a href="#">Contact</a>
                </div>
                <div class="auth-buttons">
                    <a href="#" class="btn btn-login" id="loginBtn">Login</a>
                    <a href="#" class="btn btn-signup" id="signupBtn">Sign Up</a>
                </div>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>Improve Your Computer Skills</h1>
            <p>Master essential digital skills with our comprehensive learning platform. Join our waiting list today to get early access to premium courses and resources.</p>
            <a href="#" class="btn-waiting" id="waitingListBtn">Join Waiting List</a>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features">
        <div class="container">
            <h2>Why Choose Our Platform?</h2>
            <div class="feature-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3>Comprehensive Courses</h3>
                    <p>From basic computer literacy to advanced programming, we have courses for all skill levels.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                    <h3>Expert Instructors</h3>
                    <p>Learn from industry professionals with years of experience in their respective fields.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h3>Certification</h3>
                    <p>Earn recognized certificates to boost your resume and career prospects.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Courses Section -->
    <section class="courses">
        <div class="container">
            <h2>Popular Courses</h2>
            <div class="course-grid">
                <div class="course-card">
                    <div class="course-img" style="background-image: url('https://images.unsplash.com/photo-1542831371-29b0f74f9713?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80');"></div>
                    <div class="course-content">
                        <h3>Programming Fundamentals</h3>
                        <p>Learn the basics of programming with Python and JavaScript.</p>
                        <div class="progress-bar">
                            <div class="progress" style="width: 30%"></div>
                        </div>
                        <p>30% Complete</p>
                    </div>
                </div>
                <div class="course-card">
                    <div class="course-img" style="background-image: url('https://images.unsplash.com/photo-1563207153-f403bf289096?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80');"></div>
                    <div class="course-content">
                        <h3>Web Development</h3>
                        <p>Build responsive websites with HTML, CSS, and JavaScript.</p>
                        <div class="progress-bar">
                            <div class="progress" style="width: 15%"></div>
                        </div>
                        <p>15% Complete</p>
                    </div>
                </div>
                <div class="course-card">
                    <div class="course-img" style="background-image: url('https://images.unsplash.com/photo-1555421689-3f034debb7a6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80');"></div>
                    <div class="course-content">
                        <h3>Data Analysis</h3>
                        <p>Master Excel, SQL, and data visualization tools.</p>
                        <div class="progress-bar">
                            <div class="progress" style="width: 5%"></div>
                        </div>
                        <p>5% Complete</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="process">
        <div class="container">
            <h2>How It Works</h2>
            <div class="steps">
                <div class="step">
                    <div class="step-number">1</div>
                    <h3>Login / Sign Up</h3>
                    <p>Access your account or create a new one to get started.</p>
                </div>
                <div class="step">
                    <div class="step-number">2</div>
                    <h3>Join Waiting List</h3>
                    <p>Click on the waiting list link to express your interest.</p>
                </div>
                <div class="step">
                    <div class="step-number">3</div>
                    <h3>Verification</h3>
                    <p>Enter the verification code sent to your email.</p>
                </div>
                <div class="step">
                    <div class="step-number">4</div>
                    <h3>Start Learning</h3>
                    <p>Access courses and begin improving your computer skills.</p>
                </div>
            </div>
            <p>Once you've completed these steps, you'll have full access to our learning platform and resources.</p>
        </div>
    </section>

    <!-- Dashboard Section (visible after login) -->
    <section class="dashboard" id="dashboard">
        <div class="container">
            <div class="dashboard-header">
                <h2>Welcome to Your Learning Dashboard</h2>
                <p>Track your progress and continue your learning journey</p>
            </div>
            <div class="dashboard-cards">
                <div class="dashboard-card">
                    <h3>Enrolled Courses</h3>
                    <p>3</p>
                </div>
                <div class="dashboard-card">
                    <h3>Hours Learned</h3>
                    <p>12.5</p>
                </div>
                <div class="dashboard-card">
                    <h3>Certificates</h3>
                    <p>0</p>
                </div>
            </div>
            <div id="waitingListSection">
                <h2 style="text-align: center; margin-bottom: 20px; color: #4facfe;">Waiting List Access</h2>
                <p style="text-align: center; margin-bottom: 30px;">You're currently #42 on our waiting list. We'll notify you when you gain full access to all features.</p>
                <div style="text-align: center;">
                    <a href="#" class="btn-waiting" id="dashboardWaitingBtn">Check Waiting List Status</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Verification Section -->
    <section class="verification" id="verificationSection">
        <div class="container">
            <h2>Email Verification</h2>
            <p>We've sent a verification code to your email address. Please enter it below to confirm your request.</p>
            <div class="verification-code">
                <input type="text" maxlength="1" pattern="[0-9]">
                <input type="text" maxlength="1" pattern="[0-9]">
                <input type="text" maxlength="1" pattern="[0-9]">
                <input type="text" maxlength="1" pattern="[0-9]">
                <input type="text" maxlength="1" pattern="[0-9]">
                <input type="text" maxlength="1" pattern="[0-9]">
            </div>
            <button class="btn btn-signup" id="verifyBtn">Verify</button>
            <p style="margin-top: 20px;">Didn't receive the code? <a href="#" style="color: #4facfe;">Resend</a></p>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>About TechSkill</h3>
                    <p>Modern learning platform designed to help you improve your computer skills and advance your career.</p>
                </div>
                <div class="footer-section">
                    <h3>Quick Links</h3>
                    <p><a href="#">Home</a></p>
                    <p><a href="#">Courses</a></p>
                    <p><a href="#">Waiting List</a></p>
                    <p><a href="#">Contact</a></p>
                </div>
                <div class="footer-section">
                    <h3>Contact Us</h3>
                    <p><i class="fas fa-map-marker-alt"></i> 123 Tech Lane, Digital City</p>
                    <p><i class="fas fa-phone"></i> (123) 456-7890</p>
                    <p><i class="fas fa-envelope"></i> info@techskill.com</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2023 TechSkill Learning Platform. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Login Modal -->
    <div class="modal" id="loginModal">
        <div class="modal-content">
            <span class="close-modal">&times;</span>
            <h2>Login to Your Account</h2>
            <form id="loginForm">
                <div class="form-group">
                    <label for="loginEmail">Email Address</label>
                    <input type="email" id="loginEmail" required>
                </div>
                <div class="form-group">
                    <label for="loginPassword">Password</label>
                    <input type="password" id="loginPassword" required>
                </div>
                <button type="submit" class="form-submit">Login</button>
                <div class="form-footer">
                    <p>Don't have an account? <a href="#" id="switchToSignup">Sign Up</a></p>
                </div>
            </form>
        </div>
    </div>

    <!-- Signup Modal -->
    <div class="modal" id="signupModal">
        <div class="modal-content">
            <span class="close-modal">&times;</span>
            <h2>Create an Account</h2>
            <form id="signupForm">
                <div class="form-group">
                    <label for="signupName">Full Name</label>
                    <input type="text" id="signupName" required>
                </div>
                <div class="form-group">
                    <label for="signupEmail">Email Address</label>
                    <input type="email" id="signupEmail" required>
                </div>
                <div class="form-group">
                    <label for="signupPassword">Password</label>
                    <input type="password" id="signupPassword" required>
                </div>
                <div class="form-group">
                    <label for="signupConfirm">Confirm Password</label>
                    <input type="password" id="signupConfirm" required>
                </div>
                <button type="submit" class="form-submit">Create Account</button>
                <div class="form-footer">
                    <p>Already have an account? <a href="#" id="switchToLogin">Login</a></p>
                </div>
            </form>
        </div>
    </div>

    <script>
        // DOM Elements
        const loginBtn = document.getElementById('loginBtn');
        const signupBtn = document.getElementById('signupBtn');
        const waitingListBtn = document.getElementById('waitingListBtn');
        const loginModal = document.getElementById('loginModal');
        const signupModal = document.getElementById('signupModal');
        const closeModalButtons = document.querySelectorAll('.close-modal');
        const switchToSignup = document.getElementById('switchToSignup');
        const switchToLogin = document.getElementById('switchToLogin');
        const loginForm = document.getElementById('loginForm');
        const signupForm = document.getElementById('signupForm');
        const dashboard = document.getElementById('dashboard');
        const verificationSection = document.getElementById('verificationSection');
        const verifyBtn = document.getElementById('verifyBtn');
        const dashboardWaitingBtn = document.getElementById('dashboardWaitingBtn');

        // Show Login Modal
        loginBtn.addEventListener('click', function(e) {
            e.preventDefault();
            loginModal.style.display = 'flex';
        });

        // Show Signup Modal
        signupBtn.addEventListener('click', function(e) {
            e.preventDefault();
            signupModal.style.display = 'flex';
        });

        // Close Modals
        closeModalButtons.forEach(button => {
            button.addEventListener('click', function() {
                loginModal.style.display = 'none';
                signupModal.style.display = 'none';
            });
        });

        // Switch to Signup Form
        switchToSignup.addEventListener('click', function(e) {
            e.preventDefault();
            loginModal.style.display = 'none';
            signupModal.style.display = 'flex';
        });

        // Switch to Login Form
        switchToLogin.addEventListener('click', function(e) {
            e.preventDefault();
            signupModal.style.display = 'none';
            loginModal.style.display = 'flex';
        });

        // Login Form Submission
        loginForm.addEventListener('submit', function(e) {
            e.preventDefault();
            // Simple validation
            const email = document.getElementById('loginEmail').value;
            const password = document.getElementById('loginPassword').value;
            
            if (email && password) {
                // Close modal and show dashboard
                loginModal.style.display = 'none';
                dashboard.style.display = 'block';
                
                // Update UI to show user is logged in
                document.querySelector('.auth-buttons').innerHTML = `
                    <a href="#" class="btn btn-login" id="logoutBtn">Logout</a>
                `;
                
                // Add logout functionality
                document.getElementById('logoutBtn').addEventListener('click', function(e) {
                    e.preventDefault();
                    dashboard.style.display = 'none';
                    document.querySelector('.auth-buttons').innerHTML = `
                        <a href="#" class="btn btn-login" id="loginBtn">Login</a>
                        <a href="#" class="btn btn-signup" id="signupBtn">Sign Up</a>
                    `;
                    // Reattach event listeners
                    document.getElementById('loginBtn').addEventListener('click', function(e) {
                        e.preventDefault();
                        loginModal.style.display = 'flex';
                    });
                    document.getElementById('signupBtn').addEventListener('click', function(e) {
                        e.preventDefault();
                        signupModal.style.display = 'flex';
                    });
                });
            }
        });

        // Signup Form Submission
        signupForm.addEventListener('submit', function(e) {
            e.preventDefault();
            // Simple validation
            const name = document.getElementById('signupName').value;
            const email = document.getElementById('signupEmail').value;
            const password = document.getElementById('signupPassword').value;
            const confirm = document.getElementById('signupConfirm').value;
            
            if (name && email && password && confirm && password === confirm) {
                // Close modal and show verification
                signupModal.style.display = 'none';
                verificationSection.style.display = 'block';
            }
        });

        // Waiting List Button (when not logged in)
        waitingListBtn.addEventListener('click', function(e) {
            e.preventDefault();
            loginModal.style.display = 'flex';
        });

        // Waiting List Button (when logged in)
        dashboardWaitingBtn.addEventListener('click', function(e) {
            e.preventDefault();
            verificationSection.style.display = 'block';
            dashboard.style.display = 'none';
        });

        // Verify Button
        verifyBtn.addEventListener('click', function() {
            // Simple verification
            verificationSection.style.display = 'none';
            dashboard.style.display = 'block';
            
            // Update waiting list message
            document.querySelector('#waitingListSection p').textContent = 
                "Thank you for verifying! You're now #25 on our waiting list. We'll notify you when you gain full access to all features.";
        });

        // Simple animation for elements
        document.addEventListener('DOMContentLoaded', function() {
            const featureCards = document.querySelectorAll('.feature-card');
            const steps = document.querySelectorAll('.step');
            const courseCards = document.querySelectorAll('.course-card');
            
            // Animate elements on scroll
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = 1;
                        entry.target.style.transform = 'translateY(0)';
                        
                        // Animate progress bars
                        if (entry.target.querySelector('.progress')) {
                            const progressBar = entry.target.querySelector('.progress');
                            const width = progressBar.style.width;
                            progressBar.style.width = '0';
                            setTimeout(() => {
                                progressBar.style.width = width;
                            }, 300);
                        }
                    }
                });
            }, { threshold: 0.1 });
            
            // Set initial state for animation
            featureCards.forEach(card => {
                card.style.opacity = 0;
                card.style.transform = 'translateY(20px)';
                card.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                observer.observe(card);
            });
            
            steps.forEach(step => {
                step.style.opacity = 0;
                step.style.transform = 'translateY(20px)';
                step.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                observer.observe(step);
            });
            
            courseCards.forEach(card => {
                card.style.opacity = 0;
                card.style.transform = 'translateY(20px)';
                card.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                observer.observe(card);
            });
            
            // Close modal when clicking outside
            window.addEventListener('click', function(e) {
                if (e.target === loginModal) {
                    loginModal.style.display = 'none';
                }
                if (e.target === signupModal) {
                    signupModal.style.display = 'none';
                }
            });
        });
    </script>
</body>
</html>