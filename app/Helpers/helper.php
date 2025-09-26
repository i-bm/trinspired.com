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
            'name' => 'Secure Access',
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
        // [
        //     'name' => 'Trading Solutions',
        //     'url' => route('services.trading'),
        // ],
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
            'title' => 'Cloud Computing',
            'description' => 'High performance cloud computing orchestration for higher efficiencies...',
            'image' => 'assets/images/backgrounds/cloud.jpg',
            'url' => route('services.cloud'),
        ],
        [
            'title' => 'Disaster Recovery-Business Continuity',
            'description' => 'Continuity Assurance & Failover in seconds for any application on any device',
            // 'description' => 'Winning strategy across verticals',
            'image' => 'assets/images/backgrounds/disaster_recover.png',
            'url' => route('services.disaster'),
        ],
        [
            // 'title' => 'Secure Access to Any Application on Any Device Anywhere',
            'title' => 'Secure Access & Connection Acceleration',
            'description' => 'Local & Remote secure access orchestration that speeds up app connection & isolates endpoint infections',
            // 'description' => 'Securely access any application on any device anywhere',
            'image' => 'assets/images/backgrounds/secure_access.jpg',
            'url' => route('services.secure'),
        ],
        // [
        //     'title' => 'Secure Access & Connection Acceleration',
        //     'description' => 'Local & Remote secure access orchestration that speeds up app connection & isolates endpoint infections',
        //     'image' => 'assets/images/backgrounds/secure.png',
        //     'url' => route('services.secure'),
        // ],
        [
            'title' => 'Acronis Advanced Endpoint Security',
            'description' => 'NextGen AI Cybersecurity with multi domain referencing for holistic defense',
            'image' => 'assets/images/backgrounds/acronis.jpg',
            'url' => route('services.acronis'),
        ],
        [
            'title' => 'Telecommunications Services',
            'description' => 'Versatile professional telecom services delivery across continents.',
            'image' => 'assets/images/backgrounds/telecom.jpg',
            'url' => route('services.telecom'),
        ],
    ];

}
function testimonials()
{
    return [
        [
            'title' => 'Testimonials',
            'description' => 'The team at Trinspired Consult knows what they are doing',
            'name' => 'Todd Higgins',
            'Company' => 'Insurance Company ',
            // 'role' => 'CFO',
            'image' => 'assets/images/testimonial/testimonials-1-2.png',
        ],
        [

            'title' => 'Testimonials',
            'description' => "⁠If Trinspired Consult is your cloud infrastructure and data protection service provider, we'll award you the contract",
            'name' => 'Gordon King',
            'Company' => 'Pendleton Trading',
            // 'role' => 'CFO',
            'image' => 'assets/images/testimonial/testimonials-2-2.png',
        ],
        [
            'title' => 'Testimonials',
            'description' => 'Since Trinspired Consult started hosting our production infrastructure, all the complaints from users have ceased.',
            'name' => 'James Fletcher',
            'Company' => 'Financial Institution',
            // 'role' => 'CFO',
            'image' => 'assets/images/testimonial/testimonials-2-3.png',
        ],
    ];
}


function telecom_services()
{
    return [
        [
            'name' => 'Telecom Network Delivery & Support',
            'layout' => 'lt-image-right',
            'image' => 'telecom.jpg',
            'content' => 'We specialize in the comprehensive delivery and seamless installation of integrated telecommunications networks, ensuring that every component is expertly configured to meet the unique requirements of our clients. Our commitment extends far beyond the initial setup, as we provide robust and ongoing technical after-sales support to guarantee optimal network performance, reliability, and client satisfaction throughout the lifecycle of the solution.',
        ],
        [
            'name' => 'Equipment Testing & Export',
            'layout' => 'rt-image-left',
            'image' => 'testing.jpg',
            'content' => 'We source telecom equipment from top global vendors, conduct thorough technical testing, and handle all export logistics and compliance. Our value-added services ensure smooth international delivery and deployment, supporting partners and customers for reliable, high-performance operations in any country.',
        ],
        [
            'name' => 'M&A Expertise',
            'layout' => 'lt-image-right',
            'image' => 'telecom-2.jpg',
            'content' => 'M&A expertise of B2B and S2C operators in African countries - technical, financial, commercial, marketing analysis with strategy options for business development.',
        ],
        [
            'name' => 'Telecom Investment Opportunities',
            'layout' => 'rt-image-left',
            'image' => 'telecom-3.jpg',
            'content' => 'We offer comprehensive analysis of telecom investment opportunities, including startups and diversification of products, services, and market share. Our services ensure clients have access to the best investment opportunities and develop optimal strategies for business development.',
        ],
    ];
}


function acronis_services()
{
    return [
        [
            'name' => 'Lightning-fast endpoint threat detection and incident analysis',
            'layout' => 'lt-image-right',
            'image' => 'acronis.jpg',
            'content' => '<p>Unlock minutes-not-hours analysis at a scale with automated correlation and MI-based guided attack interpretations</p> <p>Increase visibility across MITRE ATT&CK®</p> <p>Get better outcomes and fewer false positives with prioritization of potential security incidents</p>',
        ],
        [
            'name' => 'Unique recovery capabilities for true business continuity',
            'layout' => 'rt-image-left',
            'image' => 'acronis_2.jpg',
            'content' => '<p>Protect across the NIST framework with comprehensive threat response tools – Identify, Protect, Detect, Respond & Recover</p> <p>Count on pre-integrated backup and recovery capabilities for true resilience where point-security solutions fail</p><p>Streamline remediation with a single-click response</p>',
        ],
        [
            'name' => 'Rapid turn-on and scale with an MSP-class platform',
            'layout' => 'lt-image-right',
            'image' => 'acronis_3.jpg',
            'content' => '<p>Turn on services rapidly on an existing Acronis console and software agent</p> <p>GScale services across multiple clients while preserving healthy margins – minimize OpEx by removing the need for a large security teams to operate</p><p>Work with a vendor ally focused on your success – not competing with you for your customer business</p>',
        ],
        // [
        //     'name' => 'Automated response to advanced threats',
        //     'layout' => 'rt-image-left',
        //     'image' => 'acronis-4.jpg',
        //     'content' => '<p>Automated response to advanced threats</p> <p>Get better outcomes and fewer false positives with prioritization of potential security incidents</p>',
        // ],
    ];
}
