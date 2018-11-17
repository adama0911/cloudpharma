<?php
namespace App\Controllers;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use \App\Controller;
class AjaxController extends Controller {

  	public function connexion(Request $request, Response $response, $args){
        $data = $request->getParsedBody();
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://bbstvnet.com/authentify.php",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $data,
            CURLOPT_HTTPHEADER => array(
                "content-type: multipart/form-data"
            )
        ));

        $res = curl_exec($curl); $err = curl_error($curl); curl_close($curl);
        if ($err) {
            return $response->withJson(array('etat'=>false, 'message'=>"Erreur interne" ));
        } else {
            $donnee = json_decode($res);
            if ($donnee->etat) {
                $_SESSION['authToken'] = $donnee->token;
                return json_encode($donnee);
            } else {
                return json_encode($donnee);
            }
        }
    }

    public function rechercheom(Request $request, Response $response, $args){
        $data = $request->getParsedBody();
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://51.254.200.129/testkhady/rechercher.php",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $data,
            CURLOPT_HTTPHEADER => array(
                "content-type: multipart/form-data"
            )
        ));

        $res = curl_exec($curl); $err = curl_error($curl); curl_close($curl);
        if ($err) {
            return $response->withJson(array('etat'=>false, 'message'=>"Erreur interne" ));
        } else {
            if($res=="\n\n"){
                return json_encode(array('etat'=>true, 'message'=>'vide'));
            }else{
                return json_encode(array('etat'=>true, 'message'=>$res));
            }
        }
    }

    public function rechercheallom(Request $request, Response $response, $args){
        $data = $request->getParsedBody();
        return json_encode(array('etat'=>true, 'message'=>$data));
    }

    public function recherchetc(Request $request, Response $response, $args){
        $data = $request->getParsedBody();
//        $curl = curl_init();
//        curl_setopt_array($curl, array(
//            CURLOPT_URL => "http://51.254.200.129/testAssane/rechercher.php",
//            CURLOPT_RETURNTRANSFER => true,
//            CURLOPT_ENCODING => "",
//            CURLOPT_MAXREDIRS => 10,
//            CURLOPT_TIMEOUT => 30,
//            CURLOPT_SSL_VERIFYPEER => 0,
//            CURLOPT_SSL_VERIFYHOST => 0,
//            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//            CURLOPT_CUSTOMREQUEST => "POST",
//            CURLOPT_POSTFIELDS => $data,
//            CURLOPT_HTTPHEADER => array(
//                "content-type: multipart/form-data"
//            )
//        ));
//
//        $res = curl_exec($curl); $err = curl_error($curl); curl_close($curl);
//        if ($err) {
//            return $response->withJson(array('etat'=>false, 'message'=>"Erreur interne" ));
//        } else {
//            if($res=="\n\n"){
//                return json_encode(array('etat'=>true, 'message'=>'vide'));
//            }else{
//                return json_encode(array('etat'=>true, 'message'=>$res));
//            }
//        }
        return json_encode(array('etat'=>true, 'message'=>$data));
    }
    
   public function remonter(Request $request,Response $response){
	    //$data = $request->getParsedBody();
	    $operation=$_POST['operation'];
	    $token=$_POST['token'];
	    $data=array('operation' => $_POST['operation'],'token' =>$_POST['token'],'bbstoken' => '#@Bbsinvest@2142018154#nabyndigoazougoptimussentool56545mflfjg#@');
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://51.254.200.129/testkhady/callremonter.php",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $data,
            CURLOPT_HTTPHEADER => array(
                "content-type: multipart/form-data"
            )
        ));
        $res = curl_exec($curl); $err = curl_error($curl); curl_close($curl);
        if($err){
			return $reponse->WithJson(array('response' => "Erreur"));
			}
		if($res==""){
			return $response->WithJson(array('response'=> ''));
			}
		return $response->WithJson(array('rep'=> $res));
		}
	public function reinitialiserOm(Request $request,Response $response){
		$data=array('id' =>"rn".$_POST['id'] );
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://51.254.200.129/testkhady/reinitialiser.php",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $data,
            CURLOPT_HTTPHEADER => array(
                "content-type: multipart/form-data"
            )
        ));
        $res = curl_exec($curl); $err = curl_error($curl); curl_close($curl);
		return $response->WithJson(array('rep' => $res));
		
		}
	public function findAndremonterexel(Request $request,Response $response){
		 $data=array('numclient' =>$_POST['numclient'],'date' =>$_POST['date'],'montant' =>$_POST['montant'],'idphone' => $_POST['idphone'],'type' =>$_POST['type']);
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://51.254.200.129/testkhady/findreqexel.php",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $data,
            CURLOPT_HTTPHEADER => array(
                "content-type: multipart/form-data"
            )
        ));
        $res = curl_exec($curl); $err = curl_error($curl); curl_close($curl);
		 //return $response->WithJson(array('numero client bi' => $_POST['numclient']));
		 return $response->WithJson(array('reponse' =>$res));
		
		}



}
