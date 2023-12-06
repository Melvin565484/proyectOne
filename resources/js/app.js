import './bootstrap';

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
window.Alpine = Alpine;

Alpine.plugin(focus);

Alpine.start();

/* scripts.js */
document.addEventListener('DOMContentLoaded', function () {
    // ... (resto del código) ...
});

function filterProducts() {
    // ... (resto del código) ...
}

function addToCart(id, nombre, precio) {
    console.log('Producto agregado al carrito:', id, nombre, precio);
    updateCartInfo();
}

function updateCartInfo() {
    // ... (resto del código) ...
}

function countCartItems() {
    // ... (resto del código) ...
}

function toggleCartList() {
    // ... (resto del código) ...
}
