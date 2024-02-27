<nav>
<a href="/" class="{{ $current_page == 'home' ? 'highlighted' : '' }}">Home</a>
<a href="/about-us" class="{{ $current_page == 'about-us' ? 'highlighted' : '' }}">About us</a>
@auth
<form action="{{ route('logout') }}" method="post">
    @csrf
    <button>logout</button>
</form>
@else
<a href="/register" class="{{ $current_page == 'register' ? 'highlighted' : '' }}">Register</a>
<a href="/login" class="{{ $current_page == 'login' ? 'highlighted' : '' }}">Login</a>
@endauth
</nav>