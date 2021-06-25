<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Articles') }}
        </h2>
    </x-slot>
    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="flex flex-col py-14">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="w-11/12 divide-y divide-gray-200 mx-auto">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    {{ __('Date') }}
                                </th>
                                <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    {{ __('Title') }}
                                </th>
                                <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    {{ __('Excerpt') }}
                                </th>
                                <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    {{ __('Body') }}
                                </th>
                                <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    {{ __('Image') }}
                                </th>
                                <th scope="col" class="relative px-4 py-3">
                                    <span class="sr-only">{{ __('Edit') }}</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($articles as $article)
                            @if ($article->id == $articleToEdit->id)
                            <tr>
                                <form action="{{ route('articles.update', $article) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <td class="px-4 py-4 whitespace-normal">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <img class="h-10 w-10 rounded-full" src="{{ $article->img_src }}" alt="{{ $article->title }}">
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                                <input name="created_at" type=datetime-local value="{{ date('Y-m-d\TH:i', strtotime($article->created_at)) }}"/>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-4 whitespace-normal">
                                    <div class="text-sm text-gray-900"><input name="title" type=text value="{{ $article->title }}"/></div>
                                    <div class="text-sm text-gray-500"><input name="slug" type=text value="{{ $article->slug }}"/></div>
                                </td>
                                <td class="px-4 py-4 whitespace-normal">
                                    <div class="text-sm text-gray-900"><input name="excerpt" type=text value="{{ $article->excerpt }}"/></div>
                                </td>
                                <td class="px-4 py-4 whitespace-normal text-sm text-gray-500">
                                    <div class="text-sm text-gray-900"><textarea name="body" >{{ $article->body }}</textarea></div>
                                </td>
                                <td class="px-4 py-4 whitespace-normal text-sm text-gray-500">
                                    <div class="text-sm text-gray-500"><input name="img_src" type=text value="{{ $article->img_src }}"/></div>
                                </td>
                                <td class="px-4 py-4 whitespace-normal text-right text-sm font-medium">
                                    <button type=submit class="text-indigo-600 hover:text-indigo-900">{{ __('Save') }}</button>
                                </td>
                                </form>
                            </tr>
                            @else
                            <tr>
                            <td class="px-4 py-4 whitespace-normal">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <img class="h-10 w-10 rounded-full" src="{{ $article->img_src }}" alt="{{ $article->name }}">
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                                {{ $article->created_at }}
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-4 whitespace-normal">
                                    <div class="text-sm text-gray-900">{{ $article->title }}</div>
                                    <div class="text-sm text-gray-500">{{ $article->slug }}</div>
                                </td>
                                <td class="px-4 py-4 whitespace-normal">
                                    <div class="text-sm text-gray-900">{{ $article->excerpt }}</div>
                                </td>
                                <td class="px-4 py-4 whitespace-normal text-sm text-gray-500">
                                    <div class="text-sm text-gray-900">{{ $article->body }}</div>
                                </td>
                                <td class="px-4 py-4 whitespace-normal text-sm text-gray-500">
                                    <div class="text-sm text-gray-500">{{ $article->img_src }}</div>
                                </td>
                                <td class="px-4 py-4 whitespace-normal text-right text-sm font-medium">
                                    <a href="{{ route('articles.edit', $article) }}" class="text-indigo-600 hover:text-indigo-900">{{ __('Edit') }}</a>
                                </td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>