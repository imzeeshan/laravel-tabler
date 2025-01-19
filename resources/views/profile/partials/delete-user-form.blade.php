<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Delete Account') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>

        <form method="post" action="{{ route('profile.destroy') }}" class="mt-6 space-y-6">
            @csrf
            @method('delete')

            <div class="mt-6 flex justify-end">
                <input type="button" value="{{ __('Delete Account') }}" class="btn btn-danger ms-auto"></input>
            </div>
        </form>
    </header>
    
</section>
