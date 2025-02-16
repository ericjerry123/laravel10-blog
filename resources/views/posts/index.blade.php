<x-layouts>

    <div class="drawer lg:drawer-open">
        <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content flex flex-col">
            <!-- 主要內容區域 -->
            <div class="max-w-4xl mx-auto px-4 py-8">
                <div class="flex justify-between items-center mb-6">
                    <label for="my-drawer-2" class="btn btn-primary drawer-button lg:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </label>
                    <x-dropdown />
                </div>

                <!-- 文章列表 -->
                <div class="flex flex-col gap-8">
                    @foreach ($posts as $post)
                        <x-post-card :post="$post" />
                    @endforeach
                </div>

                <!-- 分頁 -->
                <div class="mt-8 flex justify-center">
                    {{ $posts->links() }}
                </div>
            </div>
        </div>

        <!-- 側邊欄 -->
        <x-sidebar />
    </div>

    <!-- 添加 Font Awesome 圖標 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</x-layouts>
