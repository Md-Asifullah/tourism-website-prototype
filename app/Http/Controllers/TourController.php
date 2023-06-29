<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class TourController extends Controller
{
    // Show all Tours
    public function index()
    {
        return view('pages.tours', ['tours' => Tour::all()]);
    }

    // Show Create Form
    public function create()
    {
        return view('tours.create');
    }

    // Store New Tour
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'title' => ['required', Rule::unique('tours', 'title')],
            'description' => 'required'
        ]);

        if ($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('tour_images', 'public');
        }
        Tour::create($formFields);
        return redirect('/tour/create')->with('tour_created', 'New tour has been added successfully');
    }

    // Manage - Admin index
    public function manage()
    {
        return view('tours.manage', ['tours' => Tour::all()]);
    }

    // Delete Tour
    public function destroy(Tour $tour)
    {
        $title = $tour->title;
        $tour->delete();
        return redirect('/tour/manage')->with('tour_deleted', 'Tour ' . $title . ' has been deleted successfully');
    }

    // Show edit form
    public function edit(Tour $tour)
    {
        return view('tours.edit', ['tour' => $tour]);
    }

    // Update tour
    public function update(Request $request, Tour $tour)
    {
        $title = $tour->title;
        $formFields = $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        if ($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('tour_images', 'public');
        }
        $tour->update($formFields);
        return redirect('/tour/manage')->with('tour_updated', 'Tour ' . $title . ' has been updated successfully');
    }
}
