<?php
class partial_Misc_HoneyPod_fbd4a98412f74139 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): ?string {
        return (string)'';
    }
    public function hasLayout(): bool {
        return false;
    }
    public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): void {
        $renderingContext->getViewHelperResolver()->setLocalNamespaces(array (
  'vh' => 
  array (
    0 => 'In2code\\Powermail\\ViewHelpers',
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
// Rendering ViewHelper In2code\Powermail\ViewHelpers\Validation\IsHonepodEnabledViewHelper
$renderChildrenClosure3 = function() use ($renderingContext) {
return NULL;
};

$arguments2 = [
];

$array1 = [
'0' => $renderingContext->getViewHelperInvoker()->invoke(In2code\Powermail\ViewHelpers\Validation\IsHonepodEnabledViewHelper::class, $arguments2, $renderingContext, $renderChildrenClosure3),
];

$expression4 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments13 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression4(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output5 = '';

$output5 .= '
	<div style="margin-left: -99999px; position: absolute;">
		<label for="powermail_hp_';

$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.uid')]);

$output5 .= '" aria-hidden="true">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure7 = function() use ($renderingContext) {
return NULL;
};

$arguments6 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'honeypodLabel',
];

$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments6, $renderingContext, $renderChildrenClosure7)]);

$output5 .= '
		</label>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure9 = function() use ($renderingContext) {
return NULL;
};
$output11 = '';

$output11 .= 'new-powermail-hp-';

$output11 .= $renderingContext->getVariableProvider()->getByPath('form.uid');

$array10 = [
'autocomplete' => $output11,
'aria-hidden' => 'true',
];
$output12 = '';

$output12 .= 'powermail_hp_';

$output12 .= $renderingContext->getVariableProvider()->getByPath('form.uid');

$arguments8 = [
'data' => NULL,
'aria' => NULL,
'property' => NULL,
'errorClass' => 'f3-form-error',
'required' => false,
'type' => 'text',
'name' => 'field[__hp]',
'value' => '',
'additionalAttributes' => $array10,
'id' => $output12,
'tabindex' => -1,
];

$output5 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::class, $arguments8, $renderingContext, $renderChildrenClosure9);

$output5 .= '
	</div>
';
return $output5;
},
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments13, $renderingContext)
;

$output0 .= '
';

    return $output0;
}

}

#