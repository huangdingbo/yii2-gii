<?php
/**
 * This is the template for generating a controller class within a module.
 */

/* @var $this yii\web\View */
/* @var $generator yii\gii\generators\module\Generator */

echo "<?php\n";
?>

namespace <?= $generator->getControllerNamespace() ?>;

use common\components\controllers\ApiController;

/**
* Default controller for the `<?= $generator->moduleID ?>` module
*/
class <?=$generator->getControllerID() ?>Controller extends ApiController
{
/**
* 使用代码生成器生成的默认方法
*/
public function actionIndex()
{
    return ['data' => '请完成正常逻辑'];
}
}