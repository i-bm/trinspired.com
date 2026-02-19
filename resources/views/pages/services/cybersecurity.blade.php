@extends('layouts.landing.main')
@section('content')
@include('pages.partials.breadcrumb', ['image' => asset($image ?? 'assets/images/backgrounds/2.webp')])

<style>
    /* CyberCyte-inspired design */
    .cyber-section {
        padding: 80px 0;
    }
    .cyber-section-title {
        font-size: 2rem;
        font-weight: 700;
        color: #080808;
        text-align: center;
        margin-bottom: 3rem;
    }
    .cyber-bg-light {
        background-color: #e8ecf0;
    }
    /* Capabilities grid - 2x3 grey cards */
    .cyber-capability-card {
        background: #f0f2f5;
        border-radius: 12px;
        padding: 2rem;
        height: 100%;
        transition: box-shadow 0.3s ease;
    }
    .cyber-capability-card:hover {
        box-shadow: 0 8px 24px rgba(0,0,0,0.08);
    }
    .cyber-capability-icon {
        width: 56px;
        height: 56px;
        border-radius: 50%;
        background: rgba(0,0,0,0.06);
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1rem;
        color: #444;
    }
    .cyber-capability-icon i {
        font-size: 1.5rem;
    }
    .cyber-capability-title {
        font-weight: 700;
        font-size: 1.1rem;
        color: #333;
        margin-bottom: 0.5rem;
    }
    .cyber-capability-text {
        color: #555;
        font-size: 0.95rem;
        line-height: 1.6;
    }
    /* How it works - 2x3 grid */
    .cyber-how-card {
        padding: 1.5rem 0;
    }
    .cyber-how-icon {
        width: 48px;
        height: 48px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1rem;
        color: #333;
    }
    .cyber-how-icon i {
        font-size: 1.75rem;
    }
    .cyber-how-title {
        font-weight: 700;
        font-size: 1.05rem;
        color: #222;
        margin-bottom: 0.5rem;
    }
    .cyber-how-text {
        color: #555;
        font-size: 0.9rem;
        line-height: 1.6;
    }
    /* Use Cases - 2x2 white cards */
    .cyber-usecase-card {
        background: #fff;
        border-radius: 12px;
        padding: 2rem;
        height: 100%;
        box-shadow: 0 4px 16px rgba(0,0,0,0.06);
        transition: box-shadow 0.3s ease;
    }
    .cyber-usecase-card:hover {
        box-shadow: 0 8px 28px rgba(0,0,0,0.1);
    }
    .cyber-usecase-logo {
        max-height: 48px;
        max-width: 180px;
        margin-bottom: 1rem;
    }
    .cyber-usecase-title {
        font-weight: 700;
        font-size: 1rem;
        color: #333;
        margin-bottom: 0.75rem;
    }
    .cyber-usecase-text {
        color: #555;
        font-size: 0.9rem;
        line-height: 1.65;
    }
    /* CyberCyte AI - two column with eye graphic */
    .cyber-ai-section {
        padding: 80px 0;
    }
    .cyber-ai-title {
        font-size: 2.25rem;
        font-weight: 700;
        color: #0a0a0a;
        margin-bottom: 1.5rem;
    }
    .cyber-ai-text {
        color: #444;
        font-size: 1rem;
        line-height: 1.7;
        margin-bottom: 1.5rem;
    }
    .cyber-ai-feature {
        margin-bottom: 1rem;
        padding-left: 0;
        list-style: none;
    }
    .cyber-ai-feature li {
        display: flex;
        align-items: flex-start;
        gap: 0.5rem;
        margin-bottom: 1rem;
    }
    .cyber-ai-feature li::before {
        content: ">";
        color: #FF8C00;
        font-weight: 700;
        font-size: 1.1rem;
    }
    .cyber-ai-feature li strong {
        flex-shrink: 0;
    }
    .cyber-ai-image-wrap {
        position: relative;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 8px 32px rgba(0,0,0,0.12);
    }
    .cyber-ai-image-wrap img {
        width: 100%;
        height: auto;
        display: block;
    }
    /* Integrations section */
    .cyber-integrations-title {
        font-size: 2rem;
        font-weight: 700;
        color: #0a0a0a;
        text-align: center;
        margin-bottom: 2.5rem;
    }
    .cyber-integration-logo {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 2rem 1.5rem;
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 2px 12px rgba(0,0,0,0.06);
        height: 100%;
        min-height: 100px;
    }
    .cyber-integration-logo img {
        max-height: 48px;
        max-width: 160px;
        object-fit: contain;
        filter: grayscale(100%);
        opacity: 0.8;
    }
    .cyber-integration-logo:hover img {
        filter: grayscale(0%);
        opacity: 1;
    }
    .cyber-integration-name {
        font-weight: 700;
        font-size: 0.95rem;
        color: #333;
        text-align: center;
    }
    /* Why CTEM - horizontal cards with arrow */
    .cyber-ctem-title {
        font-size: 2rem;
        font-weight: 700;
        margin-bottom: 2rem;
    }
    .cyber-ctem-card {
        background: #f0f2f5;
        border-radius: 12px;
        padding: 2rem;
        height: 100%;
        position: relative;
        transition: box-shadow 0.3s ease;
    }
    .cyber-ctem-card:hover {
        box-shadow: 0 8px 24px rgba(0,0,0,0.08);
    }
    .cyber-ctem-card-title {
        font-weight: 700;
        font-size: 1.1rem;
        color: #333;
        margin-bottom: 0.75rem;
    }
    .cyber-ctem-card-text {
        color: #555;
        font-size: 0.95rem;
        line-height: 1.6;
        margin-bottom: 2rem;
    }
    .cyber-ctem-card-arrow {
        position: absolute;
        bottom: 1.25rem;
        right: 1.25rem;
        width: 36px;
        height: 36px;
        border-radius: 50%;
        background: #222;
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        transition: background 0.3s ease;
    }
    .cyber-ctem-card-arrow:hover {
        background: #FF8C00;
        color: #fff;
    }
    .cyber-ctem-card-arrow i {
        font-size: 0.9rem;
    }
</style>

<!--Services Details Start-->
<section class="services-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="services-details__left">
                    <div class="services-details__top-content">
                        <h2 class="services-details__top-title">Unified Threat Exposure & GRC Management with CyberCyte</h2>

                        <p class="services-details__top-text">
                            Don't let attackers exploit information overload to stay unnoticed. Through our partnership with CyberCyte, we deliver an AI-driven X-CTEM (eXtended Continuous Threat Exposure Management) platform that consolidates, governs, and responds to cyber risks across your entire digital environment.
                        </p>
                        <br />
                        <p class="services-details__top-text">
                            CyberCyte unifies threats, vulnerabilities, and risks into a single AI-powered platform for full-spectrum cyber defence. The platform enables businesses to benefit from a single pane of glass by unifying threats, vulnerabilities, hardening issues, and inventory risks—prioritising them and mapping them to compliance standards. It continuously assesses and improves your cyber security infrastructure maturity by executing automated diagnostics and remediation actions.
                        </p>
                    </div>

                    <h4 class="cyber-ctem-title">Why CTEM and Risk Management Matter?</h4>
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="cyber-ctem-card">
                                <h4 class="cyber-ctem-card-title">Unmanaged Assets</h4>
                                <p class="cyber-ctem-card-text">
                                    <strong>73%</strong> of security incidents occur due to unknown or unmanaged assets.
                                </p>
                                <a href="#capabilities" class="cyber-ctem-card-arrow" aria-label="Learn more"><i class="fa-solid fa-chevron-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="cyber-ctem-card">
                                <h4 class="cyber-ctem-card-title">Risk Management Gaps</h4>
                                <p class="cyber-ctem-card-text">
                                    <strong>50%</strong> of all data breaches stem from failures in risk management practices.
                                </p>
                                <a href="#capabilities" class="cyber-ctem-card-arrow" aria-label="Learn more"><i class="fa-solid fa-chevron-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="cyber-ctem-card">
                                <h4 class="cyber-ctem-card-title">The CTEM Advantage</h4>
                                <p class="cyber-ctem-card-text">
                                    CTEM practices reduce the risk of a breach <strong>threefold</strong>
                                </p>
                                <a href="https://cybercyte.com/" target="_blank" rel="noopener" class="cyber-ctem-card-arrow" aria-label="Learn more on CTEM"><i class="fa-solid fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Capabilities Section - CyberCyte design -->
<section id="capabilities" class="cyber-section cyber-bg-light">
    <div class="container">
        <h2 class="cyber-section-title">Capabilities</h2>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="cyber-capability-card">
                    <div class="cyber-capability-icon">
                        <i class="fa-solid fa-arrows-rotate"></i>
                    </div>
                    <h4 class="cyber-capability-title">Exposure Management</h4>
                    <p class="cyber-capability-text">Discover security gaps, unknown risks, and shadow IT across your organisation.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="cyber-capability-card">
                    <div class="cyber-capability-icon">
                        <i class="fa-solid fa-bug"></i>
                    </div>
                    <h4 class="cyber-capability-title">Attack Surface Management (ASM)</h4>
                    <p class="cyber-capability-text">Continuously discover and analyse your organisation's internal and external digital assets.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="cyber-capability-card">
                    <div class="cyber-capability-icon">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <h4 class="cyber-capability-title">Continuous Security Testing</h4>
                    <p class="cyber-capability-text">Proactively identify exploitable vulnerabilities and assess your organisation's true risk exposure.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="cyber-capability-card">
                    <div class="cyber-capability-icon">
                        <i class="fa-solid fa-chart-line"></i>
                    </div>
                    <h4 class="cyber-capability-title">GRC Management</h4>
                    <p class="cyber-capability-text">Streamline GRC processes and enable continuous risk management aligned to ISO 27001, NIST, CIS, PCI, and DORA.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="cyber-capability-card">
                    <div class="cyber-capability-icon">
                        <i class="fa-solid fa-brain"></i>
                    </div>
                    <h4 class="cyber-capability-title">Threat Intelligence (CTI)</h4>
                    <p class="cyber-capability-text">Enhance decision-making and prioritise security actions based on real-world risks.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="cyber-capability-card">
                    <div class="cyber-capability-icon">
                        <i class="fa-solid fa-bullseye"></i>
                    </div>
                    <h4 class="cyber-capability-title">Remediation & Response</h4>
                    <p class="cyber-capability-text">Fix identified vulnerabilities, misconfigurations, and security gaps through integrated lifecycle management.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- How it works Section -->
<section class="cyber-section">
    <div class="container">
        <h2 class="cyber-section-title">How it works?</h2>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="cyber-how-card">
                    <div class="cyber-how-icon">
                        <i class="fa-solid fa-globe"></i>
                    </div>
                    <h4 class="cyber-how-title">Agent & Agentless Collection</h4>
                    <p class="cyber-how-text">Collects security data with or without deploying agents to support flexible deployment models.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="cyber-how-card">
                    <div class="cyber-how-icon">
                        <i class="fa-solid fa-plug"></i>
                    </div>
                    <h4 class="cyber-how-title">Technology Integrations</h4>
                    <p class="cyber-how-text">Seamlessly connects with EDR/XDR, vulnerability scanners, and SIEM tools for comprehensive analysis.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="cyber-how-card">
                    <div class="cyber-how-icon">
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h4 class="cyber-how-title">Asset Centric Prioritization</h4>
                    <p class="cyber-how-text">Prioritises risks based on asset criticality to focus response efforts where they are most critical.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="cyber-how-card">
                    <div class="cyber-how-icon">
                        <i class="fa-solid fa-gears"></i>
                    </div>
                    <h4 class="cyber-how-title">GRC Management</h4>
                    <p class="cyber-how-text">Automates governance, risk, and compliance tasks aligned to more than twelve regulations, including standards like ISO 27001, NIST, and DORA.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="cyber-how-card">
                    <div class="cyber-how-icon">
                        <i class="fa-solid fa-vial-circle-check"></i>
                    </div>
                    <h4 class="cyber-how-title">Security Testing</h4>
                    <p class="cyber-how-text">Continuously tests and validates security controls using automated assessments and simulations to ensure optimal security.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="cyber-how-card">
                    <div class="cyber-how-icon">
                        <i class="fa-solid fa-display"></i>
                    </div>
                    <h4 class="cyber-how-title">Unified Visibility</h4>
                    <p class="cyber-how-text">Offers a centralised view of threats, vulnerabilities, and compliance across your entire environment.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Use Cases Section -->
<section class="cyber-section cyber-bg-light">
    <div class="container">
        <h2 class="cyber-section-title">Use Cases</h2>
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="cyber-usecase-card">
                    <img src="{{ asset('assets/images/misc/enerjisa.svg') }}" alt="ENERJİSA" class="cyber-usecase-logo img-fluid">
                    <h4 class="cyber-usecase-title">Energy Distribution Company</h4>
                    <p class="cyber-usecase-text">With over ten million customers, ENERJI-SA required a platform that automatically identifies and improves security gaps to strengthen the cyber security framework. CyberCyte platform provided a new layer of visibility to identify the improvements that can be performed within the existing cyber security solutions.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="cyber-usecase-card">
                    <div class="cyber-usecase-title" style="font-size: 1.5rem; color: #1a73e8;">ENGLISH HOME</div>
                    <h4 class="cyber-usecase-title">An International Retailer</h4>
                    <p class="cyber-usecase-text">A global retailer was looking for a solution to manage its cyber assets and assess whether hardening in its infrastructure is performed effectively. CyberCyte was chosen as a managed service offering to monitor the health state of its cyber assets and improve the hardening settings in its endpoints.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="cyber-usecase-card">
                    <img src="{{ asset('assets/images/misc/qnb-teb.png') }}" alt="International Banks" class="cyber-usecase-logo img-fluid">
                    <h4 class="cyber-usecase-title">International Banks</h4>
                    <p class="cyber-usecase-text">An international bank with 500+ branches in Turkey partnered with CyberCyte to enhance cybersecurity. Using CyberCyte EAR for digital forensic management, privileged access tracking, and endpoint visibility with Windows Sysmon, the bank successfully achieved comprehensive security improvements.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="cyber-usecase-card">
                    <img src="{{ asset('assets/images/misc/dogus-grubu.png') }}" alt="DOĞUŞ GRUBU" class="cyber-usecase-logo img-fluid">
                    <h4 class="cyber-usecase-title">An International Conglomerate</h4>
                    <p class="cyber-usecase-text">Dogus Group needed to enhance cybersecurity across 250 diverse companies in automotive, retail, media, and hospitality. CyberCyte provided centralised visibility, streamlined threat management, and effective risk remediation, significantly strengthening their security posture.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CyberCyte AI - Two column with eye graphic -->
<section class="cyber-ai-section">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-7">
                <h2 class="cyber-ai-title">CyberCyte AI</h2>
                <p class="cyber-ai-text">
                    CyberCyte AI transforms complex and fragmented security data, such as threats, vulnerabilities, misconfigurations, identities, and inventory, into actionable insights. By applying contextual enrichment and advanced analytics, it eliminates false positives and enables automated remediation, dramatically accelerating response and improving your security posture with precision.
                </p>
                <ul class="cyber-ai-feature list-unstyled">
                    <li><strong>Automated Remediation:</strong> Automatically executes actions to close security gaps.</li>
                    <li><strong>False Positive Elimination:</strong> Filters out noise to highlight real threats.</li>
                    <li><strong>Contextual Enrichment:</strong> Enhances data with forensic artifacts and GRC intelligence for informed decision-making.</li>
                </ul>
            </div>
            <div class="col-lg-5">
                <div class="cyber-ai-image-wrap">
                    <img src="{{ asset('assets/images/misc/cybercyte-ai.webp') }}" alt="CyberCyte AI">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Integrations Section -->
<section class="cyber-section cyber-bg-light">
    <div class="container">
        <h2 class="cyber-integrations-title">Integrations</h2>
        <div class="row g-4 align-items-center justify-content-center">
            <div class="col-6 col-md-3">
                <div class="cyber-integration-logo">
                    <img src="{{ asset('assets/images/misc/crowdstrike-1.png') }}" alt="CrowdStrike" onerror="this.style.display='none'; this.nextElementSibling.style.display='inline';">
                    <span style="display:none; font-weight: 700; color: #e01e5a;">CrowdStrike</span>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="cyber-integration-logo">
                    <img src="{{ asset('assets/images/misc/paloalto.png') }}" alt="Palo Alto Networks" onerror="this.style.display='none'; this.nextElementSibling.style.display='inline';">
                    <span style="display:none; font-weight: 700; color: #333;">Palo Alto Networks</span>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="cyber-integration-logo">
                    <img src="{{ asset('assets/images/misc/microsoft-defender.png') }}" alt="Microsoft Defender" onerror="this.style.display='none'; this.nextElementSibling.style.display='inline';">
                    <span style="display:none; font-weight: 700; color: #0078d4;">Microsoft Defender</span>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="cyber-integration-logo">
                    <img src="{{ asset('assets/images/misc/wazuh.png') }}" alt="Wazuh" onerror="this.style.display='none'; this.nextElementSibling.style.display='inline';">
                    <span style="display:none; font-weight: 700; color: #00a4ef;">Wazuh</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Key Benefits -->
<section class="services-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="services-details__left">
                    <div class="services-details__planning" style="margin-top: 60px;">
                        <div class="services-details__planning-content">
                            <h2 class="services-details__planning-title">Key Benefits</h2>

                            <ul class="list-unstyled services-details__planning-list">
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick"></span>
                                    </div>
                                    <div class="text">
                                        <p>100% success in identifying unknown risks and accurate prioritisation based on business value</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick"></span>
                                    </div>
                                    <div class="text">
                                        <p>40–50% reduction in operational overhead for IT Security Teams</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick"></span>
                                    </div>
                                    <div class="text">
                                        <p>Fast deployment—on-premise or in the cloud—with actionable insights available within hours</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick"></span>
                                    </div>
                                    <div class="text">
                                        <p>Integrates with existing EDR, XDR, SIEM, and vulnerability scanners</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick"></span>
                                    </div>
                                    <div class="text">
                                        <p>Trusted by enterprises across energy, retail, banking, and conglomerates</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Services Details End-->

@include('pages.partials.cta')
@endsection
