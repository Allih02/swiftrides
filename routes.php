<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SwiftRides | Explore Routes</title>
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
    .route-card:hover {
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
    .filter-card {
      backdrop-filter: blur(10px);
      background: rgba(255, 255, 255, 0.85);
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
      <a href="routes.php" class="text-blue-600 font-medium">Routes</a>
      <a href="services.php" class="text-gray-700 hover:text-blue-600 font-medium transition">Services</a>
      <a href="aboutus.php" class="text-gray-700 hover:text-blue-600 font-medium transition">About</a>
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
      <h2 class="text-4xl md:text-5xl font-bold mb-6 leading-tight">Discover Our Premium Routes</h2>
      <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">Explore seamless travel options across East Africa with comfort and reliability.</p>
      
      <!-- Updated Search Filter with grouped options -->
      <div class="filter-card p-6 rounded-xl shadow-lg max-w-3xl mx-auto mt-8 animate__animated animate__fadeInUp">
        <form action="search.php" method="GET" class="grid md:grid-cols-4 gap-4">
          <div>
            <label for="origin" class="block text-sm font-medium text-gray-700 mb-1 text-left">From</label>
            <select id="origin" name="origin" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" required>
              <option value="" disabled selected>Select City</option>
              <optgroup label="Tanzania">
                <option value="dar_es_salaam">Dar es Salaam</option>
                <option value="arusha">Arusha</option>
                <option value="dodoma">Dodoma</option>
                <option value="mbeya">Mbeya</option>
                <option value="mwanza">Mwanza</option>
                <option value="tanga">Tanga</option>
                <option value="morogoro">Morogoro</option>
                <option value="zanzibar">Zanzibar</option>
              </optgroup>
              <optgroup label="Kenya">
                <option value="nairobi">Nairobi</option>
                <option value="mombasa">Mombasa</option>
                <option value="kisumu">Kisumu</option>
                <option value="nakuru">Nakuru</option>
                <option value="eldoret">Eldoret</option>
              </optgroup>
              <optgroup label="Uganda">
                <option value="kampala">Kampala</option>
                <option value="entebbe">Entebbe</option>
                <option value="jinja">Jinja</option>
                <option value="mbale">Mbale</option>
              </optgroup>
              <optgroup label="Rwanda">
                <option value="kigali">Kigali</option>
                <option value="butare">Butare</option>
                <option value="ruhengeri">Ruhengeri</option>
              </optgroup>
              <optgroup label="Burundi">
                <option value="bujumbura">Bujumbura</option>
                <option value="gitega">Gitega</option>
              </optgroup>
            </select>
          </div>
          <div>
            <label for="destination" class="block text-sm font-medium text-gray-700 mb-1 text-left">To</label>
            <select id="destination" name="destination" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" required>
              <option value="" disabled selected>Select City</option>
              <optgroup label="Tanzania">
                <option value="dar_es_salaam">Dar es Salaam</option>
                <option value="arusha">Arusha</option>
                <option value="dodoma">Dodoma</option>
                <option value="mbeya">Mbeya</option>
                <option value="mwanza">Mwanza</option>
                <option value="tanga">Tanga</option>
                <option value="morogoro">Morogoro</option>
                <option value="zanzibar">Zanzibar</option>
              </optgroup>
              <optgroup label="Kenya">
                <option value="nairobi">Nairobi</option>
                <option value="mombasa">Mombasa</option>
                <option value="kisumu">Kisumu</option>
                <option value="nakuru">Nakuru</option>
                <option value="eldoret">Eldoret</option>
              </optgroup>
              <optgroup label="Uganda">
                <option value="kampala">Kampala</option>
                <option value="entebbe">Entebbe</option>
                <option value="jinja">Jinja</option>
                <option value="mbale">Mbale</option>
              </optgroup>
              <optgroup label="Rwanda">
                <option value="kigali">Kigali</option>
                <option value="butare">Butare</option>
                <option value="ruhengeri">Ruhengeri</option>
              </optgroup>
              <optgroup label="Burundi">
                <option value="bujumbura">Bujumbura</option>
                <option value="gitega">Gitega</option>
              </optgroup>
            </select>
          </div>
          <div>
            <label for="travel_date" class="block text-sm font-medium text-gray-700 mb-1 text-left">Date</label>
            <input type="date" id="travel_date" name="travel_date" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" required />
          </div>
          <button type="submit" class="btn-primary mt-6 md:mt-0 px-6 py-3 rounded-lg font-medium text-white hover:shadow-lg transition">
            Search Routes
          </button>
        </form>
        
        <!-- Station Selection (shown after city selection) -->
        <div id="stationSelection" class="hidden mt-6 bg-gray-50 p-6 rounded-xl">
          <div class="grid md:grid-cols-2 gap-6">
            <div>
              <label for="origin_station" class="block text-sm font-medium text-gray-700 mb-2">Select Departure Station</label>
              <select id="origin_station" name="origin_station" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                <option value="" disabled selected>Select station</option>
                <!-- Stations will be populated dynamically via JavaScript -->
              </select>
            </div>
            <div>
              <label for="destination_station" class="block text-sm font-medium text-gray-700 mb-2">Select Arrival Station</label>
              <select id="destination_station" name="destination_station" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                <option value="" disabled selected>Select station</option>
                <!-- Stations will be populated dynamically via JavaScript -->
              </select>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Popular Routes Section -->
  <section class="px-6 py-16 bg-white">
    <div class="max-w-6xl mx-auto">
      <div class="text-center mb-12 animate__animated animate__fadeIn">
        <h3 class="text-3xl font-bold text-gray-800 mb-4">Popular Travel Routes</h3>
        <p class="text-gray-600 max-w-2xl mx-auto">Choose from our most frequented routes with premium service options.</p>
      </div>
      
      <div class="grid md:grid-cols-3 gap-8">
        <!-- Route Card 1 -->
        <div class="route-card bg-white rounded-xl overflow-hidden shadow-md transition duration-300">
          <div class="relative h-48 bg-[url('https://images.unsplash.com/photo-1566438480900-0609be27a4be?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60')] bg-cover bg-center">
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
            <div class="absolute bottom-4 left-4">
              <span class="bg-blue-600 text-white text-xs font-medium px-2.5 py-0.5 rounded">Popular</span>
            </div>
          </div>
          <div class="p-6">
            <div class="flex justify-between items-start mb-3">
              <h4 class="text-xl font-bold text-gray-800">Dar es Salaam → Arusha</h4>
              <span class="text-blue-600 font-semibold">TZS 35,000</span>
            </div>
            <div class="flex items-center text-gray-600 mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              <span>10-12 hours</span>
            </div>
            <div class="flex items-center justify-between">
              <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
                <span class="ml-1 text-gray-700">4.9 (312)</span>
              </div>
              <a href="#" class="text-blue-600 font-medium hover:text-blue-800 transition">View Details</a>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Pagination -->
      <div class="flex justify-center mt-12">
        <nav class="inline-flex rounded-md shadow">
          <a href="#" class="px-3 py-2 rounded-l-md border border-gray-300 bg-white text-gray-500 hover:bg-gray-50">Previous</a>
          <a href="#" class="px-3 py-2 border-t border-b border-gray-300 bg-white text-blue-600 font-medium">1</a>
          <a href="#" class="px-3 py-2 border-t border-b border-gray-300 bg-white text-gray-500 hover:bg-gray-50">2</a>
          <a href="#" class="px-3 py-2 border-t border-b border-gray-300 bg-white text-gray-500 hover:bg-gray-50">3</a>
          <a href="#" class="px-3 py-2 rounded-r-md border border-gray-300 bg-white text-gray-500 hover:bg-gray-50">Next</a>
        </nav>
      </div>
    </div>
  </section>

  <!-- Call to Action -->
  <section class="gradient-bg text-white px-6 py-16">
    <div class="max-w-4xl mx-auto text-center">
      <h3 class="text-3xl font-bold mb-6">Can't Find Your Route?</h3>
      <p class="text-xl text-blue-100 mb-10">Contact our support team for custom travel arrangements.</p>
      <a href="#" class="inline-block bg-white text-blue-600 px-8 py-3 rounded-lg font-medium hover:bg-gray-100 transition shadow-lg">Get Help</a>
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
              <path d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.137.353.3.882.344 1.857.047 1.023.058 1.351.058 3.807v.468c0 2.456-.011 2.784-.058 3.807-.045.975-.207 1.504-.344 1.857a3.157 3.157 0 01-.748 1.15 3.157 3.157 0 01-1.15.748c-.353.137-.882.3-1.857.344-1.054.048-1.37.058-3.808.058h-.468c-2.456 0-2.784-.011-3.807-.058-.975-.045-1.504-.207-1.857-.344a3.157 3.157 0 01-1.15-.748 3.157 3.157 0 01-.748-1.15c-.137-.353-.3-.882-.344-1.857-.048-1.054-.058-1.37-.058-3.808v-.468c0-2.456.011-2.784.058-3.807.045-.975.207-1.504.344-1.857.182-.466.399-.8.748-1.15.35-.35.683-.566 1.15-.748.353-.137.882-.3 1.857-.344 1.023-.047 1.351-.058 3.807-.058h.468c2.456 0 2.784.011 3.807.058.975.045 1.504.207 1.857.344.466.182.8.398 1.15.748.35.35.566.683.748 1.15.137.353.3.882.344 1.857.048 1.023.058 1.351.058 3.807v.468c0 2.456-.011 2.784-.058 3.807-.045.975-.207 1.504-.344 1.857a3.157 3.157 0 01-.748 1.15 3.157 3.157 0 01-1.15.748c-.353.137-.882.3-1.857.344-1.054.048-1.37.058-3.808.058h-.468c-2.456 0-2.784-.011-3.807-.058-.975-.045-1.504-.207-1.857-.344a3.157 3.157 0 01-1.15-.748 3.157 3.157 0 01-.748-1.15c-.137-.353-.3-.882-.344-1.857-.048-1.054-.058-1.37-.058-3.808v-.468c0-2.456.011-2.784.058-3.807.045-.975.207-1.504.344-1.857.182-.466.399-.8.748-1.15.35-.35.683-.566 1.15-.748.353-.137.882-.3 1.857-.344 1.023-.047 1.351-.058 3.807-.058h.468c2.456 0 2.784.011 3.807.058.975.045 1.504.207 1.857.344.466.182.8.398 1.15.748.35.35.566.683.748 1.15.137.353.3.882.344 1.857.048 1.023.058 1.351.058 3.807v.468c0 2.456-.011 2.784-.058 3.807-.045.975-.207 1.504-.344 1.857a3.157 3.157 0 01-.748 1.15 3.157 3.157 0 01-1.15.748c-.353.137-.882.3-1.857.344-1.023.047-1.351.058-3.807.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"/>
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

  <!-- JavaScript for station selection -->
  <script>
    // City and station data for East Africa
    const cityStations = {
      // Tanzania
      dar_es_salaam: ["Ubungo Bus Terminal", "Mbezi Luis", "Kariakoo", "Posta"],
      arusha: ["Arusha Bus Station", "Ngaramtoni", "Sakina"],
      dodoma: ["Dodoma Main Bus Stand", "Makutopora"],
      mbeya: ["Mbeya Bus Terminal", "Mwanjelwa"],
      mwanza: ["Mwanza Bus Stand", "Nyakato"],
      tanga: ["Tanga Bus Station", "Mwanzange"],
      morogoro: ["Morogoro Bus Stand", "Mazimbu"],
      zanzibar: ["Zanzibar Ferry Terminal", "Mwanakwerekwe"],
      
      // Kenya
      nairobi: ["Nairobi River Road", "Machakos Country Bus", "Muthurwa"],
      mombasa: ["Mombasa Bus Station", "Likoni Ferry"],
      kisumu: ["Kisumu Bus Park", "Kondele"],
      nakuru: ["Nakuru Bus Terminal", "Lanet"],
      eldoret: ["Eldoret Bus Park", "Uganda Road"],
      
      // Uganda
      kampala: ["Kampala Bus Park", "Old Taxi Park", "New Taxi Park"],
      entebbe: ["Entebbe Bus Station", "Airport Road"],
      jinja: ["Jinja Main Bus Park", "Nalufenya"],
      mbale: ["Mbale Bus Terminal", "Nkoma"],
      
      // Rwanda
      kigali: ["Nyabugogo Bus Park", "Kacyiru"],
      butare: ["Butare Bus Station", "Huye"],
      ruhengeri: ["Ruhengeri Bus Park", "Musanze"],
      
      // Burundi
      bujumbura: ["Bujumbura Central Station", "Rohero"],
      gitega: ["Gitega Bus Terminal", "Nyamugari"]
    };

    // Get DOM elements
    const originSelect = document.getElementById('origin');
    const destinationSelect = document.getElementById('destination');
    const originStationSelect = document.getElementById('origin_station');
    const destinationStationSelect = document.getElementById('destination_station');
    const stationSelectionDiv = document.getElementById('stationSelection');

    // Show station selection when cities are selected
    originSelect.addEventListener('change', updateStations);
    destinationSelect.addEventListener('change', updateStations);

    function updateStations() {
      const originCity = originSelect.value;
      const destinationCity = destinationSelect.value;
      
      if (originCity && destinationCity) {
        // Show station selection
        stationSelectionDiv.classList.remove('hidden');
        
        // Update origin stations
        originStationSelect.innerHTML = '<option value="" disabled selected>Select station</option>';
        if (cityStations[originCity]) {
          cityStations[originCity].forEach(station => {
            const option = document.createElement('option');
            option.value = station.toLowerCase().replace(/\s+/g, '_');
            option.textContent = station;
            originStationSelect.appendChild(option);
          });
        }
        
        // Update destination stations
        destinationStationSelect.innerHTML = '<option value="" disabled selected>Select station</option>';
        if (cityStations[destinationCity]) {
          cityStations[destinationCity].forEach(station => {
            const option = document.createElement('option');
            option.value = station.toLowerCase().replace(/\s+/g, '_');
            option.textContent = station;
            destinationStationSelect.appendChild(option);
          });
        }
      } else {
        stationSelectionDiv.classList.add('hidden');
      }
    }
  </script>

</body>
</html>="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              <span>8-10 hours</span>
            </div>
            <div class="flex items-center justify-between">
              <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
                <span class="ml-1 text-gray-700">4.8 (256)</span>
              </div>
              <a href="#" class="text-blue-600 font-medium hover:text-blue-800 transition">View Details</a>
            </div>
          </div>
        </div>
        
        <!-- Route Card 2 -->
        <div class="route-card bg-white rounded-xl overflow-hidden shadow-md transition duration-300">
          <div class="relative h-48 bg-[url('https://images.unsplash.com/photo-1527631746610-bca00a040d60?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60')] bg-cover bg-center">
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
          </div>
          <div class="p-6">
            <div class="flex justify-between items-start mb-3">
              <h4 class="text-xl font-bold text-gray-800">Nairobi → Mombasa</h4>
              <span class="text-blue-600 font-semibold">KES 1,200</span>
            </div>
            <div class="flex items-center text-gray-600 mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              <span>6-8 hours</span>
            </div>
            <div class="flex items-center justify-between">
              <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
                <span class="ml-1 text-gray-700">4.7 (189)</span>
              </div>
              <a href="#" class="text-blue-600 font-medium hover:text-blue-800 transition">View Details</a>
            </div>
          </div>
        </div>
        
        <!-- Route Card 3 -->
        <div class="route-card bg-white rounded-xl overflow-hidden shadow-md transition duration-300">
          <div class="relative h-48 bg-[url('https://images.unsplash.com/photo-1506929562872-bb421503ef21?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60')] bg-cover bg-center">
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
            <div class="absolute bottom-4 left-4">
              <span class="bg-green-600 text-white text-xs font-medium px-2.5 py-0.5 rounded">Scenic Route</span>
            </div>
          </div>
          <div class="p-6">
            <div class="flex justify-between items-start mb-3">
              <h4 class="text-xl font-bold text-gray-800">Kampala → Kigali</h4>
              <span class="text-blue-600 font-semibold">UGX 50,000</span>
            </div>
            <div class="flex items-center text-gray-600 mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              <span>10-12 hours</span>
            </div>
            <div class="flex items-center justify-between">
              <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
                <span class="ml-1 text-gray-700">4.9 (312)</span>
              </div>
              <a href="#" class="text-blue-600 font-medium hover:text-blue-800 transition">View Details</a>
            </div>
          </div>
        </div>
      </div>
      
      <!-- More Routes -->
      <div class="grid md:grid-cols-3 gap-8 mt-8">
        <!-- Route Card 4 -->
        <div class="route-card bg-white rounded-xl overflow-hidden shadow-md transition duration-300">
          <div class="relative h-48 bg-[url('https://images.unsplash.com/photo-1583423230902-754c3bf6b8be?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60')] bg-cover bg-center">
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
          </div>
          <div class="p-6">
            <div class="flex justify-between items-start mb-3">
              <h4 class="text-xl font-bold text-gray-800">Dodoma → Mbeya</h4>
              <span class="text-blue-600 font-semibold">TZS 28,000</span>
            </div>
            <div class="flex items-center text-gray-600 mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              <span>7-9 hours</span>
            </div>
            <div class="flex items-center justify-between">
              <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
                <span class="ml-1 text-gray-700">4.6 (142)</span>
              </div>
              <a href="#" class="text-blue-600 font-medium hover:text-blue-800 transition">View Details</a>
            </div>
          </div>
        </div>
        
        <!-- Route Card 5 -->
        <div class="route-card bg-white rounded-xl overflow-hidden shadow-md transition duration-300">
          <div class="relative h-48 bg-[url('https://images.unsplash.com/photo-1527631746610-bca00a040d60?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60')] bg-cover bg-center">
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
          </div>
          <div class="p-6">
            <div class="flex justify-between items-start mb-3">
              <h4 class="text-xl font-bold text-gray-800">Mombasa → Nairobi</h4>
              <span class="text-blue-600 font-semibold">KES 1,200</span>
            </div>
            <div class="flex items-center text-gray-600 mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              <span>6-8 hours</span>
            </div>
            <div class="flex items-center justify-between">
              <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
                <span class="ml-1 text-gray-700">4.7 (189)</span>
              </div>
              <a href="#" class="text-blue-600 font-medium hover:text-blue-800 transition">View Details</a>
            </div>
          </div>
        </div>
        
        <!-- Route Card 6 -->
        <div class="route-card bg-white rounded-xl overflow-hidden shadow-md transition duration-300">
          <div class="relative h-48 bg-[url('https://images.unsplash.com/photo-1506929562872-bb421503ef21?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60')] bg-cover bg-center">
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
          </div>
          <div class="p-6">
            <div class="flex justify-between items-start mb-3">
              <h4 class="text-xl font-bold text-gray-800">Kigali → Kampala</h4>
              <span class="text-blue-600 font-semibold">UGX 50,000</span>
            </div>
            <div class="flex items-center text-gray-600 mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="