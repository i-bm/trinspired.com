<?php

function company()
{
    return [
        'name' => 'Trinspired Consult',
        'phone' => '+254 723 456 789',
        'email' => 'info@trinspiredconsult.com',
        'address' => '4th Floor, Silverstream House 45 Fitzroy Street, Fitzrovia, London, W1T 6EB United Kingdom',
        'address_africa' => '14 Senchi Street, Airport Residential Area, Airport, Accra, Ghana',
        'description' => 'Trinspired Consult provides a range of Telecommunication, Information Technology, Business Consultancy, and Trading services, leveraging decades of experience and a team of international experts to deliver solutions for institutions in Europe and Africa.',
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
        [
            'name' => 'Cybersecurity',
            'url' => route('services.cybersecurity'),
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
            'description' => 'High performance cloud orchestration for maximum efficiency and reliability.',
            'image' => 'assets/images/services/cloud.webp',
            'icon' => 'assets/images/icons-white/cloud-storage.png',
            'content' => 'We provide turn-key cloud computing services that assures highest performance and availability, compliance with highest global data protection regulation, business continuity, multi-time zone support and connectivity to over 55 datacenters around the world and on every continent.',
        ],
        [
            'name' => 'Disaster Recovery',
            'url' => route('services.disaster'),
            'description' => 'Business continuity with instant failover for any application on any device.',
            'image' => 'assets/images/services/services-1-3.jpg',
            'icon' => 'assets/images/icons-white/cloud-storage.png',
        ],
        [
            'name' => 'Secure Access',
            'url' => route('services.secure'),
            'description' => 'Secure remote access that accelerates connections and protects endpoints.',
            'image' => 'assets/images/services/services-1-1.jpg',
            'icon' => 'assets/images/icons-white/encryption.png',
        ],
        [
            'name' => 'Telecommunications',
            'url' => route('services.telecom'),
            'description' => 'Global voice, data and cloud connectivity solutions worldwide.',
            'image' => 'assets/images/services/services-2-1.jpg',
            'icon' => 'assets/images/icons-white/monitoring.png',
        ],
        [
            'name' => 'Business Consultancy',
            'url' => route('services.consultancy'),
            'description' => 'Strategic consulting for digital transformation and trading solutions.',
            'image' => 'assets/images/services/services-3-1.jpg',
            'icon' => 'assets/images/icons-white/settings.png',
        ],
        [
            'name' => 'Cybersecurity',
            'url' => route('services.cybersecurity'),
            'description' => 'Cybersecurity solutions for businesses of all sizes.',
            'image' => 'assets/images/services/services-4-1.jpg',
            'icon' => 'assets/images/icons-white/cyber-security.png',
        ],
    ];
}

function slider()
{
    return [
        [
            'title' => 'High Performance Cloud Computing',
            'description' => 'High performance cloud computing orchestration for higher efficiencies...',
            'image' => 'slider/2.webp',
            'url' => route('services.cloud'),
        ],
        [
            'title' => 'High Availability Disaster Recovery',
            'description' => 'Continuity Assurance & Failover in seconds for any application on any device',
            // 'description' => 'Winning strategy across verticals',
            'image' => 'slider/disaster.jpeg',
            'url' => route('services.disaster'),
        ],
        [
            // 'title' => 'Secure Access to Any Application on Any Device Anywhere',
            'title' => 'Secure Access & Connection Acceleration',
            'description' => 'Local & Remote secure access orchestration that speeds up app connection & isolates endpoint infections',
            // 'description' => 'Securely access any application on any device anywhere',
            'image' => 'slider/1.webp',
            'url' => route('services.secure'),
        ],
        [
            'title' => 'The New SOC Threat Exposure GRC & Remediation All-in-One',
            'description' => 'Apply Cybercyte X-CTEM to unify Threat Exposure, GRC and Remediation.',
            'image' => 'slider/cyber.jpg',
            'url' => route('services.cybersecurity'),
        ],
        [
            'title' => 'Acronis Advanced Endpoint Security + EDR & XDR',
            'description' => 'NextGen AI Cybersecurity with multi domain referencing for holistic defense',
            'image' => 'slider/2.webp',
            'url' => route('services.acronis'),
        ],
        [
            'title' => 'Telecommunications Services',
            'description' => 'Versatile professional Telecom Services',
            'image' => 'slider/telecom.jpeg',
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
            'name' => 'Government Institution',
            'icon' => 'fa-landmark',
            'content' => '<p>A government ministry with multiple departments partnered with Trinspired to centralize all servers and applications in a private cloud architecture that enhanced performance, security and centralized management of all resources. With fixed fees, high availability and business continuity assurance, the ministry reduced infrastructure opex and increased productivity.</p>',
        ],
        [
            'name' => 'Financial Institution',
            'icon' => 'fa-building-columns',
            'content' => '<p>A financial institution with 60+ branches and desktop applications and folders achieved secure access to the banking application and folders from any device on a 99.99% availability infrastructure. With hardened reverse proxy technology, application virtualization and connection acceleration, performance increased drastically. Management testified that since subscribing to Trinspired cloud services, user complaints ceased.</p>',
        ],
        [
            'name' => 'Insurance Institution',
            'icon' => 'fa-shield-halved',
            'content' => '<p>A 40+ years insurance institution put an end to operational inefficiencies after subscribing to Trinspired cloud services. It was supposed to be a 3-month test of the infrastructure but after going live, they decided to maintain it for production. It became a case of high performance, high availability and peace of mind for all stakeholders.</p>',
        ],
        [
            'name' => 'Continental NGO',
            'icon' => 'fa-globe',
            'content' => '<p>A continental NGO partnered with Trinspired to host a desktop version of Infor SunSystems Accounting Software for its users who work everywhere. With application virtualization, compression and session acceleration, users have secured access to applications and folders anywhere.</p>',
        ],
    ];
}

function news()
{
    return [
        [
            'title' => 'Google patches first Chrome zero-day exploited in attacks this year',
            'image' => 's1.webp',
            'content' => "Google has released an emergency security update to patch a zero-day vulnerability in Chrome. This is the first zero-day exploited in attacks this year. The vulnerability is caused by a type confusion weakness in the web browser's V8 JavaScript engine. While Chrome automatically updates when new security patches are available, users can speed up the process manually using the browser's Help menu.",
            'date' => '2026-02-16',
            'url' => 'https://www.bleepingcomputer.com/news/security/google-patches-first-chrome-zero-day-exploited-in-attacks-this-year/',
        ],
        [
            'title' => 'Critical SolarWinds Serv-U Flaws Offer Root Access to Servers',
            'image' => 's2.webp',
            'content' => "The SolarWinds Serv-U file transfer server software has been found to contain a critical vulnerability that allows attackers to gain root access to servers. The vulnerability is caused by a type confusion weakness in the web server's V8 JavaScript engine. While Chrome automatically updates when new security patches are available, users can speed up the process manually using the browser's Help menu.",
            'date' => '2026-02-24',
            'url' => 'https://www.bleepingcomputer.com/news/security/critical-solarwinds-serv-u-flaws-offer-root-access-to-servers/',
        ],
        [
            'title' => 'Lazarus Group Uses Medusa Ransomware in New Attacks',
            'image' => 's3.webp',
            'content' => 'The Lazarus Group has been linked to the use of Medusa ransomware in new attacks. The ransomware is a new variant of the Medusa ransomware that is being used to target servers and desktops. The ransomware is a new variant of the Medusa ransomware that is being used to target servers and desktops.',
            'date' => '2026-02-24',
            'url' => 'https://www.bleepingcomputer.com/news/security/north-korean-lazarus-group-linked-to-medusa-ransomware-attacks/',
        ],

        [
            'title' => 'Microsoft Seizes 338 Domains in RaccoonO365 Takedown',
            'image' => 's3.webp',
            'content' => "Microsoft's Digital Crimes Unit (DCU) has dismantled RaccoonO365, one of the fastest-growing phishing services targeting Microsoft 365 accounts. Acting under a court order from the Southern District of New York, the DCU seized 338 domains tied to the operation, disrupting its infrastructure. Tracked by Microsoft as Storm-2246, RaccoonO365 sold phishing kits that impersonated Microsoft branding, enabling even unskilled actors to steal user credentials on a large scale.",
            'date' => '2025-09-22',
            'url' => 'https://blogs.microsoft.com/on-the-issues/2025/09/16/microsoft-seizes-338-websites-to-disrupt-rapidly-growing-raccoono365-phishing-service/',
        ],
        [
            'title' => 'Google Patches Sixth Chrome Zero-Day Exploited in Attacks This Year',
            'image' => 's2.webp',
            'content' => "Google has released emergency security updates to patch a Chrome zero-day vulnerability. This is the sixth zero-day tagged as exploited in attacks since the beginning of the year. The zero-day vulnerability is caused by a type confusion weakness in the web browser's V8 JavaScript engine. While Chrome automatically updates when new security patches are available, users can speed up the process manually using the browser's Help menu",
            'date' => '2025-09-18',
            'url' => 'https://www.bleepingcomputer.com/news/security/google-patches-sixth-chrome-zero-day-exploited-in-attacks-this-year/',
        ],
        [
            'title' => 'New FileFix Variant Delivers StealC Malware Through Multilingual Phishing Site',
            'image' => 's6.webp',
            'content' => "A new campaign that's leveraging a variant of the FileFix social engineering tactic to deliver the StealC information stealer malware was discovered by Acronis researchers. The observed campaign uses a highly convincing, multilingual phishing site (e.g., fake Facebook Security page), with anti-analysis techniques and advanced obfuscation to evade detection. The final stage deploys a loader that executes the StealC infostealer, targeting browsers, cryptocurrency wallets, messaging apps, and cloud credentials.",
            'date' => '2025-09-18',
            'url' => 'https://www.acronis.com/en/tru/posts/filefix-in-the-wild-new-filefix-campaign-goes-beyond-poc-and-leverages-steganography/',
        ],
    ];
}
