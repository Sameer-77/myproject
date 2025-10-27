# Gulf Equestrian - Laravel CMS Application

## Project Overview
This is a complete Laravel 12 Content Management System (CMS) for Gulf Equestrian, featuring dynamic content management for an equestrian competition and marketplace platform. Admins can manage all website content through an intuitive dashboard without touching code.

## Technology Stack
- **Backend**: Laravel 12 (PHP 8.2)
- **Frontend**: Blade templates, Bootstrap 5, SCSS
- **Build Tool**: Vite 7
- **Database**: SQLite (for development)
- **Asset Bundler**: Laravel Vite Plugin
- **Authentication**: Laravel UI

## CMS Features ✨
### Admin Content Management
Admins can manage all website content dynamically through the admin dashboard:
- **Home Page Sections** - H1, H2, paragraphs, descriptions, images (managed via key-value pairs)
- **Footer Content** - Address, links, social media URLs (Facebook, Twitter, Instagram, LinkedIn)
- **Blog Posts** - Full CRUD with title, description, and image uploads
- **Contact Information** - Phone, email, address, map URL, WhatsApp, business hours

### Global Data Sharing
- **View Composer** - Footer and contact data available on all pages automatically
- **Caching** - 60-second cache for improved performance
- **Dynamic Routes** - All public pages fetch content from database

### Admin Access
- **Login**: Email: `admin@gulfequestrian.com` | Password: `password`
- **Dashboard**: `/admin`
- **Manage Blogs**: `/admin/blogs`
- **Manage Contacts**: `/admin/contacts`
- **Manage Home Content**: `/admin/home_contents`
- **Manage Footers**: `/admin/footers`

## Project Structure
- `/app` - Laravel application code
  - `/Http/Controllers`
    - `PageController.php` - Public-facing pages with dynamic content
    - `/Admin` - Admin CRUD controllers
  - `/Models` - Eloquent models with fillable fields
  - `/Providers/AppServiceProvider.php` - View Composer configuration
- `/resources/views` - Blade templates
  - `/admin` - Admin panel CRUD views
  - `/auth` - Authentication views
  - `/layouts` - Layout templates
- `/database` - Migrations, seeders, and SQLite database
  - `/seeders/DatabaseSeeder.php` - Sample data seeder
- `/routes/web.php` - Clean routes using PageController

## Database Schema
### Enhanced Tables
- **home_contents** - key (unique), title, description, image
- **footers** - title, description, social media URLs
- **contacts** - phone, email, address, map_url, whatsapp, business_hours
- **blogs** - title, description, image
- **users** - name, email, password (Laravel authentication)

## Public Routes
All routes return dynamic content from database:
- `/` - Homepage
- `/about` - About page
- `/competitions` - Competitions listing
- `/marketplace` - Marketplace
- `/equine-directory` - Equine directory
- `/join` - Join page
- `/sell-here` - Sell here page
- `/contact` - Contact page (with dynamic contact info)
- `/blog` - Blog index
- `/blog/{id}` - Single blog post

## Development Workflow
The application runs two services concurrently:
1. **Laravel Server** (Port 5000) - Serves the PHP application
2. **Vite Dev Server** (Port 5173) - Hot module replacement for assets

## Storage Configuration
- **Storage Link**: Created between `public/storage` and `storage/app/public`
- **Image Uploads**: Stored in `storage/app/public/{blogs,home_contents,etc}`
- **Access**: Via `/storage/{path}` URL

## Seeding Data
Run `php artisan db:seed` to populate with sample data:
- Admin user account
- Sample home content sections
- Contact information
- Footer sections with social media
- 3 sample blog posts

## Recent Implementation (October 27, 2025)
✅ Complete CMS system implemented:
1. Updated migrations with key fields and social media columns
2. Fixed all admin controllers with proper CRUD operations
3. Created PageController for dynamic public pages
4. Fixed routes - removed duplicates, added proper controller routes
5. Implemented View Composer for global data sharing
6. Created storage symlink for file uploads
7. Added comprehensive database seeder
8. All admin changes automatically reflect on frontend
9. Configured for Replit environment with Vite proxy support
