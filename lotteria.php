<?php
$title = 'Lotteria - Lezione 27';
$desc = '';
$menu = 'lotteria';
include('header.php');
?>

    <section id="content-page">
        <div class="container">
            <h1>La lotteria</h1>
            <p>Gioca i tuoi numeri e vedi quanti compaiono nell'estrazione</p>
            <form action="#" method="get">
                <div class="form-group">
                    <label for="numeri">I miei numeri</label>
                    <input type="text" name="numeri" id="numeri" class="form-control" placeholder="Inserire i numeri separati da virgola">
                </div>
                <div class="form-group">
                    <input type="submit" name="invia" value="Vai all'estrazione" class="btn btn-info">
                </div>
            </form>

            <!-- è sempre meglio lavorare con i : per interrompere il PHP... -->
            <!-- scrivere un name o un altro è la stessa cosa, l'importante è che sia legato al form a cui appartiene -->
            <?php if(isset($_GET['numeri'])):
                $numeri = $_GET['numeri'];
            $array_numeri = explode(', ', $numeri);

            //ripulisco i numeri inseriti
            foreach ($array_numeri as $key => $val) {
                $array_numeri[$key] = trim($val);
            }

            // Creo un array di 90 numeri
            $numeri_lotto = range(1, 90);

            // Mescolo i valori dell'array
            shuffle($numeri_lotto);


                ?>

                <div class="estrazione">
                    <h2>I numeri estratti</h2>
                    <div class="lista-estratti">

                        <?php
                        $conta = 0;
                        $vincita = "nulla cosmico";
                        // creo un ciclo di 6 iterazioni
                        for($i = 0; $i<6; $i++) {
                            $estratto = $numeri_lotto[$i];

                            // se uno fra i numeri lotto fra 1 e 90 è presente nell'array creato dall'utente...
                            if(in_array($estratto, $array_numeri)){
                                // ... il cerchio sarà verde
                                echo "<span class=\"estratto ok\">$numeri_lotto[$i]</span>";
                                $conta++;

                                switch($conta) {
                                    case 1:
                                    $vincita = "proprio niente...";
                                break;
                                    case 2:
                                    $vincita = "ambo";
                                break;
                                    case 3:
                                    $vincita = "terno";
                                break;
                                    case 4:
                                    $vincita = "quaterna";
                                break;
                                    case 5:
                                    $vincita = "cinquina";
                                break;
                                    case 6:
                                    $vincita = "tombola!!";
                                break;
                                }


                                }   
                            else {
                                // altrimenti sarà rosso.
                                echo "<span class=\"estratto\">$numeri_lotto[$i]</span>";
                            }
                        }

                        ?>
                    </div>

                    <p><strong>I miei numeri: <?php echo $numeri; ?></p>
                    <p>Hai indovinato <?php echo $conta; ?> numeri su 6: <strong class="risultato"><?php echo strtoupper($vincita); ?></strong></p>
                </div>
            <!-- ...perchè capisci cosa sta andando a chiudere. -->
            <?php endif; ?>
        </div>
    </section>

<?php include('footer.php'); ?>