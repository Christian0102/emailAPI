@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <!--Send Email Modal -->
                    <div id="modaledit" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Edit User</h4>
                                </div>
                                <form id="formedit" , method="PUT" , action="">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="InputEmail">Email address</label>
                                            <input type="text" class="form-control" id="InputEmail" value="a" />
                                        </div>
                                        <div class="form-group">
                                            <label for="InputFname">First Name</label>
                                            <input type="text" class="form-control" id="InputFname" />
                                        </div>
                                        <div class="form-group">
                                            <label for="InputLname">Last Name</label>
                                            <input type="text" class="form-control" id="InputLname" />
                                        </div>
                                        <div class="form-group">
                                            <label for="Inputnohp">Phone Number</label>
                                            <input type="text" class="form-control" id="Inputnohp" />
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" id="submit-edit" class="btn btn-default">Submit</button>
                                        <button type="button" class="btn btn-default"
                                            data-dismiss="modal">Close</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <a href="" id="#openModal" class="btn btn-primary btn-rounded mb-4" data-toggle="modal"
                        data-target="#sendEmail">Send Email</a>
                </div>

            </div>
        </div>
    </div>
</div>
</div>
@endsection
