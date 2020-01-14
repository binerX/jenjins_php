<h1> hello index </h1>
<!---->
<!--<h2> --><?php //echo $name; ?><!--  </h2>-->
<!---->
<!--<h2> --><?php //echo $ip; ?><!--  </h2>-->
<!---->
<!--<h2> --><?php //echo $arr['age']; ?><!--  </h2>-->
<!--<h2> --><?php //echo $arr['class']; ?><!--  </h2>-->

<!--<h2> --><?php //echo $user['name']; ?><!--  </h2>-->
<!--<h2> --><?php //echo $data['title']; ?><!--  </h2>-->
<!---->

<!--//简易输出-->
<!--<h2> --><?//= $user['ip']; ?><!--  </h2>-->


<!--<h2> --><?//= $data; ?><!--  </h2>-->

<?php
//过滤
//echo  \yii\helpers\Html::encode($data)
//
//?>

<?php

//过滤
use \yii\helpers\Html;
use \yii\helpers\HtmlPurifier;

//echo \yii\helpers\HtmlPurifier::process($data);

?>

<h3> <?= Html::encode($data) ?> </h3>

<h3> <?= HtmlPurifier::process($data) ?> </h3>

<?php echo $this -> render("about") ?>

<h1> hello home </h1>



