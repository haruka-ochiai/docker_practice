<x-app-layout>
    <x-slot name="header">
        <h2 class="text-white font-semibold text-xl text-gray-800 leading-tight">
            詳細画面
        </h2>
    </x-slot>
 
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    詳細画面
                <table class="table">
                    @csrf
                    <tr>
                        <th>投稿者</th> 
                        <th>画像</th>    
                        <th>名前</th>
                        <th>説明</th>
                    </tr>
                    <tr>
                        <td>{{$post->user->name}}</td>
                        <td><img src="{{ asset('public/images' . $post->image) }}" alt="Image"></td>
                        <td>{{$post->name}}</td>
                        <td>{{$post->description}}</td>
                    </tr>
                </table>

                <div class="d-flex justify-content">
                <form action= "{{ route('posts.destroy', $post->id) }}" method="POST">
                    @method('DELETE')    
                    @csrf
                    <button type="submit" class="btn btn-danger">削除</button>
                </form>
                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary ml-3">
                    編集
                </a>
                </div>
                
                

                </div>
            </div>
        </div>
    </div>
</x-app-layout>