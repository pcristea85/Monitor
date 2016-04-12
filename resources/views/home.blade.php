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
                            <tr>
                                <td>
                                    Some Product
                                </td>
                                <td>
                                    <a href="http://www.buystuff.com/?pid=23">http://www.buystuff.com/?pid=23</a>
                                </td>
                                <td>
                                    div.price
                                </td>
                                <td>
                                    Numeric
                                </td>
                                <td>
                                    2019-30-22
                                </td>
                                <td>
                                    $3.99
                                </td>
                                <td>
                                    <a href="details">Details</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
