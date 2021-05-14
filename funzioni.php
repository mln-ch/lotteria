<?php
$title = 'Creare funzioni - Lezione 27';
$desc = '';
$menu = 'funzioni';
include('header.php');
?>

    <section id="content-page">
        <div class="container">
            <h1>Creare funzioni in PHP</h1>

            <?php

            // documentiamo la funzione. le funzioni sono scatole nere perchè sono create sul momento. /** <- si comincia così

            /**
             * Conta il numero di parole nel testo
             * @param $str string il testo su cui contare il numero delle parole
             * @return int il numero di parole
             */
            function conta_parole($str) {
                $array_testo = explode(' ', $str);
                $num_parole = count($array_testo);

                return $num_parole;
            }

            //Richiamo la funzione creata poco fa
            $paperino = 'Ciao mondo! Questa è una frase senza senso.';
            echo $paperino;
            echo "<p>Il numero di parole nella frase è " . conta_parole($paperino) . " </p>";
            ?>
        </div>
    </section>

<?php ?>
<?php include('footer.php'); ?>