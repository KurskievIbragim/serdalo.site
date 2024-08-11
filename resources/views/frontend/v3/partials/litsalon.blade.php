<!-- Литературный салон -->
{{--@if(count($litsalon_section_articles))--}}
{{--<div class="cm-section-6 py-5">--}}
{{--    @include('frontend.v3.partials.page_title', [--}}
{{--        'title' => __('Литературный салон'),--}}
{{--    ])--}}
{{--    <div class="grid grid-cols-12 gap-5">--}}
{{--        @foreach($litsalon_section_articles as $litsalon_section_article)--}}
{{--            <div class="cm-section-6-item lit-home-item col-span-12 md:col-span-6 lg:col-span-4 flex flex-row h-full bg-1 overflow-hidden">--}}
{{--                <div class="basis-1/2 w-full h-full">--}}
{{--                    @include('frontend.v3.partials.article_media', [--}}
{{--                        'model' => $litsalon_section_article,--}}
{{--                        'link' => '#',--}}
{{--                        'classes' => ' w-full cm-aspect-2/4 object-cover'--}}
{{--                    ])--}}
{{--                </div>--}}
{{--                <div class="basis-1/2 flex flex-col justify-between bg-7 p-5">--}}
{{--                    <div class="flex flex-col">--}}
{{--                        <a href="{{route('litSingle', $litsalon_section_article->id)}}" class="mb-2.5 text-xl md:text-base xl:text-lg color-1 font-semibold">{{ $litsalon_section_article->title }}</a>--}}
{{--                    </div>--}}
{{--                    <div class="">--}}
{{--                        <span class="block mb-2.5 color-1">{{ $litsalon_section_article->subtitle }}</span>--}}
{{--                        <span class="cm-article-date color-5">{{ $litsalon_section_article->dates }}</span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        @endforeach--}}
{{--    </div>--}}
{{--</div>--}}
{{--@endif--}}
