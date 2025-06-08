<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SwiftRides | Premium Online Booking System</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  <style>
    .gradient-bg {
      background: linear-gradient(135deg, #2563eb 0%, #4f46e5 100%);
    }
    .card-hover {
      transition: all 0.3s ease;
    }
    .card-hover:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
    }
    .btn-primary {
      background: linear-gradient(135deg, #2563eb 0%, #4f46e5 100%);
      transition: all 0.3s ease;
    }
    .btn-primary:hover {
      transform: translateY(-2px);
      box-shadow: 0 10px 15px -3px rgba(37, 99, 235, 0.3);
    }
  </style>
</head>
<body class="min-h-screen flex flex-col">

  <!-- Header with Navigation -->
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
      <a href="aboutus.php" class="text-gray-700 hover:text-blue-600 font-medium transition">About</a>
      <a href="contact.php" class="text-gray-700 hover:text-blue-600 font-medium transition">Contact</a>
    </nav>
    <div class="flex items-center space-x-4">
      <a href="login.php" class="text-gray-700 hover:text-blue-600 font-medium transition">Login</a>
      <a href="register.php" class="bg-blue-600 text-white px-4 py-2 rounded-lg font-medium hover:bg-blue-700 transition shadow-sm">Register</a>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="relative flex-grow gradient-bg text-white flex flex-col md:flex-row items-center justify-center px-6 py-16 md:py-24 overflow-hidden">
    <!-- Animated background elements -->
    <div class="absolute top-0 left-0 w-full h-full opacity-10">
      <div class="absolute top-20 left-10 w-32 h-32 rounded-full bg-white animate-pulse"></div>
      <div class="absolute bottom-10 right-20 w-40 h-40 rounded-full bg-white animate-pulse delay-300"></div>
    </div>
    
    <div class="relative z-10 md:w-1/2 px-4 animate__animated animate__fadeInLeft">
      <h2 class="text-4xl md:text-5xl font-bold mb-6 leading-tight">Travel with Comfort & Style</h2>
      <p class="text-lg md:text-xl text-blue-100 mb-10">Experience seamless booking and premium transport services across East Africa.</p>
      
      <div class="flex space-x-4">
        <a href="#booking" class="btn-primary px-6 py-3 rounded-lg font-medium shadow-lg">Book Now</a>
        <a href="learn-more.html" class="bg-white text-blue-600 px-6 py-3 rounded-lg font-medium hover:bg-gray-100 transition shadow-sm">Learn More</a>
      </div>
      
      <div class="mt-12 flex items-center space-x-8">
        <div class="flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
          </svg>
          <span class="ml-2">4.9/5 Ratings</span>
        </div>
        <div class="flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
          <span class="ml-2">100% Secure</span>
        </div>
      </div>
    </div>
    
    <div class="relative z-10 md:w-1/2 px-4 mt-12 md:mt-0 animate__animated animate__fadeInRight">
      <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_bbkivqgd.json" background="transparent" speed="1" style="width: 100%; height: auto;" loop autoplay></lottie-player>
    </div>
  </section>

  <!-- Booking Form Section -->
  <section id="booking" class="bg-white px-6 py-12 -mt-12 z-20 relative max-w-6xl mx-auto w-full rounded-xl shadow-xl animate__animated animate__fadeInUp">
    <div class="text-center mb-10">
      <h3 class="text-3xl font-bold text-gray-800 mb-2">Plan Your Journey</h3>
      <p class="text-gray-600 max-w-2xl mx-auto">Find the perfect ride for your next adventure with our easy booking system</p>
    </div>
    
    <form action="search.php" method="GET" class="grid md:grid-cols-4 gap-4 bg-gray-50 p-8 rounded-xl">
      <div class="relative">
        <label for="origin" class="block text-sm font-medium text-gray-700 mb-1">From</label>
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
      <div class="relative">
        <label for="destination" class="block text-sm font-medium text-gray-700 mb-1">To</label>
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
      <div class="relative">
        <label for="travel_date" class="block text-sm font-medium text-gray-700 mb-1">Date</label>
        <input type="date" id="travel_date" name="travel_date" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" required />
      </div>
      <button type="submit" class="btn-primary mt-6 md:mt-0 px-6 py-3 rounded-lg font-medium text-white hover:shadow-lg transition">Search Routes</button>
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
  </section>

  <!-- Features Section -->
  <section class="bg-gray-50 px-6 py-16">
    <div class="max-w-6xl mx-auto">
      <div class="text-center mb-12">
        <h3 class="text-3xl font-bold text-gray-800 mb-4">Why Choose SwiftRides?</h3>
        <p class="text-gray-600 max-w-2xl mx-auto">We provide premium services to make your journey comfortable and memorable</p>
      </div>
      
      <div class="grid md:grid-cols-3 gap-8">
        <div class="bg-white p-8 rounded-xl shadow-sm card-hover">
          <div class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
          </div>
          <h4 class="text-xl font-semibold text-gray-800 mb-2">On-Time Guarantee</h4>
          <p class="text-gray-600">Our punctuality record is unmatched with 98% of trips arriving within 15 minutes of schedule.</p>
        </div>
        
        <div class="bg-white p-8 rounded-xl shadow-sm card-hover">
          <div class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
            </svg>
          </div>
          <h4 class="text-xl font-semibold text-gray-800 mb-2">Premium Safety</h4>
          <p class="text-gray-600">All vehicles undergo rigorous safety checks and drivers are thoroughly vetted for your peace of mind.</p>
        </div>
        
        <div class="bg-white p-8 rounded-xl shadow-sm card-hover">
          <div class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
            </svg>
          </div>
          <h4 class="text-xl font-semibold text-gray-800 mb-2">Easy Payments</h4>
          <p class="text-gray-600">Multiple payment options including mobile money, credit cards, and cash for your convenience.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Popular Routes -->
  <section class="bg-white px-6 py-16">
    <div class="max-w-6xl mx-auto">
      <div class="text-center mb-12">
        <h3 class="text-3xl font-bold text-gray-800 mb-4">Popular Routes</h3>
        <p class="text-gray-600 max-w-2xl mx-auto">Frequently traveled routes with premium service options</p>
      </div>
      
      <div class="grid md:grid-cols-3 gap-8">
        <?php
        $routes = [
          [
            "name" => "Dar es Salaam to Arusha",
            "duration" => "8-10 hours",
            "price" => "From TZS 35,000",
            "image" => "bg-[url('https://images.unsplash.com/photo-1566438480900-0609be27a4be?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60')]"
          ],
          [
            "name" => "Nairobi to Mombasa",
            "duration" => "6-8 hours",
            "price" => "From KES 1,200",
            "image" => "bg-[url('https://images.unsplash.com/photo-1527631746610-bca00a040d60?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60')]"
          ],
          [
            "name" => "Kampala to Kigali",
            "duration" => "10-12 hours",
            "price" => "From UGX 50,000",
            "image" => "bg-[url('https://images.unsplash.com/photo-1506929562872-bb421503ef21?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60')]"
          ]
        ];
        
        foreach ($routes as $route) {
          echo '
          <div class="relative rounded-xl overflow-hidden shadow-md card-hover h-64">
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent"></div>
            <div class="'.$route['image'].' bg-cover bg-center absolute inset-0"></div>
            <div class="relative z-10 h-full flex flex-col justify-end p-6">
              <h4 class="text-xl font-bold text-white mb-1">'.$route['name'].'</h4>
              <div class="flex justify-between text-white/90">
                <span>'.$route['duration'].'</span>
                <span class="font-medium">'.$route['price'].'</span>
              </div>
              <a href="#" class="mt-4 inline-block text-center bg-white text-blue-600 px-4 py-2 rounded-lg font-medium hover:bg-gray-100 transition">Book Now</a>
            </div>
          </div>';
        }
        ?>
      </div>
      
      <div class="text-center mt-12">
        <a href="routes.php" class="inline-flex items-center text-blue-600 font-medium hover:text-blue-800 transition">
          View all routes
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
        </a>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section class="bg-gray-50 px-6 py-16">
    <div class="max-w-6xl mx-auto">
      <div class="text-center mb-12">
        <h3 class="text-3xl font-bold text-gray-800 mb-4">What Our Customers Say</h3>
        <p class="text-gray-600 max-w-2xl mx-auto">Hear from travelers who've experienced our premium service</p>
      </div>
      
      <div class="grid md:grid-cols-3 gap-8">
        <div class="bg-white p-8 rounded-xl shadow-sm">
          <div class="flex items-center mb-4">
            <div class="flex -space-x-2">
              <img class="w-10 h-10 rounded-full border-2 border-white" src="https://randomuser.me/api/portraits/women/32.jpg" alt="Customer">
            </div>
            <div class="ml-4">
              <h5 class="font-medium text-gray-800">Sarah K.</h5>
              <div class="flex text-yellow-400">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
              </div>
            </div>
          </div>
          <p class="text-gray-600">"The most comfortable bus ride I've ever had from Nairobi to Mombasa. The seats were spacious and the service was impeccable."</p>
        </div>
        
        <div class="bg-white p-8 rounded-xl shadow-sm">
          <div class="flex items-center mb-4">
            <div class="flex -space-x-2">
              <img class="w-10 h-10 rounded-full border-2 border-white" src="https://randomuser.me/api/portraits/men/45.jpg" alt="Customer">
            </div>
            <div class="ml-4">
              <h5 class="font-medium text-gray-800">James M.</h5>
              <div class="flex text-yellow-400">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
              </div>
            </div>
          </div>
          <p class="text-gray-600">"Booking through SwiftRides was seamless. The driver was punctual and the vehicle was clean and comfortable for our family trip."</p>
        </div>
        
        <div class="bg-white p-8 rounded-xl shadow-sm">
          <div class="flex items-center mb-4">
            <div class="flex -space-x-2">
              <img class="w-10 h-10 rounded-full border-2 border-white" src="https://randomuser.me/api/portraits/women/68.jpg" alt="Customer">
            </div>
            <div class="ml-4">
              <h5 class="font-medium text-gray-800">Amina S.</h5>
              <div class="flex text-yellow-400">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
              </div>
            </div>
          </div>
          <p class="text-gray-600">"I travel frequently between Kampala and Kigali, and SwiftRides has become my preferred choice for reliability and comfort."</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action -->
  <section class="gradient-bg text-white px-6 py-16">
    <div class="max-w-4xl mx-auto text-center">
      <h3 class="text-3xl font-bold mb-6">Ready for Your Next Journey?</h3>
      <p class="text-xl text-blue-100 mb-10">Download our mobile app for exclusive deals and easier booking on the go.</p>
      <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-6">
        <a href="#" class="bg-black text-white px-6 py-3 rounded-lg font-medium flex items-center justify-center hover:bg-gray-900 transition">
          <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M12.152 6.896c-.948 0-2.415-1.078-3.96-1.04-2.04.027-3.91 1.183-4.961 3.014-2.117 3.675-.546 9.103 1.519 12.09 1.013 1.454 2.208 3.09 3.792 3.039 1.52-.065 2.09-.987 3.935-.987 1.831 0 2.35.987 3.96.948 1.637-.026 2.676-1.48 3.676-2.948 1.156-1.688 1.636-3.325 1.662-3.415-.039-.013-3.182-1.221-3.22-4.857-.026-3.04 2.48-4.494 2.597-4.559-1.429-2.09-3.623-2.324-4.39-2.376-2-.156-3.675 1.09-4.61 1.09zM15.53 3.83c.843-1.012 1.4-2.427 1.245-3.83-1.207.052-2.662.805-3.532 1.818-.78.896-1.454 2.338-1.273 3.714 1.338.104 2.715-.688 3.559-1.701"/>
          </svg>
          App Store
        </a>
        <a href="#" class="bg-black text-white px-6 py-3 rounded-lg font-medium flex items-center justify-center hover:bg-gray-900 transition">
          <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M3.9 12c0-1.71 1.39-3.1 3.1-3.1h4V7H7c-2.76 0-5 2.24-5 5s2.24 5 5 5h4v-1.9H7c-1.71 0-3.1-1.39-3.1-3.1zM8 13h8v-2H8v2zm9-6h-4v1.9h4c1.71 0 3.1 1.39 3.1 3.1s-1.39 3.1-3.1 3.1h-4V17h4c2.76 0 5-2.24 5-5s-2.24-5-5-5z"/>
          </svg>
          Google Play
        </a>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-gray-900 text-gray-300 px-6 py-12">
    < class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-8">
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
              <path d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.137.353.3.882.344 1.857.047 1.023.058 1.351.058 3.807v.468c0 2.456-.011 2.784-.058 3.807-.045.975-.207 1.504-.344 1.857a3.157 3.157 0 01-.748 1.15 3.157 3.157 0 01-1.15.748c-.353.137-.882.3-1.857.344-1.054.048-1.37.058-3.808.058h-.468c-2.456 0-2.784-.011-3.807-.058-.975-.045-1.504-.207-1.857-.344a3.157 3.157 0 01-1.15-.748 3.157 3.157 0 01-.748-1.15c-.137-.353-.3-.882-.344-1.857-.048-1.054-.058-1.37-.058-3.808v-.468c0-2.456.011-2.784.058-3.807.045-.975.207-1.504.344-1.857.182-.466.399-.8.748-1.15.35-.35.683-.566 1.15-.748.353-.137.882-.3 1.857-.344 1.023-.047 1.351-.058 3.807-.058h.468c2.456 0 2.784.011 3.807.058.975.045 1.504.207 1.857.344.466.182.8.398 1.15.748.35.35.566.683.748 1.15.137.353.3.882.344 1.857.048 1.023.058 1.351.058 3.807.058h.468c2.456 0 2.784-.011 3.807-.058.975-.045 1.504-.207 1.857-.344a3.157 3.157 0 011.15-.748c.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.023.058-1.37.058-3.808.058h-.468c-2.456 0-2.784-.011-3.807-.058-.975-.045-1.504-.207-1.856-.344-.467-.182-.8-.398-1.15-.748a3.157 3.157 0 01-.748-1.15c-.137-.353-.3-.882-.344-1.857-.047-1.023-.058-1.351-.058-3.807v-.468c0-2.456.011-2.784.058-3.807.045-.975.207-1.504.344-1.857.182-.466.399-.8.748-1.15.35-.35.683-.566 1.15-.748.353-.137.882-.3 1.857-.344 1.054-.048 1.37-.058 3.808-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"/>
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
      
      <div></div
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
</html>