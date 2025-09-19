<?php

// Lindungi file agar tidak bisa diakses langsung dari browser
if (basename(__FILE__) == basename($_SERVER['SCRIPT_FILENAME'])) {
    die('Access denied.');
}

// Mengembalikan array yang berisi semua data untuk website
return [
    'profile' => [
        'name' => 'Clarissa Geneviere',
        'tagline' => 'UI/UX Designer & Business Technology Enthusiast',
        'email' => 'clarissa.g@email.com',
        'linkedin_url' => 'https://linkedin.com/in/yourprofile',
        'github_url' => 'https://github.com/yourprofile',
    ],
    'about' => [
        'title' => 'About Me',
        'content' => "Hello! I'm Clarissa, a Business Information Technology student at BINUS University with a deep passion for UI/UX Design.

I believe great design is born at the intersection of **business strategy** and **user empathy**. My goal is to translate complex business challenges into simple, intuitive, and beautiful user experiences.

My skills include:
* User Research & Analysis
* Wireframing & Prototyping
* Visual Design
* Basic Database Management (MySQL)"
    ],
    'skills' => [
        'title' => 'Software & Tools',
        'items' => [ 'Figma', 'Canva', 'Adobe Illustrator', 'MySQL', 'Java', 'PHP' ]
    ],
    'projects' => [
        'title' => 'Featured Projects',
        'items' => [
            [
                'title' => 'Redesign Aplikasi Mobile Banking',
                'description' => 'Studi kasus untuk merancang ulang alur transfer yang lebih efisien dan ramah pengguna.',
                'tags' => ['UI/UX', 'Figma', 'Mobile App'],
                'link' => '#'
            ],
            [
                'title' => 'Website E-commerce UMKM Kopi Senja',
                'description' => 'Membantu UMKM go-digital dengan merancang website e-commerce yang informatif dan mudah digunakan.',
                'tags' => ['Web Design', 'UI/UX', 'Branding'],
                'link' => '#'
            ],
            [
                'title' => 'Dashboard Analitik Penjualan',
                'description' => 'Desain antarmuka untuk dashboard internal perusahaan agar data penjualan mudah dibaca dan dianalisis.',
                'tags' => ['Data Visualization', 'UI Design', 'Figma'],
                'link' => '#'
            ]
        ]
    ],
    'experience' => [
        'title' => 'Work Experience',
        'items' => [
            [
                'role' => 'Social Media Intern',
                'company' => 'Monstrans',
                'period' => 'Juni 2024 - Agustus 2024',
                'description' => 'Mengelola dan membuat konten visual untuk platform media sosial, berhasil meningkatkan *engagement rate* sebesar 15%.'
            ]
        ]
    ],
    'certification' => [
        'title' => 'Certification',
        'name' => 'Cisco Certified Support Technician (CCST)',
        'year' => '2023'
    ]
];