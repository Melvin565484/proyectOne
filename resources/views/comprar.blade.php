<!-- resources/views/comprar.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Comprar') }}
        </h2>
    </x-slot>


        <!-- Agrega información sobre las formas de pago aquí -->
        <h2>Formas de Pago</h2>
        <p>Selecciona una forma de pago:</p>
        <!-- Agrega tu lógica para mostrar las formas de pago -->

        <!-- Agrega un resumen del carrito aquí -->
        <h2>Resumen del Carrito</h2>
        <p id="cart-info">Productos en el carrito: {{ count(session('cart', [])) }}</p>
        <div id="cart-list" style="display: none;">
            @foreach(session('cart', []) as $item)
                <p>{{ $item['nombre'] }} - Cantidad: {{ $item['cantidad'] }}</p>
            @endforeach
        </div>
    </div>

    <!-- Resto de tu código, estilos, scripts, etc. -->

</x-app-layout>
