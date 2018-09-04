@extends('_includes/template') 
@section('content')
<div class="container">
    <form action="{{route('announcements.store')}}" method="POST">
        {{ csrf_field() }}
        <label for="title">Titulo:</label>
        <input type="text" name="title" id="title" class="form-control"/>

        <label for="descripcion">Descripción:</label>
        <textarea name="descripcion" id="descripcion" cols="20" rows="10" class="form-control"></textarea>
        <input type="submit" value="Submit" class="btn btn-primary">
    </form>
</div>
@endsection