<?php
function getBillets() {
    $db = new PDO('mysql:host=localhost;dbname=monblog;charset=utf8', 'root', '');
    $billets = $db->query('SELECT BIL_ID as id, BIL_DATE as date, BIL_TITRE as titre, BIL_CONTENU as contenu FROM T_BILLET ORDER BY BIL_ID DESC');
    return $billets->fetchAll();
}
