@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <a href="/value/details/{{ $value->id }}" type="button" class="btn btn-primary">Back</a>
        
            <div class="panel panel-default">
                <div class="panel-heading">Edit <b>{{ $value->name }}</b>
                    <div class="pull-right">
                        <button type="button" class="btn btn-info">Delete</button>
                    </div>
                    <div class="clearfix"></div>
                </div>


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
                            <input name="name" type="text" class="form-control" id="name" value="{{ $value->name }}">
                        </div>
                        <div class="form-group">
                            <label for="url">Complete URL</label>
                            <input name="url" type="text" class="form-control" id="url" value="{{ $value->url }}">
                        </div>
                        <div class="form-group">
                            <label for="css_rule">CSS Rule</label>
                            <input name="css_rule" type="text" class="form-control" id="css_rule"  value="{{ $value->css_rule }}">
                        </div>

                        <div class="radio-inline">
                            <label>
                                <input type="radio" name="type" id="optionsRadios1" value="text" @if ($value->type == 'text') checked @endif >
                                Text
                            </label>
                        </div>
                        <div class="radio-inline">
                            <label>
                                <input type="radio" name="type" id="optionsRadios2" value="numeric" @if ($value->type == 'numeric') checked @endif >
                                Numeric
                            </label>
                        </div>

                        <div class="form-group">
                            <label for="value">Value</label>
                            <input name="value" type="text" class="form-control" id="value" value="{{ $value->value }}">
                        </div>

                        <div class="checkbox">
                            <label>
                                <input name="alert" type="hidden" value="0">
                                <input name="alert" type="checkbox" value="1" @if ($value->type == 'numeric') checked @endif >Alert me via Email
                            </label>
                        </div>
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-default">Update</button>
                        </div>
                    </form>                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
