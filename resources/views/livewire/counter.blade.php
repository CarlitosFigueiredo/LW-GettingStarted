<div>
    Counter: {{ $count }}

    <button wire:click="increment">
        +
    </button>

    <button wire:click="decrement">
        -
    </button>

    <hr>

    {{-- Evento de mouse:hover --}}
    <button wire:mouseenter="increment">
        + mouse enter
    </button>

    {{-- Atrasar a requisição para o back --}}
    <button wire:click.throttle.100ms="increment">
        + throttle.100ms
    </button>

    {{-- Parametros no blade --}}
    <button wire:click="incrementParameters(2)">
        + com parameter
    </button>
</div>
