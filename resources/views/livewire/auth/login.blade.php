<div>
  <!-- Loading screen -->

    <div
        wire:loading wire:target="save"
        class="bg-opacity-70 transition duration-150 ease-in-out fixed z-10"
    >
        <div class="flex justify-center items-center w-screen h-screen">
            Loading.....
        </div>
    </div>
    <div class="flex justify-center items-center">
        <div class="w-max px-4 py-6 bg-white rounded-md">

            <!-- Brand -->

            <form wire:submit.prevent="save" class="space-y-5 ">
                <x-inputs.input class=" text-black" label="Email" model="email" required/>

                <x-inputs.input class="col-span-1 text-black" type="password" model="password" label="Password" required/>


                <div class="h-captcha" data-sitekey="395310db-8314-4cb0-8682-761098e56149"></div>

                <x-buttons.submit label="Login"  />
            </form>
        </div>
    </div>

</div>
