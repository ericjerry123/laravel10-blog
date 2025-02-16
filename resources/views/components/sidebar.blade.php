<div class="drawer-side">
    <label for="my-drawer-2" aria-label="close sidebar" class="drawer-overlay"></label>
    <div class="bg-base-200 w-80 min-h-full p-4">
        <div class="flex flex-col gap-4">
            <div class="form-control">
                <input type="text" placeholder="搜索文章..." class="input input-bordered w-full" />
            </div>

            <div class="divider">熱門標籤</div>
            <x-lable-list />
            <div class="divider">分類</div>
            <x-category-list />
        </div>
    </div>
</div>
