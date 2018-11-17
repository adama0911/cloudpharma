
<!DOCTYPE html>
<html lang="en">
  	<head>
	    <title><?=$titlePage;?></title>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="../assets/css/accueil.css">
        <link href="../assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <script src="../assets/js/jquery-2.2.1.min.js"></script>
    </head>
    <body class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-light bg-light justify-content-between" style="background-color: black">
                    <a class="navbar-brand">Accueil</a>
                    <form class="form-inline" method="get" action="<?php echo $baseUrl; ?>/erreur">
                        <button class="btn btn-outline-success btn-sm" type="submit">Se déconnecter</button>
                    </form>
                </nav>    
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
            

                  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active bg-warning">
                            <a data-toggle="pill" href="#orange" id="orange" style="display:block; margin: 0.2rem; margin-left: 1rem; margin-right: 1rem;" class="text-white">
                                Orange Money
                            </a>                      
                        </li>
                        <li class="nav-item bg-primary" >
                            <a data-toggle="pill" href="#tigo" id="tigo" style="display:block; margin: 0.2rem; margin-left: 1rem; margin-right: 1rem;" class="text-white">
                                Tigo Cash
                            </a>
                        </li>
                        <li class="nav-item bg-info text-white">
                            <a data-toggle="pill" href="#wizall" id="wizall" style="display:block; margin: 0.2rem; margin-left: 1rem; margin-right: 1rem;" class="text-white">
                                Wizall
                            </a>
                        </li>
                        <li class="nav-item bg-danger text-white">
                            <a data-toggle="pill" href="#emoney" id="emoney" style="display:block; margin: 0.2rem; margin-left: 1rem; margin-right: 1rem;" class="text-white">
                                E-money
                            </a>
                        </li>
                        <li class="nav-item bg-dark ">
                            <a data-toggle="pill" href="#tnt" id="tnt"  style="display:block; margin: 0.2rem; margin-left: 1rem; margin-right: 1rem;" class="text-white">
                                TNT
                            </a>
                        </li>
                        <li class="nav-item bg-default">
                            <a data-toggle="pill" href="#smscode" id="smscode" style="display:block; margin: 0.2rem; margin-left: 1rem; margin-right: 1rem;">
                                 <i class="fa fa-comment-alt"></i>Code SMS
                            </a>
                        </li>
                        <li class="nav-item bg-default">
                            <a data-toggle="pill" href="#airtime" id="airtime" style="display:block; margin: 0.2rem; margin-left: 1rem; margin-right: 1rem;">
                               <i class="fa fa-phone"></i> Airtime
                            </a>
                        </li>
                        <li class="nav-item bg-default">
                            <a data-toggle="pill" href="#systeme" id="systeme" style="display:block; margin: 0.2rem; margin-left: 1rem; margin-right: 1rem;">
                                <i class="fa fa-cogs"></i> Systéme
                            </a>
                        </li>
                    </ul>   
                  </div>
                </nav>
<!--                 <ul class="nav nav-tabs row">
                    <li class="nav-tab">
                        <a data-toggle="pill" href="#orange" id="orange">
                            <button type="button" class="btn btn-warning">Orange Money </button>
                        </a>
                    </li>
                    <li class="nav-tab">
                        <a data-toggle="pill" href="#tigo" id="tigo">
                            <button type="button" class="btn btn-success">Tigo Cash</button>
                        </a>
                    </li>
                    <li class="nav-tab">
                        <a data-toggle="pill" href="#wizall" id="wizall">
                            <button type="button" class="btn btn-info">Wizall</button>
                        </a>
                    </li>
                    <li class="nav-tab">
                        <a data-toggle="pill" href="#emoney" id="emoney">
                            <button type="button" class="btn btn-danger">E-money</button>
                        </a>
                    </li>
                    <li class="nav-tab">
                        <a data-toggle="pill" href="#tnt" id="tnt">
                            <button type="button" class="btn btn-secondary">TNT</button>
                        </a>
                    </li>
                    <li class="nav-tab">
                        <a data-toggle="pill" href="#smscode" id="smscode">
                            <button type="button" class="btn btn-default">Code SMS</button>
                        </a>
                    </li>
                    <li class="nav-tab">
                        <a data-toggle="pill" href="#airtime" id="airtime">
                            <button type="button" class="btn btn-default">Airtime</button>
                        </a>
                    </li>
                </ul> -->
            </div>
            <div class="col-12" style="margin-top:2rem; margin-right:0.5rem; margin-left:0.5rem" id="result">
                
            </div>
            <div class="col-12 tabs-content">
                <div class="row orange" style="margin-top:2rem;">
                    <div class="offset-lg-2 col-lg-7 offset-0 col-12 " style="background-color: orange; margin-bottom: 1rem;margin-right: 6rem;">
                        <h4 style="text-align: center; color:black;padding-top: 1rem">Orange Money</h4>
                        <div class="row" style="margin-top: 1rem;">
                            <div class="col-sm-12 col-xs-12" style="margin: 0 auto; text-align: center">
                                <button class="btn btn-primary btn-sm" title="Rechercher ALL OM" onclick="validerRechercherAllModal('OM')" style="background-color: black; border-color: black"><i class="fa fa-search-plus" aria-hidden="true" style="background-color: black"></i> Rechercher</button>
                                <button class="btn btn-primary btn-sm" style="background-color: black; border-color: black" title="Remonter ALL OM" onclick="validerRemonterALLModal('OM')"><i style="background-color: black" class="fa fa-arrow-up" aria-hidden="true"></i> Remonter</button>
                                <button style="background-color: black; border-color: black" class="btn btn-primary btn-sm" title="Reinitialiser ALL OM" onclick="validerReinitialiserAll('OM')"><i style="background-color: black" class="fa fa-refresh" aria-hidden="true"></i> Réinitialiser</button>
                            </div>
                        </div>
                        <div class="row" >
                            <div class="col-sm-12 col-xs-12">
                                <table class="table table-sm" style="text-align: center;">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>ETAT</th>
                                            <th colspan="3">OPERATIONS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php  for($id=1; $id<=$nbreCallOM; $id++) { ?>
                                            <tr>
                                                <th><?=$id;?></th>
                                                <td>-</td>
                                                <td><button class="btn btn-primary btn-sm" title="Rechercher OM" onclick="validerRechercherModal('OM',<?=$id;?>)" style="background-color: black; border-color: black"><i class="fa fa-search-plus" aria-hidden="true" style="background-color: black"></i></button></td>
                                                <td><button style="background-color: black; border-color: black" class="btn btn-primary btn-sm" title="Reinitialiser OM" onclick="validerReinitialiserBtn('OM',<?=$id;?>)"><i style="background-color: black" class="fa fa-refresh" aria-hidden="true"></i></button></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row  tigo" style="display: none;  visibility: hidden;margin-top:2rem;">
                    <div class="offset-lg-2 col-lg-7 offset-0 col-12 " style="background-color: green;margin-bottom: 1rem;m= margin-right: 6rem;">
                        <h4 style="text-align:center; color:black; padding-top:1rem">Tigo Cash</h4>
                        <div class="row" style="margin-top:1rem;">
                            <div class="col-sm-12 col-xs-12" style="text-align: center;padding-bottom: 2rem;">
                                <button class="btn btn-primary btn-sm" title="Rechercher ALL TC" onclick="validerRechercherAllModal('TC')" style="background-color: blue; border-color: blue"><i class="fa fa-search-plus" aria-hidden="true" style="background-color: blue"></i> Rechercher</button>
                                <button class="btn btn-primary btn-sm" style="background-color: blue; border-color: blue" title="Remonter ALL TC" onclick="validerRemonterALLModal('TC')"><i style="background-color: blue" class="fa fa-arrow-up" aria-hidden="true"></i> Remonter</button>
                                <button style="background-color: blue; border-color: blue" class="btn btn-primary btn-sm" title="Reinitialiser ALL TC" onclick="validerReinitialiserAll('TC')"><i style="background-color: blue" class="fa fa-refresh" aria-hidden="true"></i> Réinitialiser</button>
                            </div>
                        </div>
                        <div class="col-sm-12 col-xs-12"  style="text-align:center;">
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>ETAT</th>
                                        <th colspan="3">OPERATIONS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php  for($id=1; $id<=$nbreCallTC; $id++) { ?>
                                        <tr>
                                            <th><?=$id;?></th>
                                            <td>-</td>
                                            <td><button class="btn btn-primary btn-sm" title="Rechercher TC" onclick="validerRechercherModal('TC',<?=$id;?>)"><i class="fa fa-search-plus" aria-hidden="true"></i></button></td>
                                            <td><button class="btn btn-primary btn-sm" title="Reinitialiser TC" onclick="validerReinitialiserModal('TC',<?=$id;?>)"><i class="fa fa-refresh" aria-hidden="true"></i></button></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row  emoney" style="display: none;  visibility: hidden; margin-top:2rem;">
                    <div class="offset-lg-2 col-lg-7 offset-0 col-12  alert-danger" style="margin-bottom: 1rem;m= margin-right: 6rem;">
                        <h4 style="text-align:center; color:black; padding-top:1rem">E-money</h4>
                        <div class="row" style="margin-top:1rem;">
                            <div class="col-sm-12 col-xs-12" style="text-align: center;padding-bottom: 2rem;">
                                <button class="btn btn-primary btn-sm" title="Rechercher ALL TC" onclick="validerRechercherAllModal('TC')" style="background-color: blue; border-color: blue"><i class="fa fa-search-plus" aria-hidden="true" style="background-color: blue"></i> Rechercher</button>
                                <button class="btn btn-primary btn-sm" style="background-color: blue; border-color: blue" title="Remonter ALL TC" onclick="validerRemonterALLModal('TC')"><i style="background-color: blue" class="fa fa-arrow-up" aria-hidden="true"></i> Remonter</button>
                            </div>
                            <div class="col-sm-12 col-xs-12"  style="text-align:center;">
                                <div class ="row">
                                        <div class="col-6">
                                            Montant <input type="number" name="montant" id="montantEmo" class="form-control saisir" placeholder="montant">
                                        </div>
                                        <div class="col-6" >
                                            Id User <input type="number" name="iduser"  id="iduserEmo" class="form-control saisir" placeholder="Id User">
                                        </div>
                                        <div class="col-6" >
                                           Depends On <input type="number" name="depends_on" id="depends_onEmo" class="form-control saisir" placeholder="Depends On ">
                                        </div>
                                        <div class="col-6" >
                                            Info Client <input type="text" name="infoclient"  id="infoclientEmo" class="form-control saisir" placeholder="Info Client">
                                        </div>
                                        <div class="col-6" >
                                            date Operation <input type="text" name="dateoperation"  id="dateoperationEmo" class="form-control saisir" placeholder="Date Operation">
                                        </div>
                                        <div class="col-6">
                                            Type Operation <input type="text" name="typeoperation" id="typeoperationEmo" class="form-control saisir" placeholder="Type Operation">
                                        </div>
                                        <div class="col-6" style="margin: 0 auto; text-align: center; margin-bottom: 3rem; margin-top: 1rem">
                                            <button class="btn btn-primary btn-sm orange" onclick="validerRemonterEmoneyModall()" style="margin: 0 auto; text-align: center;">Remonter</button>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row  wizall" style="display: none;  visibility: hidden;margin-top:2rem;">
                    <div class="offset-lg-2 col-lg-7 offset-0 col-12   alert-info" style="margin-bottom: 1rem;m= margin-right: 6rem;">
                        <h4 style="text-align:center; color:black; padding-top:1rem">Wizall</h4>
                        <div class="row" style="margin-top:1rem;">
                            <div class="col-sm-12 col-xs-12" style="text-align: center;padding-bottom: 2rem;">
                                <button class="btn btn-primary btn-sm" title="Rechercher ALL TC" onclick="validerRechercherAllModal('WIZALL')" style="background-color: blue; border-color: blue"><i class="fa fa-search-plus" aria-hidden="true" style="background-color: blue"></i> Rechercher</button>
                                <button class="btn btn-primary btn-sm" style="background-color: blue; border-color: blue" title="Remonter ALL TC" onclick="validerRemonterALLModal('WIZALL')"><i style="background-color: blue" class="fa fa-arrow-up" aria-hidden="true"></i> Remonter</button>
                            </div>
                            <div class="col-sm-12 col-xs-12"  style="text-align:center;">
                                <div class="row orange">
                                            
                                        <div class="col-6">
                                            Montant <input type="number" name="montant" id="montantWiz" class="form-control saisir" placeholder="montant">
                                        </div>
                                        <div class="col-6" >
                                            Type Operation <input type="text" name="typeoperation"  id="typeoperationWiz" class="form-control saisir" placeholder="Type Operation">
                                        </div>
                                        <div class="col-12" >
                                            Infos Operation <input type="text" name="infosoperation" id="infosoperationWiz" class="form-control saisir" placeholder="Infos Operation">
                                        </div>
                                        <div class="col-6" >
                                            Info Client <input type="text" name="infoclient"  id="infoclientWiz" class="form-control saisir" placeholder="Info Client">
                                        </div>
                                        <div class="col-6" >
                                            Telephone <input type="number" name="" id="telephoneWiz" class="form-control saisir" placeholder="telephone">
                                        </div>
                                        <div class="col-6" >telephone
                                            date Operation <input type="text" name="dateoperation"  id="dateoperationWiz" class="form-control saisir" placeholder="Date Operation">
                                        </div>
                                        <div class="col-6">
                                            id wizall <input type="number" name="idwizall" id="idwizallWiz" class="form-control saisir" placeholder="id wizall">
                                        </div>
                                        <div class="col-6" style="margin: 0 auto; text-align: center; margin-bottom: 3rem; margin-top: 1rem">
                                            <button class="btn btn-primary btn-sm orange" onclick="validerRemonterWizallModall()" style="margin: 0 auto; text-align: center;">Remonter</button>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row  tnt" style="display: none;  visibility: hidden;margin-top:2rem;">
                    <div class="offset-lg-2 col-lg-7 offset-0 col-12  alert-warning" style="margin-bottom: 1rem;m= margin-right: 6rem;">
                        <h4 style="text-align:center; color:black; padding-top:1rem">TNT</h4>
                        <div class="row" style="margin-top:1rem;">
                            <div class="col-sm-12 col-xs-12" style="text-align: center;padding-bottom: 2rem;">
                                <button class="btn btn-primary btn-sm" title="Rechercher ALL TC" onclick="validerRechercherModalTnt()" style="background-color: blue; border-color: blue"><i class="fa fa-search-plus" aria-hidden="true" style="background-color: blue"></i> Rechercher</button>
                            </div>
                            <div class="col-sm-12 col-xs-12"  style="text-align:center;">
                                <div class="row orange">
                                        <div class="offset-3 col-6" >
                                            Montant <input type="montant" name="montantTnt"  id="montantTnt" class="form-control saisir" placeholder="">
                                        </div>
                                        <div class="col-6">
                                            Nom client <input type="text" name="nomclientTnt" id="nomclientTnt" class="form-control saisir" placeholder="">
                                        </div>

                                        <div class="col-6" >
                                            Prenom client <input type="text" name="prenomclientTnt"  id="prenomclientTnt" class="form-control saisir" placeholder="">
                                        </div>

                                        <div class="col-6" >
                                            Téléphone Client <input type="number" name="telephoneClientTnt" id="telephoneClientTnt" class="form-control saisir" placeholder=" ">
                                        </div>

                                        <div class="col-6" >
                                            Numéro Chip <input type="number" name="numeroChipTnt"  id="numeroChipTnt" class="form-control saisir" placeholder="">
                                        </div>
                                        <div class="col-6" >
                                            Numéro Carte <input type="number" name="numeroCarteTnt" id="numeroCarteTnt" class="form-control saisir" placeholder="">
                                        </div>
                                        <div class="col-6" >
                                            duree <input type="number" name="duree"  id="duree" class="form-control saisir" placeholder="">
                                        </div>
                                        <div class="col-12">
                                            Type De Bouquet
                                            <select  class="form-control saisir" id="typeDeBouquetTnt" name="typeDeBouquetTnt" required=""  ng-reflect-required="" ng-reflect-name="tbouquet" ng-reflect-model="Maanaa">
                                                <option >Maanaa</option>
                                                <option >Boul khool</option>
                                                <option >Maanaa + Boul khool</option>
                                            </select>
                                        </div>
                                        <div class="col-6" style="margin: 0 auto; text-align: center; margin-bottom: 3rem; margin-top: 1rem">
                                            <button class="btn btn-primary btn-sm orange" onclick="validerRemonterTntModall()" style="margin: 0 auto; text-align: center;">Remonter</button>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row  smscode" style="display: none;  visibility: hidden;margin-top:2rem;">
                    <div class="offset-lg-2 col-lg-7 offset-0 col-12  alert-default" style="margin-bottom: 0.5rem;m= margin-right: 6rem;">
                        <h4 style="text-align:center; color:black; padding-top:0.5rem">SMS CODE</h4>
                        <div class="row" >
                            <div class="col-sm-12 col-xs-12" style="text-align: center;padding-bottom: 2rem;">
                                <!-- <button class="btn btn-primary btn-sm" title="Rechercher ALL TC" onclick="validerRechercherAllModal('WIZALL')" style="background-color: blue; border-color: blue"><i class="fa fa-search-plus" aria-hidden="true" style="background-color: blue"></i> Rechercher</button>
                                <button class="btn btn-primary btn-sm" style="background-color: blue; border-color: blue" title="Remonter ALL TC" onclick="validerRemonterALLModal('WIZALL')"><i style="background-color: blue" class="fa fa-arrow-up" aria-hidden="true"></i> Remonter</button> -->
                            </div>
                            <div class="col-sm-12 col-xs-12"  style="text-align:center;">
                                <div class="row bg-dark" style="padding-bottom:2rem">
                                        <div class="col-8" style="margin-top:2rem;color:white">
                                            Numero Caisse <input type="number" name="numerocaisse" id="numerocaisse" class="form-control saisir" placeholder="numero caisse">
                                        </div>
                                        <div class="col-4" style="margin-top:4rem">
                                            <button class="btn btn-primary btn-sm orange" onclick="validerSMSCaisse()" style="margin: 0 auto; text-align: center;">Valider</button>
                                        </div>
                                </div>
                                <div class="row bg-dark"  style="margin-top:2rem; padding-bottom:2rem" >
                                        <div class="col-8" style="margin-top:2rem; color:white">
                                            Numero Superviseur <input type="number" name="numerosuperviseur" id="numerosuperviseur" class="form-control saisir" placeholder="numero superviseur">
                                        </div>
                                        <div class="col-4" style="margin-top:4rem">
                                            <button class="btn btn-primary btn-sm orange" onclick="validerSMSSuperviseur()" style="margin: 0 auto; text-align: center;">Valider</button>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row  airtime" style="display: none;  visibility: hidden;margin-top:2rem;">
					<div style="margin-left:2em" class="hidden-sm-hidden-md"  >
						<div style="margin:1.5em"  class="hidden-sm hidden-md" >
						 	<button class="btn btn-warning" onclick="reinitialiser('ceddo')" id="ceddo">reinitialiser ceddo</button>
						</div>
						<div style="margin:1.5em"  class="hidden-sm hidden-md" >
							<button class="btn btn-primary" onclick="reinitialiser('izi')" id="izi">reinitialiser izi</button>
						</div>
						<div style="margin:1.5em"  class="hidden-sm hidden-md" >
							<button class="btn btn-info" onclick="reinitialiser('yakalma')" id="yakalma">reinitialiser yakalma</button>
						</div>
					</div>
                    <div style="margin-left:2em" class="visible-sm-visible-md"  >
                        <div style="margin:1.5em"  class="hidden-sm hidden-md" >
                            <button class="btn btn-warning" onclick="reinitialiser('ceddo')" id="ceddo">reinitialiser ceddo</button>
                        </div>
                        <div style="margin:1.5em"  class="hidden-sm hidden-md" >
                            <button class="btn btn-primary" onclick="reinitialiser('izi')" id="izi">reinitialiser izi</button>
                        </div>
                        <div style="margin:1.5em"  class="hidden-sm hidden-md" >
                            <button class="btn btn-info" onclick="reinitialiser('yakalma')" id="yakalma">reinitialiser yakalma</button>
                        </div>
                    </div>
                </div>

                <div class="row  systeme" style="display: none;  visibility: hidden;margin-top:2rem;">
                    <div style="text-align: center;" class="col-12"  >
                        <button onclick="systeme(1)" class="btn btn-default" id="ceddo"><i class="fas fa-exchange-alt" style="font-size: 1.4rem; margin-right: 0.5rem;" ></i>Basculement</button>
                        <button onclick="systeme(2)" class="btn btn-danger" id="ceddo" style="margin-left: 1rem;"><i class="fas fa-power-off" style="font-size: 1.4rem;" ></i></button>
                    </div>

                    <div class="col-12 show" style="text-align: center;" id="basculerservice">
                        <div class="row">
                            <div class="col-12">
                                <div class="row" style="margin-top: 2rem; justify-content: center;">
                                    <div class="col-lg-2 col-3">
                                        Services
                                    </div>  
                                    <div class="col-lg-4 col-8">
                                        <select  class="form-control"  id="service">
                                            <option value="tout">Tout</option>
                                            <option value="airtime">Artime</option>
                                            <option value="yakalma">Woyofal</option>
                                        </select>
                                    </div> 
                                </div>
                                <div class="row" style="margin-top: 2rem; justify-content: center;">
                                    <div class="col-lg-2 col-3">
                                        De
                                    </div>  
                                    <div class="col-lg-4 col-8">
                                        <select  class="form-control"  id="de">
                                            <option value="airtime">Sentool</option>
                                            <option value="ZuuluPay">ZuuluPay</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 2rem; justify-content: center;">
                                    <div class="col-lg-2 col-3">
                                       A
                                    </div>  
                                    <div class="col-lg-4 col-8">
                                        <select  class="form-control"  id="a">
                                            <option value="ZuuluPay">ZuuluPay</option>
                                            <option value="airtime">Sentool</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 2rem; justify-content: center;">
                                    <button class="btn btn-primary" onclick="basculementservice()">Valider</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 hidden" style="text-align: center;" id="arreterservice">
                        <div class="row">
                            <div class="col-12">
                                <div class="row" style="margin-top: 2rem; justify-content: center;">
                                    <div class="col-lg-2 col-3">
                                        Services
                                    </div>  
                                    <div class="col-lg-4 col-8">
                                        <select  class="form-control" id="service2">
                                            <option value="tout">Tout</option>
                                            <option value="airtime">Artime</option>
                                            <option value="woyofal">Woyofal</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 2rem; justify-content: center;">
                                    <div class="col-lg-2 col-3">
                                        Option
                                    </div>  
                                    <div class="col-lg-4 col-8" >
                                        <select  class="form-control" id="arrdem">
                                            <option value="on">Demmarer</option>
                                            <option value="off">Arreter</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row" style="margin-top: 2rem; justify-content: center;">
                                    <button class="btn btn-primary" onclick="arretservice()">Valider</button>
                                </div>
                            </div>
                        </div>
                    </div>
<!--                     <div style="margin-left:2em" class="ol-12"  >
                        <button class="btn btn-danger" id="ceddo"><i class="fas fa-power-off" style="font-size: 1.4rem; margin-right: 0.5rem;"></i> Basculement un(des) service(s)</button>
                        <button class="btn btn-warning" id="ceddo"> Arrêter un(des) service(s) </button>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="modal fade"  id="modalremonterTnt" tabindex="-1" role="dialog" aria-labelledby="modalRechercherTntTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document" >
                    <div class="modal-content" >
                        <div class="modal-header">
                            <h5 class="modal-title center-block" id="modalRechercherTitle" style="margin: 0 auto; text-align: center;">RECHERCHE TNT</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" style="background-color:">
                            <div class="row orange">
                                <div class="col-6" >
                                    Montant 
                                </div>
                                <div class="col-6" >
                                   <input disabled="disabled" type="number" name="montantTntMo"  id="montantTntMo" class="form-control saisir" placeholder="">
                                </div>
                                <div class="col-6" style="margin-top:1rem">
                                    Nom client 
                                </div>
                                <div class="col-6" style="margin-top:1rem">
                                    <input disabled="disabled" type="text" name="nomclientTntMo" id="nomclientTntMo" class="form-control saisir" placeholder="">
                                </div>

                                <div class="col-6" style="margin-top:1rem">
                                    Prenom client
                                </div>
                                <div class="col-6" style="margin-top:1rem">
                                     <input disabled="disabled" type="text" name="prenomclientTntMo"  id="prenomclientTntMo" class="form-control saisir" placeholder="">
                                </div>

                                <div class="col-6" style="margin-top:1rem">
                                    Téléphone Client
                                </div>
                                <div class="col-6" style="margin-top:1rem">
                                    <input disabled="disabled" type="number" name="telephoneClientTntMo" id="telephoneClientTntMo" class="form-control saisir" placeholder=" ">
                                </div>

                                <div class="col-6" style="margin-top:1rem">
                                    Numéro Chip 
                                </div>
                                <div class="col-6" style="margin-top:1rem">
                                    <input disabled="disabled" type="number" name="numeroChipTntMo"  id="numeroChipTntMo" class="form-control saisir" placeholder="">
                                </div>

                                <div class="col-6" style="margin-top:1rem">
                                    Numéro Carte 
                                </div>
                                <div class="col-6" style="margin-top:1rem">
                                    <input disabled="disabled" type="number" name="numeroCarteTntMo" id="numeroCarteTntMo" class="form-control saisir" placeholder="">
                                </div>


                                <div class="col-6" style="margin-top:1rem">
                                    Nombre De Mois 
                                </div>
                                <div class="col-6" style="margin-top:1rem">
                                    <input disabled="disabled" type="number" name="dureeMo"  id="dureeMo" class="form-control saisir" placeholder="">
                                </div>
                                
                                <div class="col-6" style="margin-top:1rem">
                                    Type De Bouquet
                                </div>
                                <div class="col-12" style="margin-top:1rem">
                                    <select  disabled="disabled" class="form-control saisir" id="typeDeBouquetTntMo" name="typeDeBouquetTntMo" required=""  ng-reflect-required="" ng-reflect-name="tbouquet" ng-reflect-model="Maanaa">
                                        <option >Maanaa</option>
                                        <option >Boul khool</option>
                                        <option >Maanaa + Boul khool</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12" style="margin: 0 auto; text-align: center; margin-top: 1rem">
                                <button class="btn btn-primary btn-sm orange" onclick="validerRemonterTnt()" style="margin: 0 auto; text-align: center;">Remonter</button>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                    </div>
                </div>
            </div>  
            </div>
        </div>

        <div class="modal fade"  id="modalRechercherTnt" tabindex="-1" role="dialog" aria-labelledby="modalRechercherTntTitle" aria-hidden="true">
            <div class="modal-dialog" role="document" >
                <div class="modal-content" >
                    <div class="modal-header">
                        <h5 class="modal-title center-block" id="modalRechercherTitle" style="margin: 0 auto; text-align: center;">RECHERCHE TNT</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style="background-color:">
                        <div class="row orange">
                            <div class="col-12" id="num">
                                Numéro Chip ou Carte ou Téléphone
                            </div>
                            <div class="col-12" id="montt">
                                <input type="number" name="numeroChipCartTel"  id="numeroChipCartTel" class="form-control saisir" placeholder="Numéro">
                            </div>
                        </div>
                        <div class="row" style="margin: 0 auto; text-align: center; margin-bottom: 3rem; margin-top: 1rem">
                            <button class="btn btn-primary btn-sm orange" onclick="validerRechercherTntBtn()" style="margin: 0 auto; text-align: center;">Recherche</button>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade"  id="modalRechercher" tabindex="-1" role="dialog" aria-labelledby="modalRechercherTitle" aria-hidden="true">
            <div class="modal-dialog" role="document" >
                <div class="modal-content" >
                    <div class="modal-header">
                        <h5 class="modal-title center-block" id="modalRechercherTitle" style="margin: 0 auto; text-align: center;">RECHERCHE</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style="background-color:">
                        <div class="row orange">
                            <div class="col" id="num">
                                Numéro <input type="number" name="saisirnumero" id="saisirnumero" class="form-control saisir" placeholder="Numéro">
                            </div>
                            <div class="col" id="montt">
                                Montant <input type="number" name="saisirmontant"  id="saisirmontant" class="form-control saisir" placeholder="Montant">
                            </div>
                        </div>
                        <div class="row" style="margin: 0 auto; text-align: center; margin-bottom: 3rem; margin-top: 1rem">
                            <button class="btn btn-primary btn-sm orange" onclick="validerRechercherBtn()" style="margin: 0 auto; text-align: center;">Recherche</button>
                        </div>

                        <h2 class="orange" style="margin: 0 auto; text-align: center; margin-bottom: 1rem">Opérations</h2>
                        <table class="table table-sm table-responsive" >
                            <thead>
                            <tr>
                                <th id="">Op</th>
                                <th id="">Numéro</th>
                                <th id="">Mnt</th>
                                <th id="">Date</th>
                                <th id="">Remonter</th>
                            </tr>
                            </thead>
                            <tbody id="tbody">
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade"  id="modalRechercherAll" tabindex="-1" role="dialog" aria-labelledby="modalRechercherAllTitle" aria-hidden="true">
            <div class="modal-dialog" role="document" >
                <div class="modal-content" >
                    <div class="modal-header">
                        <h5 class="modal-title center-block" id="modalRechercherAllTitle" style="margin: 0 auto; text-align: center;">RECHERCHE</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style="background-color:">
                        <div class="row orange">
                            <div class="col" id="num">
                                Numéro <input type="number" name="saisirnumeroAll" id="saisirnumeroAll" class="form-control saisir" placeholder="Numéro">
                            </div>
                            <div class="col" id="montt">
                                Montant <input type="number" name="saisirmontantAll"  id="saisirmontantAll" class="form-control saisir" placeholder="Montant">
                            </div>
                        </div>
                        <div class="row" style="margin: 0 auto; text-align: center; margin-bottom: 3rem; margin-top: 1rem">
                            <button class="btn btn-primary btn-sm orange" onclick="validerRechercherAllBtn()" style="margin: 0 auto; text-align: center;">Recherche</button>
                        </div>

                        <h2 class="orange" style="margin: 0 auto; text-align: center; margin-bottom: 1rem">Opérations</h2>
                        <table class="table table-sm table-responsive" >
                            <thead>
                            <tr>
                                <th id="">No Phone</th>
                                <th id="">Op</th>
                                <th id="">Numéro</th>
                                <th id="">Mnt</th>
                                <th id="">Date</th>
                                <th id="">Remonter</th>
                            </tr>
                            </thead>
                            <tbody id="tbodyAll">
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade"  id="modalRemonter" tabindex="-1" role="dialog" aria-labelledby="modalRemonterTitle" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalRemonterTitle">Remonter</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="fichier"><i class="fa fa-upload" aria-hidden="true" style=""></i>Importer un fichier Excel</label>
                            <pre><input type="file" class="form-control-file" accept=".xls,.xlsx" name="xlfile" id="xlf"/></pre>
                            <br/>
                            
                            <div id="htmlout"></div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="modal fade"  id="modalRemonterWizall" tabindex="-1" role="dialog" aria-labelledby="modalRemonterWizallTitle" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalRemonterTitle">Remonter</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-4" style="margin-top:2rem">
                                Montant
                            </div>          
                            <div class="col-8" style="margin-top:2rem">
                                <input disabled="disabled" type="number" name="montant" id="montantMo" class="form-control saisir" placeholder="montant">
                            </div>
                            <div class="col-4" style="margin-top:2rem">
                                Type Operation 
                            </div> 
                            <div class="col-8" style="margin-top:2rem">
                                <input disabled="disabled" type="text" name="typeoperation"  id="typeoperationMo" class="form-control saisir" placeholder="Type Operation">
                            </div>
                            <div class="col-4" style="margin-top:2rem">
                                Infos Operation
                            </div> 
                            <div class="col-8" style="margin-top:2rem">
                                <input disabled="disabled" type="text" name="infosoperation" id="infosoperationMo" class="form-control saisir" placeholder="Infos Operation">
                            </div>
                            <div class="col-4" style="margin-top:2rem">
                                Info Client
                            </div> 
                            <div class="col-8" style="margin-top:2rem">
                                <input disabled="disabled" type="text" name="infoclient"  id="infoclientMo" class="form-control saisir" placeholder="Info Client">
                            </div>
                            <div class="col-4" style="margin-top:2rem">
                                Telephone
                            </div> 
                            <div class="col-8" style="margin-top:2rem">
                                <input disabled="disabled" type="text" name="" id="telephoneMo" class="form-control saisir" placeholder="telephone">
                            </div>
                            <div class="col-4" style="margin-top:2rem">
                                date Operation
                            </div> 
                            <div class="col-8" style="margin-top:2rem">
                                <input disabled="disabled" type="text" name="dateoperation"  id="dateoperationMo" class="form-control saisir" placeholder="Date Operation">
                            </div>
                            <div class="col-4" style="margin-top:2rem">
                                id wizall
                            </div> 
                            <div class="col-8" style="margin-top:2rem">
                                <input disabled="disabled" type="number" name="idwizall" id="idwizallMo" class="form-control saisir" placeholder="id wizall">
                            </div>
                            <div class="col-12" style="margin: 0 auto; text-align: center; margin-bottom: 3rem; margin-top: 1rem">
                                <button class="btn btn-primary btn-sm orange" onclick="validerRemonterWizallBtn()" style="margin: 0 auto; text-align: center;">Remonter</button>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="modal fade"  id="modalRemonterEmoney" tabindex="-1" role="dialog" aria-labelledby="modalRemonterWizallTitle" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalRemonterTitle">Remonter</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-4" style="margin-top:2rem">
                                Montant
                            </div>          
                            <div class="col-8" style="margin-top:2rem">
                                <input disabled="disabled" type="number" name="montant" id="montantEmoMo" class="form-control saisir" placeholder="montant">
                            </div>
                            <div class="col-4" style="margin-top:2rem">
                                Id User 
                            </div> 
                            <div class="col-8" style="margin-top:2rem">
                                <input disabled="disabled" type="number" name="iduser"  id="iduserEmoMo" class="form-control saisir" placeholder="Id User">
                            </div>
                            <div class="col-4" style="margin-top:2rem">
                                Depends On 
                            </div> 
                            <div class="col-8" style="margin-top:2rem">
                                <input disabled="disabled" type="number" name="depends_onEmoMo" id="depends_onEmoMo" class="form-control saisir" placeholder="Depends On ">
                            </div>
                            <div class="col-4" style="margin-top:2rem">
                                Info Client
                            </div> 
                            <div class="col-8" style="margin-top:2rem">
                                <input disabled="disabled" type="text" name="infoclient"  id="infoclientEmoMo" class="form-control saisir" placeholder="Info Client">
                            </div>
                            <div class="col-4" style="margin-top:2rem">
                                date Operation
                            </div> 
                            <div class="col-8" style="margin-top:2rem">
                                <input disabled="disabled" type="text" name="dateoperation"  id="dateoperationEmoMo" class="form-control saisir" placeholder="Date Operation">
                            </div>
                            <div class="col-4" style="margin-top:2rem">
                                Type Operation 
                            </div> 
                            <div class="col-8" style="margin-top:2rem">
                                <input disabled="disabled" type="text" name="typeoperation" id="typeoperationEmoMo" class="form-control saisir" placeholder="Type Operation">
                            </div>
                            <div class="col-12" style="margin: 0 auto; text-align: center; margin-bottom: 3rem; margin-top: 1rem">
                                <button class="btn btn-primary btn-sm orange" onclick="validerRemonterEmoneyBtn()" style="margin: 0 auto; text-align: center;">Remonter</button>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

        <script src="../assets/bootstrap/js/bootstrap.js"></script>
        <script>var baseUrl = '<?php echo $baseUrl?>';</script>
        <script src="../assets/js/main.js"></script>
        <script src="../assets/js/shim.js"></script>
        <script src="../assets/js/xlsx.full.min.js"></script>

        <script>
            var X=XLSX, XW = {msg:'xlsx', worker:'../assets/js/xlsxworker.js'};
            var process_wb = (function() {
                var to_json = function to_json(workbook) {
                    var result = {};
                    workbook.SheetNames.forEach(function(sheetName) {
                        var roa = X.utils.sheet_to_json(workbook.Sheets[sheetName], {header:1});
                        if(roa.length) result[sheetName] = roa;
                    });
                    return JSON.stringify(result, 2, 2);
                };

                return function process_wb(wb) {
                    //2ieme condition
                    traitementremonter(JSON.parse(to_json(wb)))
                };
            })();

            var do_file = (function() {
                var use_worker = typeof Worker !== 'undefined';
                var xw = function xw(data, cb) {
                    var worker = new Worker(XW.worker);
                    worker.onmessage = function(e) {
                        switch(e.data.t) {
                            case 'ready': break;
                            case 'e': console.error(e.data.d); break;
                            case XW.msg: cb(JSON.parse(e.data.d)); break;
                        }
                    };
                    worker.postMessage({d:data,b:'binary'});
                };

                return function do_file(files) {
                    var f = files[0];
                    var reader = new FileReader();
                    reader.onload = function(e) { if(use_worker) xw(e.target.result, process_wb); };
                    if(f!=undefined) reader.readAsBinaryString(f);
                };
            })();

            (function() {
                var xlf = document.getElementById('xlf');
                if(!xlf.addEventListener) return;
                function handleFile(e) {
                    if(e.target.files.length!=0 && e.target.files[0].name.match(".xls")) {
                        do_file(e.target.files);
                    }else{
                        alert("Veuillez importer un fichier excel")
                        $("#xlf").val('');
                        $("#htmlout").html('<div class="alert alert-info" role="alert" style="margin: 0 auto; text-align: center; margin-bottom: 2rem;">Vérifier l\'extension de votre fichier</div>');
                    }
                }
                xlf.addEventListener('change', handleFile, false);
            })();

            function reinitialiser(service){
					alert(service);
					$.ajax({
						type: 'POST',
						url :'http://51.38.234.197/backendprod/horsSentiersBattus/scripts/airtime/reinitialiseAirtime.php',
						data :'service='+service,
						dataType: 'text',
						success:function(data){
							  if(data=='ok'){
								  alert(service+" reinitialisé");
							   }else{
								  // alert("echec de l'operation");
								   alert(data);
								   }
							}
						});
				}
            $(document).ready(function(){
				//alert("i am ready");
				
				/*		
				$('#ceddo').click(reinitialiser("ceddo"));
				$('#izi').click(reinitialiser("izi"));
				$('#yakalma').click(reinitialiser("yakalma"));
				*/
				
			});
        </script>
    </body>
</html>
