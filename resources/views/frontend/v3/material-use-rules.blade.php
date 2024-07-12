@extends('frontend/v3/layouts/default')
@section('content')
    <div class="cm-single-page grid grid-cols-12 gap-5">
        <!-- main block -->
        <div class="col-span-12">
            @include('frontend.v3.partials.page_title', [
                'title' => __('Правила использования материалов'),
            ])
            <div class="cm-single-content container md:pr-10 lg:pr-20">
                <div class="cm-single-description text-sm sm:text-base">
                    <p>Вся информация, размещенная на веб-сайте www.serdalo.ru (включая тексты, графические материалы,
                        видеоматериалы и иллюстрации/фотографии), охраняется в соответствии с законодательством РФ об
                        авторском праве и международными соглашениями.
                    </p>

                    <p>Исключительные права на фотоизображения с указанием любым образом на  сетевое издание «Сердало»
                        как владельца авторских прав («Сердало», «Газета Сердало», Издательский Дом «Сердало» и т.п.)
                        принадлежат ГАУ РИ «Издательский дом «Сердало». Полное или частичное воспроизведение
                        фотоизображений без разрешения правообладателя запрещается.
                    </p>
                    <h2 class="mt-5 text-xl font-semibold color-7">Использование материалов в рамках подпункта 3 пункта 1 статьи 1274 ГК РФ без разрешения «Сердало» запрещено.</h2>

                    <h2>
                        Использование материалов «Сердало» возможно на следующих условиях:
                    </h2>
                    <ul class="font-semibold">
                        <li><h2 class="color-7">Безвозмездно</h2>
                            в порядке цитирования на следующих условиях: объем использования — не более 30% оригинального
                            материала, без использования оригинальных иллюстраций, при условии гиперссылка на сайт
                            (оригинальный материал).;</li>
                        <li><h2 class="color-7">в иных случаях</h2> — с согласия ГАУ РИ «Издательский дом «Сердало». Согласие может быть предоставлено директором ГАУ РИ «Издательский дом «Сердало».
                            Возмездно</li>
                    </ul>
                    <p>По вопросам предоставления прав на текстовые, видео- и аудиоматериалы, обращайтесь по контактам, т. +7(928) 698-54-69, serdalo@kyandex.ru.
                        С условиями приобретения права на использование фотографий из фотоархива ГАУ РИ «Издательский дом «Сердало» Вы можете ознакомиться здесь.
                        Представителем авторов публикаций является АО «Коммерсантъ».

                    </p>

                    <h2 class="color-7">Ответственность за содержание рекламы, в том числе баннеров, размещенных на веб-сайте, несет рекламодатель.</h2>
                    <h2 class="color-7">ГАУ РИ «Издательский дом «Сердало»  не несет ответственность за содержание веб-сайтов, на которые даются гиперссылки.</h2>
                </div>
            </div>
        </div>
    </div>
@endsection()
