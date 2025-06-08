<?php
$page_title = "Frequently Asked Questions | SwiftRides";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo $page_title; ?></title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    body { font-family: 'Poppins', sans-serif; }
    .gradient-bg { background: linear-gradient(135deg, #2563eb 0%, #4f46e5 100%); }
    .faq-item { border-bottom: 1px solid #e5e7eb; }
    .faq-question { cursor: pointer; transition: all 0.3s ease; }
    .faq-question:hover { background-color: #f9fafb; }
    .faq-answer { max-height: 0; overflow: hidden; transition: max-height 0.3s ease; }
    .faq-answer.active { max-height: 200px; }
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
      <h1 class="text-4xl md:text-5xl font-bold mb-6">Frequently Asked Questions</h1>
      <p class="text-xl text-blue-100">Find answers to common questions about SwiftRides services</p>
    </div>
  </section>

  <!-- FAQ Content -->
  <section class="max-w-4xl mx-auto px-6 py-16">
    <!-- Search FAQs -->
    <div class="mb-12">
      <div class="bg-white rounded-xl p-6 shadow-sm">
        <div class="flex items-center space-x-4">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
          </svg>
          <input type="text" id="faqSearch" placeholder="Search FAQs..." class="flex-1 p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
        </div>
      </div>
    </div>

    <!-- FAQ Categories -->
    <div class="grid md:grid-cols-4 gap-4 mb-12">
      <button onclick="filterFAQs('all')" class="faq-filter active bg-blue-600 text-white px-4 py-2 rounded-lg font-medium">All</button>
      <button onclick="filterFAQs('booking')" class="faq-filter bg-gray-200 text-gray-700 px-4 py-2 rounded-lg font-medium">Booking</button>
      <button onclick="filterFAQs('payment')" class="faq-filter bg-gray-200 text-gray-700 px-4 py-2 rounded-lg font-medium">Payment</button>
      <button onclick="filterFAQs('travel')" class="faq-filter bg-gray-200 text-gray-700 px-4 py-2 rounded-lg font-medium">Travel</button>
    </div>

    <!-- FAQ Items -->
    <div class="bg-white rounded-xl shadow-sm overflow-hidden">
      
      <!-- Booking FAQs -->
      <div class="faq-item" data-category="booking">
        <div class="faq-question p-6 flex justify-between items-center">
          <h3 class="text-lg font-semibold text-gray-800">How do I book a ticket on SwiftRides?</h3>
          <svg class="w-6 h-6 text-gray-400 transform transition-transform faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </div>
        <div class="faq-answer px-6 pb-6">
          <p class="text-gray-600">To book a ticket: 1) Select your departure and destination cities, 2) Choose your travel date, 3) Browse available routes and select your preferred bus, 4) Choose your seats, 5) Enter passenger information, 6) Complete payment. You'll receive confirmation via email and SMS.</p>
        </div>
      </div>

      <div class="faq-item" data-category="booking">
        <div class="faq-question p-6 flex justify-between items-center">
          <h3 class="text-lg font-semibold text-gray-800">Can I book tickets for multiple passengers?</h3>
          <svg class="w-6 h-6 text-gray-400 transform transition-transform faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </div>
        <div class="faq-answer px-6 pb-6">
          <p class="text-gray-600">Yes, you can book up to 4 seats in a single transaction. You'll need to provide names and ID/passport numbers for all passengers. Children under 2 travel free on adult's lap, while children 2-12 require separate seats at child rates.</p>
        </div>
      </div>

      <div class="faq-item" data-category="booking">
        <div class="faq-question p-6 flex justify-between items-center">
          <h3 class="text-lg font-semibold text-gray-800">How far in advance can I book tickets?</h3>
          <svg class="w-6 h-6 text-gray-400 transform transition-transform faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </div>
        <div class="faq-answer px-6 pb-6">
          <p class="text-gray-600">You can book tickets up to 30 days in advance. We recommend booking at least 24 hours before departure to secure your preferred seats and bus class, especially during peak travel seasons.</p>
        </div>
      </div>

      <!-- Payment FAQs -->
      <div class="faq-item" data-category="payment">
        <div class="faq-question p-6 flex justify-between items-center">
          <h3 class="text-lg font-semibold text-gray-800">What payment methods do you accept?</h3>
          <svg class="w-6 h-6 text-gray-400 transform transition-transform faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </div>
        <div class="faq-answer px-6 pb-6">
          <p class="text-gray-600">We accept mobile money (M-Pesa, Tigo Pesa, Airtel Money), credit/debit cards (Visa, Mastercard), bank transfers, and cash payments at terminals. All online payments are secured with SSL encryption.</p>
        </div>
      </div>

      <div class="faq-item" data-category="payment">
        <div class="faq-question p-6 flex justify-between items-center">
          <h3 class="text-lg font-semibold text-gray-800">Are there additional fees for booking online?</h3>
          <svg class="w-6 h-6 text-gray-400 transform transition-transform faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </div>
        <div class="faq-answer px-6 pb-6">
          <p class="text-gray-600">We charge a small service fee of 2% of the ticket price and mandatory insurance fee of TZS 2,000 per passenger. These fees are clearly shown before you complete your booking. No hidden charges.</p>
        </div>
      </div>

      <div class="faq-item" data-category="payment">
        <div class="faq-question p-6 flex justify-between items-center">
          <h3 class="text-lg font-semibold text-gray-800">What happens if my payment fails?</h3>
          <svg class="w-6 h-6 text-gray-400 transform transition-transform faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </div>
        <div class="faq-answer px-6 pb-6">
          <p class="text-gray-600">If payment fails, your seats are held for 15 minutes. You can retry payment or choose a different method. If unsuccessful, seats are released automatically. Contact our support team if you need assistance.</p>
        </div>
      </div>

      <!-- Travel FAQs -->
      <div class="faq-item" data-category="travel">
        <div class="faq-question p-6 flex justify-between items-center">
          <h3 class="text-lg font-semibold text-gray-800">What should I bring for my journey?</h3>
          <svg class="w-6 h-6 text-gray-400 transform transition-transform faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </div>
        <div class="faq-answer px-6 pb-6">
          <p class="text-gray-600">Bring valid ID (passport for international routes), your booking confirmation, comfortable clothing, snacks/water for long journeys, phone charger, and any medications. Check our baggage policy for luggage restrictions.</p>
        </div>
      </div>

      <div class="faq-item" data-category="travel">
        <div class="faq-question p-6 flex justify-between items-center">
          <h3 class="text-lg font-semibold text-gray-800">How early should I arrive at the terminal?</h3>
          <svg class="w-6 h-6 text-gray-400 transform transition-transform faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </div>
        <div class="faq-answer px-6 pb-6">
          <p class="text-gray-600">Arrive 30 minutes before departure for domestic routes and 60 minutes for international routes. This allows time for check-in, baggage loading, and security procedures.</p>
        </div>
      </div>

      <div class="faq-item" data-category="travel">
        <div class="faq-question p-6 flex justify-between items-center">
          <h3 class="text-lg font-semibold text-gray-800">What is your baggage allowance?</h3>
          <svg class="w-6 h-6 text-gray-400 transform transition-transform faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </div>
        <div class="faq-answer px-6 pb-6">
          <p class="text-gray-600">Each passenger can carry one main luggage (up to 25kg), one hand luggage (up to 7kg), and personal items. Excess baggage incurs additional charges. Prohibited items include weapons, flammables, and illegal substances.</p>
        </div>
      </div>

      <div class="faq-item" data-category="booking">
        <div class="faq-question p-6 flex justify-between items-center">
          <h3 class="text-lg font-semibold text-gray-800">Can I cancel or modify my booking?</h3>
          <svg class="w-6 h-6 text-gray-400 transform transition-transform faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </div>
        <div class="faq-answer px-6 pb-6">
          <p class="text-gray-600">Cancellations are allowed up to 6 hours before departure with 85% refund. Modifications (date/time changes) are possible up to 2 hours before departure for a TZS 5,000 fee, subject to seat availability.</p>
        </div>
      </div>

      <div class="faq-item" data-category="travel">
        <div class="faq-question p-6 flex justify-between items-center">
          <h3 class="text-lg font-semibold text-gray-800">Do you provide meals and refreshments?</h3>
          <svg class="w-6 h-6 text-gray-400 transform transition-transform faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </div>
        <div class="faq-answer px-6 pb-6">
          <p class="text-gray-600">VIP and Business class include complimentary meals and beverages. Economy class receives light refreshments on journeys over 6 hours. We also make scheduled stops at restaurants and convenience stores.</p>
        </div>
      </div>

      <div class="faq-item" data-category="travel">
        <div class="faq-question p-6 flex justify-between items-center">
          <h3 class="text-lg font-semibold text-gray-800">Is WiFi available on buses?</h3>
          <svg class="w-6 h-6 text-gray-400 transform transition-transform faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </div>
        <div class="faq-answer px-6 pb-6">
          <p class="text-gray-600">Free WiFi is available on most of our Business and VIP buses. Connection quality may vary depending on network coverage along the route. All buses have charging ports for your devices.</p>
        </div>
      </div>

    </div>

    <!-- Contact Support -->
    <div class="mt-12 bg-blue-50 rounded-xl p-8 text-center">
      <h3 class="text-2xl font-bold text-gray-800 mb-4">Still have questions?</h3>
      <p class="text-gray-600 mb-6">Our customer support team is here to help you 24/7</p>
      <div class="flex flex-col sm:flex-row gap-4 justify-center">
        <a href="contact.php" class="bg-blue-600 text-white px-6 py-3 rounded-lg font-medium hover:bg-blue-700 transition">Contact Support</a>
        <a href="tel:+255123456789" class="bg-white text-blue-600 border border-blue-600 px-6 py-3 rounded-lg font-medium hover:bg-blue-50 transition">Call: +255 123 456 789</a>
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
        <h4 class="text-lg font-semibold text-white mb-4">Quick Links</h4>
        <ul class="space-y-2">
          <li><a href="home.php" class="hover:text-white transition">Home</a></li>
          <li><a href="routes.php" class="hover:text-white transition">Routes</a></li>
          <li><a href="aboutus.php" class="hover:text-white transition">About Us</a></li>
        </ul>
      </div>
      <div>
        <h4 class="text-lg font-semibold text-white mb-4">Support</h4>
        <ul class="space-y-2">
          <li><a href="faqs.php" class="text-blue-400 hover:text-white transition">FAQs</a></li>
          <li><a href="help-center.php" class="hover:text-white transition">Help Center</a></li>
          <li><a href="terms.php" class="hover:text-white transition">Terms of Service</a></li>
          <li><a href="privacy.php" class="hover:text-white transition">Privacy Policy</a></li>
        </ul>
      </div>
      <div>
        <h4 class="text-lg font-semibold text-white mb-4">Contact</h4>
        <p class="text-sm">+255 123 456 789</p>
        <p class="text-sm">info@swiftrides.co.tz</p>
      </div>
    </div>
  </footer>

  <script>
    // FAQ functionality
    document.querySelectorAll('.faq-question').forEach(question => {
      question.addEventListener('click', function() {
        const answer = this.nextElementSibling;
        const icon = this.querySelector('.faq-icon');
        
        // Close all other answers
        document.querySelectorAll('.faq-answer').forEach(otherAnswer => {
          if (otherAnswer !== answer) {
            otherAnswer.classList.remove('active');
            otherAnswer.previousElementSibling.querySelector('.faq-icon').style.transform = 'rotate(0deg)';
          }
        });
        
        // Toggle current answer
        answer.classList.toggle('active');
        icon.style.transform = answer.classList.contains('active') ? 'rotate(180deg)' : 'rotate(0deg)';
      });
    });

    // Filter FAQs
    function filterFAQs(category) {
      const items = document.querySelectorAll('.faq-item');
      const filters = document.querySelectorAll('.faq-filter');
      
      // Update filter buttons
      filters.forEach(filter => {
        filter.classList.remove('active', 'bg-blue-600', 'text-white');
        filter.classList.add('bg-gray-200', 'text-gray-700');
      });
      event.target.classList.add('active', 'bg-blue-600', 'text-white');
      event.target.classList.remove('bg-gray-200', 'text-gray-700');
      
      // Show/hide items
      items.forEach(item => {
        if (category === 'all' || item.dataset.category === category) {
          item.style.display = 'block';
        } else {
          item.style.display = 'none';
        }
      });
    }

    // Search functionality
    document.getElementById('faqSearch').addEventListener('input', function() {
      const searchTerm = this.value.toLowerCase();
      const items = document.querySelectorAll('.faq-item');
      
      items.forEach(item => {
        const question = item.querySelector('.faq-question h3').textContent.toLowerCase();
        const answer = item.querySelector('.faq-answer p').textContent.toLowerCase();
        
        if (question.includes(searchTerm) || answer.includes(searchTerm)) {
          item.style.display = 'block';
        } else {
          item.style.display = 'none';
        }
      });
    });
  </script>

</body>
</html>