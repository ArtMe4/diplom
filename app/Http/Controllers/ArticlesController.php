<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\Mail\Mail;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Admin::orderBy('created_at', 'desc')->paginate(10);
        return view('articles.index')->with('articles', $articles);
    }

    public function people() {
        return view('articles.people');
    }

    public function struct() {
        return view('articles.struct');
    }

    public function deyat() {
        return view('articles.deyat');
    }

    public function about() {
        return view('articles.about');
    }

    public function palaty() {
        return view('articles.palaty');
    }

    public function sovety() {
        return view('articles.sovety');
    }

    public function komiss() {
        return view('articles.komiss');
    }

    public function form() {
        return view('articles.form');
    }

    public function sendForm(Request $request) {

        $this->validate($request, [
            'name' => 'required|min:20',
            'data' => 'required',
            'phone' => 'required|numeric|min:10',
            'email' => 'required',
            'text' => 'required|min:20',
        ]);

        $name = $request->name;
        $data = $request->data;
        $phone = $request->phone;
        $email = $request->email;
        $text = $request->text;

        \Mail::to('artur133715@gmail.com')->send(new Mail($name, $data, $phone, $email, $text));
        return redirect('articles/form')->with('success', 'Обращение успешно отправлено');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        return view('articles.show')->with('article', $article);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
