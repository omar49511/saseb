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
        type="datetime-local" name="fecha_nacimiento" id="fecha_nacimiento" value="{{old('fecha_nacimiento', is_null($alumno->birthdate) ? '': $alumno->birthdate->format('Y-m-d\TH:i'))}}">
        @error('fecha_nacimiento')
        <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                {{$message}}
        </span>
        @enderror
    </div>
	    <div class="col-span-6 sm:col-span-2">
        <label for="grupo">Grupo</label>
        <input class="mt-1 block w-full rounded-md border-gray-400 shadow-sm focus:border-teal-500 focus:ring-indigo-500 sm:text-sm
        @error('grupo')
            border-red-500
        @enderror "  
        type="text" name="grupo" id="grupo" value="{{ old('grupo',$alumno->group)}}">
        @error('grupo')
        <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                {{$message}}
        </span>
        @enderror
    </div>
	<div class="col-span-6 sm:col-span-2">
        <label for="turno">Turno</label>
        <select class="mt-1 block w-full rounded-md border-gray-400 shadow-sm focus:border-teal-500 focus:ring-indigo-500 sm:text-sm 
        @error('turno')
            border-red-500
        @enderror "          
        name="turno" id="turno" value="{{old('turno', $alumno->shift)}}">
            <option value="Matutino"{{ $alumno->shift == "Matutino" ? 'selected' : '' }}>Matutino</option>
            <option value="Vespertino" {{ $alumno->shift == "Vespertino" ? 'selected' : '' }}>Vespertino</option>
        </select>
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
        <label for="tiempo_residir">Tiempo de residencia</label>
        <input class="mt-1 block w-full rounded-md border-gray-400 shadow-sm focus:border-teal-500 focus:ring-indigo-500 sm:text-sm
        @error('tiempo_residir')
            border-red-500
        @enderror "          
        type="text" name="tiempo_residir" id="tiempo_residir" value="{{ old('tiempo_residir',$alumno->time_to_reside) }}">
        @error('tiempo_residir')
        <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                {{$message}}
        </span>
        @enderror
    </div>

    <div class="col-span-6 sm:col-span-3">
        <label for="estados_dropdown" >Estado de nacimiento</label>
        <select id="estados_dropdown" class="mt-1 block w-full rounded-md border-gray-400 shadow-sm focus:border-teal-500 focus:ring-indigo-500 sm:text-sm">
            @foreach ($states as $state)
                <option value="{{$state->id}}">{{$state->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-span-6 sm:col-span-3"> 
        <label for="ciudades_dropdown">Ciudad de nacimiento</label>
        <select id="ciudades_dropdown" name="ciudades_dropdown" class="mt-1 block w-full rounded-md border-gray-400 shadow-sm focus:border-teal-500 focus:ring-indigo-500 sm:text-sm">
            {{-- @foreach ($cities as $city) --}}
                {{-- <option value="{{$city->id}}">{{$city->name}}</option> --}}
            {{-- @endforeach --}}
        </select>
    </div>
    
    <input type="hidden" name="ciudad" id="ciudad" value="{{$alumno->city->name}}">
    <input type="hidden" name="estado" id="estado" value="{{$alumno->city->state->name}}">
    
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
	
	<div class="col-span-6 sm:col-span-3">
        <label for="religion">Religion</label>
        <input class="mt-1 block w-full rounded-md border-gray-400 shadow-sm focus:border-teal-500 focus:ring-indigo-500 sm:text-sm
        @error('religion')
            border-red-500
        @enderror "  
        type="text" name="religion" id="religion" value="{{ old('religion',$alumno->religion)}}">
        @error('religion')
        <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                {{$message}}
        </span>
        @enderror
    </div>
	
    <div class="col-span-6 sm:col-span-3">
        <label for="trabajo">Ocupacion</label>
        <input class="mt-1 block w-full rounded-md border-gray-400 shadow-sm focus:border-teal-500 focus:ring-indigo-500 sm:text-sm
        @error('trabajo')
            border-red-500
        @enderror "  
        type="text" name="trabajo" id="trabajo" value="{{ old('trabajo',$alumno->work)}}">
        @error('trabajo')
        <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                {{$message}}
        </span>
        @enderror
    </div>
	
</div>
