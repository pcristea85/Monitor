@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Monitor New Value</div>

                <div class="panel-body">
                    
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form class="form" method="POST">
                        {!! csrf_field() !!}

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input name="name" type="text" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                            <label for="url">Complete URL</label>
                            <input name="url" type="text" class="form-control" id="url">
                        </div>
                        <div class="form-group">
                            <label for="css_rule">CSS Rule</label>
                            <input name="css_rule" type="text" class="form-control" id="css_rule">
                        </div>

                        <div class="radio-inline">
                            <label>
                                <input type="radio" name="type" id="typeOptionText" value="text" checked>
                                Text
                            </label>
                        </div>

                        <div class="radio-inline">
                            <label>
                                <input type="radio" name="type" id="typeOptionNumeric" value="numeric">
                                Numeric
                            </label>
                        </div>

                        <div class="form-group">
                            <label for="value">Value</label>
                            <input type="text" name="value" class="form-control" id="value">
                        </div>

                        <div class="checkbox">
                            <label>
                                <input name="alert" type="checkbox">Alert me via Email
                            </label>
                        </div>
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-default">Create</button>
                        </div>
                    </form>
                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
