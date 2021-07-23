<header>
    <nav class="relative bg-purple-600 md:text-lg md:h-18 p-3">
        <div class="justify-around sm:flex mx-4 font-extrabold text-xl">
            <a href="{{ route('home') }}" class="sm:mx-1"><img class="h-14 m-auto rounded-full" src="/images/FeriaLogoGeel.png" alt="logo"></a>
            <a href="{{ route('home') }}" class="text-yellow-200 text-center block mx-1 my-auto hover:text-yellow-300 @if (request()->routeIs('home')) text-yellow-300 @endif">{{ __('Home') }}</a>
            <a href="{{ route('about') }}" class="text-yellow-200 text-center block mx-1 my-auto hover:text-yellow-300 @if (request()->routeIs('about')) text-yellow-300 @endif">{{ __('About Us') }}</a>
            <a href="{{ route('events') }}" class="text-yellow-200 text-center block mx-1 my-auto hover:text-yellow-300 @if (request()->routeIs('events')) text-yellow-300 @endif">{{ __('Events') }}</a>
            <a href="{{ route('gallery') }}" class="text-yellow-200 text-center block mx-1 my-auto hover:text-yellow-300 @if (request()->routeIs('gallery')) text-yellow-300 @endif">{{ __('Gallery') }}</a>
            <a href="{{ route('articles') }}" class="text-yellow-200 text-center block mx-1 my-auto hover:text-yellow-300 @if (request()->routeIs('articles')) text-yellow-300 @endif">{{ __('Articles') }}</a>
            <a href="{{ route('guestbook') }}" class="text-yellow-200 text-center block mx-1 my-auto hover:text-yellow-300 @if (request()->routeIs('guestbook')) text-yellow-300 @endif">{{ __('Guestbook') }}</a>
            <a href="{{ route('contact') }}" class="text-yellow-200 text-center block mx-1 my-auto hover:text-yellow-300 @if (request()->routeIs('contact')) text-yellow-300 @endif">{{ __('Contact') }}</a>
            @if (Route::has('login'))@auth
            <a href="{{ route('backoffice.index') }}" class="text-purple-600 text-center block my-auto hover:text-yellow-300 @if (request()->routeIs('backoffice.index')) text-yellow-300 @endif">{{ __('Backoffice') }}</a>
            @endauth
            @endif
            @if(count(config('app.languages')) > 1 )
            <div class="relative flex justify-center my-auto">
                <div>
                    <button type="button" onclick="myFunction()" class="dropbtn rounded-md border border-gray-300 shadow-sm px-3 py-2 bg-purple-600 text-sm font-medium text-yellow-300 hover:bg-yellow-100 focus:outline-none focus:ring-2 focus:ring-offset-gray-100" id="menu-button" aria-expanded="true" aria-haspopup="true">
                        {{ strtoupper(app()->getLocale()) }}
                    </button>
                </div>
                <div id="myDropdown" class="dropdown-content invisible origin-top-right absolute z-10 mt-12 rounded-md shadow-lg bg-yellow-300 ring-1  ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                    <div class="py-1" role="none">
                        <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-300" -->
                        @foreach(config('app.languages') as $langLocale => $langName)
                        <a href="{{ route('lang.switch', $langLocale) }}" class="text-purple-600 block px-3 py-2 text-sm hover:bg-yellow-100" role="menuitem" tabindex="-1" id="menu-item-0">
                            {{ strtoupper($langLocale) }}
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
            @endif
        </div>
    </nav>
</header>
<script>
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("invisible");
    }
    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdown = document.getElementById("myDropdown");
            if (!dropdown.classList.contains("invisible")) {
                dropdown.classList.toggle("invisible");
            }
        }
    }
</script>