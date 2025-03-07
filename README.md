Goa Trip Registration Form

Overview :-

This project is a simple web-based registration form for a Goa trip, built using PHP and MySQL. It allows users to submit their details, which are then stored in a MySQL database. The project demonstrates basic form handling, database connectivity, and front-end integration.

Features :-

User-Friendly Interface – A clean and simple HTML form for easy data entry.

PHP & MySQL Integration – Handles form submissions and stores data in a MySQL database.

Real-Time Feedback – Displays a success message upon successful form submission.

Basic Validation – Uses HTML5 attributes for input validation.

Responsive Design – Ensures accessibility across devices.

(Technologies Used) :-

PHP

MySQL

HTML5

CSS

JavaScript

Installation & Setup

Prerequisites

XAMPP or WAMP server (for local development)

MySQL database

Steps :-

Clone or download the repository.

Start your local server (XAMPP/WAMP) and create a database named goa.

Import the trip table using the following SQL command:

CREATE TABLE trip (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    age INT,
    gender VARCHAR(10),
    email VARCHAR(100),
    phone VARCHAR(15),
    other TEXT,
    dt TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

Place the project files inside the htdocs (XAMPP) or www (WAMP) folder.

Run the project by opening http://localhost/index.php in your browser.

Usage :-

Fill in the required details in the form.

Click the "Submit" button to save data in the database.

A success message will appear upon successful submission.

License :-

This project is open-source and free to use for educational purposes.
