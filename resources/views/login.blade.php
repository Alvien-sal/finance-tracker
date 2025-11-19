<x-layouts.app> 

    <div class=" w-full h-full flex flex-col justify-center items-center">

        <div class="card bg-base-100 border-2 p-2">
                
            <div class="card-body">

                <h1 class="card-title text-xl">
                    Login As 
                </h1>

                 <form method="POST" action="\login" class="flex flex-col gap-4 ">

                        @csrf

                    

                            <label>

                                <input type="email"
                                    name="email" 
                                    class="login"
                                    required
                                    autofocus   
                                >
                                
                                <span>Email</span>

                                @error('email')
                                    {{$message}}
                                @enderror

                            </label>

                            <label>
                                <input type="password"
                                name="password"
                                class="login"
                                required
                                autofocus>

                                <span>Password</span>

                                @error('password')
                                    {{$message}}
                                @enderror
                            </label>
                            
                            <div class="form-control mt-8">
                                <button type="submit" class="btn btn-primary btn-sm w-full">
                                    Log in
                                </button>
                            </div>
                    </form>
                    
                    <span>
                        No Account?
                        <a href="/register" class="link link-primary"> Register</a>
                    </span>
            </div>
        </div>

    </div>
</x-layouts.app>