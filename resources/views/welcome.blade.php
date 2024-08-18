<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite(['resources/scss/app.scss', 'resources/css/app.css', 'resources/js/app.js'])
    <style></style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap');
</head>

<body class="font-sans antialiased dark:text-black">
    <div>
        <x-navbar></x-navbar>
        <x-content></x-content>
        <x-support></x-support>
        <x-about></x-about>
        <x-event></x-event>
        <x-sponsorship-packages></x-sponsorship-packages>
        <x-footer></x-footer>
    </div>
    <script>
        const swiper = new Swiper('.swiper', {
            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
</body>

</html>
