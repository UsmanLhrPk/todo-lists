<div class="fixed right-0 mx-4 top-4">
    @if (session()->has('message'))
        <div class="flex max-w-full gap-4 px-4 py-4 border rounded-lg lg:!max-w-md alert alert-{{ session('status') ?? 'info' }}">
            <div class="max-w-max">
                {{ session('message') }}
            </div>
            <div class="col-span-2">
                <svg class="inline border rounded-full cursor-pointer alert-danger-cross" xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </div>
        </div>
    @endif
</div>
