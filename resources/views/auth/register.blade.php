<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin Register</title>
<link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}">

<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-gray-100 via-gray-200 to-gray-300 min-h-screen flex items-center justify-center">

  <!-- Register Card -->
  <div class="bg-white shadow-xl rounded-xl p-8 w-full max-w-md relative overflow-hidden transition-transform duration-300 hover:-translate-y-2">

    <!-- Top Gradient Bar -->
    <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-yellow-400 via-orange-500 to-red-500"></div>

    <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">Admin Register</h2>

    
 

    <form method="POST" action="{{ route('register.submit') }}">
      @csrf

      <div class="mb-4">
        <input type="text" name="name" placeholder="Name" required
               class="w-full border border-gray-300 p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" value="{{old('name')}}">
              <!-- Error Messages -->
              @error('name')
                  <small class="text-red-600 text-left mt-2">{{ $message }}</small>
              @enderror
      </div>

      <div class="mb-4">
        <input type="email" name="email" placeholder="Email" required
               class="w-full border border-gray-300 p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" value="{{old('email')}}">
              <!-- Error Messages -->
              @error('email')
                  <small class="text-red-600 text-left mt-2">{{ $message }}</small>
              @enderror   
      </div>

      <div class="mb-4">
        <input type="password" name="password" placeholder="Password" required
               class="w-full border border-gray-300 p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
              <!-- Error Messages -->
              @error('password')
                  <small class="text-red-600 text-left mt-2">{{ $message }}</small>
              @enderror
      </div>

      <div class="mb-4">
        <input type="password" name="password_confirmation" placeholder="Confirm Password" required
               class="w-full border border-gray-300 p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
               @error('password_confirmation')
                  <small class="text-red-600 text-left mt-2">{{ $message }}</small>
              @enderror
      </div>

      <button type="submit"
              class="bg-gradient-to-r from-blue-500 to-purple-500 text-white px-6 py-3 rounded-lg shadow hover:opacity-90 w-full mb-4 transition">
        Register
      </button>

    </form>

  

    <div class="text-center text-gray-600">
      <a href="{{ route('login') }}" class="text-blue-600 hover:underline">Already have an account? Login</a>
    </div>

  </div>

</body>
</html>