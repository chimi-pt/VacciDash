<div>

    <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
        <div class="block mb-8">
            <a href="{{ route('vaccine.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Add Vaccine</a>
        </div>    
        <!--input class="form-control search-input" wire:model.debounce.500ms="searchTerm" type="text" placeholder="Search..."-->
        <table class="min-w-full divide-y divide-gray-200 w-full">
            <thead>
                @foreach ($headers as $key => $value)                    
                    <th scope="col" width="50" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        {{ $value }}
                    </th>
                @endforeach
                <th scope="col" width="200" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Actions
                </th>
            </thead>           
            <tbody class="bg-white divide-y divide-gray-200">
                @if(count($data))
                    @foreach ($data as $item)
                        <tr>
                            @foreach ($headers as $key => $value)
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                    {{ $item->$key }}
                                </td>                            
                            @endforeach
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                
                                <a href="{{ route('vaccine.edit', $item->$key) }}" class="text-indigo-600 hover:text-indigo-900 mb-2 mr-2">Edit</a>
                                <form class="inline-block" action="" method="POST" onsubmit="return confirm('Are you sure you want to delete');">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit" class="text-red-600 hover:text-red-900 mb-2 mr-2" value="Disable">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <!---tr><td colspan="{{ count($headers) }}"><h2>No Results Found!</h2></td></tr-->
                @endif
            </tbody>        
        </table> 
    </div>    
</div>
