<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Qwords.com: Cloud Web Hosting Indonesia Akses Cepat Aman</title>
    <meta name="description"
        content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://www.qwords.com/wp-content/uploads/2022/12/cropped-logo-qw-light-32x32.png"
        sizes="32x32" />
    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/custom.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700&family=Secular+One&display=swap"
        rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <style type="text/css">
        * {
            font-family: 'Plus Jakarta Sans', sans-serif
        }

        swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>

<body style="overflow-x: hidden;">

    <div>
        @include('components/base/header')
        @include('components/parts/banner')
        @include('components/parts/domain-checker')
        @include('components/parts/package')
        @include('components/parts/package2')
        @include('components/parts/review')
        @include('components/parts/partner')
        @include('components/parts/contact')
        @include('components/base/footer')
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/TextPlugin.min.js"></script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            centeredSlides: true,
            spaceBetween: 20,
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            }
        });
    </script>

    </script>
    <script>
        gsap.from(".gift", {
            ease: "bounce.out",
            rotation: -45,
            duration: 2,
            repeat: -1,
            yoyo: true
        });
        gsap.from(".promo", {
            duration: 2,
            repeat: -1,
            color: "red",
            yoyo: true
        });
    </script>


</body>
</head>

</html>
