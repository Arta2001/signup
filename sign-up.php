<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign up</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body> 
    <div class="bg-orange-100 w-full flex items-center justify-center">
            <div class="w-full py-8"> 

                <h1 class="text-3xl flex items-center justify-center font-bold text-orange-900">Website Logo</h1>
                <div class="flex items-center justify-center space-x-2">
                </div>
                <div class="bg-orange-50 w-5/6 md:w-3/4 lg:w-2/3 xl:w-[500px] 2xl:w-[550px] mt-8 mx-auto px-16 py-8 rounded-lg shadow-2xl">

                    <h2 class="text-center text-2xl font-bold text-orange-900">Sign Up</h2>
                 
                    <form class="my-8 text-sm">
                        <div class="flex flex-col my-4">
                            <label for="name" class="text-orange-900">Name</label>
                            <input type="text" name="name" id="name" class="mt-2 p-2  border border-gray-300  focus:border-gray-300  text-gray-900" placeholder="Enter your name">
                        </div>
                        <div class="flex flex-col my-4">
                            <label for="name" class="text-orange-900">Lastname</label>
                            <input type="text" name="name" id="name" class="mt-2 p-2 border  border-gray-300 focus:border-gray-300  text-gray-900" placeholder="Enter your Lastname">
                        </div>
                        <div class="flex flex-col my-4">
                            <label for="email" class="text-orange-900">Email Address</label>
                            <input type="email" name="email" id="email" class="mt-2 p-2  border border-gray-300  focus:border-gray-300  text-gray-900" placeholder="Enter your email">
                        </div>
                        
                        <div class="flex flex-col my-4">
                            <label for="password" class="text-orange-900">Password</label>
                            <div  class="relative flex items-center mt-2">
                                <input :type=" show ? 'text': 'password' " name="password" id="password" class="flex-1 p-2 pr-10  border border-gray-300 focus:border-gray-300  text-gray-900" placeholder="Enter your password" type="password">
                               
                            </div>
                        </div>

                        <div class="flex flex-col my-4">
                            <label for="password_confirmation" class="text-orange-900">Password Confirmation</label>
                            <div  class="relative flex items-center mt-2">
                                <input :type=" show ? 'text': 'password' " name="password_confirmation" id="password_confirmation" class="flex-1 p-2 pr-10 border border-gray-300  text-gray-900" placeholder="Enter your password again" type="password">
                               
                            </div>
                        </div>

                        <div class="flex items-center">
                            <input type="checkbox" name="remember_me" id="remember_me" class="mr-2 focus:ring-0 rounded">
                            <label for="remember_me" class="text-orange-900">I accept the <a href="#" class="text-orange-600 hover:text-orange-600 hover:underline">terms</a></label>
                        </div>
                    <br>
                        <div class="register">
                            <button type="submit" class="bg-orange-900 w-full text-gray-100 py-2 rounded hover:bg-orange-700 ">Register</button>
                        </div>
                    </form>
                
                    <div class="text-sm">
                        <a href="#" class="flex items-center justify-center space-x-2 text-white my-2 py-2 bg-orange-900 hover:bg-orange-700 rounded">
                            <span>Sign up with Google</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>