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
Je suis le  meilleur
    <table class="table">

        <tr>
            <td>{{$kid->FullName}}</td>
        </tr>

    </table>
                    @foreach($kid->observation as $k)
                        <table>
                            <tr>
                                <td style="color:blue;"> {{Carbon\Carbon::parse($k->observation_date)->translatedFormat('d-F')}}</td>
                            </tr>

                            <tr>
                                <td>
                                    <br>
                                   {{$k->content}}
                                </td>
                            </tr>
                        </table>
                        <hr>

                    @endforeach
                    <hr>



                    @foreach($kid->homeworks as $hw)
                     <div class="text-1xl" style="color:blue;">{{$hw->name}} // {{Carbon\Carbon::parse($hw->date_ask)->translatedFormat('d-F')}}
                         </div>
                        <table>
                            <tr>
                                @if($hw->status === 'Non Fait')
                                <td>
                                    <div style="color:red;">{{$hw->status}}</div>

                                </td>
                                    @elseif($hw->status === 'Fait')
                                    <td>
                                        <div style="color:teal;">{{$hw->status}}</div>

                                    </td>
                                    @else
                                    <td>
                                        <div>{{$hw->status}}</div>

                                    </td>
                                    @endif
                            </tr>
                        </table>
                        @endforeach
                    <br>
                    <a href="{{url('kid')}}"><button class="btn btn-success">Retour</button></a>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
