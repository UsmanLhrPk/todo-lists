<nav class="top-0 left-0 z-20 w-full bg-violet-50">
    <div class="flex flex-wrap items-center justify-between max-w-screen-xl p-4 mx-auto">
    <a href="{{ route('root') }}" class="flex items-center">
        <img src="{{ Storage::url('/images/common/logo.jpeg') }}" class="h-8 mr-3" alt="ToDo List Logo">
        <span class="self-center text-2xl font-semibold whitespace-nowrap">ToDo Lists</span>
    </a>
    <div class="flex md:order-2">
        @auth
        <form method="POST" action="{{ route('session.destroy') }}">
            @method('DELETE')
            @csrf

            <button type="submit" class="px-4 py-2 mr-3 text-sm font-medium text-center text-white rounded-lg bg-violet-700 hover:bg-violet-800 focus:ring-4 focus:outline-none focus:ring-violet-300 md:mr-0 ">Log out</button>
        </form>
        @endauth

        <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center justify-center w-10 h-10 p-2 text-sm rounded-lg text-violet-500 md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 " aria-controls="navbar-sticky" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
    </div>
    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
    <ul class="flex flex-col p-4 mt-4 font-medium rounded-lg md:p-0 md:flex-row md:space-x-8 md:mt-0 ">
        <li>
        <a href="#" class="block py-2 pl-3 pr-4 text-white rounded bg-violet-700 md:bg-transparent md:text-violet-700 md:p-0 md:dark:text-violet-500" aria-current="page">Home</a>
        </li>
        <li>
        <a href="#" class="block py-2 pl-3 pr-4 rounded text-violet-900 md:hover:bg-transparent md:hover:text-violet-700 md:p-0 md:dark:hover:text-violet-500">About</a>
        </li>
        <li>
        <a href="#" class="block py-2 pl-3 pr-4 rounded text-violet-900 md:hover:bg-transparent md:hover:text-violet-700 md:p-0 md:dark:hover:text-violet-500">Services</a>
        </li>
        <li>
        <a href="#" class="block py-2 pl-3 pr-4 rounded text-violet-900 md:hover:bg-transparent md:hover:text-violet-700 md:p-0 md:dark:hover:text-violet-500">Contact</a>
        </li>
    </ul>
    </div>
    </div>
</nav>
