<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Refund Policy | SwiftRides</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    body { font-family: 'Poppins', sans-serif; }
    .gradient-bg { background: linear-gradient(135deg, #2563eb 0%, #4f46e5 100%); }
    .section-number { background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%); }
    .refund-table { overflow-x: auto; }
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
      <h1 class="text-4xl md:text-5xl font-bold mb-6">Refund Policy</h1>
      <p class="text-xl text-blue-100 mb-4">Last updated: January 15, 2025</p>
      <p class="text-lg text-blue-200">Understand our refund and cancellation policies for peace of mind</p>
    </div>
  </section>

  <!-- Refund Content -->
  <section class="max-w-4xl mx-auto px-6 py-16">
    
    <!-- Introduction -->
    <div class="bg-white rounded-xl p-8 shadow-sm mb-8">
      <h2 class="text-2xl font-bold text-gray-800 mb-6">Overview</h2>
      <p class="text-gray-600 mb-4">
        At SwiftRides, we understand that travel plans can change. This Refund Policy outlines the terms and conditions for cancellations and refunds of tickets purchased through our platform.
      </p>
      <p class="text-gray-600 mb-4">
        We strive to be fair and transparent in our refund policies while balancing the operational requirements of our transportation partners and the need to maintain service quality.
      </p>
      <div class="bg-blue-50 border-l-4 border-blue-400 p-4">
        <p class="text-blue-800"><strong>Important:</strong> This policy applies to all bookings made through SwiftRides. Third-party bookings may be subject to different terms.</p>
      </div>
    </div>

    <!-- Section 1: Cancellation Policy -->
    <div class="bg-white rounded-xl p-8 shadow-sm mb-8">
      <div class="flex items-start space-x-4 mb-6">
        <div class="section-number text-white text-lg font-bold w-10 h-10 rounded-full flex items-center justify-center">1</div>
        <h2 class="text-2xl font-bold text-gray-800">Cancellation Policy</h2>
      </div>
      
      <div class="space-y-6">
        <div class="refund-table">
          <h3 class="text-lg font-semibold text-gray-800 mb-4">Refund Schedule Based on Cancellation Time</h3>
          <div class="overflow-x-auto">
            <table class="w-full border-collapse border border-gray-300">
              <thead>
                <tr class="bg-gray-100">
                  <th class="border border-gray-300 p-3 text-left font-semibold">Cancellation Time</th>
                  <th class="border border-gray-300 p-3 text-left font-semibold">Refund Percentage</th>
                  <th class="border border-gray-300 p-3 text-left font-semibold">Processing Time</th>
                  <th class="border border-gray-300 p-3 text-left font-semibold">Applicable Fees</th>
                </tr>
              </thead>
              <tbody class="text-gray-600">
                <tr>
                  <td class="border border-gray-300 p-3">More than 24 hours before departure</td>
                  <td class="border border-gray-300 p-3 text-green-600 font-semibold">90% refund</td>
                  <td class="border border-gray-300 p-3">3-5 business days</td>
                  <td class="border border-gray-300 p-3">10% cancellation fee</td>
                </tr>
                <tr class="bg-gray-50">
                  <td class="border border-gray-300 p-3">6-24 hours before departure</td>
                  <td class="border border-gray-300 p-3 text-yellow-600 font-semibold">85% refund</td>
                  <td class="border border-gray-300 p-3">3-5 business days</td>
                  <td class="border border-gray-300 p-3">15% cancellation fee</td>
                </tr>
                <tr>
                  <td class="border border-gray-300 p-3">2-6 hours before departure</td>
                  <td class="border border-gray-300 p-3 text-orange-600 font-semibold">50% refund</td>
                  <td class="border border-gray-300 p-3">5-7 business days</td>
                  <td class="border border-gray-300 p-3">50% cancellation fee</td>
                </tr>
                <tr class="bg-gray-50">
                  <td class="border border-gray-300 p-3">Less than 2 hours before departure</td>
                  <td class="border border-gray-300 p-3 text-red-600 font-semibold">No refund</td>
                  <td class="border border-gray-300 p-3">N/A</td>
                  <td class="border border-gray-300 p-3">100% forfeiture</td>
                </tr>
                <tr>
                  <td class="border border-gray-300 p-3">After departure (No-show)</td>
                  <td class="border border-gray-300 p-3 text-red-600 font-semibold">No refund</td>
                  <td class="border border-gray-300 p-3">N/A</td>
                  <td class="border border-gray-300 p-3">100% forfeiture</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4">
          <h4 class="font-semibold text-yellow-800 mb-2">Special Considerations:</h4>
          <ul class="list-disc list-inside text-yellow-700 space-y-1">
            <li>VIP and Sleeper class tickets may have different cancellation terms</li>
            <li>Group bookings (5+ passengers) may require 48-hour advance notice</li>
            <li>International route cancellations may take longer to process</li>
            <li>Peak season bookings may have stricter cancellation policies</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Section 2: Refund Process -->
    <div class="bg-white rounded-xl p-8 shadow-sm mb-8">
      <div class="flex items-start space-x-4 mb-6">
        <div class="section-number text-white text-lg font-bold w-10 h-10 rounded-full flex items-center justify-center">2</div>
        <h2 class="text-2xl font-bold text-gray-800">How to Request a Refund</h2>
      </div>
      
      <div class="space-y-6">
        <div>
          <h3 class="text-lg font-semibold text-gray-800 mb-4">Step-by-Step Process:</h3>
          <div class="space-y-4">
            <div class="flex items-start space-x-4">
              <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                <span class="text-blue-600 font-semibold text-sm">1</span>
              </div>
              <div>
                <h4 class="font-medium text-gray-800">Access Your Booking</h4>
                <p class="text-gray-600">Log into your SwiftRides account or use your booking reference number to access your reservation.</p>
              </div>
            </div>
            
            <div class="flex items-start space-x-4">
              <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                <span class="text-blue-600 font-semibold text-sm">2</span>
              </div>
              <div>
                <h4 class="font-medium text-gray-800">Select Cancel Booking</h4>
                <p class="text-gray-600">Click on the "Cancel Booking" button and follow the prompts to initiate the cancellation process.</p>
              </div>
            </div>
            
            <div class="flex items-start space-x-4">
              <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                <span class="text-blue-600 font-semibold text-sm">3</span>
              </div>
              <div>
                <h4 class="font-medium text-gray-800">Review Refund Amount</h4>
                <p class="text-gray-600">The system will calculate your refund amount based on the cancellation time and display applicable fees.</p>
              </div>
            </div>
            
            <div class="flex items-start space-x-4">
              <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                <span class="text-blue-600 font-semibold text-sm">4</span>
              </div>
              <div>
                <h4 class="font-medium text-gray-800">Confirm Cancellation</h4>
                <p class="text-gray-600">Confirm your cancellation request and provide any required reason for cancellation.</p>
              </div>
            </div>
            
            <div class="flex items-start space-x-4">
              <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                <span class="text-blue-600 font-semibold text-sm">5</span>
              </div>
              <div>
                <h4 class="font-medium text-gray-800">Receive Confirmation</h4>
                <p class="text-gray-600">You'll receive an email confirmation with your cancellation details and expected refund timeline.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="bg-gray-50 rounded-lg p-6"><h4 class="font-semibold text-gray-800 mb-3">Alternative Refund Methods:</h4>
         <ul class="space-y-2 text-gray-600">
           <li class="flex items-center">
             <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
             </svg>
             <strong>Phone:</strong> Call +255 123 456 789 and speak with our customer service team
           </li>
           <li class="flex items-center">
             <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
             </svg>
             <strong>Email:</strong> Send cancellation request to refunds@swiftrides.co.tz
           </li>
           <li class="flex items-center">
             <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-purple-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
             </svg>
             <strong>In-Person:</strong> Visit any SwiftRides terminal with your booking confirmation
           </li>
         </ul>
       </div>
     </div>
   </div>

   <!-- Section 3: Refund Methods -->
   <div class="bg-white rounded-xl p-8 shadow-sm mb-8">
     <div class="flex items-start space-x-4 mb-6">
       <div class="section-number text-white text-lg font-bold w-10 h-10 rounded-full flex items-center justify-center">3</div>
       <h2 class="text-2xl font-bold text-gray-800">Refund Methods & Processing Times</h2>
     </div>
     
     <div class="space-y-6">
       <div class="grid md:grid-cols-2 gap-6">
         <div class="bg-green-50 border border-green-200 rounded-lg p-6">
           <h3 class="font-semibold text-green-800 mb-3">Original Payment Method</h3>
           <ul class="space-y-2 text-green-700">
             <li><strong>Mobile Money:</strong> 1-3 business days</li>
             <li><strong>Credit/Debit Card:</strong> 3-7 business days</li>
             <li><strong>Bank Transfer:</strong> 3-5 business days</li>
           </ul>
           <p class="text-sm text-green-600 mt-3">Refunds are processed to the original payment method by default.</p>
         </div>
         
         <div class="bg-blue-50 border border-blue-200 rounded-lg p-6">
           <h3 class="font-semibold text-blue-800 mb-3">Alternative Methods</h3>
           <ul class="space-y-2 text-blue-700">
             <li><strong>SwiftRides Credit:</strong> Instant (24/7)</li>
             <li><strong>Bank Check:</strong> 7-10 business days</li>
             <li><strong>Cash (Terminal):</strong> 1-2 business days</li>
           </ul>
           <p class="text-sm text-blue-600 mt-3">Available upon request with valid reasons.</p>
         </div>
       </div>

       <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4">
         <h4 class="font-semibold text-yellow-800 mb-2">Processing Time Factors:</h4>
         <ul class="list-disc list-inside text-yellow-700 space-y-1">
           <li>Bank processing times may vary by financial institution</li>
           <li>International transfers may take 5-10 business days</li>
           <li>Weekends and public holidays may extend processing times</li>
           <li>Additional verification may be required for large refunds</li>
         </ul>
       </div>
     </div>
   </div>

   <!-- Section 4: Special Circumstances -->
   <div class="bg-white rounded-xl p-8 shadow-sm mb-8">
     <div class="flex items-start space-x-4 mb-6">
       <div class="section-number text-white text-lg font-bold w-10 h-10 rounded-full flex items-center justify-center">4</div>
       <h2 class="text-2xl font-bold text-gray-800">Special Circumstances</h2>
     </div>
     
     <div class="space-y-6">
       <div>
         <h3 class="text-lg font-semibold text-gray-800 mb-4">Cancellations by SwiftRides</h3>
         <div class="bg-gray-50 rounded-lg p-4">
           <h4 class="font-medium text-gray-800 mb-2">We may cancel services due to:</h4>
           <ul class="list-disc list-inside text-gray-600 space-y-1 mb-4">
             <li>Mechanical problems or safety concerns</li>
             <li>Severe weather conditions</li>
             <li>Road closures or government restrictions</li>
             <li>Insufficient passenger bookings</li>
             <li>Strike or labor disputes</li>
           </ul>
           
           <div class="bg-green-100 border border-green-300 rounded p-3">
             <p class="text-green-800"><strong>In these cases, you are entitled to:</strong></p>
             <ul class="list-disc list-inside text-green-700 mt-2 space-y-1">
               <li>Full refund (100%) with no cancellation fees</li>
               <li>Free rebooking to next available service</li>
               <li>Alternative transportation arrangement (if available)</li>
               <li>Compensation for reasonable expenses (case-by-case basis)</li>
             </ul>
           </div>
         </div>
       </div>

       <div>
         <h3 class="text-lg font-semibold text-gray-800 mb-4">Medical Emergency Cancellations</h3>
         <div class="bg-red-50 border border-red-200 rounded-lg p-4">
           <p class="text-red-800 mb-3">We understand that medical emergencies can disrupt travel plans.</p>
           <div class="space-y-2 text-red-700">
             <p><strong>Requirements for medical emergency refunds:</strong></p>
             <ul class="list-disc list-inside ml-4 space-y-1">
               <li>Medical certificate from licensed healthcare provider</li>
               <li>Cancellation request within 24 hours of medical incident</li>
               <li>Valid booking confirmation and passenger identification</li>
             </ul>
             <p class="mt-3"><strong>Benefit:</strong> Up to 95% refund regardless of cancellation timing</p>
           </div>
         </div>
       </div>

       <div>
         <h3 class="text-lg font-semibold text-gray-800 mb-4">Death in Family</h3>
         <div class="bg-gray-100 border border-gray-300 rounded-lg p-4">
           <p class="text-gray-800 mb-3">We offer compassionate consideration for bereavement situations.</p>
           <div class="space-y-2 text-gray-700">
             <p><strong>Required documentation:</strong></p>
             <ul class="list-disc list-inside ml-4 space-y-1">
               <li>Death certificate or hospital documentation</li>
               <li>Proof of relationship to deceased</li>
               <li>Valid identification</li>
             </ul>
             <p class="mt-3"><strong>Benefit:</strong> Full refund (100%) or free rebooking within 30 days</p>
           </div>
         </div>
       </div>

       <div>
         <h3 class="text-lg font-semibold text-gray-800 mb-4">Force Majeure Events</h3>
         <div class="bg-orange-50 border border-orange-200 rounded-lg p-4">
           <p class="text-orange-800 mb-3">Circumstances beyond anyone's control may affect travel plans.</p>
           <div class="space-y-2 text-orange-700">
             <p><strong>Force majeure events include:</strong></p>
             <ul class="list-disc list-inside ml-4 space-y-1">
               <li>Natural disasters (earthquakes, floods, hurricanes)</li>
               <li>Government travel restrictions or border closures</li>
               <li>Terrorist incidents or civil unrest</li>
               <li>Pandemic-related travel bans</li>
             </ul>
             <p class="mt-3"><strong>Policy:</strong> Full refund or credit for future travel (valid 12 months)</p>
           </div>
         </div>
       </div>
     </div>
   </div>

   <!-- Section 5: Modification Policy -->
   <div class="bg-white rounded-xl p-8 shadow-sm mb-8">
     <div class="flex items-start space-x-4 mb-6">
       <div class="section-number text-white text-lg font-bold w-10 h-10 rounded-full flex items-center justify-center">5</div>
       <h2 class="text-2xl font-bold text-gray-800">Booking Modifications</h2>
     </div>
     
     <div class="space-y-6">
       <p class="text-gray-600">Sometimes you may need to change your travel plans rather than cancel entirely. We offer flexible modification options:</p>
       
       <div class="overflow-x-auto">
         <table class="w-full border-collapse border border-gray-300">
           <thead>
             <tr class="bg-blue-100">
               <th class="border border-gray-300 p-3 text-left font-semibold">Modification Type</th>
               <th class="border border-gray-300 p-3 text-left font-semibold">Time Limit</th>
               <th class="border border-gray-300 p-3 text-left font-semibold">Fee</th>
               <th class="border border-gray-300 p-3 text-left font-semibold">Conditions</th>
             </tr>
           </thead>
           <tbody class="text-gray-600">
             <tr>
               <td class="border border-gray-300 p-3">Date Change</td>
               <td class="border border-gray-300 p-3">Up to 2 hours before</td>
               <td class="border border-gray-300 p-3">TZS 5,000</td>
               <td class="border border-gray-300 p-3">Subject to availability</td>
             </tr>
             <tr class="bg-gray-50">
               <td class="border border-gray-300 p-3">Time Change (Same Day)</td>
               <td class="border border-gray-300 p-3">Up to 1 hour before</td>
               <td class="border border-gray-300 p-3">TZS 2,000</td>
               <td class="border border-gray-300 p-3">Space permitting</td>
             </tr>
             <tr>
               <td class="border border-gray-300 p-3">Name Correction</td>
               <td class="border border-gray-300 p-3">Up to 6 hours before</td>
               <td class="border border-gray-300 p-3">TZS 1,000</td>
               <td class="border border-gray-300 p-3">Minor corrections only</td>
             </tr>
             <tr class="bg-gray-50">
               <td class="border border-gray-300 p-3">Seat Change</td>
               <td class="border border-gray-300 p-3">Up to 30 minutes before</td>
               <td class="border border-gray-300 p-3">Free</td>
               <td class="border border-gray-300 p-3">Same class only</td>
             </tr>
             <tr>
               <td class="border border-gray-300 p-3">Route Change</td>
               <td class="border border-gray-300 p-3">Up to 24 hours before</td>
               <td class="border border-gray-300 p-3">Price difference + TZS 5,000</td>
               <td class="border border-gray-300 p-3">Similar route distance</td>
             </tr>
           </tbody>
         </table>
       </div>

       <div class="bg-blue-50 border-l-4 border-blue-400 p-4">
         <p class="text-blue-800"><strong>Tip:</strong> Modifications are often more cost-effective than cancellations. Consider changing your booking instead of cancelling if your plans are flexible.</p>
       </div>
     </div>
   </div>

   <!-- Section 6: Non-Refundable Items -->
   <div class="bg-white rounded-xl p-8 shadow-sm mb-8">
     <div class="flex items-start space-x-4 mb-6">
       <div class="section-number text-white text-lg font-bold w-10 h-10 rounded-full flex items-center justify-center">6</div>
       <h2 class="text-2xl font-bold text-gray-800">Non-Refundable Items & Fees</h2>
     </div>
     
     <div class="space-y-4">
       <p class="text-gray-600">The following fees and charges are non-refundable under all circumstances:</p>
       
       <div class="grid md:grid-cols-2 gap-6">
         <div class="bg-red-50 border border-red-200 rounded-lg p-4">
           <h4 class="font-semibold text-red-800 mb-3">Always Non-Refundable:</h4>
           <ul class="space-y-1 text-red-700">
             <li>• Service and booking fees</li>
             <li>• Payment processing charges</li>
             <li>• Insurance premiums</li>
             <li>• Third-party addon services</li>
             <li>• Promotional discount amounts</li>
           </ul>
         </div>
         
         <div class="bg-orange-50 border border-orange-200 rounded-lg p-4">
           <h4 class="font-semibold text-orange-800 mb-3">Conditionally Non-Refundable:</h4>
           <ul class="space-y-1 text-orange-700">
             <li>• Special event transportation</li>
             <li>• Charter or group bookings</li>
             <li>• Promotional fare tickets</li>
             <li>• Last-minute bookings (&lt;6 hours)</li>
             <li>• Peak season surcharges</li>
           </ul>
         </div>
       </div>
     </div>
   </div>

   <!-- Section 7: Dispute Resolution -->
   <div class="bg-white rounded-xl p-8 shadow-sm mb-8">
     <div class="flex items-start space-x-4 mb-6">
       <div class="section-number text-white text-lg font-bold w-10 h-10 rounded-full flex items-center justify-center">7</div>
       <h2 class="text-2xl font-bold text-gray-800">Refund Disputes & Appeals</h2>
     </div>
     
     <div class="space-y-6">
       <p class="text-gray-600">If you disagree with a refund decision, you have the right to appeal:</p>
       
       <div class="space-y-4">
         <div class="flex items-start space-x-4">
           <div class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center flex-shrink-0">
             <span class="text-purple-600 font-semibold text-sm">1</span>
           </div>
           <div>
             <h4 class="font-medium text-gray-800">Initial Review</h4>
             <p class="text-gray-600">Contact our customer service team within 7 days of the refund decision with your concerns and supporting documentation.</p>
           </div>
         </div>
         
         <div class="flex items-start space-x-4">
           <div class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center flex-shrink-0">
             <span class="text-purple-600 font-semibold text-sm">2</span>
           </div>
           <div>
             <h4 class="font-medium text-gray-800">Management Review</h4>
             <p class="text-gray-600">If unsatisfied with the initial response, request escalation to management level for further review.</p>
           </div>
         </div>
         
         <div class="flex items-start space-x-4">
           <div class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center flex-shrink-0">
             <span class="text-purple-600 font-semibold text-sm">3</span>
           </div>
           <div>
             <h4 class="font-medium text-gray-800">External Mediation</h4>
             <p class="text-gray-600">For unresolved disputes, we participate in third-party mediation services or industry ombudsman programs.</p>
           </div>
         </div>
       </div>

       <div class="bg-gray-50 rounded-lg p-4">
         <h4 class="font-semibold text-gray-800 mb-2">Appeal Documentation Required:</h4>
         <ul class="list-disc list-inside text-gray-600 space-y-1">
           <li>Original booking confirmation</li>
           <li>Cancellation request details</li>
           <li>Any relevant supporting documents</li>
           <li>Clear explanation of dispute reasons</li>
           <li>Preferred resolution outcome</li>
         </ul>
       </div>
     </div>
   </div>

   <!-- Contact Information -->
   <div class="bg-orange-50 rounded-xl p-8">
     <h3 class="text-xl font-bold text-gray-800 mb-4">Need Help with Refunds?</h3>
     <p class="text-gray-600 mb-6">Our dedicated refunds team is here to assist you with any questions or concerns about our refund policy.</p>
     
     <div class="grid md:grid-cols-2 gap-6">
       <div class="bg-white rounded-lg p-4">
         <h4 class="font-semibold text-gray-800 mb-3">Refunds Department</h4>
         <div class="space-y-2 text-gray-600">
           <p class="flex items-center">
             <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
             </svg>
             refunds@swiftrides.co.tz
           </p>
           <p class="flex items-center">
             <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
             </svg>
             +255 123 456 789 (Ext. 2)
           </p>
           <p class="text-sm text-gray-500">Available 24/7 for refund inquiries</p>
         </div>
       </div>
       
       <div class="bg-white rounded-lg p-4">
         <h4 class="font-semibold text-gray-800 mb-3">Processing Times</h4>
         <div class="space-y-2 text-gray-600">
           <p><strong>Email Response:</strong> Within 4 hours</p>
           <p><strong>Phone Support:</strong> Immediate assistance</p>
           <p><strong>Refund Processing:</strong> 1-10 business days</p>
           <p><strong>Dispute Resolution:</strong> 5-15 business days</p>
         </div>
       </div>
     </div>
     
     <div class="mt-6 bg-white rounded-lg p-4">
       <h4 class="font-semibold text-gray-800 mb-2">Quick Refund Tracker:</h4>
       <p class="text-gray-600 mb-3">Track your refund status online using your booking reference:</p>
       <div class="flex space-x-2">
         <input type="text" placeholder="Enter booking reference" class="flex-1 p-2 border border-gray-300 rounded">
         <button class="bg-blue-600 text-white px-4 py-2 rounded font-medium hover:bg-blue-700 transition">Track Refund</button>
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
       <h4 class="text-lg font-semibold text-white mb-4">Legal</h4>
       <ul class="space-y-2">
         <li><a href="terms.php" class="hover:text-white transition">Terms of Service</a></li>
         <li><a href="privacy.php" class="hover:text-white transition">Privacy Policy</a></li>
         <li><a href="refund.php" class="text-blue-400 hover:text-white transition">Refund Policy</a></li>
       </ul>
     </div>
     <div>
       <h4 class="text-lg font-semibold text-white mb-4">Support</h4>
       <ul class="space-y-2">
         <li><a href="faqs.php" class="hover:text-white transition">FAQs</a></li>
         <li><a href="help-center.php" class="hover:text-white transition">Help Center</a></li>
         <li><a href="contact.php" class="hover:text-white transition">Contact Us</a></li>
       </ul>
     </div>
     <div>
       <h4 class="text-lg font-semibold text-white mb-4">Contact</h4>
       <p class="text-sm">+255 123 456 789</p>
       <p class="text-sm">refunds@swiftrides.co.tz</p>
     </div>
   </div>
 </footer>

</body>
</html>