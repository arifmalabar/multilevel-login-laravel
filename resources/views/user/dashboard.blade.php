<h1>Welcome back {{ auth()->user()->name }}</h1>
<p>Anda di sesi user</p>
<a href="{{ url('/logout') }}">Logout</a>