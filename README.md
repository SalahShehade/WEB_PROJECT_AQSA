# Al-Aqsa Online Store 🛒

A responsive Arabic-language e-commerce web application for electric devices and chandeliers, developed as a full-stack project for a real local business in Palestine.

## 📦 Features

- 🧑‍💼 **Two user roles:**
  - **Customer:** Browse categories, view product details, add to cart, checkout
  - **Admin:** Manage categories, products, and orders via admin dashboard
- 🔐 User authentication (sign-up, login, logout)
- 🛍️ Product categorization and search functionality
- 📷 Image-based listings with dynamic product pages
- 💰 Cart system with total calculation and (incomplete) payment form
- 🌍 Fully in Arabic and responsive across desktop, tablet, and mobile devices
- 📍 Contact page with store location map

## 🧰 Technologies Used

- **Frontend:** HTML5, CSS3, JavaScript, Bootstrap, JQuery
- **Backend:** PHP (basic server-side logic)
- **Database:** MySQL (via XAMPP)
- **Tools:** VSCode, GitHub, XAMPP, Draw.io, Photopea, FontAwesome

## 📊 Database Design

The MySQL database includes:
- Users (ID, username, email, password)
- Admins (ID, username, password)
- Categories (ID, name, image)
- Products (ID, name, category, price, image, description)
- Cart (ID, items, quantity, subtotal)

## 🖼️ UI Highlights

- Homepage with slider, featured products, and navigation
- Category browsing with dynamic single-page rendering
- Product details with related item suggestions
- Admin control panel for managing store data
- Fully responsive layout tested on iPads, phones, and desktops

## 🤝 Team & Collaboration

This project was developed in collaboration with **Al-Aqsa Electric Devices & Chandeliers Store**, with real input from the business owners to tailor the platform to their operational needs.

**Team Members:**
- Salah Shehada (Frontend & Database Design)
- Abdallah Khayat (Backend & Admin Dashboard)

## 📝 Known Limitations

- Payment integration is a front-end mockup (not functional)
- Admin login not securely protected (for demo purposes only)
- No MVC or advanced framework structure

## 📍 Screenshots
![s1](https://github.com/user-attachments/assets/3ea3c44a-60e1-47fa-bf03-ea0cd2bf9dcf)
![s2](https://github.com/user-attachments/assets/2c834107-e127-44dd-a67b-c3fee72f1bf6)
![s3](https://github.com/user-attachments/assets/6aa42ece-7f1d-40a8-bc0f-b4f0e2f00e1e)
![s4](https://github.com/user-attachments/assets/883836ea-aabd-4243-aa19-115b76881978)
![s5](https://github.com/user-attachments/assets/882dc376-57f7-4f19-808e-b0f56912ef50)
![s6](https://github.com/user-attachments/assets/9d85d8f3-d289-4010-9ac0-7709e733181d)
![s7](https://github.com/user-attachments/assets/488d79b3-1f95-4cd1-aea1-36ee49da84c4)


> (Add images of homepage, product page, cart, admin panel, etc. if available)
## Full Report 

[Final Report.docx](https://github.com/user-attachments/files/20593243/Final.Report.docx)


## 📁 Run Locally

1. Clone the repository
2. Import `store_database.sql` into MySQL via XAMPP or phpMyAdmin
3. Start Apache & MySQL using XAMPP
4. Open `index.html` in your browser or serve via local server

---

## 💡 Lessons Learned

This project enhanced our understanding of:
- Building full-stack web apps from scratch
- Database schema design and normalization
- Creating real-world UI/UX for Arabic users
- Team collaboration with real clients

---

> Built with 💡, coffee ☕, and local business impact in mind!
