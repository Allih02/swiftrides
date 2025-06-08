<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SwiftRides | Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f8fafc;
    }
    .gradient-bg {
      background: linear-gradient(135deg, #3b82f6 0%, #6366f1 100%);
    }
    .login-card {
      box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
      transition: all 0.3s ease;
    }
    .login-card:hover {
      transform: translateY(-5px);
    }
    .btn-primary {
      background: linear-gradient(135deg, #3b82f6 0%, #6366f1 100%);
      transition: all 0.3s ease;
    }
    .btn-primary:hover {
      transform: translateY(-2px);
      box-shadow: 0 10px 15px -3px rgba(59, 130, 246, 0.3);
    }
    .input-focus:focus {
      border-color: #3b82f6;
      box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.2);
    }
    .social-btn {
      transition: all 0.3s ease;
    }
    .social-btn:hover {
      transform: translateY(-2px);
    }
  </style>
</head>
<body class="min-h-screen flex flex-col">

  <!-- Sticky Navigation Bar -->
  <header class="sticky top-0 z-50 bg-white/80 backdrop-blur-md shadow-sm px-6 py-4 flex justify-between items-center">
    <div class="flex items-center space-x-2">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
      </svg>
      <h1 class="text-2xl font-bold bg-gradient-to-r from-blue-600 to-indigo-500 bg-clip-text text-transparent">SwiftRides</h1>
    </div>
    <nav class="hidden md:flex space-x-8">
      <a href="home.php" class="text-gray-700 hover:text-blue-600 font-medium transition">Home</a>
      <a href="routes.php" class="text-gray-700 hover:text-blue-600 font-medium transition">Routes</a>
      <a href="services.php" class="text-gray-700 hover:text-blue-600 font-medium transition">Services</a>
      <a href="about.php" class="text-gray-700 hover:text-blue-600 font-medium transition">About</a>
      <a href="contact.php" class="text-gray-700 hover:text-blue-600 font-medium transition">Contact</a>
    </nav>
    <div class="flex items-center space-x-4">
      <a href="login.php" class="text-blue-600 font-medium">Login</a>
      <a href="register.php" class="bg-blue-600 text-white px-4 py-2 rounded-lg font-medium hover:bg-blue-700 transition shadow-sm">Register</a>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="relative gradient-bg text-white py-12 md:py-20 px-6 text-center overflow-hidden">
    <div class="absolute inset-0 opacity-10">
      <div class="absolute top-20 left-10 w-32 h-32 rounded-full bg-white animate-pulse"></div>
      <div class="absolute bottom-10 right-20 w-40 h-40 rounded-full bg-white animate-pulse delay-300"></div>
    </div>
    
    <div class="max-w-4xl mx-auto relative z-10 animate__animated animate__fadeIn">
      <h2 class="text-3xl md:text-4xl font-bold mb-6 leading-tight">Welcome Back</h2>
      <p class="text-lg text-blue-100 mb-8 max-w-2xl mx-auto">Sign in to access your account and manage your bookings.</p>
      
      <div class="flex justify-center space-x-4">
        <a href="#login-form" class="btn-primary px-6 py-3 rounded-lg font-medium shadow-lg">Sign In</a>
        <a href="register.php" class="bg-white text-blue-600 px-6 py-3 rounded-lg font-medium hover:bg-gray-100 transition shadow-sm">Create Account</a>
      </div>
    </div>
  </section>

  <!-- Login Section -->
  <section class="px-6 py-12 md:py-20 flex items-center justify-center">
    <div class="max-w-md w-full">
      <div class="login-card bg-white rounded-xl p-8 md:p-10 animate__animated animate__fadeInUp">
        <div class="text-center mb-8">
          <h3 class="text-2xl font-bold text-gray-800 mb-2">Login to Your Account</h3>
          <p class="text-gray-600">Enter your credentials to continue</p>
        </div>
        
        <form id="login-form" class="space-y-6">
          <div>
            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
            <input type="email" id="email" class="w-full p-3 border border-gray-300 rounded-lg input-focus focus:ring-2 focus:ring-blue-500" placeholder="your@email.com" required>
          </div>
          
          <div>
            <div class="flex justify-between items-center mb-1">
              <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
              <a href="forgot-password.html" class="text-sm text-blue-600 hover:text-blue-800">Forgot password?</a>
            </div>
            <input type="password" id="password" class="w-full p-3 border border-gray-300 rounded-lg input-focus focus:ring-2 focus:ring-blue-500" placeholder="••••••••" required>
          </div>
          
          <div class="flex items-center">
            <input id="remember-me" type="checkbox" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
            <label for="remember-me" class="ml-2 block text-sm text-gray-700">Remember me</label>
          </div>
          
          <button type="submit" class="btn-primary w-full py-3 rounded-lg font-medium text-white hover:shadow-lg transition">Sign In</button>
        </form>
        
        <div class="relative my-6">
          <div class="absolute inset-0 flex items-center">
            <div class="w-full border-t border-gray-300"></div>
          </div>
          <div class="relative flex justify-center text-sm">
            <span class="px-2 bg-white text-gray-500">Or continue with</span>
          </div>
        </div>
        
        <div class="grid grid-cols-2 gap-4">
          <a href="#" class="social-btn flex items-center justify-center py-2 px-4 border border-gray-300 rounded-lg hover:bg-gray-50 transition">
            <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path d="M12.48 10.92v3.28h7.84c-.24 1.84-.853 3.187-1.787 4.133-1.147 1.147-2.933 2.4-6.053 2.4-4.827 0-8.6-3.893-8.6-8.72s3.773-8.72 8.6-8.72c2.6 0 4.507 1.027 5.907 2.347l2.307-2.307C18.747 1.44 16.133 0 12.48 0 5.867 0 .307 5.387.307 12s5.56 12 12.173 12c3.573 0 6.267-1.173 8.373-3.36 2.16-2.16 2.84-5.213 2.84-7.667 0-.76-.053-1.467-.173-2.053H12.48z" fill="#EA4335"/>
            </svg>
            Google
          </a>
          <a href="#" class="social-btn flex items-center justify-center py-2 px-4 border border-gray-300 rounded-lg hover:bg-gray-50 transition">
            <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 5.43 4.327 9.848 9.72 9.98v-7.087H7.9V12h3.82V9.458c0-3.77 2.235-5.848 5.66-5.848 1.64 0 3.36.294 3.36.294v3.692h-1.89c-1.87 0-2.45 1.165-2.45 2.36V12h4.16l-.665 4.893H14.28V22C19.673 21.848 22 17.43 22 12z" fill="#1877F2"/>
            </svg>
            Facebook
          </a>
        </div>
        
        <div class="text-center mt-6">
          <p class="text-gray-600">Don't have an account? <a href="register.php" class="text-blue-600 font-medium hover:text-blue-800 transition">Sign up</a></p>
        </div>
      </div>
      
      <div class="text-center mt-6">
        <p class="text-sm text-gray-500">By continuing, you agree to our <a href="#" class="text-blue-600 hover:text-blue-800">Terms of Service</a> and <a href="#" class="text-blue-600 hover:text-blue-800">Privacy Policy</a>.</p>
      </div>
    </div>
  </section>

  <!-- Features Section -->
  <section class="bg-gray-50 px-6 py-16">
    <div class="max-w-6xl mx-auto">
      <div class="text-center mb-12">
        <h3 class="text-3xl font-bold text-gray-800 mb-4">Why Login to SwiftRides?</h3>
        <p class="text-gray-600 max-w-2xl mx-auto">Access exclusive features and manage your travel with ease</p>
      </div>
      
      <div class="grid md:grid-cols-3 gap-8">
        <div class="bg-white p-8 rounded-xl shadow-sm">
          <div class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
            </svg>
          </div>
          <h4 class="text-xl font-semibold text-gray-800 mb-2">Manage Bookings</h4>
          <p class="text-gray-600">View, modify, or cancel your upcoming trips all in one place.</p>
        </div>
        
        <div class="bg-white p-8 rounded-xl shadow-sm">
          <div class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
          </div>
          <h4 class="text-xl font-semibold text-gray-800 mb-2">Exclusive Deals</h4>
          <p class="text-gray-600">Get access to member-only discounts and special offers.</p>
        </div>
        
        <div class="bg-white p-8 rounded-xl shadow-sm">
          <div class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
            </svg>
          </div>
          <h4 class="text-xl font-semibold text-gray-800 mb-2">Secure Payments</h4>
          <p class="text-gray-600">Save payment methods for faster, more secure checkouts.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-gray-900 text-gray-300 px-6 py-12">
    <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-8">
      <div>
        <div class="flex items-center space-x-2 mb-4">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
          </svg>
          <h3 class="text-xl font-bold text-white">SwiftRides</h3>
        </div>
        <p class="mb-4">Premium transport services across East Africa with comfort and reliability.</p>
        <div class="flex space-x-4">
          <a href="#" class="text-gray-400 hover:text-white transition">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"/>
            </svg>
          </a>
          <a href="#" class="text-gray-400 hover:text-white transition">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.137.353.3.882.344 1.857.047 1.023.058 1.351.058 3.807v.468c0 2.456-.011 2.784-.058 3.807-.045.975-.207 1.504-.344 1.857a3.157 3.157 0 01-.748 1.15 3.157 3.157 0 01-1.15.748c-.353.137-.882.3-1.857.344-1.054.048-1.37.058-3.808.058h-.468c-2.456 0-2.784-.011-3.807-.058-.975-.045-1.504-.207-1.857-.344a3.157 3.157 0 01-1.15-.748 3.157 3.157 0 01-.748-1.15c-.137-.353-.3-.882-.344-1.857-.048-1.054-.058-1.37-.058-3.808v-.468c0-2.456.011-2.784.058-3.807.045-.975.207-1.504.344-1.857.182-.466.399-.8.748-1.15.35-.35.683-.566 1.15-.748.353-.137.882-.3 1.857-.344 1.023-.047 1.351-.058 3.807-.058h.468c2.456 0 2.784.011 3.807.058.975.045 1.504.207 1.857.344.466.182.8.398 1.15.748.35.35.566.683.748 1.15.137.353.3.882.344 1.857.048 1.023.058 1.351.058 3.807.058h.468c2.456 0 2.784-.011 3.807-.058.975-.045 1.504-.207 1.856-.344.467-.182.8-.398 1.15-.748a3.157 3.157 0 01.748-1.15c-.137-.353-.3-.882-.344-1.857-.047-1.023-.058-1.351-.058-3.807v-.468c0-2.456.011-2.784.058-3.807.045-.975.207-1.504.344-1.857.182-.466.399-.8.748-1.15.35-.35.683-.566 1.15-.748.353-.137.882-.3 1.857-.344 1.054-.048 1.37-.058 3.808-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"/>
            </svg>
          </a>
          <a href="#" class="text-gray-400 hover:text-white transition">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"/>
            </svg>
          </a>
        </div>
      </div>
      
      <div>
        <h4 class="text-lg font-semibold text-white mb-4">Quick Links</h4>
        <ul class="space-y-2">
          <li><a href="home.php" class="hover:text-white transition">Home</a></li>
          <li><a href="routes.php" class="hover:text-white transition">Routes</a></li>
          <li><a href="services.php" class="hover:text-white transition">Services</a></li>
          <li><a href="aboutus.php" class="hover:text-white transition">About Us</a></li>
          <li><a href="contact.php" class="hover:text-white transition">Contact</a></li>
        </ul>
      </div>
      
      <div>
        <h4 class="text-lg font-semibold text-white mb-4">Support</h4>
        <ul class="space-y-2">
          <li><a href="faqs.php" class="hover:text-white transition">FAQs</a></li>
          <li><a href="help-center.php" class="hover:text-white transition">Help Center</a></li>
          <li><a href="terms.php" class="hover:text-white transition">Terms of Service</a></li>
          <li><a href="privacy.php" class="hover:text-white transition">Privacy Policy</a></li>
          <li><a href="refund.php" class="hover:text-white transition">Refund Policy</a></li>
        </ul>
      </div>
      
      <div>
        <h4 class="text-lg font-semibold text-white mb-4">Contact Us</h4>
        <ul class="space-y-2">
          <li class="flex items-start">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 mt-0.5 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
            <span>123 Transport Ave, Dar es Salaam, Tanzania</span>
          </li>
          <li class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
            </svg>
            <span>+255 123 456 789</span>
          </li>
          <li class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
            </svg>
            <span>info@swiftrides.co.tz</span>
          </li>
        </ul>
      </div>
    </div>
    
    <div class="max-w-6xl mx-auto mt-12 pt-6 border-t border-gray-800 text-center">
      <p>&copy; <?php echo date('Y'); ?> SwiftRides. All rights reserved.</p>
    </div>
  </footer>

</body>
</html>