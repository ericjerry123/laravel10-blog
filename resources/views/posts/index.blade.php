<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <title>博客首页</title>
</head>

<body class="bg-base-100">
    <div class="navbar bg-base-100 shadow-sm sticky top-0 z-50">
        <div class="flex-1">
            <a href="/" class="btn btn-ghost text-xl">Blog</a>
        </div>
        <div class="flex-none">
            <button class="btn btn-primary btn-sm mr-4">写文章</button>
            <div class="dropdown dropdown-end">
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                    <div class="w-10 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
                        <img alt="avatar" src="https://ui-avatars.com/api/?name=User" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="drawer lg:drawer-open">
        <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content flex flex-col">
            <!-- 主要内容区域 -->
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
                        <ul tabindex="0" class="dropdown-content menu bg-base-200 rounded-box z-50 w-32 p-2 shadow-lg">
                            <li><a class="active:bg-primary">最新</a></li>
                            <li><a>最热</a></li>
                            <li><a>最佳</a></li>
                        </ul>
                    </div>
                </div>

                <!-- 文章列表 -->
                <div class="flex flex-col gap-8">
                    @foreach ($posts as $post)
                        <article class="card bg-base-100 shadow-sm hover:shadow-md transition-shadow">
                            <div class="card-body">
                                <!-- 作者信息 -->
                                <div class="flex items-center gap-3 mb-4">
                                    <div class="avatar">
                                        <div class="w-10 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
                                            <img src="{{ $post->user->avatar ?? 'https://ui-avatars.com/api/?name=' . urlencode($post->user->name ?? 'Anonymous') }}" />
                                        </div>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold">{{ $post->user->name ?? 'Anonymous' }}</h3>
                                        <p class="text-sm text-base-content/70">{{ $post->created_at->diffForHumans() }}</p>
                                    </div>
                                </div>

                                <!-- 文章标题和预览 -->
                                <a href="{{ route('posts.show', $post) }}" class="hover:no-underline">
                                    <h2 class="card-title text-2xl mb-2 hover:text-primary transition-colors">{{ $post->title }}</h2>
                                    <p class="text-base-content/70 line-clamp-3 mb-4">
                                        {{ Str::limit($post->content, 200) }}
                                    </p>
                                </a>

                                <!-- 文章标签 -->
                                <div class="flex gap-2 mb-4">
                                    <div class="badge badge-primary">Laravel</div>
                                    <div class="badge badge-secondary">PHP</div>
                                    <div class="badge badge-accent">Web开发</div>
                                </div>

                                <!-- 文章数据 -->
                                <div class="flex items-center gap-6 text-sm text-base-content/70">
                                    <span class="flex items-center gap-1">
                                        <i class="fas fa-eye"></i> 1.2k
                                    </span>
                                    <span class="flex items-center gap-1">
                                        <i class="fas fa-heart"></i> 42
                                    </span>
                                    <span class="flex items-center gap-1">
                                        <i class="fas fa-comment"></i> 18
                                    </span>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>

                <!-- 分页 -->
                <div class="mt-8 flex justify-center">
                    {{ $posts->links() }}
                </div>
            </div>
        </div>

        <!-- 侧边栏 -->
        <div class="drawer-side">
            <label for="my-drawer-2" aria-label="close sidebar" class="drawer-overlay"></label>
            <div class="bg-base-200 w-80 min-h-full p-4">
                <div class="flex flex-col gap-4">
                    <div class="form-control">
                        <input type="text" placeholder="搜索文章..." class="input input-bordered w-full" />
                    </div>
                    
                    <!-- 热门标签 -->
                    <div>
                        <h3 class="font-bold mb-3">热门标签</h3>
                        <div class="flex flex-wrap gap-2">
                            <div class="badge badge-primary">Laravel</div>
                            <div class="badge badge-secondary">PHP</div>
                            <div class="badge badge-accent">Web开发</div>
                            <div class="badge badge-ghost">JavaScript</div>
                            <div class="badge badge-ghost">Vue.js</div>
                            <div class="badge badge-ghost">React</div>
                        </div>
                    </div>

                    <div class="divider">分类</div>
                    <ul class="menu bg-base-200 w-full rounded-box">
                        <li><a class="active">全部文章</a></li>
                        <li><a>技术</a></li>
                        <li><a>生活</a></li>
                        <li><a>随笔</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- 添加 Font Awesome 图标 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</body>

</html>
