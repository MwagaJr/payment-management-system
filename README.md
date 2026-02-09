# Payment Management System API

A Laravel-based REST API for managing payments, reconciliation, reporting, and audit logs.

Built for enterprise and fintech-style applications.

---

## 🚀 Features

- User Authentication (Sanctum)
- Payment Management
- Control Number Tracking
- Reconciliation System
- Daily & Monthly Reports
- Audit Trail Logging
- Search & Pagination
- Role-Based Access

---

## 🛠️ Tech Stack

- Laravel 10+
- PHP 8+
- MySQL
- REST API
- Sanctum Authentication
- Swagger (OpenAPI)

---

## ⚙️ Installation

### 1. Clone Repository

```bash
git clone https://github.com/MwagaJr/payment-management-system.git
cd payment-management-system


2. Install Dependencies
composer install

3. Setup Environment
cp .env.example .env
php artisan key:generate


Update database credentials in .env.

4. Run Migrations & Seed
php artisan migrate --seed

5. Start Server
php artisan serve


🔐 Authentication

This API uses Laravel Sanctum.

Register
POST /api/register

Login
POST /api/login


Returns Bearer Token.

Use in headers:

Authorization: Bearer YOUR_TOKEN

💳 Main Endpoints
Payments
GET    /api/payments
POST   /api/payments
PUT    /api/payments/{id}
GET    /api/payments/{id}

Reconciliation
POST /api/payments/{id}/reconcile

Reports
GET /api/reports/daily
GET /api/reports/monthly

👨‍💻 Demo Credentials

Admin User:

Email: admin@test.com
Password: 12345678


Normal User:

Email: user@test.com
Password: 12345678

📊 Sample API Response
Payment List
{
  "data": [
    {
      "id": 1,
      "control_no": "9876543210",
      "amount": "150000.00",
      "status": "PAID",
      "paid_at": "2026-02-06 10:12:44"
    }
  ]
}

📌 Author

Alex Mwaga
Backend Developer (Laravel & APIs)

📧 Email: alexmwaga17@gmail.com

🌍 Tanzania
💼 Available for Remote Work
