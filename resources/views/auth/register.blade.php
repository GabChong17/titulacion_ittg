<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
        <img src="/Imagenes/ITTG_Escudo.png" style="width: 200px; height: 200px;">
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- No de Control -->
            <div>
                <x-label for="NoControl" :value="__('No de Control')" />

                <x-input id="NoControl" class="block mt-1 w-full" type="text" name="NoControl" :value="old('NoControl')" required />
            </div>

            <!-- Nombre -->
            <div>
                <x-label for="name" :value="__('Nombre')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Apellido Paterno -->
            <div>
                <x-label for="a_paterno" :value="__('Apellido Paterno')" />

                <x-input id="a_paterno" class="block mt-1 w-full" type="text" name="a_paterno" :value="old('a_paterno')" />
            </div>

            <!-- Apellido Materno -->
            <div>
                <x-label for="a_materno" :value="__('Apellido Materno')" />

                <x-input id="a_materno" class="block mt-1 w-full" type="text" name="a_materno" :value="old('a_materno')" />
            </div>

            <!-- Carrera -->
            <div>
                <br>
                <x-label for="carrera" :value="__(' ') " />
                <div class="col-md-6">
                    <select class="form-select" aria-label="Default select example" name="carrera" :value="{{ old('carrera') }}">
                        <option selected>Selecciona una Carrera</option>
                        <option >Sistemas Computacionales</option>
                        <option >Logistica</option>
                        <option >Gestion Empresarial</option>
                        <option >Industrial</option>
                        <option >Mecanica</option>
                        <option >Electrica</option>
                        <option >Electronica</option>
                        <option >Quimica</option>
                        <option >Bioquimica</option>
                    </select>
                </div>
            </div>

            <!-- Campus -->
            <div>
                <br>
                <x-label for="campus" :value="__(' ') " />
                    <div class="col-md-6">
                         <select class="form-select" aria-label="Default select example" name="campus" :value="{{ old('campus') }}">
                           <option selected>Selecciona un Campus</option>
                           <option >Instituto Tecnologico de Tuxtla Gutierrez</option>
                           <option >Instituto Tecnologico de Comitan</option>
                           <option >Instituto Tecnologico de Tapachula</option> 
                        </select>
                    </div>
            </div>

            <!-- Plan de Estudios -->
            <div>
                <br>
                <x-label for="planDeestudios" :value="__(' ') " />
                    <div class="col-md-6">
                         <select class="form-select" aria-label="Default select example" name="planDeestudios" :value="{{ old('planDeestudios') }}">
                           <option selected>Selecciona un Plan de Estudios</option>
                           <option >Plan 93</option>
                           <option >Plan 2004</option>
                        </select>
                    </div>
            </div>


            <!-- Correo Electronico -->
            <div class="mt-4">
                <x-label for="email" :value="__('Correo Electrónico')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Telefono -->
            <div class="mt-4">
                <x-label for="telefono" :value="__('Teléfono')" />

                <x-input id="telefono" class="block mt-1 w-full" type="text" name="telefono" :value="old('telefono')" />
            </div>

            <!-- Contraseña -->
            <div class="mt-4">
                <x-label for="password" :value="__('Contraseña')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirmar Contraseña -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirmar Contraseña')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('¿Ya tienes cuenta?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Registrarse') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
