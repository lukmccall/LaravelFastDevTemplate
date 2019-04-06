@extends('layout.main')

@section('page')
    <div class="row">
        <div class="col-md-6 col-sm-6">
            <a href="{{getRoute('dr1')}}">
                <div class="card card-stats">
                    <div class="card-header card-header-primary card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">computer</i>
                        </div>
                        <p class="card-category">Serwer</p>
                        <h3 class="card-title">Deathrun 1</h3>
                    </div>
                    <div class="card-footer"></div>
                </div>
            </a>
        </div>

        <div class="col-md-6 col-sm-6">
            <a href="{{getRoute('dr2')}}">
                <div class="card card-stats">
                    <div class="card-header card-header-info card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">computer</i>
                        </div>
                        <p class="card-category">Serwer</p>
                        <h3 class="card-title">Deathrun 2</h3>
                    </div>
                    <div class="card-footer"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-sm-6">
            <a href="{{getRoute('dr3')}}">
                <div class="card card-stats">
                    <div class="card-header card-header-success card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">computer</i>
                        </div>
                        <p class="card-category">Serwer</p>
                        <h3 class="card-title">Deathrun 3</h3>
                    </div>
                    <div class="card-footer"></div>
                </div>
            </a>
        </div>

        <div class="col-md-6 col-sm-6">
            <a href="{{getRoute('dr4')}}">
                <div class="card card-stats">
                    <div class="card-header card-header-danger card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">computer</i>
                        </div>
                        <p class="card-category">Serwer</p>
                        <h3 class="card-title">Deathrun 4</h3>
                    </div>
                    <div class="card-footer"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-sm-6">
            <a href="{{getRoute('dr5')}}">
                <div class="card card-stats">
                    <div class="card-header card-header-warning card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">computer</i>
                        </div>
                        <p class="card-category">Serwer</p>
                        <h3 class="card-title">Deathrun 5</h3>
                    </div>
                    <div class="card-footer"></div>
                </div>
            </a>
        </div>

        <div class="col-md-6 col-sm-6">
            <a href="{{getRoute('drclass')}}">
                <div class="card card-stats">
                    <div class="card-header card-header-default card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">computer</i>
                        </div>
                        <p class="card-category">Serwer</p>
                        <h3 class="card-title">Deathrun Klasy</h3>
                    </div>
                    <div class="card-footer"></div>
                </div>
            </a>
        </div>
    </div>
@endsection