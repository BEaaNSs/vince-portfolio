<?php

return [
    'name' => 'Vince M. Ybañez',
    'role' => 'Junior Software Engineer / Full-Stack Developer',
    // Resume spells the address "gmai.com". Keep unconfirmed contact data unpublished.
    'email' => env('PORTFOLIO_EMAIL', 'vinceybanez722@gmail.com'),
    'phone' => '+63906-536-2004',
    'facebook' => 'https://www.facebook.com/vince.ybanez.3/',
    'instagram' => 'https://www.instagram.com/04beans_/',
    'github' => env('PORTFOLIO_GITHUB', 'https://github.com/BEaaNSs'),
    'linkedin' => env('PORTFOLIO_LINKEDIN', 'https://www.linkedin.com/in/vince-yba%C3%B1ez-ab5ba3397/'),
    'resume_url' => env('PORTFOLIO_RESUME_URL', ''),
    'portraits' => ['barong' => 'images/vince-barong.webp', 'graduation' => 'images/vince-graduation.webp'],
    'projects' => [
        [
            'slug' => 'mopa', 'title' => 'MOPA — Wellcome City Hotel', 'type' => 'Professional',
            'summary' => 'Operations software for business workflows, transactions, reports, and dashboard monitoring.',
            'details' => 'MOPA (MyBiz Operation Process Accelerator) is a business operations platform used for transaction handling, reporting, master-data management, and dashboard monitoring. These screenshots show the login screen and a sample dashboard view. I contributed to MOPA-related development work at NPAX Cebu Corporation. Additional technical details and contribution notes will be expanded soon.',
            'stack' => ['Business Operations', 'Android', 'Java', 'Kotlin', 'C#', 'ASP.NET Core MVC', 'SQLite'],
            'live_url' => 'https://mopa.n-pax.com/mopa/', 'repo_url' => '', 'image' => 'images/mopa-login.webp', 'gallery' => ['images/mopa-login.webp', 'images/mopa-dashboard.webp'],
        ],
        [
            'slug' => 'replay', 'title' => 'Replay — Court Booking Platform', 'type' => 'Web Platform',
            'summary' => 'Court booking platform with reservation administration and promotional voucher functionality.',
            'details' => 'Replay is a pickleball court booking platform with a public-facing website, date-based reservation selection, and an availability calendar. These screenshots show the website homepage and Main Court reservation date selector. More technical details and my specific contributions will be added soon.',
            'stack' => ['Court Bookings', 'Reservations', 'Admin Dashboard', 'Vouchers'],
            'live_url' => 'https://www.replaypickleballph.com/', 'repo_url' => '', 'image' => 'images/replay-home.webp', 'gallery' => ['images/replay-home.webp', 'images/replay-booking-calendar.webp'],
        ],
        [
            'slug' => 'breathebetter', 'title' => 'BreatheBetter', 'type' => 'Academic',
            'summary' => 'Student wellness companion app with mood check-ins, guided breathing, AI-powered support, and counselor access.',
            'details' => 'BreatheBetter is a student-focused wellness application designed to help students manage mental health through daily mood check-ins, guided breathing exercises, AI-powered support, and access to school counselors. The portfolio now uses the provided landing-page screenshot and links to the live presentation site. I contributed to quality and integration testing, documentation, project pitching, and some UI work.',
            'stack' => ['Flutter', 'Dart', 'Python', 'PostgreSQL', 'AI Support'],
            'live_url' => 'https://subelarioisrael.github.io/breathebetter-site/', 'repo_url' => '', 'image' => 'images/breathebetter-home.webp', 'gallery' => ['images/breathebetter-home.webp'],
        ],
    ],
];
