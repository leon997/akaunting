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
    </head>
    <body class="bg-mainbg-sidebar">
        <div class="relative flex min-h-screen flex-col items-center justify-center overflow-hidden py-6 sm:py-12">
            <div class="max-w-xl px-5 text-center">
            <h2 class="mb-2 text-[42px] font-bold text-white">Preverite e-poštni nabiralnik</h2>
            <p class="mb-2 text-lg text-gray-300">Poslali smo vam potrditveni email s katerim lahko potrdite svoj račun in pričnete nemoteno uporabljati aplikacijo.</p>
            <form method="post" action={{ route('verification.send') }}>
                <button type="submit" class="mt-3 inline-block w-96 rounded bg-purple px-5 py-3 font-medium text-white shadow-md shadow-indigo-500/20 hover:bg-purple-300">Pošlji znova →</button>
            </form>
            </div>
        </div>
    </body>

</html>

