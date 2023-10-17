<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BO NVVN</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/704f604c3d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    <section>
        <nav class="nav">
        <a href=""><img src="img/sdg.svg" alt=""></a> 
            <ul class="list">
                <li class="listitem">Over NVVN</li>
            </ul>
            <img src="img/SDG-logo-with-UN-Emblem_Horizontal-Web_transparent.png" alt="Description of the image" class="my-image">
        </a>
        </nav>
            <div class="bg">
            <div class="alletekst">
                <h1 class="heading">  <img src="" class="logo-image" > Welkom bij SDG Game!</h1>
                <h2 class="heading2">De SDG-game is een online spel over de 17 duurzame ontwikkelingsdoelen. Dit online spel daagt studenten uit zich te verdiepen in de SDG’s en om challenges uit te voeren zodat zij kennis maken met alle SDG’s volgens de Nederlandse maatstaven.</h2>
                <a href="sdg/sdgs.html"><button class="grotebutton">Speel nu!</button></a>
            </div>
        </div>
    </section>
    <section class="onzesdgs">
        <div class="sdgtekst">SDG's</div>
        <div class="container">
            <!-- 5 images above -->
            <?php

            // Inclusief het singles.php-document om gegevens op te halen

            include '../source/data.php';

 

            foreach ($musicSingles as $single) {

                include '../source/views/card.php';

            }

            ?>
            <a href="page2.html"><img class="block" src="/img/no-image.png" alt="Image 2">
            </a>
            <a href="page3.html"><img class="block" src="/img/no-image.png" alt="Image 3">
            </a>
            <a href="page4.html"><img class="block" src="/img/no-image.png" alt="Image 4">
            </a>
            <a href="page5.html"><img class="block" src="/img/no-image.png" alt="Image 5">
            </a>
            
            <!-- 5 images below -->
            <a href="page6.html"><img class="block" src="/img/no-image.png" alt="Image 6">
            </a>
            <a href="page7.html"><img class="block" src="/img/no-image.png" alt="Image 7">
            </a>
            <a href="page8.html"><img class="block" src="/img/no-image.png" alt="Image 8">
            </a>
            <a href="page9.html"><img class="block" src="/img/no-image.png" alt="Image 9">
            </a>
            <a href="page10.html"><img class="block" src="/img/no-image.png" alt="Image 10">
            </a>
          </div>
    </section>


</body>
<footer>
    <img src="img/red-shipping-container-box-vector-45294776-removebg-preview.png" alt="Image 1">
    <p>&copy; 2023 De Containers</p>
    <p>Contact: 35050@ma-web.nl</p>
</footer>
</html>
