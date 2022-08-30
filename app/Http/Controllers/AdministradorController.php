<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Administradores;
use Illuminate\Http\Request;

class AdministradorController extends Controller
{
    public function index(){
        return view('admin_up');
    }
    public function ind(){
        $user = Auth::user();
        $consulta = Administradores::Where('id_user',$user->id)->get();
        return view('dashboard')
        ->with('consulta',$consulta);
    }
}
