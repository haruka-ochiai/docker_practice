<x-app-layout>
    <x-slot name="header">
        <h2 class="ont-semibold text-xl text-gray-800 leading-tight">
            新規投稿
        </h2>
    </x-slot>
 
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('posts.index') }}" enctype="multipart/form-data">
                            @csrf
                        <div>
                            <label for="form-name">名前</label>
                            <input type="text" name="name" class="form-control" id="form-name" required>
                        </div>
                        <div>
                            <label for="form-description">説明文</label>
                            <input type="text" name="description" class="form-control" id="form-description">
                        </div>
                        <div>
                            <label for="form-image">画像</label><br>
                            <input type="file" name="file" id="form-image">
                        </div>
                        <div class="mt-3">
                            <button type="submit" class="btn btn-outline-info">投稿</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>