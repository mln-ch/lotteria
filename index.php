<?php
$title = 'Funzioni sugli array - Lezione 27';
$desc = '';
$menu = 'home';
include('header.php');
?>

    <section id="content-page">
        <div class="container">
            <h1>Le funzioni sugli Array</h1>

            <h2><i class="fas fa-caret-right"></i> print_r(); e var_dump();</h2>
            <p>Permettono di stampare la STRUTTURA della variabile e quindi anche del nostro array</p>
            <?php
            $marchi = array('apple', 'google', 'micrisoft', 'xiaomi', 'sony', 'samgung');
            echo '> print_r';
            echo '<pre>';
            print_r($marchi);
            echo '</pre>';

            echo '> var_dump';
            echo '<pre>';
            var_dump($marchi);
            echo '</pre>';
            ?>


        <h2><i class="fas fa-caret-right"></i> in_array($elemento_da_cercare, $array)</h2>
        <p>Verifica se un elemento è presente nell'array</p>
        <?php
        $test = 'sony';
        //se $test è presente in $marchi...
        if( in_array($test, $marchi) ){
            echo "<p>$test è presente nell'array</p>";
        }
        else {
            echo "<p>$test NON è presente nell'array</p>";
        }
        ?>



            <h2><i class="fas fa-caret-right"></i> sort(), asort(), rsort(), arsort()...</h2>
            <p>sono funzioni che si occupano di ordinare il nostro array. sono anche le uniche che modificano il valore che gli passiamo.</p>
            <?php
            // sort -> ordinamento CRESCENTE per valore
            // rsort -> ordinamento DECRESCENTE per valore
            // asort -> ordinamento CRESCENTE per chiave
            // arsort -> ordinamento DECRESCENTE per chiave
            // ksort -> come "asort" ma mantiene la relazione chiave/valore
            // krsort -> come "arsort" ma mantiene la relazione chiave/valore
            // shuffle -> ordinamento CASUALE dei valori dell'array


            //ordinamento CRESCENTE per valore
            sort($marchi);

            echo 'sort($array); Riordina le stringhe alfabetizzandoli con ordinamento crescente';
            echo '<pre>';
            print_r($marchi);
            echo '</pre>';

            //ordinamento DECRESCENTE per valore
            arsort($marchi);

            echo 'arsort($array); Riordina le stringhe alfabetizzandoli con ordinamento decrescente';
            echo '<pre>';
            print_r($marchi);
            echo '</pre>';

            //ordinamento CRESCENTE per CHIAVE ("a" sta per associativo)
            asort($marchi);

            echo 'asort($array)/ksort($array); Riordina le stringhe per chiave in ordine crescente';
            echo '<pre>';
            print_r($marchi);
            echo '</pre>';

            //ordinamento CASUALE dei valori
            shuffle($marchi);

            echo 'asort($array)/ksort($array); Riordina le stringhe per chiave in ordine crescente';
            echo '<pre>';
            print_r($marchi);
            echo '</pre>';
            ?>

            <h2><i class="fas fa-caret-right"></i> range($min-int, $max-int);</h2>
            <p>crea un array di numeri da un range definito</p>
            <?php
            $numeri_lotto = range(1, 90);
            print_r($numeri_lotto);
            ?>


            <h2><i class="fas fa-caret-right"></i> array_sum($array)</h2>
            <p>Ritorna la somma dei valori di un array</p>
            <?php
            $totale = array_sum($numeri_lotto);
            echo "<p>La somma di tutti i numeri dell'array precedente è: <strong>$totale</strong></p>";
            ?>
        </div>
    </section>

<?php include('footer.php'); ?>

<?php ?>
