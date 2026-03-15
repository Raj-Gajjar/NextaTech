<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin Login</title>
<link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}">

<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-gray-100 via-gray-200 to-gray-300 min-h-screen flex items-center justify-center">

  <!-- Login Card -->
  <div class="bg-white shadow-xl rounded-xl p-8 w-full max-w-md relative overflow-hidden transition-transform duration-300 hover:-translate-y-2">
    
    <!-- Top Gradient Bar -->
    <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-yellow-400 via-orange-500 to-red-500"></div>

    <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">Admin Login</h2>

    <form method="POST" action="{{ route('login.submit') }}">
      @csrf

      <div class="mb-4">
        <input type="email" name="email" placeholder="Email" required
               class="w-full border border-gray-300 p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" value="{{old('email')}}">
          @error('email') <small>{{$message}}</small> @enderror
      </div>

      <div class="mb-4">
        <input type="password" name="password" placeholder="Password" required
               class="w-full border border-gray-300 p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
          @error('password') <small>{{$message}}</small> @enderror
            <!-- Error Message -->
            @if(session('error'))
              <small class="text-red-600 text-left mb-4">{{ session('error') }}</small>
            @endif
      </div>


      <button type="submit"
              class="bg-gradient-to-r from-blue-500 to-purple-500 text-white px-6 py-3 rounded-lg shadow hover:opacity-90 w-full mb-4 transition">
        Login
      </button>

      <div class="text-center text-gray-600">
        <a href="{{ route('register') }}" class="text-blue-600 hover:underline">Don't have an account? Register</a>
      </div>

    </form>

  </div>

</body>
</html>