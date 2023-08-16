<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from code-theme.com/html/findhouses/{{ Route('index') }} by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Aug 2023 05:51:54 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>WorkVista</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{ asset('font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome-5-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="{{ asset('css/search.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos2.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lightcase.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/video.css') }}">
    <link rel="stylesheet" id="color" href="{{ asset('css/colors/pink.css') }}">
    @yield('csscontent')
</head>

<body class="homepage-9 hp-6 hd-white hmp7 mh">
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- START SECTION HEADINGS -->
        <!-- Header Container
        ================================================== -->

        <header id="header-container" class="container-fluid px-5 px-5">
            <!-- Header -->
            
            <div id="header">
                <div class="container container-header">
                    <!-- Left Side Content -->
                    <div class="left-side">
                        <!-- Logo -->
                        <div id="logo">
                            <a href="{{ Route('index') }}">
                                <img src="{{ asset('images/logo-red.svg') }}" alt="">
                                {{-- <svg xmlns="http://www.w3.org/2000/svg" width="230" height="50" fill-rule="evenodd" xmlns:v="https://vecta.io/nano">
                                    <path fill="#6762ac" d="M13.13 5.176C11.569 3.227 9.34 1.65 6.075.992L7.988 5.52c3.083-1.183 6.268 1.133 7.963 5.249-.725-2.047-1.435-3.864-2.821-5.593z"></path>
                                    <path fill="#f6bc15" d="M6.075.992c3.265.658 5.494 2.234 7.055 4.184 1.105 1.378 1.88 2.979 2.463 4.664 1.889 4.595 2.409 10.202 2.682 14.787 1.7-.559 3.381-1.163 5.057-1.755C22.155 12.75 19.175 2.438 6.075.992z"></path>
                                    <path fill="#27a64a" d="M43.426 26.659c-2.502 0-4.862.691-6.844 1.875l1.929 4.442c2.907-2.28 7.828-2.027 10.284.522 4.146 3.636 2.547 11.59-4.159 12.189 5.5.006 9.486-4.372 10.136-8.688.081-5.495-4.903-10.34-11.346-10.34z"></path>
                                    <path fill="#f4bb18" d="M18.055 29.924l-.003.043c-.528 7.821-2.342 12.43-4.317 14.913-4.437 5.578-13.111.945-12.618-6.053-.021.127-.032.255-.043.379-.042.576-.096 1.113-.063 1.69.242 4.226 3.878 8.311 8.3 8.066 4.082-.227 7.647-2.721 10.191-6.662 2.452-3.796 3.694-8.879 3.959-13.789l.016-.295-5.422 1.708z"></path>
                                    <path fill="#6763ac" d="M26.772 21.76l-3.44 1.112-5.013 1.739c-6.382 2.275-10.384 4.144-13.452 7.157-2.092 2.193-3.26 4.498-3.686 6.682-1.13 5.786 4.948 10.817 10.069 8.394-.47.172-1.743.424-2.797-.039-4.431-1.712-5.739-11.809 9.602-16.881l5.421-1.707 3.31-.963 1.656-.372-.263-5.697-1.407.575zM45.291 2.081c3.062 2.298 1.485 7.06-.243 9.368l-.567.769c-3.074 3.946-7.455 6.11-12.167 7.59-.168 1.877-.235 3.825-.189 5.774C50.98 18.65 51.276 5.794 45.291 2.081z"></path>
                                    <path fill="#0887c5" d="M54.767 36.955c-.88 5.708-5.671 9.08-10.248 9.455-2.15.07-4.388-.692-6.395-2.477-7.866-6.982-7.261-28.633-2.552-36.108 5.7-9.048 13.709-2.635 8.945 4.4a9.34 9.34 0 0 0 .612-.827c6.083-7.989-1.893-14.074-10.094-7.819-2.236 1.707-4.147 4.185-5.58 7.204-5.794 12.215-2.99 34.252 11.96 37.889 1.28.313 2.548.41 3.757.281 6.129-.653 9.871-6.102 9.595-11.998z"></path>
                                    <path class="hdnmnu" fill="#273677" d="M79.615 10.855v6.887h-6.357v-5.193c0-1.693-3.784-1.693-3.784-1.693v14.741c0 1.694 3.784 1.694 3.784 1.694v-6.843h6.357v5.148c0 1.694 3.783 1.694 3.783 1.694V12.548c0-1.693-3.783-1.693-3.783-1.693zm7.652 3.212h2.354v-2.112c0-.33-.484-.836-1.144-.836h-2.375v2.134c-.001.396.483.814 1.165.814zm-1.232 1.254v10.21c0 1.694 3.695 1.694 3.695 1.694v-10.21c0-1.628-3.387-1.694-3.695-1.694zm12.955-5.28v4.709c0 .439.154 1.144.154 1.144s-1.078-.682-2.375-.682c-2.596 0-4.839 1.54-4.839 4.07v3.961c0 2.618 1.979 4.092 5.389 4.092.792 0 2.045-.374 3.409-.374.748 0 1.32.022 1.958.374v-15.38c0-1.893-3.322-1.914-3.696-1.914zm0 14.654s-.792.132-1.408.132c-1.496 0-1.958-.683-1.958-1.914v-3.301c0-1.254.594-1.805 1.43-1.805.99 0 1.936.639 1.936 1.585v5.303zm12.954-14.654v4.709c0 .439.154 1.144.154 1.144s-1.078-.682-2.376-.682c-2.595 0-4.839 1.54-4.839 4.07v3.961c0 2.618 1.979 4.092 5.389 4.092.792 0 2.045-.374 3.409-.374.748 0 1.32.022 1.957.374v-15.38c.001-1.893-3.32-1.914-3.694-1.914zm0 14.654s-.792.132-1.408.132c-1.496 0-1.958-.683-1.958-1.914v-3.301c0-1.254.594-1.805 1.43-1.805.99 0 1.936.639 1.936 1.585v5.303zm11.788-.044c-1.342 0-2.2-.551-2.2-1.782v-.353s.683.353 1.804.353c3.674 0 4.664-1.805 4.664-3.741 0-2.354-1.452-3.916-4.861-3.916s-5.302 1.562-5.302 4.137V23.2c0 2.596 2.024 4.136 5.785 4.136 2.794 0 4.575-1.254 4.575-2.86 0-.616-.264-1.275-.792-2.002-.022 1.143-1.385 2.177-3.673 2.177zm-2.2-4.973c0-1.211.353-1.871 1.452-1.871.968 0 1.342.528 1.342 1.32 0 .946-.748 1.21-1.54 1.21-.462 0-.924-.088-1.254-.176v-.483zm14.406-4.467c-1.166 0-2.2.462-3.277.462-1.452 0-2.42-.528-2.42-.528v10.386c0 1.694 3.695 1.694 3.695 1.694v-9.176s.924-.198 1.694-.198c1.254 0 1.672.551 1.672 1.585v6.095c0 1.65 3.695 1.694 3.695 1.694v-8.119c.001-3.059-2.595-3.895-5.059-3.895zm23.753 3.763c1.034-.396 1.76-1.937 1.76-3.213v-.44c0-3.212-2.573-4.246-6.137-4.246h-5.521v14.302c0 1.672 2.816 1.694 2.816 1.694h2.705c3.762 0 6.357-1.232 6.357-4.291v-.483c.001-1.365-.77-2.839-1.98-3.323zm-6.115-5.215h1.738c1.584 0 2.354.418 2.354 1.672 0 1.452-.572 2.244-2.178 2.244h-1.914v-3.916zm1.738 10.65h-1.738v-4.071h1.914c1.672 0 2.398.639 2.398 2.112.001 1.43-.77 1.959-2.574 1.959zm14.01-9.198c-1.386 0-2.508.462-3.52.462-.55 0-1.145-.154-1.936-.528v10.386c0 1.694 3.695 1.694 3.695 1.694v-9.153c1.649-.374 3.674-.044 3.674 2.024 0 0 1.342-1.078 1.342-2.619.001-1.738-1.693-2.266-3.255-2.266zm8.489 0c-1.518 0-4.642.439-4.642 2.662 0 .682.198 1.475 1.012 2.553 0-2.091 1.893-2.597 3.586-2.597 1.43 0 1.826.616 1.826 1.145-1.012 1.474-6.731.726-6.731 4.752 0 2.772 2.376 3.608 4.839 3.608 1.298 0 2.529-.396 3.695-.396.616 0 1.276.065 1.893.396V19.15c0-2.553-1.893-3.939-5.478-3.939zm1.848 9.395s-.813.242-1.606.242c-.747 0-1.495-.22-1.495-1.254 0-1.408 2.508-1.056 3.102-1.98v2.992zm7.169-10.539h2.354v-2.112c0-.33-.484-.836-1.144-.836h-2.376v2.134c0 .396.484.814 1.166.814zm-1.232 1.254v10.21c0 1.694 3.695 1.694 3.695 1.694v-10.21c0-1.628-3.387-1.694-3.695-1.694zm11.878-.11c-1.166 0-2.2.462-3.277.462-1.452 0-2.42-.528-2.42-.528v10.386c0 1.694 3.695 1.694 3.695 1.694v-9.176s.925-.198 1.694-.198c1.254 0 1.672.551 1.672 1.585v6.095c0 1.65 3.695 1.694 3.695 1.694v-8.119c0-3.059-2.596-3.895-5.059-3.895zm10.446 3.586c0-.66.902-.924 2.045-.924 1.519 0 3.389.528 3.389 1.805.703-.814 1.033-1.563 1.033-2.179 0-1.452-1.804-2.288-4.795-2.288-3.41 0-5.301 1.21-5.301 3.828 0 4.863 7.148 2.553 7.148 4.467 0 1.1-1.145 1.21-1.848 1.21-1.188 0-3.586-.132-3.674-2.267-.945.858-1.386 1.65-1.386 2.354 0 1.496 1.892 2.53 5.06 2.53 3.651 0 5.477-1.386 5.477-3.718 0-5.345-7.148-3.079-7.148-4.818z"></path>
                                    <path class="hdnmnusub" d="M223.548 4.553h-.033c-3.071 0-5.521 2.411-5.521 5.494a5.49 5.49 0 0 0 5.521 5.522c3.072 0 5.488-2.444 5.488-5.522 0-3.083-2.417-5.494-5.455-5.494zm0 9.879c-2.385 0-4.183-1.941-4.183-4.385 0-2.412 1.798-4.389 4.117-4.389h.032c2.353 0 4.116 1.977 4.116 4.421.001 2.412-1.763 4.387-4.082 4.353zm1.304-4.235v-.061c.533-.179.953-.564.953-1.16 0-.478-.195-.833-.477-1.043-.309-.238-.701-.385-1.572-.385-.757 0-1.347.088-1.768.146v4.883h1.066v-1.935h.506c.589 0 .869.237.953.744.141.596.225 1.013.365 1.19h1.123c-.084-.178-.197-.446-.337-1.19-.14-.654-.363-1.042-.812-1.189zm-1.264-.359h-.505V8.441c.112-.03.31-.061.589-.061.674 0 .982.298.982.744 0 .507-.476.714-1.066.714zM87.09 33.446h-3.444v8.451c0 .624.962.649 1.066.649h2.378c1.911 0 3.717-.649 3.717-3.003v-3.095c0-2.353-1.807-3.002-3.717-3.002zm2.625 5.968c0 1.689-1.157 2.236-2.625 2.236h-2.353v-7.308h2.353c1.469 0 2.625.533 2.625 2.224v2.848zm3.729-5.787h-.819v.858c0 .13.104.233.234.233h.806v-.857a.24.24 0 0 0-.221-.234zm-.819 2.328v6.033c0 .649 1.04.649 1.04.649v-6.032c.001-.663-1.04-.65-1.04-.65zm3.51 1.963c0-.78.299-1.118 1.507-1.118 1.339 0 2.028.48 2.028 1.378.26-.403.377-.754.377-1.04 0-.885-1.066-1.248-2.405-1.248-1.65 0-2.547.715-2.547 2.028 0 2.729 4.186.871 4.186 2.743 0 .649-.299 1.131-1.638 1.131s-2.157-.468-2.157-1.378c-.247.39-.351.715-.351 1.001 0 .91 1.144 1.287 2.508 1.287 1.781 0 2.678-.793 2.678-1.977-.001-3.015-4.186-1.26-4.186-2.807zm8.24 3.874c-1.209 0-1.716-.468-1.716-1.378v-2.236c0-.91.507-1.378 1.716-1.378.936 0 1.819.468 1.819 1.378 1.04-1.509-.377-2.288-1.897-2.288-1.651 0-2.678.779-2.678 2.093v2.627c0 1.313 1.027 2.093 2.678 2.093s3.197-.78 2.158-2.288c-.001.91-.95 1.377-2.08 1.377zm6.523-5.902c-1.911 0-2.807.779-2.807 2.093v2.627c0 1.313.896 2.093 2.807 2.093s2.808-.78 2.808-2.093v-2.627c0-1.314-.897-2.093-2.808-2.093zm1.768 4.525c0 .91-.299 1.443-1.768 1.443s-1.768-.533-1.768-1.443v-2.236c0-.91.299-1.443 1.768-1.443s1.768.533 1.768 1.443v2.236zm6.719-3.81l-.26 2.171c-.221 1.808-1.456 2.874-1.456 2.874s-1.235-1.066-1.456-2.874l-.26-2.171c-.078-.65-1.079-.65-1.079-.65l.26 2.535c.299 2.965 2.508 4.278 2.534 4.291.026-.013 2.235-1.326 2.534-4.291l.26-2.535c.001 0-.999 0-1.077.65zm5.003 5.187c-1.208 0-1.716-.468-1.716-1.378v-.949c.313.221.988.312 1.43.312 1.911 0 2.626-.871 2.626-1.924 0-1.184-.819-1.963-2.47-1.963s-2.625.779-2.625 2.093v2.627c0 1.313 1.026 2.093 2.678 2.093 1.273 0 2.495-.468 2.495-1.378 0-.273-.104-.572-.338-.91 0 .91-.949 1.377-2.08 1.377zm-1.716-3.614c0-.91.43-1.443 1.586-1.443 1.066 0 1.43.455 1.43 1.118 0 .637-.429 1.014-1.664 1.014-.559 0-1.338-.208-1.352-.233v-.456zm8.187-2.288c-.715 0-1.156.272-1.702.272a1.68 1.68 0 0 1-.793-.208v6.033c0 .649 1.04.649 1.04.649v-5.604s.559-.221 1.248-.221c.754 0 1.377.338 1.377 1.053.248-.338.364-.61.364-.923.001-.7-.623-1.051-1.534-1.051zm7.981-2.444h-2.288v8.581c0 .649 1.092.649 1.092.649v-3.237h1.196c1.91 0 3.587-.624 3.587-2.886v-.234c0-2.327-1.677-2.873-3.587-2.873zm0 5.096h-1.196v-4.2h1.196c1.469 0 2.495.403 2.495 2.094 0 1.82-1.026 2.106-2.495 2.106zm7.81-2.652c-1.911 0-2.809.779-2.809 2.093v2.627c0 1.313.897 2.093 2.809 2.093s2.807-.78 2.807-2.093v-2.627c0-1.314-.896-2.093-2.807-2.093zm1.768 4.525c0 .91-.299 1.443-1.768 1.443s-1.768-.533-1.768-1.443v-2.236c0-.91.299-1.443 1.768-1.443s1.768.533 1.768 1.443v2.236zm3.378-2.497c0-.78.3-1.118 1.508-1.118 1.339 0 2.028.48 2.028 1.378.26-.403.377-.754.377-1.04 0-.885-1.066-1.248-2.405-1.248-1.65 0-2.548.715-2.548 2.028 0 2.729 4.186.871 4.186 2.743 0 .649-.299 1.131-1.638 1.131s-2.157-.468-2.157-1.378c-.247.39-.352.715-.352 1.001 0 .91 1.145 1.287 2.509 1.287 1.78 0 2.678-.793 2.678-1.977-.001-3.015-4.186-1.26-4.186-2.807zm6.265 0c0-.78.299-1.118 1.508-1.118 1.338 0 2.027.48 2.027 1.378.26-.403.377-.754.377-1.04 0-.885-1.066-1.248-2.404-1.248-1.651 0-2.548.715-2.548 2.028 0 2.729 4.185.871 4.185 2.743 0 .649-.299 1.131-1.637 1.131s-2.158-.468-2.158-1.378c-.247.39-.351.715-.351 1.001 0 .91 1.144 1.287 2.509 1.287 1.78 0 2.678-.793 2.678-1.977-.001-3.015-4.186-1.26-4.186-2.807zm6.432-4.291h-.819v.858c0 .13.104.233.234.233h.807v-.857c0-.116-.105-.234-.222-.234zm-.819 2.328v6.033c0 .649 1.041.649 1.041.649v-6.032c0-.663-1.041-.65-1.041-.65zm5.797-.065c-1.572 0-2.027.715-2.027.715s.13-.299.13-1.184v-1.807c0-.793-.948-.78-1.04-.78v9.4c.962.104 1.378.468 2.482.468 1.781 0 2.73-.754 2.73-2.067v-2.691c0-1.287-1.053-2.054-2.275-2.054zm1.234 4.55c0 .949-.377 1.418-1.715 1.418-.975 0-1.417-.325-1.417-.325V38.01c0-.754.87-1.274 1.729-1.274.806 0 1.403.429 1.403 1.404v2.3zm2.729-4.485v6.033c0 .649 1.041.649 1.041.649v-6.032c0-.663-1.041-.65-1.041-.65zm.819-2.328h-.819v.858c0 .13.104.233.234.233h.807v-.857c0-.116-.105-.234-.222-.234zm3.015 6.748v-6.917c0-.637-.975-.65-1.039-.65v7.983c0 .988.377 1.846 1.209 1.846.233 0 .493-.091.766-.324-.702 0-.936-1.157-.936-1.938zm2.703-6.748h-.818v.858c0 .13.104.233.234.233h.805v-.857c-.001-.116-.104-.234-.221-.234zm-.819 2.328v6.033c0 .649 1.039.649 1.039.649v-6.032c0-.663-1.039-.65-1.039-.65zm5.25 5.837c-1.026 0-1.352-.611-1.352-1.547v-3.107h2.066c.637 0 .65-.897.65-.897h-2.717v-1.079c0-.65-1.039-.663-1.039-.663v6.111c0 1.313.896 2.093 2.287 2.093 1.053 0 2.119-.442 2.119-1.326 0-.273-.104-.598-.352-.962.002.883-.765 1.377-1.662 1.377zm3.821-8.165h-.818v.858c0 .13.104.233.234.233h.806v-.857c-.001-.116-.105-.234-.222-.234zm-.819 2.328v6.033c0 .649 1.04.649 1.04.649v-6.032c0-.663-1.04-.65-1.04-.65zm5.485 5.837c-1.209 0-1.715-.468-1.715-1.378v-.949c.312.221.987.312 1.43.312 1.91 0 2.625-.871 2.625-1.924 0-1.184-.818-1.963-2.47-1.963s-2.626.779-2.626 2.093v2.627c0 1.313 1.027 2.093 2.678 2.093 1.274 0 2.496-.468 2.496-1.378 0-.273-.104-.572-.338-.91 0 .91-.949 1.377-2.08 1.377zm-1.715-3.614c0-.91.428-1.443 1.585-1.443 1.065 0 1.43.455 1.43 1.118 0 .637-.429 1.014-1.663 1.014-.56 0-1.34-.208-1.352-.233v-.456zm6.342-.26c0-.78.299-1.118 1.508-1.118 1.338 0 2.027.48 2.027 1.378.26-.403.377-.754.377-1.04 0-.885-1.066-1.248-2.404-1.248-1.651 0-2.548.715-2.548 2.028 0 2.729 4.185.871 4.185 2.743 0 .649-.299 1.131-1.637 1.131s-2.158-.468-2.158-1.378c-.247.39-.352.715-.352 1.001 0 .91 1.145 1.287 2.51 1.287 1.78 0 2.678-.793 2.678-1.977-.001-3.015-4.186-1.26-4.186-2.807z" fill="#839197"></path>
                                </svg> --}}
                            </a>
                        </div>
                        <!-- Mobile Navigation -->
                        <div class="mmenu-trigger">
                            <button class="hamburger hamburger--collapse" type="button">
                                <span class="hamburger-box">
							<span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                        <!-- Main Navigation -->
                        <nav id="navigation" class="style-1">
                            <ul id="responsive">
                                <li><a href="{{ Route('index') }}">Home</a></li>
                                <li><a href="{{ Route('about') }}">About Us</a></li>
                                <li><a href="{{ Route('blog-list') }}">Blog</a></li>
                                <li><a href="{{ Route('contact-us') }}">Contact</a></li>
                            </ul>
                        </nav>
                        <!-- Main Navigation / End -->
                    </div>
                    <!-- Left Side Content / End -->

                    <!-- Right Side Content / End -->
                    <div class="right-side d-none d-none d-lg-none d-xl-flex">
                        <!-- Header Widget -->
                        <div class="header-widget">
                            <a href="{{Route('add_properties')}}" class="button border">Add Listing<i class="fas fa-laptop-house ml-2"></i></a>
                        </div>
                        <!-- Header Widget / End -->
                    </div>
                    <!-- Right Side Content / End -->

                    <!-- Right Side Content / End -->
                    @if(Session::has('user'))
                    <div class="header-user-menu user-menu add" >
                        <div class="header-user-name">
                            <span></span>Hi, {{ Session::get('user')->name }}
                        </div>
                        <ul>
                            <li><a href="{{Route('user-profile')}}"> Edit profile</a></li>
                            <li><a href="{{Route('add_properties')}}"> Add Property</a></li>
                            <li><a href="{{Route('payment-method')}}">  Payments</a></li>
                            <li><a href="{{Route('change-password')}}"> Change Password</a></li>
                            <li><a href="{{ Route('logout') }}">Log Out</a></li>
                        </ul>
                    </div>
                    @else
                    <div class="header-user-menu user-menu add">
                        <div class="header-user-name-1">
                            <a href="{{ Route('login') }}">Login</a>
                        </div>
                    </div>
                    @endif
                    
                    <!-- Right Side Content / End -->

                    
                    <!-- Right Side Content / End -->
                </div>
            </div>
            <!-- Header / End -->

        </header>
       
       
    
    
        <div class="clearfix"></div>
        <!-- Header Container / End -->

        @yield('content')

        <div class="clearfix"></div>
        <!-- START FOOTER -->
        <footer class="first-footer ">
            <div class="top-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="netabout">
                                <a href="{{ Route('index') }}" class="logo">
                                    <img src="{{ asset('images/logo-footer.svg') }}" alt="netcom">
                                </a>
                                <p>Footer</p>
                            </div>
                            <div class="contactus">
                                <ul>
                                    <li>
                                        <div class="info">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <p class="in-p">95 South Park Avenue, USA</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="info">
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                            <p class="in-p">+91 9691565883</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="info">
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                            <p class="in-p ti">intouchsoftware.co.in</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="navigation">
                                <h3>Navigation</h3>
                                <div class="nav-footer">
                                    <ul>
                                        <li><a href="{{ Route('index') }}">Home</a></li>
                                        <li><a href="{{ Route('properties-grid') }}">Properties Right</a></li>
                                        <li><a href="{{ Route('properties-grid') }}">Properties List</a></li>
                                        <li><a href="{{Route('properties-details')}}">Property Details</a></li>
                                    </ul>
                                    <ul class="nav-right">
                                        <li><a href="{{ Route('about') }}">About Us</a></li>
                                        <li><a href="{{Route('blog-list')}}">Blog Default</a></li>
                                        <li><a href="{{ Route('blog-list') }}">Blog Details</a></li>
                                        <li class="no-mgb"><a href="{{ Route('contact-us') }}">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="widget">
                                <h3>Twitter Feeds</h3>
                                <div class="twitter-widget contuct">
                                    <div class="twitter-area">
                                        <div class="single-item">
                                            <div class="icon-holder">
                                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                            </div>
                                            <div class="text">
                                                <h5><a href="#">@findhouses</a> all share them with me baby said inspet.</h5>
                                                <h4>about 5 days ago</h4>
                                            </div>
                                        </div>
                                        <div class="single-item">
                                            <div class="icon-holder">
                                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                            </div>
                                            <div class="text">
                                                <h5><a href="#">@findhouses</a> all share them with me baby said inspet.</h5>
                                                <h4>about 5 days ago</h4>
                                            </div>
                                        </div>
                                        <div class="single-item">
                                            <div class="icon-holder">
                                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                            </div>
                                            <div class="text">
                                                <h5><a href="#">@findhouses</a> all share them with me baby said inspet.</h5>
                                                <h4>about 5 days ago</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="newsletters">
                                <h3>Newsletters</h3>
                                <p>Sign Up for Our Newsletter to get Latest Updates and Offers. Subscribe to receive news in your inbox.</p>
                            </div>
                            <form class="bloq-email mailchimp form-inline" method="post">
                                <label for="subscribeEmail" class="error"></label>
                                <div class="email">
                                    <input type="email" id="subscribeEmail" name="EMAIL" placeholder="Enter Your Email">
                                    <input type="submit" value="Subscribe">
                                    <p class="subscription-success"></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="second-footer">
                <div class="container">
                    <p>2021 © Copyright - All Rights Reserved.</p>
                    <ul class="netsocials">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </footer>

        <a data-scroll href="#wrapper" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
        <!-- END FOOTER -->

        <!--register form -->
        <div class="login-and-register-form modal">
            <div class="main-overlay"></div>
            <div class="main-register-holder">
                <div class="main-register fl-wrap">
                    <div class="close-reg"><i class="fa fa-times"></i></div>
                    <h3>Welcome to <span>Find<strong>Houses</strong></span></h3>
                    <div class="soc-log fl-wrap">
                        <p>Login</p>
                        <a href="#" class="facebook-log"><i class="fa fa-facebook-official"></i>Log in with Facebook</a>
                        <a href="#" class="twitter-log"><i class="fa fa-twitter"></i> Log in with Twitter</a>
                    </div>
                    <div class="log-separator fl-wrap"><span>Or</span></div>
                    <div id="tabs-container">
                        <ul class="tabs-menu">
                            <li class="current"><a href="#tab-1">Login</a></li>
                            <li><a href="#tab-2">Register</a></li>
                        </ul>
                        <div class="tab">
                            <div id="tab-1" class="tab-contents">
                                <div class="custom-form">
                                    <form method="post" name="registerform">
                                        <label>Username or Email Address * </label>
                                        <input name="email" type="text" onClick="this.select()" value="">
                                        <label>Password * </label>
                                        <input name="password" type="password" onClick="this.select()" value="">
                                        <button type="submit" class="log-submit-btn"><span>Log In</span></button>
                                        <div class="clearfix"></div>
                                        <div class="filter-tags">
                                            <input id="check-a" type="checkbox" name="check">
                                            <label for="check-a">Remember me</label>
                                        </div>
                                    </form>
                                    <div class="lost_password">
                                        <a href="#">Lost Your Password?</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab">
                                <div id="tab-2" class="tab-contents">
                                    <div class="custom-form">
                                        <form method="post" name="registerform" class="main-register-form" id="main-register-form2">
                                            <label>First Name * </label>
                                            <input name="name" type="text" onClick="this.select()" value="">
                                            <label>Second Name *</label>
                                            <input name="name2" type="text" onClick="this.select()" value="">
                                            <label>Email Address *</label>
                                            <input name="email" type="text" onClick="this.select()" value="">
                                            <label>Password *</label>
                                            <input name="password" type="password" onClick="this.select()" value="">
                                            <button type="submit" class="log-submit-btn"><span>Register</span></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--register form end -->

        <!-- START PRELOADER -->
        <div id="preloader">
            <div id="status">
                <div class="status-mes"></div>
            </div>
        </div>
        <!-- END PRELOADER -->

        <!-- ARCHIVES JS -->
        <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
        <script src="{{ asset('js/rangeSlider.js') }}"></script>
        <script src="{{ asset('js/tether.min.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/moment.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/mmenu.min.js') }}"></script>
        <script src="{{ asset('js/mmenu.js') }}"></script>
        <script src="{{ asset('js/animate.js') }}"></script>
        <script src="{{ asset('js/aos.js') }}"></script>
        <script src="{{ asset('js/aos2.js') }}"></script>
        <script src="{{ asset('js/slick.min.js') }}"></script>
        <script src="{{ asset('js/fitvids.js') }}"></script>
        <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('js/typed.min.js') }}"></script>
        <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('js/smooth-scroll.min.js') }}"></script>
        <script src="{{ asset('js/lightcase.js') }}"></script>
        <script src="{{ asset('js/search.js') }}"></script>
        <script src="{{ asset('js/owl.carousel.js') }}"></script>
        <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('js/ajaxchimp.min.js') }}"></script>
        <script src="{{ asset('js/newsletter.js') }}"></script>
        <script src="{{ asset('js/jquery.form.js') }}"></script>
        <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('js/searched.js') }}"></script>
        <script src="{{ asset('js/forms-2.js') }}"></script>
        <script src="{{ asset('js/leaflet.js') }}"></script>
        <script src="{{ asset('js/leaflet-gesture-handling.min.js') }}"></script>
        <script src="{{ asset('js/leaflet-providers.js') }}"></script>
        <script src="{{ asset('js/leaflet.markercluster.js') }}"></script>
        <script src="{{ asset('js/map-style2.js') }}"></script>
        <script src="{{ asset('js/range.js') }}"></script>
        <script src="{{ asset('js/color-switcher.js') }}"></script>
        {{-- <script src="{{ asset('js/map-single.js') }}"></script> --}}

        <!-- Slider Revolution scripts -->
        <script src="{{ asset('revolution/js/jquery.themepunch.tools.min.js') }}"></script>
        <script src="{{ asset('revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
        @yield('jscontent')
        <script>
            var typed = new Typed('.typed', {
                strings: ["Office Space ^2000", "Working Space ^2000", "Meeting Rooms ^4000", "Training Rooms ^2000"],
                smartBackspace: false,
                loop: true,
                showCursor: true,
                cursorChar: "|",
                typeSpeed: 50,
                backSpeed: 30,
                startDelay: 800
            });

        </script>
        <script>
            $('.slick-lancers2').slick({
                infinite: false,
                slidesToShow: 4,
                slidesToScroll: 1,
                dots: true,
                arrows: false,
                adaptiveHeight: true,
                responsive: [{
                    breakpoint: 1292,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        dots: true,
                        arrows: false
                    }
                }, {
                    breakpoint: 993,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        dots: true,
                        arrows: false
                    }
                }, {
                    breakpoint: 769,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: true,
                        arrows: false
                    }
                }]
            });

        </script>
        <script>
            $('.slick-lancers').slick({
                infinite: false,
                slidesToShow: 4,
                slidesToScroll: 1,
                dots: true,
                arrows: false,
                adaptiveHeight: true,
                responsive: [{
                    breakpoint: 1292,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        dots: true,
                        arrows: false
                    }
                }, {
                    breakpoint: 993,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        dots: true,
                        arrows: false
                    }
                }, {
                    breakpoint: 769,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: true,
                        arrows: false
                    }
                }]
            });

        </script>

        <script>
            $(".dropdown-filter").on('click', function() {

                $(".explore__form-checkbox-list").toggleClass("filter-block");

            });

        </script>

        <!-- MAIN JS -->
        <script src="{{ asset('js/script.js') }}"></script>

    </div>
    <!-- Wrapper / End -->
</body>


<!-- Mirrored from code-theme.com/html/findhouses/{{ Route('index') }} by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Aug 2023 05:51:56 GMT -->
</html>
