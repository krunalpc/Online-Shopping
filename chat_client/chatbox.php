<?
include("config.php");
if(isset($_SESSION['user'])){
?>
<h2></h2>
 <a style="right: 20px;top: 1px;position: absolute;cursor: pointer;" href="logout1.php"><font color="#56ABB4">Log Out</font></a>

 <div class='msgs'>
  <?include("msgs.php");?>
 </div>
 <br/>
 <form id="msg_form">
  <input name="msg" size="30" type="text"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <button>Send</button>
 </form>
<?
}
?>