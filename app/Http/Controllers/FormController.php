<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function saveForm(Request $request)
    {
        // Obtenha os dados do formulário
        $dados = $request->all();

        $nome = $request->input('nome');
        $celular = $request->input('celular');
        $data = $request->input('data');
        $horario = $request->input('horario');
        if ($nome == '' || $celular == '' || $data == '' || $horario == '') {
            error_log('empty form');
            return response()->json(['success' => false]);
        }

        // Crie uma string com os dados do formulário
        $dadosFormulario = $nome . "###" . $celular . "###" . $data . "###" . $horario . PHP_EOL;

        $caminhoArquivo = storage_path('app/forms.txt');

        file_put_contents($caminhoArquivo, $dadosFormulario, FILE_APPEND);

        return response()->json(['success' => true]);
    }
}