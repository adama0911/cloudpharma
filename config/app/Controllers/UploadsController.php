<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Slim\Http\UploadedFile;

use \App\Controller;


class UploadsController extends Controller {


    public function importfile(Request $request, Response $response, $args){
        $uploadedFiles = $request->getUploadedFiles();
        $uploadedFile = $uploadedFiles['file'];

        if($uploadedFile->getError() === UPLOAD_ERR_OK){
            $originalName = $uploadedFile->getClientFilename();
            $originalTab = explode(".",$originalName);
            if( (strtolower($originalTab[count($originalTab)-1])=='xls') || (strtolower($originalTab[count($originalTab)-1])=='xlsx') ){
                $uploadedFile->moveTo("./uploads/".$originalName);
                return $response->withJson(['status'=>true, 'extension'=>true, 'originalName'=>$originalName]);
            }else{
                return $response->withJson(['status'=>true, 'extension'=>false, 'originalName'=>$originalName]);
            }
        }
        else{
            return $response->withJson(['status'=> false]);
        }
//        return $response->withJson(['status'=> $uploadedFiles, 'status1'=> $uploadedFile]);
    }


}