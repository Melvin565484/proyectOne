<x-app-layout >

<x-Catalogo1 />
        <div class="product-grid">
            
            @forelse($productos as $producto)
                <div class="product" data-category="{{ $producto->categoria }}">
                    <div class="image-container">
                        <img src="/imagen/{{ $producto->imagen }}" alt="{{ $producto->nombre }}" class="product-image">
                        <div class="overlay" onclick="addToCart('{{ $producto->id }}', '{{ $producto->nombre }}', '{{ $producto->precio }}')">
                            <p>Agregar al carrito</p>
                        </div>
                    </div>
                    <div class="product-details">
                    <div class="card-footer">
        <a href="#" class="btn btn-primary">🛒Agregar al carrito</a>
      </div>
                </div>
                        <strong>{{ $producto->nombre }}</strong><br>
                        Precio: ${{ $producto->precio }}<br>
                        Descripción: {{ $producto->descripcion }}<br>
                    </div>
            @empty
                <p>No hay productos disponibles.</p>
            @endforelse
        </div>
    </div>
    <div class="pagination-container">
        <ul class="pagination">
            {!! $productos->links() !!}
        </ul>
    </div>
    @include('_cart_content')
        </x-app-layout>
        <x-Footer />






