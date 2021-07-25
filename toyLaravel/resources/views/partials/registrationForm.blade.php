@extends('layouts.master')
@section('title', 'User Registration')
@section('content')
<div class="bg-grey-lighter min-h-screen flex flex-col">
    <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
        <div class="bg-white px-6 py-8 rounded shadow-md text-black w-full">
            <h1 class="mb-8 text-3xl text-center">Sign up</h1>
            <form action="/user/register" method="POST">
                @csrf
                <input
                    type="text"
                    class="block border border-grey-light w-full p-3 rounded mb-4 @error('username') border-red-500 @enderror"
                    name="username"
                    placeholder="Username"
                />
                @error('name')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                @enderror
                <input
                    type="text"
                    class="block border border-grey-light w-full p-3 rounded mb-4 @error('email') border-red-500 @enderror"
                    name="email"
                    placeholder="Email"
                />
                @error('email')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                @enderror
                <input
                    type="password"
                    class="block border border-grey-light w-full p-3 rounded mb-4 @error('password') border-red-500 @enderror"
                    name="password"
                    placeholder="Password"
                />
                @error('password')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                @enderror
                <button
                    type="submit"
                    class="w-full text-center py-3 rounded bg-green-500 text-white hover:bg-green-400 focus:outline-none my-1"
                >
                    Create Account
                </button>
            </form>

            <div class="text-center text-sm text-grey-dark mt-4">
                By signing up, you agree to the 
                <a class="no-underline border-b border-grey-dark text-grey-dark" href="#">
                    Terms of Service
                </a> and 
                <a class="no-underline border-b border-grey-dark text-grey-dark" href="#">
                    Privacy Policy
                </a>
            </div>
        </div>

        <div class="text-grey-dark mt-6">
            Already have an account? 
            <a class="no-underline border-b border-blue text-blue" href="../login/">
                Log in
            </a>.
        </div>
    </div>
</div>
@endsection