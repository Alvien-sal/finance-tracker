<x-layouts.auth.simple>

    <div class="flex h-full w-full justify-center items-center">

        <div class="card bg-base-100 w-96 shadow-sm">    

            <div class="card-body">

                <div class="card-title">
                    <h1>Add expense</h1>
                </div>

                <form action="" class="flex gap-4 flex-col">

                    @csrf

                    <label for="">

                        <input type="text">

                        <span>Name of Expense</span>

                    </label>

                    <label for="">

                        <input type="text">

                        <span>Category</span>

                    </label>

                        <label for="">

                            <input type="text">

                            <span>Ammount</span>

                    </label>

                    <button type="submit" class="btn">
                        
                        Add Expense

                    </button>

                </form>

            </div>
            
    </div>

    </div>

</x-layouts.auth.simple>