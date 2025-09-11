<?php

function nav_services()
{
    return [
        [
            'name' => 'Cloud Computing',
            'url' => route('services.cloud'),
        ],
        [
            'name' => 'Disaster Recovery',
            'url' => route('services.disaster'),
        ],
        [
            'name' => 'Secure Success',
            'url' => route('services.secure'),
        ],
        [
            'name' => 'Telecom Services',
            'url' => route('services.telecom'),
        ],
        [
            'name' => 'Business Consultancy',
            'url' => route('services.consultancy'),
        ],
        [
            'name' => 'Trading Solutions',
            'url' => route('services.trading'),
        ],
    ];

}

function services()
{
    return [
        [
            'name' => 'Cloud Computing',
            'url' => route('services.cloud'),
            'description' => 'High Performance Cloud Computing Orchestration for Higher Efficiencies and Peace of Mind.',
            'image' => 'assets/images/services/cloud.webp',
            'content' => 'We provide turn-key cloud computing services that assures highest performance and availability, compliance with highest global data protection regulation, business continuity, multi-time zone support and connectivity to over 55 datacenters around the world and on every continent.',
        ],
        [
            'name' => 'Disaster Recovery-Business Continuity',
            'url' => route('services.disaster'),
            'description' => 'Continuity Assurance & Failover in seconds for any application on any device.',
            'image' => 'assets/images/services/services-1-3.jpg',
        ],
        [
            'name' => 'Secure Success to Any Application on Any Device Anywhere',
            'url' => route('services.secure'),
            'description' => 'Local & Remote secure access orchestration that speeds up app connection & isolates endpoint infections.',
            'image' => 'assets/images/services/services-1-1.jpg',
        ],
        [
            'name' => 'Telecommunications Services',
            'url' => route('services.telecom'),
            'description' => 'Global Voice, Data & Cloud Connectivity Solutions.',
            'image' => 'assets/images/services/services-2-1.jpg',
        ],
        [
            'name' => 'Business Consultancy & Trading Solutions',
            'url' => route('services.consultancy'),
            'description' => 'Strategic Consulting for Digital Transformation & Trading Solutions.',
            'image' => 'assets/images/services/services-3-1.jpg',
        ],
    ];
}

function slider()
{
    return [
        [
            'title' => 'High performance cloud computing orchestration for higher efficiencies and peace of mind',
            'description' => 'Private, Hybrid, Multi-Cloud & More',
            'image' => 'assets/images/backgrounds/cloud.jpg',
            'url' => route('services.cloud'),
        ],
        [
            'title' => 'Continuity Assurance & Failover in seconds for any application on any device',
            'description' => 'Winning strategy across verticals',
            'image' => 'assets/images/backgrounds/2.avif',
            'url' => route('services.disaster'),
        ],
        [
            'title' => 'Secure Access to Any Application on Any Device Anywhere',
            'description' => 'Local & Remote secure access orchestration that speeds up app connection & isolates endpoint infections',
            'image' => 'assets/images/backgrounds/3.avif',
            'url' => route('services.secure'),
        ],
        [
            'title' => 'ACRONIS Advanced Endpoint Security + EDR with MS 365 Email Security',
            'description' => 'NextGen AI Antivirus +EDR - Backup Share & Recovery',
            'image' => 'assets/images/backgrounds/4.avif',
            'url' => route('services.secure'),
        ],
        [
            'title' => 'Telecommunications Services',
            'description' => 'NextGen AI Antivirus +EDR - Backup Share & Recovery',
            'image' => 'assets/images/backgrounds/telecom.jpg',
            'url' => route('services.telecom'),
        ],
    ];
}
