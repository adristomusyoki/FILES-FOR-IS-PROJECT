<?php
include 'dbconnect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard - You Lose, We Find</title>
    <link rel="stylesheet" href="userdashboard.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="image.2.webp" alt="You Lose, We Find">
        </div>
        
        <h1>You Lose & We Find</h1>
        <nav>
            <ul>
                <li><a href="home.html">Home</a></li>
                <li>
                    <label for="dropdown" style="display: none;">Choose an option:</label>
                    <select id="dropdown" name="options" onchange="location.href = this.value;" class="styled-dropdown">
                        <option value="#user-profile">User Profile</option>
                        <option value="#report-lost-item">Owner's Form</option>
                        <option value="#report-found-item">Finder's Form</option>
                    </select>
                </li>
                <li><a href="items.html">Search and Match Items</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="dashboard" class="section">
            <h1>User Dashboard</h1>
            <p>Welcome, <span id="userNameDisplay">User</span>!</p>
            <p>Use the forms below to report lost or found items. Your reports help us match lost items with their rightful owners.</p>
        </section>
        <section id="user-profile" class="section">
            <h2>User Profile</h2>
            <p>To update your profile, upload a profile picture, edit your personal details, and click "Update Profile" to save changes.</p>
            <form id="userProfileForm">
                <div class="profile-picture-container">
                    <label for="profile-picture" class="profile-picture-label">
                        <img src="default-profile.png" alt="Profile Picture" id="profile-picture-preview" class="rounded-profile-picture">
                        <input type="file" id="profile-picture" name="profile-picture" accept="image/*" style="display: none;">
                    </label>
                </div>
                
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                
                <label for="full-name">Full Name:</label>
                <input type="text" id="full-name" name="full-name" required>
                
                <label for="password">Create Password:</label>
                <input type="password" id="password" name="password" required>
                
                <label for="confirm-password">Confirm Password:</label>
                <input type="password" id="confirm-password" name="confirm-password" required>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" required>
                
                <button type="submit">Update Profile</button>
            </form>
        </section>
        <section id="report-lost-item" class="section">
            <h2>Report Lost Item</h2>
            <form id="lostItemForm">
                <label for="lost-item-name">Item Name:</label>
                <input type="text" id="lost-item-name" name="lost-item-name" required>
                
                <label for="lost-description">Description:</label>
                <textarea id="lost-description" name="lost-description" required></textarea>
                
                <label for="lost-picture">Attach Picture:</label>
                <input type="file" id="lost-picture" name="lost-picture" accept="image/*" required>
                
                <label for="lost-duration">Duration (Time):</label>
                <input type="text" id="lost-duration" name="lost-duration" required>

                <label for="lost-date">Date:</label>
                <input type="date" id="lost-date" name="lost-date" required>
                
                <label for="lost-location">Location:</label>
                <input type="text" id="lost-location" name="lost-location" required>
                
                <label for="lost-contact">Your Contact Information:</label>
                <input type="text" id="lost-contact" name="lost-contact" required>
                
                <button type="submit">Submit</button>
            </form>
        </section>
        <section id="report-found-item" class="section">
            <h2>Report Found Item</h2>
            <form id="foundItemForm">
                <label for="found-item-name">Item Name:</label>
                <input type="text" id="found-item-name" name="found-item-name" required>
                
                <label for="found-description">Description:</label>
                <textarea id="found-description" name="found-description" required></textarea>
                
                <label for="found-picture">Attach Picture:</label>
                <input type="file" id="found-picture" name="found-picture" accept="image/*" required>
                
                <label for="found-duration">Duration (Time):</label>
                <input type="text" id="found-duration" name="found-duration" required>

                <label for="found-date">Date:</label>
                <input type="date" id="found-date" name="found-date" required>
                
                <label for="found-location">Location:</label>
                <input type="text" id="found-location" name="found-location" required>
                
                <label for="found-contact">Your Contact Information:</label>
                <input type="text" id="found-contact" name="found-contact" required>
                
                <button type="submit">Submit</button>
                <a href="logout.php">Logout</a>
            </form>
        </section>
    </main>

    <footer>
        <h2>Contact Us</h2>
        <p>Email: <a href="mailto:feedback@youlosewefind.com" class="contact-link">Compose For Feedback</a></p>
        <p>Phone: <a href="tel:+254790661716" class="contact-link">Call For Assistance</a></p>
        <p>&copy; 2025 You Lose & We Find. All rights reserved.</p>
    </footer>
    <script src="userdashboard.js"></script>
</body>
</html>