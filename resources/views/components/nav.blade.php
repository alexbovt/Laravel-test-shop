<nav class="nav navbar navbar-default">
    <div class="container-fluid top-nav">
        <div class="col-md-2 pull-left nav-icon">
            <a href="/"><img src="/images/logo.png" height="90px" width="140px"></a>
        </div>
        <div class="col-md-6 pull-left nav-pages">
            @php
                $url = url()->current();
                $cleanUrl = preg_replace('/(http:\\/\\/|https:\\/\\/)/', '', $url, 1);
                $links = explode('/',$cleanUrl);
            @endphp
            @foreach($links as $link)
                @if($link === 'store.local')
                    <a href="/">
                        Home
                    </a>
                @elseif($link != 'categories')
                    <a href="/categories/{{$link}}">
                        {{ucfirst($link)}}
                    </a>
                @endif
            @endforeach
        </div>
        <div class="col-md-4 ">
            <ul class="nav navbar-nav pull-right nav-sign">
                <li>
                    <a href="/">Sign in <span class="glyphicon glyphicon-log-in"></span></a>
                </li>
                <li><a href="/registration">Registration <span class="glyphicon glyphicon-list-alt"></span></a></li>
            </ul>
        </div>
    </div>
    <div class="container-fluid bottom-nav">
        <div class="col-md-8">
            <form class="navbar-form ">
                <div class="input-group">
                    <input type="text" class="form-control input-search" placeholder="Search">
                    <div class="input-group-btn">
                        <button class="btn btn-default button-search" type="submit">
                            <i class="fa fa-search "></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-4">
            <ul class="nav navbar-nav pull-right nav-cart">
                <li><a href="/">Empty shopping cart <span class="glyphicon glyphicon-shopping-cart"></span></a>
                </li>
            </ul>
        </div>
    </div>
</nav>