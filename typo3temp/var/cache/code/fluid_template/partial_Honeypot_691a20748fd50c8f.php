<?php
class partial_Honeypot_691a20748fd50c8f extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): ?string {
        return (string)'';
    }
    public function hasLayout(): bool {
        return false;
    }
    public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): void {
        $renderingContext->getViewHelperResolver()->setLocalNamespaces(array (
  'f' => 
  array (
    0 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
));
    }
    
    
    /**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): mixed {
    $output0 = '';

$output0 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array9 = [
'0' => $renderingContext->getVariableProvider()->getByPath('element.properties.renderAsHiddenField'),
];

$expression10 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments11 = [
'__then' => function() use ($renderingContext) {
$output1 = '';

$output1 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure3 = function() use ($renderingContext) {
return NULL;
};

$array4 = [
'autocomplete' => $renderingContext->getVariableProvider()->getByPath('element.identifier'),
];

$arguments2 = [
'data' => NULL,
'aria' => NULL,
'name' => NULL,
'value' => NULL,
'respectSubmittedDataValue' => true,
'property' => $renderingContext->getVariableProvider()->getByPath('element.identifier'),
'additionalAttributes' => $array4,
'id' => $renderingContext->getVariableProvider()->getByPath('element.uniqueIdentifier'),
];

$output1 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::class, $arguments2, $renderingContext, $renderChildrenClosure3);

$output1 .= '
    ';
return $output1;
},
'__else' => function() use ($renderingContext) {
$output5 = '';

$output5 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure7 = function() use ($renderingContext) {
return NULL;
};

$array8 = [
'autocomplete' => $renderingContext->getVariableProvider()->getByPath('element.identifier'),
'aria-hidden' => 'true',
];

$arguments6 = [
'data' => NULL,
'aria' => NULL,
'name' => NULL,
'value' => NULL,
'errorClass' => 'f3-form-error',
'required' => false,
'type' => 'text',
'property' => $renderingContext->getVariableProvider()->getByPath('element.identifier'),
'additionalAttributes' => $array8,
'id' => $renderingContext->getVariableProvider()->getByPath('element.uniqueIdentifier'),
'class' => $renderingContext->getVariableProvider()->getByPath('element.properties.elementClassAttribute'),
'tabindex' => -1,
'style' => $renderingContext->getVariableProvider()->getByPath('element.properties.styleAttribute'),
];

$output5 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::class, $arguments6, $renderingContext, $renderChildrenClosure7);

$output5 .= '
    ';
return $output5;
},
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression10(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array9)),
    $renderingContext
),
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments11, $renderingContext)
;

$output0 .= '

';

    return $output0;
}

}

#