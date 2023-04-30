<div>
    <div class="mb-4 flex justify-between items-center">
        <div class="flex-1 pr-4">
            <div class="relative md:w-1/3">
                <input type="search" wire:model="state.search"
                       class="w-full pl-10 pr-4 py-2 rounded-lg shadow focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                       placeholder="Search...">
                <div wire:click="$set('state.search', '')" class=" absolute top-0 left-0 inline-flex items-center p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-400" viewBox="0 0 24 24"
                         stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                         stroke-linejoin="round">
                        <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                        <circle cx="10" cy="10" r="7" />
                        <line x1="21" y1="21" x2="15" y2="15" />
                    </svg>
                </div>
            </div>
        </div>
        <div class="flex-1 pr-4">
            <div class="flex justify-end items-center">
                <button wire:click="openModal('users.form')" class="hover:bg-green-500 hover:-translate-y-1 active:translate-y-1 bg-opacity-80 border border-emerald-500 px-3 py-2 rounded-md bg-green-400">Cadastrar</button>
            </div>
        </div>
    </div>

    <div class="overflow-x-auto bg-white rounded-lg shadow overflow-y-auto relative max-h-[360px]">
        <table class="border-collapse table-auto w-full whitespace-no-wrap bg-white table-striped relative">
            <thead>
            <tr class="text-left">
                <th class="py-2 px-3 sticky top-0 border-b border-gray-200 bg-gray-100">
                    <label
                        class="text-teal-500 inline-flex justify-between items-center hover:bg-gray-200 px-2 py-2 rounded-lg cursor-pointer">
                        <input type="checkbox" class="form-checkbox focus:outline-none focus:shadow-outline" @click="selectAllCheckbox($event);">
                    </label>
                </th>
                @foreach(array_keys($this->state['head']) as $itemHeading)
                    <th class="bg-gray-100 sticky top-0 border-b border-gray-200 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs">
                        {{ $itemHeading}}
                    </th>
                @endforeach
                <th class="bg-gray-100 sticky top-0 border-b border-gray-200 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs">
                    Ações
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($this->state['users'] as $itemUser)
                <tr>
                    <td class="border-dashed border-t border-gray-200 px-3">
                        <label
                            class="text-teal-500 inline-flex justify-between items-center hover:bg-gray-200 px-2 py-2 rounded-lg cursor-pointer">
                            <input type="checkbox" class="form-checkbox rowCheckbox focus:outline-none focus:shadow-outline" :name="user.userId"
                                   @click="getRowDetail($event, user.userId)">
                        </label>
                    </td>
                    <td class="border-dashed border-t border-gray-200 firstName">
                        <span class="text-gray-700 px-6 py-3 flex items-center" >{{ $itemUser['name'] }}</span>
                    </td>
                    <td class="border-dashed border-t border-gray-200 emailAddress">
								<span class="text-gray-700 px-6 py-3 flex items-center">{{ $itemUser['email'] }}</span>
                    </td>

                    <td class="border-dashed border-t border-gray-200">
                        <div class="flex items-center justify-start gap-x-5">
                            <div class="flex group">
                                <a wire:click="openModal('users.form', {{ $itemUser['id'] }})" class="cursor-pointer text-gray-400 hover:text-yellow-500">
                                <span class="flex flex-col items-center">
                                    <!-- Icon -->
                                    <span class="text-gray-500 group-hover:text-gray-700
                                        transition-color duration-200 material-symbols-rounded">
                                            edit
                                    </span>

                                    <!-- Text -->
                                    <span class="text-xs transition-all duration-200">
                                        edit
                                    </span>
                                </span>
                                </a>
                            </div>
                            <div class="flex group">
                                <a wire:click="deleteUser({{ $itemUser['id'] }})" class="cursor-pointer text-gray-400 hover:text-red-500">
                                <span class="flex flex-col items-center">
                                    <!-- Icon -->
                                    <span class="text-gray-500 group-hover:text-gray-700
                                        transition-color duration-200 material-symbols-rounded">
                                            delete
                                    </span>

                                    <!-- Text -->
                                    <span class="text-xs transition-all duration-200">
                                        delete
                                    </span>
                                </span>
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
