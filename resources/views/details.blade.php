@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <a href="/home" type="button" class="btn btn-primary">Back</a>
        
            <div class="panel panel-default">
                <div class="panel-heading">Details
                    <button type="button" class="btn btn-danger pull-right">Delete</button>
                    <div class="clearfix"></div>
                </div>

                <div class="panel-body">
                    <form class="form" method="POST">
                        {!! csrf_field() !!}

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name">
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
                            <button type="submit" class="btn btn-default">Update</button>
                        </div>
                    </form>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>
                                    VALUE
                                </th>
                                <th>
                                    SCANNED
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($values_history as $value_historic)
                            <tr>
                                <td>
                                    {{ $value_historic->value }}
                                </td>
                                <td>
                                    {{ $value_historic->created_at }}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
