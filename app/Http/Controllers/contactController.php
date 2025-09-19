<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\contatoMail;
use Illuminate\Support\Facades\Mail;

class contactController extends Controller
{
    public function sendMail(Request $request)
    {
        $mensagem = $request->input('mensagem'); // pega o campo do form

        Mail::to('batistalando7@gmail.com')->send(new contatoMail($mensagem));

        return response()->json(['message' => 'Email enviado com sucesso!'], 200);
    }
}
