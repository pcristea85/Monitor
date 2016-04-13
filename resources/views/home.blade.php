@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <a href="value/create" type="button" class="btn btn-primary">Monitor New Value</a>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>
                                    NAME
                                </th>
                                <th>
                                    URL
                                </th>
                                <th>
                                    CSS SECTION
                                </th>
                                <th>
                                    TYPE
                                </th>
                                <th>
                                    CREATED
                                </th>
                                <th>
                                    LAST VALUE
                                </th>
                                <th>
                                    ...
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($values as $value)
                            <tr>
                                <td>
                                    {{ $value->name }}
                                </td>
                                <td>
                                    <a href="{{ $value->url }}">{{ $value->url }}</a>
                                </td>
                                <td>
                                    {{ $value->css_rule }}
                                </td>
                                <td>
                                    {{ $value->type }}
                                </td>
                                <td>
                                    {{ $value->created_at }}
                                </td>
                                <td>
                                    $3.99
                                </td>
                                <td>
                                    <a href="value/details/{{ $value->id }}">Details</a>
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
