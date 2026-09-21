<?php

namespace App\Http\Controllers;

use App\Models\ContactEnquiry;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function store(Request $request): JsonResponse|RedirectResponse
    {
        // Honeypot spam check
        if ($request->filled('website_hp')) {
            if ($request->expectsJson()) {
                return response()->json(['success' => true, 'message' => 'Enquiry submitted successfully.']);
            }

            return back()->with('success', 'Thank you! Your enquiry has been received.');
        }

        $validated = $request->validate([
            'full_name' => 'required|string|max:150',
            'company_name' => 'required|string|max:150',
            'work_email' => 'required|email|max:150',
            'phone_number' => 'required|string|max:50',
            'service_required' => 'nullable|string|max:100',
            'employee_count' => 'nullable|string|max:100',
            'message' => 'required|string|max:2500',
        ]);

        $enquiry = ContactEnquiry::create([
            'full_name' => $validated['full_name'],
            'company_name' => $validated['company_name'],
            'work_email' => $validated['work_email'],
            'phone_number' => $validated['phone_number'],
            'service_required' => $validated['service_required'] ?? 'Recruitment',
            'employee_count' => $validated['employee_count'] ?? null,
            'message' => $validated['message'],
            'status' => 'new',
        ]);

        Log::info('Anshivya Contact Enquiry Saved to DB', ['id' => $enquiry->id]);

        if ($request->expectsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Thank you! Your enquiry has been received. An HR expert from Anshivya Group will contact you shortly.',
            ]);
        }

        return back()->with('success', 'Thank you! Your enquiry has been received. An HR expert from Anshivya Group will contact you shortly.');
    }
}
