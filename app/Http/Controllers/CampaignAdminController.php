<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;

class CampaignAdminController extends Controller
{
    public function index() {
        $campaigns = Campaign::get();
        return view('campaigns', compact('campaigns'));
    }

    public function view(Campaign $campaign) {
        $campaign = $campaign->load('characters');
        return view('single-campaign');
    }
}
