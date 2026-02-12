Here is the English translation:

---

# Grupo Apoena - Digital Ecosystem

This project is the complete redesign of Grupo Apoena's digital ecosystem, developed in pure PHP (>= 8.x) following a lightweight and modular MVC architecture.

## Project Structure

* `app/`: Contains the application logic (Controllers, Models, Views).
* `config/`: Configuration files (Database, URLs).
* `core/`: Base system classes (Database, Router).
* `public/`: The only publicly accessible folder (Index, CSS, JS, Images).
* `database/`: MySQL database schema.

## Technologies Used

* **Backend:** PHP 8.x, PDO (MySQL), Custom Router.
* **Frontend:** HTML5, CSS3 (Flexbox/Grid), Vanilla JavaScript.
* **Security:** Input sanitization, CSRF protection, Session control.
* **SEO:** Friendly URLs, Dynamic meta tags, Schema markup.

## Installation

1. Import the `database/schema.sql` file into your MySQL server.
2. Configure the database credentials in `config/config.php`.
3. Point your web server (Apache/Nginx) to the `public/` folder.
4. Make sure the Apache `mod_rewrite` module is enabled.

## Admin Access Credentials

* **URL:** `your-domain.com/admin/login`
* **Email:** `admin@apoena.com.br`
* **Password:** `admin123`

---

Developed by **Rodrigo Marchi Gonella**.
