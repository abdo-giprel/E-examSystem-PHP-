<?php 
include "../../../functions/mainFunctions/conn.php" ;
//include "functions/mainFunctions/conn.php" ;
/*if ($_SERVER['REQUEST_METHOD'] === 'POST') {*/
$stmt = $conn->query("SELECT c.*,f.name as ffname,f.logo 
                     FROM course as c
                    inner join faculty as f
                    on c.faculty_id=f.id ");
$facultylogo = $conn->query("SELECT f.logo FROM faculty as f");
 // set the resulting array to associative
 $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
 $res=$stmt->fetchAll();
 $facultylogo->setFetchMode(PDO::FETCH_ASSOC);
 $dd=$facultylogo->fetchAll();

 ?>