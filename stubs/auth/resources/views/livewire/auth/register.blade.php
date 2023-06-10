@section('title', 'Create a new account')

<div>
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <a href="{{ route('home') }}">
            <x-logo class="mx-auto h-16 w-auto" />
        </a>

        <h2 class="mt-6 text-center text-3xl font-extrabold leading-9">
            Create a new account
        </h2>

        <p class="max-w mt-2 text-center text-sm leading-5">
            Or
            <a
                class="link"
                href="{{ route('login') }}"
            >
                sign in to your account
            </a>
        </p>
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="bg-base-300 px-4 py-8 shadow sm:rounded-lg sm:px-10">
            <form
                class="flex flex-col gap-3"
                wire:submit.prevent="register"
            >

                <div class="form-control w-full">
                    <label class="label">
                        <span class="label-text">Name</span>
                    </label>
                    <input
                        class="@error('name') input-error @enderror input-bordered input w-full"
                        type="text"
                        required
                        autofocus
                        wire:model.lazy="name"
                    />

                    @error('name')
                        <p class="text-error mt-2 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-control w-full">
                    <label class="label">
                        <span class="label-text">Email address</span>
                    </label>
                    <input
                        class="@error('email') input-error @enderror input-bordered input w-full"
                        type="email"
                        required
                        wire:model.lazy="email"
                    />

                    @error('email')
                        <p class="text-error mt-2 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-control w-full">
                    <label class="label">
                        <span class="label-text">Password</span>
                    </label>
                    <input
                        class="@error('password') input-error @enderror input-bordered input w-full"
                        type="password"
                        required
                        wire:model.lazy="password"
                    />

                    @error('password')
                        <p class="text-error mt-2 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-control w-full">
                    <label class="label">
                        <span class="label-text">Confirm Password</span>
                    </label>
                    <input
                        class="input-bordered input w-full"
                        type="password"
                        required
                        wire:model.lazy="passwordConfirmation"
                    />
                </div>

                <div class="mt-6">
                    <span class="block w-full rounded-md shadow-sm">
                        <button
                            class="btn-neutral btn w-full"
                            type="submit"
                        >
                            Register
                        </button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>
