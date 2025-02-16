<div class="navbar bg-base-100 shadow-sm sticky top-0 z-50">
    <div class="flex-1">
        <a href="/" class="btn btn-ghost text-xl">Blog</a>
    </div>
    <div class="flex-none">
        @auth
            <a href="{{ route('posts.create') }}" class="btn btn-primary btn-sm mr-4">新增文章</a>

            <div class="dropdown dropdown-end">
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                    <div class="w-10 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
                        <img alt="avatar" src="https://ui-avatars.com/api/?name=User" />
                    </div>
                </div>
            </div>
        @endauth
        @guest
            <div class="flex gap-4">
                <a href="/login" class="btn btn-primary btn-sm mr-4">登入</a>
                <a href="/register" class="btn btn-primary btn-sm mr-4">註冊</a>
            </div>
        @endguest
    </div>
</div>
