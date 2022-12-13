<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Challenge</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Archivo&amp;display=swap">
    <script src="https://cdn.ckeditor.com/ckeditor5/35.3.2/classic/ckeditor.js"></script>
</head>

    <body style="font-family: Archivo, sans-serif;">
        <div class="container">
            <div class="modal fade" role="dialog" tabindex="-1" id="modal-1">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Crie seu novo disparo</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            <form method="post" action="{{ route('formPost') }}">
                                @csrf
                                <div style="display: flex;">
                                    <div style="width: 50%;margin: 8px;">
                                        <h6 for="titulo">Título</h6>
                                        <input required id="titulo" name="titulo" type="text"
                                               placeholder="Preencha o título do e-mail"
                                               style="width: 100%;padding: 8px;border: 1px solid rgba(118,118,118,0.25);border-top: 1px solid rgba(118,118,118,0.25);border-radius: 4px;">
                                    </div>
                                    <div style="width: 50%;margin: 8px;">
                                        <h6 for="emailRemetente">E-mail do remetente</h6>
                                        <input required id="emailRemetente" name="emailRemetente" type="email"
                                               placeholder="remetente@email.com"
                                               style="width: 100%;padding: 8px;border: 1px solid rgba(118,118,118,0.25) ;border-top: 1px solid rgba(118,118,118,0.25) ;border-radius: 4px;"
                                               inputmode="email">
                                    </div>
                                </div>

                                <div style="display: flex;">
                                    <div style="margin: 8px;width: 100%;">
                                        <label for="emailDestinatario">E-mail dos destinatarios</label>
                                        <input required id="emailDestinatario" name="emailDestinatario"
                                               placeholder="Insira os e-mails separados por vírgula. ex: example@org.br,example2@teste.com"
                                               style="width: 100%;padding: 8px;border: 1px solid rgba(118,118,118,0.25) ;border-top: 1px solid rgba(118,118,118,0.25) ;border-radius: 4px;"> </input>
                                    </div>
                                </div>

                                <div style="display: flex;">
                                    <div style="margin: 8px;width: 100%;">
                                        <h6 for="conteudo">Conteúdo do e-mail</h6>
                                        <textarea required id="conteudo" name="conteudo" placeholder="Conteúdo do e-mail"
                                                  rows="3"
                                                  style="width: 100%;padding: 8px;border: 1px solid rgba(118,118,118,0.25) ;border-top: 1px solid rgba(118,118,118,0.25) ;border-radius: 4px;"></textarea>
                                    </div>
                                </div>


                                <div class="modal-footer" style="border-top-width: 0px;">
                                    <button class="btn btn-light" type="button" data-bs-dismiss="modal"
                                            style="padding-right: 24px;padding-top: 8px;padding-bottom: 8px;padding-left: 24px;">
                                        Cancelar
                                    </button>
                                    <button class="btn btn-dark" type="submit"
                                            style="padding-right: 24px;padding-left: 24px;padding-bottom: 8px;padding-top: 8px;">
                                        Criar agora
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal fade" role="dialog" tabindex="-1" id="modal-2">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header" style="border-bottom-width: 0px;">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" style="padding: 48px;padding-bottom: 24px;padding-top: 16px;">
                            <div class="text-bg-light"
                                 style="width: max-content;padding: 16px;margin-bottom: 12px;border-radius: 100px;">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em"
                                     fill="currentColor" class="fs-2">
                                    <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                    <path
                                        d="M501.6 4.186c-7.594-5.156-17.41-5.594-25.44-1.063L12.12 267.1C4.184 271.7-.5037 280.3 .0431 289.4c.5469 9.125 6.234 17.16 14.66 20.69l153.3 64.38v113.5c0 8.781 4.797 16.84 12.5 21.06C184.1 511 188 512 191.1 512c4.516 0 9.038-1.281 12.99-3.812l111.2-71.46l98.56 41.4c2.984 1.25 6.141 1.875 9.297 1.875c4.078 0 8.141-1.031 11.78-3.094c6.453-3.625 10.88-10.06 11.95-17.38l64-432C513.1 18.44 509.1 9.373 501.6 4.186zM369.3 119.2l-187.1 208.9L78.23 284.7L369.3 119.2zM215.1 444v-49.36l46.45 19.51L215.1 444zM404.8 421.9l-176.6-74.19l224.6-249.5L404.8 421.9z"></path>
                                </svg>
                            </div>
                            <h4 style="width: 60%;margin-top: 16px;padding-top: 16px;">Parabéns seu envio foi
                                agendado</h4>
                            <p class="text-muted" style="padding-right: 42px;margin-top: 24px;">Acompanhe as
                                atualizações do
                                seu
                                envio na listagem de disparos</p>
                        </div>
                        <div class="modal-footer d-flex d-xxl-flex justify-content-start justify-content-xxl-start"
                             style="padding-left: 48px;padding-bottom: 48px;border-top-width: 0px;">
                            <button class="btn btn-outline-light link-dark border-dark" type="button"
                                    data-bs-dismiss="modal"
                                    aria-label="Close"
                                    style="padding-top: 8px;padding-bottom: 8px;padding-right: 24px;padding-left: 24px;">
                                Entendido
                            </button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row" style="margin-right: 42px;margin-left: 42px;">
                <div class="col-md-12 d-xxl-flex justify-content-between"
                     style="display: flex;margin-top: 32px;margin-bottom: 32px;">
                    <h1 style="margin-bottom: 0px;">Disparos</h1>
                    <button class="btn btn-dark" type="button"
                            style="padding-right: 24px;padding-top: 8px;padding-bottom: 8px;padding-left: 24px;"
                            data-bs-target="#modal-1" data-bs-toggle="modal">Criar novo disparo
                    </button>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row" style="margin-right: 42px;margin-left: 42px;">

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body" style="padding: 0px;">
                            <div style="width: 100%;border-bottom: 1.5px solid rgb(221,221,221) ;">
                                <h5 style="margin: 24px;">Oi, Aqui é o Greenn</h5>
                            </div>
                            <div style="padding: 24px;">
                                <h6 class="mb-2">Remetente</h6>
                                <p class="text-muted">leonardo@</p>
                                <h6 class="mb-2" style="margin-top: 28px;">Status</h6>
                                <p class="text-success d-flex d-xxl-flex align-items-center align-items-xxl-center">Enviado&nbsp;&nbsp;<svg
                                        xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em" height="1em"
                                        fill="currentColor">
                                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M438.6 105.4C451.1 117.9 451.1 138.1 438.6 150.6L182.6 406.6C170.1 419.1 149.9 419.1 137.4 406.6L9.372 278.6C-3.124 266.1-3.124 245.9 9.372 233.4C21.87 220.9 42.13 220.9 54.63 233.4L159.1 338.7L393.4 105.4C405.9 92.88 426.1 92.88 438.6 105.4H438.6z"></path>
                                    </svg>
                                </p>
                                <h6 class="mb-2" style="margin-top: 28px;">Modificado Em</h6>
                                <p class="text-muted">06/12/2022 às 08:29</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body" style="padding: 0px;">
                            <div style="width: 100%;border-bottom: 1.5px solid rgb(221,221,221);">
                                <h5 style="margin: 24px;">Bem-vindo ao Greenn</h5>
                            </div>
                            <div style="padding: 24px;">
                                <h6 class="mb-2">Remetente</h6>
                                <p class="text-muted">marketing@</p>
                                <h6 class="mb-2" style="margin-top: 28px;">Status</h6>
                                <p class="text-warning d-flex d-xxl-flex align-items-center">Aguardando envio&nbsp;&nbsp;<svg
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em"
                                        fill="currentColor">
                                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M232 120C232 106.7 242.7 96 256 96C269.3 96 280 106.7 280 120V243.2L365.3 300C376.3 307.4 379.3 322.3 371.1 333.3C364.6 344.3 349.7 347.3 338.7 339.1L242.7 275.1C236 271.5 232 264 232 255.1L232 120zM256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0zM48 256C48 370.9 141.1 464 256 464C370.9 464 464 370.9 464 256C464 141.1 370.9 48 256 48C141.1 48 48 141.1 48 256z"></path>
                                    </svg>
                                </p>
                                <h6 class="mb-2" style="margin-top: 28px;">Modificado Em</h6>
                                <p class="text-muted">06/12/2022 às 08:29</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body" style="padding: 0px;">
                            <div style="width: 100%;border-bottom: 1.5px solid rgb(221,221,221);">
                                <h5 style="margin: 24px;">Oi, aqui é o Greenn</h5>
                            </div>
                            <div style="padding: 24px;">
                                <h6 class="mb-2">Remetente</h6>
                                <p class="text-muted">gabriel@</p>
                                <h6 class="mb-2" style="margin-top: 28px;">Status</h6>
                                <p class="text-danger d-flex d-xxl-flex align-items-center">Ocorreu um erro&nbsp;&nbsp;<svg
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em"
                                        fill="currentColor">
                                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256zM99.5 144.8C77.15 176.1 64 214.5 64 256C64 362 149.1 448 256 448C297.5 448 335.9 434.9 367.2 412.5L99.5 144.8zM448 256C448 149.1 362 64 256 64C214.5 64 176.1 77.15 144.8 99.5L412.5 367.2C434.9 335.9 448 297.5 448 256V256z"></path>
                                    </svg>
                                </p>
                                <h6 class="mb-2" style="margin-top: 28px;">Modificado Em</h6>
                                <p class="text-muted">06/12/2022 às 08:22</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" style="padding-top: 32px;padding-bottom: 32px;margin-right: 42px;margin-left: 42px;">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body" style="padding: 0px;">
                            <div style="width: 100%;border-bottom: 1.5px solid rgb(221,221,221) ;">
                                <h5 style="margin: 24px;">Oi, aqui é o Greenn</h5>
                            </div>
                            <div style="padding: 24px;">
                                <h6 class="mb-2">Remetente</h6>
                                <p class="text-muted">financeiro@</p>
                                <h6 class="mb-2" style="margin-top: 28px;">Status</h6>
                                <p class="text-danger d-flex d-xxl-flex align-items-center">Ocorreu um erro&nbsp;&nbsp;<svg
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em"
                                        fill="currentColor">
                                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256zM99.5 144.8C77.15 176.1 64 214.5 64 256C64 362 149.1 448 256 448C297.5 448 335.9 434.9 367.2 412.5L99.5 144.8zM448 256C448 149.1 362 64 256 64C214.5 64 176.1 77.15 144.8 99.5L412.5 367.2C434.9 335.9 448 297.5 448 256V256z"></path>
                                    </svg>
                                </p>
                                <h6 class="mb-2" style="margin-top: 28px;">Modificado Em</h6>
                                <p class="text-muted">06/12/2022 às 08:22</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body" style="padding: 0px;">
                            <div style="width: 100%;border-bottom: 1.5px solid rgb(221,221,221) ;">
                                <h5 style="margin: 24px;">Oi, Aqui é o Greenn</h5>
                            </div>
                            <div style="padding: 24px;">
                                <h6 class="mb-2">Remetente</h6>
                                <p class="text-muted">almoxarifado@</p>
                                <h6 class="mb-2" style="margin-top: 28px;">Status</h6>
                                <p class="text-success d-flex d-xxl-flex align-items-center">Enviado&nbsp;&nbsp;<svg
                                        xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em" height="1em"
                                        fill="currentColor">
                                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M438.6 105.4C451.1 117.9 451.1 138.1 438.6 150.6L182.6 406.6C170.1 419.1 149.9 419.1 137.4 406.6L9.372 278.6C-3.124 266.1-3.124 245.9 9.372 233.4C21.87 220.9 42.13 220.9 54.63 233.4L159.1 338.7L393.4 105.4C405.9 92.88 426.1 92.88 438.6 105.4H438.6z"></path>
                                    </svg>
                                </p>
                                <h6 class="mb-2" style="margin-top: 28px;">Modificado Em</h6>
                                <p class="text-muted">06/12/2022 às 08:29</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body" style="padding: 0px;">
                            <div style="width: 100%;border-bottom: 1.5px solid rgb(221,221,221);">
                                <h5 style="margin: 24px;">Bem-vindo ao Greenn</h5>
                            </div>
                            <div style="padding: 24px;">
                                <h6 class="mb-2">Remetente</h6>
                                <p class="text-muted">diretoria@</p>
                                <h6 class="mb-2" style="margin-top: 28px;">Status</h6>
                                <p class="text-warning d-flex d-xxl-flex align-items-center">Aguardando envio&nbsp;&nbsp;<svg
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em"
                                        fill="currentColor">
                                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M232 120C232 106.7 242.7 96 256 96C269.3 96 280 106.7 280 120V243.2L365.3 300C376.3 307.4 379.3 322.3 371.1 333.3C364.6 344.3 349.7 347.3 338.7 339.1L242.7 275.1C236 271.5 232 264 232 255.1L232 120zM256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0zM48 256C48 370.9 141.1 464 256 464C370.9 464 464 370.9 464 256C464 141.1 370.9 48 256 48C141.1 48 48 141.1 48 256z"></path>
                                    </svg>
                                </p>
                                <h6 class="mb-2" style="margin-top: 28px;">Modificado Em</h6>
                                <p class="text-muted">06/12/2022 às 08:29</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

        <script type="text/javascript">
            const myModal = new bootstrap.Modal('#modal-2')
            @if (session('success') == 'true')
                myModal.show()
            @endif
        </script>
    </body>
</html>
