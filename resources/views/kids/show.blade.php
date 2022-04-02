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
            <td><div class="text-2xl text-center">{{$kid->FullName}}</div></td>
        </tr>

    </table>
                    @foreach($kid->observation as $k)
                        <table width="100%">
                            <tr>
                                <td style="color:blue;" width="25%"> {{Carbon\Carbon::parse($k->observation_date)->translatedFormat('d-F')}}</td>
                                <td>  {{$k->content}}</td>
                            </tr>


                        </table>
                        <hr>

                    @endforeach
                    <hr>




                   @foreach($kid->homeworks as $homework)
                    <table width="100%">
                        <tr>

                            <td width="25%"> {{$homework->homework_name}}</td>
                            <td width="75%">[ {{$homework->pivot->sign}} ]</td>
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
