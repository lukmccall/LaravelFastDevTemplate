@extends('layout.main')

@section('page')
    @component('component.ui.top', ["players"=>getTopPlayersFromRecords($page->data->records)])
        @slot('name')
            name
        @endslot
        @slot('points')
            points
        @endslot
        @slot('auth')
            auth
        @endslot
    @endcomponent

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    @component('component.shavit.records', ["records"=>$page->data->records])
                    @endcomponent
                </div>
            </div>
        </div>
    </div>
@endsection