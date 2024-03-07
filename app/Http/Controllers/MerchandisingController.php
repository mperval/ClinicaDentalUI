<?php

namespace App\Http\Controllers;

use App\Models\Merchandising;
use Illuminate\Http\Request;

/**
 * Class MerchandisingController
 * @package App\Http\Controllers
 */
class MerchandisingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $merchandisings = Merchandising::paginate();

        return view('merchandising.index', compact('merchandisings'))
            ->with('i', (request()->input('page', 1) - 1) * $merchandisings->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $merchandising = new Merchandising();
        return view('merchandising.create', compact('merchandising'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'tipo_producto' => 'required',
        'talla' => 'required|string|max:50',
        'precio' => 'required|numeric|min:1',
    ]);

    $merchandising = Merchandising::create($validatedData);

    return redirect()->route('merchandisings.index')
        ->with('success', 'Merchandising created successfully.');
}

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $merchandising = Merchandising::find($id);

        return view('merchandising.show', compact('merchandising'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $merchandising = Merchandising::find($id);

        return view('merchandising.edit', compact('merchandising'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Merchandising $merchandising
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Merchandising $merchandising)
{
    $validatedData = $request->validate([
        'tipo_producto' => 'required|string|max:255',
        'talla' => 'required|string|max:50',
        'precio' => 'required|numeric|min:0',
    ]);

    $merchandising->update($validatedData);

    return redirect()->route('merchandisings.index')
        ->with('success', 'Merchandising updated successfully');
}

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $merchandising = Merchandising::find($id)->delete();

        return redirect()->route('merchandisings.index')
            ->with('success', 'Merchandising deleted successfully');
    }
}
