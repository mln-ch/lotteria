<?php
$title = 'Funzioni sulle stringhe - Lezione 27';
$desc = '';
$menu = 'stringhe';
include('header.php');
?>

    <section id="content-page">
        <div class="container">
            <h1>Le funzioni sulle Stringhe</h1>

            <h2><i class="fas fa-caret-right"></i> strip_tags($testo)</h2>
            <p>Ripulisce il testo da eventuali tag HTML</p>
            <?php
            $testo = '<h3>Ciao a tutti! Questo è un testo senza <strong>senso</strong></h3>';
            $testo_pulito = strip_tags($testo);

            echo $testo;
            echo $testo_pulito;
            ?>

            <h2><i class="fas fa-caret-right"></i> trim(), ltrim(), rtrim()</h2>
            <p>Ripulisce il testo ds eventuali spazi ad inizio e fine testo. In genere non lo si usa a livello di html, ma magari lo si usa quando bisogna ripulire e sistemare eventuali errori di spazi nell'inserimento di dati in un form.</p>
            <?php
            $testo = '  ciao    a   tutti   !   ';
            echo '<p>'. trim($testo) .'</p>';
            ?>

            <h2><i class="fas fa-caret-right"></i>strlen();</h2>
            <p>Ritorna la lunghezza in caratteri della string</p>
            <?php
            $testo = '<h3>Ciao a tutti! Questo è un testo senza <strong>senso</strong></h3>';
            echo "<p><strong>La lunghezza (totale, tag inclusi) del testo è </strong>". strlen($testo) ."</p>";
            echo "<p><strong>La lunghezza (con $ testo_pulito, senza tag) del testo è </strong>". strlen($testo_pulito) ."</p>"

            ?>

            <h2><i class="fas fa-caret-right"></i>str_replace($cerca, $sostituisci, $testo);</h2>
            <p>Sostituisce ogni occorrenza di $cerca, con $sostituisci, nel $testo</p>
            <?php
            echo $testo;
            echo str_replace('senza', 'con', $testo);

            echo str_replace(array('a','e','i','o','u'), array('afa','efe','ifi','ofo','ufu'), $testo);
            ?>

            <h2><i class="fas fa-caret-right"></i>strtolower($testo); strtoupper($testo); ucifirst(); ucwords();</h2>
            <p>permettono di modificare maiuscole e minuscole del testo</p>
            <?php
            echo $testo;

            echo "<p> strtolower(); ogni parola in lowercase</p>";
            echo '<p>' . strtolower($testo) . '</p>';
            echo "<p>strtoupper(); ogni parola in uppercase</p>";
            echo '<p>' . strtoupper($testo) . '</p>';
            echo "<p>ucfirst(); ogni parola all'inizio della stringa ha l'a orima lettera in maiuscolo</p>";
            echo '<p>' . ucfirst($testo) . '</p>';
            echo "<p>ucwords(); la prima lettera di ogni parola va in maiuscolo</p>";
            echo '<p>' . ucwords($testo) . '</p>';
            ?>

            <h2><i class="fas fa-caret-right"></i>substr($testo);</h2>
            <p>Estrae una sottostringa da quella data.</p>
            <?php
            echo $testo;
            echo '<p>'. substr($testo, 5, -1) .'</p>';
            ?>

            <h2><i class="fas fa-caret-right"></i>explode($separatore, $testo); implode($collante, $array)</h2>
            <p>Rispettivamente usare per trasformare un testo in array e viceversa.</p>
            <?php
            $marchi = 'apple, samsung, microsoft, sony, xiaomi, google';
            $array_marchi = explode(', ', $marchi);

            echo '<p>' . implode(' - ', $array_marchi) . '</p>';
            ?>


            <h2><i class="fas fa-caret-right"></i></h2>
            <p></p>
            <?php ?>
        </div>
    </section>

<?php ?>
<?php include('footer.php'); ?>