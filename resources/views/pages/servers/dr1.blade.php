@extends('layout.main')

@section('page')
    @component('component.ui.top', ["players"=>$page->data->topPlayers])
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
            <div class="card card-nav-tabs records-tabs card-plain">
                <div class="card-header card-header-danger">
                    <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
                    <div class="nav-tabs-navigation">
                        <div class="nav-tabs-wrapper__top">
                            <ul class="nav nav-tabs" data-tabs="tabs">
                                @for($i = 0; $i <= 13; $i++)
                                    <li class="nav-item">
                                        <a class="nav-link" href="#style-{{$i}}" data-toggle="tab">{{getStyle($i)}}</a>
                                    </li>
                                @endfor
                            </ul>
                        </div>
                    </div>
                </div><div class="card-body ">
                    <div class="tab-content">
                        <div class="tab-pane active">
                            <h4>Wybierz styl</h4>
                        </div>
                        @for($i = 0; $i <= 13; $i++)
                            <div class="tab-pane" id="style-{{$i}}">
                                @component('component.shavit.records', ["records"=>$page->data->{"recordsS".$i}])
                                    @slot('class')
                                        style{{$i}}
                                    @endslot
                                @endcomponent
                            </div>
                        @endfor
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection