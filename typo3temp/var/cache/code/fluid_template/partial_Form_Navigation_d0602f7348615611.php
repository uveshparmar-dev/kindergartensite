<?php
class partial_Form_Navigation_d0602f7348615611 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
<nav class="';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.renderingOptions.formNavigation.navigationClassAttribute')]);

$output0 .= '" aria-label="';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.renderingOptions.formNavigation.navigationAriaLabelAttribute')]);

$output0 .= '">
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array1 = [
'0' => $renderingContext->getVariableProvider()->getByPath('form.previousPage'),
];

$expression2 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments8 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression2(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output3 = '';

$output3 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ButtonViewHelper
$renderChildrenClosure5 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper
$renderChildrenClosure7 = function() use ($renderingContext) {
return NULL;
};

$arguments6 = [
'property' => NULL,
'element' => $renderingContext->getVariableProvider()->getByPath('form.currentPage'),
'renderingOptionProperty' => 'previousButtonLabel',
];
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::class, $arguments6, $renderingContext, $renderChildrenClosure7)]);
};

$arguments4 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'name' => NULL,
'type' => 'submit',
'property' => '__currentPage',
'value' => $renderingContext->getVariableProvider()->getByPath('form.previousPage.index'),
'formnovalidate' => 'formnovalidate',
'class' => $renderingContext->getVariableProvider()->getByPath('form.renderingOptions.formNavigation.btnPreviousClassAttribute'),
];

$output3 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Form\ButtonViewHelper::class, $arguments4, $renderingContext, $renderChildrenClosure5);

$output3 .= '
    ';
return $output3;
},
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments8, $renderingContext)
;

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array22 = [
'0' => $renderingContext->getVariableProvider()->getByPath('form.nextPage'),
];

$expression23 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments24 = [
'__then' => function() use ($renderingContext) {
$output9 = '';

$output9 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ButtonViewHelper
$renderChildrenClosure11 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper
$renderChildrenClosure13 = function() use ($renderingContext) {
return NULL;
};

$arguments12 = [
'property' => NULL,
'element' => $renderingContext->getVariableProvider()->getByPath('form.currentPage'),
'renderingOptionProperty' => 'nextButtonLabel',
];
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::class, $arguments12, $renderingContext, $renderChildrenClosure13)]);
};

$arguments10 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'name' => NULL,
'type' => 'submit',
'property' => '__currentPage',
'value' => $renderingContext->getVariableProvider()->getByPath('form.nextPage.index'),
'class' => $renderingContext->getVariableProvider()->getByPath('form.renderingOptions.formNavigation.btnNextClassAttribute'),
];

$output9 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Form\ButtonViewHelper::class, $arguments10, $renderingContext, $renderChildrenClosure11);

$output9 .= '
        ';
return $output9;
},
'__else' => function() use ($renderingContext) {
$output14 = '';

$output14 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ButtonViewHelper
$renderChildrenClosure16 = function() use ($renderingContext) {
$output19 = '';

$output19 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper
$renderChildrenClosure21 = function() use ($renderingContext) {
return NULL;
};

$arguments20 = [
'property' => NULL,
'element' => $renderingContext->getVariableProvider()->getByPath('form'),
'renderingOptionProperty' => 'submitButtonLabel',
];

$output19 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::class, $arguments20, $renderingContext, $renderChildrenClosure21)]);

$output19 .= '
            ';
return $output19;
};
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure18 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('form.pages');
};

$arguments17 = [
'subject' => NULL,
];
$renderChildrenClosure18 = ($arguments17['subject'] !== null) ? function() use ($arguments17) { return $arguments17['subject']; } : $renderChildrenClosure18;
$arguments15 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'name' => NULL,
'type' => 'submit',
'property' => '__currentPage',
'value' => $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::class, $arguments17, $renderingContext, $renderChildrenClosure18),
'class' => $renderingContext->getVariableProvider()->getByPath('form.renderingOptions.formNavigation.btnSubmitClassAttribute'),
];

$output14 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Form\ButtonViewHelper::class, $arguments15, $renderingContext, $renderChildrenClosure16);

$output14 .= '
        ';
return $output14;
},
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression23(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array22)),
    $renderingContext
),
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments24, $renderingContext)
;

$output0 .= '
</nav>

';

    return $output0;
}

}

#