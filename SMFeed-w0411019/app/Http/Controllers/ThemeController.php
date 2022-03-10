<?php

namespace App\Http\Controllers;

use App\Theme;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ThemeController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('IsThemeManager');
    }

    public function index(Theme $themes)
    {
        $themes = $themes->get();
        return view('theme.index', compact('themes'));
    }

    public function create()
    {
        return view('theme.create');
    }


    public function store()
    {
        $data = request()->validate([
            'name'=>'required',
            'cdn_url'=>'required',
        ]);


        $theme = new Theme();
        $theme->name = $data['name'];
        $theme->cdn_url = $data['cdn_url'];
        $theme->created_by = Auth::id();
        $theme->created_at = Carbon::now();
        $theme->updated_at = Carbon::now();
        $theme->save();

        return redirect('/themes');
    }

    public function show(Theme $theme)
    {
        return view('theme.show', compact('theme'));
    }

    public function edit(Theme $theme)
    {
        return view('theme.edit',compact('theme'));
    }


    public function update()
    {
        $data = request()->validate([
            'name'=>'required',
            'cdn_url'=>'required',
        ]);


        $theme = Theme::where('id','=',request()->id)->first();
        $theme->name = $data['name'];
        $theme->cdn_url = $data['cdn_url'];
        $theme->updated_at = Carbon::now();
        $theme->updated_by = Auth::id();
        $theme->save();

        return redirect('/themes/'.$theme->id);
    }


    public function destroy(Theme $theme)
    {
        $theme->deleted_by = Auth::id();
        $theme->save();
        $theme->delete();

        return redirect('/themes');
    }
}
