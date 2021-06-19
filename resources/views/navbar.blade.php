<div class="navbar-wrapper">
    <a class="navbar-brand" href="javascript:void(0)">Dashboard</a>
</div>
<button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation" data-target="#navigation-example">
    <span class="sr-only">Toggle navigation</span>
    <span class="navbar-toggler-icon icon-bar"></span>
    <span class="navbar-toggler-icon icon-bar"></span>
    <span class="navbar-toggler-icon icon-bar"></span>
</button>
<div class="collapse navbar-collapse justify-content-end">
    <form class="navbar-form">
        <div class="input-group no-border">
        <input type="text" value="" class="form-control" placeholder="Search...">
        <button type="submit" class="btn btn-default btn-round btn-just-icon">
            <i class="material-icons">search</i>
            <div class="ripple-container"></div>
        </button>
        </div>
    </form>
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="javascript:void(0)">
                <i class="material-icons">person</i>
                <p class="d-lg-none d-md-block">
                    {{ Auth::user()->name }}
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="material-icons">logout</i>
                <p class="d-lg-none d-md-block">
                    {{ __('Logout') }}
                </p>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
    </ul>
</div>