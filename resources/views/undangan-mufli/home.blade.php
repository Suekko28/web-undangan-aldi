<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="{{ asset('./first-mufli.css') }}" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Cormorant Infant:wght@400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rouge Script:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cormorant Garamond:wght@700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Marck Script:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cormorant:wght@400;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Optima:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM Serif Display:wght@400&display=swap" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=NanumMyeongjo:wght@400;700;800&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lora:wght@400;600;700&display=swap" />
</head>

<body>
    <div class="first2">
        <main class="transparent-background">
            <div class="wrapper-side-view-bride-groom-">
                <img class="side-view-bride-groom-posing-s-icon" alt=""
                    src="{{ asset('./assets/sideviewbridegroomposingstreet-2@2x.png') }}" />
            </div>
            <img class="sideview-bridegroom-icon" loading="lazy" alt=""
                src="{{ asset('./assets/2-1@2x.png') }}" />

            <img class="transparent-white-roses-652f4f-icon" alt=""
                src="{{ asset('./assets/transparentwhiteroses652f4fbe6fc320-1@2x.png') }}" />
        </main>
        <div class="mufli-frame"></div>

        <div class="kepada-bapakibusaudarai">Kepada Bapak/Ibu/Saudara/i</div>
        <b class="mufli-keluarga">Mufli & Keluarga</b>
        <div class="kami-dengan-senang">
            Kami dengan senang hati mengundang Anda untuk menghadiri hari pernikahan
            kami
        </div>
        <h1 class="alexnor-exafator">Alexnor & Exafator</h1>
        <button class="button44" id="button">
            <div class="mail26">
                <img class="vector-icon29" alt="" src="{{ asset('./assets/vector.svg') }}" />

                <div class="badge32">
                    <div class="div50">12</div>
                </div>
            </div>
            <div class="buka-undangan4">Buka Undangan</div>
            <img class="add-icon26" alt="" src="{{ asset('./assets/add.svg') }}" />
        </button>
    </div>

    <script>
        var button = document.getElementById("button");
        if (button) {
            button.addEventListener("click", function(e) {
                // Please sync "Home" to the project
            });
        }
    </script>
</body>

</html>
