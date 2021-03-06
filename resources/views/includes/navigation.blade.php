<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand noPadding" href="{{ route('dashboard.index') }}"><img src="/img/logo2.png" id="logo" /></a>
    </div>

      <form class="navbar-form navbar-left" role="search" action="{{ route('profile.displaySearchResults') }}" method="GET">
        <div class="form-group" id="autocompleteInput">
          <input type="text" class="form-control" placeholder="Search" id="userSearch" name="search_string" />
        </div>
        <button type="submit" class="btn btn-default"> <i class="fa fa-search"></i></button>
      </form>
        <ul class="nav navbar-nav navbar-right">
                  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-users fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts friendRequests">
                      @if( $numberOfRequests )
                        @foreach( $friendRequests as $request )
                            <li id="request{{ $request->id }}">
                                  <div>
                                      <img src="/img/avatars/{{ $request->avatar }}" class="avatar-icon avatar-icon-s" /> 
                                      <a href="{{ route('profile.show', array('id' => $request->id) ) }}">{{ $request->name }} </a>
                                      <div class="right">
                                        <button class="btn btn-primary acceptFriend" data-param="{{ $request->id }}"> Accept</button>
                                        <button class="btn btn-danger refuseFriend" data-param="{{ $request->id }}"> Refuse</button>
                                      </div>
                                  </div>
                            </li>
                        @endforeach
                      @else
                      <p> No friends requests</p>
                      @endif
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle navbarTopText" data-toggle="dropdown" role="button" aria-expanded="false"> <img src="/img/avatars/{{ $avatar }}" class="avatar-icon avatar-icon-xs" />  {{ $name }} <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ route('profile.index') }}"><i class="fa fa-fw fa-user"></i> Profile</a></li>
                        <li><a href="{{ route('logout.get') }}"><i class="fa fa-fw fa-power-off"></i> Logout</a></li>
                    </ul>
                </li>

        </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>