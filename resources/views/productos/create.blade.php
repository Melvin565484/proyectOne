<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Agregar productos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
            <form action="{{ route('productos.store') }}" method="POST" enctype="multipart/form-data">
                 @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                    <div class="grid grid-cols-1">
                        <label class="uppercase md:text-sm text-xs text-gray-100 text-gray font-semibold">Nombre:</label>
                        <input name="nombre" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent hover:bg-gray-300" style="height: 50px" type="text" required/>
                    </div>
                    <div class="grid grid-cols-2 ">
                    <div>
                    <label class="uppercase md:text-sm text-xs text-gray-100 text-light font-semibold">Cantidad:</label>
                    <input name="cantidad" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent hover:bg-gray-300 w-3/4 h-12" style="height: 50px" type="number" required/>
                    </div>
                    <div>
                     <label class="uppercase md:text-sm text-xs text-gray-100 text-light font-semibold">Precio:</label>
                     <input name="precio" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent hover:bg-gray-300 w-3/4 h-12" style="height: 50px" type="number" required/>
                     </div>
                    </div>
                    <div class="grid grid-cols-1">
                <label class="uppercase md:text-sm text-xs text-gray-100 text-light font-semibold">Categoria:</label>
                <select name="categoria" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent hover:bg-gray-300" style="height: 50px" required>
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

                    <div class="grid grid-cols-1">
                        <label class="uppercase md:text-sm text-xs text-gray-100 text-light font-semibold">Descripción:</label>
                        <input name="descripcion" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent hover:bg-gray-300 w-3/4 h-20 " style="height: 100px" type="text" required/>
                    </div>
                </div>
                

                <!-- Para ver la imagen seleccionada, de lo contrario no se -->
                <div class="grid grid-cols-1 mt-5 mx-7">
                    <img id="imagenSeleccionada" style="max-height: 300px;">           
                </div>

                <div class="grid grid-cols-1 mt-5 mx-7">
                <label class="uppercase md:text-sm text-xs text-gray-100 text-light font-semibold mb-1">Subir Imagen</label>
                    <div class='flex items-center justify-center w-full'>
                        <label class='flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-200 hover:border-purple-300 group'>
                            <div class='flex flex-col items-center justify-center pt-7'>
                            <svg class="w-10 h-10 text-purple-400 group-hover:text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            <p class='text-sm text-gray-400 group-hover:text-purple-600 pt-1 tracking-wider'>Seleccione la imagen</p>
                            </div>
                        <input name="imagen" id="imagen" type='file' class="hidden" />
                        </label>
                    </div>
                </div>

                <div class='flex items-center justify-center  md:gap-8 gap-4 pt-5 pb-5'>
                    <a href="{{ route('productos.index') }}" class='w-auto bg-gray-500 hover:bg-gray-700 rounded-lg shadow-xl font-medium text-white px-4 py-2'>Cancelar</a>
                    <a class='w-auto bg-purple-500 hover:bg-purple-700 rounded-lg shadow-xl font-medium text-white px-4 py-2'><button type="submit" >Guardar</button>
                </a>
                </div>
            </form> 
            </div>
        </div>
    </div>
</x-app-layout>

<!-- Script para ver la imagen antes de CREAR UN NUEVO PRODUCTO -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> 
<script>   
    $(document).ready(function (e) {   
        $('#imagen').change(function(){            
            let reader = new FileReader();
            reader.onload = (e) => { 
                $('#imagenSeleccionada').attr('src', e.target.result); 
            }
            reader.readAsDataURL(this.files[0]); 
        });
    });
</script>