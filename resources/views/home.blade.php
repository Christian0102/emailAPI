@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <!--Send Email Modal -->
                    <div id="result"></div>
                    <div class="modal fade" id="send-email">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" align="center"><b>Send Email</b></h4>
                                </div>
                                <form role="form" method="POST" id="emailForm">
                                    <div class="modal-body">
                                        <input type="hidden" name="_token" id="token"
                                            value="<?php echo csrf_token(); ?>">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Message</label>
                                            <textarea rows="7" id="message" class="form-control" name="message"
                                                placeholder="Enter your Message.."></textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" id="close" class="btn btn-danger pull-left"
                                            data-dismiss="modal">Close</button>
                                        <button type="submit" id="#submit" class="btn btn-success">Send</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <a href="" class="btn btn-primary btn-rounded mb-4" id="openModal" data-toggle="modal"
                        data-target="#send-email">Send FeedBack</a>
                </div>
                <div class="alert alert-success" style="visibility:hidden;" role="alert">
                    <strong class="st-success"></strong>
                </div>
                <div class="alert alert-danger" style="visibility:hidden;" role="alert">
                    <strong class="st-danger"></strong>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
