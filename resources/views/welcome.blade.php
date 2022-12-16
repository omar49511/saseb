<x-guest-layout>
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <section class="h-screen">
            <div class="container px-6 py-12 h-full">
                <div class="flex xl:justify-center lg:justify-between justify-center items-center flex-wrap h-full g-6">
                    <div class="grow-0 shrink-1 md:shrink-0 basis-auto xl:w-6/12 lg:w-6/12 md:w-9/12 mb-12 md:mb-0">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                            class="w-full" alt="Sample image" />
                    </div>
                    <div class="xl:ml-20 xl:w-5/12 lg:w-5/12 md:w-8/12 mb-12 md:mb-0">
                        <x-jet-validation-errors class="mb-4" />
                        @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <h1 class="text-center mb-5 text-3xl">Inicio de sesión</h1>

                            <!-- Email input -->
                            <div class="mb-6">
                                <x-jet-input id="email" class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" type="email" name="email" :value="old('email')" required autofocus placeholder="Correo"/>
                            </div>

                            <!-- Password input -->
                            <div class="mb-6">
                                <x-jet-input id="password" class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" type="password" name="password" required autocomplete="current-password" placeholder="Contraseña"/>
                            </div>

                            <div class="flex justify-between items-center mb-6">
                                <div class="form-group form-check">
                                    <label for="remember_me" class="form-check-label inline-block text-gray-800">
                                        <x-jet-checkbox id="remember_me" name="remember" class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" />
                                        {{ __('Recuerdame') }}
                                    </label>
                                </div>
                            </div>

                            
                            <x-jet-button class="inline-block px-7 py-3 bg-blue-600 text-white font-medium text-base leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                                {{ __('Iniciar') }}
                            </x-jet-button>
                            
                        </form>
                    </div>
                </div>
            </div>
        </section>
</x-guest-layout>