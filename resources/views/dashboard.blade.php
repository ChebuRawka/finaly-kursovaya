@php use http\Url; @endphp

<x-app-layout>

    <x-slot name="header">

        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

            {{ __('Привет!') }}
        </h2>

    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 bg-white border-b border-gray-200  ">

                    {{ __("Ты успешно авторизован!") }}

                    <!-- Ссылка на главную страницу -->
{{--                    <a href="{{ route('welcome') }}" class="text-blue-500 hover:underline">Главная страница</a>--}}


                @if (Auth::user()->isAdmin())
                        <a href="{{ route('consultation-requests.index') }}" class="text-blue-500 hover:underline ml-4">Просмотреть заявки на консультацию</a>
                    @endif
                    <svg  xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-backspace-fill" viewBox="0 0 16 16">
                        <path d="M15.683 3a2 2 0 0 0-2-2h-7.08a2 2 0 0 0-1.519.698L.241 7.35a1 1 0 0 0 0 1.302l4.843 5.65A2 2 0 0 0 6.603 15h7.08a2 2 0 0 0 2-2V3zM5.829 5.854a.5.5 0 1 1 .707-.708l2.147 2.147 2.146-2.147a.5.5 0 1 1 .707.708L9.39 8l2.146 2.146a.5.5 0 0 1-.707.708L8.683 8.707l-2.147 2.147a.5.5 0 0 1-.707-.708L7.976 8 5.829 5.854z"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
