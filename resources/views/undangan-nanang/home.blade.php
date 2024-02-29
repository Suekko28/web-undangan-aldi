<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="{{asset('./first.css')}}" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Cormorant Garamond:wght@700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Marck Script:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Cormorant Infant:wght@400;500;600;700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Rouge Script:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Cormorant:wght@400;700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Optima:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=NanumMyeongjo:wght@400;700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=DM Serif Display:wght@400&display=swap"
    />
  </head>
  <body>
    <div class="first">
      <img
        class="young-japanese-couple-1-icon"
        alt=""
        src="{{ asset('assets/youngjapanesecouple-1@2x.png') }}"
      />
    
      <div class="wrapper-young-japanese-couple">
        <img
          class="young-japanese-couple-1-1"
          alt=""
          src="{{ asset('assets/youngjapanesecouple-1-1@2x.png') }}"
        />
      </div>
      <div class="first-child"></div>
      <div class="the-wedding-of">THE WEDDING OF</div>
      <div class="rudi-arum">Rudi & Arum</div>
      <div class="devider4"></div>
      <div class="subtitle-frame">
        <div class="oktober-2024">21 Oktober 2024</div>
      </div>
      <div class="button16" id="buttonContainer">
        <div class="mail4">
          <img class="vector-icon4" alt="" src="{{ asset('assets/vector.svg') }}" />
    
          <div class="badge4">
            <div class="div10">12</div>
          </div>
        </div>
        <a class="buka-undangan2" href="undangan-nanang/index" style="text-decoration:none;">Buka Undangan</a>
        <img class="add-icon4" alt="" src="{{ asset('assets/add.svg') }}" />
      </div>
    </div>
    

    <script>
      var buttonContainer = document.getElementById("buttonContainer");
      if (buttonContainer) {
        buttonContainer.addEventListener("click", function (e) {
          // Please sync "Home" to the project
        });
      }
      </script>
  </body>
</html>
