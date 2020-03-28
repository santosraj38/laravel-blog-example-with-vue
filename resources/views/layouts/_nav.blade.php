<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link @if(Request::url()==route('roles.index')) active @endif" href="{{route('roles.index')}}" >Roles</a></li>
<li class="nav-item"><a class="nav-link @if(Request::url()==route('categories.index')) active @endif" href="{{route('categories.index')}}" >Categories</a></li>
<li class="nav-item"><a class="nav-link @if(Request::url()==route('posts.index')) active @endif" href="{{route('posts.index')}}" >Posts</a></li>
<li class="nav-item"><a class="nav-link @if(Request::url()==route('comments.index')) active @endif" href="{{route('comments.index')}}" >Comments</a></li>
<li class="nav-item"><a class="nav-link @if(Request::url()==route('likes.index')) active @endif" href="{{route('likes.index')}}" >Likes</a></li>
<li class="nav-item"><a class="nav-link @if(Request::url()==route('ratings.index')) active @endif" href="{{route('ratings.index')}}" >Ratings</a></li>
<li class="nav-item"><a class="nav-link @if(Request::url()==route('tags.index')) active @endif" href="{{route('tags.index')}}" >Tags</a></li>

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    <li class="nav-item">
                        @if (Route::has('register'))
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>


                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{route('roles.create')}}">Add Role</a>
<a class="dropdown-item" href="{{route('categories.create')}}">Add Category</a>
<a class="dropdown-item" href="{{route('posts.create')}}">Add Post</a>
<a class="dropdown-item" href="{{route('comments.create')}}">Add Comment</a>
<a class="dropdown-item" href="{{route('likes.create')}}">Add Like</a>
<a class="dropdown-item" href="{{route('ratings.create')}}">Add Rating</a>
<a class="dropdown-item" href="{{route('tags.create')}}">Add Tag</a>

                          
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
