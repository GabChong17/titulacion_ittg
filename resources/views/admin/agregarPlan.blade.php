@extends('admin.users.index')
    @section('content')
    <x-guest-layout>
        <x-auth-card>
            <x-slot name="logo">
            
                </a>
            </x-slot>
    
            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
            <div class="card-header card-header-primary">
                <h4 class="card-title">Agregar plan</h4>
              </div>
            <form method="POST" action="/agregaPlan">
                @csrf    
                <!-- Nombre -->
                <div>
                    <x-label for="Nombre" :value="__('Nombre')" />
                    <x-input id="Nombre" class="block mt-1 w-full" type="text" name="Nombre" :value="old('Nombre')" required autofocus />
                </div>
                
                <div class="flex items-center justify-end mt-4">
                    
    
                    <x-button class="ml-4">
                        {{ __('Agregar') }}
                    </x-button>
                </div>
            </form>
        </x-auth-card>
    </x-guest-layout>
    

@endsection

