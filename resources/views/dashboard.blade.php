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
                <div class="p-6 bg-white border-b border-gray-200">
                    {{ __("Ты успешно авторизован!") }}

                    <!-- Ссылка на главную страницу -->
{{--                    <a href="{{ route('welcome') }}" class="text-blue-500 hover:underline">Главная страница</a>--}}

                    @if (Auth::user()->isAdmin())
                        <a href="{{ route('consultation-requests.index') }}" class="text-blue-500 hover:underline ml-4">Просмотреть заявки на консультацию</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
