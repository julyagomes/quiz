<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerQuiz extends Controller
{
    private $perguntas = array();

    public function __construct(){
        $this->perguntas['peunta1'] = 'B';
        $this->perguntas['peunta2'] = 'A';
        $this->perguntas['peunta3'] = 'C';
        $this->perguntas['peunta4'] = 'D';
        $this->perguntas['peunta5'] = 'A';
    }
    public function index(){
        session(['acertos' => 0]);
        return view('pagina1');
    } 
    public function dadosPagina1(Request $request){

        $resposta = $request->input('pergunta');

        session(['resposta1' => $resposta]);

        if(strcmp($this->perguntas['pergunta1'], $resposta) == 0){
            $acertos = session('acertos');
            $acertos++;
            session(['acertos' => $acertos]);
            session(['resultado1' => 'Acertoou']);
        }else
            session(['acertos' => 'Errou']);

        return view('pagina2');
    }
    public function dadosPagina2(Request $request){

        $resposta = $request->input('pergunta');

        session(['resposta2' => $resposta]);

        if(strcmp($this->perguntas['pergunta2'], $resposta) == 0){
            $acertos = session('acertos');
            $acertos++;
            session(['acertos' => $acertos]);
            session(['resultado2' => 'Acertoou']);
        }else
            session(['acertos' => 'Errou']);

        return view('pagina3');
    }
    public function dadosPagina3(Request $request){

        $resposta = $request->input('pergunta');

        session(['resposta3' => $resposta]);

        if(strcmp($this->perguntas['pergunta3'], $resposta) == 0){
            $acertos = session('acertos');
            $acertos++;
            session(['acertos' => $acertos]);
            session(['resultado3' => 'Acertoou']);
        }else
            session(['acertos' => 'Errou']);

        return view('pagina4');
    }
    public function dadosPagina4(Request $request){

        $resposta = $request->input('pergunta');

        session(['resposta4' => $resposta]);

        if(strcmp($this->perguntas['pergunta4'], $resposta) == 0){
            $acertos = session('acertos');
            $acertos++;
            session(['acertos' => $acertos]);
            session(['resultado4' => 'Acertoou']);
        }else
            session(['acertos' => 'Errou']);

        return view('pagina5');
    }
    public function dadosPagina5(Request $request){

        $resposta = $request->input('pergunta');

        session(['resposta5' => $resposta]);

        if(strcmp($this->perguntas['pergunta5'], $resposta) == 0){
            $acertos = session('acertos');
            $acertos++;
            session(['acertos' => $acertos]);
            session(['resultado5' => 'Acertoou']);
        }else
            session(['resultado5' => 'Errou']);

        $dados = array();

        $dados[1]['gabarito'] = $this->perguntas['pergunta1'];
        $dados[1]['resposta'] = session('resposta1');
        $dados[1]['resultado'] = session('resultado1');

        $dados[2]['gabarito'] = $this->perguntas['pergunta2'];
        $dados[2]['resposta'] = session('resposta2');
        $dados[2]['resultado'] = session('resultado2');

        $dados[3]['gabarito'] = $this->perguntas['pergunta3'];
        $dados[3]['resposta'] = session('resposta3');
        $dados[3]['resultado'] = session('resultado3');

        $dados[4]['gabarito'] = $this->perguntas['pergunta4'];
        $dados[4]['resposta'] = session('resposta4');
        $dados[4]['resultado'] = session('resultado4');

        $dados[5]['gabarito'] = $this->perguntas['pergunta5'];
        $dados[5]['resposta'] = session('resposta5');
        $dados[5]['resultado'] = session('resultado5');

        $aceros = session('acertos');

        if($acertos == 5)
            $dados['mensagem'] = "Excelente!! você acertou todas :)!! Você é um bom acompanhador das redes sociais!!!";
        else if($acertos > 4)
            $dados['mensagem'] = "Muito bom!! você acertou " . $acertos . "de 5!! Parabéns!!!";
        else if($acertos > 2)
            $dados['mensagem'] = "Você conhece um pouco sobre a banda!! Mas pode meorar. você acertou " . $acertos . "de 5.";
        else 
            $dados['mensagem'] = "Precisa se inteirar mais sobre as reds sociais! você acertou " . $acertos . "de 5.";

        return view('resultado', compact('dado'));
    }
}
