<?php

namespace App\Http\Controllers;

use Error;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function authenticate(Request $request)
    {
        error_log('trying to authenticate');

        $usuarios_app = $this->getUsers();

        $authenticated = false;

        foreach ($usuarios_app as $user) {
            if ($user['email'] == $request->input('email') && $user['senha'] == $request->input('senha')) {
                $authenticated = true;

                session(['autenticado' => 'SIM']);

                error_log('autenticado');

                return view('site.index');
            }
        }

        return redirect()->route('login')->with('error', 'Senha ou email inválidos.');
    }

    public function logout(Request $request)
    {
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('success', 'Deslogado com sucesso.');
    }

    private function getUsers() 
    {
        $caminhoArquivo = storage_path('app/users.txt');

        $linhas = file($caminhoArquivo, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        $usuarios = [];

        foreach ($linhas as $linha) {
            $dados = explode("###", $linha);

            if (count($dados) == 2) {
                $usuario = [
                    'email' => $dados[0],
                    'senha' => $dados[1],
                ];
                
                $usuarios[] = $usuario;
            }
        }

        return $usuarios;
    }

    public function showLoginSite()
    {
        return view('site.login');
    }
}