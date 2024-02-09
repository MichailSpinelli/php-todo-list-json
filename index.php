<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>

    <!--LINK BOOTSTRAP-->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!--LINK CSS-->

    <link rel="stylesheet" href="style.css">

    <!--FONT AWESOME-->
    <script src="https://kit.fontawesome.com/a97229ce96.js" crossorigin="anonymous"></script>

    <!-- GOOGLE FONTS-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;700&family=Roboto:ital@1&display=swap" rel="stylesheet">
</head>
<body>
    <?php
        /*
            Descrizione
            Dobbiamo creare una web-app che permetta di leggere una lista di Todo.
            Deve essere anche gestita la persistenza dei dati leggendoli da un file JSON.
            Stack
            Html, CSS, VueJS (importato tramite CDN), axios, PHP
            Consigli
            Nello svolgere l'esercizio seguite un approccio graduale.
            Prima assicuratevi che la vostra pagina index.php/index.html (il vostro front-end) riesca a comunicare correttamente con il vostro script PHP (le vostre "API").
            Solo a questo punto sarà utile passare alla lettura della lista da un file JSON.
        */
    ?>
    <header>

    </header>

    <main id="app">
        <div class="container">
            <ul>
                <li v-for="todo in todos">
                    {{ todo.task }}
                </li>
            </ul>
        </div>
    </main>
    
    
    <script type="text/javascript" src="./js/scripts.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</body>



</html>