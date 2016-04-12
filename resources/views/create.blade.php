@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Monitor New Value</div>

                <div class="panel-body">
                    

                    <form class="form" method="POST">
                        {!! csrf_field() !!}

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                            <label for="css_rule">Complete URL</label>
                            <input type="text" class="form-control" id="css_rule">
                        </div>
                        <div class="form-group">
                            <label for="css_rule">CSS Rule</label>
                            <input type="text" class="form-control" id="css_rule">
                        </div>

                        <div class="radio-inline">
                            <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                Text
                            </label>
                        </div>
                        <div class="radio-inline">
                            <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                Numeric
                            </label>
                        </div>

                        <div class="form-group">
                            <label for="css_rule">Value</label>
                            <input type="text" class="form-control" id="css_rule">
                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox">Alert me via Email
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
