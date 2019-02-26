<?php
/**
 * @param $json
 *
 * @return mixed
 */
function getComposerFileData($json)
{
    if (!empty($json)) {
        $arr = json_decode($json, true);
        return $arr;
    }
}


$json = '{
        "doctrine/migrations":"dev-master",
        "symfony/console":">=2.0.10",
        "symfony/yaml":">=2.0.10",
        "doctrine/common":"2.2.1",
        "doctrine/dbal":"2.2.1",
        "doctrine/orm":"2.2.1",
        "twig/twig":">=1.6.1",
        "gedmo/doctrine-extensions":"2.2.1",
        "simplethings/entity-audit-bundle":"dev-master",
        "guilhermeblanco/ZendFramework1-Doctrine2":"master",
        "easybib/EasyBib_Form_Decorator":"master",
        "ezyang/htmlpurifier":"master",
        "phpids/phpids":"0.7",
        "mrclay/minify":"master",
        "sourceforge/phpthumb":"1.7.11",
        "zids/zids":"1.0.1",
        "arnaud-lb/zwig":"master",
        "apache/solr":"trunk"

}';
