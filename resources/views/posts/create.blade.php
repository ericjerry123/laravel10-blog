<x-layouts>
    <x-slot:title>
        Create Post
    </x-slot:title>

    <div class="min-h-screen bg-base-200 py-12 px-4">
        <div class="max-w-2xl mx-auto">
            <div class="bg-base-100 rounded-box shadow-lg"></div>
            <form action="{{ route('posts.store') }}" method="post">
                @csrf
                <!-- 頁面標題區 -->
                <div class="bg-primary text-primary-content p-6 rounded-t-box">
                    <h1 class="text-2xl font-bold">創建新文章</h1>
                    <p class="mt-2 opacity-90">分享您的想法和經驗</p>
                </div>

                <!-- 表單區域 -->
                <div class="shadow-xl p-4">
                    <fieldset class="fieldset">
                        <legend class="fieldset-legend">文章標題</legend>
                        <input type="text" class="input" placeholder="輸入文章標題" name="title" />
                        <p class="fieldset-label">您可以稍後從設定編輯文章標題</p>
                        @error('title')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </fieldset>

                    <fieldset class="fieldset">
                        <legend class="fieldset-legend">文章內容</legend>
                        <textarea class="textarea" placeholder="輸入文章內容" name="content"></textarea>
                        <p class="fieldset-label">您可以稍後從設定編輯文章內容</p>
                        @error('content')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </fieldset>

                    <div class="flex justify-end">
                        <button class="btn btn-primary">發布文章</button>
                    </div>
                </div>
        </div>
    </div>
    </form>
</x-layouts>
