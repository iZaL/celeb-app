@extends('admin.layouts.one_col')

@section('title')
    <h1>Celebritiesy</h1>
@endsection

@section('style')
    @parent
@endsection

@section('script')
    @parent
@endsection

@section('content')
    <div class="col-lg-12 mTop10">
        <div class="panel panel-default">
            <div class="panel-heading">
                Celebrities
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <table class="table table-striped table-bordered table-hover" id="dataTables">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($celebrities as $celebrity)
                            <tr>
                                <td style="vertical-align: middle">
                                    @if($celebrity->thumbnail)
                                        <img src="{{$celebrity->thumbnail->name}}" class="img-responsive img-thumbnail" style="width:75px; height:75px;">
                                    @endif
                                    {{$celebrity->name}}</td>
                                <td>
                                    <a href="{{action('Admin\CelebrityController@edit',$celebrity->id)}}">Edit</a>
                                </td>
                                <td>
                                    <a href="{{action('Admin\CelebrityController@delete',$celebrity->id)}}">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->

            </div>
            <!-- /.panel-body -->

            <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span
                                        class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                            <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
                        </div>
                        <div class="modal-body">

                            <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are
                                you sure you want to delete this Record?
                            </div>

                        </div>
                        <div class="modal-footer">
                            {!! Form::open(['action' => ['Admin\CelebrityController@destroy', 1], 'method' => 'delete'],
                            ['class'=>'form-horizontal']) !!}

                            <button type="submit" class="btn btn-success"><span
                                        class="glyphicon glyphicon-ok-sign"></span> Yes
                            </button>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><span
                                        class="glyphicon glyphicon-remove"></span> No
                            </button>

                            {!! Form::close() !!}
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>

        </div>
        <!-- /.panel -->
    </div>

@endsection