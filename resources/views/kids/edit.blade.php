<x-app-layout>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
    <form action={{url('kid', $kid->id)}} method="POST">
        @csrf
        @method('PUT')

        <div class="row row-cols-4">

        </div>
        <div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nom de famille</strong>
                    <input type="text" name="firstname" class="form-control" placeholder="" value="{{$kid->firstname}}">
                </div>
            </div>
        </div>
        <div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Prénom</strong>
                    <input type="text" name="lastname" class="form-control" placeholder="" value="{{$kid->lastname}}">
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center pt-5">

            <button type="submit" class="btn btn-primary" > Soumettre </button>

        </div>


                    </div>
                </div>
            </div>
        </div>
    </form>
        <div class="text-center"><a href="{{url('kid')}}"><button class="btn btn-success">Retour</button></a></div>
</x-app-layout>
