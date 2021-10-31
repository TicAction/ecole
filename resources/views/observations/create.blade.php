
<x-app-layout>
    <div class="container">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">


                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{route('observation.store')}}" method="POST">
                            @csrf
                            @method('POST')

                            <div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <strong>Date de l'observation</strong>
                                        <input type="date" name="observation_date" class="form-control" value="{{date('Y-m-d')}}">
                                    </div>

                                    <div class="form-group">
                                        <strong>Période de la journée</strong>
                                        <select name="period" id="period" class="form-control">
                                            <option value="1">Période 1</option>
                                            <option value="2">Période 2</option>
                                            <option value="3">Période 3</option>
                                            <option value="4">Période 4</option>
                                            <option value="5">Période 5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>



                            <div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Élève</strong>
                                        <select name="kid_id" id="kid_id" class="form-control">
                                            @foreach($kids as $kid)
                                            <option value="{{$kid->id}}">{{$kid->FullName}}</option>
                                                @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>




                            <div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Obsevation</strong>
                                        <textarea class="form-control" name="content" id="" cols="125" rows="10" placeholder="Écrire une courte description"></textarea>
                                    </div>
                                </div>
                            </div>


                            <div class="col-xs-12 col-sm-12 col-md-12 text-center pt-3">

                                <button type="submit" class="btn btn-primary" > Soumettre </button>
                            </div>

                        </form>


                    </div>

                </div>
            </div>
        </div>
    </div>


</x-app-layout>