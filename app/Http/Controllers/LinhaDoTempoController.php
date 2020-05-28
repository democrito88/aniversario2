<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
//use App\Http\Requests;
//
//use App\Cartao;
//use Illuminate\Http\Request;

class LinhaDoTempoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    /*public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $ = ::latest()->paginate($perPage);
        } else {
            $ = ::latest()->paginate($perPage);
        }

        return view('linhadotempo..index', compact(''));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     
    public function create()
    {
        return view('linhadotempo..create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        ::create($requestData);

        return redirect('linhadotempo/')->with('flash_message', ' added!');
    }*/

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     
    public function show($id)
    {
        $ = ::findOrFail($id);

        return view('linhadotempo..show', compact(''));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     
    public function edit($id)
    {
        $ = ::findOrFail($id);

        return view('linhadotempo..edit', compact(''));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $ = ::findOrFail($id);
        $->update($requestData);

        return redirect('linhadotempo/')->with('flash_message', ' updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     
    public function destroy($id)
    {
        ::destroy($id);

        return redirect('linhadotempo/')->with('flash_message', ' deleted!');
    }
     * *
     */
    //monta o array linha do tempo com TODOS os cartões
    public function montaLinhaDoTempo(){
        $cc = new CartaoController();
        $cartoes = $cc->showAll();
        
        return view('linhadotempo', compact('cartoes'));
    }
    
}
