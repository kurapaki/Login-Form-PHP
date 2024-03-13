<?php
namespace admin;
if(!isset($_SESSION)){
    session_start();
}
require_once $_SESSION["dir_root"] . "/src/ctl/dbconnect.php";

class Login {
    private $username;
    private $password;

    function __construct(){
        $this->username  = $_POST["username"];
        $this->password = $_POST["password"];
    }

    function insertUser(){
        try{
            $sql = "INSERT INTO users (username,password,user_type) "
            . "VALUES (:username, :password, :user_type)";
            $stmt = db()->prepare($sql);
            $stmt->bindValue(":username",$this->username);
            $stmt->bindParam(":password", $this->password );
            $stmt->bindParam(":user_type", $_SESSION["user_type"]);
            $stmt->execute();
            return json_encode(["response"=>1, "data"=>$_SESSION["user_type"]]);
        }catch(\PDOException $ex){
            return json_encode(["response"=>0, "data"=>$ex->getMessage()]);
        }catch(\Exception $ex){
            return json_encode(["response"=>0, "data"=>$ex->getMessage()]);
        }finally{
            if (isset($stmt)){
                $stmt->closeCursor();
            }
        }
    }
    function loginUser(){
        try {
            $sql = "SELECT * FROM users WHERE username = '". $this->username . "'" 
                    . "AND password = '" . $this->password."'";
            $stmt = db()->prepare($sql);
            $stmt->execute();
            $row = $stmt->fetch();
            if ($row){
                return json_encode(["response"=>1, "data"=> "Yippppeee berhasil "]);
            }else{
                return json_encode(["response"=>0, "data"=>"Username and Password does not match  "]);
            }
        } catch (\PDOException $ex) {
            return json_encode(["response"=>0, "data"=>"PDO" .$ex->getMessage()]);
        } catch (\Exception $ex){
            return json_encode(["response"=>0, "data"=>"Global" .$ex->getMessage()]);
        }finally{
            if (isset($stmt)){
                $stmt->closeCursor();
            }
        }
    }
}
