<ul class="nav">
    @foreach($page->navbarLinks as $link)

        <li class="nav-item @if(strpos($link['active'],$page->id)!==false) active @endif">
            <a class="nav-link" href="{{$link['url']}}">
                <i class="material-icons">{{$link['icon']}}</i>
                <p>{{$link['text']}}</p>
            </a>
        </li>
    @endforeach
</ul>