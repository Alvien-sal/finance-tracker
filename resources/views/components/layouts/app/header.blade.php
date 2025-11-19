@props(['user' => null])

<nav class="border-b h-16 w-screen flex flex-row p-4 justify-between">

    <div>
        Finance Tracker
    </div>

    @auth

    <h1>
        {{$user->name}}
    </h1>
    

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn btn-ghost btn-sm">Logout</button>
    </form>

    @endauth


</nav>