# User Management System

##  Project Overview

The User Management System is a simple web based application developed using PHP and MySQL.

The purpose of this project is to demonstrate how a PHP website can connect to a MySQL database, store user information, retrieve data from the database, display it in a web page, and update a user's status.

The application provides a simple interface where users can be added by entering their name and age. The submitted information is stored in the database and displayed in a table.

---

##  Live Website

You can access the live version of the project here:

https://sarahsmartmethods.liveblog365.com

---

##  Features

The system provides the following features:

### 1. Add Users

The application contains a form that allows the user to enter:

- Name
- Age

After clicking the Submit button, the information is inserted into the MySQL database.

### 2. Display Users

All users stored in the database are displayed in a table.

The table contains:

 ID : Unique identifier for each user 
 Name : User's name 
 Age ; User's age 
 Status : Current status of the user 
 Action: Button used to change the user's status 

### 3. User Status

Each user has a status value:

- 0 = OFF
- 1 = ON

The status can be changed using the ON/OFF button in the Action column.

When the button is clicked, the system updates the user's status in the database and reloads the page to display the new status.

### 4. Automatic ID

Each user receives a unique ID automatically.

The ID column uses MySQL's AUTO_INCREMENT feature, which means that a new ID is generated automatically whenever a new user is added.

---

## Technologies Used

This project was developed using the following technologies:

- **PHP** – Used to create the server-side functionality and communicate with the database.
- **MySQL** – Used to store and manage user information.
- **HTML** – Used to create the structure of the web page and form.
- **CSS** – Used to style the form, table, and buttons.
- **phpMyAdmin** – Used to create and manage the MySQL database and table.
- **Web Hosting** – The project is hosted online so that it can be accessed through a web browser.

---

## ️ Database Structure

The project uses a MySQL database containing a users table.

The table contains four columns:

### id

- Data type: INT
- Primary Key
- AUTO_INCREMENT
- Used as a unique identifier for each user.

### name

- Data type: VARCHAR(255)
- Stores the user's name.

### age

- Data type: INT
- Stores the user's age.

### status

- Data type: INT
- Stores the user's current status.
- 0 represents OFF.
- 1 represents ON.

---

##  Project Files

### index.php

The main file of the application.

It is responsible for:

- Displaying the user form.
- Receiving submitted user information.
- Inserting new users into the database.
- Retrieving users from the database.
- Displaying users in an HTML table.
- Toggling the user's status between ON and OFF.

### db.php

This file is responsible for establishing the connection between PHP and the MySQL database.

The database connection information is kept separately from the main application code.


---

##  How the System Works

The application follows a simple process:

### Adding a User

1. The user enters a name.
2. The user enters an age.
3. The user clicks the **Submit** button.
4. PHP receives the submitted data.
5. PHP sends an INSERT query to MySQL.
6. The new user is stored in the users table.
7. The page reloads.
8. The new user appears in the table.

### Changing User Status

1. The user clicks the ON/OFF button.
2. The user's ID is sent to PHP.
3. PHP retrieves the current status from MySQL.
4. If the status is 0, it changes to 1.
5. If the status is 1, it changes to 0.
6. The updated value is stored in the database.
7. The page reloads and displays the new status.

---



## Deployment

The project is deployed online using web hosting.

The PHP files are uploaded to the hosting server, while the MySQL database is created and managed through phpMyAdmin.

The PHP application connects to the MySQL database through the database connection file.

The live application can be accessed through:

https://sarahsmartmethods.liveblog365.com


---



##  Author

**Sarah Ahmed Althagafi
