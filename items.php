<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Items - You Lose, We Find</title>
  <link rel="stylesheet" href="items.css">
  </head>
<body>
  <header>
    <div class="logo">
      <img src="image.2.webp" alt="You Lose & We Find">  
    </div>
    <h1>You Lose & We Find</h1>
    <nav>
      <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="userdashboard.php">User Dashboard</a></li>
        <li><a href="items.php">Search and Match Items</a></li>
      </ul>
    </nav>
  </header> <!-- Added missing closing tag -->
  <section id="search" class="section">
    <h1>Search &amp; Match Items</h1>
    <p>
      Enter keywords, category, or date to search for your lost item. Our system will help match your search with found items.
    </p>
  </section>

  <section id="lostItems" class="section">
    <h2>Lost Items</h2>
    <div class="search-container">
      <input type="text" id="searchInput" placeholder="Search for items..." />
      <button id="searchButton">Search</button>
    </div>
    <div id="lostItemsContainer">
    </div>
  </section>

  <section id="foundItems" class="section">
    <h2>Found Items</h2>
    <div class="search-container">
      <input type="text" id="foundSearchInput" placeholder="Search for found items..." />
      <button id="foundSearchButton">Search</button>
    </div>
    <div id="foundItemsContainer">
    </div>
  </section>

  <section id="recentUpdates" class="section">
    <h2>Recent Updates</h2>
    <div id="recentUpdatesContainer">
    </div>
  </section>

  <section id="testimonials" class="section">
    <h2>Add a Testimonial</h2>
    <form id="testimonialForm">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>
      
      <label for="message">Message:</label>
      <textarea id="message" name="message" required></textarea>
      
      <button type="submit">Submit</button>
    </form>
  </section>

<footer>
    <h2>Contact Us</h2>     
    <p>Email: <a href="mailto:feedback@youlosewefind.com" class="contact-link">Compose For Feedback</a></p> <!-- Fixed email link -->
    <p>Phone: <a href="tel:+254790661716" class="contact-link">Call For Assistance</a></p>
    <p>&copy; 2025 You Lose & We Find. All rights reserved.</p>
  </footer>

  <script src="items.js"></script>
</body>
</html>
