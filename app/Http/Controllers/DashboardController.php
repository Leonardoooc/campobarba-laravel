<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard() {
        $caminhoArquivo = storage_path('app/forms.txt');

        $linhas = file($caminhoArquivo, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        $dadosFormularios = [];

        foreach ($linhas as $linha) {
            $dados = explode("###", $linha);

            if (count($dados) == 4) {
                $dadosFormulario = [
                    'cliente' => $dados[0],
                    'data' => $dados[1],
                    'horario' => $dados[2],
                    'celular' => $dados[3],
                ];

                $dadosFormularios[] = $dadosFormulario;
            }
        }

        return view('site.dashboard', ['dadosFormularios' => $dadosFormularios]);
    }
}
