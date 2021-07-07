@if (!Auth::guest())
<li>
    <a href="#"><span class="title">{{Auth::user()->name}}</span></a>
    <!-- Level Two-->
    <ul>
        <li><a href="page-author-single.html">Profile</a></li>
        <li><a href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
        </li>
    </ul>
</li>
@else
<li class="list-inline-item list_s"><a href="{{route('login')}}" class="btn flaticon-avatar"> <span
            class="dn-1200">Login/Sign Up</span></a></li>
@endif
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
