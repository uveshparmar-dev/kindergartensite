<?php
class partial_Form_Field_Textarea_e101a30f8e4e4b0d extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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

<div class="powermail_fieldwrap powermail_fieldwrap_type_textarea powermail_fieldwrap_';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('field.marker')]);

$output0 .= ' ';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('field.css')]);

$output0 .= ' ';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.styles.framework.fieldAndLabelWrappingClasses')]);

$output0 .= '">
	<div class="';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.styles.framework.fieldWrappingClasses')]);

$output0 .= '">

		
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};

$arguments1 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'Form/FieldLabel',
'arguments' => $renderingContext->getVariableProvider()->getAll(),
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments1, $renderingContext, $renderChildrenClosure2);

$output0 .= '

		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextareaViewHelper
$renderChildrenClosure4 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper In2code\Powermail\ViewHelpers\Misc\PrefillFieldViewHelper
$renderChildrenClosure6 = function() use ($renderingContext) {
return NULL;
};

$arguments5 = [
'default' => NULL,
'field' => $renderingContext->getVariableProvider()->getByPath('field'),
'mail' => $renderingContext->getVariableProvider()->getByPath('mail'),
];
// Rendering ViewHelper In2code\Powermail\ViewHelpers\Validation\ValidationDataAttributeViewHelper
$renderChildrenClosure8 = function() use ($renderingContext) {
return NULL;
};

$arguments7 = [
'additionalAttributes' => [],
'iteration' => NULL,
'field' => $renderingContext->getVariableProvider()->getByPath('field'),
];
$output9 = '';

$output9 .= 'powermail_field_';

$output9 .= $renderingContext->getVariableProvider()->getByPath('field.marker');
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array10 = [
'0' => $renderingContext->getVariableProvider()->getByPath('field.placeholder'),
];

$expression11 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments12 = [
'__then' => function() use ($renderingContext) {

return $renderingContext->getVariableProvider()->getByPath('field.placeholder');
},
'__else' => function() use ($renderingContext) {

return $renderingContext->getVariableProvider()->getByPath('field.title');
},
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression11(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array10)),
    $renderingContext
),
];
$output13 = '';

$output13 .= 'powermail_textarea ';

$output13 .= $renderingContext->getVariableProvider()->getByPath('settings.styles.framework.fieldClasses');

$output13 .= ' ';
// Rendering ViewHelper In2code\Powermail\ViewHelpers\Validation\ErrorClassViewHelper
$renderChildrenClosure15 = function() use ($renderingContext) {
return NULL;
};

$arguments14 = [
'field' => $renderingContext->getVariableProvider()->getByPath('field'),
'class' => 'powermail_field_error',
];

$output13 .= $renderingContext->getViewHelperInvoker()->invoke(In2code\Powermail\ViewHelpers\Validation\ErrorClassViewHelper::class, $arguments14, $renderingContext, $renderChildrenClosure15);

$arguments3 = [
'data' => NULL,
'aria' => NULL,
'name' => NULL,
'errorClass' => 'f3-form-error',
'required' => false,
'property' => $renderingContext->getVariableProvider()->getByPath('field.marker'),
'value' => $renderingContext->getViewHelperInvoker()->invoke(In2code\Powermail\ViewHelpers\Misc\PrefillFieldViewHelper::class, $arguments5, $renderingContext, $renderChildrenClosure6),
'additionalAttributes' => $renderingContext->getViewHelperInvoker()->invoke(In2code\Powermail\ViewHelpers\Validation\ValidationDataAttributeViewHelper::class, $arguments7, $renderingContext, $renderChildrenClosure8),
'cols' => 20,
'rows' => 5,
'id' => $output9,
'placeholder' => $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments12, $renderingContext)
,
'class' => $output13,
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Form\TextareaViewHelper::class, $arguments3, $renderingContext, $renderChildrenClosure4);

$output0 .= '
	</div>
</div>
';

    return $output0;
}

}

#