@extends('layouts.default')

@section('content')

    <form class="form-horizontal" action='' method="POST">
        <div class="container">
            <div class="row">

                <div class="col-md-10 col-md-offset-1">

                    <div class="panel panel-default panel-table">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col col-xs-6">
                                    <h1 class="panel-title">Message</h1>
                                </div>
                                <!-- <div class="col col-xs-6 text-right">
                                     <button type="button" class="btn btn-sm btn-primary btn-create">Create New</button>
                                 </div> -->
                            </div>
                        </div>
                        <div class="panel-body">
                            <table class="table table-striped table-bordered table-list">
                                <thead>
                                <tr>
                                    <th class="hidden-xs">Message</th>
                                    <th class="hidden-xs">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <td align="center">
                                    <a class="btn btn-default"><em class="fa fa-pencil"></em></a>
                                    <a class="btn btn-danger"><em class="fa fa-trash">Delete</em></a>
                                </td>
                                <td><a href="/card" class="alert-link">Hello Mr Keith</a></td>
                                </tbody>
                            </table>

                        </div>
                        <div class="panel-footer">
                            <div class="row">
                                <div class="col col-xs-4">Page 1 of 5
                                </div>
                                <div class="col col-xs-8">
                                    <ul class="pagination hidden-xs pull-right">
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                    </ul>
                                    <ul class="pagination visible-xs pull-right">
                                        <li><a href="#">«</a></li>
                                        <li><a href="#">»</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </form>
@endsection