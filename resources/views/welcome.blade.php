@extends('layouts.app')

@section('title', 'Главная')
@section('content')
<main>

    <div class="leftmenu">
        <ul>
            <li class="active">
                Все
            </li>
            <li>
                Популярные
            </li>
            <li>
                Новые
            </li>
            <li>
                Моя библиотека
            </li>
        </ul>
    </div>

    <div class="content">
        @for ($x = 1; $x < 4; $x++) <div class="row">
            <div class="img">
                <div class="left-top">
                    <div class="metka green">
                        <i class="fa-solid fa-venus-mars"></i>
                    </div>
                </div>
                <div class="right-top">
                    <div class="metka green">
                        PG-13
                    </div>
                </div>
                <div class="left-bottom">
                    <div class="metka green">
                        <i class="fa-solid fa-check"></i>
                    </div>
                    <div class="metka yelow">
                        <i class="fa-solid fa-fire"></i>
                    </div>
                </div>
                <div class="right-bottom">
                    <div class="metka green">
                        <i class="fa-solid fa-thumbs-up"></i> 12
                    </div>
                </div>
                <img src="/images/test{{ $x }}.webp">
            </div>
            <div class="rowText">
                <h2>
                    The Architecture of Absence
                </h2>

                <p class="description">
                    Он родился с белыми крыльями. Так же, как и все. Все такими рождаются — чистыми, невинными,
                    непорочными. Дальше всё зависит от самого ангела.Вокруг неё был хаос, неумолимый, безжалостный, но
                    эта песня, простая и наивная, стала её последним якорем. Она пела и нажимала, пела и умоляла, чтобы
                    он вернулся, потому что без него не было смысла.
                </p>

                <span class="teg"><i class="fa-solid fa-user"></i> Сайлент Сайд</span>
                <span class="teg"><i class="fa-solid fa-heart"></i> Ориджиналы</span>
                <span class="teg"><i class="fa-sharp fa-solid fa-align-left"></i> 13 страниц, 2 879 слов, 1 часть</span>
                <span class="teg">Дата завершения: 23.04.2025</span>

                <div class="metki">
                    <span>Авторская пунктуация</span><span>Атмосферная зарисовка</span><span>Белый
                        стих</span><span>Атмосферная зарисовка</span><span>Белый
                        стих</span><span>Авторская пунктуация</span><span>Атмосферная зарисовка</span><span>Белый
                        стих</span>
                </div>

            </div>
    </div>
    @endfor
    </div>

    <div>
    </div>
    <div class="rightmenu">
        <div class="search">

            <div class="searchInput">
                <input type="text" placeholder="Поиск">
            </div>

            <h3>Жанры:</h3>
            <ul>
                <li>
                    Все
                </li>
                <li>
                    Популярные
                </li>
                <li>
                    Новые
                </li>
                <li>
                    Моя библиотека
                </li>
            </ul>
        </div>
    </div>

</main>






@endsection