<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Administration') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">


                  @include('include/message')
                    <h1 class="text-center text-2xl">Liste des Travaux</h1>
                   @foreach($homeworks as $homework)
                      {{$homework->homework_name}}
                       <hr>
                    @foreach($homework->kids as $kid )
                       {{$kid->fullname}} {{$kid->pivot->signature}}
                        @endforeach
                       @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
