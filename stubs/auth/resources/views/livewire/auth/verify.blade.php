@section('title', 'Verify your email address')

<div>
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <a href="{{ route('home') }}">
            <x-logo class="text-content-base mx-auto h-16 w-auto" />
        </a>

        <h2 class="text-content-base mt-6 text-center text-3xl font-extrabold leading-9">
            Verify your email address
        </h2>

        <p class="max-w text-content-base mt-2 text-center text-sm leading-5">
            Or
            <a
                class="link"
                href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
            >
                sign out
            </a>

        <form
            id="logout-form"
            style="display: none;"
            action="{{ route('logout') }}"
            method="POST"
        >
            @csrf
        </form>
        </p>
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="bg-base-300 px-4 py-8 shadow sm:rounded-lg sm:px-10">
            @if (session('resent'))
                <div class="alert alert-success mb-6 px-4 py-3 text-sm shadow-lg">
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
                    <span>A fresh verification link has been sent to your email address.</span>
                </div>
            @endif

            <div class="text-content-base text-sm">
                <p>Before proceeding, please check your email for a verification link.</p>

                <p class="mt-3">
                    If you did not receive the email, <a
                        class="link"
                        wire:click="resend"
                    >click here to request another</a>.
                </p>
            </div>
        </div>
    </div>
</div>
