<?php
/**
 * Created by PhpStorm.
 * User: snark | itfrogs.ru
 * Date: 12/6/18
 * Time: 12:49 PM
 */

try {
    $model = new photosLinkPluginLinkModel();
    if (!$model->fieldExists('title')) {
        $model->exec(
            'ALTER TABLE `photos_link` ADD COLUMN `title` VARCHAR(255) NULL DEFAULT NULL AFTER `url`'
        );
    }
}
catch (waException $e) {

}