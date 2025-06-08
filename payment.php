<?php
// Get booking parameters
$company = $_GET['company'] ?? 'SwiftRides Express';
$departure = $_GET['departure'] ?? '06:30';
$arrival = $_GET['arrival'] ?? '15:00';
$duration = $_GET['duration'] ?? '8h 30m';
$origin = $_GET['origin'] ?? 'dar_es_salaam';
$destination = $_GET['destination'] ?? 'arusha';
$travel_date = $_GET['travel_date'] ?? date('Y-m-d', strtotime('+1 day'));
$seats = $_GET['seats'] ?? '12,13';
$price_per_seat = $_GET['price_per_seat'] ?? 35000;
$currency = $_GET['currency'] ?? 'TZS';
$vehicle = $_GET['vehicle'] ?? 'Mercedes-Benz Tourismo';
$class = $_GET['class'] ?? 'Business';

// Convert seats string to array
$selected_seats = explode(',', $seats);
$seat_count = count($selected_seats);
$total_amount = $seat_count * $price_per_seat;

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

$origin_name = $cities[$origin] ?? ucfirst(str_replace('_', ' ', $origin));
$destination_name = $cities[$destination] ?? ucfirst(str_replace('_', ' ', $destination));
$formatted_date = date('F j, Y', strtotime($travel_date));

// Calculate fees
$service_fee = $total_amount * 0.02; // 2% service fee
$insurance_fee = $seat_count * 2000; // 2000 per seat insurance
$total_with_fees = $total_amount + $service_fee + $insurance_fee;

// Generate booking reference
$booking_ref = 'SR' . date('Y') . sprintf('%06d', rand(100000, 999999));
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Payment & Checkout | SwiftRides</title>
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
      transform: translateY(-2px);
      box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
    }
    .btn-primary {
      background: linear-gradient(135deg, #2563eb 0%, #4f46e5 100%);
      transition: all 0.3s ease;
    }
    .btn-primary:hover {
      transform: translateY(-2px);
      box-shadow: 0 8px 15px -3px rgba(37, 99, 235, 0.3);
    }
    .payment-method {
      border: 2px solid #e5e7eb;
      transition: all 0.3s ease;
      cursor: pointer;
    }
    .payment-method:hover {
      border-color: #3b82f6;
      background-color: #eff6ff;
    }
    .payment-method.selected {
      border-color: #2563eb;
      background-color: #dbeafe;
    }
    .step-indicator {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 600;
      transition: all 0.3s ease;
    }
    .step-active {
      background: linear-gradient(135deg, #2563eb 0%, #4f46e5 100%);
      color: white;
    }
    .step-completed {
      background: #10b981;
      color: white;
    }
    .step-pending {
      background: #f3f4f6;
      color: #6b7280;
    }
    .form-group {
      margin-bottom: 1.5rem;
    }
    .form-control {
      width: 100%;
      padding: 12px 16px;
      border: 2px solid #e5e7eb;
      border-radius: 8px;
      font-size: 16px;
      transition: all 0.3s ease;
    }
    .form-control:focus {
      outline: none;
      border-color: #3b82f6;
      box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
    }
    .loading-spinner {
      display: none;
      width: 20px;
      height: 20px;
      border: 2px solid #f3f3f3;
      border-top: 2px solid #3498db;
      border-radius: 50%;
      animation: spin 1s linear infinite;
    }
    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
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
      margin: 10% auto;
      padding: 0;
      border-radius: 12px;
      width: 90%;
      max-width: 500px;
      animation: slideDown 0.3s ease;
    }
    @keyframes slideDown {
      from { transform: translateY(-50px); opacity: 0; }
      to { transform: translateY(0); opacity: 1; }
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

  <!-- Progress Steps -->
  <section class="bg-white border-b py-6">
    <div class="max-w-4xl mx-auto px-6">
      <div class="flex items-center justify-center space-x-8">
        <div class="flex items-center">
          <div class="step-indicator step-completed">1</div>
          <span class="ml-3 text-sm font-medium text-gray-900">Select Route</span>
        </div>
        <div class="w-12 h-0.5 bg-green-500"></div>
        <div class="flex items-center">
          <div class="step-indicator step-completed">2</div>
          <span class="ml-3 text-sm font-medium text-gray-900">Choose Seats</span>
        </div>
        <div class="w-12 h-0.5 bg-blue-500"></div>
        <div class="flex items-center">
          <div class="step-indicator step-active">3</div>
          <span class="ml-3 text-sm font-medium text-blue-600">Payment</span>
        </div>
        <div class="w-12 h-0.5 bg-gray-300"></div>
        <div class="flex items-center">
          <div class="step-indicator step-pending">4</div>
          <span class="ml-3 text-sm font-medium text-gray-500">Confirmation</span>
        </div>
      </div>
    </div>
  </section>

  <!-- Main Content -->
  <section class="max-w-6xl mx-auto px-6 py-8">
    <div class="grid lg:grid-cols-3 gap-8">
      
      <!-- Payment Form -->
      <div class="lg:col-span-2 space-y-8">
        
        <!-- Passenger Information -->
        <div class="bg-white rounded-xl shadow-sm p-6">
          <h2 class="text-xl font-semibold text-gray-800 mb-6">Passenger Information</h2>
          
          <form id="passengerForm">
            <div class="grid md:grid-cols-2 gap-6">
              <div class="form-group">
                <label class="block text-sm font-medium text-gray-700 mb-2">First Name *</label>
                <input type="text" class="form-control" placeholder="Enter first name" required>
              </div>
              <div class="form-group">
                <label class="block text-sm font-medium text-gray-700 mb-2">Last Name *</label>
                <input type="text" class="form-control" placeholder="Enter last name" required>
              </div>
              <div class="form-group">
                <label class="block text-sm font-medium text-gray-700 mb-2">Email Address *</label>
                <input type="email" class="form-control" placeholder="Enter email address" required>
              </div>
              <div class="form-group">
                <label class="block text-sm font-medium text-gray-700 mb-2">Phone Number *</label>
                <input type="tel" class="form-control" placeholder="+255 XXX XXX XXX" required>
              </div>
              <div class="form-group">
                <label class="block text-sm font-medium text-gray-700 mb-2">ID/Passport Number *</label>
                <input type="text" class="form-control" placeholder="Enter ID or passport number" required>
              </div>
              <div class="form-group">
                <label class="block text-sm font-medium text-gray-700 mb-2">Date of Birth</label>
                <input type="date" class="form-control">
              </div>
            </div>
            
            <!-- Additional Passengers -->
            <div id="additionalPassengers" class="mt-8">
              <?php if ($seat_count > 1): ?>
              <h3 class="text-lg font-medium text-gray-800 mb-4">Additional Passengers (<?php echo $seat_count - 1; ?> more)</h3>
              <?php for ($i = 2; $i <= $seat_count; $i++): ?>
              <div class="border-t pt-6 mt-6">
                <h4 class="text-md font-medium text-gray-700 mb-4">Passenger <?php echo $i; ?> - Seat <?php echo $selected_seats[$i-1]; ?></h4>
                <div class="grid md:grid-cols-2 gap-6">
                  <div class="form-group">
                    <label class="block text-sm font-medium text-gray-700 mb-2">First Name *</label>
                    <input type="text" class="form-control" placeholder="Enter first name" required>
                  </div>
                  <div class="form-group">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Last Name *</label>
                    <input type="text" class="form-control" placeholder="Enter last name" required>
                  </div>
                  <div class="form-group">
                    <label class="block text-sm font-medium text-gray-700 mb-2">ID/Passport Number *</label>
                    <input type="text" class="form-control" placeholder="Enter ID or passport number" required>
                  </div>
                  <div class="form-group">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Date of Birth</label>
                    <input type="date" class="form-control">
                  </div>
                </div>
              </div>
              <?php endfor; ?>
              <?php endif; ?>
            </div>
          </form>
        </div>

        <!-- Payment Methods -->
        <div class="bg-white rounded-xl shadow-sm p-6">
          <h2 class="text-xl font-semibold text-gray-800 mb-6">Payment Method</h2>
          
          <div class="grid md:grid-cols-2 gap-4 mb-6">
            <!-- Mobile Money -->
            <div class="payment-method p-4 rounded-lg" data-method="mobile_money">
              <div class="flex items-center space-x-3">
                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                  </svg>
                </div>
                <div>
                  <h3 class="font-semibold text-gray-800">Mobile Money</h3>
                  <p class="text-sm text-gray-600">M-Pesa, Tigo Pesa, Airtel Money</p>
                </div>
              </div>
            </div>

            <!-- Credit/Debit Card -->
            <div class="payment-method p-4 rounded-lg" data-method="card">
              <div class="flex items-center space-x-3">
                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                  </svg>
                </div>
                <div>
                  <h3 class="font-semibold text-gray-800">Credit/Debit Card</h3>
                  <p class="text-sm text-gray-600">Visa, Mastercard, American Express</p>
                </div>
              </div>
            </div>

            <!-- Bank Transfer -->
            <div class="payment-method p-4 rounded-lg" data-method="bank">
              <div class="flex items-center space-x-3">
                <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                  </svg>
                </div>
                <div>
                  <h3 class="font-semibold text-gray-800">Bank Transfer</h3>
                  <p class="text-sm text-gray-600">Direct bank transfer</p>
                </div>
              </div>
            </div>

            <!-- Pay at Terminal -->
            <div class="payment-method p-4 rounded-lg" data-method="terminal">
              <div class="flex items-center space-x-3">
                <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                  </svg>
                </div>
                <div>
                  <h3 class="font-semibold text-gray-800">Pay at Terminal</h3>
                  <p class="text-sm text-gray-600">Pay when you arrive</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Payment Forms -->
          <div id="paymentForms">
            <!-- Mobile Money Form -->
            <div id="mobile_money_form" class="payment-form hidden">
              <div class="space-y-4">
                <div class="form-group">
                  <label class="block text-sm font-medium text-gray-700 mb-2">Mobile Money Provider</label>
                  <select class="form-control">
                    <option value="">Select provider</option>
                    <option value="mpesa">M-Pesa</option>
                    <option value="tigo">Tigo Pesa</option>
                    <option value="airtel">Airtel Money</option>
                    <option value="halopesa">HaloPesa</option>
                  </select>
                </div>
                <div class="form-group">
                  <label class="block text-sm font-medium text-gray-700 mb-2">Mobile Number</label>
                  <input type="tel" class="form-control" placeholder="+255 XXX XXX XXX">
                </div>
                <div class="bg-blue-50 p-4 rounded-lg">
                  <p class="text-sm text-blue-800">
                    <strong>Instructions:</strong> You will receive a payment prompt on your mobile device. Please complete the transaction within 5 minutes.
                  </p>
                </div>
              </div>
            </div>

            <!-- Card Form -->
            <div id="card_form" class="payment-form hidden">
              <div class="space-y-4">
                <div class="form-group">
                  <label class="block text-sm font-medium text-gray-700 mb-2">Card Number</label>
                  <input type="text" class="form-control" placeholder="1234 5678 9012 3456" maxlength="19">
                </div>
                <div class="grid grid-cols-2 gap-4">
                  <div class="form-group">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Expiry Date</label>
                    <input type="text" class="form-control" placeholder="MM/YY" maxlength="5">
                  </div>
                  <div class="form-group">
                    <label class="block text-sm font-medium text-gray-700 mb-2">CVV</label>
                    <input type="text" class="form-control" placeholder="123" maxlength="4">
                  </div>
                </div>
                <div class="form-group">
                  <label class="block text-sm font-medium text-gray-700 mb-2">Cardholder Name</label>
                  <input type="text" class="form-control" placeholder="Name as on card">
                </div>
              </div>
            </div>

            <!-- Bank Transfer Form -->
            <div id="bank_form" class="payment-form hidden">
              <div class="bg-gray-50 p-6 rounded-lg">
                <h4 class="font-semibold text-gray-800 mb-4">Bank Transfer Details</h4>
                <div class="space-y-3 text-sm">
                  <div class="flex justify-between">
                    <span class="text-gray-600">Bank Name:</span>
                    <span class="font-medium">CRDB Bank Tanzania</span>
                  </div>
                  <div class="flex justify-between">
                    <span class="text-gray-600">Account Name:</span>
                    <span class="font-medium">SwiftRides Tanzania Limited</span>
                  </div>
                  <div class="flex justify-between">
                    <span class="text-gray-600">Account Number:</span>
                    <span class="font-medium">0150-12345678-00</span>
                  </div>
                  <div class="flex justify-between">
                    <span class="text-gray-600">Reference:</span>
                    <span class="font-medium text-blue-600"><?php echo $booking_ref; ?></span>
                  </div>
                </div>
                <div class="mt-4 p-3 bg-yellow-50 border-l-4 border-yellow-400">
                  <p class="text-sm text-yellow-800">
                    Please include the reference number in your transfer description and send confirmation to our WhatsApp: +255 123 456 789
                  </p>
                </div>
              </div>
            </div>

            <!-- Pay at Terminal Form -->
            <div id="terminal_form" class="payment-form hidden">
              <div class="bg-yellow-50 p-6 rounded-lg">
                <h4 class="font-semibold text-gray-800 mb-4">Pay at Terminal</h4>
                <div class="space-y-3">
                  <p class="text-sm text-gray-700">
                    Your booking will be reserved for <strong>2 hours</strong>. Please arrive at the terminal at least 30 minutes before departure to complete payment.
                  </p>
                  <div class="bg-white p-4 rounded border-l-4 border-yellow-400">
                    <p class="text-sm"><strong>Important:</strong> Bring your booking reference <span class="font-mono text-blue-600"><?php echo $booking_ref; ?></span> and valid ID.</p>
                  </div>
                  <p class="text-xs text-gray-600">
                    Payment can be made via cash, mobile money, or card at our terminal counter.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Terms and Conditions -->
        <div class="bg-white rounded-xl shadow-sm p-6">
          <div class="flex items-start space-x-3">
            <input type="checkbox" id="termsAccept" class="mt-1 rounded text-blue-600 focus:ring-blue-500">
            <div class="text-sm text-gray-600">
              <label for="termsAccept" class="cursor-pointer">
                I agree to the <a href="terms.php" class="text-blue-600 hover:text-blue-800">Terms and Conditions</a>, 
                <a href="privacy.php" class="text-blue-600 hover:text-blue-800">Privacy Policy</a>, and 
                <a href="refund.php" class="text-blue-600 hover:text-blue-800">Cancellation Policy</a>. 
                I understand that tickets are non-refundable unless cancelled at least 6 hours before departure.
              </label>
            </div>
          </div>
        </div>
      </div>

      <!-- Booking Summary -->
      <div class="lg:col-span-1">
        <div class="bg-white rounded-xl shadow-sm p-6 sticky top-24">
          <h3 class="text-lg font-semibold text-gray-800 mb-6">Booking Summary</h3>
          
          <!-- Route Details -->
          <div class="space-y-4 mb-6">
            <div class="flex items-center space-x-3">
              <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
                </svg>
              </div>
              <div>
                <h4 class="font-semibold text-gray-800"><?php echo $company; ?></h4>
                <p class="text-sm text-gray-600"><?php echo $vehicle; ?> • <?php echo $class; ?></p>
              </div>
            </div>
            
            <div class="bg-gray-50 p-4 rounded-lg space-y-3">
              <div class="flex justify-between text-sm">
                <span class="text-gray-600">Route:</span>
                <span class="font-medium"><?php echo $origin_name; ?> → <?php echo $destination_name; ?></span>
              </div>
              <div class="flex justify-between text-sm">
                <span class="text-gray-600">Date:</span>
                <span class="font-medium"><?php echo $formatted_date; ?></span>
              </div>
              <div class="flex justify-between text-sm">
                <span class="text-gray-600">Departure:</span>
                <span class="font-medium"><?php echo $departure; ?></span>
              </div>
              <div class="flex justify-between text-sm">
                <span class="text-gray-600">Arrival:</span>
                <span class="font-medium"><?php echo $arrival; ?></span>
              </div>
              <div class="flex justify-between text-sm">
                <span class="text-gray-600">Duration:</span>
                <span class="font-medium"><?php echo $duration; ?></span>
              </div>
              <div class="flex justify-between text-sm">
                <span class="text-gray-600">Seats:</span>
                <span class="font-medium"><?php echo implode(', ', $selected_seats); ?></span>
              </div>
            </div>
          </div>

          <!-- Price Breakdown -->
          <div class="space-y-3 mb-6">
            <h4 class="font-semibold text-gray-800">Price Breakdown</h4>
            <div class="space-y-2 text-sm">
              <div class="flex justify-between">
                <span class="text-gray-600">Ticket Price (<?php echo $seat_count; ?> seat<?php echo $seat_count > 1 ? 's' : ''; ?>):</span>
                <span class="font-medium"><?php echo $currency; ?> <?php echo number_format($total_amount); ?></span>
              </div>
              <div class="flex justify-between">
                <span class="text-gray-600">Service Fee (2%):</span>
                <span class="font-medium"><?php echo $currency; ?> <?php echo number_format($service_fee); ?></span>
              </div>
              <div class="flex justify-between">
                <span class="text-gray-600">Insurance (<?php echo $seat_count; ?> passenger<?php echo $seat_count > 1 ? 's' : ''; ?>):</span>
                <span class="font-medium"><?php echo $currency; ?> <?php echo number_format($insurance_fee); ?></span>
              </div>
              <div class="border-t pt-2 mt-2">
                <div class="flex justify-between">
                  <span class="font-semibold text-gray-800">Total Amount:</span>
                  <span class="font-bold text-xl text-blue-600"><?php echo $currency; ?> <?php echo number_format($total_with_fees); ?></span>
                </div>
              </div>
            </div>
          </div>

          <!-- Booking Reference -->
          <div class="bg-blue-50 p-4 rounded-lg mb-6">
            <div class="text-center">
              <p class="text-sm text-blue-800 mb-1">Booking Reference</p>
              <p class="font-mono text-lg font-bold text-blue-600"><?php echo $booking_ref; ?></p>
            </div>
          </div>

          <!-- Complete Booking Button -->
          <button id="completeBooking" class="w-full btn-primary text-white py-3 rounded-lg font-medium disabled:opacity-50 disabled:cursor-not-allowed" disabled>
            <span class="flex items-center justify-center">
              <span id="buttonText">Complete Booking</span>
              <div class="loading-spinner ml-2"></div>
            </span>
          </button>

          <!-- Security Info -->
          <div class="mt-4 text-center">
            <div class="flex items-center justify-center space-x-2 text-xs text-gray-500">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
              </svg>
              <span>Secure SSL Encryption</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Success Modal -->
  <div id="successModal" class="modal">
    <div class="modal-content">
      <div class="bg-green-500 text-white p-6 rounded-t-xl text-center">
        <div class="w-16 h-16 bg-white bg-opacity-20 rounded-full flex items-center justify-center mx-auto mb-4">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
          </svg>
        </div>
        <h2 class="text-2xl font-bold">Booking Confirmed!</h2>
        <p class="mt-2 opacity-90">Your tickets have been successfully booked</p>
      </div>
      
      <div class="p-6">
        <div class="text-center mb-6">
          <div class="inline-block bg-gray-100 px-4 py-2 rounded-lg mb-4">
            <span class="text-sm text-gray-600">Booking Reference</span>
            <div class="font-mono text-lg font-bold text-gray-800"><?php echo $booking_ref; ?></div>
          </div>
          <p class="text-gray-600">Confirmation details have been sent to your email and SMS.</p>
        </div>

        <div class="bg-gray-50 p-4 rounded-lg mb-6">
          <h4 class="font-semibold text-gray-800 mb-3">Important Information:</h4>
          <ul class="text-sm text-gray-600 space-y-2">
            <li class="flex items-start">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mt-0.5 mr-2 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
              </svg>
              Arrive at the terminal 30 minutes before departure
            </li>
            <li class="flex items-start">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mt-0.5 mr-2 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
              </svg>
              Bring valid ID and booking reference
            </li>
            <li class="flex items-start">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mt-0.5 mr-2 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
              </svg>
              Download SwiftRides app to track your bus
            </li>
          </ul>
        </div>

        <div class="flex space-x-3">
          <button onclick="downloadTicket()" class="flex-1 bg-blue-600 text-white py-2 px-4 rounded-lg font-medium hover:bg-blue-700 transition">
            Download Ticket
          </button>
          <button onclick="closeSuccessModal()" class="flex-1 bg-gray-100 text-gray-700 py-2 px-4 rounded-lg font-medium hover:bg-gray-200 transition">
            Close
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="bg-gray-900 text-gray-300 px-6 py-12 mt-16">
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
      <p>&copy; 2025 SwiftRides. All rights reserved.</p>
    </div>
  </footer>

  <script>
    let selectedPaymentMethod = null;
    
    document.addEventListener('DOMContentLoaded', function() {
      // Payment method selection
      const paymentMethods = document.querySelectorAll('.payment-method');
      const paymentForms = document.querySelectorAll('.payment-form');
      const completeBookingBtn = document.getElementById('completeBooking');
      const termsCheckbox = document.getElementById('termsAccept');
      
      paymentMethods.forEach(method => {
        method.addEventListener('click', function() {
          // Remove selected class from all methods
          paymentMethods.forEach(m => m.classList.remove('selected'));
          
          // Add selected class to clicked method
          this.classList.add('selected');
          
          // Hide all payment forms
          paymentForms.forEach(form => form.classList.add('hidden'));
          
          // Show selected payment form
          selectedPaymentMethod = this.dataset.method;
          const selectedForm = document.getElementById(selectedPaymentMethod + '_form');
          if (selectedForm) {
            selectedForm.classList.remove('hidden');
          }
          
          updateBookingButton();
        });
      });
      
      // Terms checkbox
      termsCheckbox.addEventListener('change', updateBookingButton);
      
      function updateBookingButton() {
        const isPaymentSelected = selectedPaymentMethod !== null;
        const isTermsAccepted = termsCheckbox.checked;
        
        completeBookingBtn.disabled = !(isPaymentSelected && isTermsAccepted);
      }
      
      // Complete booking
      completeBookingBtn.addEventListener('click', function() {
        if (this.disabled) return;
        
        // Validate passenger form
        const passengerForm = document.getElementById('passengerForm');
        const requiredFields = passengerForm.querySelectorAll('input[required]');
        let isValid = true;
        
        requiredFields.forEach(field => {
          if (!field.value.trim()) {
            field.style.borderColor = '#ef4444';
            isValid = false;
          } else {
            field.style.borderColor = '#e5e7eb';
          }
        });
        
        if (!isValid) {
          alert('Please fill in all required fields.');
          return;
        }
        
        // Validate payment method specific fields
        if (selectedPaymentMethod !== 'terminal') {
          const currentForm = document.getElementById(selectedPaymentMethod + '_form');
          const formInputs = currentForm.querySelectorAll('input, select');
          
          formInputs.forEach(input => {
            if (input.hasAttribute('required') && !input.value.trim()) {
              input.style.borderColor = '#ef4444';
              isValid = false;
            } else {
              input.style.borderColor = '#e5e7eb';
            }
          });
          
          if (!isValid) {
            alert('Please complete the payment information.');
            return;
          }
        }
        
        // Show loading state
        this.disabled = true;
        document.getElementById('buttonText').textContent = 'Processing...';
        document.querySelector('.loading-spinner').style.display = 'block';
        
        // Simulate payment processing
        setTimeout(() => {
          processPayment();
        }, 3000);
      });
      
      function processPayment() {
        // Hide loading state
        completeBookingBtn.disabled = false;
        document.getElementById('buttonText').textContent = 'Complete Booking';
        document.querySelector('.loading-spinner').style.display = 'none';
        
        // Show success modal
        document.getElementById('successModal').style.display = 'block';
        
        // In a real application, this would:
        // 1. Process the actual payment
        // 2. Send confirmation emails/SMS
        // 3. Update booking database
        // 4. Generate tickets
      }
      
      // Card number formatting
      const cardInput = document.querySelector('#card_form input[placeholder="1234 5678 9012 3456"]');
      if (cardInput) {
        cardInput.addEventListener('input', function() {
          let value = this.value.replace(/\s/g, '');
          let formattedValue = value.replace(/(.{4})/g, '$1 ').trim();
          this.value = formattedValue;
        });
      }
      
      // Expiry date formatting
      const expiryInput = document.querySelector('#card_form input[placeholder="MM/YY"]');
      if (expiryInput) {
        expiryInput.addEventListener('input', function() {
          let value = this.value.replace(/\D/g, '');
          if (value.length >= 2) {
            value = value.substring(0, 2) + '/' + value.substring(2, 4);
          }
          this.value = value;
        });
      }
      
      // Phone number formatting
      const phoneInputs = document.querySelectorAll('input[type="tel"]');
      phoneInputs.forEach(input => {
        input.addEventListener('input', function() {
          let value = this.value.replace(/\D/g, '');
          if (value.startsWith('255')) {
            value = '+' + value;
          } else if (value.startsWith('0')) {
            value = '+255' + value.substring(1);
          } else if (!value.startsWith('+')) {
            value = '+255' + value;
          }
          this.value = value;
        });
      });
    });
    
    function closeSuccessModal() {
      document.getElementById('successModal').style.display = 'none';
      // Redirect to home or booking history
      window.location.href = 'home.php';
    }
    
    function downloadTicket() {
      // In a real application, this would generate and download a PDF ticket
      alert('Ticket download started! Check your downloads folder.');
      
      // Simulate ticket download
      const ticketData = {
        bookingRef: '<?php echo $booking_ref; ?>',
        passenger: 'Main Passenger',
        route: '<?php echo $origin_name; ?> to <?php echo $destination_name; ?>',
        date: '<?php echo $formatted_date; ?>',
        departure: '<?php echo $departure; ?>',
        seats: '<?php echo implode(", ", $selected_seats); ?>',
        company: '<?php echo $company; ?>',
        vehicle: '<?php echo $vehicle; ?>'
      };
      
      console.log('Ticket data:', ticketData);
    }
    
    // Close modal when clicking outside
    window.onclick = function(event) {
      const modal = document.getElementById('successModal');
      if (event.target === modal) {
        closeSuccessModal();
      }
    }
    
    // Auto-select mobile money as default for East African users
    document.addEventListener('DOMContentLoaded', function() {
      const mobileMoney = document.querySelector('.payment-method[data-method="mobile_money"]');
      if (mobileMoney) {
        mobileMoney.click();
      }
    });
  </script>

</body>
</html>