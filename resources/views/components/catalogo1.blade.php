
<div class="catalog-panel bg-gray-200 p-4 rounded-md shadow-md">
    <h2 class="text-lg font-semibold mb-2">Filtros</h2>
    <label for="category" class="mr-2">Categorías:</label>
    <select id="category" onchange="filterProducts()" class="border p-2">
    <option value="all">Todos</option>
                <option value="gaming">Gaming</option>
                <option value="accesorios">Accesorios</option>  
                <option value="accesorios">Consolas</option>  
                <option value="accesorios">Juguetes</option>  
                <option value="accesorios">Herramientas</option> 
                <option value="accesorios">Redes</option>  
                <option value="accesorios">Celulares</option>  
                <option value="accesorios">Otros</option>    
            </select>
        </div>

    <script>
        function filterProducts() {
            var category = document.getElementById('category').value;
            var products = document.querySelectorAll('.product');

            products.forEach(function(product) {
                if (category === 'all' || product.dataset.category === category) {
                    product.style.display = 'block';
                } else {
                    product.style.display = 'none';
                }
            });
        }

        function addToCart(id, nombre, precio) {
            console.log('Producto agregado al carrito:', id, nombre, precio);
            updateCartInfo();
        }

        function updateCartInfo() {
            var cartInfo = document.getElementById('cart-info');
            cartInfo.innerHTML = 'Productos en el carrito: ' + countCartItems();
        }

        function countCartItems() {
            return {{ count(session('cart', [])) }};
        }

        function toggleCartList() {
            var cartList = document.getElementById('cart-list');

            if (cartList.style.display === 'none') {
                cartList.style.display = 'block';
            } else {
                cartList.style.display = 'none';
            }
        }

        document.addEventListener('DOMContentLoaded', function () {
            filterProducts();
        });
    </script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $('.cart-icon').click(function () {
            // Lógica para mostrar y actualizar el contenido del carrito
            updateCartContent();
            showCartContent();
        });
    });

    function updateCartContent() {
        // Lógica para obtener y actualizar la información del carrito
        $.ajax({
            url: '/obtener-contenido-carrito', // Ruta para obtener datos del carrito en tu controlador
            type: 'GET',
            success: function (data) {
                $('#cart-content').html(data); // Actualiza el contenido del carrito en el HTML
            },
            error: function (error) {
                console.error('Error al obtener datos del carrito:', error);
            }
        });
    }

    function showCartContent() {
        // Lógica para mostrar el contenido del carrito (puede ser un modal, una barra lateral, etc.)
        $('#cart-content').show();
    }
</script>
