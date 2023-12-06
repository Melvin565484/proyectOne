<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Carrito de Compras') }}
        </h2>
    </x-slot>

    <div class="container">
        <h3>Productos en el carrito:</h3>
        <ul>
            @forelse ($productosEnCarrito as $producto)
                <li>{{ $producto['nombre'] }} - Cantidad: {{ $producto['cantidad'] }}</li>
            @empty
                <li>No hay productos en el carrito</li>
            @endforelse
        </ul>
    </div>
</x-app-layout>
