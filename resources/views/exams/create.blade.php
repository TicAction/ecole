
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

                        <form action="{{route('exam.store')}}" method="POST">
                            @csrf
                            @method('POST')

                                <div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Date prévue de l'examen</strong>
                                            <input type="date" name="date_exam" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                </div>



                            <div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Nom</strong>
                                        <input type="text" name="name" class="form-control" placeholder="Nom de l'évaluation">
                                    </div>
                                </div>
                            </div>



                            <div>

                                    <div class="form-group">
                                        <strong>Matière</strong>
                                        <select name="notion" id="notion" class="w-100">
                                            <option value="Autre">Autre</option>
                                            <option value="Mathématique Résoudre">Mathématique Résoudre</option>
                                            <option value="Mathématique Concept">Mathématique Concept</option>
                                            <option value="Français Lecture">Français Lecture</option>
                                            <option value="Français Écriture">Français Écriture</option>
                                            <option value="Français Expression Orale">Français Expression Orale</option>
                                            <option value="Univers Social">Univers Social</option>
                                            <option value="Anglais">Anglais</option>
                                        </select>
                                    </div>
                                </div>


                                <div>
                                    <div class="form-group">
                                        <strong>Manuel</strong>
                                        <select name="manuel" id="manuel" class="w-100">
                                            <option value="Autre">Autre</option>
                                            <option value="Jazz">Jazz</option>
                                            <option value="Matcha">Matcha</option>
                                            <option value="Épopée">Épopée</option>

                                        </select>
                                    </div>
                                </div>



                            <div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Description</strong>
                                        <textarea name="description" id="" cols="125" rows="10" placeholder="Écrire une courte description" class="form-control ckeditor"></textarea>
                                    </div>
                                </div>
                            </div>


                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                                <button type="submit" class="btn btn-primary" > Soumettre </button>
                            </div>

                        </form>


                    </div>

                </div>
            </div>
        </div>
    </div>


</x-app-layout>