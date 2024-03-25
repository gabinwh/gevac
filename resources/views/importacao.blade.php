<x-app-layout>
    <x-slot name="header">
        <div class="row align-items-center">
            <div class="col-6">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Importação') }}
                </h2>
            </div>
            <div class="col-6 text-end">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    @if($isAdmin)
                        <a href="{{ route('dados') }}" type="button" class="btn btn-outline-primary btn-lg">
                            Importar dados
                        </a>
                    @endif
                </h2>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session('success') || session('error'))
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        
                        @if(session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                    </div>
                </div>
            @endif 

            <div class="mt-8 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                                  </svg>                                  
                            </div>
                            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">Cidadãos</div>
                        </div>
                        <div class="ml-12 mt-2 text-sm text-gray-500">
                            Total: {{ $totalCidadao }}
                        </div>
                    </div>
                </div>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <svg class="h-8 w-8 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                                                 
                            </div>
                            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">Doses aplicadas</div>
                        </div>
                        <div class="ml-12 mt-2 text-sm text-gray-500">
                            Total: {{ $totalDose }}
                        </div>
                    </div>
                </div>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205 3 1m1.5.5-1.5-.5M6.75 7.364V3h-3v18m3-13.636 10.5-3.819" />
                                  </svg>
                                                                   
                            </div>
                            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">Estabelecimentos</div>
                        </div>
                        <div class="ml-12 mt-2 text-sm text-gray-500">
                            Total: {{ $totalEstabelecimento }}
                        </div>
                    </div>
                </div>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <svg fill="#000000" height="28px" width="28px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 202.359 202.359" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M198.318,195.46l-22.857-22.857c0.731-0.731,1.183-1.741,1.183-2.857v-39.998c0-1.071-0.426-2.099-1.184-2.857 l-74.281-74.282c-0.002-0.002-0.004-0.002-0.006-0.004L64.038,15.471L41.182,38.327L29.753,26.898l19.999-20 c1.578-1.578,1.578-4.135,0-5.714c-1.578-1.578-4.135-1.578-5.714,0l-39.997,40c-1.578,1.578-1.578,4.135,0,5.714 c0.789,0.789,1.823,1.184,2.857,1.184s2.067-0.395,2.857-1.184L24.04,32.611l11.429,11.429L18.326,61.182l39.998,39.998 l0.001-0.001l71.424,71.424c0.758,0.758,1.785,1.184,2.857,1.184h33.331c0.187,0.608,0.472,1.191,0.954,1.673l25.714,25.714 c0.789,0.789,1.823,1.184,2.857,1.184s2.067-0.395,2.857-1.184C199.896,199.596,199.896,197.038,198.318,195.46z M58.323,89.752 l-28.57-28.57l34.285-34.284l28.57,28.57L58.323,89.752z M168.562,165.703h-34.284l-15.958-15.956l14.285-14.285 c1.578-1.578,1.578-4.135,0-5.714c-1.578-1.579-4.135-1.578-5.714,0l-14.285,14.285l-5.714-5.714l8.637-8.637 c1.578-1.578,1.578-4.135,0-5.714s-4.135-1.578-5.714,0l-8.637,8.637l-11.429-11.429l14.285-14.285 c1.578-1.578,1.578-4.135,0-5.714c-1.578-1.579-4.135-1.578-5.714,0l-14.285,14.285l-5.716-5.716l8.638-8.638 c1.578-1.578,1.578-4.135,0-5.714c-1.578-1.579-4.135-1.578-5.714,0l-8.638,8.638l-8.57-8.57l34.287-34.283l70.24,70.24V165.703z"></path> </g> </g> </g></svg>                                 
                            </div>
                            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">Vacinas</div>
                        </div>
                        <div class="ml-12 mt-2 text-sm text-gray-500">
                            Total: {{ $totalVacina }}
                        </div>
                    </div>
                </div>

                <!-- Repita esse padrão para os outros contadores (doses, endereços, estabelecimentos, vacinas) -->

            </div>
        </div>
    </div>
</x-app-layout>
