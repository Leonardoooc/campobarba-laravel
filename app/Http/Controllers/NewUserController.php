<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewUserController extends Controller
{
    public function saveUser(Request $request)
    {
        $dados = $request->all();

        $email = $request->input('email');
        $senha = $request->input('senha');

        if ($email == '' || $senha == '') {
            error_log('empty form');
            return response()->json(['success' => false]);
        }

        $dadosFormulario = $email . "###" . $senha . PHP_EOL;

        $caminhoArquivo = storage_path('app/users.txt');

        file_put_contents($caminhoArquivo, $dadosFormulario, FILE_APPEND);

        error_log('Novo user criado');

        return response()->json(['success' => true]);
    }
}
