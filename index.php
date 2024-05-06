<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/vue@3"></script>
    <title>Dischi</title>
</head>
<body>
    <div id="app">
        <header></header>

        <main>
            <div class="container">
                <div class="cards-wrapper">
                    <!-- Card -->
                    <div class="card-container" v-for="disc in discs">
                        <div class="img-container">
                            <img :src="disc.poster" alt="">
                        </div>
                        <div class="title">{{ disc.title }}</div>
                        <div class="author">{{ disc.author }}</div>
                        <div class="year">{{ disc.year }}</div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    
    <script src="js/script.js"></script>
</body>
</html>