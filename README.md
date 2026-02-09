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
