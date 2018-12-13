<?php
/**
 * Created by PhpStorm.
 * User: Proprietaire
 * Date: 13/12/2018
 * Time: 18:53
 */
?>

<p> Message de {{ $data['nom']}} </p>
<p> Email : {{ $data['email']}} </p>
<p>Sujet : <br> {!! nl2br(e($data['message'])) !!} </p>
