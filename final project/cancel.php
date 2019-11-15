<?php
//remove entry from purchase, currentbook and viewhist

@ $db = new mysqli('localhost', 'f38ee', 'f38ee', 'f38ee');
session_start();
$userid = $_SESSION['valid_user'];

$jvalue = intval($_POST['jvalue']);
// echo $jvalue;
$jlowervalue = $jvalue-1;
$jvalue = strval($jvalue);
$jlowervalue = strval($jlowervalue);

function _xor($text,$key){
    for($i=0; $i<strlen($text); $i++){
        $text[$i] = intval($text[$i])^intval($key[$i]);
    }
    return $text;
}

//for purchase, select the one with the same slotids
$sql = "SELECT slotid FROM purchase WHERE purchaseid = '" . $jvalue . "'";
$result = $db->query($sql);
$slot1 = $result->fetch_assoc();
$slotid = $slot1['slotid'];

//for purchase, get the latest seat 
$sql = "SELECT seat FROM purchase WHERE slotid = '" . $slotid . "' AND purchaseid = '" . $jvalue . "'";
$result = $db->query($sql);
$seat1 = $result->fetch_assoc();
$seat = $seat1['seat'];
// echo $seat;

//for purchase, get the lower seat 
$sql = "SELECT seat FROM purchase WHERE slotid = '" . $slotid . "' AND purchaseid = '" . $jlowervalue . "'";
$result = $db->query($sql);
$seat2 = $result->fetch_assoc();
$seatlower = $seat2['seat'];

//XOR logic to find the seat that was cancelled
$cancelled1 =  _xor($seat, $seatlower);

//obtain original booking seat
$sql = "SELECT seat FROM theaterslot WHERE slotid = '" . $slotid . "'";
$result = $db->query($sql);
$seat3 = $result->fetch_assoc();
$seatoriginal = $seat3['seat'];

//XOR logic again to restore the original booking
$restored =  _xor($seatoriginal, $cancelled1);

//update the original booking
$query = "UPDATE theaterslot SET seat = '".$restored."' WHERE slotid = '" . $slotid . "'";
$db->query($query);

//minus points
$sql = "UPDATE users SET points = points-1 WHERE name = '".$userid."'";
$db->query($sql); 

//delete from purchase
$sql = "DELETE FROM purchase WHERE purchaseid = '" . $jvalue . "'";
$db->query($sql);

//delete from currentbook
$sql = "DELETE FROM currentbook WHERE bookid = '" . $jvalue . "'";
$db->query($sql);

//delete from viewhist
$sql = "DELETE FROM viewhist WHERE histid = '" . $jvalue . "'";
$db->query($sql);

$db->close();
header("Location:profile.php");

?>