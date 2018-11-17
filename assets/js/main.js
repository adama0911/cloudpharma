$(function(){
    console.log('Begin 1');
    var typeP="";
    var idP=0;

    setInterval(function () {
        if(!navigator.onLine){
            $('#verifyconnction').css('display','block');
        }else{
            $('#verifyconnction').css('display','none');
        }
    }, 1000)

    $('.enfocus').on('focus', function(){
        $('.alert-danger').css('display','none') ;
        $('.alert-warning').css('display','none') ;
    })

    
    tabs();
})

function connexion() {
    $('#connexion').attr("disabled",true)
    if($('#username').val().length==0 || $('#password').val().trim().length==0){
        $('.alert-warning').css('display','block') ;
            $('#connexion').attr("disabled",false)
    }
    else{
        $('#loading').css('display','block') ;
        $.post(baseUrl+"/index.php/ajaxconnexion",{username : $("#username").val().trim(), password : $("#password").val().trim()}, function(datas){
            $('#loading').css('display','none') ;
            var result = JSON.parse(datas);
            if(result.etat){
                document.location.href=baseUrl+"/index.php/accueil"
            }
            else{
                $('.alert-danger').css('display','block') ;
                $('#connexion').attr("disabled",false)
            }
        });
    }
}

function validerRechercherModal(type,id){
    typeP=type;
    idP=id;
    $('.saisir').val('');
    $('#tbody').html('');
    $('#modalRechercherTitle').text("RECHERCHE "+type+" à la ligne "+id);
    $('#modalRechercher').modal('show');
}

function validerRechercherAllModal(type){
    typeP=type;
    $('.saisir').val('');
    $('#tbodyAll').html('');
    $('#modalRechercherAllTitle').text("RECHERCHE "+typeP);
    $('#modalRechercherAll').modal('show');
}

function validerRechercherBtn(){
    console.log("validerRechercherBtn"+typeP+" "+idP);
    if( ($("#saisirnumero").val().trim().length!=0) && ($("#saisirmontant").val().trim().length!=0)){
        if(typeP.match("OM")){
            $.post(baseUrl+"/ajax/rechercheom", {
                num: $("#saisirnumero").val().trim(),
                mnt:$("#saisirmontant").val().trim(),
                idp:idP
            }, function(datas){
                console.log(datas);
                getdatas(JSON.parse(datas).message.trim());
            });
        }else{
            $.post(baseUrl+"/ajax/recherchetc", {
                num: $("#saisirnumero").val().trim(),
                mnt:$("#saisirmontant").val().trim(),
                idp:idP
            }, function(datas){
                console.log(datas);
                tcgetdatas(JSON.parse(datas).message.trim());
            });
        }
    }else {
        console.log("ko")
    }
}

function validerSMSSuperviseur (){
    let numerosuperviseur = $("#numerosuperviseur").val();
    console.log(numerosuperviseur);
    $.post(baseUrl+"/ajax/smscodesuperviseur", {
        numerosuperviseur: numerosuperviseur,
    }, function(datas){
        $("#result").html('');
        data = JSON.parse(datas)
        $("#result").html("<p><b><i>Votre code  sms est : "+ data.message +"</i></b></p>")
    });
}

function validerSMSCaisse(){
    let numerocaisse = $("#numerocaisse").val();
    //console.log(numerocaisse);
    $.post(baseUrl+"/ajax/smscodecaisse", {
        numerocaisse: numerocaisse,
    }, function(datas){
        $("#result").html('');
        data = JSON.parse(datas)
        codesms = (data.message.split("***************"))[0]
        datasms = (data.message.split("***************"))[1]
        $("#result").html("<p><b><i>Code  sms: "+ codesms +"</i></b></br><b><i>date/Heure : "+ datasms +"</i></b></p>")
        //alert(datas);
    }).fail(function() {
       $("#result").html('');
        $("#result").html("<p><b><i>Une erreur </i></b></p>")
    });
}


function validerRechercherAllBtn(){
    console.log("validerRechercherBtn "+typeP);

    if( ($("#saisirnumeroAll").val().trim().length!=0) && ($("#saisirmontantAll").val().trim().length!=0)){
        if(typeP.match("OM")){
            $.post(baseUrl+"/ajax/rechercheallom", {
                num: $("#saisirnumeroAll").val().trim(),
                mnt:$("#saisirmontantAll").val().trim()
            }, function(datas){
                console.log(datas);
            });
        }
        //  else if(typeP.match("WIZALL")){
        //     $.get(baseUrl+"/ajax/rechercheallziwall",function(datas){
        //         wizallTransactions = (JSON.parse(datas)).message;

        //         console.log(wizallTransactions.split("<>"));
        //     });
        // }
        else{
            console.log($("#saisirnumeroAll").val().trim());
        }
    }else {
        console.log("ko")
    }
}

function validerRemonterWizallBtn (){
    let montant =  $("#montant").val();
    let typeoperation = $("#typeoperationWiz").val().trim();
    let infosoperation  = $("#infosoperationWiz").val().trim();
    let infoclient =  $("#infoclientWiz").val().trim();
    let telephone = $("#telephoneWiz").val().trim();
    let dateoperation = $("#dateoperationWiz").val().trim();
    let idwizall = $("#idwizallWiz").val();

    $('#modalRemonterWizall').modal('hide');

    $.post(baseUrl+"/ajax/remonterwizall", {
        montant: montant,
        typeoperation: typeoperation,
        infosoperation: infosoperation,
        infoclient : infoclient,
        telephone : telephone,
        dateoperation : dateoperation,
        idwizall : idwizall
    }, function(datas){
        $("#result").html('');
        $("#result").html("<p><b><i>Resultat remonter  : "+ datas +"</i></b></p>")
    });
    
}

function validerRemonterEmoneyBtn (){
    let montant = $("#montantEmo").val();
    let iduser  = $("#iduserEmo").val();
    let depends_on = $("#depends_onEmo").val();
    let infoclient = $("#infoclientEmo").val();
    let dateoperation = $("#dateoperationEmo").val();
    let typeoperation = $("#typeoperationEmo").val();

    $('#modalRemonterWizall').modal('hide');

    $.post(baseUrl+"/ajax/remonteremoney", {
        montant: montant,
        iduser: iduser,
        depends_on: depends_on,
        infoclient : infoclient,
        dateoperation : dateoperation,
        typeoperation : typeoperation
    }, function(datas){
        $("#result").html('');
        $("#result").html("<p><b><i>Resultat remonter  : "+ datas +"</i></b></p>")
    });
}

function validerRemonterEmoneyModall (){
    $("#montantEmoMo").val($("#montantEmo").val());
    $("#iduserEmoMo").val($("#iduserEmo").val());
    $("#depends_onEmoMo").val($("#depends_onEmo").val());
    $("#infoclientEmoMo").val($("#infoclientEmo").val());
    $("#dateoperationEmoMo").val($("#dateoperationEmo").val());
    $("#typeoperationEmoMo").val($("#typeoperationEmo").val());

    $('#modalRemonterEmoney').modal('show');
}

function validerRemonterTntModall (){
    $("#nomclientTntMo").val($("#nomclientTnt").val());
    $("#prenomclientTntMo").val($("#prenomclientTnt").val());
    $("#telephoneClientTntMo").val($("#telephoneClientTnt").val());
    $("#numeroChipTntMo").val($("#numeroChipTnt").val());
    $("#numeroCarteTntMo").val($("#numeroCarteTnt").val());
    $("#dureeMo").val($("#duree").val());
    $("#montantTntMo").val($("#montantTnt").val());
    $("#typeDeBouquetTntMo").val($("#typeDeBouquetTnt").val());

    $('#modalremonterTnt').modal('show');
}

function validerRemonterTnt(){
    let nomclientTnt = $("#nomclientTnt").val();
    let prenomclientTnt = $("#prenomclientTnt").val();
    let telephoneClientTnt = $("#telephoneClientTnt").val();
    let numeroChipTnt  = $("#numeroChipTnt").val();
    let numeroCarteTnt = $("#numeroCarteTnt").val();
    let dureeTnt = $("#duree").val();
    let typeDeBouquetStr = $("#typeDeBouquetTnt").val();
    let montantTnt = $("#montantTnt").val();


    if(typeDeBouquetStr == "Maanaa")
        typeDeBouquet = 1;
    else if (typeDeBouquetStr == "Boul khool")
        typeDeBouquet = 2;
    else
        typeDeBouquet = 3;
        

    $('#modalremonterTnt').modal('hide')
    $.post(baseUrl+"/ajax/remonterTnt", {
        nomclient: nomclientTnt,
        prenomclient: prenomclientTnt,
        telephoneClient: telephoneClientTnt,
        numeroChip: numeroChipTnt,
        numeroCarte: numeroCarteTnt,
        duree: dureeTnt,
        typeDeBouquet: typeDeBouquet,
        montant: montantTnt
    }, function(datas){
        console.log(datas);
        $("#result").html('');
        $("#result").html("<p><b><i>Resultat remonter  : "+ datas +"</i></b></p>")
    });

}

function validerRemonterWizallModall (){
    $("#montantMo").val($("#montantWiz").val());
    $("#typeoperationMo").val($("#typeoperationWiz").val().trim());
    $("#infosoperationMo").val($("#infosoperationWiz").val().trim());
    $("#infoclientMo").val($("#infoclientWiz").val().trim());
    $("#telephoneMo").val($("#telephoneWiz").val().trim());
    $("#dateoperationMo").val($("#dateoperationWiz").val().trim());
    $("#idwizallMo").val($("#idwizallWiz").val());

    $('#modalRemonterWizall').modal('show');
}

function validerRemonterALLModal(type){
    typeP=type;
    $('#modalRemonterTitle').text("REMONTER "+typeP)
    $('#modalRemonter').modal('show');
}

function validerReinitialiserAll(type){
    console.log("validerRechercher "+type);
}

function validerReinitialiserBtn(type,id){
	if(confirm("Êtes-vous sûr de reinitialisé le telephone "+ id)){
		console.log("validerReinitialiserBtn "+type+" "+id);
		$.post(baseUrl+"/ajax/reinitialiserOm", {
					id: id,
				}, function(datas){
                    $("#result").html('');
                    $("#result").html("<p><b><i> Renitialisation : "+ datas +"</i></b></p>")
				    //getdatas(JSON.parse(datas).message.trim());
				});
       }
}

function validerReinitialiserModal(type,id){
    console.log("validerRechercher "+type+" "+id);
    $('#modalReinitialiserTitle').text("REINITIALISER "+type+" à la ligne "+id)
    $('#modalReinitialiser').modal('show');
}

function validerRechercherModalTnt (){
    $('#modalRechercherTnt').modal('show');
}

function validerRechercherTntBtn (){
    let numa = $("#numeroChipCartTel").val();
    alert(numa);
    $('#modalRechercherTnt').modal('hide');

    $.post(baseUrl+"/ajax/rechercheTnt", {
        num: numa
    }, function(datas){
        datasObj = JSON.parse((JSON.parse(datas)).message);
        
        $("#nomclientTnt").val(datasObj["nom"]);
        $("#prenomclientTnt").val(datasObj["prenom"]);
        $("#telephoneClientTnt").val(datasObj["tel"]);
        $("#numeroChipTnt").val(datasObj["n_chip"]);
        $("#numeroCarteTnt").val(datasObj["n_carte"]);
        $("#duree").val(datasObj["duree"]);
        $("#montantTnt").val(datasObj["montant"]);

        if(datasObj["id_typeabonnement"] == 1)
            $("#typeDeBouquetTnt").val("Maanaa");
        else if (datasObj["id_typeabonnement"] == 2)
            $("#typeDeBouquetTnt").val("Boul khool");
        else
            $("#typeDeBouquetTnt").val("Maanaa + Boul khool");
    });
}


function getdatas(data){
    if(data=='vide'){
        $('#tbody').html('<div class="alert alert-warning" role="alert" style="margin: 0 auto; text-align: center; margin-bottom: 2rem; position: relative; display: none; ">Ce numero n\'existe pas dans notre base!</div>');
    }else {

        rec = data.split("  ");
        if (data.match("--")){
            $('#tbody').html('');
            rec.forEach(function(value){
                traitementre(value);
            });
        }else {
        }
    }
}

// ---------------today--------------------------

function tcgetdatas(data){
    if(data=='vide'){
        $('#tbody').html('<div class="alert alert-warning" role="alert" style="margin: 0 auto; text-align: center; margin-bottom: 2rem; position: relative; display: none; ">Ce numero n\'existe pas dans notre base!</div>');
    }else {

        rec = data.split("  ");
        if (data.match("--")){
            $('#tbody').html('');
            rec.forEach(function(value){
                tctraitementre(value);
            });
        }else {
        }
    }
}

function traitementre(rec) {
    var recunik = rec.split("--")[0].split("/");
    var tab= rec.split("--");
    //console.log(recunik);
    var id_recunik = rec.split("--")[1];
    var chaine = "<tr id=\"roww-"+id_recunik+"\">";
    var token=id_recunik;
    var operation=rec.split("--")[0];

    if(recunik[0]==1){
        chaine = chaine+"<td class=\"op\">depot</td>";
        chaine = chaine+"<td class=\"numm\">"+recunik[2]+"</td>";
        chaine = chaine+"<td class=\"mntt\">"+recunik[1]+"</td>";
    }
    if(recunik[0]==2){
        chaine = chaine+"<td class=\"op\">retrait</td>";
        chaine = chaine+"<td class=\"numm\">"+recunik[1]+"</td>";
        chaine = chaine+"<td class=\"mntt\">"+recunik[2]+"</td>";
    }
    if(recunik[0]==3){
        chaine = chaine+"<td class=\"op\">rac</td>";
        chaine = chaine+"<td class=\"numm\">"+recunik[6]+"</td>";
        chaine = chaine+"<td class=\"mntt\">"+recunik[7]+"</td>";
    }
    if(recunik[0]==5){
        chaine = chaine+"<td class=\"op\">vdc</td>";
        chaine = chaine+"<td class=\"numm\">"+recunik[1]+"</td>";
        chaine = chaine+"<td class=\"mntt\">"+recunik[2]+"</td>";
    }
    chaine = chaine+"<td class=\Date\">"+tab[2]+"</td>";

    chaine = chaine+"<td style=\"margin: 0 auto; text-align: center\"><button onclick=\"remonter('"+id_recunik+"','"+operation+"')\" id=\"buttonn-"+id_recunik+"\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-floppy-o\" aria-hidden=\"true\"></i></button></td>";
    chaine = chaine+"</tr>";

    $('#tbody').append(chaine);
    //console.log(rec);
    console.log(id_recunik)
}

// ---------------today--------------------------

function tctraitementre(rec) {
    var recunik = rec.split("--")[0].split("/");
    var tab= rec.split("--");
    //console.log(recunik);
    var id_recunik = rec.split("--")[1];
    var chaine = "<tr id=\"roww-"+id_recunik+"\">";
    var token=id_recunik;
    var operation=rec.split("--")[0];

    if(recunik[0]==1){
        chaine = chaine+"<td class=\"op\">depot</td>";
        chaine = chaine+"<td class=\"numm\">"+recunik[2]+"</td>";
        chaine = chaine+"<td class=\"mntt\">"+recunik[1]+"</td>";
    }
    if(recunik[0]==2){
        chaine = chaine+"<td class=\"op\">retrait</td>";
        chaine = chaine+"<td class=\"numm\">"+recunik[1]+"</td>";
        chaine = chaine+"<td class=\"mntt\">"+recunik[2]+"</td>";
    }
    if(recunik[0]==3){
        chaine = chaine+"<td class=\"op\">rac</td>";
        chaine = chaine+"<td class=\"numm\">"+recunik[6]+"</td>";
        chaine = chaine+"<td class=\"mntt\">"+recunik[7]+"</td>";
    }
    if(recunik[0]==5){
        chaine = chaine+"<td class=\"op\">vdc</td>";
        chaine = chaine+"<td class=\"numm\">"+recunik[1]+"</td>";
        chaine = chaine+"<td class=\"mntt\">"+recunik[2]+"</td>";
    }
    chaine = chaine+"<td class=\Date\">"+tab[2]+"</td>";

    chaine = chaine+"<td style=\"margin: 0 auto; text-align: center\"><button onclick=\"tcremonter('"+id_recunik+"','"+operation+"')\" id=\"buttonn-"+id_recunik+"\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-floppy-o\" aria-hidden=\"true\"></i></button></td>";
    chaine = chaine+"</tr>";

    $('#tbody').append(chaine);
    //console.log(rec);
    console.log(id_recunik)
}

function remonter(token,operation){
    console.log(operation+"-"+token);
	//alert(operation+"-"+token);
	$.post(baseUrl+"/ajax/remonter", {
                token: token,
                operation:operation
            }, function(datas){
                $("#result").html('');
                $("#result").html("<p><b><i>Resultat remonter  : "+ datas +"</i></b></p>")
                //getdatas(JSON.parse(datas).message.trim());
            });
}

// ---------------today--------------------------

function tcremonter(token,operation){
    console.log(operation+"-"+token);
	//alert(operation+"-"+token);
	$.post(baseUrl+"/ajax/tcremonter", {
                token: token,
                operation:operation
            }, function(datas){
                $("#result").html('');
                $("#result").html("<p><b><i>Resultat remonter  : "+ datas +"</i></b></p>")
                //getdatas(JSON.parse(datas).message.trim());
            });
}

function basculementservice(){

    let service = document.getElementById("service").value;
    let de = document.getElementById("de").value;
    let a = document.getElementById("a").value;

    let operation = service+"-"+ de + "-"+ a;

    console.log("---------"+operation+"------------");

    $.post(baseUrl+"/ajax/basculementservice", {
                operation:operation
            }, function(datas){
                console.log(datas);
                $("#result").html('');
                $("#result").html("<p><b><i>Resultat : "+ datas +"</i></b></p>")
            });
}

function arretservice(){

    let service = document.getElementById("service2").value;
    let option = document.getElementById("arrdem").value;

    params =   JSON.stringify({"service":service, "option":option})

    console.log("---------"+params+"------------");
    
    $.post("http://51.38.234.197/backendprod/horsSentiersBattus/scripts/controlDist/index.php", {
                params:params
            }, function(datas){
               console.log(datas);
                $("#result").html('');
                $("#result").html("<p><b><i>Resultat : "+ datas +"</i></b></p>")
                //getdatas(JSON.parse(datas).message.trim());
            });
}


function systeme(param){
    if(param==1){
        if($("#basculerservice").hasClass("hidden")){
            $("#basculerservice").removeClass('hidden');
            $("#basculerservice").addClass('show');
            $("#arreterservice").removeClass('show');
            $("#arreterservice").addClass('hidden');
        }
    }else if(param==2){
        if($("#arreterservice").hasClass("hidden")){
            $("#basculerservice").removeClass('show');
            $("#basculerservice").addClass('hidden');
            $("#arreterservice").removeClass('hidden');
            $("#arreterservice").addClass('show');
        }
    }
}

function traitementremonter(output) {
    console.log("traitementremonter "+ typeP);
    var datas = [];
    var chaine="<table class='table table-striped table-condensed'><tr><td>type operation</td><td>numero BBs</td><td>numero client</td><td>montant</td><td>action</td></tr>";
    if(typeP=="OM"){
        $.each(output, function(key, value) {
            $.each(value, function(key, value) {
                if(value[5]=="Transaction" && value[6].match("Succ") && value[7]=="USSD" && value[9]=="Normal"){
                    var montant = value[4].match("Cash Out")?value[13]:value[12];
                    //montant = (montant.split(".")[0]);
                    var id=value[1].split("/")[0]+""+value[1].split("/")[1]+""+value[1].split("/")[2]+""+value[2].split(":")[0]+""+value[2].split(":")[1]+""+value[2].split(":")[2];
                    datas.push({dateop:value[1],heureop:value[2],typeop:value[4],phoneop:value[8],phonecli:value[11],montantop:montant});
                    chaine+="<tr id="+id+"><td>"+value[4]+"</td><td>"+value[8]+"</td><td>"+value[11]+"</td><td>"+montant+"</td><td><button class=\"btn btn-primary btn-sm\" style=\"background-color: black; border-color: black\" title=\"Remonter ALL OM\" onclick=\"validerRemonterOM('"+value[11]+"','"+montant+"','"+value[8]+"','"+value[1]+"-"+value[2]+"')\"><i style=\"background-color: black\" class=\"fa fa-arrow-up\" aria-hidden=\"true\"></i></button></td></tr>";
                    
                }
            });
        });
        chaine+="</table>";
        console.log(datas);
    }
    else{
        console.log("TC");
    }
    
    
		
   // $("#htmlout").html(Object.keys(output).length+" feuilles");
    $("#htmlout").html(chaine);
}
function estChifre(c){
	var tab=["0","1","2","3","4","5","6","7","8","9"],i=0;
	for(i=0;i<=tab.length;i++){
		if(tab[i]==c){
			return true;
			}
		}
	return false;
	}
function currencTochaine(curr){
	var d=curr.split(""),chaine="",j=0;
	for(j=0;j<d.length;j++){
		if(d[j]=="."){
			break;
			}
		if(estChifre(d[j])){
			chaine+=d[j];
			}
		}
	return chaine;
	}
function validerRemonterOM(numClient,montant,idphone,jour){
	//alert(numClient+" "+montant.trim(' ')+" "+getIdphone(idphone)+"jour="+jour);
	//alert(currencTochaine(montant));
	var dat=jour.split("-");
	var date=dat[0].split("/")[0]+""+dat[0].split("/")[1]+""+dat[0].split("/")[2]+""+dat[1].split(":")[0]+""+dat[1].split(":")[1]+""+dat[1].split(":")[2];
	alert(date);
		if(numClient=="PTUPS"){
			type=3;//vente de credit
		}else{
			if(numClient=="IND02"){
				type=2; //retrait avec code
				}else{
					type=1;//depot ou retrait
					}
		 }
		$.post(baseUrl+"/ajax/findAndremonterexel", {
					numclient: numClient,
					montant:currencTochaine(montant),
					idphone:getIdphone(idphone),
					date:jour,
					type:type
				}, function(datas){
					//alert(datas);
                    $("#result").html('');
                    $("#result").html("<p><b><i>Resultat remonter  : "+ datas +"</i></b></p>")
					if(datas.reponse=="ok"){
					    $("#"+date).remove();
				    }else{
					    $("#"+date).css('background-color','red');	
					}
					//$("#"+date).remove();
				   // getdatas(JSON.parse(datas).message.trim());
				});
	}
    //14268064871
    
function  getIdphone(numphone){
	var nb="";
	switch(numphone){
	 case "786484455":{
		      nb="1";
		      break;
	       }
	 case "786466013":{
		      nb="2";
		      break;
	       }
	 case "786466017":{
		      nb="3";
		      break;
	       }
	 case "786466008":{
		      nb="4";
		      break;
	       }
	 case "786466023":{
		      nb="5";
		      break;
	       }
	 case "786466020":{
		      nb="6";
		      break;
	       }
	}
    return nb;   
}

    
let tabs = function (){
    console.log("salut");
    let tabs = document.querySelectorAll(".nav-item");
    let tabs_content = document.querySelector(".tabs-content");

    console.log("abs(): tabs.length = "+tabs.length);
    console.log("abs(): tabs_content = "+tabs_content.innerHTML);

    tabs.forEach(element => {
        element.addEventListener("click", () => {
            let orangeContainer   = element.querySelector("#orange");
            let tigoContainer     = element.querySelector("#tigo");
            let wizallContainer   = element.querySelector("#wizall");
            let emoneyContainer   = element.querySelector("#emoney");
            let smscodeContainer  = element.querySelector("#smscode");
            let tntContainer      = element.querySelector("#tnt");
            let airtimeContainer  = element.querySelector("#airtime");
            let systemeContainer  = element.querySelector("#systeme");

            $("#navbarTogglerDemo03").removeClass("show")

            if( orangeContainer!= null){
                if(tabs_content.querySelector(".orange") != null){
                    console.log("orange");
                    tabs_content.querySelector(".orange").style.display = 'block';
                    tabs_content.querySelector(".orange").style.visibility =  'visible';
                }

                if( tabs_content.querySelector(".tigo") != null){
                    console.log("tigo");
                    tabs_content.querySelector(".tigo").style.display = 'none';
                    tabs_content.querySelector(".tigo").style.visibility =  'hidden';
                }

                if(tabs_content.querySelector(".wizall") != null){
                    console.log("wizall");
                    tabs_content.querySelector(".wizall").style.display = 'none';
                    tabs_content.querySelector(".wizall").style.visibility =  'hidden';
                }

                if(tabs_content.querySelector(".emoney") != null){
                    console.log("emoney");
                    tabs_content.querySelector(".emoney").style.display = 'none';
                    tabs_content.querySelector(".emoney").style.visibility =  'hidden';
                }

                if(tabs_content.querySelector(".smscode") != null){
                    console.log("smscode");
                    tabs_content.querySelector(".smscode").style.display = 'none';
                    tabs_content.querySelector(".smscode").style.visibility =  'hidden';
                }

                if(tabs_content.querySelector(".tnt") != null){
                    console.log("tnt");
                    tabs_content.querySelector(".tnt").style.display = 'none';
                    tabs_content.querySelector(".tnt").style.visibility =  'hidden';
                }
                
                if(tabs_content.querySelector(".airtime") != null){
                    console.log("tnt");
                    tabs_content.querySelector(".airtime").style.display = 'none';
                    tabs_content.querySelector(".airtime").style.visibility =  'hidden';
                }
                
                if(tabs_content.querySelector(".systeme") != null){
                    console.log("tnt");
                    tabs_content.querySelector(".systeme").style.display = 'none';
                    tabs_content.querySelector(".systeme").style.visibility =  'hidden';
                }
            }

            else if( tigoContainer != null){
                if(tabs_content.querySelector(".orange") != null){
                    console.log("orange");
                    tabs_content.querySelector(".orange").style.display = 'none';
                    tabs_content.querySelector(".orange").style.visibility =  'hidden';
                }

                if( tabs_content.querySelector(".tigo") != null){
                    console.log("tigo");
                    tabs_content.querySelector(".tigo").style.display = 'block';
                    tabs_content.querySelector(".tigo").style.visibility =  'visible';
                }

                if(tabs_content.querySelector(".wizall") != null){
                    console.log("wizall");
                    tabs_content.querySelector(".wizall").style.display = 'none';
                    tabs_content.querySelector(".wizall").style.visibility =  'hidden';
                }

                if(tabs_content.querySelector(".emoney") != null){
                    console.log("emoney");
                    tabs_content.querySelector(".emoney").style.display = 'none';
                    tabs_content.querySelector(".emoney").style.visibility =  'hidden';
                }

                if(tabs_content.querySelector(".smscode") != null){
                    console.log("smscode");
                    tabs_content.querySelector(".smscode").style.display = 'none';
                    tabs_content.querySelector(".smscode").style.visibility =  'hidden';
                }

                if(tabs_content.querySelector(".tnt") != null){
                    console.log("tnt");
                    tabs_content.querySelector(".tnt").style.display = 'none';
                    tabs_content.querySelector(".tnt").style.visibility =  'hidden';
                }
                
                if(tabs_content.querySelector(".airtime") != null){
                    console.log("tnt");
                    tabs_content.querySelector(".airtime").style.display = 'none';
                    tabs_content.querySelector(".airtime").style.visibility =  'hidden';
                }

                if(tabs_content.querySelector(".systeme") != null){
                    console.log("tnt");
                    tabs_content.querySelector(".systeme").style.display = 'none';
                    tabs_content.querySelector(".systeme").style.visibility =  'hidden';
                }
            }

            else if(wizallContainer != null){
                if(tabs_content.querySelector(".orange") != null){
                    console.log("Orange");
                    tabs_content.querySelector(".orange").style.display = 'none';
                    tabs_content.querySelector(".orange").style.visibility =  'hidden';
                }

                if(tabs_content.querySelector(".tigo") != null){
                    console.log("tigo");
                    tabs_content.querySelector(".tigo").style.display = 'none';
                    tabs_content.querySelector(".tigo").style.visibility =  'hidden';
                }

                if(tabs_content.querySelector(".wizall") != null){
                    console.log("wizall");
                    tabs_content.querySelector(".wizall").style.display = 'block';
                    tabs_content.querySelector(".wizall").style.visibility =  'visible';
                }

                if(tabs_content.querySelector(".emoney") != null){
                    console.log("emoney");
                    tabs_content.querySelector(".emoney").style.display = 'none';
                    tabs_content.querySelector(".emoney").style.visibility =  'hidden';
                }

                if(tabs_content.querySelector(".smscode") != null){
                    console.log("smscode");
                    tabs_content.querySelector(".smscode").style.display = 'none';
                    tabs_content.querySelector(".smscode").style.visibility =  'hidden';
                }

                if(tabs_content.querySelector(".tnt") != null){
                    console.log("tnt");
                    tabs_content.querySelector(".tnt").style.display = 'none';
                    tabs_content.querySelector(".tnt").style.visibility =  'hidden';
                }
                
                if(tabs_content.querySelector(".airtime") != null){
                    console.log("airtime");
                    tabs_content.querySelector(".airtime").style.display = 'none';
                    tabs_content.querySelector(".airtime").style.visibility =  'hidden';
                }

                if(tabs_content.querySelector(".systeme") != null){
                    console.log("tnt");
                    tabs_content.querySelector(".systeme").style.display = 'none';
                    tabs_content.querySelector(".systeme").style.visibility =  'hidden';
                }
            }

            else if( emoneyContainer != null){
                if(tabs_content.querySelector(".orange") != null){
                    console.log("Orange");
                    tabs_content.querySelector(".orange").style.display = 'none';
                    tabs_content.querySelector(".orange").style.visibility =  'hidden';
                }

                if(tabs_content.querySelector(".tigo") != null){
                    console.log("tigo");
                    tabs_content.querySelector(".tigo").style.display = 'none';
                    tabs_content.querySelector(".tigo").style.visibility =  'hidden';
                }

                if(tabs_content.querySelector(".wizall") != null){
                    console.log("wizall");
                    tabs_content.querySelector(".wizall").style.display = 'none';
                    tabs_content.querySelector(".wizall").style.visibility =  'hidden';
                }

                if(tabs_content.querySelector(".emoney") != null){
                    console.log("emoney");
                    tabs_content.querySelector(".emoney").style.display = 'block';
                    tabs_content.querySelector(".emoney").style.visibility =  'visible';
                }

                if(tabs_content.querySelector(".smscode") != null){
                    console.log("smscode");
                    tabs_content.querySelector(".smscode").style.display = 'none';
                    tabs_content.querySelector(".smscode").style.visibility =  'hidden';
                }

                if(tabs_content.querySelector(".tnt") != null){
                    console.log("tnt");
                    tabs_content.querySelector(".tnt").style.display = 'none';
                    tabs_content.querySelector(".tnt").style.visibility =  'hidden';
                }
                
                if(tabs_content.querySelector(".airtime") != null){
                    console.log("airtime");
                    tabs_content.querySelector(".airtime").style.display = 'none';
                    tabs_content.querySelector(".airtime").style.visibility =  'hidden';
                }

                if(tabs_content.querySelector(".systeme") != null){
                    console.log("tnt");
                    tabs_content.querySelector(".systeme").style.display = 'none';
                    tabs_content.querySelector(".systeme").style.visibility =  'hidden';
                }
            }


            else if( smscodeContainer != null){
                if(tabs_content.querySelector(".orange") != null){
                    console.log("Orange");
                    tabs_content.querySelector(".orange").style.display = 'none';
                    tabs_content.querySelector(".orange").style.visibility =  'hidden';
                }

                if(tabs_content.querySelector(".tigo") != null){
                    console.log("tigo");
                    tabs_content.querySelector(".tigo").style.display = 'none';
                    tabs_content.querySelector(".tigo").style.visibility =  'hidden';
                }

                if(tabs_content.querySelector(".wizall") != null){
                    console.log("wizall");
                    tabs_content.querySelector(".wizall").style.display = 'none';
                    tabs_content.querySelector(".wizall").style.visibility =  'hidden';
                }

                if(tabs_content.querySelector(".emoney") != null){
                    console.log("emoney");
                    tabs_content.querySelector(".emoney").style.display = 'none';
                    tabs_content.querySelector(".emoney").style.visibility =  'hidden';
                }

                if(tabs_content.querySelector(".smscode") != null){
                    console.log("smscode");
                    tabs_content.querySelector(".smscode").style.display = 'block';
                    tabs_content.querySelector(".smscode").style.visibility =  'visible';
                }

                if(tabs_content.querySelector(".tnt") != null){
                    console.log("tnt");
                    tabs_content.querySelector(".tnt").style.display = 'none';
                    tabs_content.querySelector(".tnt").style.visibility =  'hidden';
                }

                if(tabs_content.querySelector(".airtime") != null){
                    console.log("tnt");
                    tabs_content.querySelector(".airtime").style.display = 'none';
                    tabs_content.querySelector(".airtime").style.visibility =  'hidden';
                }

                if(tabs_content.querySelector(".systeme") != null){
                    console.log("tnt");
                    tabs_content.querySelector(".systeme").style.display = 'none';
                    tabs_content.querySelector(".systeme").style.visibility =  'hidden';
                }
            }

            else if( tntContainer != null){
                if(tabs_content.querySelector(".orange") != null){
                    console.log("Orange");
                    tabs_content.querySelector(".orange").style.display = 'none';
                    tabs_content.querySelector(".orange").style.visibility =  'hidden';
                }

                if(tabs_content.querySelector(".tigo") != null){
                    console.log("tigo");
                    tabs_content.querySelector(".tigo").style.display = 'none';
                    tabs_content.querySelector(".tigo").style.visibility =  'hidden';
                }

                if(tabs_content.querySelector(".wizall") != null){
                    console.log("wizall");
                    tabs_content.querySelector(".wizall").style.display = 'none';
                    tabs_content.querySelector(".wizall").style.visibility =  'hidden';
                }

                if(tabs_content.querySelector(".emoney") != null){
                    console.log("emoney");
                    tabs_content.querySelector(".emoney").style.display = 'none';
                    tabs_content.querySelector(".emoney").style.visibility =  'hidden';
                }

                if(tabs_content.querySelector(".smscode") != null){
                    console.log("smscode");
                    tabs_content.querySelector(".smscode").style.display = 'none';
                    tabs_content.querySelector(".smscode").style.visibility =  'hidden';
                }

                if(tabs_content.querySelector(".tnt") != null){
                    console.log("tnt");
                    tabs_content.querySelector(".tnt").style.display = 'block';
                    tabs_content.querySelector(".tnt").style.visibility =  'visible';
                }

                if(tabs_content.querySelector(".airtime") != null){
                    console.log("tnt");
                    tabs_content.querySelector(".airtime").style.display = 'none';
                    tabs_content.querySelector(".airtime").style.visibility =  'hidden';
                }

                if(tabs_content.querySelector(".systeme") != null){
                    console.log("tnt");
                    tabs_content.querySelector(".systeme").style.display = 'none';
                    tabs_content.querySelector(".systeme").style.visibility =  'hidden';
                }
            }

            else if(airtimeContainer !=null){
				if(tabs_content.querySelector(".orange") != null){
                    console.log("Orange");
                    tabs_content.querySelector(".orange").style.display = 'none';
                    tabs_content.querySelector(".orange").style.visibility =  'hidden';
                }

                if(tabs_content.querySelector(".tigo") != null){
                    console.log("tigo");
                    tabs_content.querySelector(".tigo").style.display = 'none';
                    tabs_content.querySelector(".tigo").style.visibility =  'hidden';
                }

                if(tabs_content.querySelector(".wizall") != null){
                    console.log("wizall");
                    tabs_content.querySelector(".wizall").style.display = 'none';
                    tabs_content.querySelector(".wizall").style.visibility =  'hidden';
                }

                if(tabs_content.querySelector(".emoney") != null){
                    console.log("emoney");
                    tabs_content.querySelector(".emoney").style.display = 'none';
                    tabs_content.querySelector(".emoney").style.visibility =  'hidden';
                }

                if(tabs_content.querySelector(".smscode") != null){
                    console.log("smscode");
                    tabs_content.querySelector(".smscode").style.display = 'none';
                    tabs_content.querySelector(".smscode").style.visibility =  'hidden';
                }

                if(tabs_content.querySelector(".tnt") != null){
                    console.log("tnt");
                    tabs_content.querySelector(".tnt").style.display = 'none';
                    tabs_content.querySelector(".tnt").style.visibility =  'hidden';
                }

                if(tabs_content.querySelector(".airtime") != null){
                    console.log("airtime");
                    tabs_content.querySelector(".airtime").style.display = 'block';
                    tabs_content.querySelector(".airtime").style.visibility =  'visible';
                }
				
                if(tabs_content.querySelector(".systeme") != null){
                    console.log("systeme");
                    tabs_content.querySelector(".systeme").style.display = 'none';
                    tabs_content.querySelector(".systeme").style.visibility =  'hidden';
                }
			}

            else if(systemeContainer !=null){
                if(tabs_content.querySelector(".orange") != null){
                    console.log("Orange");
                    tabs_content.querySelector(".orange").style.display = 'none';
                    tabs_content.querySelector(".orange").style.visibility =  'hidden';
                }

                if(tabs_content.querySelector(".tigo") != null){
                    console.log("tigo");
                    tabs_content.querySelector(".tigo").style.display = 'none';
                    tabs_content.querySelector(".tigo").style.visibility =  'hidden';
                }

                if(tabs_content.querySelector(".wizall") != null){
                    console.log("wizall");
                    tabs_content.querySelector(".wizall").style.display = 'none';
                    tabs_content.querySelector(".wizall").style.visibility =  'hidden';
                }

                if(tabs_content.querySelector(".emoney") != null){
                    console.log("emoney");
                    tabs_content.querySelector(".emoney").style.display = 'none';
                    tabs_content.querySelector(".emoney").style.visibility =  'hidden';
                }

                if(tabs_content.querySelector(".smscode") != null){
                    console.log("smscode");
                    tabs_content.querySelector(".smscode").style.display = 'none';
                    tabs_content.querySelector(".smscode").style.visibility =  'hidden';
                }

                if(tabs_content.querySelector(".tnt") != null){
                    console.log("tnt");
                    tabs_content.querySelector(".tnt").style.display = 'none';
                    tabs_content.querySelector(".tnt").style.visibility =  'hidden';
                }

                if(tabs_content.querySelector(".airtime") != null){
                    console.log("tnt");
                    tabs_content.querySelector(".airtime").style.display = 'none';
                    tabs_content.querySelector(".airtime").style.visibility =  'hidden';
                }

                if(tabs_content.querySelector(".systeme") != null){
                    console.log("systeme");
                    tabs_content.querySelector(".systeme").style.display = 'block';
                    tabs_content.querySelector(".systeme").style.visibility =  'visible';
                }
                
            }

        }, false);
    });
}
