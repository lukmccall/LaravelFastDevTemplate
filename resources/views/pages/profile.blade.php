@extends('layout.main')

@section('page')
    @component('component.steam.profile')
        @slot('avatar')
            {{$page->profile->avatarFullUrl}}
        @endslot
        @slot('name')
            {{$page->profile->personaName}}
        @endslot
        @slot('state')
            {{$page->profile->personaState}}
        @endslot
        @slot('profile')
            {{$page->profile->profileUrl}}
        @endslot
        @if($page->profile->realName != null)
            @slot('realName')
                {{$page->profile->realName}}
            @endslot
        @endif
    @endcomponent
{{--    {{dd($page->data)}}--}}
    @if( !empty($page->data->{'dr1.records'}) || !empty($page->data->{'dr2.records'}) || !empty($page->data->{'dr3.records'}) || !empty($page->data->{'dr4.records'}) || !empty($page->data->{'dr5.records'}) || !empty($page->data->{'drclass.records'}))
    <div class="row">
        <div class="col">
            <div class="card card-nav-tabs records-tabs card-plain">
                <div class="card-header card-header-danger">
                    <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
                    <div class="nav-tabs-navigation">
                        <div class="nav-tabs-wrapper">
                            <ul class="nav nav-tabs" data-tabs="tabs">
                                @if(!empty($page->data->{'dr1.records'}))
                                    <li class="nav-item">
                                        <a class="nav-link" href="#dr1" data-toggle="tab">Deathrun 1</a>
                                    </li>
                                @endif
                                @if(!empty($page->data->{'dr2.records'}))
                                    <li class="nav-item">
                                        <a class="nav-link" href="#dr2" data-toggle="tab">Deathrun 2</a>
                                    </li>
                                @endif
                                @if(!empty($page->data->{'dr3.records'}))
                                    <li class="nav-item">
                                        <a class="nav-link" href="#dr3" data-toggle="tab">Deathrun 3</a>
                                    </li>
                                @endif
                                @if(!empty($page->data->{'dr4.records'}))
                                    <li class="nav-item">
                                        <a class="nav-link" href="#dr4" data-toggle="tab">Deathrun 4</a>
                                    </li>
                                @endif
                                @if(!empty($page->data->{'dr5.records'}))
                                    <li class="nav-item">
                                        <a class="nav-link" href="#dr5" data-toggle="tab">Deathrun 5</a>
                                    </li>
                                @endif
                                @if(!empty($page->data->{'drclass.records'}))
                                    <li class="nav-item">
                                        <a class="nav-link" href="#drclass" data-toggle="tab">Deathrun Klasy</a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div><div class="card-body ">
                    <div class="tab-content">
                        <div class="tab-pane active">
                            <h4>Wybierz serwer</h4>
                        </div>
                        @if(!empty($page->data->{'dr1.records'}))
                        <div class="tab-pane" id="dr1">
                            <h4>Punkty: {{ $page->data->{'dr1.points'} }}</h4>
                            @component('component.shavit.records', ["records"=>$page->data->{'dr1.records'}])
                                @slot('class')
                                    dr1records
                                @endslot
                                @slot('name')
                                    {{$page->profile->personaName}}
                                @endslot
                                @slot('styleFunction')
                                    getStyle
                                @endslot
                                @slot("hiddenName")@endslot
                            @endcomponent
                        </div>
                        @endif
                        @if(!empty($page->data->{'dr2.records'}))
                        <div class="tab-pane" id="dr2">
                            @component('component.shavit.records', ["records"=>$page->data->{'dr2.records'}])
                                @slot('class')
                                    dr2records
                                @endslot
                                @slot('name')
                                    {{$page->profile->personaName}}
                                @endslot
                                @slot("hiddenName")@endslot
                            @endcomponent
                        </div>
                        @endif
                        @if(!empty($page->data->{'dr3.records'}))
                        <div class="tab-pane" id="dr3">
                            @component('component.shavit.records', ["records"=>$page->data->{'dr3.records'}])
                                @slot('class')
                                    dr3records
                                @endslot
                                @slot('name')
                                    {{$page->profile->personaName}}
                                @endslot
                                @slot("hiddenName")@endslot
                            @endcomponent
                        </div>
                        @endif
                        @if(!empty($page->data->{'dr4.records'}))
                        <div class="tab-pane" id="dr4">
                            @component('component.shavit.records', ["records"=>$page->data->{'dr4.records'}])
                                @slot('class')
                                    dr4records
                                @endslot
                                @slot('name')
                                    {{$page->profile->personaName}}
                                @endslot
                                @slot("hiddenName")@endslot
                            @endcomponent
                        </div>
                        @endif
                        @if(!empty($page->data->{'dr5.records'}))
                        <div class="tab-pane" id="dr5">
                            @component('component.shavit.records', ["records"=>$page->data->{'dr5.records'}])
                                @slot('class')
                                    dr5records
                                @endslot
                                @slot('name')
                                    {{$page->profile->personaName}}
                                @endslot
                                @slot("hiddenName")@endslot
                            @endcomponent
                        </div>
                        @endif
                        @if(!empty($page->data->{'drclass.records'}))
                        <div class="tab-pane" id="drclass">
                            @component('component.shavit.records', ["records"=>$page->data->{'drclass.records'}])
                                @slot('class')
                                    drclassrecords
                                @endslot
                                @slot('name')
                                    {{$page->profile->personaName}}
                                @endslot
                                @slot("hiddenName")@endslot
                            @endcomponent
                        </div>
                        @endif
                    </div>
                </div>
            </div>


        </div>
    </div>
    @endif

@endsection