<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Help Center | SwiftRides</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    body { font-family: 'Poppins', sans-serif; }
    .gradient-bg { background: linear-gradient(135deg, #2563eb 0%, #4f46e5 100%); }
    .card-hover { transition: all 0.3s ease; }
    .card-hover:hover { transform: translateY(-5px); box-shadow: 0 15px 30px -10px rgba(0, 0, 0, 0.15); }
  </style>
</head>
<body class="min-h-screen bg-gray-50">

  <!-- Header -->
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
      <a href="register.php" class="bg-blue-600 text-white px-4 py-2 rounded-lg font-medium hover:bg-blue-700 transition">Register</a>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="gradient-bg text-white py-16">
    <div class="max-w-4xl mx-auto px-6 text-center">
      <h1 class="text-4xl md:text-5xl font-bold mb-6">Help Center</h1>
      <p class="text-xl text-blue-100 mb-8">Get the support you need for your SwiftRides journey</p>
      
      <!-- Search Box -->
      <div class="bg-white rounded-xl p-6 max-w-2xl mx-auto">
        <div class="flex items-center space-x-4">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
          </svg>
          <input type="text" placeholder="How can we help you today?" class="flex-1 p-3 text-gray-800 border-0 focus:outline-none text-lg">
          <button class="bg-blue-600 text-white px-6 py-3 rounded-lg font-medium hover:bg-blue-700 transition">Search</button>
        </div>
      </div>
    </div>
  </section>

  <!-- Help Categories -->
  <section class="max-w-6xl mx-auto px-6 py-16">
    <h2 class="text-3xl font-bold text-gray-800 mb-12 text-center">How can we help you?</h2>
    
    <div class="grid md:grid-cols-3 gap-8 mb-16">
      <!-- Booking Help -->
      <div class="bg-white rounded-xl p-8 shadow-sm card-hover">
        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
          </svg>
        </div>
        <h3 class="text-xl font-semibold text-gray-800 mb-4">Booking & Reservations</h3>
        <p class="text-gray-600 mb-6">Get help with booking tickets, seat selection, and managing your reservations.</p>
        <ul class="space-y-2 text-sm text-gray-600 mb-6">
          <li class="flex items-center">
            <span class="w-2 h-2 bg-blue-600 rounded-full mr-3"></span>How to book a ticket online
         </li>
         <li class="flex items-center">
           <span class="w-2 h-2 bg-blue-600 rounded-full mr-3"></span>Seat selection guide
         </li>
         <li class="flex items-center">
           <span class="w-2 h-2 bg-blue-600 rounded-full mr-3"></span>Booking modifications
         </li>
         <li class="flex items-center">
           <span class="w-2 h-2 bg-blue-600 rounded-full mr-3"></span>Group booking assistance
         </li>
       </ul>
       <a href="#booking-section" class="text-blue-600 hover:text-blue-800 font-medium">Learn more →</a>
     </div>

     <!-- Payment Help -->
     <div class="bg-white rounded-xl p-8 shadow-sm card-hover">
       <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-6">
         <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
         </svg>
       </div>
       <h3 class="text-xl font-semibold text-gray-800 mb-4">Payment & Billing</h3>
       <p class="text-gray-600 mb-6">Assistance with payment methods, refunds, and billing inquiries.</p>
       <ul class="space-y-2 text-sm text-gray-600 mb-6">
         <li class="flex items-center">
           <span class="w-2 h-2 bg-green-600 rounded-full mr-3"></span>Payment methods accepted
         </li>
         <li class="flex items-center">
           <span class="w-2 h-2 bg-green-600 rounded-full mr-3"></span>Mobile money payments
         </li>
         <li class="flex items-center">
           <span class="w-2 h-2 bg-green-600 rounded-full mr-3"></span>Refund policy
         </li>
         <li class="flex items-center">
           <span class="w-2 h-2 bg-green-600 rounded-full mr-3"></span>Payment troubleshooting
         </li>
       </ul>
       <a href="#payment-section" class="text-green-600 hover:text-green-800 font-medium">Learn more →</a>
     </div>

     <!-- Travel Help -->
     <div class="bg-white rounded-xl p-8 shadow-sm card-hover">
       <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mb-6">
         <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
         </svg>
       </div>
       <h3 class="text-xl font-semibold text-gray-800 mb-4">Travel Information</h3>
       <p class="text-gray-600 mb-6">Everything you need to know about your journey and travel requirements.</p>
       <ul class="space-y-2 text-sm text-gray-600 mb-6">
         <li class="flex items-center">
           <span class="w-2 h-2 bg-purple-600 rounded-full mr-3"></span>Terminal locations
         </li>
         <li class="flex items-center">
           <span class="w-2 h-2 bg-purple-600 rounded-full mr-3"></span>Baggage allowances
         </li>
         <li class="flex items-center">
           <span class="w-2 h-2 bg-purple-600 rounded-full mr-3"></span>Travel documents required
         </li>
         <li class="flex items-center">
           <span class="w-2 h-2 bg-purple-600 rounded-full mr-3"></span>Border crossing procedures
         </li>
       </ul>
       <a href="#travel-section" class="text-purple-600 hover:text-purple-800 font-medium">Learn more →</a>
     </div>
   </div>

   <!-- Quick Actions -->
   <div class="bg-gradient-to-r from-blue-50 to-indigo-100 rounded-xl p-8">
     <h3 class="text-2xl font-bold text-gray-800 mb-6 text-center">Quick Actions</h3>
     <div class="grid md:grid-cols-4 gap-4">
       <a href="search.php" class="bg-white p-4 rounded-lg text-center hover:shadow-md transition">
         <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600 mx-auto mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
         </svg>
         <p class="font-medium text-gray-800">Book a Ticket</p>
       </a>
       <a href="#" class="bg-white p-4 rounded-lg text-center hover:shadow-md transition">
         <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-600 mx-auto mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
         </svg>
         <p class="font-medium text-gray-800">Track Booking</p>
       </a>
       <a href="contact.php" class="bg-white p-4 rounded-lg text-center hover:shadow-md transition">
         <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-purple-600 mx-auto mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
         </svg>
         <p class="font-medium text-gray-800">Live Chat</p>
       </a>
       <a href="tel:+255123456789" class="bg-white p-4 rounded-lg text-center hover:shadow-md transition">
         <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-red-600 mx-auto mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
         </svg>
         <p class="font-medium text-gray-800">Call Support</p>
       </a>
     </div>
   </div>
 </section>

 <!-- Detailed Help Sections -->
 <section class="bg-white py-16">
   <div class="max-w-4xl mx-auto px-6">
     
     <!-- Booking Section -->
     <div id="booking-section" class="mb-16">
       <h2 class="text-3xl font-bold text-gray-800 mb-8">Booking & Reservations</h2>
       
       <div class="space-y-8">
         <div class="bg-gray-50 rounded-xl p-6">
           <h3 class="text-xl font-semibold text-gray-800 mb-4">How to Book a Ticket Online</h3>
           <ol class="list-decimal list-inside space-y-2 text-gray-600">
             <li>Visit our website and select your departure and destination cities</li>
             <li>Choose your preferred travel date</li>
             <li>Browse available routes and select your preferred bus service</li>
             <li>Choose your seats from the interactive seat map</li>
             <li>Enter passenger information for all travelers</li>
             <li>Select your payment method and complete the transaction</li>
             <li>Receive confirmation via email and SMS</li>
           </ol>
         </div>

         <div class="bg-gray-50 rounded-xl p-6">
           <h3 class="text-xl font-semibold text-gray-800 mb-4">Seat Selection Guide</h3>
           <div class="grid md:grid-cols-2 gap-6">
             <div>
               <h4 class="font-medium text-gray-800 mb-2">Best Seats for Comfort:</h4>
               <ul class="list-disc list-inside text-gray-600 space-y-1">
                 <li>Front seats (1-4) for extra legroom</li>
                 <li>Aisle seats for easy movement</li>
                 <li>Middle section for smoother ride</li>
               </ul>
             </div>
             <div>
               <h4 class="font-medium text-gray-800 mb-2">Avoid if Possible:</h4>
               <ul class="list-disc list-inside text-gray-600 space-y-1">
                 <li>Back seats (more bumpy)</li>
                 <li>Seats near restroom</li>
                 <li>Seats without reclining feature</li>
               </ul>
             </div>
           </div>
         </div>

         <div class="bg-gray-50 rounded-xl p-6">
           <h3 class="text-xl font-semibold text-gray-800 mb-4">Booking Modifications</h3>
           <p class="text-gray-600 mb-4">You can modify your booking under the following conditions:</p>
           <ul class="list-disc list-inside text-gray-600 space-y-1">
             <li><strong>Date Changes:</strong> Up to 2 hours before departure (TZS 5,000 fee)</li>
             <li><strong>Time Changes:</strong> Subject to availability on same day</li>
             <li><strong>Name Changes:</strong> Minor corrections allowed up to 6 hours before</li>
             <li><strong>Cancellations:</strong> Up to 6 hours before departure (15% deduction)</li>
           </ul>
         </div>
       </div>
     </div>

     <!-- Payment Section -->
     <div id="payment-section" class="mb-16">
       <h2 class="text-3xl font-bold text-gray-800 mb-8">Payment & Billing</h2>
       
       <div class="space-y-8">
         <div class="bg-gray-50 rounded-xl p-6">
           <h3 class="text-xl font-semibold text-gray-800 mb-4">Accepted Payment Methods</h3>
           <div class="grid md:grid-cols-2 gap-6">
             <div>
               <h4 class="font-medium text-gray-800 mb-3">Mobile Money</h4>
               <ul class="space-y-2 text-gray-600">
                 <li class="flex items-center">
                   <span class="w-2 h-2 bg-green-500 rounded-full mr-3"></span>M-Pesa (Vodacom)
                 </li>
                 <li class="flex items-center">
                   <span class="w-2 h-2 bg-blue-500 rounded-full mr-3"></span>Tigo Pesa
                 </li>
                 <li class="flex items-center">
                   <span class="w-2 h-2 bg-red-500 rounded-full mr-3"></span>Airtel Money
                 </li>
                 <li class="flex items-center">
                   <span class="w-2 h-2 bg-purple-500 rounded-full mr-3"></span>HaloPesa
                 </li>
               </ul>
             </div>
             <div>
               <h4 class="font-medium text-gray-800 mb-3">Other Methods</h4>
               <ul class="space-y-2 text-gray-600">
                 <li class="flex items-center">
                   <span class="w-2 h-2 bg-blue-600 rounded-full mr-3"></span>Visa/Mastercard
                 </li>
                 <li class="flex items-center">
                   <span class="w-2 h-2 bg-green-600 rounded-full mr-3"></span>Bank Transfer
                 </li>
                 <li class="flex items-center">
                   <span class="w-2 h-2 bg-yellow-600 rounded-full mr-3"></span>Pay at Terminal
                 </li>
               </ul>
             </div>
           </div>
         </div>

         <div class="bg-gray-50 rounded-xl p-6">
           <h3 class="text-xl font-semibold text-gray-800 mb-4">Payment Troubleshooting</h3>
           <div class="space-y-4">
             <div>
               <h4 class="font-medium text-gray-800 mb-2">Payment Failed?</h4>
               <ul class="list-disc list-inside text-gray-600 space-y-1">
                 <li>Check your account balance or credit limit</li>
                 <li>Ensure you have network connectivity</li>
                 <li>Verify card details are entered correctly</li>
                 <li>Try a different payment method</li>
                 <li>Contact your bank if problem persists</li>
               </ul>
             </div>
             <div>
               <h4 class="font-medium text-gray-800 mb-2">Double Charge?</h4>
               <p class="text-gray-600">If you were charged twice, one charge will be automatically reversed within 3-5 business days. Contact support if this doesn't happen.</p>
             </div>
           </div>
         </div>
       </div>
     </div>

     <!-- Travel Section -->
     <div id="travel-section">
       <h2 class="text-3xl font-bold text-gray-800 mb-8">Travel Information</h2>
       
       <div class="space-y-8">
         <div class="bg-gray-50 rounded-xl p-6">
           <h3 class="text-xl font-semibold text-gray-800 mb-4">Required Travel Documents</h3>
           <div class="grid md:grid-cols-2 gap-6">
             <div>
               <h4 class="font-medium text-gray-800 mb-3">Domestic Travel (within Tanzania)</h4>
               <ul class="list-disc list-inside text-gray-600 space-y-1">
                 <li>National ID or Voter's ID</li>
                 <li>Driving License (if available)</li>
                 <li>Passport (alternative)</li>
                 <li>Student ID (for students)</li>
               </ul>
             </div>
             <div>
               <h4 class="font-medium text-gray-800 mb-3">International Travel</h4>
               <ul class="list-disc list-inside text-gray-600 space-y-1">
                 <li>Valid passport</li>
                 <li>Visa (if required)</li>
                 <li>Yellow fever certificate</li>
                 <li>COVID-19 vaccination card</li>
               </ul>
             </div>
           </div>
         </div>

         <div class="bg-gray-50 rounded-xl p-6">
           <h3 class="text-xl font-semibold text-gray-800 mb-4">Baggage Policy</h3>
           <div class="overflow-x-auto">
             <table class="w-full text-sm">
               <thead>
                 <tr class="bg-gray-200">
                   <th class="text-left p-3 font-medium">Item</th>
                   <th class="text-left p-3 font-medium">Economy</th>
                   <th class="text-left p-3 font-medium">Business</th>
                   <th class="text-left p-3 font-medium">VIP</th>
                 </tr>
               </thead>
               <tbody class="text-gray-600">
                 <tr class="border-b">
                   <td class="p-3">Main Luggage</td>
                   <td class="p-3">20kg</td>
                   <td class="p-3">25kg</td>
                   <td class="p-3">30kg</td>
                 </tr>
                 <tr class="border-b">
                   <td class="p-3">Hand Luggage</td>
                   <td class="p-3">5kg</td>
                   <td class="p-3">7kg</td>
                   <td class="p-3">10kg</td>
                 </tr>
                 <tr>
                   <td class="p-3">Personal Items</td>
                   <td class="p-3">Small bag/laptop</td>
                   <td class="p-3">Small bag/laptop</td>
                   <td class="p-3">Small bag/laptop</td>
                 </tr>
               </tbody>
             </table>
           </div>
           <p class="text-sm text-gray-600 mt-4"><strong>Excess Baggage:</strong> TZS 2,000 per kg over limit</p>
         </div>

         <div class="bg-gray-50 rounded-xl p-6">
           <h3 class="text-xl font-semibold text-gray-800 mb-4">Terminal Information</h3>
           <div class="space-y-4">
             <div>
               <h4 class="font-medium text-gray-800 mb-2">Departure Guidelines</h4>
               <ul class="list-disc list-inside text-gray-600 space-y-1">
                 <li>Arrive 30 minutes early for domestic routes</li>
                 <li>Arrive 60 minutes early for international routes</li>
                 <li>Check-in closes 15 minutes before departure</li>
                 <li>Bring printed or mobile ticket</li>
               </ul>
             </div>
             <div>
               <h4 class="font-medium text-gray-800 mb-2">Terminal Facilities</h4>
               <ul class="list-disc list-inside text-gray-600 space-y-1">
                 <li>Waiting areas with seating</li>
                 <li>Restrooms and baby changing facilities</li>
                 <li>Food courts and shops</li>
                 <li>Free WiFi in most terminals</li>
                 <li>Prayer rooms and medical facilities</li>
               </ul>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>

 <!-- Contact Support -->
 <section class="bg-blue-50 py-16">
   <div class="max-w-4xl mx-auto px-6 text-center">
     <h2 class="text-3xl font-bold text-gray-800 mb-6">Still Need Help?</h2>
     <p class="text-gray-600 mb-8">Our customer support team is available 24/7 to assist you</p>
     
     <div class="grid md:grid-cols-3 gap-6">
       <div class="bg-white rounded-xl p-6">
         <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600 mx-auto mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
         </svg>
         <h3 class="font-semibold text-gray-800 mb-2">Call Us</h3>
         <p class="text-gray-600 text-sm mb-4">24/7 phone support</p>
         <a href="tel:+255123456789" class="text-blue-600 hover:text-blue-800 font-medium">+255 123 456 789</a>
       </div>
       
       <div class="bg-white rounded-xl p-6">
         <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-600 mx-auto mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
         </svg>
         <h3 class="font-semibold text-gray-800 mb-2">Live Chat</h3>
         <p class="text-gray-600 text-sm mb-4">Instant messaging support</p>
         <button class="text-green-600 hover:text-green-800 font-medium">Start Chat</button>
       </div>
       
       <div class="bg-white rounded-xl p-6">
         <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-purple-600 mx-auto mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
         </svg>
         <h3 class="font-semibold text-gray-800 mb-2">Email Us</h3>
         <p class="text-gray-600 text-sm mb-4">Response within 2 hours</p>
         <a href="mailto:support@swiftrides.co.tz" class="text-purple-600 hover:text-purple-800 font-medium">support@swiftrides.co.tz</a>
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
       <p class="mb-4">Premium transport services across East Africa.</p>
     </div>
     <div>
       <h4 class="text-lg font-semibold text-white mb-4">Support</h4>
       <ul class="space-y-2">
         <li><a href="faqs.php" class="hover:text-white transition">FAQs</a></li>
         <li><a href="help-center.php" class="text-blue-400 hover:text-white transition">Help Center</a></li>
         <li><a href="terms.php" class="hover:text-white transition">Terms of Service</a></li>
         <li><a href="privacy.php" class="hover:text-white transition">Privacy Policy</a></li>
       </ul>
     </div>
     <div>
       <h4 class="text-lg font-semibold text-white mb-4">Contact</h4>
       <p class="text-sm">+255 123 456 789</p>
       <p class="text-sm">support@swiftrides.co.tz</p>
     </div>
     <div>
       <h4 class="text-lg font-semibold text-white mb-4">Follow Us</h4>
       <div class="flex space-x-4">
         <a href="#" class="text-gray-400 hover:text-white transition">Facebook</a>
         <a href="#" class="text-gray-400 hover:text-white transition">Twitter</a>
         <a href="#" class="text-gray-400 hover:text-white transition">Instagram</a>
       </div>
     </div>
   </div>
 </footer>

</body>
</html>