<!-- Milestone 1
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente. Scriviamo tutto (logica e layout) in un unico file index.php -->
<!-- Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale -->
<!-- Milestone 3 (BONUS)
Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli.
Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro (es. numeri e simboli, oppure tutti e tre insieme). Dare all’utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali. -->
<!-- Milestone 4 (BONUS - OPZIONALE)
Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION (documentazione) recupererà la password da mostrare all’utente. -->

<?php
include __DIR__ . '/functions/function.php';


$new_password = passwordGenerator((int)$_GET["passw_length"], $_GET['number'], $_GET['character'], $_GET['symbol']);
var_dump($new_password);
?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>


    <title>Document</title>


    <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/1.1.3/axios.min.js' integrity='sha512-0qU9M9jfqPw6FKkPafM3gy2CBAvUWnYVOfNPDYKVuRTel1PrciTj+a9P3loJB+j0QmN2Y0JYQmkBBS8W+mbezg==' crossorigin='anonymous' referrerpolicy='no-referrer'></script>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT' crossorigin='anonymous'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css' integrity='sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==' crossorigin='anonymous' referrerpolicy='no-referrer'>
    <link rel='stylesheet' href=''>
    <style>
        /* .container {} */

        .left {
            flex-direction: column;
            justify-content: space-between;
            height: 400px;

        }

        .info {
            flex-direction: column;

        }

        h1 {
            opacity: 80%;
        }

        /* 
        body {
             background-color: darkblue; 
        }
        */
        .row {
            justify-content: center;
        }
    </style>
</head>

<body>


    <header id="site_header"></header>
    <!-- /#site_header -->
    <main id="site_main">

        <div class="container my-5">
            <div class="row align-items-md-stretch">
                <div class="col">
                    <div class="h-100 p-5 text-black  border-0 rounded-3 text-center">
                        <h1>Strong Password Generator</h1>
                        <h2>Genera una password sicura</h2>

                    </div>

                </div>

            </div>
            <form action="./index.php" method="get">
                <div class="row">
                    <div class="col-8 left d-flex">
                        <div class="text info d-flex">
                            <label for="passw_length" class="col-form-label">Lunghezza password :</label>
                            <label for="repeat_character" class="col-form-label">Consenti ripetizioni di uono o più caratteri :</label>

                        </div>
                        <div class="button ">
                            <input name="" id="" class="btn btn-primary" type="submit" value="Button">
                        </div>

                    </div>
                    <div class="col-4">
                        <div class="choise">
                            <div class="info-lenght">
                                <!-- setta la lunghezza -->
                                <input type="number" name="passw_length" id="passw_length">

                            </div>

                            <!-- <input type="submit" value=""> -->
                            <div class="check">

                                <div>

                                    <input type="checkbox" name="number" id="number">
                                    <label for="number">Numeri</label>
                                </div>
                                <div>
                                    <input type="checkbox" name="character" id="character">
                                    <label for="character">Lettere</label>
                                </div>
                                <div>
                                    <input type="checkbox" name="symbol" id="symbol">
                                    <label for="symbol">Simboli</label>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </form>
        </div>
    </main>
    <!-- /#site_main -->
    <footer id="site_footer"></footer>
    <!-- /#site_footer -->


    <!-- <script src='https://cdn.jsdelivr.net/npm/vue@3.2.41/dist/vue.global.min.js'></script> -->
    <!-- <script src=''></script> -->
</body>

</html>