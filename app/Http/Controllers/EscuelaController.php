<?php

namespace App\Http\Controllers;

use App\Models\Escuela;
use Illuminate\Http\Request;

/**
 * Class EscuelaController
 * @package App\Http\Controllers
 */
class EscuelaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $escuelas = Escuela::paginate();

        return view('escuela.index', compact('escuelas'))
            ->with('i', (request()->input('page', 1) - 1) * $escuelas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $escuela = new Escuela();
        return view('escuela.create', compact('escuela'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Escuela::$rules);

        $escuela = Escuela::create($request->all());

        return redirect()->route('escuelas.index')
            ->with('success', 'Escuela created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $escuela = Escuela::find($id);

        return view('escuela.show', compact('escuela'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $escuela = Escuela::find($id);

        return view('escuela.edit', compact('escuela'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Escuela $escuela
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Escuela $escuela)
    {
        request()->validate(Escuela::$rules);

        $escuela->update($request->all());

        return redirect()->route('escuelas.index')
            ->with('success', 'Escuela updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $escuela = Escuela::find($id)->delete();

        return redirect()->route('escuelas.index')
            ->with('success', 'Escuela deleted successfully');
    }
}
