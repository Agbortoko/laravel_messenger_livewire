<div class="fixed h-full flex bg-white dark:bg-gray-900 border dark:border-gray-800 lg:shadow-sm overflow-hidden inset-0 lg:top-16 lg:inset-x-2 m-auto lg:h-[90%] rounded-t-lg">
    
    <div class="relative w-full md:w-[320px] xl:w-[400px] overflow-y-auto shrink-0 h-full">
        <livewire:chat.chat-list />
    </div>

    <div class="hidden md:grid w-full border-l dark:border-l-gray-800 h-full relative overflow-y-auto" style="contain:content">

        <div class="m-auto text-center flex flex-col justify-center gap-3">
            <h4 class="font-medium text-lg dark:text-gray-400">{{ __('Choose a conversation to start chating') }}</h4>
        </div>

    </div>

</div>
