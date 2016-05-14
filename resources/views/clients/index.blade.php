@extends('layouts.app')

@section('content')
    <div class="container">
        @include('layouts.breadcrumb', [
            'breadcrumbs' => [
                [
                    'title' => 'Client',
                    'active'    => true,
                ],
            ]
        ])
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">Organization</div>

                    <div class="panel-body">
                        You are logged in!
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
