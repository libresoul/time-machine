<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/main.css">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=MedievalSharp&family=Spectral:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
</head>

<body class="font-['Spectral'] bg-slate-900 text-slate-100 text-xl flex flex-col min-h-screen justify-center items-center">
    <nav class="font-['MedievalSharp'] fixed top-0 h-20 bg-slate-950 w-full z-40 text-pink-50">
        <div class="max-w-screen-xl items-center justify-center flex gap-10 p-4 rounded min-w-full">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <span class="text-3xl font-semibold whitespace-nowrap hover:scale-125 transition-all duration-500">Time Portal</span>
            </a>
            <button id="menu-toggle" class="text-pink-200 md:hidden focus:outline-none hover:scale-125 transition-all duration-500">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
            <div class="hidden md:flex md:items-center md:w-auto" id="navbar-menu">
                <ul class="flex flex-col md:flex-row md:space-x-8 font-medium">
                    <li><a href="/" class="block text-xl md:hover:bg-transparent md:hover:scale-125 transition-all duration-500">Home</a></li>
                    <li><a href="browse.php" class="block text-xl md:hover:bg-transparent md:hover:scale-125 transition-all duration-500">Browse</a></li>
                    <li><a href="about.php" class="block text-xl md:hover:bg-transparent md:hover:scale-125 transition-all duration-500">About</a></li>
                </ul>
            </div>
            <div class="hidden md:flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse bg-slate-900 rounded">
                <a href="create.php"><button type="button">Add New Page</button></a>
            </div>
        </div>
    </nav>