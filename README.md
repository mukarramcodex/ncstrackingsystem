# 🚚 North Courier Services (NCS) – Courier Tracking & Management System

A full-stack Laravel application to manage and track courier parcels for North Courier Services.

## 🛠️ Built With

- **Laravel 12+**
- **Blade Templating + LiveWire + AlpineJS + Tailwind CSS**
- **MySQL** 
- **Laravel Auth** 
- 

---

## 📦 Features

- **Authentication**
  - Login/Register
  - Admin & Staff Roles

- **Admin Dashboard**
  - Parcel statistics (delivered, in-transit, pending)
  - Latest parcels
  - User management (optional)
  
- **Parcel Management**
  - CRUD operations
  - Assign to staff
  - Auto-generated tracking IDs

- **Tracking Page**
  - Public tracking at `/track/{tracking_id}`
  - View current status and history logs

- **Staff Dashboard**
  - View assigned parcels
  - Update parcel status with logs

---

## 📁 Project Structure

├── app/
│ ├── Models/
│ ├── Http/
│ │ ├── Controllers/
│ │ ├── Middleware/
├── resources/
│ ├── views/
│ │ ├── admin/
│ │ ├── staff/
│ │ ├── tracking/
├── database/
│ ├── migrations/
│ ├── seeders/
├── routes/
│ ├── web.php


## ⚙️ Setup Instructions

1. **Clone the repo**
```bash
git clone https://github.com/yourusername/ncs-courier-tracking.git
cd ncs-courier-tracking

2. **Install dependencies**
composer install
npm install && npm run dev

3. **Setup environment**
cp .env.example .env
php artisan key:generate

4. **Configure DB in .env**
DB_DATABASE=db_ncs
DB_USERNAME=root
DB_PASSWORD=

5. **Run migrations and seeders**
php artisan migrate --seed

6. **Serve the app**
php artisan serve

## 🔐 Admin Login (Default Seeder)
Email: admin@ncs.com
Password: password

## 🔐 Staff Login (Default Seeder)
Email: staff@ncs.com
Password: password

## 🔜 Coming Soon
Customer Registration & Dashboard

SMS/Email Notifications

Desktop Application & Mobile Application

## 📃 License
This project is open-sourced under the MIT license.

## 🤝 Contributing
Contributions, issues, and feature requests are welcome!
Feel free to fork and submit a PR.

## ✉️ Contact
Mukarram Ali
Full Stack Laravel & Frontend Developer
LinkedIn [@muhammadmukarramali](https://www.linkedin.com/in/muhammadmukarramali/) | Email [hello@mukarramali.net](mailto:info.mukarramali@gmail.com)
