<x-app-layout>
    <x-slot name="header">
        <h2 class="text-white font-semibold text-xl text-gray-800 leading-tight">
            一覧画面
        </h2>
    </x-slot>
 
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    一覧画面
                <table class="table">
                    @csrf
                    <tr>
                        <th>投稿者</th> 
                        <th>画像</th>    
                        <th>名前</th>
                        <th>説明</th>
                    </tr>
                    @foreach($posts as $post)
                    <tr>
                        <td>{{$post->user_id}}</td>
                        <td><img src="{{ asset('public/images' . $post->image) }}" alt="Image"></td>
                        <td><a href="{{ route('posts.show', ['post' => $post->id]) }}">{{$post->name}}</a></td>
                        <td>{{$post->description}}</td>
                    </tr>
                    @endforeach
                </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>