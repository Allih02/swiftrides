<?php
// Get search parameters
$origin = $_GET['origin'] ?? 'dar_es_salaam';
$destination = $_GET['destination'] ?? 'arusha';
$travel_date = $_GET['travel_date'] ?? date('Y-m-d', strtotime('+1 day'));
$origin_station = $_GET['origin_station'] ?? '';
$destination_station = $_GET['destination_station'] ?? '';

// City names mapping
$cities = [
    'dar_es_salaam' => 'Dar es Salaam',
    'arusha' => 'Arusha',
    'dodoma' => 'Dodoma',
    'mbeya' => 'Mbeya',
    'mwanza' => 'Mwanza',
    'tanga' => 'Tanga',
    'morogoro' => 'Morogoro',
    'zanzibar' => 'Zanzibar',
    'nairobi' => 'Nairobi',
    'mombasa' => 'Mombasa',
    'kisumu' => 'Kisumu',
    'nakuru' => 'Nakuru',
    'eldoret' => 'Eldoret',
    'kampala' => 'Kampala',
    'entebbe' => 'Entebbe',
    'jinja' => 'Jinja',
    'mbale' => 'Mbale',
    'kigali' => 'Kigali',
    'butare' => 'Butare',
    'ruhengeri' => 'Ruhengeri',
    'bujumbura' => 'Bujumbura',
    'gitega' => 'Gitega'
];

// Station data
$cityStations = [
    'dar_es_salaam' => ["Ubungo Bus Terminal", "Mbezi Luis", "Kariakoo", "Posta"],
    'arusha' => ["Arusha Bus Station", "Ngaramtoni", "Sakina"],
    'dodoma' => ["Dodoma Main Bus Stand", "Makutopora"],
    'mbeya' => ["Mbeya Bus Terminal", "Mwanjelwa"],
    'mwanza' => ["Mwanza Bus Stand", "Nyakato"],
    'tanga' => ["Tanga Bus Station", "Mwanzange"],
    'morogoro' => ["Morogoro Bus Stand", "Mazimbu"],
    'zanzibar' => ["Zanzibar Ferry Terminal", "Mwanakwerekwe"],
    'nairobi' => ["Nairobi River Road", "Machakos Country Bus", "Muthurwa"],
    'mombasa' => ["Mombasa Bus Station", "Likoni Ferry"],
    'kisumu' => ["Kisumu Bus Park", "Kondele"],
    'nakuru' => ["Nakuru Bus Terminal", "Lanet"],
    'eldoret' => ["Eldoret Bus Park", "Uganda Road"],
    'kampala' => ["Kampala Bus Park", "Old Taxi Park", "New Taxi Park"],
    'entebbe' => ["Entebbe Bus Station", "Airport Road"],
    'jinja' => ["Jinja Main Bus Park", "Nalufenya"],
    'mbale' => ["Mbale Bus Terminal", "Nkoma"],
    'kigali' => ["Nyabugogo Bus Park", "Kacyiru"],
    'butare' => ["Butare Bus Station", "Huye"],
    'ruhengeri' => ["Ruhengeri Bus Park", "Musanze"],
    'bujumbura' => ["Bujumbura Central Station", "Rohero"],
    'gitega' => ["Gitega Bus Terminal", "Nyamugari"]
];

// Route data with different vehicles and pricing
$routes = [
    'dar_es_salaam_arusha' => [
        [
            'company' => 'SwiftRides Express',
            'vehicle' => 'Mercedes-Benz Tourismo',
            'class' => 'Business',
            'departure' => '06:30',
            'arrival' => '15:00',
            'duration' => '8h 30m',
            'price' => 35000,
            'currency' => 'TZS',
            'seats_available' => 32,
            'total_seats' => 45,
            'amenities' => ['AC', 'WiFi', 'Reclining Seats', 'Refreshments'],
            'type' => 'direct',
            'departure_station' => 'Ubungo Terminal',
            'arrival_station' => 'Arusha Bus Station'
        ],
        [
            'company' => 'Kilimanjaro Express',
            'vehicle' => 'Scania Irizar',
            'class' => 'VIP',
            'departure' => '07:00',
            'arrival' => '14:45',
            'duration' => '7h 45m',
            'price' => 55000,
            'currency' => 'TZS',
            'seats_available' => 18,
            'total_seats' => 24,
            'amenities' => ['AC', 'WiFi', 'Leather Seats', 'Meals', 'Entertainment'],
            'type' => 'express',
            'departure_station' => 'Ubungo Terminal',
            'arrival_station' => 'Arusha Bus Station'
        ],
        [
            'company' => 'Safari Coach Services',
            'vehicle' => 'Volvo 9700',
            'class' => 'Economy Plus',
            'departure' => '08:00',
            'arrival' => '17:15',
            'duration' => '9h 15m',
            'price' => 28000,
            'currency' => 'TZS',
            'seats_available' => 45,
            'total_seats' => 50,
            'amenities' => ['AC', 'WiFi', 'Standard Seats'],
            'type' => '1_stop',
            'departure_station' => 'Mbezi Luis',
            'arrival_station' => 'Arusha Bus Station'
        ],
        [
            'company' => 'Tanzanian Spirit',
            'vehicle' => 'MAN Lion\'s Coach',
            'class' => 'Business',
            'departure' => '09:30',
            'arrival' => '17:30',
            'duration' => '8h 00m',
            'price' => 42000,
            'currency' => 'TZS',
            'seats_available' => 28,
            'total_seats' => 38,
            'amenities' => ['AC', 'WiFi', 'Reclining Seats', 'Snacks'],
            'type' => 'direct',
            'departure_station' => 'Kariakoo',
            'arrival_station' => 'Arusha Bus Station'
        ],
        [
            'company' => 'Eastland Express',
            'vehicle' => 'Isuzu Gala',
            'class' => 'Economy',
            'departure' => '10:00',
            'arrival' => '20:30',
            'duration' => '10h 30m',
            'price' => 25000,
            'currency' => 'TZS',
            'seats_available' => 52,
            'total_seats' => 55,
            'amenities' => ['AC', 'Standard Seats'],
            'type' => '2_stops',
            'departure_station' => 'Posta',
            'arrival_station' => 'Arusha Bus Station'
        ],
        [
            'company' => 'Highland Cruiser',
            'vehicle' => 'Scania Touring',
            'class' => 'VIP Sleeper',
            'departure' => '11:00',
            'arrival' => '18:30',
            'duration' => '7h 30m',
            'price' => 75000,
            'currency' => 'TZS',
            'seats_available' => 12,
            'total_seats' => 16,
            'amenities' => ['AC', 'WiFi', 'Sleeper Beds', 'Gourmet Meals', 'Entertainment'],
            'type' => 'express',
            'departure_station' => 'Ubungo Terminal',
            'arrival_station' => 'Arusha Bus Station'
        ]
    ],
    'nairobi_mombasa' => [
        [
            'company' => 'Coastal Express',
            'vehicle' => 'Mercedes-Benz Travego',
            'class' => 'Business',
            'departure' => '07:00',
            'arrival' => '14:30',
            'duration' => '7h 30m',
            'price' => 1500,
            'currency' => 'KES',
            'seats_available' => 28,
            'total_seats' => 40,
            'amenities' => ['AC', 'WiFi', 'Reclining Seats', 'Refreshments'],
            'type' => 'direct',
            'departure_station' => 'Nairobi River Road',
            'arrival_station' => 'Mombasa Bus Station'
        ],
        [
            'company' => 'Mombasa Raha',
            'vehicle' => 'Volvo B11R',
            'class' => 'VIP',
            'departure' => '08:30',
            'arrival' => '15:45',
            'duration' => '7h 15m',
            'price' => 2200,
            'currency' => 'KES',
            'seats_available' => 22,
            'total_seats' => 30,
            'amenities' => ['AC', 'WiFi', 'Leather Seats', 'Meals', 'Entertainment'],
            'type' => 'express',
            'departure_station' => 'Nairobi River Road',
            'arrival_station' => 'Mombasa Bus Station'
        ]
    ],
    'kampala_kigali' => [
        [
            'company' => 'East African Shuttles',
            'vehicle' => 'Toyota Coaster',
            'class' => 'Business',
            'departure' => '06:00',
            'arrival' => '18:00',
            'duration' => '12h 00m',
            'price' => 45000,
            'currency' => 'UGX',
            'seats_available' => 25,
            'total_seats' => 30,
            'amenities' => ['AC', 'WiFi', 'Reclining Seats'],
            'type' => 'border_crossing',
            'departure_station' => 'Kampala Bus Park',
            'arrival_station' => 'Nyabugogo Bus Park'
        ]
    ]
];

// Get current route key
$route_key = $origin . '_' . $destination;
$current_routes = $routes[$route_key] ?? [];

// Get origin and destination names
$origin_name = $cities[$origin] ?? ucfirst(str_replace('_', ' ', $origin));
$destination_name = $cities[$destination] ?? ucfirst(str_replace('_', ' ', $destination));

// Format date for display
$formatted_date = date('F j, Y', strtotime($travel_date));
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Search Results | SwiftRides - <?php echo $origin_name; ?> to <?php echo $destination_name; ?></title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
    .gradient-bg {
      background: linear-gradient(135deg, #2563eb 0%, #4f46e5 100%);
    }
    .card-hover {
      transition: all 0.3s ease;
    }
    .card-hover:hover {
      transform: translateY(-3px);
      box-shadow: 0 15px 30px -10px rgba(0, 0, 0, 0.15);
    }
    .btn-primary {
      background: linear-gradient(135deg, #2563eb 0%, #4f46e5 100%);
      transition: all 0.3s ease;
    }
    .btn-primary:hover {
      transform: translateY(-2px);
      box-shadow: 0 8px 15px -3px rgba(37, 99, 235, 0.3);
    }
    .route-card {
      border-left: 4px solid #2563eb;
    }
    .vehicle-badge {
      background: linear-gradient(135deg, #10b981 0%, #059669 100%);
    }
    .price-highlight {
      background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      font-weight: 700;
    }
    .seat-map {
      background: #f8fafc;
      border-radius: 12px;
      padding: 20px;
    }
    .seat {
      width: 32px;
      height: 32px;
      border-radius: 6px;
      cursor: pointer;
      transition: all 0.3s ease;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 10px;
      font-weight: 600;
    }
    .seat-available {
      background: #e5f3ff;
      border: 2px solid #3b82f6;
      color: #3b82f6;
    }
    .seat-available:hover {
      background: #3b82f6;
      color: white;
    }
    .seat-selected {
      background: #10b981;
      color: white;
      border: 2px solid #059669;
    }
    .seat-occupied {
      background: #ef4444;
      color: white;
      border: 2px solid #dc2626;
      cursor: not-allowed;
    }
    .modal {
      display: none;
      position: fixed;
      z-index: 1000;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0,0,0,0.5);
    }
    .modal-content {
      background-color: #fefefe;
      margin: 5% auto;
      padding: 0;
      border-radius: 12px;
      width: 90%;
      max-width: 800px;
      max-height: 90vh;
      overflow-y: auto;
    }
    .hidden {
      display: none;
    }
  </style>
</head>
<body class="min-h-screen bg-gray-50">

  <!-- Header with Navigation -->
  <header class="sticky top-0 z-50 bg-white/90 backdrop-blur-md shadow-lg px-6 py-4 flex justify-between items-center">
    <div class="flex items-center space-x-2">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
      </svg>
      <h1 class="text-2xl font-bold bg-gradient-to-r from-blue-600 to-indigo-500 bg-clip-text text-transparent">SwiftRides</h1>
    </div>
    <nav class="hidden md:flex space-x-8">
      <a href="home.php" class="text-gray-700 hover:text-blue-600 font-medium transition">Home</a>
      <a href="routes.php" class="text-blue-600 hover:text-blue-800 font-medium transition">Routes</a>
      <a href="services.php" class="text-gray-700 hover:text-blue-600 font-medium transition">Services</a>
      <a href="aboutus.php" class="text-gray-700 hover:text-blue-600 font-medium transition">About</a>
      <a href="contact.php" class="text-gray-700 hover:text-blue-600 font-medium transition">Contact</a>
    </nav>
    <div class="flex items-center space-x-4">
      <a href="login.php" class="text-gray-700 hover:text-blue-600 font-medium transition">Login</a>
      <a href="register.php" class="bg-blue-600 text-white px-4 py-2 rounded-lg font-medium hover:bg-blue-700 transition shadow-sm">Register</a>
    </div>
  </header>

  <!-- Search Header -->
  <section class="gradient-bg text-white py-8">
    <div class="max-w-6xl mx-auto px-6">
      <div class="text-center mb-8">
        <h1 class="text-3xl md:text-4xl font-bold mb-4">Available Routes</h1>
        <p class="text-blue-100 text-lg"><?php echo $origin_name; ?> → <?php echo $destination_name; ?> • <?php echo $formatted_date; ?></p>
      </div>
      
      <!-- Quick Search Form -->
      <div class="bg-white/10 backdrop-blur-md rounded-xl p-6">
        <form method="GET" action="search.php" class="grid md:grid-cols-4 gap-4">
          <div>
            <label class="block text-sm font-medium text-white mb-2">From</label>
            <select name="origin" id="origin" class="w-full p-3 rounded-lg border-0 focus:ring-2 focus:ring-blue-300" required>
              <option value="" disabled>Select City</option>
              <optgroup label="Tanzania">
                <option value="dar_es_salaam" <?php echo $origin === 'dar_es_salaam' ? 'selected' : ''; ?>>Dar es Salaam</option>
                <option value="arusha" <?php echo $origin === 'arusha' ? 'selected' : ''; ?>>Arusha</option>
                <option value="dodoma" <?php echo $origin === 'dodoma' ? 'selected' : ''; ?>>Dodoma</option>
                <option value="mbeya" <?php echo $origin === 'mbeya' ? 'selected' : ''; ?>>Mbeya</option>
                <option value="mwanza" <?php echo $origin === 'mwanza' ? 'selected' : ''; ?>>Mwanza</option>
                <option value="tanga" <?php echo $origin === 'tanga' ? 'selected' : ''; ?>>Tanga</option>
                <option value="morogoro" <?php echo $origin === 'morogoro' ? 'selected' : ''; ?>>Morogoro</option>
                <option value="zanzibar" <?php echo $origin === 'zanzibar' ? 'selected' : ''; ?>>Zanzibar</option>
              </optgroup>
              <optgroup label="Kenya">
                <option value="nairobi" <?php echo $origin === 'nairobi' ? 'selected' : ''; ?>>Nairobi</option>
                <option value="mombasa" <?php echo $origin === 'mombasa' ? 'selected' : ''; ?>>Mombasa</option>
                <option value="kisumu" <?php echo $origin === 'kisumu' ? 'selected' : ''; ?>>Kisumu</option>
                <option value="nakuru" <?php echo $origin === 'nakuru' ? 'selected' : ''; ?>>Nakuru</option>
                <option value="eldoret" <?php echo $origin === 'eldoret' ? 'selected' : ''; ?>>Eldoret</option>
              </optgroup>
              <optgroup label="Uganda">
                <option value="kampala" <?php echo $origin === 'kampala' ? 'selected' : ''; ?>>Kampala</option>
                <option value="entebbe" <?php echo $origin === 'entebbe' ? 'selected' : ''; ?>>Entebbe</option>
                <option value="jinja" <?php echo $origin === 'jinja' ? 'selected' : ''; ?>>Jinja</option>
                <option value="mbale" <?php echo $origin === 'mbale' ? 'selected' : ''; ?>>Mbale</option>
              </optgroup>
              <optgroup label="Rwanda">
                <option value="kigali" <?php echo $origin === 'kigali' ? 'selected' : ''; ?>>Kigali</option>
                <option value="butare" <?php echo $origin === 'butare' ? 'selected' : ''; ?>>Butare</option>
                <option value="ruhengeri" <?php echo $origin === 'ruhengeri' ? 'selected' : ''; ?>>Ruhengeri</option>
              </optgroup>
              <optgroup label="Burundi">
                <option value="bujumbura" <?php echo $origin === 'bujumbura' ? 'selected' : ''; ?>>Bujumbura</option>
                <option value="gitega" <?php echo $origin === 'gitega' ? 'selected' : ''; ?>>Gitega</option>
              </optgroup>
            </select>
          </div>
          <div>
            <label class="block text-sm font-medium text-white mb-2">To</label>
            <select name="destination" id="destination" class="w-full p-3 rounded-lg border-0 focus:ring-2 focus:ring-blue-300" required>
              <option value="" disabled>Select City</option>
              <optgroup label="Tanzania">
                <option value="dar_es_salaam" <?php echo $destination === 'dar_es_salaam' ? 'selected' : ''; ?>>Dar es Salaam</option>
                <option value="arusha" <?php echo $destination === 'arusha' ? 'selected' : ''; ?>>Arusha</option>
                <option value="dodoma" <?php echo $destination === 'dodoma' ? 'selected' : ''; ?>>Dodoma</option>
                <option value="mbeya" <?php echo $destination === 'mbeya' ? 'selected' : ''; ?>>Mbeya</option>
                <option value="mwanza" <?php echo $destination === 'mwanza' ? 'selected' : ''; ?>>Mwanza</option>
                <option value="tanga" <?php echo $destination === 'tanga' ? 'selected' : ''; ?>>Tanga</option>
                <option value="morogoro" <?php echo $destination === 'morogoro' ? 'selected' : ''; ?>>Morogoro</option>
                <option value="zanzibar" <?php echo $destination === 'zanzibar' ? 'selected' : ''; ?>>Zanzibar</option>
              </optgroup>
              <optgroup label="Kenya">
                <option value="nairobi" <?php echo $destination === 'nairobi' ? 'selected' : ''; ?>>Nairobi</option>
                <option value="mombasa" <?php echo $destination === 'mombasa' ? 'selected' : ''; ?>>Mombasa</option>
                <option value="kisumu" <?php echo $destination === 'kisumu' ? 'selected' : ''; ?>>Kisumu</option>
                <option value="nakuru" <?php echo $destination === 'nakuru' ? 'selected' : ''; ?>>Nakuru</option>
                <option value="eldoret" <?php echo $destination === 'eldoret' ? 'selected' : ''; ?>>Eldoret</option>
              </optgroup>
              <optgroup label="Uganda">
                <option value="kampala" <?php echo $destination === 'kampala' ? 'selected' : ''; ?>>Kampala</option>
                <option value="entebbe" <?php echo $destination === 'entebbe' ? 'selected' : ''; ?>>Entebbe</option>
                <option value="jinja" <?php echo $destination === 'jinja' ? 'selected' : ''; ?>>Jinja</option>
                <option value="mbale" <?php echo $destination === 'mbale' ? 'selected' : ''; ?>>Mbale</option>
              </optgroup>
              <optgroup label="Rwanda">
                <option value="kigali" <?php echo $destination === 'kigali' ? 'selected' : ''; ?>>Kigali</option>
                <option value="butare" <?php echo $destination === 'butare' ? 'selected' : ''; ?>>Butare</option>
                <option value="ruhengeri" <?php echo $destination === 'ruhengeri' ? 'selected' : ''; ?>>Ruhengeri</option>
              </optgroup>
              <optgroup label="Burundi">
                <option value="bujumbura" <?php echo $destination === 'bujumbura' ? 'selected' : ''; ?>>Bujumbura</option>
                <option value="gitega" <?php echo $destination === 'gitega' ? 'selected' : ''; ?>>Gitega</option>
              </optgroup>
            </select>
          </div>
          <div>
            <label class="block text-sm font-medium text-white mb-2">Date</label>
            <input type="date" name="travel_date" class="w-full p-3 rounded-lg border-0 focus:ring-2 focus:ring-blue-300" value="<?php echo $travel_date; ?>" min="<?php echo date('Y-m-d'); ?>">
          </div>
          <button type="submit" class="bg-yellow-500 hover:bg-yellow-600 text-white px-6 py-3 rounded-lg font-medium transition self-end">
            Update Search
          </button>
        </form>
      </div>
    </div>
  </section>

  <!-- Filters and Results -->
  <section class="max-w-6xl mx-auto px-6 py-8">
    <?php if (empty($current_routes)): ?>
      <!-- No Routes Found -->
      <div class="text-center py-16">
        <div class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-6">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 12h6m-6-4h6m2 5.291A7.962 7.962 0 0112 15c-2.34 0-4.329.94-5.829 2.472" />
          </svg>
        </div>
        <h2 class="text-2xl font-bold text-gray-800 mb-4">No Routes Found</h2>
        <p class="text-gray-600 mb-8">Sorry, we don't have routes available for <?php echo $origin_name; ?> to <?php echo $destination_name; ?> on <?php echo $formatted_date; ?>.</p>
        <a href="home.php" class="btn-primary text-white px-6 py-3 rounded-lg font-medium">
          Try Different Route
        </a>
      </div>
    <?php else: ?>
      <div class="grid lg:grid-cols-4 gap-8">
        
        <!-- Filters Sidebar -->
        <div class="lg:col-span-1">
          <div class="bg-white rounded-xl shadow-sm p-6 sticky top-24">
            <h3 class="text-lg font-semibold text-gray-800 mb-4">Filter Results</h3>
            
            <!-- Departure Time -->
            <div class="mb-6">
              <h4 class="font-medium text-gray-700 mb-3">Departure Time</h4>
              <div class="space-y-2">
                <label class="flex items-center">
                  <input type="checkbox" class="rounded text-blue-600 focus:ring-blue-500 filter-checkbox" data-filter="time" data-value="early">
                  <span class="ml-2 text-sm">Early Morning (05:00 - 09:00)</span>
                </label>
                <label class="flex items-center">
                  <input type="checkbox" class="rounded text-blue-600 focus:ring-blue-500 filter-checkbox" data-filter="time" data-value="morning" checked>
                  <span class="ml-2 text-sm">Morning (09:00 - 12:00)</span>
                </label>
                <label class="flex items-center">
                  <input type="checkbox" class="rounded text-blue-600 focus:ring-blue-500 filter-checkbox" data-filter="time" data-value="afternoon">
                  <span class="ml-2 text-sm">Afternoon (12:00 - 17:00)</span>
                </label>
                <label class="flex items-center">
                  <input type="checkbox" class="rounded text-blue-600 focus:ring-blue-500 filter-checkbox" data-filter="time" data-value="evening">
                  <span class="ml-2 text-sm">Evening (17:00 - 22:00)</span>
                </label>
              </div>
            </div>

            <!-- Price Range -->
            <div class="mb-6">
              <h4 class="font-medium text-gray-700 mb-3">Price Range</h4>
              <div class="space-y-2">
                <label class="flex items-center">
                  <input type="checkbox" class="rounded text-blue-600 focus:ring-blue-500 filter-checkbox" data-filter="price" data-value="low">
                  <span class="ml-2 text-sm">Under 30,000</span>
                </label>
                <label class="flex items-center">
                  <input type="checkbox" class="rounded text-blue-600 focus:ring-blue-500 filter-checkbox" data-filter="price" data-value="medium" checked>
                  <span class="ml-2 text-sm">30,000 - 50,000</span>
                </label>
                <label class="flex items-center">
                  <input type="checkbox" class="rounded text-blue-600 focus:ring-blue-500 filter-checkbox" data-filter="price" data-value="high">
                 <span class="ml-2 text-sm">50,000 - 70,000</span>
               </label>
               <label class="flex items-center">
                 <input type="checkbox" class="rounded text-blue-600 focus:ring-blue-500 filter-checkbox" data-filter="price" data-value="premium">
                 <span class="ml-2 text-sm">70,000+</span>
               </label>
             </div>
           </div>

           <!-- Bus Class -->
           <div class="mb-6">
             <h4 class="font-medium text-gray-700 mb-3">Service Class</h4>
             <div class="space-y-2">
               <label class="flex items-center">
                 <input type="checkbox" class="rounded text-blue-600 focus:ring-blue-500 filter-checkbox" data-filter="class" data-value="economy" checked>
                 <span class="ml-2 text-sm">Economy</span>
               </label>
               <label class="flex items-center">
                 <input type="checkbox" class="rounded text-blue-600 focus:ring-blue-500 filter-checkbox" data-filter="class" data-value="business" checked>
                 <span class="ml-2 text-sm">Business</span>
               </label>
               <label class="flex items-center">
                 <input type="checkbox" class="rounded text-blue-600 focus:ring-blue-500 filter-checkbox" data-filter="class" data-value="vip">
                 <span class="ml-2 text-sm">VIP/Luxury</span>
               </label>
             </div>
           </div>

           <!-- Amenities -->
           <div class="mb-6">
             <h4 class="font-medium text-gray-700 mb-3">Amenities</h4>
             <div class="space-y-2">
               <label class="flex items-center">
                 <input type="checkbox" class="rounded text-blue-600 focus:ring-blue-500 filter-checkbox" data-filter="amenity" data-value="wifi">
                 <span class="ml-2 text-sm">WiFi</span>
               </label>
               <label class="flex items-center">
                 <input type="checkbox" class="rounded text-blue-600 focus:ring-blue-500 filter-checkbox" data-filter="amenity" data-value="ac" checked>
                 <span class="ml-2 text-sm">Air Conditioning</span>
               </label>
               <label class="flex items-center">
                 <input type="checkbox" class="rounded text-blue-600 focus:ring-blue-500 filter-checkbox" data-filter="amenity" data-value="entertainment">
                 <span class="ml-2 text-sm">Entertainment</span>
               </label>
               <label class="flex items-center">
                 <input type="checkbox" class="rounded text-blue-600 focus:ring-blue-500 filter-checkbox" data-filter="amenity" data-value="meals">
                 <span class="ml-2 text-sm">Meals/Refreshments</span>
               </label>
             </div>
           </div>

           <button id="clearFilters" class="w-full bg-gray-100 text-gray-700 py-2 rounded-lg hover:bg-gray-200 transition">
             Clear All Filters
           </button>
         </div>
       </div>

       <!-- Results -->
       <div class="lg:col-span-3">
         <div class="flex justify-between items-center mb-6">
           <div>
             <h2 class="text-xl font-semibold text-gray-800"><span id="routeCount"><?php echo count($current_routes); ?></span> Routes Found</h2>
             <p class="text-gray-600">Showing results for <?php echo $formatted_date; ?></p>
           </div>
           <select id="sortSelect" class="border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500">
             <option value="departure">Sort by: Departure Time</option>
             <option value="price_low">Sort by: Price (Low to High)</option>
             <option value="price_high">Sort by: Price (High to Low)</option>
             <option value="duration">Sort by: Duration</option>
             <option value="class">Sort by: Service Class</option>
           </select>
         </div>

         <!-- Route Cards -->
         <div id="routeResults" class="space-y-4">
           <?php foreach ($current_routes as $index => $route): ?>
           <div class="bg-white rounded-xl shadow-sm p-6 route-card card-hover route-item" 
                data-departure="<?php echo $route['departure']; ?>"
                data-price="<?php echo $route['price']; ?>"
                data-class="<?php echo strtolower(str_replace(' ', '_', $route['class'])); ?>"
                data-amenities="<?php echo implode(',', array_map('strtolower', $route['amenities'])); ?>"
                data-duration="<?php echo $route['duration']; ?>">
             <div class="flex flex-col md:flex-row md:items-center justify-between">
               <div class="flex-1">
                 <div class="flex items-center justify-between mb-4">
                   <div class="flex items-center space-x-4">
                     <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                       <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
                       </svg>
                     </div>
                     <div>
                       <h3 class="font-semibold text-gray-800"><?php echo $route['company']; ?></h3>
                       <p class="text-sm text-gray-600"><?php echo $route['vehicle']; ?> • <?php echo $route['class']; ?> Class</p>
                     </div>
                   </div>
                   <div class="vehicle-badge text-white text-xs px-3 py-1 rounded-full">
                     <?php echo $route['class']; ?>
                   </div>
                 </div>
                 
                 <div class="grid md:grid-cols-3 gap-4 mb-4">
                   <div>
                     <div class="text-2xl font-bold text-gray-800"><?php echo $route['departure']; ?></div>
                     <div class="text-sm text-gray-600"><?php echo $route['departure_station']; ?></div>
                     <div class="text-xs text-gray-500"><?php echo $origin_name; ?></div>
                   </div>
                   <div class="text-center">
                     <div class="text-sm text-gray-600 mb-1"><?php echo $route['duration']; ?></div>
                     <div class="flex items-center justify-center">
                       <?php if ($route['type'] === 'direct' || $route['type'] === 'express'): ?>
                       <div class="w-3 h-3 border-2 border-blue-600 rounded-full"></div>
                       <div class="w-16 h-0.5 bg-blue-600 mx-2"></div>
                       <div class="w-3 h-3 bg-blue-600 rounded-full"></div>
                       <?php else: ?>
                       <div class="w-3 h-3 border-2 border-blue-600 rounded-full"></div>
                       <div class="w-4 h-0.5 bg-blue-600 mx-1"></div>
                       <div class="w-2 h-2 bg-blue-600 rounded-full"></div>
                       <div class="w-4 h-0.5 bg-blue-600 mx-1"></div>
                       <div class="w-3 h-3 bg-blue-600 rounded-full"></div>
                       <?php endif; ?>
                     </div>
                     <div class="text-xs text-gray-500 mt-1">
                       <?php 
                       echo $route['type'] === 'direct' ? 'Direct' : 
                            ($route['type'] === 'express' ? 'Express' : 
                             ($route['type'] === '1_stop' ? '1 Stop' : 
                              ($route['type'] === '2_stops' ? '2 Stops' : 'Multiple Stops')));
                       ?>
                     </div>
                   </div>
                   <div class="text-right md:text-left">
                     <div class="text-2xl font-bold text-gray-800"><?php echo $route['arrival']; ?></div>
                     <div class="text-sm text-gray-600"><?php echo $route['arrival_station']; ?></div>
                     <div class="text-xs text-gray-500"><?php echo $destination_name; ?></div>
                   </div>
                 </div>

                 <div class="flex flex-wrap gap-2 mb-4">
                   <?php foreach ($route['amenities'] as $amenity): ?>
                   <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded-full"><?php echo $amenity; ?></span>
                   <?php endforeach; ?>
                 </div>
               </div>
               
               <div class="md:text-right md:ml-6">
                 <div class="price-highlight text-3xl mb-2">
                   <?php echo $route['currency']; ?> <?php echo number_format($route['price']); ?>
                 </div>
                 <div class="text-sm text-gray-600 mb-4"><?php echo $route['seats_available']; ?> seats available</div>
                 <button class="btn-primary text-white px-6 py-3 rounded-lg font-medium w-full md:w-auto select-seats-btn" 
                         data-route-index="<?php echo $index; ?>"
                         data-company="<?php echo htmlspecialchars($route['company']); ?>"
                         data-departure="<?php echo $route['departure']; ?>"
                         data-arrival="<?php echo $route['arrival']; ?>"
                         data-duration="<?php echo htmlspecialchars($route['duration']); ?>"
                         data-vehicle="<?php echo htmlspecialchars($route['vehicle']); ?>"
                         data-class="<?php echo htmlspecialchars($route['class']); ?>"
                         data-price="<?php echo $route['price']; ?>"
                         data-currency="<?php echo $route['currency']; ?>"
                         data-departure-station="<?php echo htmlspecialchars($route['departure_station']); ?>"
                         data-arrival-station="<?php echo htmlspecialchars($route['arrival_station']); ?>"
                         data-amenities="<?php echo htmlspecialchars(implode(',', $route['amenities'])); ?>"
                         data-total-seats="<?php echo $route['total_seats']; ?>"
                         data-available-seats="<?php echo $route['seats_available']; ?>">
                   Select Seats
                 </button>
               </div>
             </div>
           </div>
           <?php endforeach; ?>
         </div>

         <!-- No results message (hidden by default) -->
         <div id="noResults" class="hidden text-center py-16">
           <div class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-6">
             <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L4.083 16.5c-.77.833.192 2.5 1.732 2.5z" />
             </svg>
           </div>
           <h3 class="text-xl font-semibold text-gray-800 mb-2">No routes match your filters</h3>
           <p class="text-gray-600">Try adjusting your filter criteria to see more results.</p>
         </div>
       </div>
     </div>
   <?php endif; ?>
 </section>

 <!-- Popular Routes Section -->
 <section class="bg-white py-16">
   <div class="max-w-6xl mx-auto px-6">
     <div class="text-center mb-12">
       <h2 class="text-3xl font-bold text-gray-800 mb-4">Other Popular Routes</h2>
       <p class="text-gray-600">Explore more destinations across East Africa</p>
     </div>
     
     <div class="grid md:grid-cols-3 gap-6">
       <a href="search.php?origin=nairobi&destination=mombasa&travel_date=<?php echo date('Y-m-d', strtotime('+1 day')); ?>" class="bg-gradient-to-br from-blue-50 to-indigo-100 p-6 rounded-xl card-hover block">
         <h3 class="font-semibold text-gray-800 mb-2">Nairobi ↔ Mombasa</h3>
         <p class="text-sm text-gray-600 mb-4">8 daily departures</p>
         <div class="flex justify-between items-center">
           <span class="text-blue-600 font-semibold">From KES 1,200</span>
           <span class="text-blue-600 hover:text-blue-800 font-medium">View Routes →</span>
         </div>
       </a>
       
       <a href="search.php?origin=kampala&destination=kigali&travel_date=<?php echo date('Y-m-d', strtotime('+1 day')); ?>" class="bg-gradient-to-br from-green-50 to-emerald-100 p-6 rounded-xl card-hover block">
         <h3 class="font-semibold text-gray-800 mb-2">Kampala ↔ Kigali</h3>
         <p class="text-sm text-gray-600 mb-4">6 daily departures</p>
         <div class="flex justify-between items-center">
           <span class="text-green-600 font-semibold">From UGX 45,000</span>
           <span class="text-green-600 hover:text-green-800 font-medium">View Routes →</span>
         </div>
       </a>
       
       <a href="search.php?origin=dodoma&destination=mwanza&travel_date=<?php echo date('Y-m-d', strtotime('+1 day')); ?>" class="bg-gradient-to-br from-purple-50 to-violet-100 p-6 rounded-xl card-hover block">
         <h3 class="font-semibold text-gray-800 mb-2">Dodoma ↔ Mwanza</h3>
         <p class="text-sm text-gray-600 mb-4">4 daily departures</p>
         <div class="flex justify-between items-center">
           <span class="text-purple-600 font-semibold">From TZS 22,000</span>
           <span class="text-purple-600 hover:text-purple-800 font-medium">View Routes →</span>
         </div>
       </a>
     </div>
   </div>
 </section>

 <!-- Seat Selection Modal -->
 <div id="seatModal" class="modal">
   <div class="modal-content">
     <div class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white p-6 rounded-t-xl">
       <div class="flex justify-between items-center">
         <div>
           <h2 class="text-2xl font-bold mb-2" id="modalCompany">Select Your Seats</h2>
           <p class="text-blue-100" id="modalRoute">Route information</p>
         </div>
         <button class="text-white hover:text-gray-200 text-3xl" onclick="closeSeatModal()">&times;</button>
       </div>
     </div>
     
     <div class="p-6">
       <div class="grid md:grid-cols-2 gap-8">
         <!-- Seat Map -->
         <div>
           <h3 class="text-lg font-semibold text-gray-800 mb-4">Choose Your Seat</h3>
           <div class="seat-map">
             <div class="flex justify-between items-center mb-4">
               <span class="text-sm font-medium text-gray-600">Driver</span>
               <div class="w-8 h-6 bg-gray-300 rounded"></div>
             </div>
             
             <div id="seatGrid" class="grid grid-cols-4 gap-2">
               <!-- Seats will be generated dynamically -->
             </div>
             
             <div class="flex justify-center space-x-6 mt-6 text-xs">
               <div class="flex items-center">
                 <div class="seat seat-available mr-2"></div>
                 <span>Available</span>
               </div>
               <div class="flex items-center">
                 <div class="seat seat-selected mr-2"></div>
                 <span>Selected</span>
               </div>
               <div class="flex items-center">
                 <div class="seat seat-occupied mr-2"></div>
                 <span>Occupied</span>
               </div>
             </div>
           </div>
         </div>
         
         <!-- Booking Summary -->
         <div>
           <h3 class="text-lg font-semibold text-gray-800 mb-4">Booking Summary</h3>
           <div class="bg-gray-50 rounded-lg p-4">
             <div class="space-y-3">
               <div class="flex justify-between">
                 <span class="text-gray-600">Route:</span>
                 <span class="font-medium"><?php echo $origin_name; ?> → <?php echo $destination_name; ?></span>
               </div>
               <div class="flex justify-between">
                 <span class="text-gray-600">Date:</span>
                 <span class="font-medium"><?php echo $formatted_date; ?></span>
               </div>
               <div class="flex justify-between">
                 <span class="text-gray-600">Departure:</span>
                 <span class="font-medium" id="summaryDeparture">--:--</span>
               </div>
               <div class="flex justify-between">
                 <span class="text-gray-600">Selected Seats:</span>
                 <span class="font-medium" id="selectedSeatsText">None</span>
               </div>
               <div class="border-t pt-3">
                 <div class="flex justify-between">
                   <span class="text-gray-600">Total Amount:</span>
                   <span class="text-xl font-bold text-blue-600" id="totalAmount">TZS 0</span>
                 </div>
               </div>
             </div>
           </div>
           
           <!-- Quick Passenger Info -->
           <div id="quickPassengerInfo" class="mt-6 hidden">
             <h4 class="text-md font-semibold text-gray-800 mb-3">Primary Passenger</h4>
             <div class="space-y-3">
               <div>
                 <label class="block text-sm font-medium text-gray-700 mb-1">Full Name *</label>
                 <input type="text" id="passengerName" class="w-full p-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" placeholder="Enter full name" required>
               </div>
               <div>
                 <label class="block text-sm font-medium text-gray-700 mb-1">Phone Number *</label>
                 <input type="tel" id="passengerPhone" class="w-full p-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" placeholder="+255 XXX XXX XXX" required>
               </div>
               <div>
                 <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                 <input type="email" id="passengerEmail" class="w-full p-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" placeholder="Enter email address">
               </div>
             </div>
           </div>
           
           <button id="proceedBooking" class="w-full btn-primary text-white py-3 rounded-lg font-medium mt-6 disabled:opacity-50 disabled:cursor-not-allowed" disabled>
             Proceed to Payment
           </button>
         </div>
       </div>
     </div>
   </div>
 </div>

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

 <script>
   // PHP data for JavaScript
   const routes = <?php echo json_encode($current_routes); ?>;
   const cities = <?php echo json_encode($cities); ?>;
   const cityStations = <?php echo json_encode($cityStations); ?>;
   
   let selectedSeats = [];
   let currentRoute = null;
   
   // Filter functionality
   document.addEventListener('DOMContentLoaded', function() {
     const filterCheckboxes = document.querySelectorAll('.filter-checkbox');
     const sortSelect = document.getElementById('sortSelect');
     const clearFiltersBtn = document.getElementById('clearFilters');
     
     // Add event listeners
     filterCheckboxes.forEach(checkbox => {
       checkbox.addEventListener('change', filterResults);
     });
     
     sortSelect.addEventListener('change', sortResults);
     clearFiltersBtn.addEventListener('click', clearAllFilters);
     
     // Seat selection buttons
     document.querySelectorAll('.select-seats-btn').forEach(btn => {
       btn.addEventListener('click', function() {
         const routeIndex = this.dataset.routeIndex;
         openSeatModal(routeIndex);
       });
     });
     
     function filterResults() {
       const routeItems = document.querySelectorAll('.route-item');
       let visibleCount = 0;
       
       routeItems.forEach(item => {
         let shouldShow = true;
         
         // Time filter
         const timeFilters = Array.from(document.querySelectorAll('.filter-checkbox[data-filter="time"]:checked')).map(cb => cb.dataset.value);
         if (timeFilters.length > 0) {
           const departure = item.dataset.departure;
           const hour = parseInt(departure.split(':')[0]);
           
           let timeMatch = false;
           timeFilters.forEach(filter => {
             if (filter === 'early' && hour >= 5 && hour < 9) timeMatch = true;
             if (filter === 'morning' && hour >= 9 && hour < 12) timeMatch = true;
             if (filter === 'afternoon' && hour >= 12 && hour < 17) timeMatch = true;
             if (filter === 'evening' && hour >= 17 && hour < 22) timeMatch = true;
           });
           
           if (!timeMatch) shouldShow = false;
         }
         
         // Price filter
         const priceFilters = Array.from(document.querySelectorAll('.filter-checkbox[data-filter="price"]:checked')).map(cb => cb.dataset.value);
         if (priceFilters.length > 0) {
           const price = parseInt(item.dataset.price);
           
           let priceMatch = false;
           priceFilters.forEach(filter => {
             if (filter === 'low' && price < 30000) priceMatch = true;
             if (filter === 'medium' && price >= 30000 && price <= 50000) priceMatch = true;
             if (filter === 'high' && price > 50000 && price <= 70000) priceMatch = true;
             if (filter === 'premium' && price > 70000) priceMatch = true;
           });
           
           if (!priceMatch) shouldShow = false;
         }
         
         // Class filter
         const classFilters = Array.from(document.querySelectorAll('.filter-checkbox[data-filter="class"]:checked')).map(cb => cb.dataset.value);
         if (classFilters.length > 0) {
           const itemClass = item.dataset.class;
           
           let classMatch = false;
           classFilters.forEach(filter => {
             if (filter === 'economy' && (itemClass.includes('economy') || itemClass.includes('plus'))) classMatch = true;if (filter === 'business' && itemClass.includes('business')) classMatch = true;
             if (filter === 'vip' && (itemClass.includes('vip') || itemClass.includes('sleeper'))) classMatch = true;
           });
           
           if (!classMatch) shouldShow = false;
         }
         
         // Amenity filter
         const amenityFilters = Array.from(document.querySelectorAll('.filter-checkbox[data-filter="amenity"]:checked')).map(cb => cb.dataset.value);
         if (amenityFilters.length > 0) {
           const amenities = item.dataset.amenities.toLowerCase();
           
           let amenityMatch = true;
           amenityFilters.forEach(filter => {
             if (filter === 'wifi' && !amenities.includes('wifi')) amenityMatch = false;
             if (filter === 'ac' && !amenities.includes('ac')) amenityMatch = false;
             if (filter === 'entertainment' && !amenities.includes('entertainment')) amenityMatch = false;
             if (filter === 'meals' && !(amenities.includes('meals') || amenities.includes('refreshments') || amenities.includes('snacks'))) amenityMatch = false;
           });
           
           if (!amenityMatch) shouldShow = false;
         }
         
         // Show/hide item
         if (shouldShow) {
           item.style.display = 'block';
           visibleCount++;
         } else {
           item.style.display = 'none';
         }
       });
       
       // Update count and show no results message if needed
       document.getElementById('routeCount').textContent = visibleCount;
       document.getElementById('noResults').style.display = visibleCount === 0 ? 'block' : 'none';
     }
     
     function sortResults() {
       const container = document.getElementById('routeResults');
       const items = Array.from(container.querySelectorAll('.route-item:not([style*="display: none"])'));
       const sortValue = sortSelect.value;
       
       items.sort((a, b) => {
         switch (sortValue) {
           case 'price_low':
             return parseInt(a.dataset.price) - parseInt(b.dataset.price);
           case 'price_high':
             return parseInt(b.dataset.price) - parseInt(a.dataset.price);
           case 'departure':
             return a.dataset.departure.localeCompare(b.dataset.departure);
           case 'duration':
             const aDuration = parseDuration(a.dataset.duration);
             const bDuration = parseDuration(b.dataset.duration);
             return aDuration - bDuration;
           case 'class':
             const classOrder = { 'economy': 1, 'business': 2, 'vip': 3 };
             const aClass = getClassPriority(a.dataset.class);
             const bClass = getClassPriority(b.dataset.class);
             return aClass - bClass;
           default:
             return 0;
         }
       });
       
       // Reorder items in DOM
       items.forEach(item => container.appendChild(item));
     }
     
     function parseDuration(duration) {
       const parts = duration.match(/(\d+)h\s*(\d+)?m?/);
       if (parts) {
         const hours = parseInt(parts[1]) || 0;
         const minutes = parseInt(parts[2]) || 0;
         return hours * 60 + minutes;
       }
       return 0;
     }
     
     function getClassPriority(classStr) {
       if (classStr.includes('economy')) return 1;
       if (classStr.includes('business')) return 2;
       if (classStr.includes('vip') || classStr.includes('sleeper')) return 3;
       return 1;
     }
     
     function clearAllFilters() {
       filterCheckboxes.forEach(checkbox => {
         checkbox.checked = false;
       });
       filterResults();
     }
   });
   
   // Seat Modal Functions
   function openSeatModal(routeIndex) {
     currentRoute = routes[routeIndex];
     selectedSeats = [];
     
     // Get additional data from button attributes
     const button = document.querySelector(`[data-route-index="${routeIndex}"]`);
     currentRoute.departure_station = button.dataset.departureStation;
     currentRoute.arrival_station = button.dataset.arrivalStation;
     currentRoute.amenities = button.dataset.amenities.split(',');
     
     // Update modal content
     document.getElementById('modalCompany').textContent = currentRoute.company;
     document.getElementById('modalRoute').textContent = `${currentRoute.departure} - ${currentRoute.arrival} • ${currentRoute.duration}`;
     document.getElementById('summaryDeparture').textContent = currentRoute.departure;
     
     // Generate seat map
     generateSeatMap(currentRoute.total_seats, currentRoute.seats_available);
     
     // Show modal
     document.getElementById('seatModal').style.display = 'block';
     updateBookingSummary();
   }
   
   function closeSeatModal() {
     document.getElementById('seatModal').style.display = 'none';
     selectedSeats = [];
     currentRoute = null;
   }
   
   function generateSeatMap(totalSeats, availableSeats) {
     const seatGrid = document.getElementById('seatGrid');
     seatGrid.innerHTML = '';
     
     const occupiedSeats = totalSeats - availableSeats;
     const occupiedSeatNumbers = [];
     
     // Randomly assign some seats as occupied
     while (occupiedSeatNumbers.length < occupiedSeats) {
       const randomSeat = Math.floor(Math.random() * totalSeats) + 1;
       if (!occupiedSeatNumbers.includes(randomSeat)) {
         occupiedSeatNumbers.push(randomSeat);
       }
     }
     
     for (let i = 1; i <= totalSeats; i++) {
       const seat = document.createElement('div');
       seat.className = 'seat';
       seat.textContent = i;
       seat.dataset.seatNumber = i;
       
       if (occupiedSeatNumbers.includes(i)) {
         seat.classList.add('seat-occupied');
       } else {
         seat.classList.add('seat-available');
         seat.addEventListener('click', toggleSeat);
       }
       
       seatGrid.appendChild(seat);
       
       // Add aisle space after every 2nd seat (simulating bus layout)
       if (i % 4 === 2) {
         const aisle = document.createElement('div');
         aisle.className = 'w-4';
         seatGrid.appendChild(aisle);
       }
     }
   }
   
   function toggleSeat(event) {
     const seatNumber = parseInt(event.target.dataset.seatNumber);
     const seatElement = event.target;
     
     if (selectedSeats.includes(seatNumber)) {
       // Deselect seat
       selectedSeats = selectedSeats.filter(s => s !== seatNumber);
       seatElement.classList.remove('seat-selected');
       seatElement.classList.add('seat-available');
     } else {
       // Select seat (limit to 4 seats max)
       if (selectedSeats.length < 4) {
         selectedSeats.push(seatNumber);
         seatElement.classList.remove('seat-available');
         seatElement.classList.add('seat-selected');
       } else {
         alert('You can select maximum 4 seats at a time.');
       }
     }
     
     updateBookingSummary();
   }
   
   function updateBookingSummary() {
     const selectedSeatsText = document.getElementById('selectedSeatsText');
     const totalAmount = document.getElementById('totalAmount');
     const proceedButton = document.getElementById('proceedBooking');
     const quickPassengerInfo = document.getElementById('quickPassengerInfo');
     
     if (selectedSeats.length === 0) {
       selectedSeatsText.textContent = 'None';
       totalAmount.textContent = `${currentRoute.currency} 0`;
       proceedButton.disabled = true;
       quickPassengerInfo.classList.add('hidden');
     } else {
       selectedSeatsText.textContent = selectedSeats.sort((a, b) => a - b).join(', ');
       const total = selectedSeats.length * currentRoute.price;
       totalAmount.textContent = `${currentRoute.currency} ${total.toLocaleString()}`;
       quickPassengerInfo.classList.remove('hidden');
       
       // Enable button only if passenger name is filled
       checkPassengerInfo();
     }
   }
   
   function checkPassengerInfo() {
     const proceedButton = document.getElementById('proceedBooking');
     const passengerName = document.getElementById('passengerName');
     const passengerPhone = document.getElementById('passengerPhone');
     
     if (passengerName && passengerPhone) {
       const hasName = passengerName.value.trim().length > 0;
       const hasPhone = passengerPhone.value.trim().length > 0;
       proceedButton.disabled = !(selectedSeats.length > 0 && hasName && hasPhone);
     }
   }
   
   // Proceed to booking
   document.getElementById('proceedBooking').addEventListener('click', function() {
     if (selectedSeats.length === 0) return;
     
     // Get passenger information from the form
     const passengerName = document.getElementById('passengerName').value.trim();
     const passengerPhone = document.getElementById('passengerPhone').value.trim();
     const passengerEmail = document.getElementById('passengerEmail').value.trim();
     
     // Validate required fields
     if (!passengerName || !passengerPhone) {
       alert('Please fill in passenger name and phone number.');
       return;
     }
     
     // Prepare booking data for payment page
     const bookingData = {
       company: encodeURIComponent(currentRoute.company),
       departure: currentRoute.departure,
       arrival: currentRoute.arrival,
       duration: encodeURIComponent(currentRoute.duration),
       origin: '<?php echo $origin; ?>',
       destination: '<?php echo $destination; ?>',
       travel_date: '<?php echo $travel_date; ?>',
       seats: selectedSeats.join(','),
       price_per_seat: currentRoute.price,
       currency: currentRoute.currency,
       vehicle: encodeURIComponent(currentRoute.vehicle),
       class: encodeURIComponent(currentRoute.class),
       departure_station: encodeURIComponent(currentRoute.departure_station),
       arrival_station: encodeURIComponent(currentRoute.arrival_station),
       amenities: encodeURIComponent(currentRoute.amenities.join(',')),
       passenger_name: encodeURIComponent(passengerName),
       passenger_phone: encodeURIComponent(passengerPhone),
       passenger_email: encodeURIComponent(passengerEmail),
       seat_count: selectedSeats.length,
       total_amount: selectedSeats.length * currentRoute.price
     };
     
     // Build URL with parameters
     const paymentUrl = 'payment.php?' + Object.keys(bookingData).map(key => 
       key + '=' + bookingData[key]
     ).join('&');
     
     // Show loading state
     this.disabled = true;
     this.innerHTML = 'Redirecting to Payment...';
     
     // Close modal and redirect after short delay
     setTimeout(() => {
       closeSeatModal();
       window.location.href = paymentUrl;
     }, 1000);
   });
   
   // Add event listeners for passenger info fields
   document.addEventListener('DOMContentLoaded', function() {
     // This will be added when the modal is opened
     document.addEventListener('input', function(e) {
       if (e.target.id === 'passengerName' || e.target.id === 'passengerPhone') {
         checkPassengerInfo();
       }
       
       // Format phone number
       if (e.target.id === 'passengerPhone') {
         let value = e.target.value.replace(/\D/g, '');
         if (value.startsWith('255')) {
           value = '+' + value;
         } else if (value.startsWith('0')) {
           value = '+255' + value.substring(1);
         } else if (!value.startsWith('+') && value.length > 0) {
           value = '+255' + value;
         }
         e.target.value = value;
       }
     });
     
     // Reset form when modal closes
     function resetModal() {
       document.getElementById('passengerName').value = '';
       document.getElementById('passengerPhone').value = '';
       document.getElementById('passengerEmail').value = '';
       document.getElementById('quickPassengerInfo').classList.add('hidden');
       document.getElementById('proceedBooking').disabled = true;
       document.getElementById('proceedBooking').innerHTML = 'Proceed to Payment';
     }
     
     // Override closeSeatModal to reset form
     const originalCloseSeatModal = window.closeSeatModal;
     window.closeSeatModal = function() {
       originalCloseSeatModal();
       resetModal();
     };
   });
   
   // Close modal when clicking outside
   window.onclick = function(event) {
     const modal = document.getElementById('seatModal');
     if (event.target === modal) {
       closeSeatModal();
     }
   }
   
   // Station selection functionality (similar to home.php)
   const cityStationsData = <?php echo json_encode($cityStations); ?>;
   
   document.getElementById('origin').addEventListener('change', function() {
     updateStationOptions('origin', this.value);
   });
   
   document.getElementById('destination').addEventListener('change', function() {
     updateStationOptions('destination', this.value);
   });
   
   function updateStationOptions(type, cityValue) {
     // This would be used if station selection was implemented in the search form
     const stations = cityStationsData[cityValue] || [];
     console.log(`${type} stations for ${cityValue}:`, stations);
   }
   
   // Animate route cards on scroll
   const observerOptions = {
     threshold: 0.1,
     rootMargin: '0px 0px -50px 0px'
   };

   const observer = new IntersectionObserver((entries) => {
     entries.forEach(entry => {
       if (entry.isIntersecting) {
         entry.target.style.opacity = '1';
         entry.target.style.transform = 'translateY(0)';
       }
     });
   }, observerOptions);

   // Observe route cards
   document.querySelectorAll('.route-card').forEach(card => {
     card.style.opacity = '0';
     card.style.transform = 'translateY(30px)';
     card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
     observer.observe(card);
   });
   
   // Initialize filters based on current state
   filterResults();
 </script>

</body>
</html>