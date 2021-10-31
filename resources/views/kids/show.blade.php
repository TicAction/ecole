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

    <table class="table">

        <tr>
            <td>{{$kid->lastname}} {{$kid->firstname}}</td>
        </tr>

    </table>

                        <table class="table">
                            @foreach($kid->observation as $k)
                            <tr>
                                <td style="color:blue;"> {{Carbon\Carbon::parse($k->observation_date)->translatedFormat('d-F')}}</td>
                            </tr>

                            <tr>
                                <td>
                                    <br>
                                   {{$k->content}}
                                </td>
                            </tr>
                                <tr>
                                    <td  style="text-align: right">
                                     <button class="btn btn-primary btn-sm mt-2 mb-2"><a href="{{route('observation.edit',$k->id)}}" class="float-right">Modifier l'observaton</a></button>

                                    </td>

                                </tr>

                    @endforeach
                        </table>

                    <a href="{{url('kid')}}"><button class="btn btn-success">Retour</button></a>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
