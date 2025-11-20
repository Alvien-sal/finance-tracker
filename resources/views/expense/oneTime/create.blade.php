<x-layouts.auth.simple>

    <div class="flex h-full w-full justify-center items-center">

        <div class="card bg-base-100 w-96 shadow-sm">    

            <div class="card-body">

                <div class="card-title">
                    <h1>Add expense</h1>
                </div>

                <form action="{{ route('oneTime.Store') }}" class="flex gap-4 flex-col">

                    @csrf

                    <label for="">

                        <input type="text" name="name">

                        <span>Name of Expense</span>

                        @error('name')
                            <div>
                                {{ $message }}
                            </div>
                        @enderror

                    </label>

                    <label for="">

                        <select name="category" id="category" class="form-control">

                            <option value="" selected disable>Choose a category</option>
                            
                            @foreach ( $cats as $cat )
                                <option value="{{ $cat->value }}">{{ $cat->value }}</option>
                            @endforeach


                        </select>
                        

                        <span>Category</span>

                        @error('category')
                            <div>
                                {{ $message }}
                            </div>
                        @enderror

                    </label>

                        <label for="">

                            <input type="number" name='amount'>

                            <span>Amount</span>

                        @error('amount')
                            <div>
                                {{ $message }}
                            </div>
                        @enderror

                    </label>

                    <button type="submit" class="btn">
                        
                        Add Expense

                    </button>

                </form>

            </div>
            
    </div>

    </div>

</x-layouts.auth.simple>