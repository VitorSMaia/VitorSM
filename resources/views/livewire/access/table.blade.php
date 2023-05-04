<div>
    <div class="mb-4 flex justify-between items-center">
        <div class="flex-1 pr-4">
            <div class="relative md:w-2/3">
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
        <div>
            Total: {{ count($this->state['access']) }}
        </div>
{{--        <div class="flex-1 pr-4">--}}
{{--            <div class="flex justify-end items-center">--}}
{{--                <button wire:click="openModal('xp.form')" class="hover:bg-green-500 hover:-translate-y-1 active:translate-y-1 bg-opacity-80 border border-emerald-500 px-3 py-2 rounded-md bg-green-400">Register</button>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>

    <div class="overflow-x-auto bg-white rounded-lg shadow overflow-y-auto relative max-h-[360px]">
        <table class="border-collapse table-auto w-full whitespace-no-wrap bg-white table-striped relative">
            <thead>
            <tr class="text-left">
                @foreach(array_keys($this->state['head']) as $itemHeading)
                    <th class="bg-gray-100 sticky top-0 border-b border-gray-200 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs">
                        {{ $itemHeading}}
                    </th>
                @endforeach
            </tr>
            </thead>
            <tbody>
            @foreach($this->state['access'] as $itemAccess)
                <tr>
                    <td class="border-dashed border-t border-gray-200 firstName">
                        <span class="text-gray-700 px-6 py-3 flex items-center" >{{ $itemAccess['ip'] }}</span>
                    </td>
                    <td class="border-dashed border-t border-gray-200 firstName">
                        <span class="text-gray-700 px-6 py-3 flex items-center" >{{ $itemAccess['countryName'] }}</span>
                    </td>
                    <td class="border-dashed border-t border-gray-200 firstName">
                        <span class="text-gray-700 px-6 py-3 flex items-center" >{{ $itemAccess['regionName'] }}</span>
                    </td>
                    <td class="border-dashed border-t border-gray-200 firstName">
                        <span class="text-gray-700 px-6 py-3 flex items-center" >{{ $itemAccess['cityName'] }}</span>
                    </td>
                    <td class="border-dashed border-t border-gray-200 firstName">
                        <span class="text-gray-700 px-6 py-3 flex items-center" >{{ $itemAccess['latitude'] }}</span>
                    </td>
                    <td class="border-dashed border-t border-gray-200 firstName">
                        <span class="text-gray-700 px-6 py-3 flex items-center" >{{ $itemAccess['longitude'] }}</span>
                    </td>
                    <td class="border-dashed border-t border-gray-200 firstName">
                        <span class="text-gray-700 px-6 py-3 flex items-center" >{{ (new \App\Helpers\Helper)->formatDate($itemAccess['created_at']) }}</span>
                    </td>


                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
