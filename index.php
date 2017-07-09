<?php
    /**
     * Created by PhpStorm.
     * User: abelghazinyan
     * Date: 7/9/17
     * Time: 8:46 PM
     */
    $unixTimestamp = time();
    $birdDateTtimestamp = strtotime('19-12-1998');
    $birdDateTtimestamp = floor(($unixTimestamp-$birdDateTtimestamp)/3600/24);

    echo "<strong>Birh date : 19/12/1998</strong><br><strong>I lived {$birdDateTtimestamp} days</strong>";

