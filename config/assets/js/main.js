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
                //getdatas(JSON.parse(datas).message.trim());
            });
        }
    }else {
        console.log("ko")
    }
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
        }else{
            console.log($("#saisirnumeroAll").val().trim());
        }
    }else {
        console.log("ko")
    }
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
					alert("phone "+id+" reinitialisé");
					console.log(datas);
				   // getdatas(JSON.parse(datas).message.trim());
				});
       }
}

function validerReinitialiserModal(type,id){
    console.log("validerRechercher "+type+" "+id);
    $('#modalReinitialiserTitle').text("REINITIALISER "+type+" à la ligne "+id)
    $('#modalReinitialiser').modal('show');
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

function remonter(token,operation){
	alert(operation+"-"+token);
	$.post(baseUrl+"/ajax/remonter", {
                token: token,
                operation:operation
            }, function(datas){
				alert(datas);
                console.log(datas);
               // getdatas(JSON.parse(datas).message.trim());
            });
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
					console.log(datas);
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
