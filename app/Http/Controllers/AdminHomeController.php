<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use App\Models\Activity;
use App\Models\History;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function index()
    {
        $carousels = Carousel::all();
        $activities = Activity::all();
        $histories = history::all();
        return view('admin.home', compact('carousels', 'activities', 'histories'));
    }

    public function updateCarousel(Request $request)
    {
        $request->validate([
            'image.*' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Ensure 'image' is set and is an array
        $images = $request->file('image') ?? [];

        foreach ($images as $index => $file) {
            // Store the file and update the Carousel model
            $imagePath = $file->store('images/carousel', 'public');
            Carousel::updateOrCreate(['id' => $index + 1], ['image' => $imagePath]);
        }

        return redirect()->back()->with('success', 'Carousel updated successfully.');
    }

    public function updateActivity(Request $request)
    {
        $request->validate([
            'images.*' => 'image|mimes:jpeg,png,jpg|max:2048',
            'titles.*' => 'required|string',
            'descriptions.*' => 'required|string',
        ]);

        $activities = $request->input('activity_ids', []);

        foreach ($activities as $index => $activityId) {
            $activity = Activity::find($activityId);

            if (!$activity) {
                continue;
            }

            if ($request->hasFile('images.' . $index)) {
                $file = $request->file('images.' . $index);
                $imagePath = $file->store('images/activities', 'public');
                $activity->image = $imagePath;
            }

            $activity->title = $request->input('titles.' . $index);
            $activity->description = $request->input('descriptions.' . $index);
            $activity->save();
        }

        return redirect()->back()->with('success', 'Activities updated successfully.');
    }

    public function updateHistory(Request $request)
    {
        $request->validate([
            'images.*' => 'image|mimes:jpeg,png,jpg|max:2048',
            'titles.*' => 'required|string',
            'descriptions.*' => 'required|string',
        ]);

        $Histories = $request->input('history_ids', []);

        foreach ($Histories as $index => $historyId) {
            $history = history::find($historyId);

            if (!$history) {
                continue;
            }

            if ($request->hasFile('images.' . $index)) {
                $file = $request->file('images.' . $index);
                $imagePath = $file->store('images/Histories', 'public');
                $history->image = $imagePath;
            }

            $history->title = $request->input('titles.' . $index);
            $history->description = $request->input('descriptions.' . $index);
            $history->save();
        }

        return redirect()->back()->with('success', 'Histories updated successfully.');
    }


}