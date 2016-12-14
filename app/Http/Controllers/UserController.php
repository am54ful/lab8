<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('id', 'DESC')->get();

        return view('welcome', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //validate the input
        $this->validate($request, [
                'staffid'     => 'required|min:3|unique:customer',
                'authornames' => 'required|min:3',
                'forarea'     => 'required',
                'seo'         => 'required',
                'comments'    => 'required'
                ]);

        //insert
        //instantioate user model
        // User::create([
        //     'staffid' => $request->staffid,
        //     'authornames' => $request->authornames,
        //     'forarea' => $request->research,
        //     'seo' => $request->seo,
        //     'comments' => $request->comments,
        // ]);
         User::create($request->all());
        Session::flash('flash_message', 'Added Successfully.');
        // Session::flash('success', 'Added Successfully.');
        //redirect to other page
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = User::findOrFail($id);
        // return $users;
         return view('show', compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //create model object $users
         $users = User::findOrFail($id);
         return view('edit', compact('users'));
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
        // validate the input
        $this->validate($request, [
                'staffid'     => 'required|min:3',
                'authornames' => 'required|min:3',
                'forarea'     => 'required',
                'seo'         => 'required',
                'comments'    => 'required'
                ]);
        // save the data
       $users=User::find($id);
        $users->update($request->all()); //eloquent
        //query builder
       // $users->update([
       //      'staffid' => $request->staffid,
       //      'authornames' => $request->authornames,
       //      'forarea' => $request->research,
       //      'seo' => $request->seo,
       //      'comments' => $request->comments,
       //  ]);
       Session::flash('flash_message', 'Update Successfully.');

         return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users=User::find($id);
        $users->delete();
        Session::flash('success', 'Delete Successfully.');
        return redirect()->route('users.index');
    }
}
