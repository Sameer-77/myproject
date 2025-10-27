<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\HomeContent;
use App\Models\Contact;
use App\Models\Footer;
use App\Models\Blog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create Admin User
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@gulfequestrian.com',
            'password' => Hash::make('password'),
        ]);

        // Seed Home Contents
        HomeContent::create([
            'key' => 'hero_title',
            'title' => 'Welcome to Gulf Equestrian',
            'description' => 'Premier equestrian events and competitions in the Gulf region',
            'image' => null,
        ]);

        HomeContent::create([
            'key' => 'about_heading',
            'title' => 'About Gulf Equestrian',
            'description' => 'We are dedicated to promoting excellence in equestrian sports across the Gulf region. Our world-class facilities and expert trainers ensure the highest standards of competition.',
            'image' => null,
        ]);

        HomeContent::create([
            'key' => 'services_heading',
            'title' => 'Our Services',
            'description' => 'From training to competitions, we offer comprehensive equestrian services for riders of all levels.',
            'image' => null,
        ]);

        // Seed Contact Information
        Contact::create([
            'phone' => '+1(206)551-5586',
            'email' => 'info@gulfequestrian.com',
            'address' => 'Dubai, United Arab Emirates',
            'map_url' => 'https://maps.google.com',
            'whatsapp' => '+1(206)551-5586',
            'business_hours' => 'Mon-Fri: 8:00 AM - 6:00 PM, Sat-Sun: 9:00 AM - 4:00 PM',
        ]);

        // Seed Footer Information
        Footer::create([
            'title' => 'About Us',
            'description' => 'Gulf Equestrian is the leading equestrian center in the Gulf region, dedicated to excellence in horse riding and competitions.',
            'facebook_url' => 'https://facebook.com/gulfequestrian',
            'twitter_url' => 'https://twitter.com/gulfequestrian',
            'instagram_url' => 'https://instagram.com/gulfequestrian',
            'linkedin_url' => 'https://linkedin.com/company/gulfequestrian',
            'youtube_url' => null,
        ]);

        Footer::create([
            'title' => 'Quick Links',
            'description' => 'Navigate through our services, competitions, and marketplace offerings.',
            'facebook_url' => null,
            'twitter_url' => null,
            'instagram_url' => null,
            'linkedin_url' => null,
            'youtube_url' => null,
        ]);

        // Seed Sample Blogs
        Blog::create([
            'title' => 'Preparing for Your First Equestrian Competition',
            'description' => 'Tips and tricks for first-time competitors. Learn how to prepare yourself and your horse for a successful competition experience.',
            'image' => null,
        ]);

        Blog::create([
            'title' => 'The Art of Dressage: A Complete Guide',
            'description' => 'Explore the elegant world of dressage and discover the techniques that make this discipline so captivating.',
            'image' => null,
        ]);

        Blog::create([
            'title' => 'Horse Care Essentials Every Rider Should Know',
            'description' => 'From nutrition to grooming, learn the fundamental aspects of proper horse care that every equestrian should master.',
            'image' => null,
        ]);
    }
}
