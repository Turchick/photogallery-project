<div class="top-bar">
	<div class="row">
		<div class="top-bar-left">
			<ul class="menu">
				<li><a href="/">Домашняя страница</a></li>

                <!-- Authentication Links -->
                @guest
                    <li><a href="{{ route('login') }}">Войти</a></li>
                    <li><a href="{{ route('register') }}">Регистрация</a></li>
                @else
				    <li><a href="/albums/create">Создать альбом</a></li>
                    <li>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            Выйти
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                @endguest
            </ul>
		</div>
	</div>
</div>