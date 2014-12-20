<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var common\models\PageCategory $model
 */

$this->title = '新建分类';
$this->addBreadcrumb('页面分类',['index']);
$this->addBreadcrumb($this->title);
?>
<div class="page-category-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
