    <header>
        <h1>BLog Cursos</h1>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
                <li><a href="{{ route('courses.index') }}"
                        class="{{ request()->routeIs('courses.*') ? 'active' : '' }}">Cursos</a></li>
                <li><a href="{{ route('ours') }}" class="{{ request()->routeIs('our') ? 'active' : '' }}">Nosostros</a>
                </li>
            </ul>
        </nav>
    </header>
