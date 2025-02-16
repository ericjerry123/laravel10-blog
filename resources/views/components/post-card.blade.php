<article class="card bg-base-100 shadow-sm hover:shadow-md transition-shadow">
    <div class="card-body">
        <!-- 作者信息 -->
        <div class="flex items-center gap-3 mb-4">
            <div class="avatar">
                <div class="w-10 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
                    <img
                        src="{{ $post->user->avatar ?? 'https://ui-avatars.com/api/?name=' . urlencode($post->user->name ?? 'Anonymous') }}" />
                </div>
            </div>
            <div>
                <h3 class="font-semibold">{{ $post->user->name ?? 'Anonymous' }}</h3>
                <p class="text-sm text-base-content/70">{{ $post->created_at->diffForHumans() }}
                </p>
            </div>
        </div>

        <!-- 文章標題 -->
        <a href="{{ route('posts.show', $post) }}" class="hover:no-underline">
            <h2 class="card-title text-2xl mb-2 hover:text-primary transition-colors">
                {{ $post->title }}</h2>
            <p class="text-base-content/70 line-clamp-3 mb-4">
                {{ Str::limit($post->content, 200) }}
            </p>
        </a>

        <!-- 文章標籤 -->
        <div class="flex gap-2 mb-4">
            <div class="badge badge-primary">Laravel</div>
            <div class="badge badge-secondary">PHP</div>
            <div class="badge badge-accent">Web開發</div>
        </div>

        <!-- 文章數據 -->
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
