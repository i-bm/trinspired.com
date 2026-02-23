<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;

class ServicesController extends Controller
{
    public function cloud()
    {
        $description = 'High performance cloud computing orchestration for higher efficiencies and peace of mind.';
        $title = 'Cloud Computing';
        $subtitle = 'High performance cloud computing orchestration for higher efficiencies and peace of mind.';

        return view('pages.services.cloud', compact('title', 'description', 'subtitle'));
    }

    public function disaster()
    {
        $description = 'Continuity Assurance & Failover in seconds for any application on any device.';
        $title = 'Disaster Recovery';
        $subtitle = 'High Availability Disaster Recovery for Business Continuity';

        return view('pages.services.disaster', compact('title', 'description', 'subtitle'));
    }

    public function secure()
    {
        $description = 'Local & Remote secure access orchestration that speeds up app connection & isolates endpoint infections.';
        $title = 'Secure Access';
        $subtitle = 'Secure Remote Access that Accelerates Connections and Protects Endpoints.';

        return view('pages.services.secure', compact('title', 'description', 'subtitle'));
    }

    public function telecom()
    {
        $description = 'Global Voice, Data & Cloud Connectivity Solutions.';
        $title = 'Telecom Services';
        $subtitle = 'Global Voice, Data & Cloud Connectivity Solutions.';

        return view('pages.services.telecom', compact('title', 'description', 'subtitle'));
    }

    public function consultancy()
    {
        $description = 'Strategic Consulting for Digital Transformation & Trading Solutions.';
        $title = 'Business Consultancy';
        $subtitle = 'Strategic Consulting for Digital Transformation & Trading Solutions.';

        return view('pages.services.consultancy', compact('title', 'description', 'subtitle'));
    }

    public function trading()
    {
        $description = 'Trading Solutions.';
        $title = 'Trading Solutions';
        $subtitle = 'Comprehensive analysis of telecom investment opportunities';

        return view('pages.services.trading', compact('title', 'description', 'subtitle'));
    }

    public function acronis()
    {
        $description = 'ACRONIS Advanced Endpoint Security';
        $title = 'ACRONIS Advanced Endpoint Security';
        $subtitle = 'NextGen AI Cybersecurity with multi domain referencing for holistic defense';

        return view('pages.services.acronis', compact('title', 'description', 'subtitle'));
    }

    public function cybersecurity()
    {
        $description = 'Cybersecurity Services';
        $title = 'Cybersecurity';
        $image = 'assets/images/background/2.webp';
        $subtitle = 'Prevention is cheaper than a breach';

        return view('pages.services.cybersecurity', compact('title', 'description', 'image', 'subtitle'));
    }
}
