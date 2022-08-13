<?php

use PhpCsFixer\Fixer\Operator\ConcatSpaceFixer;
use PhpCsFixer\Fixer\Operator\NotOperatorWithSuccessorSpaceFixer;
use Symplify\EasyCodingStandard\Config\ECSConfig;
use Symplify\EasyCodingStandard\ValueObject\Set\SetList;

return static function (ECSConfig $ecsConfig): void {
    $ecsConfig->paths([getcwd()]);
    $ecsConfig->skip([getcwd().'/vendor']);

    $ecsConfig->sets([SetList::ARRAY, SetList::SPACES]);
    $ecsConfig->ruleWithConfiguration(ConcatSpaceFixer::class, [
        'spacing' => 'none',
    ]);

    $services = $ecsConfig->services();
    $services->remove(NotOperatorWithSuccessorSpaceFixer::class);
};
