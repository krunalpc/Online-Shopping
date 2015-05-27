<?
if(isset($_POST['name']) && !isset($display_case)){
 $name=htmlspecialchars($_POST['name']);
 $sql=$dbh->prepare("SELECT name FROM chatters WHERE name=?");
 $sql->execute(array($name));
 if($sql->rowCount()!=0){
  $ermsg="<h2 class='error'>Name Taken. <a href='index.php'>Try another Name.</a></h2>";
 }else{
  $sql=$dbh->prepare("INSERT INTO chatters (name,seen) VALUES (?,NOW())");
  $sql->execute(array($name));
  $_SESSION['user']=$name;
 }
}elseif(isset($display_case)){
 if(!isset($ermsg)){
?>
 <h2><font color="#5D5959">Provide Your Name As </font><font color="#56ABB4">Client</font></h2>
 <br/><br/>
 <form action="support.php" method="POST">
  <div><font color="#5D5959">Your Name : </font><input name="name" placeholder="A Name Please"/></div><br/>
  <button>Submit & Start Chatting</button>
 </form>
<?
 }else{
  echo $ermsg;
 }
}
?>
