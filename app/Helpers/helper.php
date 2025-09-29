<?php

function company()
{
    return [
        'name' => 'Trinspired Consult',
        'phone' => '+254 723 456 789',
        'email' => 'info@trinspiredconsult.com',
        'address' => '4th Floor, Silverstream House 45 Fitzroy Street, Fitzrovia, London, W1T 6EB United Kingdom',
        'address_africa' => '14 Senchi Street, Airport Residential Area, Airport, Accra, Ghana',
        'description' => 'Trinspired Consult provides a range of Telecommunication, Information Technology, Business Consultancy, and Trading services, leveraging decades of experience and a team of international experts to deliver solutions for institutions in Europe and Africa. The company offers specialized  Telecommunication and IT services like Cloud Computing and Business Continuity Planning, which integrate multiple technologies to ensure high availability of data and systems.',
    ];
}

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
        [
            'name' => 'Acronis Security',
            'url' => route('services.acronis'),
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
            'title' => 'Acronis Advanced Endpoint Security + EDR & XDR',
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
            // 'name' => 'CFO',
            'Company' => 'An Insurance Company ',
            // 'role' => 'CFO',
            'image' => 'assets/images/testimonial/testimonials-1-2.png',
        ],
        [

            'title' => 'Testimonials',
            'description' => "⁠If Trinspired Consult is your cloud infrastructure and data protection service provider, we'll award you the contract",
            'name' => '',
            'Company' => 'A National Regulator to a software service provider',
            // 'role' => 'CFO',
            'image' => 'assets/images/testimonial/testimonials-2-2.png',
        ],
        [
            'title' => 'Testimonials',
            'description' => '⁠⁠Since Trinspired Consult started hosting our production infrastructure, all the complaints from users have ceased',
            'name' => '',
            'Company' => 'A Financial Institution',
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
            'name' => 'Mergers and Acquisitions (M&A) Expertise',
            'layout' => 'lt-image-right',
            'image' => 'telecom-2.jpg',
            'content' => 'We provide M&A services for B2B and S2C operators in Europe and African countries. Our service provides complete technical, financial, commercial and marketing analysis with strategy options for business development.',
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
            'name' => 'Modernize your security service stack with XDR designed for service providers.',
            'layout' => 'lt-image-right',
            'image' => 'acronis_incident_1.webp',
            'content' => '<p>Cyberattacks become increasingly sophisticated and every business is vulnerable. To protect their clients, MSPs offering security services have had to choose between insufficient, incomplete protection, or complex solutions that are expensive and time consuming to deploy and maintain.</p>',
        ],
        [
            'name' => 'Lightning-fast endpoint threat detection and incident analysis',
            'layout' => 'rt-image-left',
            'image' => 'acronis.jpg',
            'content' => '<p>Unlock minutes-not-hours analysis at a scale with automated correlation and MI-based guided attack interpretations</p> <p>Increase visibility across MITRE ATT&CK®</p> <p>Get better outcomes and fewer false positives with prioritization of potential security incidents</p>',
        ],
        [
            'name' => 'Unique recovery capabilities for true business continuity',
            'layout' => 'lt-image-right',
            'image' => 'acronis_2.jpg',
            'content' => '<p>Protect across the NIST framework with comprehensive threat response tools – Identify, Protect, Detect, Respond & Recover</p> <p>Count on pre-integrated backup and recovery capabilities for true resilience where point-security solutions fail</p><p>Streamline remediation with a single-click response</p>',
        ],
        [
            'name' => 'Rapid turn-on and scale with an MSP-class platform',
            'layout' => 'rt-image-left',
            'image' => 'acronis_3.jpg',
            'content' => '<p>MSP-class EDR designed to DETECT and RESPOND to advanced cyber threats and attacks that sneak past other defenses with guided interpretations for streamlined analysis, and unique recovery capabilities for true business continuity.</p>',
        ],
        [
            'name' => 'Unlock complete protection with XDR that spans across NIST',
            'layout' => 'lt-image-right',
            'image' => 'acronis_incident_2.webp',
            'content' => '<p>Stop counting on multiple-point security solutions for protection against the plethora of complex threats.</p> <p>Comprehensive protection of endpoints, vulnerable attack surfaces and data doesn’t have to requires multiple solution integrations introducing high resource needs and costs, security silos, long time to value and additional staffing.</p>',
        ],
    ];
}

    function cloud_use_cases()
    {
        return [
            [
                'name' => 'Migration from local to cloud infrastructure',
                'image' => 'cloud-1.jpg',
                'content' => '<p>Local or on-premise production systems are migrated to cloud infrastructure at record speeds and at increased performance and availability Seamless transition you can trust!</p>',
                'layout' => 'lt-image-right',
            ],
            [
                'name' => 'Cloud deployment',
                'image' => 'cloud-2.jpg',
                'content' => '<p>Servers are provisioned in seconds for application deployments and hosting. Only high performance, reliable and secure components are employed in the infrastructure Cloud deployment made easy and cost-effective</p>',
                'layout' => 'rt-image-left',
            ],
            [
                'name' => 'Multi-Cloud deployment',
                'image' => 'cloud-3.jpg',
                'content' => '<p>Multi-cloud architecture for multi-location data protection, multi-layer business continuity strategies and more. Multi-cloud services for lower recovery time objective.</p>',
                'layout' => 'lt-image-right',
            ],
        ];
    }


    function news()
    {
        return [
            [
                'title' => 'Microsoft Seizes 338 Domains in RaccoonO365 Takedown',
                'image' => 'FY26_Q1_Cybersecurity-DCU-Disruption-HeaderSocial_v3-1.png',
                'content' => "Microsoft's Digital Crimes Unit (DCU) has dismantled RaccoonO365, one of the fastest-growing phishing services targeting Microsoft 365 accounts. Acting under a court order from the Southern District of New York, the DCU seized 338 domains tied to the operation, disrupting its infrastructure. Tracked by Microsoft as Storm-2246, RaccoonO365 sold phishing kits that impersonated Microsoft branding, enabling even unskilled actors to steal user credentials on a large scale.",
                "date" => "2025-09-22",
                "url" => "https://blogs.microsoft.com/on-the-issues/2025/09/16/microsoft-seizes-338-websites-to-disrupt-rapidly-growing-raccoono365-phishing-service/",
            ],
            [
                'title' => 'Google Patches Sixth Chrome Zero-Day Exploited in Attacks This Year',
                'image' => 'Google-Chrome.jpg',
                'content' => "Google has released emergency security updates to patch a Chrome zero-day vulnerability. This is the sixth zero-day tagged as exploited in attacks since the beginning of the year. The zero-day vulnerability is caused by a type confusion weakness in the web browser's V8 JavaScript engine. While Chrome automatically updates when new security patches are available, users can speed up the process manually using the browser's Help menu",
                "date" => "2025-09-18",
                "url" => "https://www.bleepingcomputer.com/news/security/google-patches-sixth-chrome-zero-day-exploited-in-attacks-this-year/",
            ],
            [
                'title' => 'New FileFix Variant Delivers StealC Malware Through Multilingual Phishing Site',
                'image' => '04edd27cb6f57ba9fc9390de16b1409d.jpg',
                'content' => "A new campaign that's leveraging a variant of the FileFix social engineering tactic to deliver the StealC information stealer malware was discovered by Acronis researchers. The observed campaign uses a highly convincing, multilingual phishing site (e.g., fake Facebook Security page), with anti-analysis techniques and advanced obfuscation to evade detection. The final stage deploys a loader that executes the StealC infostealer, targeting browsers, cryptocurrency wallets, messaging apps, and cloud credentials.",
                "date" => "2025-09-18",
                "url" => "https://www.acronis.com/en/tru/posts/filefix-in-the-wild-new-filefix-campaign-goes-beyond-poc-and-leverages-steganography/",
            ],
        ];
    }
