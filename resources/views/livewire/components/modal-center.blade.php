<div>
    @if($show)
    <div class="py-12 bg-gray-700 bg-opacity-70 transition duration-150 ease-in-out z-10 absolute top-0 right-0 bottom-0 left-0" id="modal">
        <div role="alert" class="container mx-auto w-11/12 md:w-2/3 max-w-lg">
            <div class="relative py-8 px-5 md:px-10 bg-white shadow-md rounded border border-gray-400">
                @if($component)
                    @livewire($component, ['id' => $params])
                @endif
                <button wire:click="close" class="cursor-pointer absolute top-0 right-0 mt-4 mr-5 text-gray-400 hover:text-gray-600 transition duration-150 ease-in-out rounded focus:ring-2 focus:outline-none focus:ring-gray-600" onclick="modalHandler()" aria-label="close modal" role="button">
                    <span class="material-symbols-rounded">
                        close
                    </span>
                </button>
            </div>
        </div>
    </div>
    @endif
</div>
