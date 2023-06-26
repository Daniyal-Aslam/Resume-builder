# Resume Builder App - Local Machine Setup Guide 

This guide provides step-by-step instructions for setting up the Resume Builder application on your local machine. By following these instructions, you'll be able to install and configure the necessary components to run the application locally.

# Prerequisites
Before you begin, ensure that you have the following prerequisites installed on your machine:

XAMPP: A web server solution that includes Apache, MySQL, and PHP. Download and install XAMPP from the official website (https://www.apachefriends.org).
Installation Steps

# Step 1: Download and Install XAMPP

Visit the official XAMPP website (https://www.apachefriends.org) and download the appropriate version for your operating system.
Run the downloaded installer and follow the on-screen instructions to install XAMPP.
Choose the installation directory (e.g., C:\xampp for Windows or /Applications/XAMPP for macOS) and complete the installation process.

# Step 2: Start Apache and MySQL Servers

Launch the XAMPP Control Panel after the installation completes.
Start the Apache and MySQL servers by clicking the "Start" button next to each of them.

# Step 3: Clone or Download the Resume Builder Repository

Clone the Resume Builder repository from the source code repository using Git:
bash
Copy code
git clone https://github.com/Daniyal-Aslam/Resume-builder
Alternatively, you can download the repository as a ZIP file and extract it to a desired location on your machine.

# Step 4: Configure Application Files

Navigate to the XAMPP installation directory (e.g., C:\xampp\htdocs on Windows or /Applications/XAMPP/htdocs on macOS).
Copy the Resume Builder files from the cloned/downloaded repository and paste them into the htdocs directory.

# Step 5: Import the Database

Open your web browser and enter the following URL: http://localhost/phpmyadmin.
Click on the "New" button to create a new database. Enter a name for the database (e.g., resume_builder) and click "Create".
Select the newly created database from the left-hand side panel.
Click on the "Import" tab in the top navigation menu.
Click the "Choose File" button and select the SQL file (resumebuilder.sql) included in the Resume Builder repository.
Click the "Go" button to import the database schema and data.
