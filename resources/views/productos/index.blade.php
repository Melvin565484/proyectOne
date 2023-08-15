<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Productos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <a type="button" href="{{ route('productos.create') }}" class="bg-indigo-500 px-12 py-2 rounded text-gray-200 font-semibold hover:bg-indigo-800 transition duration-200 each-in-out">Crear</a>
             <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
             <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-gray-800 text-white">
                        <th style="display: none;">ID</th>
                        <th>NOMBRE</th>
                        <th>DESCRIPCION</th>
                        <th>IMAGEN</th>
                        <th>ACCIONES</th>
                    </tr>  
                </thead>       
                    <tbody>
                        @foreach ($productos as $producto)
                        <tr class="bg-gray-800 text-white">
                            <td style="display: none;">{{$producto->id}}</td>
                            <td>{{$producto->nombre}}</td>
                            <td>{{$producto->descripcion}}</td>
                            <td class="border px-14 py-1">
                                <img src="/imagen/{{$producto->imagen}}" width="50%">
                            </td class="border px-4 py-2">
                                </div>
                            <td>
                            <div class="flex justify-center rounded-lg text-lg" role="group">
                                    <!-- boton editar -->
                                    <a href="{{route('productos.edit', $producto->id)}}" class="rounded bg-blue-500 hover:bg-gray-600 text-white font-bold py-2 px-4">Editar</a>
                                    <!-- boton borrar -->
                                    <form action="{{route('productos.destroy', $producto->id)}}" method="POST" class="formEliminar" >
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="rounded bg-red-500 hover:bg-gray-600 text-white font-bold py-2 px-4">Eliminar</button>
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