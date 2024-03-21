<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="{{ asset('./first-nanang.css') }}" />
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
</head>

<body>
    <div class="first1">
    
        {{-- <img class="young-japanese-couple-1-11" alt=""
            src="./assets/youngjapanesecouple-1-1@2x.png" /> --}}


        <div class="first-item"></div>
        <div class="frame-parent119">
            <div class="the-wedding-of-group">
                <div class="the-wedding-of1">THE WEDDING OF</div>
                <div class="rudi-arum1">Rudi & Arum</div>
                <div class="devider7"></div>
                <div class="oktober-20241">21 Oktober 2024</div>
            </div>
            <div class="button29" id="buttonContainer">
                <div class="mail17">
                    <img class="vector-icon19" alt="" src="./assets/vector.svg" />

                    <div class="badge21">
                        <div class="div35">12</div>
                    </div>
                </div>
                <a class="buka-undangan3" style="font-weight: bold; text-direction:none;" href="/undangan-alt3/index">Buka Undangan</a>
                <img class="add-icon17" alt="" src="./assets/add.svg" />
            </div>

        </div>
    </div>

    <script>
        var buttonContainer = document.getElementById("buttonContainer");
        if (buttonContainer) {
            buttonContainer.addEventListener("click", function(e) {
                window.location.href = "./home.html";
            });
        }
    </script>
</body>

</html>
