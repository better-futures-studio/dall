@section('title', 'Confirm your password')

<div>
    <div>
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <a href="{{ route('home') }}">
                <x-logo class="text-content-base mx-auto h-16 w-auto" />
            </a>

            <h2 class="text-content-base mt-6 text-center text-3xl font-extrabold leading-9">
                Confirm your password
            </h2>
            <p class="max-w text-content-base mt-2 text-center text-sm leading-5">
                Please confirm your password before continuing
            </p>
        </div>

        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-base-300 px-4 py-8 shadow sm:rounded-lg sm:px-10">
                <form wire:submit.prevent="confirm">
                    <div class="form-control w-full">
                        <label class="label">
                            <span class="label-text">Password</span>
                        </label>
                        <input
                            class="@error('password') input-error @enderror input-bordered input w-full"
                            type="password"
                            required
                            autofocus
                            wire:model.lazy="password"
                        />

                        @error('password')
                            <p class="text-error mt-2 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-4 flex items-center justify-end">
                        <div class="text-sm leading-5">
                            <a
                                class="link"
                                href="{{ route('password.request') }}"
                            >
                                Forgot your password?
                            </a>
                        </div>
                    </div>

                    <div class="mt-6">
                        <span class="block w-full rounded-md shadow-sm">
                            <button
                                class="btn-neutral btn w-full"
                                type="submit"
                            >
                                Confirm password
                            </button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
