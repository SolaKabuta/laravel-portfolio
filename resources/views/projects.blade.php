<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    <script src="https://cdn.tailwindcss.com"></script>
    <title>projects</title>
</head>
<body class="text-white bg-black max-h-screen">
<div class="container relative">
        <nav class="flex flex-row pt-5 pb-5">
            <p><a id="solakab" class="gap-56" href="{{ route('welcome') }}">Sola Kabuta</a></p>
            <ul class="absolute right-0 flex flex-row gap-5 justify-end">
            <li><a id="projects" href="{{ route('welcome') }}">Home</a></li>
                <li><a id="projects" href="{{ route('projects') }}">Projects</a></li>
                <li><a id="about" href="{{ route('about') }}">About</a></li>
                <li><a id="contact" href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </nav>
    </div>
    <footer>
        <div class="container">
            <div class="flex absolute bottom-0 right-0 left-0 justify-center text-center gap-5">
                <p><a href="https://www.linkedin.com/in/sola-kabuta/">⏐ Linkedin ⏐</a></p>
                <p><a href="https://github.com/SolaKabuta">⏐ Github ⏐</a></p>
                <p><a href="https://www.behance.net/KamKabuta">⏐ Behance ⏐</a></p>
            </div>
        </div>


    </footer>
</body>
</html>