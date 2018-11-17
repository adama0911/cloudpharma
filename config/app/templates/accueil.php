
<!DOCTYPE html>
<html lang="en">


  	<head>
	    <title><?=$titlePage;?></title>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.css">
        <link href="../assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <script src="../assets/js/jquery-2.2.1.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-light bg-light justify-content-between" style="background-color: black">
            <a class="navbar-brand">Accueil</a>
            <form class="form-inline" method="get" action="<?php echo $baseUrl; ?>/erreur">
                <button class="btn btn-outline-success btn-sm" type="submit">Se déconnecter</button>
            </form>
        </nav>
        <div class="row" style="margin-top:2rem; margin-right:0.5rem; margin-left:0.5rem" id="result">
            <div class="col-sm-5" style="background-color: orange; margin-bottom: 1rem;margin-right: 6rem;">
                <h4 style="text-align: center; color:black;padding-top: 1rem">Orange Money</h4>
                <div class="row" style="margin-top: 1rem;">
                    <div class="col-sm-12 col-xs-12" style="margin: 0 auto; text-align: center">
                        <button class="btn btn-primary btn-sm" title="Rechercher ALL OM" onclick="validerRechercherAllModal('OM')" style="background-color: black; border-color: black"><i class="fa fa-search-plus" aria-hidden="true" style="background-color: black"></i> Rechercher</button>
                        <button class="btn btn-primary btn-sm" style="background-color: black; border-color: black" title="Remonter ALL OM" onclick="validerRemonterALLModal('OM')"><i style="background-color: black" class="fa fa-arrow-up" aria-hidden="true"></i> Remonter</button>
                        <button style="background-color: black; border-color: black" class="btn btn-primary btn-sm" title="Reinitialiser ALL OM" onclick="validerReinitialiserAll('OM')"><i style="background-color: black" class="fa fa-refresh" aria-hidden="true"></i> Réinitialiser</button>
                    </div>
                </div>
                <div class="row" style="margin-top: 2rem;">
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
            <div class="col-sm-5 offset-sm-1" style="background-color: green;margin-bottom: 1rem;m= margin-right: 6rem;">
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
        </div>


        <div class="modal fade"  id="modalRechercher" tabindex="-1" role="dialog" aria-labelledby="modalRechercherTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document" >
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
            <div class="modal-dialog modal-lg" role="document" >
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
        </script>
    </body>
</html>
