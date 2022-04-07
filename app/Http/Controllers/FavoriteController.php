<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
   
    public function index()
    {
        $usuarioEmail = auth()->user()->email;
        $data['favorites'] = Favorite::where('user', $usuarioEmail)->paginate(10);
        return view('urlFavorites.index',$data);
    }

  
    public function create()
    {
        return view('urlFavorites.create');
    }

   
    public function store(Request $request)
    {
        $favorite = new Favorite();
        $favorite->url = $request->url;
        $favorite->title = $request->title;
        $favorite->description = $request->description;
        $favorite->category = $request->category;
        $favorite->visibility = $request->visibility;
        $favorite->user = auth()->user()->email;
        $favorite->save();

        return redirect('urlFavorites');
    }

    
    public function show($id)
    {
        $item = Favorite::findOrFail($id);
        //dd($item);
        return view('urlFavorites.show', compact('item'));
    }

   
    public function edit($id)
    {
        $data = Favorite::findOrFail($id);
        return view('urlFavorites.edit', compact('data'));
    }

   
    public function update(Request $request, $id)
    {
        $data = request()->except('_token','_method');
        Favorite::where('id','=',$id)->update($data);

        return redirect('urlFavorites');        
    }

  
    public function destroy($id)
    {
        Favorite::destroy($id);
        return redirect('urlFavorites');
    }

    
}
