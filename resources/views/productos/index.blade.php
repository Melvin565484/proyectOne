<x-app-layout>
        <a type="button" href="{{ route('productos.create') }}" class=" px-12 py-2 rounded text-gray-200 font-semibold hover:bg-gray-600 text-white font-bold py-2 px-4 boton">Crear</a>
             <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
             <div class="bg-gray-900">
    <form method="GET" action="{{ route('productos.index') }}" class="p-4 bg-gray-800 rounded-md shadow-md text-white w-96 m-auto mb-4">
        <div class="mb-4 flex justify-between">
            <div class="w-1/3 mr-2">
                <label for="nombre" class="block text-sm font-medium text-gray-300">Nombre:</label>
                <input type="text" name="nombre" id="nombre" value="{{ request('nombre') }}" class="w-full px-3 py-2 bg-gray-700 text-gray-300 rounded-md">
            </div>

            <div class="w-1/3 mx-2">
                <label for="categoria" class="block text-sm font-medium text-gray-300">Categoría:</label>
                <select name="categoria" name="categoria" id="categoria" value="{{ request('categoria') }}" class="w-full px-3 py-2 bg-gray-700 text-gray-300 rounded-md" style="height: 50px" required>
                <option value="gaming">Gaming</option>
                <option value="accesorios">Accesorios</option>  
                <option value="consolas">Consolas</option>  
                <option value="laptops">Laptops</option>  
                <option value="herramientas">Herramientas</option> 
                <option value="accesorios">Redes</option>  
                <option value="celulares">Celulares</option>  
                <option value="pc">PC</option>       
            </select>
            </div>

            <div class="w-1/3 ml-2">
                <button type="submit" class="w-full px-4 py-2 bg-blue-500 rounded-md hover:bg-blue-600 flex items-center justify-center">
                    <i class="fa fa-search mr-2"></i> Buscar
                </button>
            </div>
        </div>
        </form>
            </div>
             <table class="table-fixed w-full mi-tabla">
                <thead>
                    <tr class="bg-gray-800 text-white">
                        <th style="display: none;">ID</th>
                        <th>NOMBRE</th>
                        <th>EXISTENCIAS</th>
                        <th>DESCRIPCION</th>
                        <th>PRECIO</th>
                        <th>CATEGORIA</th>
                        <th>IMAGEN</th>
                        <th>ACCIONES</th>
                    </tr>  
                </thead>       
                    <tbody>
                        @foreach ($productos as $producto)
                        <tr class="bg-gray-800 text-white">
                            <td style="display: none;">{{$producto->id}}</td>
                            <td>{{$producto->nombre}}</td>
                            <td>{{$producto->cantidad}}</td>
                            <td>{{$producto->descripcion}}</td>
                            <td>${{$producto->precio}}</td>
                            <td>{{$producto->categoria}}</td>
                            <td class="border px-10 py-1">
                                <img src="/imagen/{{$producto->imagen}}" width="100%">
                            </td class="border px-4 py-2">
                                </div>
                            <td>
                            <div class="flex justify-center rounded-lg text-lg" role="group">
                                    <!-- boton editar -->
                                    <a href="{{ route('productos.edit', $producto->id) }}" class="rounded bg-blue-500 hover:bg-gray-600 text-white font-bold py-2 px-4 boton1">
                                    <i class="fas fa-edit"></i>
                                    </a>
                                    <!-- boton borrar -->
                                    <form action="{{route('productos.destroy', $producto->id)}}" method="POST" class="formEliminar" >
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="rounded bg-red-500 hover:bg-gray-600 text-white font-bold py-2 px-4">
                                        <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            <div class="pagination-container">
                 <ul class="pagination">
                {!! $productos->links() !!}
                </ul>
            </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script>
(function() {
  'use strict'

  // Loop over them and prevent submission
  var forms = document.querySelectorAll('.formEliminar')
  Array.prototype.slice.call(forms)
   .forEach(function (form) {
    form.addEventListener('submit', function (event) {
        event.preventDefault()
        event.stopPropagation()
        Swal.fire({
  title: 'Desea eliminar documento?',
  text: "No podra revertirlo una vez realizado!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#20c997',
  cancelButtonColor: '#6c757d',
  confirmButtonText: 'Si, borrar!'
}).then((result) => {
  if (result.isConfirmed) {
    this.submit();
    Swal.fire(
      'Eliminado!',
      'El documento se elimino con exito!',
      'success'
    )
  }
})

      }, false)
    })
})()
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
<script src="resources/js/buscador.js"></script>

