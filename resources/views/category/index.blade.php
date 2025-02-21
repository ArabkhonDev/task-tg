<x-app-layout>
    @if (Auth::user()->role == 'admin')
        <a href="{{ route('categories.create') }}" class="btn btn-primary">
            <button
                class="middle none center mr-4 rounded-lg bg-blue-500 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:shadow-blue-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                data-ripple-light="true">
                Add
            </button>
        </a>
    @endif
    <div class="flex w-full items-center justify-center bg-white">
        <div class="p-2 px-0">
            <table class="w-full  table-auto text-left">
                <thead>
                    <tr>
                        <th class="border-y border-blue-gray-100 bg-blue-gray-50/50 p-4">
                            <p
                                class="block antialiased font-sans text-sm text-blue-gray-900 font-normal leading-none opacity-70">
                                Image</p>
                        </th>
                        <th class="border-y border-blue-gray-100 bg-blue-gray-50/50 p-4">
                            <p
                                class="block antialiased font-sans text-sm text-blue-gray-900 font-normal leading-none opacity-70">
                                Title</p>
                        </th>
                        <th class="border-y border-blue-gray-100 bg-blue-gray-50/50 p-4">
                            <p
                                class="block antialiased font-sans text-sm text-blue-gray-900 font-normal leading-none opacity-70">
                                Descriptions</p>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>

                            <td class="p-4 border-b border-blue-gray-50">
                                <div class="flex items-center gap-3">
                                    <img src="{{ asset('storage/' . $category->image) }}" alt="Spotify"
                                        class="inline-block relative object-center !rounded-full w-12 h-12 rounded-lg border border-blue-gray-50 bg-blue-gray-50/50 object-contain p-1">
                                    <p
                                        class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-bold">
                                        Image</p>
                                </div>
                            </td>
                            <td class="p-4 border-b border-blue-gray-50">
                                <p
                                    class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">
                                    {{ $category->title }}</p>
                            </td>
                            <td class="p-4 border-b border-blue-gray-50">
                                <p
                                    class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">
                                    {{ $category->desc }}</p>
                            </td>
                            <td class="p-4 border-b border-blue-gray-50">
                                <div class="w-max">
                                    <div class="relative grid items-center font-sans font-bold uppercase whitespace-nowrap select-none bg-green-500/20 text-green-900 py-1 px-2 text-xs rounded-md"
                                        style="opacity: 1;">
                                        <a href="{{ route('categories.show', ['category' => $category->id]) }}"
                                            class="">Read More</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $categories->links() }}

        </div>
    </div>
</x-app-layout>
