<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<div class="w-full bg-gradient-to-r from-violet-800 to-violet-900">
    <!-- Main Footer -->
    <div class="py-10 border-b border-white/10">
        <div class="container px-4 mx-auto max-w-7xl">
            <div class="grid grid-cols-1 gap-8 md:grid-cols-4">
                <!-- Church Info -->
                <div class="space-y-4">
                    <!-- Church Logo and Name -->
                    <a href="/" wire:navigate class="flex items-center space-x-3">
                        <!-- Application Logo -->
                        <x-application-logo class="w-10 h-10" />

                        <!-- Church Name -->
                        <div class="hidden md:block">
                            <div class="text-lg font-bold text-white">CHRIST FRONTIERS</div>
                            <div class="text-xs font-medium tracking-wider text-yellow-300">
                                MISSION INTERNATIONAL
                            </div>
                        </div>
                    </a>
                    
                    <p class="text-violet-200">
                        A place of worship, fellowship, and spiritual growth. 
                        Transforming lives through the Gospel of Jesus Christ.
                    </p>
                    
                    <!-- Social Media -->
                    <div class="flex space-x-3">
                        <a href="#" class="flex items-center justify-center w-8 h-8 text-white transition-colors duration-300 rounded-full bg-white/10 hover:bg-yellow-500">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                        <a href="#" class="flex items-center justify-center w-8 h-8 text-white transition-colors duration-300 rounded-full bg-white/10 hover:bg-yellow-500">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.213c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                            </svg>
                        </a>
                        <a href="#" class="flex items-center justify-center w-8 h-8 text-white transition-colors duration-300 rounded-full bg-white/10 hover:bg-yellow-500">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                        <a href="#" class="flex items-center justify-center w-8 h-8 text-white transition-colors duration-300 rounded-full bg-white/10 hover:bg-yellow-500">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="mb-4 text-lg font-bold text-white">Quick Links</h4>
                    <ul class="space-y-2">
                        <li>
                            <a href="/" wire:navigate class="transition-colors duration-300 text-violet-200 hover:text-yellow-300">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="/calendar" wire:navigate class="transition-colors duration-300 text-violet-200 hover:text-yellow-300">
                                Calendar
                            </a>
                        </li>
                       
                        <li>
                            <a href="/about" wire:navigate class="transition-colors duration-300 text-violet-200 hover:text-yellow-300">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="/contact" wire:navigate class="transition-colors duration-300 text-violet-200 hover:text-yellow-300">
                                Contact Us
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Ministries -->
                <div>
                    <h4 class="mb-4 text-lg font-bold text-white">Our Ministries</h4>
                    <ul class="space-y-2">
                        <li>
                            <a href="#" class="transition-colors duration-300 text-violet-200 hover:text-yellow-300">
                                Youth Ministry
                            </a>
                        </li>
                        <li>
                            <a href="#" class="transition-colors duration-300 text-violet-200 hover:text-yellow-300">
                                Women's Fellowship
                            </a>
                        </li>
                        <li>
                            <a href="#" class="transition-colors duration-300 text-violet-200 hover:text-yellow-300">
                                Children's Church
                            </a>
                        </li>
                        <li>
                            <a href="#" class="transition-colors duration-300 text-violet-200 hover:text-yellow-300">
                                Prayer Ministry
                            </a>
                        </li>
                        <li>
                            <a href="#" class="transition-colors duration-300 text-violet-200 hover:text-yellow-300">
                                Outreach & Evangelism
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h4 class="mb-4 text-lg font-bold text-white">Contact Us</h4>
                    <ul class="space-y-3">
                        <li class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-yellow-300 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span class="text-violet-200">
                                P. O. Box 571, Wa<br>
                                Upper West Region, Ghana
                            </span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <svg class="w-5 h-5 text-yellow-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <span class="text-violet-200">+233 24 478 1743</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <svg class="w-5 h-5 text-yellow-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89-4.26a2 2 0 012.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <span class="text-violet-200">info@christfrontiers.org</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <svg class="w-5 h-5 text-yellow-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="text-violet-200">Sunday Services:<br>8:00 AM & 10:00 AM</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom Footer -->
    <div class="py-6 bg-gradient-to-r from-violet-900 to-violet-950">
        <div class="container px-4 mx-auto max-w-7xl">
            <div class="flex flex-col items-center justify-between md:flex-row">
                <!-- Copyright -->
                <div class="mb-4 text-center md:mb-0 md:text-left">
                    <p class="text-sm text-violet-300">
                        &copy; {{ date('Y') }} <span class="font-bold text-white">Christ Frontiers Mission International</span>. 
                        All rights reserved.
                    </p>
                    <p class="mt-1 text-xs text-violet-400">
                        Spreading the Gospel, Transforming Lives, Building Community
                    </p>
                </div>

                <!-- Legal Links -->
                <div class="flex flex-wrap items-center justify-center gap-4">
                    
                    <div class="w-px h-4 bg-violet-600"></div>
                    <a href="/terms" wire:navigate class="text-sm transition-colors duration-300 text-violet-300 hover:text-yellow-300">
                        Terms and Conditions
                   
                </div>
            </div>
        </div>
    </div>
</div>