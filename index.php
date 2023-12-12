
<?php
//## Exercice 1
// Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: **index.php?lastname=Nemare&firstname=Jean**
$lastname = $_GET['lastname'];
$firstname=$_GET['firstname'];
echo "lastname=".$lastname ."&"."firstname=".$firstname;
//## Exercice 2
// Faire une page index.php. Tester sur cette page que le paramètre **age** existe et si c'est le cas l'afficher sinon le signaler : **index.php?lastname=Nemare&firstname=Jean**
if (isset( $_GET['age']) != ''){
echo "age:".$_GET['age'];
}else {
  echo "age n a pas defini";
}
// ## Exercice 3
// Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent  et les afficher: **index.php?startDate=2/05/2016&endDate=27/11/2016**

if (isset($_GET['endDate']) && $_GET['startDate'] != '') {
  echo 'startDate:' . $_GET['startDate'];
  echo "<br>";
  echo 'endDate:' . $_GET['endDate'];
}
// ## Exercice 4
// Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent  et les afficher: **index.php?language=PHP&server=LAMP**
if (isset($_GET['language']) && $_GET['server'] != '') {
  echo 'langugage=' . $_GET['language'];
  echo "<br>";
  echo 'server=' . $_GET['server'];
}
// ## Exercice 5
// Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent  et les afficher: **index.php?week=12**

if (isset($_GET['week']) != '') {
  echo 'week=' . $_GET['week'];
}

// ## Exercice 6
// Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent  et les afficher: **index.php?building=12&room=101**
if (isset($_GET['building']) && $_GET['room'] != '') {
  echo 'building= ' . $_GET['building'];
  echo "<br>";
  echo 'room= ' . $_GET['room'];
}
?>