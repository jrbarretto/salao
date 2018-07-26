<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\UsrType;
use App\Http\Requests\UserFormRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $users = User::with('usrType')->get();
        $users = User::all();
        return view('users.index')->with(compact('users'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $usrtypes = UsrType::all()->pluck('name','id');
        return view('users.create')->with( compact('usrtypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->password = "123456";
        $user->fill($request->only('name', 'email', "usrtype_id"));
        $user->save();
        return redirect()->route('usuarios.index')->with(['success'=>'Usuário salvo com sucesso!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $usrtypes = UsrType::all()->pluck('name','id');

        return view('users.edit')->with(compact('user', 'usrtypes'));
        //dd($user->toArray());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserFormRequest $request, $id)
    {
       
        $user = User::find($id);
        $user->fill($request->only('name', 'email', "usrtype_id"));
        $user->save();
        return redirect()->route('usuarios.edit',$id)->with(['success'=>'Usuário salvo com sucesso!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);

        if(!empty($user)){
            //$user->delete();
            return redirect()->route('usuarios.index')->with(['success'=>'Usuário excluído com sucesso!']);
        }

        return redirect()->route('usuarios.index')->with(['error'=>'Usuário não foi excluído!']);

    }
}
