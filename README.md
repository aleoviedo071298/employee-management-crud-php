# Employee Management System (CRUD)

A simple yet powerful Employee Management System built with **PHP**, **MySQL**, **JavaScript (Fetch API)**, and **Bootstrap 5**.

## 📋 Features
- **Create**: Add new employees with name and email.
- **Read**: List all employees in a responsive table.
- **Update**: Edit existing employee details via a Bootstrap Modal.
- **Delete**: Remove employees from the system with a single click.
- **Responsive Design**: Fully optimized for mobile and desktop using Bootstrap 5.

## 🛠️ Technologies Used
- **Frontend**: HTML5, CSS3, JavaScript (ES6+), Bootstrap 5.
- **Backend**: PHP 7/8.
- **Database**: MySQL (using `mysqli` extension).
- **Architecture**: REST-like API communicating via JSON.

## 🚀 Getting Started

### Prerequisites
- [XAMPP](https://www.apachefriends.org/) or any local server environment with PHP and MySQL support.

### Installation
1.  **Clone the repository**:
    ```bash
    git clone https://github.com/your-username/employee-crud-php.git
    ```
2.  **Database Setup**:
    - Open phpMyAdmin.
    - Create a database named `empleados`.
    - Create a table named `empleados` with the following structure:
      ```sql
      CREATE TABLE `empleados` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `nombre` varchar(255) NOT NULL,
        `correo` varchar(255) NOT NULL,
        PRIMARY KEY (`id`)
      );
      ```
3.  **Configure Connection**:
    - Open `empleados/index.php`.
    - Update the database credentials if necessary:
      ```php
      $servidor = "localhost";
      $usuario = "root";
      $contraseña = "";
      $baseDatos = "empleados";
      ```
4.  **Run the application**:
    - Place the project folder in your `htdocs` directory.
    - Navigate to `http://localhost/index.html` in your browser.

## 📁 Project Structure
- `index.html`: Main user interface.
- `main.js`: Frontend logic and API communication.
- `empleados/index.php`: Backend API (CRUD operations).

## 👤 Author
**Alejandro Oviedo**

---
*Created for educational purposes.*
