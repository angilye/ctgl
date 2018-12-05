@extends('template.template')

@section('title', 'Contact')

@section('SousTitre', 'Formulaire de contact')

@section('content')

    <div class="text-center">
        {{$pages->content}}
    </div>

    <div id="formContact" class="formContact">
        <form action="{{ route('Contact_path') }}" method="POST" novalidate >
            {{ csrf_field() }}
            <div class="form-row justify-content-around">
                <div class="form-group col-md-4">
                    <label for="nom" class="control-label">Nom :</label>
                    <input type="text" name="nom" id="nom" class="form-control {{ $errors->has('nom') ? 'is-invalid' : '' }} " required="required" value="{{ old('nom') }}">
                    <div class="invalid-feedback">
                        {!! $errors->first('nom', '<span>:message</span>') !!}
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="email" class="control-label">Email :</label>
                    <input type="email" name="email" id="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }} " required="required" value="{{ old('email') }}">
                    <div class="invalid-feedback">
                        {!! $errors->first('email', '<span class"hel-block">:message</span>') !!}
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group offset-md-1 col-md-4">
                    <label for="motif" class="control-label">Motif :</label>
                    <SELECT name="motif" size="1" id="motif" class="form-control {{ $errors->has('motif') ? 'is-invalid' : '' }} " required="required">
                        <option value="default" {{ old('Motif') == "default" ? 'selected' : '' }} >--Motif--</option>
                        <option value="Inscription" {{ old('Motif') == "Inscription" ? 'selected' : '' }} >Inscription</option>
                        <option value="Club" {{ old('Motif') == "Club" ? 'selected' : '' }} >Club</option>
                        <option value="Evenement" {{ old('Motif') == "Evenement" ? 'selected' : '' }} >Evenement</option>
                        <option value="Proposition" {{ old('Motif') == "Proposition" ? 'selected' : '' }} >Proposition</option>
                    </SELECT>
                    <div class="invalid-feedback">
                        {!! $errors->first('motif', '<span class"hel-block">:message</span>') !!}
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group offset-md-1 col-md-10">
                    <label for="msg" class="control-label">Message :</label>
                    <textarea name="msg" id="msg" class="form-control {{ $errors->has('msg') ? 'is-invalid' : '' }} " required="required" rows="8">{!!old("msg")!!}</textarea>
                    <div class="invalid-feedback">
                        {!! $errors->first('msg', '<span class"hel-block">:message</span>') !!}
                    </div>
                </div>
            </div>
            <div class="form-group text-center">
                <button class="FormBtn btn btn-primary btn-lg" type="submit">Envoyer &raquo;</button>
            </div>
        </form>
    </div>

@endsection
