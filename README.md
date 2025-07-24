# 📦 North Courier Services – Parcel Tracking & Management System

A full-featured Parcel Tracking & Management System for Web, Mobile, and Desktop (PWA) use. Built using **Laravel** and **MySQL**, deployed on **Hostinger**, this system offers a complete solution for courier businesses to manage parcel lifecycle, revenue, branches, and staff across different roles (Super Admin, Admin, Staff).

---

## 🌐 Live Preview
🚧 _Deployment in progress..._

---

## 🛠️ Tech Stack

- **Backend:** Laravel 10+
- **Frontend:** Blade, Tailwind CSS, JavaScript
- **Database:** MySQL
- **PDF/Barcode:** DomPDF, SimpleBarcode
- **Deployment:** Hostinger Shared Hosting (cPanel)
- **Authentication:** Laravel Breeze / Sanctum

---

## 📲 Platforms Supported

- Web Application (Responsive)
- Desktop via Browser / PWA
- Mobile-Friendly UI
- Ready for future Mobile App (Flutter/React Native)

---

## 👥 User Roles & Features

### 🛡️ Super Admin
- Dashboard overview (parcels, revenue, staff)
- CRUD All Users (Admin, Staff)
- Branch management
- Global reports (PDF/CSV)
- Revenue analytics
- System Settings
- Activity Logs

### 🧑‍💼 Admin / Manager
- Branch dashboard (parcel status, staff, revenue)
- CRUD Branches & Staff
- Assign parcels to staff
- Update parcel/payment statuses
- Export Reports (PDF/CSV)
- View Branch Revenue, Active Staff, etc.

### 👷 Staff
- Create and update **own** parcels
- View own performance (pending, in-transit, delivered)
- Update own payment statuses
- Download parcel PDF with barcode
- Real-time parcel updates

---

## 📦 Parcel Workflow

1. Create Parcel (Sender/Receiver + COD info)
2. Auto-generate tracking number + QR/Barcode
3. Update status through delivery lifecycle:
   - Created → Assigned → Picked → In Transit → Delivered
4. Payment status tracking: Paid / Unpaid / COD / Partial
5. Downloadable PDF Document with Barcode/QR

---

## 🧾 Reporting Features

- Revenue reports by date/branch/staff
- Parcel reports by status/timeline
- Download reports as PDF or Excel
- Parcel PDF with QR/Barcode and all details

---

## 🔎 Public Tracking Page

- URL: `/track/{tracking_number}`
- Input: Tracking Number
- Output:
  - Parcel Timeline (Interactive)
  - Sender/Receiver Info
  - Delivery ETA
  - Status Log with Icons
- SEO Optimized
- Mobile-first, Fast-loading

---

## 🧩 CRM Home Page (User Portal)

- Engaging Hero + Parcel Tracking Bar
- Modern, responsive design (Tailwind)
- SEO-friendly (Open Graph, Schema)
- Footer with Sitemap
- Optional Blog/FAQ for marketing

---

## 🔐 Security & Best Practices

- Role-based Middleware Access
- Laravel Breeze/Sanctum Auth
- HTTPS (SSL) via Hostinger
- Input validation & sanitization
- Activity & status logging
- Throttling on Tracking Page

---

## 📁 Project Structure

```bash
├── app/
│   ├── Models/
│   ├── Http/Controllers/
│   ├── Providers/
│   └── ...
├── database/
│   ├── migrations/
│   ├── seeders/
│   └── ...
├── resources/
│   ├── views/
│   └── js/
├── routes/
│   └── web.php
├── public/
├── .env
└── README.md
```

## 🚀 Getting Started (Local Dev)
- Requirements
- PHP >= 8.1
- Composer
- MySQL / XAMPP
- Node.js & NPM (optional for frontend assets)

``` bash
git clone https://github.com/your-username/ncs-tracking-system.git
cd ncs-tracking-system

composer install
cp .env.example .env
php artisan key:generate

# Configure your DB in `.env`:
# DB_DATABASE=db_ncs
# DB_USERNAME=root
# DB_PASSWORD=

php artisan migrate --seed
php artisan serve

```
## 📌 Future Enhancements
- REST API for mobile app
- Push Notifications for delivery updates
- Multilingual Support
- QR code scanner for staff app
- Flutter-based Mobile App

## 📈 KPIs (Goals)
- Track 100+ parcels/day smoothly
- Page load time < 3s
- SEO-optimized tracking portal
- 90 Lighthouse Score
- Real-time tracking & staff updates

## 🧑‍💻 Author
### Mukarram Ali
Full Stack Laravel, WordPress & Front-End Developer<br/>
📧 [mukarram@designtocode.com] <br/>
📱+92-332-5989669<br/>
🌐 https://mukarram.dev <br/>
🌐 https://designtocode.com 

