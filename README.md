# Employee Management System (CRUD)

> Full CRUD for employee records using PHP, MySQL, and Fetch API — no page reloads.

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)
![Bootstrap](https://img.shields.io/badge/Bootstrap-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)

## About

A lightweight employee management system with full CRUD operations. The frontend communicates with a PHP REST-like backend via the Fetch API using JSON — no page reloads for any action. Styled with Bootstrap 5 for a clean, responsive UI.

## Features

- **Create** — add new employees with name and email.
- **Read** — list all employees in a responsive table.
- **Update** — edit employee details via a Bootstrap modal.
- **Delete** — remove employees with a single click.
- **No page reloads** — all operations use `fetch()` + JSON.
- **Responsive** — works on mobile and desktop.

## Project Structure

```
employee-management-crud-php/
├── index.html           Main user interface
├── main.js              Frontend logic and Fetch API calls
└── empleados/
    └── index.php        Backend API (handles all CRUD via POST/GET)
```

## Setup

**Requirements:** PHP 7.4+/8.x, MySQL, Apache (XAMPP/Laragon).

```bash
git clone https://github.com/aleoviedo071298/employee-management-crud-php.git
```

1. Create a database named `empleados` and run:
   ```sql
   CREATE TABLE `empleados` (
     `id` int(11) NOT NULL AUTO_INCREMENT,
     `nombre` varchar(255) NOT NULL,
     `correo` varchar(255) NOT NULL,
     PRIMARY KEY (`id`)
   );
   ```
2. Check connection settings in `empleados/index.php` — defaults: `host=localhost`, `user=root`, no password.
3. Place the folder in `htdocs` and open `http://localhost/employee-management-crud-php/`.

---

**Alejandro Oviedo** · [LinkedIn](https://www.linkedin.com/in/aleoviedo071298/) · [GitHub](https://github.com/aleoviedo071298)
