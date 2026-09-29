<?php

namespace App\Livewire;

use App\Models\Produto;
use Livewire\Component;

class ProdutoCreate extends Component
{
     public $nome_produto;
     public $quantidade;
     public $valor;
     public $cor;

     public function store(){

        $this->validate([
           'nome'=> 'required',
           'quantidade' => 'required',
           'valor' => 'required',
           'cor' => 'required',
        ]);



        $produto = Produto::create([
          'nome'=> $this->nome,
          'quantidade' => $this-> quantidade,
          'valor' => $this -> valor,
          'cor' => $this -> cor,
        ]);

        session()->flash(
            'success',
            'Produto cadastrado com sucesso'
        );

        session()->flash(
            'error',
            'não foi possível concluir'
        );

        return redirect()->route('produto.index');
     }
    public function render()
    {
        return view('livewire.produto-create');
    }
}
