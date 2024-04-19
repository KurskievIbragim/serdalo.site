<!-- subscribe -->
<div class="mt-5 xl:mb-5 p-5 bg-7">
    <p class="mb-2.5 text-xl md:text-2xl lg:text-4xl font-bold color-1">{{ __('Подпишитесь на линию надежной информации.') }}</p>
    <p class="mb-5 lg:text-xl color-1">{{ __('Оставьте ваш e-mail, чтобы получать подборки наших новостей.') }}</p>
    <div>
        <form class="js--subscribe-form" method="get" action="#">
            <div class="flex flex-col md:flex-row mb-5 gap-5">
                <div class="">
                    <input class="py-2 px-4 w-full md:w-auto" name="subscribe_email" type="email" placeholder="{{ __('Электронная почта') }}">
                </div>
                <div>
                    <button class="cm-button cm-button-7 w-full md:w-auto bg-1 color-2" type="submit">{{ __('Подписаться') }}</button>
                </div>
            </div>
            <div class="flex gap-2 items-center color-1">
                <input class="cm-checkbox" type="checkbox" id="subscribe_check" name="subscribe_check">
                <label for="subscribe_check">{{ __('Я согласен на обработку персональных данных') }}</label>
            </div>
        </form>
    </div>
</div>