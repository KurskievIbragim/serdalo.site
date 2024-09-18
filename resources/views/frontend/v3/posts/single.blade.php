@extends('frontend/v3/layouts/default')
@section('content')
<div class="cm-single-page grid grid-cols-10 gap-5 news-single">
    @include('frontend.v3.partials.news_sidebar', [
        'posts' => $posts_main,
    ])
    <!-- main block -->
    <div class="col-span-10 sm:col-span-7 lg:col-span-8 xl:col-span-8">
        <div class="cm-single-content container p-5 md:pr-10 lg:pr-20 bg-1">
            @if($post->tags ?? [])
                <div class="flex gap-2.5 mb-2.5">
                @foreach($post->tags ?? [] as $tag)
                    <a href="{{ route('posts.by.tag', $tag->title) }}" class="inline-block py-1 px-2.5 text-sm bg-3 rounded-full">
                        @if(App::getLocale() !== 'ru')
                            @if(isset( $tag->tag_translate ))
                                {{ $tag->tag_translate }}
                            @else
                                {{ $tag->title }}
                            @endif
                        @else
                            {{ $tag->title }}
                        @endif
                    </a>
                @endforeach
                </div>
            @endif
            <div class="mb-5">
                <h1 class="text-3xl font-black color-7">{{$post->title}}</h1>
            </div>
            <div class="flex flex-col sm:flex-row gap-2.5 sm:gap-5 mb-2.5">
                @if($post->author)
                    <div class="">
                        <a class="inline-block flex-none font-semibold color-7 border-b border-color-7" href="{{ route('authors-index', $post->author->id) }}">{{ $post->author->title }}</a>
                    </div>
                @endif

                @if($post->published_at)
                    <div class="">
                        <span class="color-4"> {{ \Carbon\Carbon::parse($post->published_at)->format('d.m.Y H:i')}}</span>
                    </div>
                    @endif
            </div>
            @if($post->file)
                <div class="cm-content-media mb-5">
                    @if($post->file->type === 'video')
                        <div class="">
                            <video class="w-full" controls="controls" preload="none" poster="{{$post->thumb->full_preview_path}}">
                                <source class="" src="{{ $post->file->full_path }}" />
                            </video>
                        </div>
                    @else
                        <div class="">
                            <img class="cm-aspect-4/3 lg:aspect-auto object-cover" src="{{ $post->file->full_preview_path }}" alt="{{$post->title}}">
                        </div>

                        @if(App::getLocale() == 'ru')
                            @if(isset($post->photo_title))
                                <div class="flex flex-row mt-4 justify-between">
                                    <div class="photo-author ">{{$post->photo_title}}</div>
                                    <div class="photo-description font-light">{{$post->photo_description}}</div>
                                </div>
                            @endif
                        @else
                            <div class="flex flex-row mt-4 justify-between">
                                <div class="photo-author ">{{$post->translation->image_tilte}}</div>
                                <div class="photo-description font-light">{{$post->translation->image_description}}</div>
                            </div>
                        @endif


                    @endif
                </div>
            @endif

                    <div class="single-text-center">
                        <div class="">
                            <p class="mb-10 text-base font-semibold">{{ $post->lead }}</p>
                        </div>

                        @if((App::getlocale() === 'ru'))
                            @if(!empty($post->comment))
                                <div class="post-expert-section flex ">
                                    @if($post->expert && $post->expert->file)
                                        <div class="expert-img">
                                            <img src="{{ $post->expert->file->full_preview_path }}" alt="">
                                        </div>
                                    @endif

                                    <div class="comment-body">

                                        @if($post->expert)
                                            <div class="expert-info">
                                                <p>{{$post->expert->title}}</p>
                                                <p>{!! $post->expert->description !!}</p>
                                            </div>
                                        @endif

                                        <div class="comment">
                                            <p>{{$post->comment}}</p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endif

                        <div class="cm-single-description text-base	">
                            {!! $post->description !!}
                        </div>
                    </div>


        </div>
    </div>
</div>

<div class="py-5">
    @include('frontend.v3.partials.subscribe_lead_2')
</div>

@endsection
