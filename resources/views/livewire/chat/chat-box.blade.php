<div>
    {{-- header --}}

        <header class="w-full sticky inset-x-0 flex pb-[5px] pt-[5px] top-0 z-10 bg-white dark:bg-gray-900 border-b dark:border-b-gray-800">

            <div class="flex w-full items-center px-2 lg:px-4 gap-2 md:gap-5">

                <a href="#" class="shrink-0 dark:text-gray-300 lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                      </svg>                      
                </a>


                {{-- avatar --}}
                
                <div class="shrink-0">
                    <x-avatar class="h-9 w-9 lg:w-11 lg:h-11" />
                </div>

                <h6 class="font-bold truncate dark:text-gray-300">{{ fake()->name() }}</h6>
            </div>

        </header>

    {{-- body --}}

        <main class="flex flex-col gap-3 p-2.5 overflow-y-auto flex-grow overscroll-contain overflow-x-hidden w-full my-auto">

            <div @class(['max-w-[85%] md:mx-w-[78%] flex w-auto gap-2 relative mt-2'])>
                {{-- avatar --}}
            </div>

            <div @class(['shrink-0'])>
                <x-avatar />

                {{-- message body --}}

                <div @class(['flex flex-wrap text-[15px] rounded-xl p-2.5 flex flex-col text-black bg-[#f6f6f8fb]',
                            'rounded-bl-none border border-gray-200/40' => false,
                            'rounded-br-none bg-blue-500/80 text-white' => true
                ])>
                    <p class="whitespace-normal truncate text-sm md:text-base tracking-wide lg:tracking-normal">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam illo, animi earum aut facilis, eum quia ut incidunt mollitia assumenda, reprehenderit enim harum! Provident nihil aliquam quisquam nobis alias voluptate.
                    </p> 

                </div>
            </div>

        </main>


    {{-- footer --}}
</div>
