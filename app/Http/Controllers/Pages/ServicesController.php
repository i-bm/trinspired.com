<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;

class ServicesController extends Controller
{
    public function cloud()
    {
        $description = 'High performance cloud computing orchestration for higher efficiencies and peace of mind.';
        $title = 'Cloud Computing';

        return view('pages.services.cloud', compact('title', 'description'));
    }

    public function disaster()
    {
        $description = 'Continuity Assurance & Failover in seconds for any application on any device.';
        $title = 'Disaster Recovery';

        return view('pages.services.disaster', compact('title', 'description'));
    }

    public function secure()
    {
        $description = 'Local & Remote secure access orchestration that speeds up app connection & isolates endpoint infections.';
        $title = 'Secure Success';

        return view('pages.services.secure', compact('title', 'description'));
    }

    public function telecom()
    {
        $description = 'Global Voice, Data & Cloud Connectivity Solutions.';
        $title = 'Telecom Services';

        return view('pages.services.telecom', compact('title', 'description'));
    }

    public function consultancy()
    {
        $description = 'Strategic Consulting for Digital Transformation & Trading Solutions.';
        $title = 'Business Consultancy';

        return view('pages.services.consultancy', compact('title', 'description'));
    }

    public function trading()
    {
        $description = 'Trading Solutions.';
        $title = 'Trading Solutions';

        return view('pages.services.trading', compact('title', 'description'));
    }
}
