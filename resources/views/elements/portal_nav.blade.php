
<a href="{{ route('portal::home') }}"><h1 class="title">Business developer</h1></a>

<ul>
    <li><a href="#what">Что это?</a></li>
    <li><a href="#what_for">Зачем?</a></li>
    <li><a href="#how">Как?</a></li>
    <li><a href="#how_many">Сколько?</a></li>
</ul>

<div class="contacts">
    <div><span>Email: </span><a href="{!! 'email:saymon91@mail.ru' !!}">saymon91@mail.ru</a></div>
    <div><span>Phone: </span><a href="tel:+79103000170">+79103000170</a></div>
    <div>
        <a href="{{ route('login') }}" class="btn btn-success">LOGIN</a>
        <a href="{{ route('register') }}" class="btn btn-cancel">REGISTER</a>
    </div>
</div>