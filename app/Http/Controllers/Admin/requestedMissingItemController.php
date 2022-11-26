<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\requestedMissingItem;
use Illuminate\Http\Request;

class requestedMissingItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $requestedmissingitem = requestedMissingItem::where('missing_item_id', 'LIKE', "%$keyword%")
                ->orWhere('user_id', 'LIKE', "%$keyword%")
                ->orWhere('missing_item_status_id', 'LIKE', "%$keyword%")
                ->orWhere('requested_at', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $requestedmissingitem = requestedMissingItem::latest()->paginate($perPage);
        }

        return view('admin.requested-missing-item.index', compact('requestedmissingitem'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.requested-missing-item.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        requestedMissingItem::create($requestData);

        return redirect('admin/requested-missing-item')->with('flash_message', 'requestedMissingItem added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $requestedmissingitem = requestedMissingItem::findOrFail($id);

        return view('admin.requested-missing-item.show', compact('requestedmissingitem'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $requestedmissingitem = requestedMissingItem::findOrFail($id);

        return view('admin.requested-missing-item.edit', compact('requestedmissingitem'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $requestedmissingitem = requestedMissingItem::findOrFail($id);
        $requestedmissingitem->update($requestData);

        return redirect('admin/requested-missing-item')->with('flash_message', 'requestedMissingItem updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        requestedMissingItem::destroy($id);

        return redirect('admin/requested-missing-item')->with('flash_message', 'requestedMissingItem deleted!');
    }
}
