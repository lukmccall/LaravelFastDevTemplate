<div class="wrapper__top">
    <div class="wrapper__top__header">
        <div class="b_logo"><img src="https://images.vexels.com/media/users/3/135313/isolated/lists/9c44517fa04da541c35888362bce2d1b-award-trophy-icon.png" width="40" alt=""/></div>
        <div class="b_caption">
            <p>Top 10</p>
        </div>
    </div>
    <div class="wrapper__top__content">
        <ul>
            @foreach($players as $p)
                <a href="{{getRoute('profile', $p->{$auth})}}" class="p-2">
                    <li>
                        <div class="graphic"><img src="{{getLowAwatar($p->{$auth})}}" alt=""/></div>
                        <div class="name"><span class="header">{{$p->{$name} }}</span><span class="stat">{{$p->{$points} }}</span></div>
                    </li>
                </a>
            @endforeach
        </ul>
    </div>
</div>