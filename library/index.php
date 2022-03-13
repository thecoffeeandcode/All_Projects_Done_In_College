<?php
session_start();
?>
<?php
if(isset($_POST['mail'])){
$m=$_SESSION["mail"] = $_POST['mail'];}
if(isset($_POST['pass'])){
$p=$_SESSION["pass"] = $_POST['pass'];}
?>

<?php
class logging{

    private $db; 
    private $host; 
    private $user; 
    private $pass; 
    
    public function __construct() {
        $this->host = "mysql:dbname=library;host=localhost";
        $this->user = "root";
        $this->pass = "";
        $this->db = new PDO($this->host, $this->user, $this->pass);
    }
    
    public function check_login($mail) {
        $select="SELECT `mail` FROM `users` WHERE `mail`='$mail'";
        $res = $this->db->query($select);
        $wynik=$res->fetchAll();
        foreach($wynik as $w){
            if($w['mail']==$mail){
                return '1';
            }  else {
                return '0';
            }
        }
    }
    public function check_access($mail) {
        $select="SELECT `access` FROM `users` WHERE `mail`='$mail'";
        $res = $this->db->query($select);
        $wynik=$res->fetchAll();
        foreach($wynik as $w){
            $k=$w['access'];
            return $w['access'];
        }
    }
    public function check_pass($pass,$mail) {
       $select="SELECT `pass` FROM `users` WHERE `mail`='$mail'";
       $res = $this->db->query($select);
       $wynik=$res->fetchAll();
       foreach($wynik as $w){
            if($w['pass']==$pass){
                $update="UPDATE `users` SET `logged`='1' WHERE `mail`='$mail'";
                $res = $this->db->query($update);
                return '1';
            }  else {
                return '0';
            }
        }
    }
    public function stats($mail) {
        $select="SELECT * FROM `users` WHERE `mail`='$mail'";
        $res = $this->db->query($select);
        $wynik=$res->fetchAll();
        foreach($wynik as $w){
            if($w['mail']==$mail){
                $k=$w['access'];
                print "Welcome ".$w['u_name'].' '.$w['sname']."<br/>";
                print "Stats: ";
                if($w['access']=='1'){
                    print 'guest; ';
                }
                else if($w['access']=='2'){
                    print 'employee; ';
                }
                if($w['access']=='3'){
                    print 'admin; ';
                }
                print 'rented books: '.$w['books_ct'].'; debt: '.$w['debt_ct'].';';
            }
    }
    
}}
                
?>

          
      
 


<html>
    <head>
        <!-- tutaj dodamy skrypty i css-->
        <link rel="stylesheet" type="text/css" href="script/style.css"/>
    </head>
    <body>
        
        <div class="content">
            <!-- Górna część serwisu -->
            <div class="top">
                <!-- logo serwisu -->
                <div class="logo">

                </div>
                <!-- lewa część górna serwisu -->
                <div class="top_left">
                    <!--Wyszukiwarka serwisu -->
                    <div class="wyszukiwarka">
                        <span id="login">
                            <div class="login">
                <form action=""method="POST">
                    <label>Login&nbsp;&nbsp;</label><input type="text" name="mail"  value="">
                    <label>Password&nbsp;&nbsp;</label><input type="text" name="pass"  value="">
                    <input class="submit" type="submit" name="login" value="LOGIN">
                    <input class="submit" type="submit" name="register" value="ZALOZ KONTO">
                </form>
            </div>
                        </span>
                        <span id="koszyk"></span>
                    </div>

                    <!-- Menu serwisu -->
                    <div class="menu">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="root/register.html">Register</a></li>
                            <li><a href="root/contact.php">Contact</a></li>
                            <div class="info" style="display:none;" title="php info">
               <span> Zamknij okno</span>
            </div>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- koniec góry serwisu -->
            <div class="clear"></div>
            <!-- Środek serwisu -->
            <div class="center">
                <div class="center_left"></div>
                <div class="center_middle"></div>
                <div class="center_right"></div>
            </div>
            <!-- koniec środkowej części serwisu -->
            <div class="clear"></div>
            <!-- dolna część serwisu -->
            <div class="bottom">
                <div class="sitemap"></div>
                <div class="stopka"></div>
            </div>
            
        </div>
    </body>
</html>

<?php 
    $logging=new logging();
    
    if(isset($_POST['login'])){
        $access=$logging->check_access($m);
        $login=$logging->check_login($m);
        $pass=$logging->check_pass($p,$m);
        if((($login=='0')||($pass=='0'))||(($login=='0')&&($pass=='0'))){
            header("Location: root/wrong_data.php");
        } 
        else if(($pass=='1')&&($login=='1')&&($access=='1')){
            header("Location: root/logged_user.php");
        }
        else if(($pass=='1')&&($login=='1')&&($access=='2')){
            header("Location: root/logged_employee.php");
        }
       
    }else if (isset($_POST['register'])) {
     header("Location: root/register.html");
    }
?> 




<!--<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!--<html>
    <head>
        <title>Library-Home</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="script/style1.css"/>
    </head>
    <body>
        <div class="top">
            <div class="logo">
                
            </div>
            <div class="login">
                <form action="root/login.php"method="POST">
                <label>Login&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="mail"  value=""><br/>
                <label>Password&nbsp;&nbsp;</label><input type="text" name="pass"  value=""><br/>
                <input class="submit" type="submit" name="login" value="LOG IN">
                </form>
                <a class="login" href="root/forgot.php">Forgot your password?</a>
            </div>
            <div class="name">
                
            </div>
        </div>
        
        <div style="clear:both;"></div>      
        <div class="menu">

        </div>
        
        <div style="clear:both;"></div>
        <div class="slajder">
            <div id="slajder">
                
            </div>
        </div>
        
        <div style="clear:both;"></div>
        <div class="content">
            <div class="left">
                
            </div>
            <div class="middle">
                
            </div>
            <div class="right">
                
            </div>
        </div>
        
        <div style="clear:both;"></div>
        <div class="sitemap">
            <div id="sitemap">
                
            </div>
        </div>
        
        <div style="clear:both;"></div>
        <div class="fotter">
            <div id="fotter">
                
            </div>
        </div>
    </body>
</html>--!>


