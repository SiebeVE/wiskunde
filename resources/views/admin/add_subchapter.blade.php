@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Hoofdstuk toevoegen</div>

                <div class="panel-body">
                    <form method="post" action="{{url('/add_subchapter')}}">
                        {{ csrf_field() }}
                        <div>
                            <label for="nr">Nummer:</label>
                            <input type="number" name="nr" id="nr" min="1" required>
                        </div>
                        
                        <div>
                            <label for="name">Naam:</label>
                            <input type="text" name="name" id="name" required>
                        </div>
                        
                        <div>
                            <label for="chapter">Hoofdstuk:</label>
                            <select name="chapter" id="chapter">
                                @foreach($chapters as $chapter)
                                <option value="{{$chapter->id}}">{{$chapter->nr}} {{$chapter->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div>
                            <input class="btn btn-success" type="submit" value="Opslagen">
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
