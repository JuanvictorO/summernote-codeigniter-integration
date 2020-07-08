<script src="<?= base_url('assets/js/modal-cadastro.js') ?>"></script>
<div class="modal fade" id="cadastro" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="border-0 modal-dialog modal-dialog-centered" role="document">
        <div style="background-color: #198f8e; border-radius: 0 !important;border: 0;" class="modal-content">
            <div class="modal-body">
                <div class="col-lg-12 text-center ">
                    <h3 style="font-size: 1.5em !important; line-height: 100px;" class="modal-title text-uppercase text-white my-3">Cadastre-se e receba boas notícias e a agenda cultural da semana
                    </h3>
                    <form id="cadastro" action="<?= base_url('Ouvinte/adicionarOuvinte') ?>" method="post">
                        <div class="form-group">
                            <input required type="text" name="nome" class="form-control" onkeypress="return Onlychars(event)" placeholder="Nome*">
                        </div>
                        <div class="form-group">
                            <input required type="email" name="email" class="form-control" placeholder="Email*">
                        </div>
                        <div class="form-group">
                            <input required type="date" name="nascimento" class="form-control" id="exampleInputPassword1" placeholder="Data de nascimento (DD/MM/AAAA)">
                        </div>
                        <div class="form-group mb-2">
                            <input required type="tel" name="telefone" class="form-control" placeholder="Whatsapp*" onkeypress="return Onlynumbers(event)" onkeyup="mascara('(##) # ####-####',this,event);">
                        </div>
                        <div class=" mb-2 custom-control custom-checkbox">
                            <input value="1" id="wpp" class="custom-control-input" type="checkbox" name="msg">
                            <label for="wpp" class="custom-control-label bg-transparent h4 text-white" style="font-weight: 400 !important;">Desejo receber mensagens por whatsapp</label>
                        </div>
                        <div class="multiselect text-right">
                            <div class="selectBox" onclick="showCheckboxes()">
                                <select class="form-control">
                                    <option style="color: #000000;" disabled selected>Estilos musicais preferidos</option>
                                </select>

                                <div class="overSelect"></div>
                            </div>
                            <div id="checkboxes">
                                <div class="form-check-inline">
                                    <label for="one" class="form-check-label  p-3">
                                        <input value="pop" type="checkbox" id="one" class="form-check-inline limited" name="musica[]">Pop
                                    </label>
                                    <label for="two" class="form-check-label  p-3">
                                        <input value="rock" type="checkbox" id="two" class="form-check-inline limited" name="musica[]">Rock
                                    </label>
                                    <label for="three" class="form-check-label  p-3">
                                        <input value="sertanejo" type="checkbox" id="three" class="form-check-inline limited" name="musica[]">Sertanejo
                                    </label>
                                    <label for="four" class="form-check-label  p-3">
                                        <input value="funk" type="checkbox" id="four" class="form-check-inline limited" name="musica[]">Funk
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <label for="five" class="form-check-label p-3">
                                        <input value="mpb" type="checkbox" id="five" class="form-check-inline limited" name="musica[]">MPB
                                    </label>
                                    <label for="six" class="form-check-label p-3">
                                        <input value="indie" type="checkbox" id="six" class="form-check-inline limited" name="musica[]">Indie
                                    </label>
                                    <label for="seven" class="form-check-label p-3">
                                        <input value="hiphop" type="checkbox" id="seven" class="form-check-inline limited" name="musica[]">Hip Hop
                                    </label>
                                    <label for="eight" class="form-check-label p-3">
                                        <input value="pagode" type="checkbox" id="eight" class="form-check-inline limited" name="musica[]">Pagode
                                    </label>
                                </div>
                            </div>
                            <small id="musicas_aviso" class="text-white text-right" style="font-size: 88% !important;">Obs.: Selecione duas opções</small>
                        </div>

                        <div class="col pr-2 mt-2" id="genero1">
                            <p class="bg-transparent text-white h4" style="font-weight: 400 !important;">Gênero*</p>
                        </div>

                        <div class="row mt-2" id="div-radio">
                            <div class="col pr-2" id="genero2">
                                <p class="bg-transparent text-white h4" style=" font-weight: 400 !important;">Gênero*</p>
                            </div>
                            <div class="col custom-control custom-radio custom-control-inline pl-4 pr-1">
                                <input required value="M" type="radio" id="male" name="genero" class="custom-control-input">
                                <label for="male" id="male1" class="custom-control-label bg-transparent h4 text-white radio-inline" style="font-weight: 400 !important;">Masculino</label>
                            </div>
                            <div class="col custom-control custom-radio custom-control-inline pl-4 pr-1">
                                <input required value="F" id="female" type="radio" name="genero" class="custom-control-input">
                                <label for="female" id="female1" class="custom-control-label bg-transparent h4 text-white radio-inline" style="font-weight: 400 !important;">Feminino</label>
                            </div>
                            <div class="col custom-control custom-radio custom-control-inline pl-4 pr-1">
                                <input required id="other" value="O" type="radio" name="genero" class="custom-control-input">
                                <label for="other" id="other1" class="custom-control-label bg-transparent h4 text-white radio-inline" style="font-weight: 400 !important;">Outro</label>
                            </div>
                        </div>
                        <div class="mt-3">
                            <input id="cadastro_submit" value="Concluir cadastro e seguir para o site" style="background-color: #f5ed45; color: black; font-weight: bold; border-radius: 23.5px;" type="submit" class="btn text-uppercase">
                        </div>
                    </form>
                    <div class="mt-3">
                        <button style="cursor: pointer;" type="button" class=" bg-transparent text-white border-0" data-dismiss="modal"><u>Pular cadastro e seguir para o site</u></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>