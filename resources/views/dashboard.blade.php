

<x-layouts.auth.simple> 
    
    <div class="flex flex-row p-4">
        
        <div class="flex-1">
            
            <form class="flex justify-center" action="{{ route('oneTime.Create') }}">
            
                <button type="submit" class="btn">

                  +  Add Budget

                </button>

            </form>

        </div>

        <div class="flex-4 flex flex-col gap-4">
            @foreach ($expenses as $expense )
                <div class="card bg-base-100 w-96 shadow-sm">

                    <div class="card-body">
                        <div class="card-title">
                            {{ $expense->name }}
                        </div>
                        
                        <div class="text-sx">
                            Category: {{ $expense->category }}
                        </div>
                        
                        <div class="font-bold">
                            ${{ $expense->amount }}
                        </div>
                        
                    </div>

                

                </div>
            @endforeach
        </div>

    </div>

</x-layouts.auth.simple> 