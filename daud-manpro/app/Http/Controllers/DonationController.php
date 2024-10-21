<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function showDonationPage()
    {
        // Mengembalikan view donation_page tanpa variabel
        return view('donation_page');
    }
}
