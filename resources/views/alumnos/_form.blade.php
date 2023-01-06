<div class="grid grid-cols-6 gap-6">
    <div class="col-span-6 sm:col-span-3">
        <label for="nombre">Nombre</label>
        <input class="mt-1 block w-full rounded-md border-gray-400 shadow-sm focus:border-teal-500 focus:ring-indigo-500 sm:text-sm 
        @error('nombre')
            border-red-500
        @enderror "          
        type="text" name="nombre" id="nombre" value="{{ old('nombre',$alumno->name) }}">
        @error('nombre')
        <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                {{$message}}
        </span>
        @enderror
    </div>
    <div class="col-span-6 sm:col-span-3">
        <label for="apellido">Apellido</label>
        <input class="mt-1 block w-full rounded-md border-gray-400 shadow-sm focus:border-teal-500 focus:ring-indigo-500 sm:text-sm 
        @error('apellido')
            border-red-500
        @enderror "          
        type="text" name="apellido" id="apellido" value="{{old('nombre', $alumno->lastname) }}">
        @error('apellido')
        <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                {{$message}}
        </span>
        @enderror
    </div>
    
    <div class="col-span-6 sm:col-span-2">
        <label for="fecha_nacimiento">Fecha de Nacimiento</label>
        <input class="mt-1 block w-full rounded-md border-gray-400 shadow-sm focus:border-teal-500 focus:ring-indigo-500 sm:text-sm 
        @error('fecha_nacimiento')
            border-red-500
        @enderror "          
        type="date" name="fecha_nacimiento" id="fecha_nacimiento" value="
            @php
                $date = "";
                if ($alumno->birthdate != null){
                    $date = $alumno->birthdate->format('Y-m-d');
                } 
                echo old('fecha_nacimiento', $date);
            @endphp
         ">
        @error('fecha_nacimiento')
        <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                {{$message}}
        </span>
        @enderror
    </div>
    <div class="col-span-6 sm:col-span-2">
        <label for="genero">Genero</label>
        <select class="mt-1 block w-full rounded-md border-gray-400 shadow-sm focus:border-teal-500 focus:ring-indigo-500 sm:text-sm 
        @error('genero')
            border-red-500
        @enderror "          
        name="genero" id="genero" value="{{old('genero', $alumno->gender)}}">
            <option value="Masculino"{{ $alumno->gender == "Masculino" ? 'selected' : '' }}>Masculino</option>
            <option value="Femenino" {{ $alumno->gender == "Femenino" ? 'selected' : '' }}>Femenino</option>
        </select>
    </div>
    <div class="col-span-6 sm:col-span-2">
        <label for="lugar_nacimiento">Lugar de nacimiento</label>
        <input class="mt-1 block w-full rounded-md border-gray-400 shadow-sm focus:border-teal-500 focus:ring-indigo-500 sm:text-sm
        @error('lugar_nacimiento')
            border-red-500
        @enderror "          
        type="text" name="lugar_nacimiento" id="lugar_nacimiento" value="{{ old('lugar_nacimiento',$alumno->birthplace) }}">
        @error('lugar_nacimiento')
        <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                {{$message}}
        </span>
        @enderror
    </div>
    <div class="col-span-6 sm:col-span-6">
        <label for="domicilio">Domicilio</label>
        <input class="mt-1 block w-full rounded-md border-gray-400 shadow-sm focus:border-teal-500 focus:ring-indigo-500 sm:text-sm
        @error('domicilio')
            border-red-500
        @enderror "  
        type="text" name="domicilio" id="domicilio" value="{{ old('domicilio',$alumno->domicile)}}">
        @error('domicilio')
        <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                {{$message}}
        </span>
        @enderror
    </div>
    
    <div class="col-span-6 sm:col-span-3">
        <label for="telefono_casa">Telefono de casa</label>
        <input class="mt-1 block w-full rounded-md border-gray-400 shadow-sm focus:border-teal-500 focus:ring-indigo-500 sm:text-sm
        @error('telefono_casa')
            border-red-500
        @enderror " 
        type="text" name="telefono_casa" id="telefono_casa" value="{{ old('telefono_casa', $alumno->home_phone) }}">
        @error('telefono_casa')
        <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                {{$message}}
        </span>
        @enderror
    </div>

    <div class="col-span-6 sm:col-span-3">
        <label for="telefono_celular">Telefono celular</label>
        <input class="mt-1 block w-full rounded-md border-gray-400 shadow-sm focus:border-teal-500 focus:ring-indigo-500 sm:text-sm 
        @error('telefono_celular')
            border-red-500
        @enderror " 
        type="text" name="telefono_celular" id="telefono_celular" value="{{ old('telefono_celular', $alumno->cell_phone) }}">
        @error('telefono_celular')
        <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                {{$message}}
        </span>
        @enderror
    </div>

</div>
