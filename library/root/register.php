<?php
class new_account{
private $db;
private $host="mysql:dbname=library;host=localhost";
private $user="root";
private $pass="";
public function __construct() {
        $this->host;
        $this->user;
        $this->pass;
        $this->db = new PDO($this->host, $this->user, $this->pass);
    }
  public function create_account($mail,$pass,$name,$sname) {
        $select = "INSERT INTO `users`(`mail`, `pass`, `name`, `sname`) VALUES ('$mail','$pass','$name','$sname')";
        $res = $this->db->query($select);
        return '1';
    }

  public function check_account($mail,$pass){
       $select = "SELECT * FROM `users` WHERE `mail`='$mail' AND `pass`='$pass'";
       $res = $this->db->query($select);
       $wynik=$res->fetchAll();
       foreach($wynik as $w){
            if(($w['pass']==$pass)&&($w['mail']==$mail)){
              print'</br> WITAJ '.$w['name'].' '.$w['sname'].' .</br>GRATULUJEMY TWOJE KONTO ZOSTALO UTWORZONE.</br>ZALOGUJ SIE.</br>';
              return '1';
            }else '0';
        }
  }
}
?>

<?php
if(isset($_POST['register'])){
    $add_user = new new_account();
    if (isset($_POST['name'])&&($_POST['name'])
        &&isset($_POST['sname'])&&($_POST['sname'])
        &&isset($_POST['mail'])&&($_POST['mail'])
        &&isset($_POST['pass'])&&($_POST['pass'])){
        
         $user=$add_user->create_account($_POST['mail'],$_POST['pass'],$_POST['name'],$_POST['sname']);
         if($user){
             ?>
                 <html>
    <head>
        <!-- tutaj dodamy skrypty i css-->
        <link rel="stylesheet" type="text/css" href="../script/style.css"/>
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>

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
                
                    <label>ZAKLADANIE KONTA</label>
                
                            </div>
                        </span>
                        
                    </div>

                    <!-- Menu serwisu -->
                    <div class="menu">
                        <ul>
                            <li><a href="../index.php">Home</a></li>
                            <li><a href="register.php">Register</a></li>
                            <li><a href="contact.php">Contact</a></li>
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
                <div class="center_middle">
                    <?php $add_user->check_account($_POST['mail'],$_POST['pass']);?>
                        <div id="register">
                            <form action="redirect.php" method="POST">
                    <input type="submit" name="zaloguj" value="Zaloguj"/>
                </form>
            </div>
                </div>
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
</html><?php
   
         } 
    }
}
?>


