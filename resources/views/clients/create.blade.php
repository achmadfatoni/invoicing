@extends('layouts.app')

@section('content')
    <div class="container" id="organization">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @include('layouts.breadcrumb', [
                    'breadcrumbs' => [
                        [
                            'title' => 'Client',
                            'link' => route('clients.index'),
                        ],
                        [
                            'title' => 'Create',
                            'active'    => true,
                        ],
                    ]
                ])
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel-primary">
                    <div class="panel-heading">Organization</div>
                    <div class="panel-body">
                        <div class="form-horizontal">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="organization_name"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">ID Number</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="organization_id_number"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Website</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="organization_website"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Phone</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="organization_phone"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel-primary">
                    <div class="panel-heading">Contact</div>
                    <div class="panel-body">
                        <div class="form-horizontal">
                            <div class="form-group">
                                <label class="col-md-3 control-label">First Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="contact_first_name"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Last Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="contact_last_name"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Email</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="contact_email"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Phone</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="contact_phone"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel-primary">
                    <div class="panel-heading">Address</div>
                    <div class="panel-body">
                        <div class="form-horizontal">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Street</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="organization_street"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Apt/Suite</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="organization_app_suite"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">State/Province</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="organization_state"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Postal Code</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="organization_postal_code"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Country</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="organization_country"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <button v-show="! loading" class="btn btn-warning text-center" v-on:click="save"><i class="fa fa-floppy-o"></i>&nbsp; Save</button>
                <button v-show="loading" class="btn btn-warning text-center" disabled><i class="fa fa-spinner fa-spin"></i>&nbsp; Saving</button>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="/js/organization.js"></script>
@endpush
