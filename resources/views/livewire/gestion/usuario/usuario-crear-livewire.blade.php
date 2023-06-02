<div>
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-3 text-gray-700">
        <h1 class="text-3xl text-center font-semibold mb-8">
            Complete esta informacion para crear una Usuario
        </h1>
    
    
        <div class="bg-white shadow-xl rounded-lg p-6">
            
    
                {{-- Nombre --}}
            <div class="mb-4">
                <x-jet-label value="Nombre"/>
                <x-jet-input 
                    type="text" 
                    class="w-full" 
                    wire:model="name"
                    placeholder="Ingrese el nombre del Usuario"/>
                    <x-jet-input-error for="name"/>
            </div>
            {{-- Correo --}}
            <div class="mb-4">
                <x-jet-label value="E-mail" />
                <x-jet-input 
                    type="email" 
                    class="w-full" 
                    wire:model="email"
                    placeholder="Escriba el Correo"/>
                    <x-jet-input-error for="email"/>
            </div>
              {{-- Contraseña --}}
              <div class="mb-4">
                <x-jet-label value="Contraseña" />
                <x-jet-input 
                    type="password" 
                    class="w-full" 
                    wire:model="password"
                    placeholder="Escriba la contraseña"/>
                    <x-jet-input-error for="password"/>
            </div>      
    
            <div class="flex">
                <a type="button" href="{{ route('show_usuarios') }}"
                class=" absolute p-sm inline-block px-6 py-2 border-2 border-green-500 text-green-500 font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out">
                Ver Usuarios
            </a>
                <x-jet-button
                class="flex justify-end items-end"
                    wire:loading.attr="disabled"
                    wire:target="save"
                    wire:click="save"
                    class="ml-auto">
                    Crear Usuario
                </x-jet-button>
            </div>      
    
        </div>
    
        @push('script')
        <script>
            Livewire.on('saved', user => {
    
                Swal.fire(
                'Creado exitosamente!',
                'Creaste un usuario!',
                'success'
                )
    
                Livewire.emitTo('admin.usuario.edit-user','saved',user); 
            })
    
        
        </script>
       @endpush
    
    
    </div>
</div>
