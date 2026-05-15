<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HomepageSection;

class HomepageSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // HERO SECTION
        HomepageSection::updateOrCreate(
            [
                'section_key' => 'hero',
            ],
            [
                'title' => 'Christ Frontiers Mission International',

                'subtitle' => 'Evangelizing the Nations',

                'content' => 'Transforming lives through the Gospel of Jesus Christ.',

                'button_text' => 'Learn More',

                'button_link' => '/about',
            ]
        );

        // ABOUT SECTION
        HomepageSection::updateOrCreate(
            [
                'section_key' => 'about',
            ],
            [
                'title' => 'Who We Are',

                'subtitle' => 'About Our Ministry',

                'content' => "Christ Frontiers Mission International is a Christian ministry committed to spreading the Gospel of Jesus Christ and raising believers who live out their faith with purpose, love, and integrity.\n\nOur mission is to proclaim Christ, disciple believers, and impact communities through the transforming power of the Word of God.\n\nThrough worship, teaching, prayer, and outreach, we equip individuals and families to serve God and humanity faithfully.",

                'button_text' => 'Read More',

                'button_link' => '/about',

                'image' => 'https://images.unsplash.com/photo-1519491050282-cf00c82424b4?q=80&w=1200',
            ]
        );

        HomepageSection::updateOrCreate(
    [
        'section_key' => 'mission',
    ],
    [
        'title' => 'Our Mission',

        'subtitle' => 'What We Stand For',

        'content' => "Our mission is to proclaim the Gospel of Jesus Christ, raise disciples, strengthen believers through sound biblical teaching, and impact communities through prayer, evangelism, and compassionate service.",

        'button_text' => 'Join The Mission',

        'button_link' => '/contact',
    ]
);

HomepageSection::updateOrCreate(
    [
        'section_key' => 'partnership',
    ],
    [
        'title' => 'Partner With The Mission',

        'subtitle' => 'Support The Work Of God',

        'content' => "Join us in spreading the Gospel, planting churches, supporting missions, and transforming lives around the world through your prayers, resources, and partnership.",

        'button_text' => 'Become A Partner',

        'button_link' => '/contact',
    ]
);

HomepageSection::updateOrCreate(
    [
        'section_key' => 'leadership',
    ],
    [
        'title' => 'Meet Our Leadership',

        'subtitle' => 'Servant Leaders',

        'content' => "Our leadership team is committed to serving God’s people with integrity, humility, biblical truth, and spiritual guidance.",

        'button_text' => 'View Leadership',

        'button_link' => '/leadership',
    ]
);
    }
}