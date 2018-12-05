@extends('template.templateAdmin')

@section('title', 'Administration')
@section('content')



    <div id="formCkeditor">

        <table class="table table-striped">

            <thead>

            <tr>
                <th scope="col">Bandeau</th>
                <th scope="col">Contenu</th>
            </tr>

            </thead>

            <tbody>

            @foreach($bandes as $bande)

                    <tr>
                        <th style="width:30%;" scope="row">{{$bande->title}}</th>
                        <td style="width:70%;">
                            <form action="{{route('updateAcceuil') }}" method="post" class="form-inline">
                                @csrf

                                <input class="form-control col-md-8 {{ $errors->has('contenue') ? 'is-invalid' : '' }}" type="text" name="contenu" id="editor1" value="{{$bande->contenue}}" >

                                <input id="id" type="hidden" name="id" value="{{$bande->id}}">

                                <input type="submit" class="btn btn-primary mb-2" value="Update" style="margin-left: 2%;">

                            </form>
                        </td>
                    </tr>

            @endforeach

            </tbody>

        </table>


    </div>




@endsection
