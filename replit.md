# Gulf Equestrian - Laravel Application

## Project Overview
This is a Laravel 12 web application for Gulf Equestrian, featuring an equestrian competition and marketplace platform. The application includes content management for blogs, competitions, marketplace listings, and contact information.

## Technology Stack
- **Backend**: Laravel 12 (PHP 8.2)
- **Frontend**: Blade templates, Bootstrap 5, SCSS
- **Build Tool**: Vite 7
- **Database**: SQLite (for development)
- **Asset Bundler**: Laravel Vite Plugin

## Project Structure
- `/app` - Laravel application code (models, controllers, etc.)
- `/resources/views` - Blade templates
  - `/admin` - Admin panel views for managing content
  - `/auth` - Authentication views
  - `/layouts` - Layout templates
- `/resources/js` - JavaScript files
- `/resources/sass` - SCSS stylesheets
- `/public` - Public assets and entry point
- `/database` - Migrations, seeders, and SQLite database
- `/routes` - Web and API routes

## Database Schema
The application includes migrations for:
- Users, sessions, and authentication
- Blogs - Blog posts with images
- Home Contents - Homepage content management
- Contacts - Contact information
- Footers - Footer content sections
- Jobs, cache, and queue tables

## Features
- User authentication system
- Admin dashboard for content management
- Blog system with CRUD operations
- Home page content management
- Contact form
- Competitions listing
- Equestrian marketplace
- Equine directory
- Responsive design with Bootstrap 5

## Development Workflow
The application runs two services concurrently:
1. **Laravel Server** (Port 5000) - Serves the PHP application
2. **Vite Dev Server** (Port 5173) - Hot module replacement for assets

## Environment Configuration
- Database: SQLite (`database/database.sqlite`)
- Session driver: Database
- Queue connection: Database
- Cache store: Database
- Mail driver: Log (for development)

## Admin Panel
The application includes an admin panel accessible for managing:
- Blogs
- Contacts
- Home content
- Footer sections

## Recent Setup (October 27, 2025)
- Configured for Replit environment
- Set up Vite with host allowance for Replit proxy
- Installed all PHP and Node.js dependencies
- Ran database migrations
- Built frontend assets
- Configured workflow to run Laravel + Vite concurrently
