<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\UsrType;
use App\Http\Requests\UserFormRequest;
use App\Establishment;
use App\Company;
use Exception;

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
        $user = new User;
        $usrtypes = UsrType::all()->pluck('name','id');
        $empresas = Company::all()->pluck('name','id');

        return view('users.create')->with(compact('user', 'usrtypes','empresas'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserFormRequest $request)
    {
        $user = new User();
        $user->password = "123456";
        $user->fill($request->only('name', 'email', "usrtype_id","company_id"));
        $user->save();
        return redirect()->route('usuarios.show',$user->id)->with(['success'=>'Usuário criado com sucesso!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        $userEstabs = $user->establishments;

        $establishments = Establishment::where('company_id', $user->company_id)
        ->whereNotIn('id',$userEstabs->pluck('id')->toArray())
        ->pluck('name','id');
        
        return view('users.show')->with(compact('user','establishments'));

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
        $empresas = Company::all()->pluck('name','id');

        return view('users.edit')->with(compact('user', 'usrtypes','empresas'));
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
        try{
            //dd($request->toArray());
            $user = User::find($id);
            $user->fill($request->only('name', 'email', 'company_id', 'usrtype_id'));
            $user->save();
    
        } catch (Exception $e){
            echo $e->getMessage();
        }
    
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
            $user->delete();
            return redirect()->route('usuarios.index')->with(['success'=>'Usuário excluído com sucesso!']);
        }

        return redirect()->route('usuarios.index')->with(['error'=>'Usuário não foi excluído!']);

    }

    public function addEstablishment(Request $request)
    {

        $user = User::find($request['user_id']);
        $user->establishments()->attach($request['establishment_id']);

        return redirect()->route('usuarios.show',$request['user_id'])->with(['success'=>'Estabelecimento adicionado com sucesso!']);
    }

    public function removeEstablishment($user_id, $establishment_id)
    {

        $user = User::find($user_id);
        $user->establishments()->detach($establishment_id);

        return redirect()->route('usuarios.show',$user_id)->with(['success'=>'Estabelecimento removido com sucesso!']);
    }
}
