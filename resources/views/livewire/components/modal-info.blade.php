<div>
    @if($show)
        <div class="py-12 bg-transparent bg-opacity-70 transition duration-150 ease-in-out z-10 fixed h-full top-10 left-0 bottom-0 right-0 " id="modal">
            <div role="alert" class="container mx-auto w-11/12 md:w-72  overflow-auto ">
                <div class="relative py-8 px-5 md:px-10 bg-white bg-opacity-10 shadow-md rounded border border-gray-400 shadow-md">
                    <div class="text-white text-center">
                        <span class="material-symbols-rounded p-1 rounded-full bg-green-500 border border-white text-6xl font-bold">
                            done
                        </span>
                        <p class="text-xl text-gray-400 font-semibold">Success!</p>
                        <p class="text-sm text-gray-500 font-light">Send Complete</p>
                    </div>
                    <button wire:click="close" class="cursor-pointer absolute top-0 right-0 mt-4 mr-5 text-gray-400 hover:text-gray-600 transition duration-150 ease-in-out rounded focus:ring-2 focus:outline-none focus:ring-gray-600" onclick="modalHandler()" aria-label="close modal" role="button">
                        <span class="material-symbols-rounded">
                            close
                        </span>
                    </button>
                </div>
            </div>
        </div>
    @endif
    <script>
        function closeTimeout() {
            Livewire.emit('close')
        }

        setTimeout(closeTimeout, 1000)


    </script>
</div>
