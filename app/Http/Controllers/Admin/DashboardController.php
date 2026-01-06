<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Gallery;
use App\Models\Contact;
use App\Models\CompanySetting;

class DashboardController extends Controller
{
    /**
     * Dashboard Admin
     */
    public function index()
    {
        return view('admin.dashboard.index', [
            'totalNews'     => News::count(),
            'totalGallery'  => Gallery::count(),
            'totalContacts' => Contact::count(),
            'setting'       => CompanySetting::first(),
        ]);
    }

    /**
     * Update Lokasi Perusahaan
     */
    public function updateLocation(Request $request)
    {
        $request->validate([
            'location'  => 'required|string',
            'map_query' => 'required|string',
        ]);

        CompanySetting::updateOrCreate(
            ['id' => 1],
            [
                'address'   => $request->location,
                'map_query' => $request->map_query,
            ]
        );

        return redirect()
            ->route('admin.dashboard')
            ->with('success', 'Lokasi perusahaan berhasil diperbarui');
    }
}
