
<ul class="flex flex-col px-4 bg-gray-800 md:flex-row">
    @if (auth())
        <li>
            <a href="/newStudentPage" class="block py-2 pr-4 pl-3">New student</a>
        </li>
        <li>
            <a href="/newQuestionPage" class="block py-2 pr-4 pl-3">New Question</a>
        </li>
        <li>
            <form action="/logout" method="POST">
                @csrf
            </form>
        </li>
    @else
        <li>
            <a href="/login" class="block py-2 pr-4 pl-3">Sign in</a>
        </li>
        <li>
            <a href="/signup" class="block py-2 pr-4 pl-3">Sign up</a>
        </li>
    @endif
</ul>