@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <a href="/home" type="button" class="btn btn-primary">Back</a>
        
            <div class="panel panel-default">
                <div class="panel-heading"><b>{{ $value->name }}</b>Details
                    <div class="pull-right">
                    <a href="/value/edit/{{ $value->id }}" type="button" class="btn btn-danger">Edit</a>
                    <a href="/value/delete/{{ $value->id }}" type="button" class="btn btn-info">Delete</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-body">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>
                                    <b>Name</b>
                                </td>
                                <td>
                                    <i>{{ $value->name }}</i>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>URL</b>
                                </td>
                                <td>
                                    <a href="{{ $value->url }}"><i>{{ $value->url }}</i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>CSS Rule</b>
                                </td>
                                <td>
                                    <i>{{ $value->css_rule }}</i>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Type</b>
                                </td>
                                <td>
                                    <i>{{ $value->type }}</i>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Value</b>
                                </td>
                                <td>
                                    <i>"{{ $value->value }}"</i>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Email Alerts</b>
                                </td>
                                <td>
                                    <i>@if ($value->alert) On @else Off @endif</i>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Created</b>
                                </td>
                                <td>
                                    <i>{{ $value->created_at }}</i>
                                </td>
                            </tr>
                        </tbody>
                    </table>

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
