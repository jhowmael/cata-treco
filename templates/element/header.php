<?php
$home = $this->Url->build(['controller' => 'Pages', 'action' => 'home']);
$users = $this->Url->build(['controller' => 'Users', 'action' => 'index']);
$posts = $this->Url->build(['controller' => 'Posts', 'action' => 'index']);
$operationPosts = $this->Url->build(['controller' => 'Posts', 'action' => 'OperationIndex']);

?>

<nav class="navbar navbar-dark bg-success fixed-top">
    <div class="container-fluid">
            <div class="col-md-18">
                <table>
                    <tr>
                        <td style="text-align: left;"><a class="navbar-brand" href="<?= $home ?>">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;Cata Treco</a></td>
                        <?php if (!empty($user)): ?>
                            <?php if ($userType == 'admin'): ?>
                                <td style="text-align: left;"><a class="navbar-brand" href="<?= $users ?>">Usuários</a></td>
                                <td style="text-align: left;"><a class="navbar-brand" href="<?= $posts ?>">Solicitações</a></td>
                            <?php endif; ?>
                            <?php if ($userType == 'operation'): ?>
                                <td style="text-align: left;"><a class="navbar-brand" href="<?= $operationPosts ?>">Meus Trabalhos</a></td>
                            <?php endif; ?>
                        <?php endif; ?>           
                    </tr>
                </table>
            </div>
            <div>
                <table>
                    <tr>
                        <td style="text-align: right;">
                            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                                <span style="color: white">Dúvidas</span>
                                <i class="fa-solid fa-question"></i>        
                            </button>
                        </td>
                    </tr>
                </table>
            </div>

        <div class="offcanvas offcanvas-end text-bg-success" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
                <h5 style="color: white;"class="offcanvas-title" id="offcanvasDarkNavbarLabel">Duvidas <i class="fa-solid fa-question"></i></h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Requisitos </a>
                        <ul class="dropdown-menu text-bg-success">
                            <li><a> Todo cidadão tem o direito de solicitar o serviço de cata treco </a></li>
                        </ul>

                        <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Documentos Necessários </a>
                        <ul class="dropdown-menu text-bg-success">
                            <li><a> Não há necessidade da apresentação de documentos. </a></li>
                        </ul>

                        <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Onde Solicitar</a>
                        <ul class="dropdown-menu text-bg-success">
                            <li><a> - Através do desse site.</a>
                            <li><hr class="dropdown-divider"></li>
                            <a> - Atendimento presencial na Secretaria de Serviços Públicos  </a>
                            <p> Av. Nações Unidas, s/nº  - Esplanada dos Barreiros </p>
                            <p> de 2° a 6° feira, das 8h às 17h </p>
                            <li><hr class="dropdown-divider"></li>
                            <a> - Atendimento telefônico: </a> 
                            <p> Área Insular: (13) 3461-1096 / 3464-1018 / 3461-1105 </p>
                            <p>Área Continental: (13) 3566-6013 </p>
                            <li><hr class="dropdown-divider"></li>
                            <a> - Atendimento via e-mail: catatrecosaovicente@gmail.com </a>
                            <li><hr class="dropdown-divider"></li>
                            <a> - WhatsApp Área Insular: (13) 97423-4472 </a>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>