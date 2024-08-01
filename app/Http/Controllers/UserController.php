<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Cookie;

use Illuminate\Http\Request;
use function Laravel\Prompts\table;

class UserController extends Controller
{

    public function users(Request $request){
        $nome = $request->input('user');
        $pass = $request->input('pass');
        $email = $request->input('email');

        $exists = DB::table('users')->where('name', $nome)->exists();
        if ($exists){
            $user = DB::table('users')->where('name', $nome)->get();

            if ($user[0]->password === $pass) {
                Cookie::queue('user_name', $user[0]->name, 1); // O cookie expira em 60 minutos
                return view('perfil');
            } else {
                echo "<script>alert('Usuário ou senha incorretos.')</script>";
                return view('login');
            }
        }
        else {
            DB::table('users')->insert([
                'name' => $nome,
                'email' => $email,
                'password' => $pass
            ]);
            return redirect()->back()->with('status', 'Dados recebidos com sucesso!');
//            return view('login');
        }
    }
}
