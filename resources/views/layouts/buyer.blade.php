<h1>buyer blade php start</h1>
<p>{{ Auth::user()->name }}</p>
<form action="{{ route('logout') }}" method="post" class="inline">
    @csrf
    <button type="submit">Logout</button>
</form>
@yield('content')
<h1>buyer blade php end</h1>
