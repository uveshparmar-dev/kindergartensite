<?php
class partial_Misc_FlashMessages_b98d7a5ea77609a8 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
// Rendering ViewHelper In2code\Powermail\ViewHelpers\Misc\CheckForTypoScriptViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};

$arguments1 = [
'settings' => $renderingContext->getVariableProvider()->getByPath('settings'),
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(In2code\Powermail\ViewHelpers\Misc\CheckForTypoScriptViewHelper::class, $arguments1, $renderingContext, $renderChildrenClosure2)]);

$output0 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$renderChildrenClosure4 = function() use ($renderingContext) {
return NULL;
};

$arguments3 = [
'as' => NULL,
'queueIdentifier' => 'extbase.flashmessages.tx_powermail_pi1',
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper::class, $arguments3, $renderingContext, $renderChildrenClosure4);

$output0 .= '
';

    return $output0;
}

}

#