<?php

namespace App\Http\Controllers;

use App\Models\Conjuro;
use App\Models\Escuela;
use Illuminate\Http\Request;

/**
 * Class ConjuroController
 * @package App\Http\Controllers
 */
class ConjuroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conjuros = Conjuro::paginate();

        return view('conjuro.index', compact('conjuros'))
            ->with('i', (request()->input('page', 1) - 1) * $conjuros->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $conjuro = new Conjuro();
        $escuelas = Escuela::pluck('nombre', 'id');
        return view('conjuro.create', compact('conjuro','escuelas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Conjuro::$rules);

        $conjuro = Conjuro::create($request->all());

        return redirect()->route('conjuros.index')
            ->with('success', 'Conjuro created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $conjuro = Conjuro::find($id);

        return view('conjuro.show', compact('conjuro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $conjuro = Conjuro::find($id);
        $escuelas = Escuela::pluck('nombre', 'id');
        return view('conjuro.edit', compact('conjuro','escuelas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Conjuro $conjuro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Conjuro $conjuro)
    {
        request()->validate(Conjuro::$rules);

        $conjuro->update($request->all());

        return redirect()->route('conjuros.index')
            ->with('success', 'Conjuro updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $conjuro = Conjuro::find($id)->delete();

        return redirect()->route('conjuros.index')
            ->with('success', 'Conjuro deleted successfully');
    }
}
