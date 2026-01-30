Job Connection Platform
A modern web platform built with Laravel that connects recruiters with job seekers, featuring secure authentication, user profiles, and real-time interactions.
📋 Table of Contents

About
Features
Technologies
Requirements
Installation
Configuration
Usage
Project Structure
API Documentation
Contributing
License

🎯 About
This platform facilitates connections between recruiters and job seekers by providing a comprehensive ecosystem for professional networking. Built with Laravel's best practices, it offers a secure, scalable, and user-friendly experience.
✨ Features
Core Features
🔐 Authentication System

Secure user registration and login (Laravel Breeze/Jetstream)
Two distinct user types:

Recruiters: Company-based profiles
Job Seekers: Specialty-based profiles


Password reset and email verification

👤 User Profile Management

View and edit personal information
Upload and update profile photo
Customize bio and professional details
Secure password change with verification

🔍 Advanced Search

Search users by:

Name
Specialty/Skills
User type (Recruiter/Job Seeker)


View detailed user profiles

🎁 Bonus Features

Friend System: Send and manage friend requests
Notifications: Real-time alerts for friend requests
Connection Management: Accept or decline friend requests

🛠 Technologies

Framework: Laravel 10.x
Authentication: Laravel Breeze/Jetstream
Database: MySQL 8.0+
Frontend: Blade Templates + Tailwind CSS
Real-time: Laravel Echo + Pusher (for notifications)
Package Manager: Composer 2.x
Node Package Manager: npm/yarn

📦 Requirements

PHP >= 8.1
Composer >= 2.x
Node.js >= 16.x
MySQL >= 8.0 or PostgreSQL >= 13
NPM or Yarn

🚀 Installation
1. Clone the Repository
bashgit clone https://github.com/your-username/job-connection-platform.git
cd job-connection-platform
2. Install Dependencies
bash# Install PHP dependencies
composer install

# Install Node dependencies
npm install
3. Environment Setup
bash# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate
4. Database Configuration
Edit your .env file with your database credentials:
envDB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=job_platform
DB_USERNAME=your_username
DB_PASSWORD=your_password
5. Run Migrations
bash# Run database migrations
php artisan migrate

# (Optional) Seed database with sample data
php artisan db:seed
6. Storage Link
bash# Create symbolic link for file uploads
php artisan storage:link
7. Build Assets
bash# Development
npm run dev

# Production
npm run build
8. Start the Application
bash# Start Laravel development server
php artisan serve

# In another terminal, start Vite (for hot reload)
npm run dev
Visit http://localhost:8000 in your browser.
⚙️ Configuration
Email Configuration
For email verification and password reset, configure your mail settings in .env:
envMAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your_username
MAIL_PASSWORD=your_password
MAIL_ENCRYPTION=tls
Real-time Notifications (Optional)
Configure Pusher for real-time notifications:
envBROADCAST_DRIVER=pusher
PUSHER_APP_ID=your_app_id
PUSHER_APP_KEY=your_app_key
PUSHER_APP_SECRET=your_app_secret
PUSHER_APP_CLUSTER=your_cluster
```

## 📖 Usage

### User Registration

1. Navigate to `/register`
2. Choose user type (Recruiter or Job Seeker)
3. Fill in required information
4. Verify email address

### Profile Management

- Access your profile from the dashboard
- Click "Edit Profile" to update information
- Upload profile photo (max 2MB)
- Update bio and professional details

### Search Users

- Use the search bar in the navigation
- Filter by name or specialty
- Click on user cards to view full profiles

### Friend System

- Visit a user's profile
- Click "Add Friend" to send a request
- Manage incoming requests in the notifications panel
- Accept or decline friend requests

## 📁 Project Structure
```
job-connection-platform/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── Auth/
│   │   │   ├── ProfileController.php
│   │   │   ├── SearchController.php
│   │   │   └── FriendController.php
│   │   └── Middleware/
│   ├── Models/
│   │   ├── User.php
│   │   ├── Profile.php
│   │   └── FriendRequest.php
│   └── Notifications/
├── database/
│   ├── migrations/
│   └── seeders/
├── resources/
│   ├── views/
│   │   ├── auth/
│   │   ├── profile/
│   │   ├── search/
│   │   └── layouts/
│   └── css/
├── routes/
│   ├── web.php
│   └── api.php
└── public/
```

## 🔌 API Documentation

### Authentication Endpoints
```
POST /register - Register new user
POST /login - Authenticate user
POST /logout - Logout user
POST /forgot-password - Request password reset
```

### Profile Endpoints
```
GET /profile - View own profile
PUT /profile - Update profile
POST /profile/photo - Upload profile photo
PUT /profile/password - Change password
```

### Search Endpoints
```
GET /search?query={query}&type={type} - Search users
GET /users/{id} - View user profile
```

### Friend System Endpoints
```
POST /friends/request/{userId} - Send friend request
POST /friends/accept/{requestId} - Accept friend request
POST /friends/decline/{requestId} - Decline friend request
GET /friends - List all friends
🤝 Contributing
We welcome contributions! Please follow these steps:

Fork the repository
Create a feature branch (git checkout -b feature/AmazingFeature)
Commit your changes (git commit -m 'Add some AmazingFeature')
Push to the branch (git push origin feature/AmazingFeature)
Open a Pull Request

Code Style

Follow PSR-12 coding standards
Write meaningful commit messages
Add comments for complex logic
Update documentation as needed

🧪 Testing
bash# Run all tests
php artisan test

# Run specific test suite
php artisan test --testsuite=Feature

# Run with coverage
php artisan test --coverage
🐛 Troubleshooting
Common Issues
Database connection error:
bashphp artisan config:clear
php artisan cache:clear
Assets not loading:
bashnpm run build
php artisan storage:link
Permission errors:
bashchmod -R 775 storage bootstrap/cache
📝 License
This project is licensed under the MIT License - see the LICENSE file for details.
👥 Authors

Your Name - Initial work - YourGitHub

🙏 Acknowledgments

Laravel Community
Tailwind CSS Team
All contributors

📞 Support
For support, email support@jobplatform.com or open an issue in the GitHub repository.