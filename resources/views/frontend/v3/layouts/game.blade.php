<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>
        @if (Route::is('home'))
            Новости Ингушетии - Газета "Сердало"
        @elseif (Route::is('posts.index'))
            Новости Ингушетии - Газета "Сердало"
        @elseif (Route::is('materials.index'))
            Новости Ингушетии - Газета "Сердало"
        @elseif (Route::is('post-single'))
            @isset($post)
                {{ $post->title }} — все новости Ингушетии в Газете "Сердало"
            @endisset
        @elseif (Route::is('material-single'))
            @isset($material)
                {{ $material->title }} — все новости Ингушетии в Газете "Сердало"
            @endisset
        @else
            Новости Ингушетии - Газета "Сердало"
        @endif
    </title>


    <meta name="robots" content="all">
    <meta property="og:locale" content="ru_RU">
    <meta property="og:title"
          content="{{isset($post) ? $post->title : (isset($material) ? $material->title : 'Газета Седало — Новости Ингушетии')}}">
    <meta property="og:description"
          content="{{ isset($post) ? $post->lead : (isset($material) ? $material->lead : 'Общенациональная газета «Сердало» - главное печатное издание Республики Ингушетия, предоставляющее читателям наиболее полную, оперативную, надежную и объективную информацию.') }}">
    <meta property="og:image"
          content="{{ isset($post) ? ($post->file->full_path ?? '') : (isset($material) ? ($material->file->full_path ?? '') : '') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="Сердало">
    <meta property="article:author"
          content="{{ isset($post) ? $post->author->name : (isset($material) ? $material->author->title : '') }}">
    <meta property="article:published_time"
          content="{{ isset($post) ? $post->published_at : (isset($material) ? $material->published_at : '') }}">
    <meta property="article:modified_time"
          content="{{ isset($post) ? $post->updated_at : (isset($material) ? $material->updated_at : '') }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:type"
          content="{{ isset($post) ? ($post->file->type ?? '') . '/' . ($post->file->extension ?? '') : (isset($material) ? ($material->file->type ?? '') . '/' . ($material->file->extension ?? '') : '') }}">
    <meta name="keywords"
          content="Республика Ингушетия, Махмуд-Али Калиматов, новости, новости Ингушетия, беркат, футбол Ингушетии, курс доллара, погода, Новости сегодня, переводчик, время намаза ингушетия">
    <meta name="description"
          content="{{ isset($post) ? $post->lead : (isset($material) ? $material->lead : 'Общенациональная газета «Сердало» - главное печатное издание Республики Ингушетия, предоставляющее читателям наиболее полную, оперативную, надежную и объективную информацию.') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    <link rel="stylesheet" href="{{asset('frontend/v3/assets/css/game.css')}}">

    <link rel="icon" type="image/png" sizes="32x32"
          href="{{ asset('frontend/v3/assets/media/base-v2/favicon-32x32.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <style type="text/tailwindcss">
        @layer utilities {
            .min-h-0.5 { min-height: 0.125rem; }
            .min-h-1 { min-height: 0.25rem; }
            .min-h-1.5 { min-height: 0.375rem; }
            .min-h-2 { min-height: 0.5rem; }
            .min-h-2.5 { min-height: 0.625rem; }
            .min-h-3 { min-height: 0.75rem; }
            .min-h-3.5 { min-height: 0.875rem; }
            .min-h-4 { min-height: 1rem; }
            .min-h-5 { min-height: 1.25rem; }
            .min-h-6 { min-height: 1.5rem; }
            .min-h-7 { min-height: 1.75rem; }
            .min-h-8 { min-height: 2rem; }
            .min-h-9 { min-height: 2.25rem; }
            .min-h-10 { min-height: 2.5rem; }
            .min-h-11 { min-height: 2.75rem; }
            .min-h-12 { min-height: 3rem; }
            .min-h-14 { min-height: 3.5rem; }
            .min-h-16 { min-height: 4rem; }
            .min-h-20 { min-height: 5rem; }
            .min-h-24 { min-height: 6rem; }
            .min-h-28 { min-height: 7rem; }
            .min-h-32 { min-height: 8rem; }
            .min-h-36 { min-height: 9rem; }
            .min-h-40 { min-height: 10rem; }
            .min-h-44 { min-height: 11rem; }
            .min-h-48 { min-height: 12rem; }
            .min-h-52 { min-height: 13rem; }
            .min-h-56 { min-height: 14rem; }
            .min-h-60 { min-height: 15rem; }
            .min-h-64 { min-height: 16rem; }
            .min-h-72 { min-height: 18rem; }
            .min-h-80 { min-height: 20rem; }
            .min-h-96 { min-height: 24rem; }
            .min-h-1\/2 { min-height: 50%; }

            .cm-aspect-16\/9 {
                aspect-ratio: 16/9;
            }
            .cm-aspect-9\/16 {
                aspect-ratio: 9/16;
            }
            .cm-aspect-4\/3 {
                aspect-ratio: 4/3;
            }
            .cm-aspect-3\/4 {
                aspect-ratio: 3/4;
            }
            .cm-aspect-1\/1 {
                aspect-ratio: 1/1;
            }
            .cm-aspect-2\/1 {
                aspect-ratio: 2/1;
            }
            .cm-aspect-1\/2 {
                aspect-ratio: 1/2;
            }
            .cm-aspect-pdf {
                aspect-ratio: 2.8/4;
            }
            :root {
                --color-1: #ffffff;
                --color-2: #000000;
                --color-3: #E9E9E9;
                --color-4: #5B5B5B;
                --color-5: #939292;
                --color-6: #F5F5F5;
                --color-7: #006633;
                --color-8: #D3D3D3;
                --color-9: #7F7F7F;
                --color-1-25: #ffffff40;
                --color-1-50: #ffffff80;
                --color-1-75: #ffffffbf;
                --color-2-25: #00000040;
                --color-2-50: #00000080;
                --color-2-75: #000000bf;
            }
            .bg-1 { background-color: var(--color-1); }
            .color-1 { color: var(--color-1); }
            .border-color-1  { border-color: var(--color-1); }

            .bg-2 { background-color: var(--color-2); }
            .color-2 { color: var(--color-2); }
            .border-color-2  { border-color: var(--color-2); }

            .bg-3 { background-color: var(--color-3); }
            .color-3 { color: var(--color-3); }
            .border-color-3  { border-color: var(--color-3); }

            .bg-4 { background-color: var(--color-4); }
            .color-4 { color: var(--color-4); }
            .border-color-4  { border-color: var(--color-4); }

            .bg-5 { background-color: var(--color-5); }
            .color-5 { color: var(--color-5); }
            .border-color-5  { border-color: var(--color-5); }

            .bg-6 { background-color: var(--color-6); }
            .color-6 { color: var(--color-6); }
            .border-color-6  { border-color: var(--color-6); }

            .bg-7 { background-color: var(--color-7); }
            .color-7 { color: var(--color-7); }
            .border-color-7  { border-color: var(--color-7); }

            .bg-8 { background-color: var(--color-8); }
            .color-8 { color: var(--color-8); }
            .border-color-8  { border-color: var(--color-8); }

            .bg-9 { background-color: var(--color-9); }
            .color-9 { color: var(--color-9); }
            .border-color-9  { border-color: var(--color-9); }


            .bg-1\/25 { background-color: var(--color-1-25); }
            .color-1\/25 { color: var(--color-1-25); }
            .border-color-1\/25  { border-color: var(--color-1-25); }

            .bg-1\/50 { background-color: var(--color-1-50); }
            .color-1\/50 { color: var(--color-1-50); }
            .border-color-1\/50  { border-color: var(--color-1-50); }

            .bg-1\/75 { background-color: var(--color-1-75); }
            .color-1\/75 { color: var(--color-1-75); }
            .border-color-1\/75  { border-color: var(--color-1-75); }

            .bg-2\/25 { background-color: var(--color-2-25); }
            .color-2\/25 { color: var(--color-2-25); }
            .border-color-2\/25  { border-color: var(--color-2-25); }

            .bg-2\/50 { background-color: var(--color-2-50); }
            .color-2\/50 { color: var(--color-2-50); }
            .border-color-2\/50  { border-color: var(--color-2-50); }

            .bg-2\/75 { background-color: var(--color-2-75); }
            .color-2\/75 { color: var(--color-2-75); }
            .border-color-2\/75  { border-color: var(--color-2-75); }
        }
    </style>
    <style type="text/tailwindcss">
        @layer components {
            .cm-pagination-link {
                @apply relative inline-flex items-center px-5 py-2.5 -ml-px text-base font-medium color-2 bg-1 border border-color-8 leading-5;
            }
            .cm-pagination-link--effects {
                @apply hover:text-gray-400 focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150;
            }
            .cm-pagination-m-link {
                @apply relative inline-flex items-center px-5 py-2.5 text-base font-medium color-2 bg-1 border border-color-8 cursor-default leading-5;
            }
            .cm-pagination-m-link--effects {
                @apply hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150;
            }
            .cm-pagination-link-disabled {
                @apply opacity-50;
            }
            .cm-article-date {
                @apply text-xs font-medium leading-none color-5;
            }
            .cm-article-title {
                @apply mb-2.5 text-lg font-semibold leading-snug color-7;
            }
            .cm-article-subtitle {
                @apply  font-medium leading-normal;
                font-size: 13px;
            }

            @media(max-width: 480px) {

                .slides-container {
                    height: unset;
                }
                .news-date-mobile {
                    margin-top: 10px;
                }

                .cm-article-subtitle {
                    font-size: 15px;
                }

                .cm-single-description  {
                    font-size: 15px;
                }

            }
        }
    </style>
    <!--<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">-->
    <style>
        @font-face {
            font-family: 'Inter';
            src: url('{{ asset("frontend/v3/assets/fonts/Inter/static/Inter-Regular.ttf") }}');
            font-weight: 400;
            font-style: normal;
        }
        @font-face {
            font-family: 'Inter';
            src: url('{{ asset("frontend/v3/assets/fonts/Inter/static/Inter-Medium.ttf") }}');
            font-weight: 500;
            font-style: normal;
        }
        @font-face {
            font-family: 'Inter';
            src: url('{{ asset("frontend/v3/assets/fonts/Inter/static/Inter-SemiBold.ttf") }}');
            font-weight: 600;
            font-style: normal;
        }
        @font-face {
            font-family: 'Inter';
            src: url('{{ asset("frontend/v3/assets/fonts/Inter/static/Inter-Bold.ttf") }}');
            font-weight: 700;
            font-style: normal;
        }
        @font-face {
            font-family: 'Inter';
            src: url('{{ asset("frontend/v3/assets/fonts/Inter/static/Inter-ExtraBold.ttf") }}');
            font-weight: 800;
            font-style: normal;
        }
        @font-face {
            font-family: 'Inter';
            src: url('{{ asset("frontend/v3/assets/fonts/Inter/static/Inter-Black.ttf") }}');
            font-weight: 900;
            font-style: normal;
        }
    </style>

    <link rel="stylesheet" href="{{asset('frontend/css/other.css')}}">
    <script async src="https://cdn.ampproject.org/v0.js"></script>
</head>
<body>
<div class="page_wrapper flex flex-col">


    <div class="header_wrapper desktop_cik bg-1">

        <header class="flex flex-row justify-between items-start md:items-center gap-5 max-w-7xl mx-auto p-5">

        </header>

    </div>

    <div class="header_wrapper desktop_cik_mobile bg-1">

        <header class="flex flex-row justify-between items-start md:items-center gap-5 max-w-7xl mx-auto p-5">

        </header>

    </div>
    <!-- header -->
    <div class="header_wrapper bg-1">
        <header class="flex flex-row justify-between items-start md:items-center gap-5 max-w-7xl mx-auto p-5">
            <div class="header-left flex flex-wrap flex-1 items-center gap-2.5 md:gap-5">
                <div class="header-logo flex items-center">
                    <a href="{{route('home')}}">
                        <img src="{{ asset('frontend/v3/assets/media/base-v2/logo.svg') }}" alt="Сердало">
                    </a>
                </div>
                <div
                    class="header-lead flex flex-col self-start text-sm md:text-base font-semibold md:font-bold gap-2 color-5">
                    <h1 class="leading-none">{{ __('Общенациональная газета') }} <br> {{ __('Республики Ингушетия') }}
                    </h1>
                </div>
            </div>
            <div class="header-right flex flex-col sm:flex-row items-end sm:items-center gap-5">
                <div class="header-right-item hidden lg:flex items-center">
                    <nav class="header-nav">
                        <ul class="flex items-center font-semibold gap-2.5">
                            <li><a href="{{ route('posts-index') }}">{{ __('Новости') }}</a></li>
                            <li><a href="{{ route('materials-index') }}">{{ __('Статьи') }}</a></li>
                            <li><a href="{{ route('journalism-index') }}">{{ __('Публицистика') }}</a></li>

                        </ul>
                    </nav>
                </div>
                <div
                    class="header-right-item lang-buttons flex flex-col sm:flex-row order-2 sm:order-2 items-center gap-2.5">
                    <a
                        href="@if(App::getLocale() !== 'ru') {{ route('change-language', 'ru') }} @else # @endif"
                        class="cm-button cm-button-sm @if(App::getLocale() === 'ru') active @endif"
                    >{{ __('Рус') }}</a>
                    <a
                        href="@if(App::getLocale() !== 'inh') {{ route('change-language', 'inh') }} @else # @endif"
                        class="cm-button cm-button-sm @if(App::getLocale() === 'inh') active @endif"
                    >{{ __('Инг') }}</a>
                </div>
                <div class="header-right-item flex order-1 sm:order-3 items-center gap-2.5">

                    <div class="search-form">
                        <form action="{{ route('search-index') }}">
                            <input type="text" placeholder="Поиск по сайту" name="search"
                                   value="{{ request()->search ?? '' }}">
                            <button>Найти<img src="{{asset('images/strelka.svg')}}" alt="next"></button>
                        </form>
                    </div>

                    <button class="js--open-search hidden md:block" id="js--open-search">

                    </button>
                    <a href="#nav-burger" class="js--open-nav">
                        <img src="{{ asset('frontend/v3/assets/media/base-v2/burger-icon.svg') }}" alt="burger-icon">
                    </a>
                </div>
            </div>
        </header>
    </div>
    <!-- page content-->
    <div class="content_wrapper grow">
        <main class="max-w-7xl mx-auto py-5 px-1.5 sm:px-5">
            @if (session('status'))
                <div style="color: green;">{{ session('status') }}</div>
            @endif
            @if($errors->any())
                <ul style="color: red;">
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            @endif
            @yield('content')
        </main>
    </div>
    <!-- footer -->
    <div class="footer_wrapper bg-1">
        <footer class="">
            <div class="footer-top_wrapper bg-6">
                <div class="footer-top flex flex-col gap-5  py-5">
                    <div class="border-b border-color-8">
                        <div class="max-w-7xl mx-auto flex flex-col md:flex-row gap-5 justify-between pb-5 px-5">
                            <div>
                                <nav class="footer-nav flex flex-col gap-2.5 color-7 text-lg font-bold">
                                    <a href="{{route('about')}}">{{ __('Об издании') }}</a>
                                    <a href="{{route('material-rules')}}">{{ __('Правила использования материалов') }}</a>
                                    <a href="{{route('personal')}}">{{ __('Согласие на обработку персональных данных') }}</a>
                                </nav>
                            </div>
                            <div class="footer-social flex flex-row gap-5">
                                <a href="https://t.me/gserdalo"
                                   class="flex justify-center items-center w-10 h-10 bg-7 rounded-full" target="_blank">
                                    <img class="p-2.5 w-full h-full"
                                         src="{{ asset('frontend/v3/assets/media/base-v2/tg.svg') }}"
                                         alt="{{ __('Телеграм Сердало') }}">
                                </a>
                                <a href="https://vk.com/gserdalo"
                                   class="flex justify-center items-center w-10 h-10 bg-7 rounded-full" target="_blank">
                                    <img class="p-2.5 w-full h-full"
                                         src="{{ asset('frontend/v3/assets/media/base-v2/vk.svg') }}"
                                         alt="{{ __('Вконтакте Сердало') }}">
                                </a>
                                <a href="https://dzen.ru/id/61769dfd86f2571800496487"
                                   class="flex justify-center items-center w-10 h-10 bg-7 rounded-full" target="_blank">
                                    <img class="p-2.5 w-full h-full"
                                         src="{{ asset('frontend/v3/assets/media/base-v2/dzen.svg') }}"
                                         alt="{{ __('Яндекс Дзен Сердало') }}">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="max-w-7xl mx-auto px-5 flex flex-col md:flex-row gap-5 justify-between">
                            <div class="order-2 md:order-1 flex flex-col gap-5">
                                <div class="font-medium">
                                    <p>
                                        {{ __('Главный редактор: Курскиева Х.А.') }}
                                        <br>
                                        {{ __('386101, Республика Ингушетия, г. Назрань, тер. Центральный округ, пр. И. Базоркина, д. 60.') }}
                                    </p>
                                </div>
                                <div>
                                    <p><b><a href="8 (8734) 77-10-85">8 (8734) 77-10-85</a></b></p>
                                    <a href="info@serdalo.ru" class="color-7">{{ __('E-mail') }}: info@serdalo.ru</a>
                                </div>
                            </div>
                            <div class="order-1 md:order-2">
                                <div class="footer-logo flex flex-col justify-end h-full gap-2.5">
                                    <div class="flex md:justify-end">
                                        <div class="flex justify-center items-center w-7 h-7 rounded-full bg-5 ">
                                            <img class="p-1 w-full h-full"
                                                 src="{{ asset('frontend/v3/assets/media/base-v2/12+.svg') }}"
                                                 alt="12+">
                                        </div>
                                    </div>
                                    <div>
                                        <a href="{{route('home')}}">
                                            <img src="{{ asset('frontend/v3/assets/media/base-v2/footer-logo.svg') }}"
                                                 alt="Сердало логотип">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom_wrapper bg-1">
                <div class="footer-bottom max-w-7xl mx-auto p-5 color-9">
                    <div class="w-2/3 flex flex-col gap-5">
                        <p>
                            {{ __('Сетевое издание «Сердало» зарегистрировано Федеральной службой по надзору в сфере связи, информационных технологий и массовых коммуникаций (Роскомнадзор).') }}
                        </p>
                        <p>
                            Реестровая запись СМИ: ЭЛ № ФС 77-78323 от 15.05.2020 г. Учредитель: Государственное
                            автономное учреждение Республики Ингушетия «Общенациональная газета «Сердало»
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<!-- modal-nav -->
<div class="nav-modal-overlay js--nav-modal-overlay hidden fixed top-0 left-0 w-full h-full overflow-auto">
    <div class="nav-modal js--nav-modal mx-auto flex justify-end pointer-events-none max-w-7xl">
        <div class="nav-modal-content md:basis-1/2 max-h-full p-5 bg-1 pointer-events-auto sm:m-5">
            <div class="flex w-full mb-10">
                <div class="menu-input" style="width: 100%">
                    <form method="get" action="{{ route('search-index') }}"
                          class="basis-10/12 flex w-full h-10 justify-between border-2 border-color-3">
                        <input class="flex-1 w-full py-2 px-4 m-0.5" name="search" type="text"
                               placeholder="{{ __('Поиск по сайту') }}" value="{{ request()->search ?? '' }}">
                        <button class="cm-button cm-button-7 flex gap-1 items-center bg-1 color-2" type="submit">
                            {{ __('Поиск') }} <img class="h-3/4"
                                                   src="{{ asset('frontend/v3/assets/media/base-v2/strelka.svg') }}"
                                                   alt="поиск Сердало">
                        </button>
                    </form>
                </div>

                <div class="basis-2/12 flex w-full justify-end">
                    <a href="#search" class="js--close-nav flex justify-center items-center px-2.5">
                        <img src="{{ asset('frontend/v3/assets/media/base-v2/burger-close.svg') }}" alt="Закрыть">
                    </a>
                </div>
            </div>

            <div class="xl:pl-16">
                <div class="mb-2.5">
                    <nav class="modal-nav mb-5">
                        <ul class="columns-2 font-semibold">
                            <li class="mb-1.5 mobile-show-page"><a
                                    href="{{ route('posts-index') }}">{{ __('Новости') }}</a></li>
                            <li class="mb-1.5 mobile-show-page"><a
                                    href="{{ route('materials-index') }}">{{ __('Статьи') }}</a></li>
                            <li class="mb-1.5 mobile-show-page mobile-journalism"><a
                                    href="{{ route('journalism-index') }}">{{ __('Публицистика') }}</a></li>
                            @foreach($categories ?? [] as $category)
                                @if($category->title !== 'Пресс-релизы' && $category->title !== 'Публицистика')
                                    <li class="mb-1.5">
                                        <a href="{{ route('materials-index', $category->id) }}">
                                            @if(App::getLocale() !== 'ru')
                                                {{$category->tag_translate}}
                                            @else
                                                {{$category->title}}
                                            @endif
                                        </a>
                                    </li>
                                @endif
                            @endforeach
                            <li class="mb-1.5">
                                <a href="{{route('releases-index')}}">
                                    @if(App::getLocale() !== 'ru')
                                        Пресс-релизаш
                                    @else
                                        Пресс-релизы
                                    @endif
                                </a>
                            </li>
                            <li class="mb-1.5">
                                <a href="{{route('journalism-index')}}">
                                    {{ __('Публицистика') }}
                                </a>
                            </li>

                            @if(auth())
                                <li class="mb-1.5">
                                    <a href="{{route('games')}}">
                                        Игровой раздел
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </nav>
                </div>
                <div class="">
                    <nav class="modal-footer-nav mb-5 color-4">
                        <ul class="">
                            <li class="mb-1.5 mobile-hide-page"><a
                                    href="{{ route('posts-index') }}">{{ __('Новости') }}</a></li>
                            <li class="mb-1.5 mobile-hide-page"><a
                                    href="{{ route('materials-index') }}">{{ __('Статьи') }}</a></li>
                            <li class="mb-1.5"><a href="{{ route('documents-index') }}">{{ __('Документы') }}</a></li>
                            <li class="mb-1.5"><a href="{{route('videostudio')}}">{{ __('Видеостудия Сердало') }}</a>
                            </li>
                            <li class="mb-1.5"><a href="{{route('litSalon')}}">{{ __('Литературный салон') }}</a></li>
                            <li class="mb-1.5"><a href="#">{{ __('Музей') }}</a></li>
                            <li class="mb-1.5"><a href="{{route('dictionary')}}">{{ __('Словарь') }}</a></li>
                        </ul>
                    </nav>
                    <nav class="modal-footer-nav mb-5 color-4">
                        <ul class="">
                            <li class="mb-1.5"><a href="{{route('archive-index')}}">{{ __('Архив газеты') }}</a></li>
                            {{--                                    <li class="mb-1.5"><a href="{{route('subscribe-store')}}">{{ __('Подписка') }}</a></li>--}}
                        </ul>
                    </nav>
                    <nav class="modal-footer-nav color-4">
                        <ul class="">
                            <li class="mb-1.5"><a href="{{route('about')}}">{{ __('Об издании') }}</a></li>
                            <li class="mb-1.5"><a href="#">{{ __('Контакты') }}</a></li>
                            <!--<li class="mb-1.5"><a href="{{ route('change-version', 'v1') }}">v1</a></li>-->
                            <!--<li class="mb-1.5"><a style="background: green" href="#">v3</a></li>-->
                            @guest
                                <li class="mb-1.5"><a href="{{ route('login-page') }}">{{ __('Вход') }}</a></li>
                                <li class="mb-1.5"><a href="{{ route('register-page') }}">{{ __('Регистрация') }}</a>
                                </li>
                            @else
                                <li class="mb-1.5"><a href="#">{{ Auth::user()->name }}</a></li>
                                <li class="mb-1.5">
                                    <a href="#"
                                       onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Выйти') }}</a>
                                    <form id="logout-form" action="{{ route('logout-frontend') }}" method="POST"
                                          style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            @endguest
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- modal-video -->
<div
    class="video-modal-overlay js--video-modal-overlay hidden fixed top-0 left-0 w-full h-full max-h-screen overflow-auto">
    <div
        class="video-modal js--video-modal h-full sm:max-w-7xl mx-auto flex justify-center items-center pointer-events-none">
        <div
            class="video-modal-content js--video-modal-content md:basis-1/2 max-h-full sm:m-5 py-5 px-1.5 sm:px-5 bg-1 pointer-events-auto">
            <div class="flex w-full js--video-content-head">
                <div
                    class="basis-10/12 flex w-full justify-between items-center color-7 font-semibold js--video-title-container"></div>
                <div class="basis-2/12 flex w-full h-10 justify-end">
                    <a href="#" class="flex justify-center items-center px-2.5 bg-3 js--close-video-modal">
                        <img src="{{ asset('frontend/v3/assets/media/base-v2/burger-close.svg') }}"
                             alt="Закрыть меню Сердало">
                    </a>
                </div>
            </div>
            <div class="js--video-content-container"></div>
        </div>
    </div>
</div>

<div id="topNubex"><img src="{{asset('images/uparrowbutton_87886.svg')}}" width="30px" alt="Вверх"></div>


<script src="{{asset('frontend/v3/assets/js/game.js')}}"></script>
<script
    src="https://code.jquery.com/jquery-3.7.0.min.js"
    integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="
    crossorigin="anonymous"
></script>
<script type="text/javascript">

    const searchBtn = document.querySelector('.js--open-search '),
        searchInput = document.querySelector('.search-form'),
        headerMenu = document.querySelector('.header-nav'),
        langButtons = document.querySelector('.lang-buttons'),
        navSearchInput = document.querySelector('.js--open-nav')


    searchBtn.addEventListener("click", () => {


        searchInput.classList.toggle("show-form");

        if (searchInput.classList.contains("show-form")) {
            headerMenu.style.display = "none";
            langButtons.style.display = "none";

            searchBtn.style.background = "url('images/close.svg') no-repeat center";


        } else {
            headerMenu.style.display = "block";
            langButtons.style.display = "block";

            searchBtn.style.backgroundImage = "url('images/search.svg')";
        }

    });

    $(document).ready(function (e) {

        $(function () {
            $(window).scroll(function () {
                if ($(this).scrollTop() != 0) {
                    $('#topNubex').fadeIn();
                } else {
                    $('#topNubex').fadeOut();
                }
            });
            $('#topNubex').click(function () {
                $('body,html').animate({scrollTop: 0}, 700);
            });
        });

        console.log('ready');

        function cm_sidebar_height() {
            console.log($(window).width());
            console.log($('.cm-home-page'));
            if ($(window).width() >= 640 && $('.cm-home-page').length && $('.cm-home-page-right-col').length) {
                var padding = parseInt($('.cm-news_sidebar-wrapper').css('padding-bottom'));
                console.log('----');
                console.log(padding);
                console.log($('.cm-home-page').outerHeight(true));
                console.log($('.cm-news_sidebar-wrapper').outerHeight(true));
                console.log($('.cm-home-page-right-col').outerHeight(true));
                if (($('.cm-news_sidebar-wrapper').outerHeight(true) + padding) > $('.cm-home-page-right-col').outerHeight(true)) {
                    $('.cm-news_sidebar-wrapper').find('.cm-news_sidebar-item:not(.hidden)').last().addClass('hidden');
                    cm_sidebar_height();
                }
            }
        }

        cm_sidebar_height();
        $(window).on('resize', function (e) {
            cm_sidebar_height();
        });

        function cm_open_modal($modal) {
            $('body').addClass('overflow-auto');
            $modal.removeClass('hidden');
        }

        function cm_close_modal($modal) {
            $('body').removeClass('overflow-auto');
            $modal.addClass('hidden');
        }

        $('.js--open-nav').on('click', function (e) {
            e.preventDefault();
            cm_open_modal($('.js--nav-modal-overlay'));

        });
        $('.js--close-nav').on('click', function (e) {
            e.preventDefault();
            cm_close_modal($('.js--nav-modal-overlay'));
        });
        $('.js--nav-modal-overlay').on('click', function (e) {
            console.log(e.target);
            if ($(e.target).is($(this))) {
                e.preventDefault();
                cm_close_modal($('.js--nav-modal-overlay'));
            }
        });
        $('.js--subscribe-form').on('submit', function (e) {
            //e.stopPropagation();
            e.preventDefault();

            var $form = $(this);

        });
        $('.js--open-video-modal').on('click', function (e) {
            e.preventDefault();
            var link = $(this).attr('data-link');
            var src = $(this).attr('data-src');
            var title = $(this).attr('data-title');
            var $content = $('.js--video-modal-content');

            $('.js--video-title-container').empty();
            if (link) {
                $('.js--video-title-container').append('<a href="' + link + '">' + title + '</a>');
            } else {
                $('.js--video-title-container').text(title);
            }
            $('.js--video-content-container').empty();
            $('.js--video-content-container').append(
                '<video '
                + 'class="w-full " '
                + 'controls="" '
                + 'autoplay="" '
                + 'name="media">'
                + '<source '
                + 'src="' + src + '" '
                + 'type="video/mp4">'
                + '</video>'
            );

            cm_open_modal($('.js--video-modal-overlay'));
            var window_h = $(window).height();
            var container_h = $content.outerHeight(true);
            var container_pt = parseInt($content.css('padding-top'));
            var container_pb = parseInt($content.css('padding-bottom'));
            var head_h = $('.js--video-content-head').outerHeight(true);
            var max_video_h = +window_h - +head_h - +container_pt - +container_pb;
            if (max_video_h && max_video_h > 0) {
                $('.js--video-content-container').find('video').css({'max-height': max_video_h});
            }
            console.log({
                'container_pt': container_pt,
                'container_pb': container_pb,
                'window_h': window_h,
                'container_h': container_h,
                'head_h': head_h,
                'max_video_h': max_video_h
            });
        });
        $('.js--close-video-modal').on('click', function (e) {
            e.preventDefault();
            cm_close_modal($('.js--video-modal-overlay'));
            $('.js--video-modal-overlay').addClass('hidden');
            $('.js--video-title-container').text('');
            $('.js--video-content-container').empty();
        });
        $('.js--video-modal-overlay').on('click', function (e) {
            if ($(e.target).is($(this))) {
                e.preventDefault();
                cm_close_modal($('.js--video-modal-overlay'));
                $('.js--video-modal-overlay').addClass('hidden');
                $('.js--video-title-container').text('');
                $('.js--video-content-container').empty();
            }
        });
    });

    const slidesContainer = document.querySelector(".slides-container");
    const slideWidth = slidesContainer.querySelector(".slide").clientWidth;
    const prevButton = document.querySelector(".prev");
    const nextButton = document.querySelector(".next");

    nextButton.addEventListener("click", () => {
        slidesContainer.scrollLeft += slideWidth;
    });

    prevButton.addEventListener("click", () => {
        slidesContainer.scrollLeft -= slideWidth;
    });


</script>
</body>
</html>
