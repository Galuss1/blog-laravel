<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <!-- Canonical -->
        <link rel="canonical" href="{{ url()->current() }}">

        <!-- Device -->
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5">
        <meta name="format-detection" content="telephone=yes">
        <meta name="theme-color" content="#212529">

        <!-- Title -->
        <title>Blog Laravel</title>

        <!-- About this site -->
        <meta name="author" content="Gaël Paquien">
        <meta name="description" content="Création d'un blog pour découvrir le framework Laravel.">

        <!-- Favicons -->
        <link rel="icon" type="image/png" sizes="48x48" href="images/favicons/favicon-48x48.png">
        <link rel="icon" type="image/png" sizes="32x32" href="images/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="images/favicons/favicon-16x16.png">
        <link rel="apple-touch-icon" sizes="180x180" href="images/favicons/apple-touch-icon-180x180.png">

        <!-- Fonts -->
        <link rel="preload" href="fonts/MadimiOne-Regular.woff2" as="font" type="font/woff2" crossorigin="anonymous">
        <link rel="preload" href="fonts/Chivo-SemiBold.woff2" as="font" type="font/woff2" crossorigin="anonymous">
        <link rel="preload" href="fonts/Poppins-Medium.woff2" as="font" type="font/woff2" crossorigin="anonymous">

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

        <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/479a452331.js" crossorigin="anonymous"></script>

        <!-- Adding the file manually (temporary, because vite.config.js does not work) -->
        <link rel="stylesheet" href="styles/css/main.css">
        <link rel="stylesheet" href="styles/css/home.css">
    </head>

    <body>
        <header>
            <nav class="navbar navbar-expand-lg fixed-top">
                <div class="container-fluid">
                    <div class="navbar-brand d-flex flex-row">
                        <div class="link-effect">
                            <a href="#">Blog Laravel</a>
                        </div>
                        <div class="mx-1 d-flex flex-row">
                            <span>by</span>
                            <div class="link-effect mx-1">
                                <a href="https://www.gaelpaquien.com" target="_blank" rel="noopener" aria-label="Visiter le site de Gaël Paquien">
                                    <svg xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Logo de Gaël Paquien" fill="none" viewBox="0 0 60 60"><path d="M24.392 23.2L24.296 20.832C23.6987 20.5333 23.0267 20.2773 22.28 20.064C21.5333 19.8293 20.776 19.712 20.008 19.712C19.1547 19.712 18.376 19.8187 17.672 20.032C16.9893 20.224 16.4027 20.608 15.912 21.184C15.4213 21.7387 15.0373 22.5067 14.76 23.488C14.504 24.448 14.376 25.696 14.376 27.232V30.176C14.376 31.6267 14.4933 32.832 14.728 33.792C14.984 34.7307 15.3467 35.4773 15.816 36.032C16.2853 36.5867 16.8613 36.9813 17.544 37.216C18.248 37.4293 19.048 37.536 19.944 37.536C20.8827 37.536 21.7147 37.4613 22.44 37.312C23.1653 37.1413 23.8053 36.9707 24.36 36.8C24.2747 36.3093 24.232 35.68 24.232 34.912V32.48H21.896V29.792H27.784V35.584C27.784 36.736 27.848 37.6427 27.976 38.304C28.104 38.944 28.2533 39.4027 28.424 39.68C28.0613 39.808 27.6987 39.9253 27.336 40.032C26.9733 40.16 26.6107 40.2773 26.248 40.384C26.0987 40.3413 25.9387 40.2453 25.768 40.096C25.6187 39.9467 25.4693 39.712 25.32 39.392C24.6373 39.6267 23.8587 39.84 22.984 40.032C22.1093 40.2453 21.096 40.352 19.944 40.352C18.664 40.352 17.448 40.2347 16.296 40C15.1653 39.7653 14.1627 39.3067 13.288 38.624C12.4347 37.9413 11.752 36.9707 11.24 35.712C10.728 34.432 10.472 32.7467 10.472 30.656V27.392C10.472 25.216 10.696 23.4453 11.144 22.08C11.6133 20.7147 12.264 19.6587 13.096 18.912C13.928 18.144 14.92 17.6213 16.072 17.344C17.224 17.0667 18.4827 16.928 19.848 16.928C20.9147 16.928 22.0453 17.0133 23.24 17.184C24.4347 17.3547 25.6827 17.6427 26.984 18.048L26.76 23.2H24.392ZM30.9423 20.064V17.28H39.9343C41.3209 17.28 42.5689 17.3867 43.6783 17.6C44.8089 17.8133 45.7689 18.176 46.5583 18.688C47.3476 19.2 47.9556 19.8827 48.3823 20.736C48.8089 21.568 49.0223 22.624 49.0223 23.904V24.896C49.0223 26.1333 48.7876 27.1573 48.3183 27.968C47.8489 28.7573 47.2089 29.3867 46.3983 29.856C45.6089 30.304 44.6703 30.6133 43.5823 30.784C42.5156 30.9547 41.3636 31.04 40.1263 31.04H36.8303V37.248H38.3023V40H31.6463V37.248H33.1183V20.064H30.9423ZM45.3423 24.448C45.3423 23.552 45.2143 22.8267 44.9583 22.272C44.7023 21.696 44.3503 21.248 43.9023 20.928C43.4543 20.5867 42.9103 20.3627 42.2703 20.256C41.6516 20.128 40.9583 20.064 40.1903 20.064H36.8303V28.448H40.1263C40.8516 28.448 41.5236 28.4053 42.1423 28.32C42.7823 28.2133 43.3369 28.0213 43.8063 27.744C44.2756 27.4453 44.6489 27.04 44.9263 26.528C45.2036 25.9947 45.3423 25.3013 45.3423 24.448Z" fill="white" /><path d="M54.3119 12.301C51.0194 7.80403 46.4736 4.26801 41.3183 2.18705C36.1647 0.0815568 30.4308 -0.499736 24.927 0.425996C19.4113 1.34068 14.1447 3.86507 9.91099 7.64081C9.21513 8.3076 7.99872 9.444 6.63731 11.1552C5.28532 12.8651 3.74616 15.1285 2.52196 17.9564C1.90802 19.3661 1.35183 20.9034 0.931611 22.5519C0.51508 24.2005 0.219777 25.9525 0.0854383 27.7676C-0.189382 31.392 0.189061 35.2839 1.36207 38.997C2.51992 42.7118 4.45267 46.2176 6.89247 49.1449C9.32367 52.0849 12.2521 54.4338 15.228 56.1081C16.7156 56.9488 18.2138 57.6274 19.6665 58.169C21.1262 58.6943 22.5376 59.0796 23.858 59.366C26.5083 59.908 28.781 60.0127 30.4386 59.9988C30.842 59.9833 31.2438 59.9829 31.6443 59.9534C35.2657 59.7853 39.248 58.8158 42.7342 57.1157C46.2377 55.4409 49.1923 53.0663 51.243 50.818C53.1168 48.7403 54.6891 46.353 55.883 43.8241C55.548 44.3817 55.1925 44.8983 54.8583 45.3863C54.4999 45.8596 54.1866 46.3223 53.845 46.715C55.4931 44.416 56.6571 41.8168 56.9581 40.7777C57.4623 39.3652 57.6556 38.4718 57.7338 37.9899C57.8133 37.5072 57.774 37.4315 57.6614 37.5997C57.5471 37.7674 57.3669 38.1818 57.1441 38.6763C56.8955 39.1627 56.6501 39.7456 56.3557 40.2341C55.9936 40.9598 55.9641 40.7916 55.8912 40.7327C55.8142 40.6706 55.722 40.7291 55.1372 41.8274C55.8871 40.2022 56.1984 39.3542 56.7091 37.6299C56.6911 37.5714 56.5916 37.8754 56.4552 38.3442C56.2897 38.8036 56.1087 39.4372 55.8756 40.0173C55.7614 40.3081 55.65 40.5916 55.5509 40.844C55.4452 41.0935 55.3387 41.3067 55.2601 41.4678C55.0995 41.789 55.0225 41.8896 55.1007 41.5844C55.8675 40.043 56.4232 38.1867 56.8316 36.4555C56.6886 36.7394 56.2811 38.2239 55.781 39.5599C55.2674 40.8919 54.6744 42.0663 54.6584 41.9068C54.7473 41.6851 54.9332 41.2981 55.1622 40.835C55.3665 40.3621 55.6274 39.8164 55.833 39.2699C56.266 38.1834 56.5445 37.1219 56.4896 36.9329C56.4687 36.8584 55.9891 38.5581 55.6754 39.3844C56.5592 36.8085 56.8058 34.701 56.8258 33.8992C56.8308 33.495 56.7894 33.4124 56.6936 33.7302C56.6022 34.0485 56.4408 34.7664 56.1251 35.9417C56.318 35.1199 56.5092 34.1172 56.6485 33.0925C56.7206 32.5807 56.7521 32.0608 56.8009 31.5601C56.8234 31.0574 56.8316 30.5714 56.8373 30.1234C56.8365 30.1263 56.8344 30.1329 56.8332 30.1369C56.8111 30.5836 56.8037 31.1936 56.7468 31.7908C56.6886 32.3881 56.6378 32.9763 56.5723 33.3833C56.7066 32.3795 56.7628 31.3625 56.7832 30.3476C56.7509 30.5084 56.7148 30.6884 56.6768 30.877C56.6575 31.2545 56.6325 31.6321 56.5866 32.0121C56.5424 32.3922 56.5269 32.7787 56.4654 33.1678C56.5174 32.8372 56.5322 32.5022 56.5617 32.1684C56.5862 31.8342 56.6235 31.5 56.6251 31.1629C56.5486 31.6628 56.4101 32.2306 56.304 32.8515C55.915 35.2037 55.12 37.3227 54.6985 38.5094C53.016 43.332 49.8705 47.6277 45.8064 50.7072C41.7513 53.803 36.7914 55.6553 31.7262 55.9772C31.7123 56.0615 32.2624 56.102 31.4199 56.2047C31.0877 56.237 30.7613 56.2386 30.4423 56.2501C30.1228 56.2624 29.8095 56.262 29.5002 56.2411C29.1918 56.2243 28.8871 56.2075 28.5844 56.1908C28.2838 56.1556 27.9853 56.1208 27.6863 56.0861C27.3873 56.057 27.0907 56.0112 26.7934 55.958C26.4956 55.9097 26.1958 55.8615 25.8924 55.8124C25.2899 55.6872 24.6669 55.5911 24.0186 55.4463C23.9473 55.4749 23.874 55.5039 23.8011 55.533C21.8028 55.009 19.8078 54.179 17.9049 53.117C16.1168 52.2044 14.4482 51.0704 12.9254 49.7732C11.4018 48.4769 10.0171 47.0177 8.83342 45.4105C8.85389 45.5238 8.84693 45.5909 8.60078 45.2763C7.60143 43.9431 6.43621 41.9256 5.59291 39.6896C5.45447 39.3644 5.31563 39.0396 5.20423 38.7107C5.08996 38.4628 5.02279 38.4108 4.98101 38.3781C4.63697 37.3493 4.42113 36.4076 4.24133 35.5334C2.91802 29.8089 3.47544 23.503 6.20521 17.9494C7.55556 15.1743 9.40189 12.571 11.7184 10.3517C14.028 8.12883 16.7844 6.27042 19.8668 4.95729C20.509 4.65499 21.1749 4.40954 21.8376 4.15347C22.5114 3.93257 23.1826 3.69939 23.8691 3.52963C25.235 3.1676 26.6222 2.9062 27.9992 2.79534C30.0372 2.62108 32.3865 2.70576 34.6624 3.13446C36.9425 3.54149 39.1419 4.26187 40.9538 5.08329C40.86 4.91639 41.356 5.01211 42.1215 5.27432C42.8817 5.54636 43.9093 5.98979 44.8615 6.49868C46.7754 7.49559 48.4203 8.68681 47.7928 7.86212C48.872 8.72731 50.1319 9.91566 51.0898 10.9523C52.0404 11.9954 52.7154 12.8561 52.8395 12.897C53.0218 12.9616 53.247 13.1122 53.5714 13.3854C53.7315 13.5233 53.9187 13.6906 54.1251 13.9029C54.3246 14.1193 54.5495 14.3758 54.8026 14.6805C55.7794 15.9094 57.2182 17.958 58.4617 21.5922C58.938 23.0154 59.2988 24.8922 59.4639 26.5383C59.5167 26.949 59.545 27.3462 59.5646 27.7193C59.5847 28.092 59.6179 28.4385 59.6244 28.751C59.6375 29.3761 59.6539 29.8596 59.6805 30.123C59.7125 30.5149 59.7465 30.4822 59.7809 30.2368C59.8149 29.9909 59.8345 29.4935 59.8583 29.0079C59.8976 28.031 59.8628 27.0456 60 27.8789C59.6367 22.2533 57.6216 16.7844 54.3119 12.301Z" fill="white" /></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Mobile nav button -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link link-effect" href="#">Accueil</a>
                            </li>
                            <li class="nav-item">
                                <span class="nav-link scroll-to-section link-effect" data-target="#home-recent-articles">Articles</span>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link-effect" href="#connexion">Connexion / Inscription</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <main>
            <section id="home-hero" class="home-hero container-fluid d-flex flex-column align-items-center justify-content-center">
                <svg class="home-hero__laravel-logo" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Logo de Laravel" viewBox="0 -.11376601 49.74245785 51.31690859"><path d="m49.626 11.564a.809.809 0 0 1 .028.209v10.972a.8.8 0 0 1 -.402.694l-9.209 5.302v10.509c0 .286-.152.55-.4.694l-19.223 11.066c-.044.025-.092.041-.14.058-.018.006-.035.017-.054.022a.805.805 0 0 1 -.41 0c-.022-.006-.042-.018-.063-.026-.044-.016-.09-.03-.132-.054l-19.219-11.066a.801.801 0 0 1 -.402-.694v-32.916c0-.072.01-.142.028-.21.006-.023.02-.044.028-.067.015-.042.029-.085.051-.124.015-.026.037-.047.055-.071.023-.032.044-.065.071-.093.023-.023.053-.04.079-.06.029-.024.055-.05.088-.069h.001l9.61-5.533a.802.802 0 0 1 .8 0l9.61 5.533h.002c.032.02.059.045.088.068.026.02.055.038.078.06.028.029.048.062.072.094.017.024.04.045.054.071.023.04.036.082.052.124.008.023.022.044.028.068a.809.809 0 0 1 .028.209v20.559l8.008-4.611v-10.51c0-.07.01-.141.028-.208.007-.024.02-.045.028-.068.016-.042.03-.085.052-.124.015-.026.037-.047.054-.071.024-.032.044-.065.072-.093.023-.023.052-.04.078-.06.03-.024.056-.05.088-.069h.001l9.611-5.533a.801.801 0 0 1 .8 0l9.61 5.533c.034.02.06.045.09.068.025.02.054.038.077.06.028.029.048.062.072.094.018.024.04.045.054.071.023.039.036.082.052.124.009.023.022.044.028.068zm-1.574 10.718v-9.124l-3.363 1.936-4.646 2.675v9.124l8.01-4.611zm-9.61 16.505v-9.13l-4.57 2.61-13.05 7.448v9.216zm-36.84-31.068v31.068l17.618 10.143v-9.214l-9.204-5.209-.003-.002-.004-.002c-.031-.018-.057-.044-.086-.066-.025-.02-.054-.036-.076-.058l-.002-.003c-.026-.025-.044-.056-.066-.084-.02-.027-.044-.05-.06-.078l-.001-.003c-.018-.03-.029-.066-.042-.1-.013-.03-.03-.058-.038-.09v-.001c-.01-.038-.012-.078-.016-.117-.004-.03-.012-.06-.012-.09v-21.483l-4.645-2.676-3.363-1.934zm8.81-5.994-8.007 4.609 8.005 4.609 8.006-4.61-8.006-4.608zm4.164 28.764 4.645-2.674v-20.096l-3.363 1.936-4.646 2.675v20.096zm24.667-23.325-8.006 4.609 8.006 4.609 8.005-4.61zm-.801 10.605-4.646-2.675-3.363-1.936v9.124l4.645 2.674 3.364 1.937zm-18.422 20.561 11.743-6.704 5.87-3.35-8-4.606-9.211 5.303-8.395 4.833z" fill="#ff2d20" /></svg>
                <h1 class="text-uppercase m-5">Blog Laravel</h1>
                <p>
                    Ce projet est un blog très simpliste me permettant de découvrir le framework Laravel.
                    <br>
                    Ce projet n'a pas vocation à évoluer, les données sont réinitialisées quotidiennement.
                </p>
                <button type="button" class="btn scroll-to-section d-flex flex-row align-items-center text-uppercase m-5" aria-label="Voir les articles" data-target="#home-recent-articles">
                    Voir les articles récents
                    <svg xmlns="http://www.w3.org/2000/svg" role="img" aria-hidden="true" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" /></svg>
                </button>
            </section>

            <section id="home-recent-articles" class="home-recent-articles pt-5">
                <div class="d-flex flex-row align-items-center justify-content-center mb-5">
                    <svg xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Article" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M96 96c0-35.3 28.7-64 64-64H448c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H80c-44.2 0-80-35.8-80-80V128c0-17.7 14.3-32 32-32s32 14.3 32 32V400c0 8.8 7.2 16 16 16s16-7.2 16-16V96zm64 24v80c0 13.3 10.7 24 24 24H296c13.3 0 24-10.7 24-24V120c0-13.3-10.7-24-24-24H184c-13.3 0-24 10.7-24 24zm208-8c0 8.8 7.2 16 16 16h48c8.8 0 16-7.2 16-16s-7.2-16-16-16H384c-8.8 0-16 7.2-16 16zm0 96c0 8.8 7.2 16 16 16h48c8.8 0 16-7.2 16-16s-7.2-16-16-16H384c-8.8 0-16 7.2-16 16zM160 304c0 8.8 7.2 16 16 16H432c8.8 0 16-7.2 16-16s-7.2-16-16-16H176c-8.8 0-16 7.2-16 16zm0 96c0 8.8 7.2 16 16 16H432c8.8 0 16-7.2 16-16s-7.2-16-16-16H176c-8.8 0-16 7.2-16 16z" /></svg>
                    <h2 class="mx-3">Articles récents</h2>
                </div>

                <div class="row row-cols-1 row-cols-md-3 g-5 mx-5">
                    <div class="col" data-url="#article1">
                        <div class="card h-100">
                            <img src="images/articles/article-default.webp"" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                    <div class="col" data-url="#article2">
                        <div class="card h-100">
                            <img src="images/articles/article-default.webp"" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                    <div class="col" data-url="#article3">
                        <div class="card h-100">
                            <img src="images/articles/article-default.webp"" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                    <div class="col" data-url="#article4">
                        <div class="card h-100">
                            <img src="images/articles/article-default.webp"" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                    <div class="col" data-url="#article5">
                        <div class="card h-100">
                            <img src="images/articles/article-default.webp"" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                    <div class="col" data-url="#article6">
                        <div class="card h-100">
                            <img src="images/articles/article-default.webp"" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-center">
                    <a class="d-flex flex-row align-items-center" href="#articles">
                        <button type="button" class="btn text-uppercase mt-5" aria-label="Voir tous les articles">
                            Voir tous les articles
                            <svg xmlns="http://www.w3.org/2000/svg" role="img" aria-hidden="true" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" /></svg>
                        </button>
                    </a>
                </div>
            </section>
        </main>

        <!-- Scroll to top -->
        <button type="button" id="btn-scroll-to-top" class="btn" aria-label="Retourner vers le haut de page">
            <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 384 512"><path d="M214.6 41.4c-12.5-12.5-32.8-12.5-45.3 0l-160 160c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 141.2V448c0 17.7 14.3 32 32 32s32-14.3 32-32V141.2L329.4 246.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-160-160z"/></svg>
        </button>

        <footer>
            <div class="container-fluid d-flex justify-content-between">
                <p class="mb-0 py-3">
                    Blog Laravel by <a href="https://www.gaelpaquien.com" target="_blank" rel="noopener" aria-label="Visiter le site de Gaël Paquien">Gaël Paquien</a>
                    <br>
                    &copy 2024-{{ date('Y') }} - Tous droits réservés.
                </p>
                <ul class="mb-0 py-3">
                    <li class="d-flex justify-content-end"><a class="link-effect" href="#mentions-legales">Mentions légales</a></li>
                    <li class="d-flex justify-content-end"><a class="link-effect" href="#politique-de-confidentialite">Politique de confidentialité</a></li>
                </ul>
            </div>
        </footer>

        <!-- Adding the file manually (temporary, because vite.config.js does not work) -->
        <script src="js/scrollToTop.js"></script>
        <script src="js/scrollToSection.js"></script>
        <script src="js/cardArticle.js"></script>
    </body>
</html>
