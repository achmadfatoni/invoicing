@extends('layouts.app')

@section('content')
    <div class="container" id="organization">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
            @include('layouts.breadcrumb', [
                'breadcrumbs' => [
                    [
                        'title' => 'Client',
                        'active'    => true,
                    ],
                ]
            ])
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel-primary">
                    <div class="panel-heading">Clients</div>

                    <div class="panel-body">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>ID Number</th>
                                    <th>Website</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="client in clients">
                                    <td>@{{ $index + 1 }}</td>
                                    <td> @{{ client.name}} </td>
                                    <td> @{{ client.id_number }}</td>
                                    <td> @{{ client.website }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <br>
    </div>
@endsection

@push('scripts')
<script src="{{ asset('js/client.js') }}"></script>
@endpush

