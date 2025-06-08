<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SwiftRides | About Us</title>
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
    .card-hover {
      transition: all 0.3s ease;
    }
    .card-hover:hover {
      transform: translateY(-5px);
      box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }
    .btn-primary {
      background: linear-gradient(135deg, #3b82f6 0%, #6366f1 100%);
      transition: all 0.3s ease;
    }
    .btn-primary:hover {
      transform: translateY(-2px);
      box-shadow: 0 10px 15px -3px rgba(59, 130, 246, 0.3);
    }
    .timeline-dot {
      position: relative;
    }
    .timeline-dot::after {
      content: '';
      position: absolute;
      top: 50%;
      left: 0;
      transform: translateY(-50%);
      width: 12px;
      height: 12px;
      background-color: #3b82f6;
      border-radius: 50%;
      z-index: 1;
    }
    .timeline-line::before {
      content: '';
      position: absolute;
      top: 0;
      left: 5px;
      width: 2px;
      height: 100%;
      background-color: #e5e7eb;
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
      <a href="about.php" class="text-blue-600 font-medium">About</a>
      <a href="contact.php" class="text-gray-700 hover:text-blue-600 font-medium transition">Contact</a>
    </nav>
    <div class="flex items-center space-x-4">
      <a href="login.php" class="text-gray-700 hover:text-blue-600 font-medium transition">Login</a>
      <a href="register.php" class="bg-blue-600 text-white px-4 py-2 rounded-lg font-medium hover:bg-blue-700 transition shadow-sm">Register</a>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="relative gradient-bg text-white py-20 md:py-28 px-6 text-center overflow-hidden">
    <div class="absolute inset-0 opacity-10">
      <div class="absolute top-20 left-10 w-32 h-32 rounded-full bg-white animate-pulse"></div>
      <div class="absolute bottom-10 right-20 w-40 h-40 rounded-full bg-white animate-pulse delay-300"></div>
    </div>
    
    <div class="max-w-4xl mx-auto relative z-10 animate__animated animate__fadeIn">
      <h2 class="text-4xl md:text-5xl font-bold mb-6 leading-tight">Our Story</h2>
      <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">Connecting East Africa through reliable and comfortable transportation since 2015.</p>
      
      <div class="flex justify-center">
        <a href="#mission" class="btn-primary px-6 py-3 rounded-lg font-medium shadow-lg">Learn More</a>
      </div>
    </div>
  </section>

  <!-- Mission Section -->
  <section id="mission" class="px-6 py-16 bg-white">
    <div class="max-w-6xl mx-auto">
      <div class="flex flex-col md:flex-row items-center gap-12">
        <div class="md:w-1/2 animate__animated animate__fadeInLeft">
          <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_1pxqjqps.json" background="transparent" speed="1" style="width: 100%; height: auto;" loop autoplay></lottie-player>
        </div>
        <div class="md:w-1/2 animate__animated animate__fadeInRight">
          <h3 class="text-3xl font-bold text-gray-800 mb-6">Our Mission</h3>
          <p class="text-gray-600 mb-6">At SwiftRides, we're committed to revolutionizing transportation in East Africa by providing safe, reliable, and comfortable travel experiences that connect communities and empower businesses.</p>
          <div class="space-y-4">
            <div class="flex items-start">
              <div class="flex-shrink-0 mt-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
              </div>
              <p class="ml-3 text-gray-600">To be East Africa's most trusted transportation service provider by 2030.</p>
            </div>
            <div class="flex items-start">
              <div class="flex-shrink-0 mt-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
              </div>
              <p class="ml-3 text-gray-600">To reduce intercity travel time by 30% through optimized routes and premium services.</p>
            </div>
            <div class="flex items-start">
              <div class="flex-shrink-0 mt-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
              </div>
              <p class="ml-3 text-gray-600">To maintain a 99% customer satisfaction rate through exceptional service.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Timeline Section -->
  <section class="bg-gray-50 px-6 py-16">
    <div class="max-w-6xl mx-auto">
      <div class="text-center mb-12">
        <h3 class="text-3xl font-bold text-gray-800 mb-4">Our Journey</h3>
        <p class="text-gray-600 max-w-2xl mx-auto">From humble beginnings to East Africa's premier transport service.</p>
      </div>
      
      <div class="relative timeline-line pl-8 space-y-8">
        <!-- Timeline Item 1 -->
        <div class="relative timeline-dot pl-8">
          <div class="bg-white p-6 rounded-xl shadow-sm card-hover">
            <div class="flex items-center mb-2">
              <span class="bg-blue-100 text-blue-800 text-sm font-medium px-2.5 py-0.5 rounded">2015</span>
            </div>
            <h4 class="text-xl font-semibold text-gray-800 mb-2">Founded in Dar es Salaam</h4>
            <p class="text-gray-600">Started with just 3 buses operating between Dar es Salaam and Arusha, focusing on comfort and reliability.</p>
          </div>
        </div>
        
        <!-- Timeline Item 2 -->
        <div class="relative timeline-dot pl-8">
          <div class="bg-white p-6 rounded-xl shadow-sm card-hover">
            <div class="flex items-center mb-2">
              <span class="bg-blue-100 text-blue-800 text-sm font-medium px-2.5 py-0.5 rounded">2017</span>
            </div>
            <h4 class="text-xl font-semibold text-gray-800 mb-2">Expanded to Kenya</h4>
            <p class="text-gray-600">Launched our Nairobi-Mombasa route, introducing luxury coaches with onboard WiFi and entertainment.</p>
          </div>
        </div>
        
        <!-- Timeline Item 3 -->
        <div class="relative timeline-dot pl-8">
          <div class="bg-white p-6 rounded-xl shadow-sm card-hover">
            <div class="flex items-center mb-2">
              <span class="bg-blue-100 text-blue-800 text-sm font-medium px-2.5 py-0.5 rounded">2019</span>
            </div>
            <h4 class="text-xl font-semibold text-gray-800 mb-2">Digital Transformation</h4>
            <p class="text-gray-600">Launched our mobile app and online booking platform, revolutionizing how customers book travel in East Africa.</p>
          </div>
        </div>
        
        <!-- Timeline Item 4 -->
        <div class="relative timeline-dot pl-8">
          <div class="bg-white p-6 rounded-xl shadow-sm card-hover">
            <div class="flex items-center mb-2">
              <span class="bg-blue-100 text-blue-800 text-sm font-medium px-2.5 py-0.5 rounded">2022</span>
            </div>
            <h4 class="text-xl font-semibold text-gray-800 mb-2">Regional Network</h4>
            <p class="text-gray-600">Expanded to Uganda and Rwanda, completing our East Africa coverage with the Kampala-Kigali route.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Team Section -->
  <section class="px-6 py-16 bg-white">
    <div class="max-w-6xl mx-auto">
      <div class="text-center mb-12">
        <h3 class="text-3xl font-bold text-gray-800 mb-4">Meet Our Leadership</h3>
        <p class="text-gray-600 max-w-2xl mx-auto">The passionate team driving SwiftRides forward.</p>
      </div>
      
      <div class="grid md:grid-cols-3 gap-8">
        <!-- Team Member 1 -->
        <div class="bg-white rounded-xl overflow-hidden shadow-sm card-hover">
          <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Team Member" class="w-full h-64 object-cover">
          <div class="p-6">
            <h4 class="text-xl font-bold text-gray-800 mb-1">James Mwangi</h4>
            <p class="text-blue-600 font-medium mb-4">Founder & CEO</p>
            <p class="text-gray-600">With 15 years in transportation, James founded SwiftRides to revolutionize travel in East Africa.</p>
          </div>
        </div>
        
        <!-- Team Member 2 -->
        <div class="bg-white rounded-xl overflow-hidden shadow-sm card-hover">
          <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Team Member" class="w-full h-64 object-cover">
          <div class="p-6">
            <h4 class="text-xl font-bold text-gray-800 mb-1">Amina Hassan</h4>
            <p class="text-blue-600 font-medium mb-4">Operations Director</p>
            <p class="text-gray-600">Amina ensures every journey meets our high standards of safety and comfort.</p>
          </div>
        </div>
        
        <!-- Team Member 3 -->
        <div class="bg-white rounded-xl overflow-hidden shadow-sm card-hover">
          <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Team Member" class="w-full h-64 object-cover">
          <div class="p-6">
            <h4 class="text-xl font-bold text-gray-800 mb-1">David Ochieng</h4>
            <p class="text-blue-600 font-medium mb-4">Technology Director</p>
            <p class="text-gray-600">David leads our digital transformation and customer experience initiatives.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Stats Section -->
  <section class="gradient-bg text-white px-6 py-16">
    <div class="max-w-6xl mx-auto">
      <div class="grid md:grid-cols-4 gap-8 text-center">
        <div class="animate__animated animate__fadeInUp">
          <div class="text-4xl font-bold mb-2">15K+</div>
          <div class="text-blue-100">Daily Passengers</div>
        </div>
        <div class="animate__animated animate__fadeInUp animate__delay-1s">
          <div class="text-4xl font-bold mb-2">120+</div>
          <div class="text-blue-100">Premium Vehicles</div>
        </div>
        <div class="animate__animated animate__fadeInUp animate__delay-2s">
          <div class="text-4xl font-bold mb-2">98%</div>
          <div class="text-blue-100">On-Time Rate</div>
        </div>
        <div class="animate__animated animate__fadeInUp animate__delay-3s">
          <div class="text-4xl font-bold mb-2">4.9/5</div>
          <div class="text-blue-100">Customer Rating</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action -->
  <section class="bg-white px-6 py-16">
    <div class="max-w-4xl mx-auto text-center">
      <h3 class="text-3xl font-bold text-gray-800 mb-6">Ready to Experience SwiftRides?</h3>
      <p class="text-gray-600 mb-10 max-w-2xl mx-auto">Join thousands of satisfied travelers across East Africa.</p>
      <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-6">
        <a href="#" class="btn-primary px-6 py-3 rounded-lg font-medium text-white hover:shadow-lg transition">Book Your Ride</a>
        <a href="#" class="border border-blue-600 text-blue-600 px-6 py-3 rounded-lg font-medium hover:bg-blue-50 transition">Contact Us</a>
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
          <li><a href="#" class="hover:text-white transition">FAQs</a></li>
          <li><a href="#" class="hover:text-white transition">Help Center</a></li>
          <li><a href="#" class="hover:text-white transition">Terms of Service</a></li>
          <li><a href="#" class="hover:text-white transition">Privacy Policy</a></li>
          <li><a href="#" class="hover:text-white transition">Refund Policy</a></li>
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