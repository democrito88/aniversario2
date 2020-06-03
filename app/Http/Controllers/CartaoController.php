<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Cartao;
use Illuminate\Http\Request;

class CartaoController extends Controller
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
            $cartao = Cartao::where('titulo', 'LIKE', "%$keyword%")
                ->orWhere('texto', 'LIKE', "%$keyword%")
                ->orWhere('icone', 'LIKE', "%$keyword%")
                ->orWhere('caminhoImagem', 'LIKE', "%$keyword%")
                ->orWhere('data', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $cartao = Cartao::latest()->paginate($perPage);
        }

        return view('cartao.cartao.index', compact('cartao'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('cartao.cartao.create');
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
                if ($request->hasFile('caminhoImagem')) {
            $requestData['caminhoImagem'] = $request->file('caminhoImagem')
                ->store('uploads', 'public');
        }

        Cartao::create($requestData);

        return redirect('cartao/cartao')->with('flash_message', 'Cartao added!');
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
        $cartao = Cartao::findOrFail($id);

        return view('cartao.cartao.show', compact('cartao'));
    }
    
    public function showAll(){
        $cartoes = Cartao::all();
        
        return $cartoes;
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
        $cartao = Cartao::findOrFail($id);

        return view('cartao.cartao.edit', compact('cartao'));
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
                if ($request->hasFile('caminhoImagem')) {
            $requestData['caminhoImagem'] = $request->file('caminhoImagem')
                ->store('uploads', 'public');
        }

        $cartao = Cartao::findOrFail($id);
        $cartao->update($requestData);

        return redirect('cartao/cartao')->with('flash_message', 'Cartao updated!');
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
        Cartao::destroy($id);

        return redirect('cartao/cartao')->with('flash_message', 'Cartao deleted!');
    }
}
