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


                        <table width="100%">
                            <tr>
                                <td style="color:blue;" width="25%"> {{Carbon\Carbon::parse($plan->plan_date)->translatedFormat('d-F')}}</td>
                                <td>  {{$plan->plan_work}}</td>
                                <td>  {{$plan->plan_page}}</td>
                            </tr>


                        </table>
                        <hr>


                    <hr>



                    <br>
                    <a href="{{url('kid')}}"><button class="btn btn-success">Retour</button></a>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
