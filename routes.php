<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SwiftRides | Explore Routes</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f8fafc;
    }
    .gradient-bg {
      background: linear-gradient(135deg, #2563eb 0%, #4f46e5 100%);
    }
    .route-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }
    .btn-primary {
      background: linear-gradient(135deg, #2563eb 0%, #4f46e5 100%);
      transition: all 0.3s ease;
    }
    .btn-primary:hover {
      transform: translateY(-2px);
      box-shadow: 0 10px 15px -3px rgba(37, 99, 235, 0.3);
    }
    .filter-card {
      backdrop-filter: blur(10px);
      background: rgba(255, 255, 255, 0.95);
    }
    
    /* Fix for dropdown display issues */
    select {
      appearance: none;
      -webkit-appearance: none;
      -moz-appearance: none;
      background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6,9 12,15 18,9'%3e%3c/polyline%3e%3c/svg%3e");
      background-repeat: no-repeat;
      background-position: right 12px center;
      background-size: 16px;
      padding-right: 40px;
    }
    
    select:focus {
      outline: none;
      border-color: #3b82f6;
      box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
    }
    
    /* Ensure dropdown options are visible */
    select option {
      background-color: white;
      color: black;
      padding: 8px 12px;
    }
    
    select optgroup {
      background-color: #f3f4f6;
      color: #374151;
      font-weight: 600;
      padding: 4px 12px;
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
      
      <!-- Updated Search Filter with Ward Selection -->
      <div class="filter-card p-8 rounded-xl shadow-lg max-w-4xl mx-auto mt-8 animate__animated animate__fadeInUp">
        <div class="text-center mb-6">
          <h3 class="text-2xl font-bold text-gray-800 mb-2">Find Your Perfect Route</h3>
          <p class="text-gray-600">Search for routes and select specific destination wards</p>
        </div>
        
        <form action="search.php" method="GET" class="grid md:grid-cols-4 gap-4">
          <div class="relative">
            <label for="origin" class="block text-sm font-medium text-gray-700 mb-1 text-left">From</label>
            <select id="origin" name="origin" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white text-gray-900" required>
              <option value="">Select Origin City</option>
              <option value="dar_es_salaam">🇹🇿 Dar es Salaam, Tanzania</option>
              <option value="arusha">🇹🇿 Arusha, Tanzania</option>
              <option value="dodoma">🇹🇿 Dodoma, Tanzania</option>
              <option value="mbeya">🇹🇿 Mbeya, Tanzania</option>
              <option value="mwanza">🇹🇿 Mwanza, Tanzania</option>
              <option value="tanga">🇹🇿 Tanga, Tanzania</option>
              <option value="morogoro">🇹🇿 Morogoro, Tanzania</option>
              <option value="zanzibar">🇹🇿 Zanzibar, Tanzania</option>
              <option value="nairobi">🇰🇪 Nairobi, Kenya</option>
              <option value="mombasa">🇰🇪 Mombasa, Kenya</option>
              <option value="kisumu">🇰🇪 Kisumu, Kenya</option>
              <option value="nakuru">🇰🇪 Nakuru, Kenya</option>
              <option value="eldoret">🇰🇪 Eldoret, Kenya</option>
              <option value="kampala">🇺🇬 Kampala, Uganda</option>
              <option value="entebbe">🇺🇬 Entebbe, Uganda</option>
              <option value="jinja">🇺🇬 Jinja, Uganda</option>
              <option value="mbale">🇺🇬 Mbale, Uganda</option>
              <option value="kigali">🇷🇼 Kigali, Rwanda</option>
              <option value="butare">🇷🇼 Butare, Rwanda</option>
              <option value="ruhengeri">🇷🇼 Ruhengeri, Rwanda</option>
              <option value="bujumbura">🇧🇮 Bujumbura, Burundi</option>
              <option value="gitega">🇧🇮 Gitega, Burundi</option>
            </select>
          </div>
          <div class="relative">
            <label for="destination" class="block text-sm font-medium text-gray-700 mb-1 text-left">To</label>
            <select id="destination" name="destination" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white text-gray-900" required>
              <option value="">Select Destination City</option>
              <option value="dar_es_salaam">🇹🇿 Dar es Salaam, Tanzania</option>
              <option value="arusha">🇹🇿 Arusha, Tanzania</option>
              <option value="dodoma">🇹🇿 Dodoma, Tanzania</option>
              <option value="mbeya">🇹🇿 Mbeya, Tanzania</option>
              <option value="mwanza">🇹🇿 Mwanza, Tanzania</option>
              <option value="tanga">🇹🇿 Tanga, Tanzania</option>
              <option value="morogoro">🇹🇿 Morogoro, Tanzania</option>
              <option value="zanzibar">🇹🇿 Zanzibar, Tanzania</option>
              <option value="nairobi">🇰🇪 Nairobi, Kenya</option>
              <option value="mombasa">🇰🇪 Mombasa, Kenya</option>
              <option value="kisumu">🇰🇪 Kisumu, Kenya</option>
              <option value="nakuru">🇰🇪 Nakuru, Kenya</option>
              <option value="eldoret">🇰🇪 Eldoret, Kenya</option>
              <option value="kampala">🇺🇬 Kampala, Uganda</option>
              <option value="entebbe">🇺🇬 Entebbe, Uganda</option>
              <option value="jinja">🇺🇬 Jinja, Uganda</option>
              <option value="mbale">🇺🇬 Mbale, Uganda</option>
              <option value="kigali">🇷🇼 Kigali, Rwanda</option>
              <option value="butare">🇷🇼 Butare, Rwanda</option>
              <option value="ruhengeri">🇷🇼 Ruhengeri, Rwanda</option>
              <option value="bujumbura">🇧🇮 Bujumbura, Burundi</option>
              <option value="gitega">🇧🇮 Gitega, Burundi</option>
            </select>
          </div>
          <div class="relative">
            <label for="travel_date" class="block text-sm font-medium text-gray-700 mb-1 text-left">Date</label>
            <input type="date" id="travel_date" name="travel_date" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" required />
          </div>
          <button type="submit" class="btn-primary mt-6 md:mt-0 px-6 py-3 rounded-lg font-medium text-white hover:shadow-lg transition">
            Search Routes
          </button>
        </form>
        
        <!-- Ward Selection (shown after destination city selection) -->
        <div id="wardSelection" class="hidden mt-6 bg-gray-50 p-6 rounded-xl">
          <div class="mb-4">
            <h4 class="text-lg font-semibold text-gray-800 mb-2" id="wardSectionTitle">Select Ward in Selected City</h4>
            <p class="text-sm text-gray-600" id="wardSectionDescription">Choose your specific destination ward for more accurate routing</p>
          </div>
          
          <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4" id="wardList">
            <!-- Wards will be populated dynamically via JavaScript -->
          </div>
          
          <input type="hidden" id="selected_ward" name="selected_ward" value="">
        </div>
      </div>
    </div>
  </section>

  <!-- Popular Routes Section -->
  <section class="px-6 py-16 bg-white">
    <div class="max-w-6xl mx-auto">
      <div class="text-center mb-12 animate__animated animate__fadeIn">
        <h3 class="text-3xl font-bold text-gray-800 mb-4">Popular Travel Routes</h3>
        <p class="text-gray-600 max-w-2xl mx-auto">Choose from our most frequented routes with premium service options and verified customer reviews.</p>
      </div>
      
      <div class="grid md:grid-cols-3 gap-8">
        <!-- Route Card 1 -->
        <div class="route-card bg-white rounded-xl overflow-hidden shadow-md transition duration-300">
          <div class="relative h-48 bg-[url('https://images.unsplash.com/photo-1566438480900-0609be27a4be?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60')] bg-cover bg-center">
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
            <div class="absolute top-4 left-4">
              <span class="bg-blue-600 text-white text-xs font-medium px-2.5 py-0.5 rounded">Most Popular</span>
            </div>
            <div class="absolute bottom-4 left-4 text-white">
              <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                <span class="text-sm">520 km</span>
              </div>
            </div>
          </div>
          <div class="p-6">
            <div class="flex justify-between items-start mb-3">
              <h4 class="text-xl font-bold text-gray-800">Dar es Salaam → Arusha</h4>
              <span class="text-blue-600 font-semibold text-lg">TZS 35,000</span>
            </div>
            <div class="flex items-center text-gray-600 mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              <span class="font-medium">10-12 hours</span>
              <span class="mx-2">•</span>
              <span class="text-green-600 font-medium">Daily departures</span>
            </div>
            <div class="flex items-center justify-between mb-4">
              <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
                <span class="ml-1 text-gray-700 font-medium">4.9 (312 reviews)</span>
              </div>
              <div class="flex items-center text-sm text-gray-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
                <span>45 seats available</span>
              </div>
            </div>
            <div class="flex space-x-2">
              <a href="#" class="flex-1 bg-blue-600 text-white text-center py-2 px-4 rounded-lg font-medium hover:bg-blue-700 transition">Book Now</a>
              <a href="#" class="flex-1 border border-blue-600 text-blue-600 text-center py-2 px-4 rounded-lg font-medium hover:bg-blue-50 transition">View Details</a>
            </div>
          </div>
        </div>

        <!-- Route Card 2 -->
        <div class="route-card bg-white rounded-xl overflow-hidden shadow-md transition duration-300">
          <div class="relative h-48 bg-[url('https://images.unsplash.com/photo-1527631746610-bca00a040d60?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60')] bg-cover bg-center">
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
            <div class="absolute top-4 left-4">
              <span class="bg-green-600 text-white text-xs font-medium px-2.5 py-0.5 rounded">Scenic Route</span>
            </div>
            <div class="absolute bottom-4 left-4 text-white">
              <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                <span class="text-sm">485 km</span>
              </div>
            </div>
          </div>
          <div class="p-6">
            <div class="flex justify-between items-start mb-3">
              <h4 class="text-xl font-bold text-gray-800">Nairobi → Mombasa</h4>
              <span class="text-blue-600 font-semibold text-lg">KES 1,200</span>
            </div>
            <div class="flex items-center text-gray-600 mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              <span class="font-medium">6-8 hours</span>
              <span class="mx-2">•</span>
              <span class="text-green-600 font-medium">Multiple daily</span>
            </div>
            <div class="flex items-center justify-between mb-4">
              <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
                <span class="ml-1 text-gray-700 font-medium">4.7 (189 reviews)</span>
              </div>
              <div class="flex items-center text-sm text-gray-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
                <span>38 seats available</span>
              </div>
            </div>
            <div class="flex space-x-2">
              <a href="#" class="flex-1 bg-blue-600 text-white text-center py-2 px-4 rounded-lg font-medium hover:bg-blue-700 transition">Book Now</a>
              <a href="#" class="flex-1 border border-blue-600 text-blue-600 text-center py-2 px-4 rounded-lg font-medium hover:bg-blue-50 transition">View Details</a>
            </div>
          </div>
        </div>

        <!-- Route Card 3 -->
        <div class="route-card bg-white rounded-xl overflow-hidden shadow-md transition duration-300">
          <div class="relative h-48 bg-[url('https://images.unsplash.com/photo-1506929562872-bb421503ef21?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60')] bg-cover bg-center">
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
            <div class="absolute top-4 left-4">
              <span class="bg-purple-600 text-white text-xs font-medium px-2.5 py-0.5 rounded">Premium</span>
            </div>
            <div class="absolute bottom-4 left-4 text-white">
              <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                <span class="text-sm">375 km</span>
              </div>
            </div>
          </div>
          <div class="p-6">
            <div class="flex justify-between items-start mb-3">
              <h4 class="text-xl font-bold text-gray-800">Kampala → Kigali</h4>
              <span class="text-blue-600 font-semibold text-lg">UGX 50,000</span>
            </div>
            <div class="flex items-center text-gray-600 mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              <span class="font-medium">10-12 hours</span>
              <span class="mx-2">•</span>
              <span class="text-orange-600 font-medium">Limited daily</span>
            </div>
            <div class="flex items-center justify-between mb-4">
              <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
                <span class="ml-1 text-gray-700 font-medium">4.8 (156 reviews)</span>
              </div>
              <div class="flex items-center text-sm text-gray-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
                <span>12 seats available</span>
              </div>
            </div>
            <div class="flex space-x-2">
              <a href="#" class="flex-1 bg-blue-600 text-white text-center py-2 px-4 rounded-lg font-medium hover:bg-blue-700 transition">Book Now</a>
              <a href="#" class="flex-1 border border-blue-600 text-blue-600 text-center py-2 px-4 rounded-lg font-medium hover:bg-blue-50 transition">View Details</a>
            </div>
          </div>
        </div>
      </div>
      
      <!-- More Routes Section -->
      <div class="grid md:grid-cols-3 gap-8 mt-8">
        <!-- Route Card 4 -->
        <div class="route-card bg-white rounded-xl overflow-hidden shadow-md transition duration-300">
          <div class="relative h-48 bg-[url('https://images.unsplash.com/photo-1583423230902-754c3bf6b8be?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60')] bg-cover bg-center">
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
            <div class="absolute top-4 left-4">
              <span class="bg-orange-600 text-white text-xs font-medium px-2.5 py-0.5 rounded">Express</span>
            </div>
            <div class="absolute bottom-4 left-4 text-white">
              <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                <span class="text-sm">350 km</span>
              </div>
            </div>
          </div>
          <div class="p-6">
            <div class="flex justify-between items-start mb-3">
              <h4 class="text-xl font-bold text-gray-800">Dodoma → Mbeya</h4>
              <span class="text-blue-600 font-semibold text-lg">TZS 28,000</span>
            </div>
            <div class="flex items-center text-gray-600 mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              <span class="font-medium">7-9 hours</span>
              <span class="mx-2">•</span>
              <span class="text-green-600 font-medium">Daily service</span>
            </div>
            <div class="flex items-center justify-between mb-4">
              <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
                <span class="ml-1 text-gray-700 font-medium">4.6 (142 reviews)</span>
              </div>
              <div class="flex items-center text-sm text-gray-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
                <span>28 seats available</span>
              </div>
            </div>
            <div class="flex space-x-2">
              <a href="#" class="flex-1 bg-blue-600 text-white text-center py-2 px-4 rounded-lg font-medium hover:bg-blue-700 transition">Book Now</a>
              <a href="#" class="flex-1 border border-blue-600 text-blue-600 text-center py-2 px-4 rounded-lg font-medium hover:bg-blue-50 transition">View Details</a>
            </div>
          </div>
        </div>
        
        <!-- Route Card 5 -->
        <div class="route-card bg-white rounded-xl overflow-hidden shadow-md transition duration-300">
          <div class="relative h-48 bg-[url('https://images.unsplash.com/photo-1527631746610-bca00a040d60?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60')] bg-cover bg-center">
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
            <div class="absolute bottom-4 left-4 text-white">
              <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                <span class="text-sm">485 km</span>
              </div>
            </div>
          </div>
          <div class="p-6">
            <div class="flex justify-between items-start mb-3">
              <h4 class="text-xl font-bold text-gray-800">Mombasa → Nairobi</h4>
              <span class="text-blue-600 font-semibold text-lg">KES 1,200</span>
            </div>
            <div class="flex items-center text-gray-600 mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              <span class="font-medium">6-8 hours</span>
              <span class="mx-2">•</span>
              <span class="text-green-600 font-medium">Multiple daily</span>
            </div>
            <div class="flex items-center justify-between mb-4">
              <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
                <span class="ml-1 text-gray-700 font-medium">4.7 (189 reviews)</span>
              </div>
              <div class="flex items-center text-sm text-gray-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
                <span>41 seats available</span>
              </div>
            </div>
            <div class="flex space-x-2">
              <a href="#" class="flex-1 bg-blue-600 text-white text-center py-2 px-4 rounded-lg font-medium hover:bg-blue-700 transition">Book Now</a>
              <a href="#" class="flex-1 border border-blue-600 text-blue-600 text-center py-2 px-4 rounded-lg font-medium hover:bg-blue-50 transition">View Details</a>
            </div>
          </div>
        </div>
        
        <!-- Route Card 6 -->
        <div class="route-card bg-white rounded-xl overflow-hidden shadow-md transition duration-300">
          <div class="relative h-48 bg-[url('https://images.unsplash.com/photo-1506929562872-bb421503ef21?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60')] bg-cover bg-center">
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
            <div class="absolute bottom-4 left-4 text-white">
              <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                <span class="text-sm">375 km</span>
              </div>
            </div>
          </div>
          <div class="p-6">
            <div class="flex justify-between items-start mb-3">
              <h4 class="text-xl font-bold text-gray-800">Kigali → Kampala</h4>
              <span class="text-blue-600 font-semibold text-lg">UGX 50,000</span>
            </div>
            <div class="flex items-center text-gray-600 mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              <span class="font-medium">10-12 hours</span>
              <span class="mx-2">•</span>
              <span class="text-orange-600 font-medium">Limited daily</span>
            </div>
            <div class="flex items-center justify-between mb-4">
              <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
                <span class="ml-1 text-gray-700 font-medium">4.8 (156 reviews)</span>
              </div>
              <div class="flex items-center text-sm text-gray-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
                <span>15 seats available</span>
              </div>
            </div>
            <div class="flex space-x-2">
              <a href="#" class="flex-1 bg-blue-600 text-white text-center py-2 px-4 rounded-lg font-medium hover:bg-blue-700 transition">Book Now</a>
              <a href="#" class="flex-1 border border-blue-600 text-blue-600 text-center py-2 px-4 rounded-lg font-medium hover:bg-blue-50 transition">View Details</a>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Pagination -->
      <div class="flex justify-center mt-12">
        <nav class="inline-flex rounded-md shadow-sm">
          <a href="#" class="px-4 py-2 rounded-l-lg border border-gray-300 bg-white text-gray-500 hover:bg-gray-50 font-medium">Previous</a>
          <a href="#" class="px-4 py-2 border-t border-b border-gray-300 bg-blue-600 text-white font-medium">1</a>
          <a href="#" class="px-4 py-2 border-t border-b border-gray-300 bg-white text-gray-500 hover:bg-gray-50 font-medium">2</a>
          <a href="#" class="px-4 py-2 border-t border-b border-gray-300 bg-white text-gray-500 hover:bg-gray-50 font-medium">3</a>
          <a href="#" class="px-4 py-2 rounded-r-lg border border-gray-300 bg-white text-gray-500 hover:bg-gray-50 font-medium">Next</a>
        </nav>
      </div>
    </div>
  </section>

  <!-- Route Statistics -->
  <section class="bg-gray-50 px-6 py-16">
    <div class="max-w-6xl mx-auto">
      <div class="text-center mb-12">
        <h3 class="text-3xl font-bold text-gray-800 mb-4">Why Choose Our Routes?</h3>
        <p class="text-gray-600 max-w-2xl mx-auto">Trusted by thousands of travelers across East Africa</p>
      </div>
      
      <div class="grid md:grid-cols-4 gap-8">
        <div class="text-center">
          <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
          </div>
          <h4 class="text-3xl font-bold text-gray-800 mb-2">50+</h4>
          <p class="text-gray-600 font-medium">Available Routes</p>
        </div>
        
        <div class="text-center">
          <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
          </div>
          <h4 class="text-3xl font-bold text-gray-800 mb-2">98%</h4>
          <p class="text-gray-600 font-medium">On-Time Performance</p>
        </div>
        
        <div class="text-center">
          <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mx-auto mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-yellow-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
            </svg>
          </div>
          <h4 class="text-3xl font-bold text-gray-800 mb-2">4.8</h4>
          <p class="text-gray-600 font-medium">Average Rating</p>
        </div>
        
        <div class="text-center">
          <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>
          </div>
          <h4 class="text-3xl font-bold text-gray-800 mb-2">10K+</h4>
          <p class="text-gray-600 font-medium">Happy Customers</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action -->
  <section class="gradient-bg text-white px-6 py-16">
    <div class="max-w-4xl mx-auto text-center">
      <h3 class="text-3xl font-bold mb-6">Can't Find Your Route?</h3>
      <p class="text-xl text-blue-100 mb-10">Contact our support team for custom travel arrangements and special requests.</p>
      <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
        <a href="contact.php" class="inline-block bg-white text-blue-600 px-8 py-3 rounded-lg font-medium hover:bg-gray-100 transition shadow-lg">Contact Support</a>
        <a href="request-route.php" class="inline-block border-2 border-white text-white px-8 py-3 rounded-lg font-medium hover:bg-white hover:text-blue-600 transition">Request Custom Route</a>
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
              <path d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.137.353.3.882.344 1.857.047 1.023.058 1.351.058 3.807v.468c0 2.456-.011 2.784-.058 3.807-.045.975-.207 1.504-.344 1.857a3.157 3.157 0 01-.748 1.15 3.157 3.157 0 01-1.15.748c-.353.137-.882.3-1.857.344-1.054.048-1.37.058-3.808.058h-.468c-2.456 0-2.784-.011-3.807-.058-.975-.045-1.504-.207-1.857-.344a3.157 3.157 0 01-1.15-.748 3.157 3.157 0 01-.748-1.15c-.137-.353-.3-.882-.344-1.857-.048-1.054-.058-1.37-.058-3.808v-.468c0-2.456.011-2.784.058-3.807.045-.975.207-1.504.344-1.857.182-.466.399-.8.748-1.15.35-.35.683-.566 1.15-.748.353-.137.882-.3 1.857-.344 1.023-.047 1.351-.058 3.807-.058h.468c2.456 0 2.784.011 3.807.058.975.045 1.504.207 1.857.344.466.182.8.398 1.15.748.35.35.566.683.748 1.15.137.353.3.882.344 1.857.048 1.023.058 1.351.058 3.807v.468c0 2.456-.011 2.784-.058 3.807-.045.975-.207 1.504-.344 1.857a3.157 3.157 0 01-.748 1.15 3.157 3.157 0 01-1.15.748c-.353.137-.882.3-1.857.344-1.023.047-1.351.058-3.807.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"/>
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
      <p>&copy; 2025 SwiftRides. All rights reserved.</p>
    </div>
  </footer>

  <!-- JavaScript for ward selection -->
  <script>
    // City wards data for East Africa
    const cityWards = {
      // Tanzania
      dar_es_salaam: [
        "Ilala", "Kinondoni", "Temeke", "Ubungo", "Kigamboni",
        "Kariakoo", "Upanga", "Msimbazi", "Magomeni", "Sinza",
        "Mikocheni", "Oysterbay", "Masaki", "Kivukoni", "Gerezani"
      ],
      arusha: [
        "Arusha Central", "Kaloleni", "Kati", "Lemara", "Levolosi",
        "Ngarenaro", "Njiro", "Sekei", "Sokon I", "Sokon II",
        "Terrat", "Themi", "Unga Limited"
      ],
      dodoma: [
        "Dodoma Urban", "Hombolo", "Kikuyu", "Makutopora", "Miyuji",
        "Msalato", "Zuzu", "Chamwino", "Mpwapwa", "Kongwa"
      ],
      mbeya: [
        "Mbeya City", "Sisimba", "Iyela", "Iziwa", "Nsalaga",
        "Ruanda", "Itende", "Maendeleo", "Mwanjelwa", "Idunda"
      ],
      mwanza: [
        "Nyamagana", "Ilemela", "Pamba", "Butimba", "Kirumba",
        "Mahina", "Mirongo", "Pasiansi", "Igoma", "Buzuruga"
      ],
      tanga: [
        "Tanga City", "Msambweni", "Makorora", "Chumbageni", "Nguvumali",
        "Mwanzange", "Kiomoni", "Tongoni", "Mabokweni", "Mzizima"
      ],
      morogoro: [
        "Morogoro Municipal", "Mazimbu", "Kihonda", "Kilakala", "Kingolwira",
        "Mafiga", "Bigwa", "Sabasaba", "Kingo", "Kichangani"
      ],
      zanzibar: [
        "Stone Town", "Ng'ambo", "Malindi", "Mkunazini", "Kiponda",
        "Shaurimoyo", "Vikokotoni", "Kilimani", "Magogoni", "Kwahani"
      ],

      // Kenya
      nairobi: [
        "Central", "Westlands", "Dagoretti North", "Dagoretti South", "Langata",
        "Kibra", "Roysambu", "Kasarani", "Ruaraka", "Embakasi South",
        "Embakasi North", "Embakasi Central", "Embakasi East", "Embakasi West",
        "Makadara", "Kamukunji", "Starehe", "Mathare"
      ],
      mombasa: [
        "Mvita", "Nyali", "Kisauni", "Likoni", "Changamwe", "Jomba",
        "Tudor", "Tononoka", "Shimanzi", "Ganjoni", "Kizingo",
        "Old Town", "Majengo", "Bamburi", "Shanzu", "Mtopanga"
      ],
      kisumu: [
        "Kisumu Central", "Kisumu East", "Kisumu West", "Winam", "Seme",
        "Nyando", "Muhoroni", "Nyakach", "Kondele", "Migosi",
        "Mamboleo", "Dunga", "Bandani", "Kaloleni", "Manyatta"
      ],
      nakuru: [
        "Nakuru East", "Nakuru West", "Bahati", "Subukia", "Rongai",
        "Njoro", "Molo", "Gilgil", "Naivasha", "London",
        "Milimani", "Shabab", "Kaptembwo", "Rhonda", "Flamingo"
      ],
      eldoret: [
        "Soy", "Turbo", "Moiben", "Kesses", "Marakwet East", "Marakwet West",
        "Keiyo North", "Keiyo South", "West Pokot", "Langas",
        "Pioneer", "Huruma", "Kamukunji", "Kimumu", "Burnt Forest"
      ],

      // Uganda
      kampala: [
        "Central Division", "Kawempe", "Makindye", "Nakawa", "Rubaga",
        "Mengo", "Old Kampala", "Industrial Area", "Kololo", "Bugolobi",
        "Ntinda", "Najera", "Bweyogerere", "Kansanga", "Kabalagala"
      ],
      entebbe: [
        "Entebbe Municipal", "Katabi", "Wakiso", "Busiro", "Kyaddondo",
        "Airport Area", "Victoria Mall", "Kitooro", "Lungujja", "Zana"
      ],
      jinja: [
        "Jinja Municipal", "Jinja North", "Jinja South East", "Butembe", "Kagoma",
        "Walukuba", "Masese", "Kimaka", "Budondo", "Kakira"
      ],
      mbale: [
        "Mbale Municipal", "Industrial", "Wanale", "Northern", "Nakawa",
        "Namatala", "Namatembe", "Bungokho", "Manafwa", "Bududa"
      ],

      // Rwanda
      kigali: [
        "Nyarugenge", "Gasabo", "Kicukiro", "Kimisagara", "Nyamirambo",
        "Muhima", "Gitega", "Remera", "Kimironko", "Gisozi",
        "Nyarutarama", "Kabuga", "Masaka", "Niboye", "Gatenga"
      ],
      butare: [
        "Huye", "Tumba", "Matyazo", "Mukura", "Ruhashya",
        "Ngoma", "Rusatira", "Simbi", "Karama", "Rwaniro"
      ],
      ruhengeri: [
        "Musanze", "Cyuve", "Gacaca", "Gashaki", "Gataraga",
        "Kimonyi", "Muhoza", "Muko", "Musanze", "Nkotsi"
      ],

      // Burundi
      bujumbura: [
        "Mukaza", "Ntahangwa", "Rohero", "Buyenzi", "Ngagara",
        "Kamenge", "Cibitoke", "Musaga", "Kanyosha", "Gatoke",
        "Bwiza", "Asiatique", "Centre Ville", "Kiriri", "Nyakabiga"
      ],
      gitega: [
        "Gitega", "Nyamugari", "Mushiha", "Makebuko", "Itaba",
        "Buraza", "Bugendana", "Giheta", "Ryansoro", "Mutaho"
      ]
    };

    // Get DOM elements
    const destinationSelect = document.getElementById('destination');
    const wardSelectionDiv = document.getElementById('wardSelection');
    const wardSectionTitle = document.getElementById('wardSectionTitle');
    const wardSectionDescription = document.getElementById('wardSectionDescription');
    const wardListDiv = document.getElementById('wardList');
    const selectedWardInput = document.getElementById('selected_ward');

    // Show ward selection when destination city is selected
    destinationSelect.addEventListener('change', updateWards);

    function updateWards() {
      const destinationCity = destinationSelect.value;
      
      if (destinationCity && cityWards[destinationCity]) {
        // Get city name for display
        const cityName = destinationSelect.options[destinationSelect.selectedIndex].text;
        
        // Show ward selection
        wardSelectionDiv.classList.remove('hidden');
        
        // Update title and description
        wardSectionTitle.textContent = `Select Ward in ${cityName}`;
        wardSectionDescription.textContent = `Choose your specific destination ward in ${cityName} for more accurate routing`;
        
        // Clear previous wards
        wardListDiv.innerHTML = '';
        selectedWardInput.value = '';
        
        // Add wards as clickable cards
        cityWards[destinationCity].forEach(ward => {
          const wardCard = document.createElement('div');
          wardCard.className = 'bg-white p-4 rounded-lg border border-gray-200 hover:border-blue-500 hover:bg-blue-50 cursor-pointer transition-all duration-200 ward-card';
          wardCard.innerHTML = `
            <div class="flex items-center justify-between">
              <span class="font-medium text-gray-800">${ward}</span>
              <svg class="w-5 h-5 text-gray-400 check-icon hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
            </div>
          `;
          
          // Add click event to select ward
          wardCard.addEventListener('click', function() {
            // Remove selection from other cards
            document.querySelectorAll('.ward-card').forEach(card => {
              card.classList.remove('border-blue-500', 'bg-blue-50');
              card.querySelector('.check-icon').classList.add('hidden');
            });
            
            // Select this card
            this.classList.add('border-blue-500', 'bg-blue-50');
            this.querySelector('.check-icon').classList.remove('hidden');
            this.querySelector('.check-icon').classList.add('text-blue-500');
            
            // Set selected ward value
            selectedWardInput.value = ward.toLowerCase().replace(/\s+/g, '_');
          });
          
          wardListDiv.appendChild(wardCard);
        });
      } else {
        wardSelectionDiv.classList.add('hidden');
      }
    }
  </script>

</body>
</html>