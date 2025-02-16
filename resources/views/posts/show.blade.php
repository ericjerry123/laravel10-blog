<x-layouts>
    <div class="drawer lg:drawer-open">
        <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content flex flex-col">
            <!-- 主要内容區域 -->
            <div class="max-w-4xl mx-auto px-4 py-8">
                <div class="flex justify-between items-center mb-6">
                    <label for="my-drawer-2" class="btn btn-primary drawer-button lg:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </label>
                    <div class="dropdown dropdown-end">
                        <div tabindex="0" role="button" class="btn btn-sm btn-ghost">
                            排序方式
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                        <ul tabindex="0"
                            class="dropdown-content menu bg-base-200 rounded-box z-50 w-32 p-2 shadow-lg">
                            <li><a class="active:bg-primary">最新</a></li>
                            <li><a>最熱</a></li>
                            <li><a>最佳</a></li>
                        </ul>
                    </div>
                </div>

                <!-- 文章内容 -->
                <article class="prose prose-lg max-w-none">
                    <h1 class="text-3xl font-bold mb-4">{{ $post->title }}</h1>

                    <!-- 作者信息卡片 -->
                    <div class="card bg-base-200 shadow-sm not-prose mb-8">
                        <div class="card-body p-6">
                            <div class="flex items-center gap-4">
                                <div class="avatar">
                                    <div class="w-16 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
                                        <img
                                            src="{{ $post->user->avatar ?? 'https://ui-avatars.com/api/?name=' . urlencode($post->user->name ?? 'Anonymous') }}" />
                                    </div>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold mb-1">{{ $post->user->name ?? 'Anonymous' }}</h3>
                                    <p class="text-sm text-base-content/70">{{ $post->user->bio ?? '這個作者很懶，還沒有寫簡介' }}
                                    </p>
                                    <div class="flex gap-4 mt-2">
                                        <span class="text-sm text-base-content/70">
                                            <i class="fas fa-pencil-alt"></i> 42 篇文章
                                        </span>
                                        <span class="text-sm text-base-content/70">
                                            <i class="fas fa-users"></i> 1.2k 關注者
                                        </span>
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-sm ml-auto">關注作者</button>
                            </div>
                        </div>
                    </div>

                    <!-- 文章元信息 -->
                    <div class="flex flex-wrap items-center gap-4 text-sm text-base-content/70 mb-8 not-prose">
                        <div class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>{{ $post->created_at->diffForHumans() }}</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                            <span>1.2k 閱讀</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                            <span>42 喜歡</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                            </svg>
                            <span>18 留言</span>
                        </div>
                    </div>


                    <!-- 文章内容 -->
                    <div class="text-base-content/80 leading-relaxed">
                        {{ $post->content ?? 'Lorem ipsum...' }}
                    </div>

                    <!-- 文章底部操作栏 -->
                    <div class="flex justify-between items-center mt-8 p-4 bg-base-200 rounded-lg not-prose">
                        <div class="flex gap-4">
                            <button class="btn btn-ghost btn-sm gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                                喜歡
                            </button>
                            <button class="btn btn-ghost btn-sm gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z" />
                                </svg>
                                分享
                            </button>
                        </div>
                        <button class="btn btn-primary btn-sm">
                            留言
                        </button>
                    </div>
                </article>
            </div>
        </div>

        <!-- 側邊欄 -->
        <x-sidebar />
    </div>

    <!-- 添加 Font Awesome 圖標 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</x-layouts>
