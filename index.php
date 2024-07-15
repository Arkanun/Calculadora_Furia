<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Fúria</title>
    <style type="text/css">
        #imgpos {
            position: absolute;
            left: 385px;
            top: 150px;
            margin-left: -110px;
            margin-top: -100px;
            height: 345px;
        }

        label { font-weight: bold; }

        div.container {
            height: 100%;
        }

        @media screen and (max-width: 400px) {
            #op1 { 
                float: none;
                margin-right: 0;
                width: auto;
                border: 0;
                border-bottom: 2px solid #000;    
            }
        }

        div.op1 {
            width: 1%;
            display: inline-block;
            text-align: left;
            min-width: 60vw;
        }

        div.op2 {
            width: 25%;
            display: inline-block;
            text-align: left;
            float: left;
        }

        div.titulo {
            font-size: 1.5vw;
            text-align: center;
            position: relative;
        }

        body {
            background-image: url(https://img.freepik.com/vetores-gratis/vetor-de-fundo-de-padrao-geometrico-branco-e-dourado_53876-140726.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            background-attachment: fixed;
        }

        img {
            max-width: 100%;
        }
    </style>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container" style="margin-top: 50px" id="page">
        <div class="titulo">
            <?php
                if(isset($_POST['submit'])) {
                    if(is_numeric($_POST['basica']) && is_numeric($_POST['primaria']) && is_numeric($_POST['intermediaria']) && is_numeric($_POST['avancada']) && is_numeric($_POST['pedrasuper']) && is_numeric($_POST['pedramega']) && is_numeric($_POST['redmoon']) && is_numeric($_POST['zangetsu']) && is_numeric($_POST['eclipse'])) {
                        $total = 0; 
                        $furia_inicial = 50;

                        $basica1 = $_POST['basica'] * 4;
                        $primaria1 = $_POST['primaria'] * 5;
                        $inter1 = $_POST['intermediaria'] * 6;
                        $avancada1 = $_POST['avancada'] * 7;
                        $pedra_super1 = $_POST['pedrasuper'] * 8;
                        $pedra_mega1 = $_POST['pedramega'] * 9;
                        $zangetsu1 = $_POST['zangetsu'] * 10;
                        $redmoon1 = $_POST['redmoon'] * 11;
                        $eclipse1 = $_POST['eclipse'] * 12;

                        if(isset($_POST["pedraenc"])) {
                            foreach($_POST["pedraenc"] as $pedraenc) {}

                            if(isset($_POST["evolu"])) {
                                foreach($_POST["evolu"] as $evolu) {}

                                if(isset($_POST["ultmod"])) {
                                    foreach($_POST["ultmod"] as $ultmod) {}

                                    if(isset($_POST["furybooster"])) {
                                        foreach($_POST["furybooster"] as $furybooster) {}

                                        $total = $pedraenc + $evolu + $ultmod + $furybooster + $basica1 + $primaria1 + $inter1 + $avancada1 + $pedra_mega1 + $pedra_super1 + $zangetsu1 + $redmoon1 + $eclipse1;
                                        $total2 = $total + 50;	
                                        echo "<h1>Seu personagem tem {$total2} de Fúria</h1>";
                                        if ($total >= 50) {
                                            echo "Seu personagem conseguiu o T1";
                                        } else {
                                            echo "Seu personagem não conseguiu o T1";
                                        }
                                    }
                                }
                            }
                        }
                    } else {
                        echo 'Existem campos vazios, preencha-os ou coloque 0 (Zero)';
                    }
                }
            ?>
        </div>

        <div class="op1">
            <!-- Calculator form -->
            <form method="post" action="index.php">
                <p>
                    <label for="fname">Básica:</label>
                    <input name="basica" type="text" value="0" class="form-control" style="width: 150px; display: inline" />
                </p>	     
                <p>
                    <label for="fname">Primária:</label>
                    <input name="primaria" type="text" value="0" class="form-control" style="width: 150px; display: inline" />
                </p>
                <p>
                    <label for="fname">Intermediária:</label>
                    <input name="intermediaria" type="text" value="0" class="form-control" style="width: 150px; display: inline" />
                </p>
                <p>
                    <label for="fname">Avançada:</label>
                    <input name="avancada" type="text" value="0" class="form-control" style="width: 150px; display: inline" />
                </p>
                <p>
                    <label for="fname">Super:</label>
                    <input name="pedrasuper" type="text" value="0" class="form-control" style="width: 150px; display: inline" />
                </p>
                <p>
                    <label for="fname">Mega:</label>
                    <input name="pedramega" type="text" value="0" class="form-control" style="width: 150px; display: inline" />
                </p>
                <p>
                    <label for="fname">Zangetsu:</label>
                    <input name="zangetsu" type="text" value="0" class="form-control" style="width: 150px; display: inline" />
                </p>
                <p>
                    <label for="fname">Lua Vermelha:</label>
                    <input name="redmoon" type="text" value="0" class="form-control" style="width: 150px; display: inline" />
                </p>
                <p>
                    <label for="fname">Eclipse:</label>
                    <input name="eclipse" type="text" value="0" class="form-control" style="width: 150px; display: inline" />
                </p>
        </div>

        <div class="op2">
            <form action="index.php" method="post">
                <b>Pedra do Encantamento:</b><br>
                <input type="radio" name="pedraenc[]" value=0 checked="checked"> Nenhuma<br>
                <input type="radio" name="pedraenc[]" value=4> Verde<br>
                <input type="radio" name="pedraenc[]" value=2> Branco<br>
                <input type="radio" name="pedraenc[]" value=8> Vermelho<br><p></p>

                <b>Evolução:</b><br>
                <input type="radio" name="evolu[]" value=0 checked="checked"> Nenhuma<br>
                <input type="radio" name="evolu[]" value=5> 5<br>
                <input type="radio" name="evolu[]" value=10> 10<br>
                <input type="radio" name="evolu[]" value=15> 15<br><p></p>

                <b>Última Modificação:</b><br>
                <input type="radio" name="ultmod[]" value=0 checked="checked"> Não<br>
                <input type="radio" name="ultmod[]" value=15> 15 (Suporte)<br>
                <input type="radio" name="ultmod[]" value=5> 5 (Atacante/Vanguarda)<br><p></p>

                <b>Aumento de Fúria:</b><br>
                <input type="radio" name="furybooster[]" value=0 checked="checked"> Nenhuma<br>
                <input type="radio" name="furybooster[]" value=25> 25<br>
                <input type="radio" name="furybooster[]" value=30> 30<br>
                <input type="radio" name="furybooster[]" value=40> 40<br><p></p>

                <input name="submit" type="submit" value="Calcular" class="btn btn-primary" />
            </form>
        </div>
    </div>

    <br><br><br>	

    <table width="200" border="0">
        <tr>
            <td><p
