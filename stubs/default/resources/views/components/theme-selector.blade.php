<div
    title="Change Theme"
    {{ $attributes->merge(['class' => 'dropdown']) }}
>
    <div
        class="btn-ghost btn gap-1 normal-case"
        tabindex="0"
    >
        <span>
            <svg
                class="inline-block h-5 w-5 stroke-current md:h-6 md:w-6"
                width="20"
                height="20"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"
                ></path>
            </svg>
            <span class="hidden md:inline">Theme</span>
            <svg
                class="ml-1 hidden h-3 w-3 fill-current opacity-60 sm:inline-block"
                width="12px"
                height="12px"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 2048 2048"
            >
                <path d="M1799 349l242 241-1017 1017L7 590l242-241 775 775 775-775z"></path>
            </svg>
        </span>

    </div>
    <div
        class="dropdown-content rounded-t-box rounded-b-box bg-base-200 text-base-content top-px z-50 mt-16 h-[70vh] max-h-96 w-60 overflow-y-auto shadow-2xl">
        <div
            class="grid grid-cols-1 gap-3 p-3"
            tabindex="0"
        >
            <button
                class="outline-base-content overflow-hidden rounded-lg text-left"
                x-bind:class="{ '[&_svg]:visible': userTheme === null }"
                x-on:click="userTheme = null"
            >
                <div
                    class="bg-base-100 text-base-content w-full cursor-pointer font-sans"
                    x-bind:data-theme="systemTheme"
                >
                    <div class="grid grid-cols-5 grid-rows-3">
                        <div class="col-span-5 row-span-3 row-start-1 flex items-center gap-2 px-4 py-3">
                            <svg
                                class="invisible h-3 w-3"
                                xmlns="http://www.w3.org/2000/svg"
                                width="16"
                                height="16"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                                <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"></path>
                            </svg>
                            <div class="flex-grow text-sm font-bold">system (<span x-text="systemTheme"></span>)</div>
                            <div class="flex h-full flex-shrink-0 flex-wrap gap-1">
                                <div class="bg-primary w-2 rounded"></div>
                                <div class="bg-secondary w-2 rounded"></div>
                                <div class="bg-accent w-2 rounded"></div>
                                <div class="bg-neutral w-2 rounded"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </button>
            <button
                class="outline-base-content overflow-hidden rounded-lg text-left"
                x-bind:class="{ '[&_svg]:visible': userTheme === 'light' }"
                x-on:click="userTheme = 'light'"
            >
                <div
                    class="bg-base-100 text-base-content w-full cursor-pointer font-sans"
                    data-theme="light"
                >
                    <div class="grid grid-cols-5 grid-rows-3">
                        <div class="col-span-5 row-span-3 row-start-1 flex items-center gap-2 px-4 py-3">
                            <svg
                                class="invisible h-3 w-3"
                                xmlns="http://www.w3.org/2000/svg"
                                width="16"
                                height="16"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                                <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"></path>
                            </svg>
                            <div class="flex-grow text-sm font-bold">light</div>
                            <div class="flex h-full flex-shrink-0 flex-wrap gap-1">
                                <div class="bg-primary w-2 rounded"></div>
                                <div class="bg-secondary w-2 rounded"></div>
                                <div class="bg-accent w-2 rounded"></div>
                                <div class="bg-neutral w-2 rounded"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </button>
            <button
                class="outline-base-content overflow-hidden rounded-lg text-left"
                x-bind:class="{ '[&_svg]:visible': userTheme === 'dark' }"
                x-on:click="userTheme = 'dark'"
            >
                <div
                    class="bg-base-100 text-base-content w-full cursor-pointer font-sans"
                    data-theme="dark"
                >
                    <div class="grid grid-cols-5 grid-rows-3">
                        <div class="col-span-5 row-span-3 row-start-1 flex items-center gap-2 px-4 py-3">
                            <svg
                                class="invisible h-3 w-3"
                                xmlns="http://www.w3.org/2000/svg"
                                width="16"
                                height="16"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                                <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"></path>
                            </svg>
                            <div class="flex-grow text-sm font-bold">dark</div>
                            <div class="flex h-full flex-shrink-0 flex-wrap gap-1">
                                <div class="bg-primary w-2 rounded"></div>
                                <div class="bg-secondary w-2 rounded"></div>
                                <div class="bg-accent w-2 rounded"></div>
                                <div class="bg-neutral w-2 rounded"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </button>
            <button
                class="outline-base-content overflow-hidden rounded-lg text-left"
                x-bind:class="{ '[&_svg]:visible': userTheme === 'cupcake' }"
                x-on:click="userTheme = 'cupcake'"
            >
                <div
                    class="bg-base-100 text-base-content w-full cursor-pointer font-sans"
                    data-theme="cupcake"
                >
                    <div class="grid grid-cols-5 grid-rows-3">
                        <div class="col-span-5 row-span-3 row-start-1 flex items-center gap-2 px-4 py-3">
                            <svg
                                class="invisible h-3 w-3"
                                xmlns="http://www.w3.org/2000/svg"
                                width="16"
                                height="16"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                                <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"></path>
                            </svg>
                            <div class="flex-grow text-sm font-bold">cupcake</div>
                            <div class="flex h-full flex-shrink-0 flex-wrap gap-1">
                                <div class="bg-primary w-2 rounded"></div>
                                <div class="bg-secondary w-2 rounded"></div>
                                <div class="bg-accent w-2 rounded"></div>
                                <div class="bg-neutral w-2 rounded"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </button>
            <button
                class="outline-base-content overflow-hidden rounded-lg text-left"
                x-bind:class="{ '[&_svg]:visible': userTheme === 'bumblebee' }"
                x-on:click="userTheme = 'bumblebee'"
            >
                <div
                    class="bg-base-100 text-base-content w-full cursor-pointer font-sans"
                    data-theme="bumblebee"
                >
                    <div class="grid grid-cols-5 grid-rows-3">
                        <div class="col-span-5 row-span-3 row-start-1 flex items-center gap-2 px-4 py-3">
                            <svg
                                class="invisible h-3 w-3"
                                xmlns="http://www.w3.org/2000/svg"
                                width="16"
                                height="16"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                                <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"></path>
                            </svg>
                            <div class="flex-grow text-sm font-bold">bumblebee</div>
                            <div class="flex h-full flex-shrink-0 flex-wrap gap-1">
                                <div class="bg-primary w-2 rounded"></div>
                                <div class="bg-secondary w-2 rounded"></div>
                                <div class="bg-accent w-2 rounded"></div>
                                <div class="bg-neutral w-2 rounded"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </button>
            <button
                class="outline-base-content overflow-hidden rounded-lg text-left"
                x-bind:class="{ '[&_svg]:visible': userTheme === 'emerald' }"
                x-on:click="userTheme = 'emerald'"
            >
                <div
                    class="bg-base-100 text-base-content w-full cursor-pointer font-sans"
                    data-theme="emerald"
                >
                    <div class="grid grid-cols-5 grid-rows-3">
                        <div class="col-span-5 row-span-3 row-start-1 flex items-center gap-2 px-4 py-3">
                            <svg
                                class="invisible h-3 w-3"
                                xmlns="http://www.w3.org/2000/svg"
                                width="16"
                                height="16"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                                <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"></path>
                            </svg>
                            <div class="flex-grow text-sm font-bold">emerald</div>
                            <div class="flex h-full flex-shrink-0 flex-wrap gap-1">
                                <div class="bg-primary w-2 rounded"></div>
                                <div class="bg-secondary w-2 rounded"></div>
                                <div class="bg-accent w-2 rounded"></div>
                                <div class="bg-neutral w-2 rounded"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </button>
            <button
                class="outline-base-content overflow-hidden rounded-lg text-left"
                x-bind:class="{ '[&_svg]:visible': userTheme === 'corporate' }"
                x-on:click="userTheme = 'corporate'"
            >
                <div
                    class="bg-base-100 text-base-content w-full cursor-pointer font-sans"
                    data-theme="corporate"
                >
                    <div class="grid grid-cols-5 grid-rows-3">
                        <div class="col-span-5 row-span-3 row-start-1 flex items-center gap-2 px-4 py-3">
                            <svg
                                class="invisible h-3 w-3"
                                xmlns="http://www.w3.org/2000/svg"
                                width="16"
                                height="16"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                                <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"></path>
                            </svg>
                            <div class="flex-grow text-sm font-bold">corporate</div>
                            <div class="flex h-full flex-shrink-0 flex-wrap gap-1">
                                <div class="bg-primary w-2 rounded"></div>
                                <div class="bg-secondary w-2 rounded"></div>
                                <div class="bg-accent w-2 rounded"></div>
                                <div class="bg-neutral w-2 rounded"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </button>
            <button
                class="outline-base-content overflow-hidden rounded-lg text-left"
                x-bind:class="{ '[&_svg]:visible': userTheme === 'synthwave' }"
                x-on:click="userTheme = 'synthwave'"
            >
                <div
                    class="bg-base-100 text-base-content w-full cursor-pointer font-sans"
                    data-theme="synthwave"
                >
                    <div class="grid grid-cols-5 grid-rows-3">
                        <div class="col-span-5 row-span-3 row-start-1 flex items-center gap-2 px-4 py-3">
                            <svg
                                class="invisible h-3 w-3"
                                xmlns="http://www.w3.org/2000/svg"
                                width="16"
                                height="16"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                                <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"></path>
                            </svg>
                            <div class="flex-grow text-sm font-bold">synthwave</div>
                            <div class="flex h-full flex-shrink-0 flex-wrap gap-1">
                                <div class="bg-primary w-2 rounded"></div>
                                <div class="bg-secondary w-2 rounded"></div>
                                <div class="bg-accent w-2 rounded"></div>
                                <div class="bg-neutral w-2 rounded"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </button>
            <button
                class="outline-base-content overflow-hidden rounded-lg text-left"
                x-bind:class="{ '[&_svg]:visible': userTheme === 'retro' }"
                x-on:click="userTheme = 'retro'"
            >
                <div
                    class="bg-base-100 text-base-content w-full cursor-pointer font-sans"
                    data-theme="retro"
                >
                    <div class="grid grid-cols-5 grid-rows-3">
                        <div class="col-span-5 row-span-3 row-start-1 flex items-center gap-2 px-4 py-3">
                            <svg
                                class="invisible h-3 w-3"
                                xmlns="http://www.w3.org/2000/svg"
                                width="16"
                                height="16"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                                <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"></path>
                            </svg>
                            <div class="flex-grow text-sm font-bold">retro</div>
                            <div class="flex h-full flex-shrink-0 flex-wrap gap-1">
                                <div class="bg-primary w-2 rounded"></div>
                                <div class="bg-secondary w-2 rounded"></div>
                                <div class="bg-accent w-2 rounded"></div>
                                <div class="bg-neutral w-2 rounded"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </button>
            <button
                class="outline-base-content overflow-hidden rounded-lg text-left"
                x-bind:class="{ '[&_svg]:visible': userTheme === 'cyberpunk' }"
                x-on:click="userTheme = 'cyberpunk'"
            >
                <div
                    class="bg-base-100 text-base-content w-full cursor-pointer font-sans"
                    data-theme="cyberpunk"
                >
                    <div class="grid grid-cols-5 grid-rows-3">
                        <div class="col-span-5 row-span-3 row-start-1 flex items-center gap-2 px-4 py-3">
                            <svg
                                class="invisible h-3 w-3"
                                xmlns="http://www.w3.org/2000/svg"
                                width="16"
                                height="16"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                                <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"></path>
                            </svg>
                            <div class="flex-grow text-sm font-bold">cyberpunk</div>
                            <div class="flex h-full flex-shrink-0 flex-wrap gap-1">
                                <div class="bg-primary w-2 rounded"></div>
                                <div class="bg-secondary w-2 rounded"></div>
                                <div class="bg-accent w-2 rounded"></div>
                                <div class="bg-neutral w-2 rounded"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </button>
            <button
                class="outline-base-content overflow-hidden rounded-lg text-left"
                x-bind:class="{ '[&_svg]:visible': userTheme === 'valentine' }"
                x-on:click="userTheme = 'valentine'"
            >
                <div
                    class="bg-base-100 text-base-content w-full cursor-pointer font-sans"
                    data-theme="valentine"
                >
                    <div class="grid grid-cols-5 grid-rows-3">
                        <div class="col-span-5 row-span-3 row-start-1 flex items-center gap-2 px-4 py-3">
                            <svg
                                class="invisible h-3 w-3"
                                xmlns="http://www.w3.org/2000/svg"
                                width="16"
                                height="16"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                                <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"></path>
                            </svg>
                            <div class="flex-grow text-sm font-bold">valentine</div>
                            <div class="flex h-full flex-shrink-0 flex-wrap gap-1">
                                <div class="bg-primary w-2 rounded"></div>
                                <div class="bg-secondary w-2 rounded"></div>
                                <div class="bg-accent w-2 rounded"></div>
                                <div class="bg-neutral w-2 rounded"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </button>
            <button
                class="outline-base-content overflow-hidden rounded-lg text-left"
                x-bind:class="{ '[&_svg]:visible': userTheme === 'halloween' }"
                x-on:click="userTheme = 'halloween'"
            >
                <div
                    class="bg-base-100 text-base-content w-full cursor-pointer font-sans"
                    data-theme="halloween"
                >
                    <div class="grid grid-cols-5 grid-rows-3">
                        <div class="col-span-5 row-span-3 row-start-1 flex items-center gap-2 px-4 py-3">
                            <svg
                                class="invisible h-3 w-3"
                                xmlns="http://www.w3.org/2000/svg"
                                width="16"
                                height="16"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                                <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"></path>
                            </svg>
                            <div class="flex-grow text-sm font-bold">halloween</div>
                            <div class="flex h-full flex-shrink-0 flex-wrap gap-1">
                                <div class="bg-primary w-2 rounded"></div>
                                <div class="bg-secondary w-2 rounded"></div>
                                <div class="bg-accent w-2 rounded"></div>
                                <div class="bg-neutral w-2 rounded"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </button>
            <button
                class="outline-base-content overflow-hidden rounded-lg text-left"
                x-bind:class="{ '[&_svg]:visible': userTheme === 'garden' }"
                x-on:click="userTheme = 'garden'"
            >
                <div
                    class="bg-base-100 text-base-content w-full cursor-pointer font-sans"
                    data-theme="garden"
                >
                    <div class="grid grid-cols-5 grid-rows-3">
                        <div class="col-span-5 row-span-3 row-start-1 flex items-center gap-2 px-4 py-3">
                            <svg
                                class="invisible h-3 w-3"
                                xmlns="http://www.w3.org/2000/svg"
                                width="16"
                                height="16"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                                <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"></path>
                            </svg>
                            <div class="flex-grow text-sm font-bold">garden</div>
                            <div class="flex h-full flex-shrink-0 flex-wrap gap-1">
                                <div class="bg-primary w-2 rounded"></div>
                                <div class="bg-secondary w-2 rounded"></div>
                                <div class="bg-accent w-2 rounded"></div>
                                <div class="bg-neutral w-2 rounded"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </button>
            <button
                class="outline-base-content overflow-hidden rounded-lg text-left"
                x-bind:class="{ '[&_svg]:visible': userTheme === 'forest' }"
                x-on:click="userTheme = 'forest'"
            >
                <div
                    class="bg-base-100 text-base-content w-full cursor-pointer font-sans"
                    data-theme="forest"
                >
                    <div class="grid grid-cols-5 grid-rows-3">
                        <div class="col-span-5 row-span-3 row-start-1 flex items-center gap-2 px-4 py-3">
                            <svg
                                class="invisible h-3 w-3"
                                xmlns="http://www.w3.org/2000/svg"
                                width="16"
                                height="16"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                                <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"></path>
                            </svg>
                            <div class="flex-grow text-sm font-bold">forest</div>
                            <div class="flex h-full flex-shrink-0 flex-wrap gap-1">
                                <div class="bg-primary w-2 rounded"></div>
                                <div class="bg-secondary w-2 rounded"></div>
                                <div class="bg-accent w-2 rounded"></div>
                                <div class="bg-neutral w-2 rounded"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </button>
            <button
                class="outline-base-content overflow-hidden rounded-lg text-left"
                x-bind:class="{ '[&_svg]:visible': userTheme === 'aqua' }"
                x-on:click="userTheme = 'aqua'"
            >
                <div
                    class="bg-base-100 text-base-content w-full cursor-pointer font-sans"
                    data-theme="aqua"
                >
                    <div class="grid grid-cols-5 grid-rows-3">
                        <div class="col-span-5 row-span-3 row-start-1 flex items-center gap-2 px-4 py-3">
                            <svg
                                class="invisible h-3 w-3"
                                xmlns="http://www.w3.org/2000/svg"
                                width="16"
                                height="16"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                                <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"></path>
                            </svg>
                            <div class="flex-grow text-sm font-bold">aqua</div>
                            <div class="flex h-full flex-shrink-0 flex-wrap gap-1">
                                <div class="bg-primary w-2 rounded"></div>
                                <div class="bg-secondary w-2 rounded"></div>
                                <div class="bg-accent w-2 rounded"></div>
                                <div class="bg-neutral w-2 rounded"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </button>
            <button
                class="outline-base-content overflow-hidden rounded-lg text-left"
                x-bind:class="{ '[&_svg]:visible': userTheme === 'lofi' }"
                x-on:click="userTheme = 'lofi'"
            >
                <div
                    class="bg-base-100 text-base-content w-full cursor-pointer font-sans"
                    data-theme="lofi"
                >
                    <div class="grid grid-cols-5 grid-rows-3">
                        <div class="col-span-5 row-span-3 row-start-1 flex items-center gap-2 px-4 py-3">
                            <svg
                                class="invisible h-3 w-3"
                                xmlns="http://www.w3.org/2000/svg"
                                width="16"
                                height="16"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                                <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"></path>
                            </svg>
                            <div class="flex-grow text-sm font-bold">lofi</div>
                            <div class="flex h-full flex-shrink-0 flex-wrap gap-1">
                                <div class="bg-primary w-2 rounded"></div>
                                <div class="bg-secondary w-2 rounded"></div>
                                <div class="bg-accent w-2 rounded"></div>
                                <div class="bg-neutral w-2 rounded"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </button>
            <button
                class="outline-base-content overflow-hidden rounded-lg text-left"
                x-bind:class="{ '[&_svg]:visible': userTheme === 'pastel' }"
                x-on:click="userTheme = 'pastel'"
            >
                <div
                    class="bg-base-100 text-base-content w-full cursor-pointer font-sans"
                    data-theme="pastel"
                >
                    <div class="grid grid-cols-5 grid-rows-3">
                        <div class="col-span-5 row-span-3 row-start-1 flex items-center gap-2 px-4 py-3">
                            <svg
                                class="invisible h-3 w-3"
                                xmlns="http://www.w3.org/2000/svg"
                                width="16"
                                height="16"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                                <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"></path>
                            </svg>
                            <div class="flex-grow text-sm font-bold">pastel</div>
                            <div class="flex h-full flex-shrink-0 flex-wrap gap-1">
                                <div class="bg-primary w-2 rounded"></div>
                                <div class="bg-secondary w-2 rounded"></div>
                                <div class="bg-accent w-2 rounded"></div>
                                <div class="bg-neutral w-2 rounded"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </button>
            <button
                class="outline-base-content overflow-hidden rounded-lg text-left"
                x-bind:class="{ '[&_svg]:visible': userTheme === 'fantasy' }"
                x-on:click="userTheme = 'fantasy'"
            >
                <div
                    class="bg-base-100 text-base-content w-full cursor-pointer font-sans"
                    data-theme="fantasy"
                >
                    <div class="grid grid-cols-5 grid-rows-3">
                        <div class="col-span-5 row-span-3 row-start-1 flex items-center gap-2 px-4 py-3">
                            <svg
                                class="invisible h-3 w-3"
                                xmlns="http://www.w3.org/2000/svg"
                                width="16"
                                height="16"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                                <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"></path>
                            </svg>
                            <div class="flex-grow text-sm font-bold">fantasy</div>
                            <div class="flex h-full flex-shrink-0 flex-wrap gap-1">
                                <div class="bg-primary w-2 rounded"></div>
                                <div class="bg-secondary w-2 rounded"></div>
                                <div class="bg-accent w-2 rounded"></div>
                                <div class="bg-neutral w-2 rounded"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </button>
            <button
                class="outline-base-content overflow-hidden rounded-lg text-left"
                x-bind:class="{ '[&_svg]:visible': userTheme === 'wireframe' }"
                x-on:click="userTheme = 'wireframe'"
            >
                <div
                    class="bg-base-100 text-base-content w-full cursor-pointer font-sans"
                    data-theme="wireframe"
                >
                    <div class="grid grid-cols-5 grid-rows-3">
                        <div class="col-span-5 row-span-3 row-start-1 flex items-center gap-2 px-4 py-3">
                            <svg
                                class="invisible h-3 w-3"
                                xmlns="http://www.w3.org/2000/svg"
                                width="16"
                                height="16"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                                <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"></path>
                            </svg>
                            <div class="flex-grow text-sm font-bold">wireframe</div>
                            <div class="flex h-full flex-shrink-0 flex-wrap gap-1">
                                <div class="bg-primary w-2 rounded"></div>
                                <div class="bg-secondary w-2 rounded"></div>
                                <div class="bg-accent w-2 rounded"></div>
                                <div class="bg-neutral w-2 rounded"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </button>
            <button
                class="outline-base-content overflow-hidden rounded-lg text-left"
                x-bind:class="{ '[&_svg]:visible': userTheme === 'black' }"
                x-on:click="userTheme = 'black'"
            >
                <div
                    class="bg-base-100 text-base-content w-full cursor-pointer font-sans"
                    data-theme="black"
                >
                    <div class="grid grid-cols-5 grid-rows-3">
                        <div class="col-span-5 row-span-3 row-start-1 flex items-center gap-2 px-4 py-3">
                            <svg
                                class="invisible h-3 w-3"
                                xmlns="http://www.w3.org/2000/svg"
                                width="16"
                                height="16"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                                <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"></path>
                            </svg>
                            <div class="flex-grow text-sm font-bold">black</div>
                            <div class="flex h-full flex-shrink-0 flex-wrap gap-1">
                                <div class="bg-primary w-2 rounded"></div>
                                <div class="bg-secondary w-2 rounded"></div>
                                <div class="bg-accent w-2 rounded"></div>
                                <div class="bg-neutral w-2 rounded"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </button>
            <button
                class="outline-base-content overflow-hidden rounded-lg text-left"
                x-bind:class="{ '[&_svg]:visible': userTheme === 'luxury' }"
                x-on:click="userTheme = 'luxury'"
            >
                <div
                    class="bg-base-100 text-base-content w-full cursor-pointer font-sans"
                    data-theme="luxury"
                >
                    <div class="grid grid-cols-5 grid-rows-3">
                        <div class="col-span-5 row-span-3 row-start-1 flex items-center gap-2 px-4 py-3">
                            <svg
                                class="invisible h-3 w-3"
                                xmlns="http://www.w3.org/2000/svg"
                                width="16"
                                height="16"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                                <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"></path>
                            </svg>
                            <div class="flex-grow text-sm font-bold">luxury</div>
                            <div class="flex h-full flex-shrink-0 flex-wrap gap-1">
                                <div class="bg-primary w-2 rounded"></div>
                                <div class="bg-secondary w-2 rounded"></div>
                                <div class="bg-accent w-2 rounded"></div>
                                <div class="bg-neutral w-2 rounded"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </button>
            <button
                class="outline-base-content overflow-hidden rounded-lg text-left"
                x-bind:class="{ '[&_svg]:visible': userTheme === 'dracula' }"
                x-on:click="userTheme = 'dracula'"
            >
                <div
                    class="bg-base-100 text-base-content w-full cursor-pointer font-sans"
                    data-theme="dracula"
                >
                    <div class="grid grid-cols-5 grid-rows-3">
                        <div class="col-span-5 row-span-3 row-start-1 flex items-center gap-2 px-4 py-3">
                            <svg
                                class="invisible h-3 w-3"
                                xmlns="http://www.w3.org/2000/svg"
                                width="16"
                                height="16"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                                <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"></path>
                            </svg>
                            <div class="flex-grow text-sm font-bold">dracula</div>
                            <div class="flex h-full flex-shrink-0 flex-wrap gap-1">
                                <div class="bg-primary w-2 rounded"></div>
                                <div class="bg-secondary w-2 rounded"></div>
                                <div class="bg-accent w-2 rounded"></div>
                                <div class="bg-neutral w-2 rounded"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </button>
            <button
                class="outline-base-content overflow-hidden rounded-lg text-left"
                x-bind:class="{ '[&_svg]:visible': userTheme === 'cmyk' }"
                x-on:click="userTheme = 'cmyk'"
            >
                <div
                    class="bg-base-100 text-base-content w-full cursor-pointer font-sans"
                    data-theme="cmyk"
                >
                    <div class="grid grid-cols-5 grid-rows-3">
                        <div class="col-span-5 row-span-3 row-start-1 flex items-center gap-2 px-4 py-3">
                            <svg
                                class="invisible h-3 w-3"
                                xmlns="http://www.w3.org/2000/svg"
                                width="16"
                                height="16"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                                <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"></path>
                            </svg>
                            <div class="flex-grow text-sm font-bold">cmyk</div>
                            <div class="flex h-full flex-shrink-0 flex-wrap gap-1">
                                <div class="bg-primary w-2 rounded"></div>
                                <div class="bg-secondary w-2 rounded"></div>
                                <div class="bg-accent w-2 rounded"></div>
                                <div class="bg-neutral w-2 rounded"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </button>
            <button
                class="outline-base-content overflow-hidden rounded-lg text-left"
                x-bind:class="{ '[&_svg]:visible': userTheme === 'autumn' }"
                x-on:click="userTheme = 'autumn'"
            >
                <div
                    class="bg-base-100 text-base-content w-full cursor-pointer font-sans"
                    data-theme="autumn"
                >
                    <div class="grid grid-cols-5 grid-rows-3">
                        <div class="col-span-5 row-span-3 row-start-1 flex items-center gap-2 px-4 py-3">
                            <svg
                                class="invisible h-3 w-3"
                                xmlns="http://www.w3.org/2000/svg"
                                width="16"
                                height="16"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                                <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"></path>
                            </svg>
                            <div class="flex-grow text-sm font-bold">autumn</div>
                            <div class="flex h-full flex-shrink-0 flex-wrap gap-1">
                                <div class="bg-primary w-2 rounded"></div>
                                <div class="bg-secondary w-2 rounded"></div>
                                <div class="bg-accent w-2 rounded"></div>
                                <div class="bg-neutral w-2 rounded"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </button>
            <button
                class="outline-base-content overflow-hidden rounded-lg text-left"
                x-bind:class="{ '[&_svg]:visible': userTheme === 'business' }"
                x-on:click="userTheme = 'business'"
            >
                <div
                    class="bg-base-100 text-base-content w-full cursor-pointer font-sans"
                    data-theme="business"
                >
                    <div class="grid grid-cols-5 grid-rows-3">
                        <div class="col-span-5 row-span-3 row-start-1 flex items-center gap-2 px-4 py-3">
                            <svg
                                class="invisible h-3 w-3"
                                xmlns="http://www.w3.org/2000/svg"
                                width="16"
                                height="16"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                                <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"></path>
                            </svg>
                            <div class="flex-grow text-sm font-bold">business</div>
                            <div class="flex h-full flex-shrink-0 flex-wrap gap-1">
                                <div class="bg-primary w-2 rounded"></div>
                                <div class="bg-secondary w-2 rounded"></div>
                                <div class="bg-accent w-2 rounded"></div>
                                <div class="bg-neutral w-2 rounded"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </button>
            <button
                class="outline-base-content overflow-hidden rounded-lg text-left"
                x-bind:class="{ '[&_svg]:visible': userTheme === 'acid' }"
                x-on:click="userTheme = 'acid'"
            >
                <div
                    class="bg-base-100 text-base-content w-full cursor-pointer font-sans"
                    data-theme="acid"
                >
                    <div class="grid grid-cols-5 grid-rows-3">
                        <div class="col-span-5 row-span-3 row-start-1 flex items-center gap-2 px-4 py-3">
                            <svg
                                class="invisible h-3 w-3"
                                xmlns="http://www.w3.org/2000/svg"
                                width="16"
                                height="16"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                                <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"></path>
                            </svg>
                            <div class="flex-grow text-sm font-bold">acid</div>
                            <div class="flex h-full flex-shrink-0 flex-wrap gap-1">
                                <div class="bg-primary w-2 rounded"></div>
                                <div class="bg-secondary w-2 rounded"></div>
                                <div class="bg-accent w-2 rounded"></div>
                                <div class="bg-neutral w-2 rounded"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </button>
            <button
                class="outline-base-content overflow-hidden rounded-lg text-left"
                x-bind:class="{ '[&_svg]:visible': userTheme === 'lemonade' }"
                x-on:click="userTheme = 'lemonade'"
            >
                <div
                    class="bg-base-100 text-base-content w-full cursor-pointer font-sans"
                    data-theme="lemonade"
                >
                    <div class="grid grid-cols-5 grid-rows-3">
                        <div class="col-span-5 row-span-3 row-start-1 flex items-center gap-2 px-4 py-3">
                            <svg
                                class="invisible h-3 w-3"
                                xmlns="http://www.w3.org/2000/svg"
                                width="16"
                                height="16"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                                <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"></path>
                            </svg>
                            <div class="flex-grow text-sm font-bold">lemonade</div>
                            <div class="flex h-full flex-shrink-0 flex-wrap gap-1">
                                <div class="bg-primary w-2 rounded"></div>
                                <div class="bg-secondary w-2 rounded"></div>
                                <div class="bg-accent w-2 rounded"></div>
                                <div class="bg-neutral w-2 rounded"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </button>
            <button
                class="outline-base-content overflow-hidden rounded-lg text-left"
                x-bind:class="{ '[&_svg]:visible': userTheme === 'night' }"
                x-on:click="userTheme = 'night'"
            >
                <div
                    class="bg-base-100 text-base-content w-full cursor-pointer font-sans"
                    data-theme="night"
                >
                    <div class="grid grid-cols-5 grid-rows-3">
                        <div class="col-span-5 row-span-3 row-start-1 flex items-center gap-2 px-4 py-3">
                            <svg
                                class="invisible h-3 w-3"
                                xmlns="http://www.w3.org/2000/svg"
                                width="16"
                                height="16"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                                <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"></path>
                            </svg>
                            <div class="flex-grow text-sm font-bold">night</div>
                            <div class="flex h-full flex-shrink-0 flex-wrap gap-1">
                                <div class="bg-primary w-2 rounded"></div>
                                <div class="bg-secondary w-2 rounded"></div>
                                <div class="bg-accent w-2 rounded"></div>
                                <div class="bg-neutral w-2 rounded"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </button>
            <button
                class="outline-base-content overflow-hidden rounded-lg text-left"
                x-bind:class="{ '[&_svg]:visible': userTheme === 'coffee' }"
                x-on:click="userTheme = 'coffee'"
            >
                <div
                    class="bg-base-100 text-base-content w-full cursor-pointer font-sans"
                    data-theme="coffee"
                >
                    <div class="grid grid-cols-5 grid-rows-3">
                        <div class="col-span-5 row-span-3 row-start-1 flex items-center gap-2 px-4 py-3">
                            <svg
                                class="invisible h-3 w-3"
                                xmlns="http://www.w3.org/2000/svg"
                                width="16"
                                height="16"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                                <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"></path>
                            </svg>
                            <div class="flex-grow text-sm font-bold">coffee</div>
                            <div class="flex h-full flex-shrink-0 flex-wrap gap-1">
                                <div class="bg-primary w-2 rounded"></div>
                                <div class="bg-secondary w-2 rounded"></div>
                                <div class="bg-accent w-2 rounded"></div>
                                <div class="bg-neutral w-2 rounded"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </button>
            <button
                class="outline-base-content overflow-hidden rounded-lg text-left"
                x-bind:class="{ '[&_svg]:visible': userTheme === 'winter' }"
                x-on:click="userTheme = 'winter'"
            >
                <div
                    class="bg-base-100 text-base-content w-full cursor-pointer font-sans"
                    data-theme="winter"
                >
                    <div class="grid grid-cols-5 grid-rows-3">
                        <div class="col-span-5 row-span-3 row-start-1 flex items-center gap-2 px-4 py-3">
                            <svg
                                class="invisible h-3 w-3"
                                xmlns="http://www.w3.org/2000/svg"
                                width="16"
                                height="16"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                                <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"></path>
                            </svg>
                            <div class="flex-grow text-sm font-bold">winter</div>
                            <div class="flex h-full flex-shrink-0 flex-wrap gap-1">
                                <div class="bg-primary w-2 rounded"></div>
                                <div class="bg-secondary w-2 rounded"></div>
                                <div class="bg-accent w-2 rounded"></div>
                                <div class="bg-neutral w-2 rounded"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </button>
        </div>
    </div>
</div>
