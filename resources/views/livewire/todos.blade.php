<div class="container">

    {{-- Por clique de botão --}}
    <h1>Clique do botão</h1>
    <form class="my-3">
        <input wire:model="todo" type="text" class="form-control mb-2">
        <button wire:click="add" type="button" class="btn btn-secondary btn-sm">
            Add
        </button>
    </form>

    {{-- Por submit --}}
    <h1>Submit do formulário</h1>
    <form wire:submit="add">
        {{-- .live = ao vivo / .debounce.5ms - tempo para disparar requisição - 5 milisegundo / padrão 250ms --}}
        {{-- .change - requisição quando sair do input /  --}}
        <input wire:model.live="todo" type="text" class="form-control mb-2">
        <button type="submit" class="btn btn-secondary btn-sm">
            Add
        </button>
    </form>

    <span>Current todo: {{ $todo }}</span>

    <ul>
        @foreach ($todos as $todo)
            <li>{{ $todo }}</li>
        @endforeach
    </ul>
</div>
