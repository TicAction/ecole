
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Administration') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

<ul>
    <li>
        <a href="{{route('admins.create')}}" >Création des devoirs</a>
    </li>
    <li>
        <a href="{{route('exam.index')}}" >Liste des évaluation</a>
    </li>
    <li>
        <a href="{{route('exam.create')}}" >Nouvelle évaluation</a>
    </li>
    <li>
        <a href="{{route('kid.index')}}" >Liste des élèves</a>
    </li>
    <li>
        <a href="{{route('observation.create')}}" >Nouvelle observation</a>
    </li>
    <li>
        <a href="{{route('homework.index')}}" >Liste des travaux</a>
    </li>
    <li>
        <a href="{{route('homework.create')}}" >Remise de travaux</a>
    </li>

</ul>


        </div>
    </div>