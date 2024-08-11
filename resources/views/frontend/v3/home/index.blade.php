@extends('frontend/v3/layouts/default')
@section('content')
    <div class="cm-home-page grid grid-cols-10 gap-5 h-fit">
        @if($material_sticky)
            @php
                $material_sticky_image_path = '';
                if($material_sticky->promote_with_file && $material_sticky->file) {
                    if($material_sticky->file->type === 'video' && $material_sticky->thumb) {
                        $material_sticky_image_path = $material_sticky->thumb->full_path;
                    } else {
                        $material_sticky_image_path = $material_sticky->file->full_preview_path;
                    }
                }
            @endphp
            <div class="sm:hidden col-span-10">
                <div class="flex h-full font-semibold">
                    <div class="relative w-full h-full">
                        @include('frontend.v3.partials.article_media', [
                            'model' => $material_sticky,
                            'link' => route('material-single', $material_sticky->slug),
                            'icon_align' => 'justify-center items-start',
                            'icon_size' => 'w-14 h-14 md:w-20 md:h-20',
                            'classes' => 'w-full cm-aspect-16/9 sm:cm-aspect-4/3 md:cm-aspect-16/9'
                        ])
                        <div class="absolute left-0 bottom-0 w-full h-full flex items-end pointer-events-none">
                            <div class="flex flex-col justify-end w-full min-h-1/2 p-5 color-1 cm-bd-gradient-1">
                                <a href="{{ route('material-single', $material_sticky->slug) }}"
                                   class="mb-2.5 text-3xl sm:text-lg md:text-2xl lg:text-3xl pointer-events-auto">
                                    <h3>
                                        {{ $material_sticky->subtitle_short }}
                                    </h3>
                                </a>
                                <h3
                                    class="cm-article-subtitle pointer-events-auto">{{ $material_sticky->title_short }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    @endif
    @include('frontend.v3.partials.news_sidebar', [
        'posts' => $posts_main,
    ])
    <!-- main block -->
        <div class="cm-home-page-right-col col-span-10 sm:col-span-7 lg:col-span-8 xl:col-span-8 h-fit">
            <!-- main news & materials -->
            <div class="grid grid-cols-2 gap-3.5">
                @if($material_sticky)
                    @php
                        $material_sticky_image_path = '';
                        if($material_sticky->promote_with_file && $material_sticky->file) {
                            if($material_sticky->file->type === 'video' && $material_sticky->thumb) {
                                $material_sticky_image_path = $material_sticky->thumb->full_path;
                            } else {
                                $material_sticky_image_path = $material_sticky->file->full_preview_path;
                            }
                        }
                    @endphp
                    <div class="hidden sm:block col-span-2 xl:col-span-1 row-span-2">
                        <div class="flex h-full font-semibold">
                            <div class="relative w-full h-full">
                                @include('frontend.v3.partials.article_media', [
                                    'model' => $material_sticky,
                                    'link' => route('material-single', $material_sticky->slug),
                                    'icon_align' => 'justify-center items-start',
                                    'icon_size' => 'w-14 h-14 md:w-20 md:h-20',
                                    'classes' => 'w-full cm-aspect-16/9 md:cm-aspect-16/9'
                                ])
                                <div class="absolute left-0 bottom-0 w-full h-full flex items-end pointer-events-none">
                                    <div
                                        class="flex flex-col justify-end w-full min-h-1/2 p-5 color-1 cm-bd-gradient-1">
                                        <a href="{{ route('material-single', $material_sticky->slug) }}"
                                           class="mb-2.5 text-base sm:text-3xl md:text-3xl lg:text-5xl pointer-events-auto">
                                            <h3>
                                                {{ $material_sticky->subtitle_short }}
                                            </h3>
                                        </a>
                                        <h3
                                            class="cm-article-subtitle pointer-events-auto">{{ $material_sticky->title_short }}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                @if(count($materials_main_left))
                    @foreach($materials_main_left as $material_main_left)
                        @include('frontend.v3.partials.material_main', [
                            'model' => $material_main_left,
                            'show_mobile' => ($loop->iteration > 1 && !($loop->iteration === 3 && $material_main_left->promote_with_file && $material_main_left->file)) ? false : true,
                            'show_file' => ($loop->iteration === 3 && $material_main_left->promote_with_file && $material_main_left->file) ? true : false
                        ])
                    @endforeach
                @endif
                @if(count($materials_main_right))
                    @foreach($materials_main_right as $material_main_right)
                        @include('frontend.v3.partials.material_main', [
                            'model' => $material_main_right,
                            'show_mobile' => ($loop->iteration > 1 && !($loop->iteration === 4 && $material_main_right->promote_with_file && $material_main_right->file)) ? false : true,
                            'show_file' => ($loop->iteration === 4 && $material_main_right->promote_with_file && $material_main_right->file) ? true : false
                        ])
                    @endforeach
                @endif
            </div>

        @include('frontend.v3.partials.subscribe_lead_1')

        @if(count($video_articles) || count($photo_articles))
            <!-- Видео & Фото -->
                <div class="cm-section-2 hidden xl:grid grid-cols-1 xl:grid-cols-2 gap-5 py-5">
                @if(count($video_articles))
                    <!-- Видео -->
                        <div class="cm-section-2-item cm-section-videos col-span-1 flex flex-col">
                            <div class="mb-5">
                                <span class="text-3xl font-black color-7">Видео</span>
                            </div>
                            <div class="h-full grid grid-cols-1 sm:grid-cols-2 gap-5">
                                @foreach($video_articles as $video_article)
                                    <div
                                        class="h-full cm-section-videos-item col-span-1 flex flex-col bg-1 overflow-hidden">
                                        @include('frontend.v3.partials.article_media', [
                                            'model' => $video_article,
                                            'link' => route('post-single', $video_article->slug),
                                            'icon_size' => 'w-20 h-20 sm:w-14 sm:h-14 lg:w-20 lg:h-20 xl:w-14 xl:h-14',
                                            'classes' => 'flex-1 cm-aspect-16/9 xl:cm-aspect-4/3'
                                        ])
                                        <div class="flex flex-col h-full justify-between p-5">
                                            <a href="{{ route('post-single', $video_article->slug) }}"
                                               class="cm-article-title">
                                                <h3>
                                                    {{ $video_article->title_short }}
                                                </h3>
                                            </a>
                                            @if(\Carbon\Carbon::parse($video_article->published_at)->isToday())
                                                <span class="cm-article-date">
                                                    {{ \Carbon\Carbon::parse($video_article->published_at)->format('H:i')}}
                                                </span>
                                            @else
                                                <span class="cm-article-date">
                                                     {{ \Carbon\Carbon::parse($video_article->published_at)->format('d.m.Y H:i')}}
                                                </span>
                                            @endif

                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="mt-5 more-media-link">
                                <a href="{{route('videoreportage')}}" class="border-b border-color-7 color-7">{{ __('Смотреть все видео') }}</a>
                            </div>
                        </div>
                @endif

                @if(count($photo_articles))
                    <!-- Фото -->
                        <div class="cm-section-2-item cm-section-photos col-span-1 flex flex-col">
                            <div class="mb-5">
                                <span class="text-3xl font-black color-7">Фото</span>
                            </div>
                            <div class="h-full grid grid-cols-1 sm:grid-cols-2 gap-5">

                                @foreach($photo_articles as $photo_article)

                                    <div
                                        class="h-full cm-section-photos-item col-span-1 flex flex-col bg-1 overflow-hidden">
                                        @include('frontend.v3.partials.article_media', [
                                            'model' => $photo_article,
                                            'link' => route('post-single', $photo_article->id),
                                            'icon_size' => 'w-20 h-20 sm:w-14 sm:h-14 lg:w-20 lg:h-20 xl:w-14 xl:h-14',
                                            'classes' => 'flex-1 cm-aspect-16/9 xl:cm-aspect-4/3'
                                        ])
                                        <div class="flex flex-col h-full justify-between p-5">
                                            <a href="{{ route('reportage-single', $photo_article->id) }}"
                                               class="cm-article-title">
                                                <h3>
                                                    {{ $photo_article->title }}
                                                </h3>
                                            </a>
                                            @if(\Carbon\Carbon::parse($photo_article->published_at)->isToday())
                                                <span class="cm-article-date">
                                                    {{ \Carbon\Carbon::parse($photo_article->published_at)->format('H:i')}}
                                                </span>
                                            @else
                                                <span class="cm-article-date">
                                                     {{ \Carbon\Carbon::parse($photo_article->published_at)->format('d.m.Y H:i')}}
                                                </span>
                                            @endif

                                        </div>
                                    </div>
                                @endforeach

                            </div>
                            <div class="mt-5  more-media-link">
                                <a href="{{route('reportages')}}" class="border-b border-color-7 color-7">{{ __('Смотреть все фото') }}</a>
                            </div>
                        </div>
                @endif
                </div>
            @endif
        </div>
    </div>
    @if(count($video_articles) || count($photo_articles))
        <!-- Видео & Фото -->
        <div class="cm-section-2 grid xl:hidden grid-cols-1 sm:grid-cols-3 gap-5 py-5">
        @if(count($video_articles))
            <!-- Видео -->
                <div class="cm-section-2-item cm-section-videos col-span-2 flex flex-col">
                    <div class="mb-5">
                                <span class="text-3xl font-black color-7">Видео</span>
                            </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        @foreach($video_articles as $video_article)
                            <div class="cm-section-videos-item col-span-1 flex flex-col bg-1 overflow-hidden">
                                @include('frontend.v3.partials.article_media', [
                                    'model' => $video_article,
                                    'link' => route('post-single', $video_article->slug),
                                    'icon_size' => 'w-20 h-20 sm:w-14 sm:h-14 lg:w-20 lg:h-20 xl:w-14 xl:h-14',
                                    'classes' => 'flex-1 cm-aspect-16/9 xl:cm-aspect-4/3'
                                ])
                                <div class="flex flex-col h-full justify-between p-5">
                                    <a href="{{ route('post-single', $video_article->slug) }}"
                                       class="cm-article-title">
                                        <h3>
                                            {{ $video_article->title_short }}
                                        </h3>
                                    </a>
                                    <span class="cm-article-date">{{ $video_article->display_created_at }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                                <div class="mt-5">
                                    <a href="{{route('videoreportage')}}" class="border-b border-color-7 color-7">{{ __('Смотреть все видео') }}</a>
                                </div>
                </div>
        @endif
        @if(count($photo_articles))
            <!-- Видео -->
                <div class="cm-section-2-item cm-section-photos col-span-1 flex flex-col">
                <div class="mb-5">
                                <span class="text-3xl font-black color-7">Фото</span>
                            </div>
                    <div class="grid grid-cols-1 gap-5">
                        @foreach($photo_articles as $photo_article)

                            <div class="cm-section-photos-item col-span-1 flex flex-col bg-1 overflow-hidden">
                                @include('frontend.v3.partials.photo_article', [
                                    'model' => $photo_article,
                                    'link' => route('reportage-single', $photo_article->id),
                                    'icon_size' => 'w-20 h-20 sm:w-14 sm:h-14 lg:w-20 lg:h-20 xl:w-14 xl:h-14',
                                    'classes' => 'flex-1 cm-aspect-16/9 xl:cm-aspect-4/3'
                                ])
                                <div class="flex flex-col h-full justify-between p-5">
                                    <a href="{{ route('reportage-single', $photo_article->id) }}"
                                       class="cm-article-title">
                                        <h3>
                                            {{ $photo_article->title }}
                                        </h3>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="mt-5 more-media-link">
                        <a href="{{route('reportages')}}" class="border-b border-color-7 color-7">{{ __('Смотреть все фото') }}</a>
                    </div>
                </div>
            @endif
        </div>
    @endif

    @if(count($journalism))
        <!-- Не пропустите -->
        <div class="cm-section-3 py-5">
        <div class="mb-5">
                                <span class="text-3xl font-black color-7">Публицистика</span>
                            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-5">
                @foreach($journalism as $item)
                    <div
                        class="cm-section-3-item anons-news col-span-1 row-span-2 flex flex-col h-full bg-1 overflow-hidden">
                        @include('frontend.v3.partials.article_media', [
                            'model' => $item,
                            'link' => route('material-single', $item->slug),
                            'classes' => 'flex-1 cm-aspect-16/9 xl:cm-aspect-4/3'
                        ])
                        <div class=" flex flex-col h-full justify-between p-5">
                            @if(App::getlocale() === 'ru')
                                <div class="flex flex-col mb-2.5">
                                    <a href="{{ route('material-single', $item->slug) }}"
                                       class="cm-article-title">{{ $item->subtitle_short }}</a>
                                    <span class="cm-article-subtitle">{{ $item->title_short }}</span>
                                </div>
                            @else
                                <div class="flex flex-col mb-2.5">
                                    <a href="{{ route('journalism-single', $item->slug) }}"
                                       class="cm-article-title">
                                        <h3>
                                            {{ $item->subtitle }}
                                        </h3>
                                    </a>
                                    <h3 class="cm-article-subtitle">{{ $item->title }}</h3>
                                </div>
                            @endif
                            <span class="cm-article-date">{{ \Carbon\Carbon::parse($item->published_at)->format('d.m.Y H:i')}}</span>

                        </div>
                    </div>
                @endforeach

            </div>
            <div class="mt-5 more-media-link flex justify-center">
                <a href="{{route('journalism-index')}}" class="border-b border-color-7 color-7">{{ __('Смотреть все') }}</a>
            </div>
        </div>
    @endif

    @include('frontend.v3.partials.subscribe_lead_2')

    @include('frontend.v3.partials.museum')

    @include('frontend.v3.partials.litsalon')
@endsection
