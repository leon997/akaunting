<html>

    <head>
        <link rel="stylesheet" href="{{ asset('public/css/custom_loading.css?v=' . version('short')) }}" type="text/css">

        <!-- Favicon -->
        <link rel="icon" href="{{ asset('public/img/favicon1.png') }}" type="image/png">

        <!--Icons-->
        <link rel="stylesheet" href="{{ asset('public/css/fonts/material-icons/style.css?v=' . version('short')) }}" type="text/css">

         <!-- Font -->
        <link rel="stylesheet" href="{{ asset('public/vendor/quicksand/css/quicksand.css?v=' . version('short')) }}" type="text/css">

        <!-- Css -->
        <link rel="stylesheet" href="{{ asset('public/css//third_party/swiper-bundle.min.css?v=' . version('short')) }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('public/css//third_party/vue-html-editor.css?v=' . version('short')) }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('public/css/element.css?v=' . version('short')) }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('public/css/app.css?v=' . version('short')) }}" type="text/css">
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    </head>
    <body class="bg-mainbg-sidebar">
        <div class="relative flex min-h-screen flex-col items-center justify-center overflow-hidden py-6 sm:py-12">
            <div class="max-w-xl px-5 text-center">
            <h2 class="mb-2 text-[35px] font-bold text-white">Preverite e-poštni nabiralnik</h2>
            <p class="mb-1 text-lg text-gray-300">Poslali smo vam potrditveno e-poštno sporočilo s katerim lahko potrdite svoj račun in pričnete nemoteno uporabljati aplikacijo. <br><br> Če emaila niste prejeli, preverite mapo z nezaželeno pošto oz. kliknite na gumb spodaj in vam bomo poslali novega.
            </p>
            <lottie-player src="https://lottie.host/4698f195-1287-4d92-ab39-561e3e5b4676/4Mj6uWNQql.json" background="transparent" speed="1" style="width: 300px; height: 300px;" class="inline-block" loop autoplay></lottie-player>            <form method="post" action={{ route('verification.send') }}>
                @csrf
                <button type="submit" class="inline-block w-60 bg-purple px-3 py-2 font-medium text-white shadow-md shadow-indigo-500/20 hover:bg-purple-700 rounded-lg disabled:bg-purple-700">Pošlji znova</button>
            </form>
            </div>
        </div>
    </body>

</html>

