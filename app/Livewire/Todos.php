<?php

namespace App\Livewire;

use Livewire\Component;

class Todos extends Component
{
    public $todo = '';

    public $todos = [];

    //Ciclo inicial
    public function mount()
    {
        $this->todos = [
            'Take out trash',
            'Do dishes',
        ];
    }

    // Quando atualizar uma propriedade...
    // Ela da acesso a esses dois parametros...
    // Isso valeria para todas as propriedades do componemte
    // public function updated($property, $value)
    // {
    //     // Colocar a string em caixa alta...
    //     $this->$property = strtoupper($value);
    // }

    // O de cima, serve para todas as propriedades,
    // Esse serve apenas para propriedade especifica.
    public function updatedTodo($property, $value)
    {
        $this->$property = strtoupper($value);

        //A o custume de fazer um validate().
        // Quando o wire:model tem o change vinculado, em vez de mandar
        // o submit inteiro.
    }

    public function add()
    {
        $this->todos[] = $this->pull('todo');
    }

    public function render()
    {
        return view('livewire.todos');
    }
}
