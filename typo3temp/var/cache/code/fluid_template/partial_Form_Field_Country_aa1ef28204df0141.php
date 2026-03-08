<?php
class partial_Form_Field_Country_aa1ef28204df0141 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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

<div class="powermail_fieldwrap powermail_fieldwrap_type_country powermail_fieldwrap_';

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
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure4 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper In2code\Powermail\ViewHelpers\Form\CountriesViewHelper
$renderChildrenClosure6 = function() use ($renderingContext) {
return NULL;
};

$arguments5 = [
'key' => 'isoCodeA3',
'value' => 'officialNameLocal',
'sortbyField' => 'isoCodeA3',
'sorting' => 'asc',
];
// Rendering ViewHelper In2code\Powermail\ViewHelpers\Misc\PrefillFieldViewHelper
$renderChildrenClosure8 = function() use ($renderingContext) {
return NULL;
};

$arguments7 = [
'default' => NULL,
'field' => $renderingContext->getVariableProvider()->getByPath('field'),
'mail' => $renderingContext->getVariableProvider()->getByPath('mail'),
];
// Rendering ViewHelper In2code\Powermail\ViewHelpers\Validation\ValidationDataAttributeViewHelper
$renderChildrenClosure10 = function() use ($renderingContext) {
return NULL;
};

$arguments9 = [
'additionalAttributes' => [],
'iteration' => NULL,
'field' => $renderingContext->getVariableProvider()->getByPath('field'),
];
$output11 = '';

$output11 .= 'powermail_country ';

$output11 .= $renderingContext->getVariableProvider()->getByPath('settings.styles.framework.fieldClasses');

$output11 .= ' ';
// Rendering ViewHelper In2code\Powermail\ViewHelpers\Validation\ErrorClassViewHelper
$renderChildrenClosure13 = function() use ($renderingContext) {
return NULL;
};

$arguments12 = [
'field' => $renderingContext->getVariableProvider()->getByPath('field'),
'class' => 'powermail_field_error',
];

$output11 .= $renderingContext->getViewHelperInvoker()->invoke(In2code\Powermail\ViewHelpers\Validation\ErrorClassViewHelper::class, $arguments12, $renderingContext, $renderChildrenClosure13);
$output14 = '';

$output14 .= 'powermail_field_';

$output14 .= $renderingContext->getVariableProvider()->getByPath('field.marker');

$arguments3 = [
'data' => NULL,
'aria' => NULL,
'name' => NULL,
'optionsAfterContent' => false,
'optionValueField' => NULL,
'optionLabelField' => NULL,
'sortByOptionLabel' => false,
'selectAllByDefault' => false,
'errorClass' => 'f3-form-error',
'multiple' => false,
'required' => false,
'property' => $renderingContext->getVariableProvider()->getByPath('field.marker'),
'options' => $renderingContext->getViewHelperInvoker()->invoke(In2code\Powermail\ViewHelpers\Form\CountriesViewHelper::class, $arguments5, $renderingContext, $renderChildrenClosure6),
'prependOptionLabel' => 'Please select country',
'prependOptionValue' => '',
'value' => $renderingContext->getViewHelperInvoker()->invoke(In2code\Powermail\ViewHelpers\Misc\PrefillFieldViewHelper::class, $arguments7, $renderingContext, $renderChildrenClosure8),
'additionalAttributes' => $renderingContext->getViewHelperInvoker()->invoke(In2code\Powermail\ViewHelpers\Validation\ValidationDataAttributeViewHelper::class, $arguments9, $renderingContext, $renderChildrenClosure10),
'class' => $output11,
'id' => $output14,
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::class, $arguments3, $renderingContext, $renderChildrenClosure4);

$output0 .= '
	</div>
</div>
';

    return $output0;
}

}

#