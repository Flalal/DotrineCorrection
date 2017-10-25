<?php
/**
 * Created by PhpStorm.
 * User: florian.flahaut
 * Date: 25/10/17
 * Time: 11:02
 */

namespace TP\TestRequetes;
$query = $em->createQuery('SELECT e FROM etudiants e');
$users = $query->getResult();
echo $users;