<?php 
session_start();
?>
<?php
class new_book{
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
  public function add_book($bname,$author,$amount,$isbn) {
        $select = "INSERT INTO `books`(`bname`, `author`, `amount`, `isbn`) VALUES ('$bname','$author','$amount','$isbn')";
        $res = $this->db->query($select);
        return '1';
    }

  public function check_book($isbn){
       $select = "SELECT * FROM `books` WHERE `isbn`='$isbn'";
       $res = $this->db->query($select);
       $wynik=$res->fetchAll();
       foreach($wynik as $w){
            if($w['isbn']==$isbn){
              print'</br>GRATULUJEMY KSIAZKA:</br>'.$w['bname'].' '.$w['author'].' .</br>ZOSTALA DODANA</br>NACISNIJ ABY DODAC NASTEPNA KSIAZKE.</br>';
              return '1';
            }else '0';
        }
  }
}
class permit{
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
    
    public function access($mail) {
       $select = "SELECT `logged`, `access` FROM `users` WHERE `mail`='$mail'";
       $res = $this->db->query($select);
       $wynik=$res->fetchAll();
       
       foreach($wynik as $w){
            if(($w['logged']=='1')&&($w['access']=='1')){
                return '1';
            }else if(($w['logged']=='1')&&($w['access']=='2')) {
                return '2';
            }else {
                return '0';
            }      
        }
         
    }
}
?>
<?php 
$access=new permit;
$permit=$access->access($_SESSION["mail"]);
if($permit=='2'){?>

<?php
if(isset($_POST['add'])){
    $next_book = new new_book();
    if (isset($_POST['bname'])&&($_POST['bname'])
        &&isset($_POST['author'])&&($_POST['author'])
        &&isset($_POST['amount'])&&($_POST['amount'])
        &&isset($_POST['isbn'])&&($_POST['isbn'])){
        
         $new=$next_book->add_book($_POST['bname'],$_POST['author'],$_POST['amount'],$_POST['isbn']);
         if($new){
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
                                <div></div>
                                    <label>Welcome! You`r logged. Status: employee.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input class="submit" type="submit" name="logout" value="LOGOUT"> 
                    <input   
                </form>
            </div>
                        </span>
                        <span id="koszyk"></span>
                    </div>

                    <!-- Menu serwisu -->
                    <div class="menu">
                        <ul>
                            <li><a href="logged_employee.php">Home</a></li>
                            <li><a href="add_book_html.php">Add Book</a></li>
                            <li><a href="return_html.php">Return Book</a></li>
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
                    <?php $next_book->check_book($_POST['isbn']);?>
                        <div id="register">
                            <form action="redirect1.php" method="POST">
                    <input type="submit" name="redirect" value="add next book"/>
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
</html>
<?php 

         }

         }
         
         }?>
<?php
}else{
    print 'NO ACCESS!!!!NO ACCESS!!!!NO ACCESS!!!!NO ACCESS!!!!NO ACCESS!!!!</br>
           NO ACCESS!!!!NO ACCESS!!!!NO ACCESS!!!!NO ACCESS!!!!NO ACCESS!!!!</br>';
}
?>
<?php 
session_start();
    $logging=new logging();
    if(isset($_POST['logout'])){
            $logging->logout($_SESSION["mail"]);
            header("Location: ../index.php"); 
        }
    ?> 

