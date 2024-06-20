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
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <h3 class="text-lg font-semibold">Моя заявка на консультацию</h3>
                    @forelse ($requests as $request)
                        <div class="border rounded p-4 mb-4">
                            <p>Имя: {{ $request->name }}</p>
                            <p>Email: {{ $request->email }}</p>
                            <p>Телефон: {{ $request->phone }}</p>
                            <p>Статус: {{ $request->status }}</p>
                        </div>
                    @empty
                        <p>Заявок пока нет.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{ __("Ты успешно авторизован!") }}

                    @if (Auth::user()->isAdmin())
                        <a href="{{ route('admin.consultation-requests.index') }}" class="text-blue-500 hover:underline ml-4">Просмотреть заявки на консультацию</a>
                    @endif
                    <a href="{{ route('welcome') }}" class="text-blue-500 hover:underline ml-4">Главная страница</a>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
