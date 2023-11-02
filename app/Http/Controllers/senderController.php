<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DateTime;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Ramsey\Uuid\Type\Integer;

class senderController extends Controller
{
    function getData() {
        $api = Http::get('http://homologacao3.azapfy.com.br/api/ps/notas');
        $apiArray = json_decode($api, true);
        return $apiArray;
    }

    function listall(){                
                $response = array();
                $notas = array();
                $value = null;        
        try{
                $datas = $this->getData();
                $cnpj = $datas[0]["cnpj_remete"];
            
                foreach($datas as $data){
                    if($data["cnpj_remete"] === $cnpj){
                        array_push($notas, $data["chave"]);
                }else{            
                    $value =array(
                        "cnpj" => $data["cnpj_remete"],
                        "chaves" => $notas,
                    );            
                    array_push($response,$value);
                    $notas=array();

                    $cnpj = $data["cnpj_remete"];
                    array_push($notas, $data["chave"]);
                }
            }
            
                $value =array(
                "cnpj" => $data["cnpj_remete"],
                "chaves" => $notas,
                );
                array_push($response,$value);                   
                return response() -> json($response,200);
        }catch(Exception $e){
            return http_response_code(500);
            
        }
    }

    function getAllByCNPJ($cnpj){
        try{
        $datas = $this->getData() ;        
        $response = array();
        foreach($datas as $data){
            if($data["cnpj_remete"] === $cnpj){
                array_push($response,$data);
            }
        }        
        return response() -> json($response,200);
        }catch(Exception $e){
            return http_response_code(500);
        } 
    }  

    function calculateSenderRecebiment($cnpj){
        try{
            $response = $this->getAllByCNPJ($cnpj); 
            $datas = json_decode($response->getContent(), true); 
            $value = 0;        
            foreach($datas as $data){
                if($data["status"] == "COMPROVADO"){
                    $value = $value + $data["valor"];
                }
            }           
            return response() -> json($value,200);
        }catch(Exception $e){
            return http_response_code(500);
        }
    } 
    function json_validator($data) { 
        if (!empty($data)) { 
            return is_string($data) &&
              is_array(json_decode($data, true)) ? true : false; 
        } 
        return false; 
    }

    function CalculateWillRecive($cnpj){     
        try{
            $response = $this->getAllByCNPJ($cnpj); 
            $datas = json_decode($response->getContent(), true); 
            $willReciveValue = 0;
            $notReciveValue =0;
            
            foreach($datas as $data){   
                 $dtEmis = DateTime::createFromFormat('d/m/Y H:i:s', $data['dt_emis']);                          
                 $datetime1 = new DateTime('now');
                 $interval = $dtEmis->diff($datetime1);    
                 $daysDifference = $interval->format('%R%a');
                
                 if($data["status"] == "ABERTO" && $daysDifference<2){
                    $willReciveValue = $willReciveValue  + $data["valor"];
                 }else{
                    $notReciveValue = $notReciveValue + $data["valor"];
                }
            }
           
            $values = array( 
                "valorAReceber" =>  $willReciveValue,
                "valorPerdidoPorEntrega" => $notReciveValue,
            );
            
            return response() -> json($values,200);
        }catch(Exception $e){
            return http_response_code(500);
        }
    }

    function UniqueRequest(){
      
    }

   

}