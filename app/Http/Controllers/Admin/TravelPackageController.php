<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TravelPackage;
use Illuminate\Support\Str;

class TravelPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = TravelPackage::all();
        return view('pages.admin.travel-package.index', compact('items'));
    }

    public function create()
    {
        return view('pages.admin.travel-package.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->_validation($request);
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);
        TravelPackage::create($data);
        return redirect()->route('travel-package.index');
    }

    public function edit($id)
    {
        $data = TravelPackage::findOrFail($id);
        return view('pages.admin.travel-package.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $this->_validation($request);
        TravelPackage::where('id', $id)->update(
            [
                'title'          => $request->title,
                'location'       => $request->location,
                'about'          => $request->about,
                'featured_event' => $request->featured_event,
                'language'       => $request->language,
                'foods'          => $request->foods,
                'departure_date' => $request->departure_date,
                'duration'       => $request->duration,
                'type'           => $request->type,
                'price'          => $request->price
            ]
        );
    }

    public function destroy($id)
    {
        $item = TravelPackage::findOrFail($id);
        $item->delete();
        return redirect()->route('travel-package.index');
    }

    private function _validation(Request $request)
    {
        $validation = $request->validate([
            'title'          => 'required|min:3|max:50',
            'location'       => 'required|min:3|max:255|string',
            'about'          => 'required|string',
            'featured_event' => 'required|min:3|max:255|string',
            'language'       => 'required|min:3|max:255|string',
            'foods'          => 'required|min:3|max:75|string',
            'departure_date' => 'required|min:3|max:255',
            'duration'       => 'required|min:2|max:10|string',
            'type'           => 'required|min:3|max:50|string',
            'price'          => 'required|integer'
        ]);
    }
}
