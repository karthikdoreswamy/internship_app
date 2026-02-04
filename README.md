 📄 Application Deployment Guide: CloudifyOps Internship Portal  
Version: 1.0  
Stack: LAMP (Linux, Apache, MySQL, PHP)  
Author: DevOps Team  

---

## 1. Prerequisites

Before deploying the application code, ensure the application server has the required runtime environment and dependencies installed.

Run the following commands on the application server:
### For Ubuntu

```bash
# 1. Update Package Repositories
sudo apt update

# 2. Install Apache Web Server
sudo apt install apache2 -y

# 3. Install PHP and MySQL Extensions
sudo apt install php libapache2-mod-php php-mysql -y

# 4. Enable and Start Apache
sudo systemctl enable apache2
sudo systemctl start apache2
```
### For Amazon Linux
```
# 1. Update packages
sudo dnf upgrade -y

# 2. Install Apache (httpd)
sudo dnf install -y httpd

# 3. Install PHP + MySQL extension (mysqli)
sudo dnf install -y php php-mysqli

# 4. Enable and start Apache
sudo systemctl enable httpd
sudo systemctl start httpd
```

## 2. File & Directory Setup

You need to deploy the application source code to the web server's document root.

### A. Required File Structure

Ensure your project folder contains the following files before uploading:
```
| File Name | Description |
|---|---|
| `config.php` | Database connection settings (Smart Config). |
| `install.php` | One-click database installer & migration script. |
| `index.php` | Login page (Entry point). |
| `register.php` | User registration page. |
| `dashboard.php` | Main application form (secured). |
| `style.css` | Application styling. |
| `script.js` | JavaScript for UI interactivity. |
| `image_1.png` | CloudifyOps Logo. |
| `auth.php` | Authentication logic. |
| `submit.php` | Form submission logic. |
| `register_process.php` | Registration logic. |
```
### B. Deployment Commands

Move the source code to `/var/www/html/internship_app` and set the correct permissions.

```bash
# 1. Create the application directory
sudo mkdir -p /var/www/html/internship_app

# 2. Upload/Copy your files to this directory
# (Use SCP, FTP, or Git clone depending on your artifact source)

# 3. Set Ownership (Apache User)
sudo chown -R www-data:www-data /var/www/html/internship_app

# 4. Set Permissions (Read/Execute for Web, Write for Owner)
sudo chmod -R 755 /var/www/html/internship_app
```
## 3. Configuration

You must configure the application to connect to your database endpoint (RDS, Localhost, or Remote SQL).

### Edit the Configuration File

```bash
sudo nano /var/www/html/internship_app/config.php
```

### Update the "Credentials" section only

```php
<?php
// 1. DATABASE CREDENTIALS
$db_host = "YOUR_DATABASE_ENDPOINT";  // e.g., internship-db.cx7...rds.amazonaws.com
$db_user = "YOUR_DB_USERNAME";        // e.g., admin
$db_pass = "YOUR_DB_PASSWORD";        // e.g., secret123
$db_name = "internship_db";           // Do not change (unless required)

// 2. AUTOMATIC CONNECTION LOGIC
if (!defined('INSTALLING')) {
    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

    if ($conn->connect_error) {
        die("<strong>Database Connection Failed:</strong> " . $conn->connect_error . 
            "<br><em>(Hint: Have you run <a href='install.php'>install.php</a> yet?)</em>");
    }
}
?>
```
Save and Exit (Ctrl+O → Enter → Ctrl+X).

## 4. Database Initialization

This application includes an Automated Installer (install.php) that creates the required database schema and default admin user. You do not need to manually run SQL commands.

Open your web browser.

Navigate to the installer URL:

 ### http://<SERVER_IP>/internship_app/install.php

Wait for the script to execute. You should see a success log:

✅ Database check/creation successful.

✅ Table users created.

✅ Table applications created.

✅ Default Admin user created.

Click the link "Go to Login Page" at the bottom.

## 5. Post-Deployment Verification

Perform a smoke test to ensure the deployment is stable.

Access the Login Page

URL: http://<SERVER_IP>/internship_app/

Verify the CloudifyOps logo loads correctly.

Test Admin Login

Username: admin

Password: admin123 (or the hash set in install.php)

Test Registration

Click "Apply Here" → Create a new user → Ensure redirection to login works.

## 6. Security Cleanup (Important)

Once the database is initialized and verified, remove the installer script to prevent unauthorized database resets.
```
sudo rm /var/www/html/internship_app/install.php
```
Response 2
### Update the "Credentials" section only

```php
<?php
// 1. DATABASE CREDENTIALS
$db_host = "YOUR_DATABASE_ENDPOINT";  // e.g., internship-db.cx7...rds.amazonaws.com
$db_user = "YOUR_DB_USERNAME";        // e.g., admin
$db_pass = "YOUR_DB_PASSWORD";        // e.g., secret123
$db_name = "internship_db";           // Do not change (unless required)

// 2. AUTOMATIC CONNECTION LOGIC
if (!defined('INSTALLING')) {
    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

    if ($conn->connect_error) {
        die("<strong>Database Connection Failed:</strong> " . $conn->connect_error . 
            "<br><em>(Hint: Have you run <a href='install.php'>install.php</a> yet?)</em>");
    }
}
?>
```
## 7. Database Initialization

This application includes an Automated Installer (install.php) that creates the required database schema and default admin user. You do not need to manually run SQL commands.

Open your web browser.

Navigate to the installer URL:
http://<SERVER_IP>/internship_app/install.php

Wait for the script to execute. You should see a success log:

✅ Database check/creation successful.

✅ Table users created.

✅ Table applications created.

✅ Default Admin user created.

Click the link "Go to Login Page" at the bottom.

## 8. Post-Deployment Verification

Perform a smoke test to ensure the deployment is stable.

Access the Login Page

URL: http://<SERVER_IP>/internship_app/

Verify the CloudifyOps logo loads correctly.

Test Admin Login

Username: admin

Password: admin123 (or the hash set in install.php)

Test Registration

Click "Apply Here" → Create a new user → Ensure redirection to login works.

## 9. Security Cleanup (Important)

Once the database is initialized and verified, remove the installer script to prevent unauthorized database resets.
```
sudo rm /var/www/html/internship_app/install.php
```
