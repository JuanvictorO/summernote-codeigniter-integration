<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/main.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/estacao.min.css') ?>">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
</head>

<body style="background-color:  transparent;">
    <div class="col-lg-12 p-0 background card">
        <img class="background card-img" src="<?= base_url('assets/img/estacao/background.png') ?>" alt="Background">
        <div class="card-img-overlay">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-6 text-center">
                    <img class="icone-situacao img-fluid" src="<?= base_url('assets/img/estacao/' . intensidade($estacao->rain_rate) . '.png') ?>">
                    <h5 class="temperatura"><?= $estacao->temperature ?>°</h5>
                    <h5 class="text-center estacao-descricao">ESTAÇÃO: ALTO DAS BRAUNES</h5>
                </div>
                <div class="margin-top-aviso col-lg-6 col-md-6 col-6 text-right">
                    <h5 class="fjalla aviso"><?= intensidadeText($estacao->rain_rate) ?></h5>
                    <div class="mt-4 mr-2">
                        <h5 class="fjalla intensidade-chuva">
                            <span class="descricao-chuva">INTENSIDADE:</span>
                            <?= $estacao->rain_rate ?>
                            <span class="unidade">mm/h</span>
                        </h5>
                        <h5 class="fjalla intensidade-chuva ">
                            <span class="descricao-chuva">DIÁRIA:</span>
                            <?= $estacao->daily_rainfall ?>
                            <span class="unidade">mm</span>
                        </h5>
                        <h5 class="fjalla intensidade-chuva">
                            <span class="descricao-chuva">MENSAL:</span>
                            <?= $estacao->monthly_rainfall ?>
                            <span class="unidade">mm</span>
                        </h5>
                        <h5 class="fjalla intensidade-chuva">
                            <span class="descricao-chuva">ANUAL:</span>
                            <?= $estacao->yearly_rainfall ?>
                            <span class="unidade">mm</span>
                        </h5>
                        <h5 class="fjalla intensidade-chuva">
                            <span class="descricao-chuva">HUMIDADE:</span>
                            <?= $estacao->outdoor_humidity ?>
                            <span class="unidade">%</span>
                        </h5>
                        <h5 class="mt-1 fjalla intensidade-chuva">
                            <img class="barometro img-fluid mr-1" src="<?= base_url('/assets/img/estacao/barometro.png') ?>">
                            <span class="descricao-chuva">BARÔMETRO<br></span>
                            <?= converterBarometro($estacao->barometer) ?>
                            <span class="text-center unidade">mmHg</span>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="row margin-top-max-min">
                <div class="col-lg-4 col-md-4 col-4 text-center">
                    <span>
                        <img class="termometro img-fluid" src="<?= base_url('assets/img/estacao/termometro.png') ?>">
                    </span>
                    <div class="mt-4">
                        <h5 class="temperatura-m">
                            <span>
                                <img class="seta img-fluid" src="<?= base_url('assets/img/estacao/seta-cima.png') ?>">
                            </span>
                            <?= $estacao->max_daily_temperature ?>°
                        </h5>
                        <h5 class="mt-2 pl-2 temperatura-m">
                            <span>
                                <img class="img-fluid seta" src="<?= base_url('assets/img/estacao/seta-baixo.png') ?>">
                            </span>
                            <?= $estacao->min_daily_temperature ?>°
                        </h5>
                    </div>
                </div>
                <div class="margin-top-desc col-lg-5 col-md-5 col-5">
                    <div class="pl-3">
                        <h5 class="descricao"><?= format_date_text($estacao->date) ?></h5>
                        <h5 class="descricao">NOVA FRIBURGO - RJ</h5>
                    </div>
                </div>
                <div class="mt-1 col-lg-3 col-md-3 col-3">
                    <a href="http://www.novafriburgoagora.com.br/" target="_blank">
                        <img class="logo img-fluid" src="<?= base_url('assets/img/estacao/logo-nfa.png') ?>">
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>