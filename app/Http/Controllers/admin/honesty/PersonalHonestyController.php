<?php

namespace App\Http\Controllers\admin\honesty;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\admin\honesty\PersonalHonesty;

class PersonalHonestyController extends Controller
{
    /**
     * Display the form to create a new personal honesty record.
     */
    public function create()
    {
        return view('admin.pages.honesty.personal.create');
    }

    /**
     * Store a new personal honesty record.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'currency' => 'required|string|max:255',
            'amount' => 'required|numeric',
            'rate' => 'required|numeric',
            'reason' => 'nullable|string',
        ]);

        PersonalHonesty::create($validatedData);

        return redirect()->route('personal.create')->with('success', 'Record created successfully.');
    }

    /**
     * Show the form for editing a specific personal honesty record.
     */
    public function edit($PersonalHonestyId)
    {
        $personalHonesty = PersonalHonesty::findOrFail($PersonalHonestyId);

        return view('admin.pages.honesty.personal.edit', data: compact('personalHonesty'));
    }

    /**
     * Update a specific personal honesty record.
     */
    public function update(Request $request, $PersonalHonestyId)
    {
        $validatedData = $request->validate([
            'currency' => 'required|string|max:255',
            'amount' => 'required|numeric',
            'rate' => 'required|numeric',
            'reason' => 'nullable|string',
        ]);

        $personalHonesty = PersonalHonesty::findOrFail($PersonalHonestyId);
        $personalHonesty->update($validatedData);

        return redirect()->route('personal.edit', $PersonalHonestyId)->with('success', 'Record updated successfully.');
    }

    /**
     * Delete a specific personal honesty record.
     */
    public function delete($PersonalHonestyId)
    {
        $personalHonesty = PersonalHonesty::findOrFail($PersonalHonestyId);
        $personalHonesty->delete();

        return redirect()->route('home.page')->with('success', 'Record deleted successfully.');
    }
}