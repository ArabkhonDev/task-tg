<x-app-layout>
    <div class="my-5">
        <div
            class="container mx-auto max-w-xs sm:max-w-md md:max-w-lg lg:max-w-xl shadow-md dark:shadow-white py-4 px-6 sm:px-10 bg-white dark:bg-gray-800 border-emerald-500 rounded-md">
            <a href="{{ route('categories.show', ['category' => $category->id]) }}"
                class="px-4 py-2 bg-red-500 rounded-md text-white text-sm sm:text-lg shadow-md">Go Back</a>
            <div class="my-3">
                <!-- Form title -->
                <h1 class="text-center text-2xl sm:text-3xl font-bold text-gray-900 dark:text-white"> Category Update
                </h1>
                <form action="{{ route('categories.update', ['category' => $category->id]) }}" method="post"
                    enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="my-2">
                        <label for="title"
                            class="text-sm sm:text-md font-bold text-gray-700 dark:text-gray-300">Title</label>
                        <input type="text" name="title" value="{{ $category->title }}"
                            class="block w-full border border-emerald-500 outline-emerald-800 px-2 py-2 text-sm sm:text-md rounded-md my-2 bg-white dark:bg-gray-700 text-gray-900 dark:text-white"
                            id="title">
                        @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="my-2">
                        <label for="desc"
                            class="text-sm sm:text-md font-bold text-gray-700 dark:text-gray-300">Description</label>
                        <textarea type="text" rows="5" name="desc" value="{{ $category->desc }}"
                            class="block w-full border border-emerald-500 outline-emerald-800 px-2 py-2 text-sm sm:text-md rounded-md my-2 bg-white dark:bg-gray-700 text-gray-900 dark:text-white"
                            id="desc"></textarea>
                        @error('desc')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="my-2">
                        <label for="class"
                            class="text-sm sm:text-md font-bold text-gray-700 dark:text-gray-300">Image</label>
                        <input type="file" name="image" value="{{ $category->image }}"
                            class="block w-full border border-emerald-500 outline-emerald-800 px-2 py-2 text-sm sm:text-md rounded-md my-2 bg-white dark:bg-gray-700 text-gray-900 dark:text-white"
                            id="image">
                        @error('image')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit"
                        class="px-4 py-1 bg-emerald-500 rounded-md text-black text-sm sm:text-lg shadow-md">Update</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
