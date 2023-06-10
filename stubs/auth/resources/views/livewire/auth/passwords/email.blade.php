@section('title', 'Reset password')

<div>
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <a href="{{ route('home') }}">
            <x-logo class="mx-auto h-16 w-auto" />
        </a>

        <h2 class="mt-6 text-center text-3xl font-extrabold leading-9">
            Reset password
        </h2>
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="bg-base-300 px-4 py-8 shadow sm:rounded-lg sm:px-10">
            @if ($emailSentMessage)
                <div class="alert alert-success shadow-lg">
                    <svg
                        class="h-6 w-6 flex-shrink-0 stroke-current"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"
                        />
                    </svg>
                    <span>{{ $emailSentMessage }}</span>
                </div>
            @else
                <form wire:submit.prevent="sendResetPasswordLink">
                    <div class="form-control w-full">
                        <label class="label">
                            <span class="label-text">Email address</span>
                        </label>
                        <input
                            class="@error('email') input-error @enderror input-bordered input w-full"
                            type="email"
                            required
                            autofocus
                            wire:model.lazy="email"
                        />

                        @error('email')
                            <p class="text-error mt-2 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-6">
                        <span class="block w-full rounded-md shadow-sm">
                            <button
                                class="btn-neutral btn w-full"
                                type="submit"
                            >
                                Send password reset link
                            </button>
                        </span>
                    </div>
                </form>
            @endif
        </div>
    </div>
</div>
