<h3>test controller</h3>
<h4>index action</h4>

<br>
<?=$test; ?>
<br>
<?=$testservice; ?>
<br>
<br>

<?php

/** @var $model app\models\Product */
echo \yii\widgets\DetailView::widget(['model' => $model]);

?>
