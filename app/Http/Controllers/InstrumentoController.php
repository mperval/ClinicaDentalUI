<?php

namespace App\Http\Controllers;

use App\Models\Instrumento;
use Illuminate\Http\Request;

/**
 * Class InstrumentoController
 * @package App\Http\Controllers
 */
class InstrumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instrumentos = Instrumento::paginate();

        return view('instrumento.index', compact('instrumentos'))
            ->with('i', (request()->input('page', 1) - 1) * $instrumentos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $instrumento = new Instrumento();
        return view('instrumento.create', compact('instrumento'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Instrumento::$rules);

        $instrumento = Instrumento::create($request->all());

        return redirect()->route('instrumentos.index')
            ->with('success', 'Instrumento created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $instrumento = Instrumento::find($id);

        return view('instrumento.show', compact('instrumento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $instrumento = Instrumento::find($id);

        return view('instrumento.edit', compact('instrumento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Instrumento $instrumento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Instrumento $instrumento)
    {
        request()->validate(Instrumento::$rules);

        $instrumento->update($request->all());

        return redirect()->route('instrumentos.index')
            ->with('success', 'Instrumento updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $instrumento = Instrumento::find($id)->delete();

        return redirect()->route('instrumentos.index')
            ->with('success', 'Instrumento deleted successfully');
    }
}
