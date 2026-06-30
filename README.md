# Employee Management System (CRUD)

A simple Employee Management System built with PHP, MySQL, JavaScript (Fetch API),
and Bootstrap 5.

## Features

- **Create** — add new employees with name and email.
- **Read** — list all employees in a responsive table.
- **Update** — edit employee details via a Bootstrap modal.
- **Delete** — remove employees with a single click.
- **Responsive design** — optimized for mobile and desktop.

## Tech Stack

- **Frontend**: HTML5, CSS3, JavaScript (ES6+), Bootstrap 5
- **Backend**: PHP 7/8
- **Database**: MySQL (`mysqli`)
- **Architecture**: REST-like API communicating via JSON

## Project Structure

```
index.html             Main user interface
main.js                Frontend logic and API communication
empleados/index.php    Backend API (CRUD operations)
```

## Setup

### Prerequisites
- XAMPP or any local server with PHP and MySQL support.

### Steps
1. Clone the repository:
   ```bash
   git clone https://github.com/aleoviedo071298/employee-management-crud-php.git
   ```
2. Create a database named `empleados` and run:
   ```sql
   CREATE TABLE `empleados` (
     `id` int(11) NOT NULL AUTO_INCREMENT,
     `nombre` varchar(255) NOT NULL,
     `correo` varchar(255) NOT NULL,
     PRIMARY KEY (`id`)
   );
   ```
3. Check the connection settings in `empleados/index.php`:
   ```php
   $servidor = "localhost";
   $usuario = "root";
   $contraseña = "";
   $baseDatos = "empleados";
   ```
4. Place the project folder in your `htdocs` directory and open `http://localhost/employee-management-crud-php/` in your browser.

## Author

**Alejandro Oviedo**
