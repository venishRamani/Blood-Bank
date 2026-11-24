# 🩸 Blood Bank Management System

A full-stack web application designed to streamline blood donation, inventory management, and emergency blood requests between donors, hospitals, and administrators.

---

## 📋 Table of Contents
- [Features](#-features)
- [Tech Stack](#-tech-stack)
- [Prerequisites](#-prerequisites)
- [Installation & Setup](#-installation--setup)
- [Environment Variables](#-environment-variables)
- [Database Schema](#-database-schema)
- [Screenshots](#-screenshots)
- [Contributing](#-contributing)
- [License](#-license)

---

## ✨ Features

### 👤 Donor / User Module
- **User Registration & Authentication:** Secure sign-up and login with blood group and location details.
- **Eligibility Check:** Automated verification of donation eligibility based on the last donation date (90-day rule).
- **Appointment Booking:** Schedule blood donation slots at nearby blood banks or camps.
- **Request Blood:** Search available blood stock by blood group and city to submit urgent requests.
- **Donation History:** View past donations and download certificates.

### 🏥 Hospital / Blood Bank Module
- **Live Inventory Management:** Add, update, or remove blood units by blood group (`A+`, `A-`, `B+`, `B-`, `O+`, `O-`, `AB+`, `AB-`).
- **Expiry Tracking:** Automated alerts for blood units nearing expiration.
- **Request Fulfillment:** Approve or reject incoming blood requests from patients or partner hospitals.

### 🛡️ Admin Module
- **Dashboard Analytics:** Overview of total donors, available units, and pending requests.
- **Campaign Management:** Create and publish upcoming blood donation drives.
- **User Management:** Verify hospitals and manage donor accounts.

---

## 🛠️ Tech Stack

- **Frontend:** HTML5, CSS3, JavaScript (or React.js / Tailwind CSS)
- **Backend:** Node.js, Express.js (or PHP / Django / Spring Boot)
- **Database:** MySQL / MongoDB / PostgreSQL
- **Authentication:** JWT (JSON Web Tokens) / Session-based Auth

---

## ⚙️ Prerequisites

Before running this project locally, make sure you have the following installed:
- [Node.js](https://nodejs.org) (v16 or higher) *(replace with PHP/Python if applicable)*
- [Git](https://git-scm.com)
- [MongoDB](https://mongodb.com) or [MySQL](https://mysql.com)

---

## 🚀 Installation & Setup

1. **Clone the repository**
   ```bash
   git clone https://github.com
   cd blood-bank-management-system
   ```

2. **Install dependencies**
   ```bash
   # For backend
   cd backend
   npm install

   # For frontend
   cd ../frontend
   npm install
   ```

3. **Configure Environment Variables**
   Create a `.env` file in the root/backend directory and add the required variables (see below).

4. **Run the application**
   ```bash
   # Start backend server
   npm run dev

   # Start frontend (in a new terminal)
   npm start
   ```

5. **Open in Browser**
   Visit `http://localhost:3000` to view the application.

---

## 🔐 Environment Variables

Create a `.env` file in your backend folder and configure the following:

```env
PORT=5000
DB_URI=your_database_connection_string
JWT_SECRET=your_super_secret_key
EMAIL_USER=your_email@example.com
EMAIL_PASS=your_email_app_password
```

---

## 🗄️ Database Schema (Overview)

- **Users:** `id`, `name`, `email`, `password`, `blood_group`, `phone`, `city`, `last_donation_date`, `role`
- **Blood_Inventory:** `id`, `blood_bank_id`, `blood_group`, `units_available`, `expiry_date`
- **Blood_Requests:** `id`, `requester_id`, `blood_group`, `units_needed`, `hospital_name`, `status`, `created_at`

---

## 📸 Screenshots

| Home Page | Admin Dashboard |
| :---: | :---: |
| ![Home Page](https://placeholder.com) | ![Dashboard](https://placeholder.com) |

*(Replace placeholder links with actual screenshots stored in an `/assets` or `/screenshots` folder in your repo)*

---

## 🤝 Contributing

Contributions are welcome! Follow these steps to contribute:

1. Fork the repository.
2. Create a new branch (`git checkout -b feature/AmazingFeature`).
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`).
4. Push to the branch (`git push origin feature/AmazingFeature`).
5. Open a Pull Request.

---

## 📄 License

Distributed under the MIT License. See `LICENSE` for more information.
