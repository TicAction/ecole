
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

                        <form action="{{route('homework.store')}}" method="POST" >
                            @csrf
                            @method('POST')
                            <div class="row mb-3">
                            <div class="form-group col-5">
                                    <label for="homework_name" class="form-label">Nom du travail</label>

                                    <input type="text" name="homework_name" class="form-control">
                            </div>

                              <div class="col-5">
                                <label for="homework_name" class="form-label">date du travail</label>

                                <input type="date" name="homework_date" class="form-control">
                             </div>

                            </div>
                            <hr>
                            <table width="100%" class="table-striped table-sm">
                                <tr>
                                    <td width="25%">Nom de l'élève</td>

                                </tr>
                                @foreach($kids as $kid)
                                <tr>
                                    <td><input type="text" value="{{$kid->fullname}}" name="kid->id[]"}} class="border-0"></td>
                                    <td>
{{--                                        <input name="kid[{{$kid->id}}]" type='text' class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">--}}
{{--                                        <select class="form-select" multiple aria-label="multiple select example" name="kid[{{$kid->id}}]">--}}

{{--                                            <option selected value="Oui">Oui</option>--}}
{{--                                            <option value="Non">Non</option>--}}
{{--                                            <option value="Incomplet">Incomplet</option>--}}
{{--                                        </select>--}}


                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" name="kid[{{$kid->id}}]" type="radio" id="inlineCheckbox1" value="Oui">
                                            <label class="form-check-label" for="inlineCheckbox1">Oui</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" name="kid[{{$kid->id}}]" type="radio" id="inlineCheckbox2" value="Non" checked>
                                            <label class="form-check-label" for="inlineCheckbox2">Non</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" name="kid[{{$kid->id}}]" type="radio" id="inlineCheckbox3" value="Incomplet" >
                                            <label class="form-check-label" for="inlineCheckbox3">Incomplet</label>
                                        </div>




                                    </td>
                                </tr>
                                @endforeach
                            </table>
                                <hr>

                                <button type="submit" class="btn btn-primary mt-lg-3" > Soumettre </button>


                        </form>


                    </div>

                </div>
            </div>
        </div>
    </div>


</x-app-layout>