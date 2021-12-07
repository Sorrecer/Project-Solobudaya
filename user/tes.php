<?php include("../lib/header.php"); ?>
<title>Beranda</title>
<style>
    * {
        margin: 0;
        padding: 0;
    }

    section {
        position: relative;
        width: 100%;
        height: 100vh;
        background: #000;
        overflow: hidden;
    }

    section .wave {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 198px;
        background: url('../images/wave.png');
        background-size: 1600px 198px;
    }

    section .wave.wave1 {
        animation: animate 30s linear infinite;
        z-index: 1000;
        opacity: 1;
        animation-delay: 0s;
        bottom: 0;
    }

    section .wave.wave2 {
        animation: animate2 5s linear infinite;
        z-index: 999;
        opacity: 0.5;
        animation-delay: -5s;
        bottom: 10;
    }

    section .wave.wave3 {
        animation: animate3 10s linear infinite;
        z-index: 998;
        opacity: 0.2;
        animation-delay: -2s;
        bottom: 15;
    }

    section .wave.wave4 {
        animation: animate4 2s linear infinite;
        z-index: 997;
        opacity: 0.7;
        animation-delay: -5s;
        bottom: 20;
    }

    @keyframes animate {
        0% {
            background-position-x: 0;
        }

        100% {
            background-position-x: 1600px;
        }
    }

    @keyframes animate2 {
        0% {
            background-position-x: 0;
        }

        100% {
            background-position-x: -1600px;
        }
    }

    @keyframes animate3 {
        0% {
            background-position-x: 0;
        }

        100% {
            background-position-x: 1600px;
        }
    }

    @keyframes animate4 {
        0% {
            background-position-x: 0;
        }

        100% {
            background-position-x: -1600px;
        }
    }
</style>
</head>

<body>
    <section>
        <div class="wave wave1"></div>
        <div class="wave wave2"></div>
        <div class="wave wave3"></div>
        <div class="wave wave4"></div>
    </section>
</body>

</html>