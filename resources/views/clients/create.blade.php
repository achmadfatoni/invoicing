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
        <form method="post" action="{{ route('clients.store') }}" @submit.prevent="submitForm">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel-primary">
                    <div class="panel-heading">Organization</div>
                    <div class="panel-body">
                        <div class="form-horizontal">
                            <div class="form-group" v-bind:class="{ 'has-error' : formErrors['organization_name'] }">
                                <label class="col-md-3 control-label">Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="organization_name"
                                           v-model="formInputs.organization_name"
                                    />
                                    <span class="help-block" v-if="formErrors['organization_name']" class="error">@{{ formErrors['organization_name'] }}</span>
                                </div>
                            </div>
                            <div class="form-group" v-bind:class="{ 'has-error' : formErrors['organization_id_number'] }">
                                <label class="col-md-3 control-label">ID Number</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="organization_id_number" v-model="formInputs.organization_id_number"/>
                                    <span class="help-block" v-if="formErrors['organization_id_number']" class="error">@{{ formErrors['organization_id_number'] }}</span>
                                </div>
                            </div>
                            <div class="form-group" v-bind:class="{ 'has-error' : formErrors['organization_website'] }">
                                <label class="col-md-3 control-label">Website</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="organization_website" v-model="formInputs.organization_website"/>
                                    <span class="help-block" v-if="formErrors['organization_website']" class="error">@{{ formErrors['organization_website'] }}</span>
                                </div>
                            </div>
                            <div class="form-group" v-bind:class="{ 'has-error' : formErrors['organization_phone'] }">
                                <label class="col-md-3 control-label">Phone</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="organization_phone" v-model="formInputs.organization_phone"/>
                                    <span class="help-block" v-if="formErrors['organization_phone']" class="error">@{{ formErrors['organization_phone'] }}</span>
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
                            <div class="form-group" v-bind:class="{ 'has-error' : formErrors['contact_first_name'] }">
                                <label class="col-md-3 control-label">First Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="contact_first_name" v-model="formInputs.contact_first_name"/>
                                    <span class="help-block" v-if="formErrors['contact_first_name']" class="error">@{{ formErrors['contact_first_name'] }}</span>
                                </div>
                            </div>
                            <div class="form-group" v-bind:class="{ 'has-error' : formErrors['contact_last_name'] }">
                                <label class="col-md-3 control-label">Last Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="contact_last_name" v-model="formInputs.contact_last_name"/>
                                    <span class="help-block" v-if="formErrors['contact_last_name']" class="error">@{{ formErrors['contact_last_name'] }}</span>
                                </div>
                            </div>
                            <div class="form-group" v-bind:class="{ 'has-error' : formErrors['contact_email'] }">
                                <label class="col-md-3 control-label">Email</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="contact_email" v-model="contact_email"/>
                                    <span class="help-block" v-if="formErrors['contact_email']" class="error">@{{ formErrors['contact_email'] }}</span>
                                </div>
                            </div>
                            <div class="form-group" v-bind:class="{ 'has-error' : formErrors['contact_phone'] }">
                                <label class="col-md-3 control-label">Phone</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="contact_phone" v-model="contact_phone"/>
                                    <span class="help-block" v-if="formErrors['contact_phone']" class="error">@{{ formErrors['contact_phone'] }}</span>
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
                            <div class="form-group" v-bind:class="{ 'has-error' : formErrors['organization_street'] }">
                                <label class="col-md-3 control-label">Street</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="organization_street"/>
                                </div>
                            </div>
                            <div class="form-group" v-bind:class="{ 'has-error' : formErrors['organization_app_suite'] }">
                                <label class="col-md-3 control-label">Apt/Suite</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="organization_app_suite"/>
                                </div>
                            </div>
                            <div class="form-group" v-bind:class="{ 'has-error' : formErrors['organization_state'] }">
                                <label class="col-md-3 control-label">State/Province</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="organization_state"/>
                                </div>
                            </div>
                            <div class="form-group" v-bind:class="{ 'has-error' : formErrors['organization_postal_code'] }">
                                <label class="col-md-3 control-label">Postal Code</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="organization_postal_code"/>
                                </div>
                            </div>
                            <div class="form-group" v-bind:class="{ 'has-error' : formErrors['organization_country'] }">
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
                <button v-show="! loading" class="btn btn-warning text-center"><i class="fa fa-floppy-o"></i>&nbsp; Save</button>
                <button v-show="loading" class="btn btn-warning text-center" disabled><i class="fa fa-spinner fa-spin"></i>&nbsp; Saving</button>
            </div>
        </div>
        </form>

        <br>
    </div>
@endsection

@push('scripts')
@endpush
