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

                    <h1 class="text-center text-2xl">Plan de travail</h1>


                    <table class="table table-striped">
                        <tr>
                            <th>Date du plan de travail</th>

                            <th>Cahier</th>
                            <th>Page</th>
                            <th>Editer</th>
                            <th>Voir</th>
                            <th>Supprimer</th>

                        </tr>
                        @foreach($plans as $plan)
                            <tr>
                               <td>{{\Carbon\Carbon::parse( $plan->plan_date)->translatedFormat('l d F')  }}</td>
                               <td>{{Str::limit($plan->plan_work,10,"...")}}</td>
                               <td>{{Str::limit($plan->plan_page,10,"...")}}</td>


                            <td><button class="btn btn-primary btn-sm"><a href="{{route('plan.edit',$plan->id)}}">Éditer</a></button></td>
                            <td><button class="btn btn-success btn-sm"><a href="{{route('plan.show',$plan->id)}}">Voir</a></button></td>
                            <td>
                                <form action="{{ route('plan.destroy',$plan->id) }}" method="POST">

                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>

                        @endforeach
                    </table>

                    <a href="{{route('plan.create')}}"><button class="btn btn-primary">Créer un nouveau plan</button></a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
