<?php
/**
 * This is the template for generating a module class file.
 */

/* @var $this yii\web\View */
/* @var $generator yii\gii\generators\module\Generator */

echo "<?php\n";
?>
    
return [
    'modules' => [
    <?php foreach ($generator->moduleConfig['modules'] as $key => $value){?>
        <?= "'" . $key . "'"?> => [
                'class' => <?= "'" . $value['class'] . "',";?>
       
            ],
    <?php }?>
    ],
];
