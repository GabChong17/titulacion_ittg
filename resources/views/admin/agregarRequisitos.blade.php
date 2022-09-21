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
                <h4 class="card-title">Agregar Requisito</h4>
              </div>
            <form method="POST" action="/agregaRequisitos2">
                @csrf   
                <!-- Plan_id -->
                <div>
                    <br>
                    <x-label for="campus" :value="__(' Plan ') " />
                        <div class="col-md-12">
                            <select class="form-select" aria-label="Default select example" name="Planes_id" :value="{{ old('Planes_id') }}">
                                <option selected>Selecciona una plan</option>
                                @forelse($planes as $plan)
                                <option value="{{$plan->id}}"> {{$plan->Nombre}} </option>  
                                    @empty
                                    <option disable>Sin opciones disponibles</option>
                                @endforelse                         
                             </select>   
                        </div>
                </div> 
                <!-- Opciones_id -->
                <div>
                    <br>
                    <x-label for="campus" :value="__(' Opciones ') " />
                        <div class="col-md-12">
                            <select class="form-select" aria-label="Default select example" name="Opciones_id" :value="{{ old('Opciones_id') }}">
                                <option selected>Selecciona una opcion</option>
                                @forelse($Opciones as $Opcion)
                                <option value="{{$Opcion->id}}"> {{$Opcion->plan->Nombre}}  {{$Opcion->Nombre}} </option>  
                                    @empty
                                    <option disable>Sin opciones disponibles</option>
                                @endforelse                         
                             </select>   
                        </div>
                </div> 
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

