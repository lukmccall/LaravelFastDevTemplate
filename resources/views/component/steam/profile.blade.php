<div class="row">
    <div class="col">
        <div class="card card-stats card-steam-profile">
            <div class="card-header card-header-warning card-header-icon">
                <div class="card-icon">
                    <img src="{{$avatar}}" alt="">
                </div>
                <h3 class="card-title">
                    <span>{{$name}}</span>
                    <span class="float-right">{!! html_entity_decode($state) !!}</span>
                </h3>
                <p class="card-category">{{$realName or ""}}</p>
            </div>
            {{--<div class="card-footer">--}}
                {{--<div class="stats">--}}
                    {{--Status: {!! html_entity_decode($state) !!}--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
    </div>
</div>