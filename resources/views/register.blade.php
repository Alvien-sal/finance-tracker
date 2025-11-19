<x-layouts.app> 

    <div class=" w-full h-full flex flex-col justify-center items-center">

        <div class="card bg-base-100 border-2 p-2">
                
            <div class="card-body">

                <h1 class="card-title text-xl">
                    Register
                </h1>

                 <form method="POST" action="\register" class="flex flex-col gap-4 ">

                        @csrf
                            <label>

                                <input type="email"
                                    name="email"
                                    class="border-2"
                                    required
                                    autofocus
                                >
                                <span>Email</span>

                            </label>

                            <label>
                                <input type="password"
                                name="login"
                                class="border-2"
                                required
                                autofocus>

                                <span>Password</span>
                            </label>
                            
                            <div class="form-control mt-8">
                                <button type="submit" class="btn btn-primary btn-sm w-full">
                                    Sign up
                                </button>
                            </div>
                            
                            <span>

                                have an account?

                                <a href="/login" class="link link-primary"> Login </a>
                            </span>
                            
                    </form>

            </div>
        </div>

    </div>
</x-layouts.app>