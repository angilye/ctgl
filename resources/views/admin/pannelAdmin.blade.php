@extends('template.templateAdmin')

@section('title', 'Administration')
@section('content')


    <div id="formCkeditor">
        <h1>{{$pages->name}}</h1>
        <form action="{{route('updatePage') }}" method="post">
            @csrf

            <textarea name="contenu" id="editor1" rows="10" cols="80">{{$pages->content}}</textarea>

            <input id="id" type="hidden" name="id" value="{{$pages->id}}">

            <p><input type="submit" value="Submit"></p>

        </form>
    </div>



@endsection

@section('script')
    CKEDITOR.replace( 'editor1' );
@endsection
