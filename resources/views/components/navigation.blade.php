<nav x-data="{open : false}" class="bg-gray-800 text-white border-gray-200 px-2 sm:px-4 py-2.5 fixed w-full z-20 top-0 left-0">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
        <a href="/">
            <span class="self-center text-xl font-semibold whitespace-nowrap">
                Student System {{$arr['title']}}
            </span>
        </a>
        <button @click="open = !open" data-collapse-toggle="navbar-main" class="md:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/></svg>
        </button>

        <div class="md:block md:w-auto" id="navbar-main" x-show="open">
            <x-navs />
        </div>
        <div class="hidden lg:block" id="navbar-main">
            <x-navs />
        </div>
    </div>
</nav>