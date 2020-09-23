<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Admin::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.admin')->with('articles', $articles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:190|min:10',
            'text' => 'required|min:20',
        ]);

        $file = $request->file('main_image')->getClientOriginalName();
        $image_name_without_ext = pathinfo($file, PATHINFO_FILENAME);
        $ext = $request->file('main_image')->getClientOriginalExtension();

        $image_name = $image_name_without_ext."_".time().".".$ext;
        $path = $request->file('main_image')->storeAs('public/images', $image_name);

        $article = new Admin();
        $article->title = $request->input('title');
        $article->text = $request->input('text');
        $article->image = $image_name;
        $article->save();

        return redirect('/admin')->with('success', 'Статья добавлена');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Admin::find($id);
        return view('admin.show')->with('article', $article);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Admin::find($id);
        return view('admin.edit')->with('article', $article);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|max:190|min:10',
            'text' => 'required|min:20',
        ]);

        $article = Admin::find($id);
        $article->title = $request->input('title');
        $article->text = $request->input('text');
        $article->save();

        return redirect('/admin')->with('success', 'Статья обновлена');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Admin::find($id);
        $article->delete();
        return redirect('/admin')->with('success', 'Статья была удалена');
    }
}
