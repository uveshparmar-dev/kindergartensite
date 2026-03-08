<?php
class Student_action_list_a1fdfbbeb13eca63 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
));
    }
    
    
    /**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): mixed {
    $output0 = '';

$output0 .= '<html xmlns:f="http://typo3.org/ns/TYPO3/CMS/Fluid/ViewHelpers">

<h2 style="
    text-align:center;
    margin:50px 0 25px 0;
    font-size:34px;
    font-weight:700;
">
    Student List
</h2>

<!-- CREATE BUTTON -->
<div style="text-align:center; margin-bottom:50px;">
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return '
        + Create Student
    ';
};

$arguments1 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'arguments' => [],
'controller' => NULL,
'extensionName' => NULL,
'pluginName' => NULL,
'pageUid' => NULL,
'pageType' => 0,
'noCache' => NULL,
'language' => NULL,
'section' => '',
'format' => '',
'linkAccessRestrictedPages' => false,
'additionalParams' => [],
'absolute' => false,
'addQueryString' => false,
'argumentsToBeExcludedFromQueryString' => [],
'action' => 'new',
'style' => '
        padding:12px 28px;
        background:#111;
        color:#fff;
        text-decoration:none;
        font-weight:600;
        border-radius:30px;
        display:inline-block;
        font-size:15px;
        box-shadow:0 4px 12px rgba(0,0,0,0.2);
    ',
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::class, $arguments1, $renderingContext, $renderChildrenClosure2);

$output0 .= '
</div>

<!-- CARD WRAPPER -->
<div style="
    max-width:1100px;
    margin:0 auto;
    display:flex;
    flex-wrap:wrap;
    gap:30px;
    justify-content:center;
">

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure4 = function() use ($renderingContext) {
$output5 = '';

$output5 .= '

        <div style="
        width:480px;
        background:#ffffff;
        border-radius:14px;
        box-shadow:0 8px 25px rgba(0,0,0,0.08);
        padding:25px;
        border-top:15px solid ';

$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('student.color')]);

$output5 .= ';
        display:flex;
        align-items:center;
        gap:20px;
    ">

            <!-- IMAGE -->
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array6 = [
'0' => $renderingContext->getVariableProvider()->getByPath('student.image'),
];

$expression7 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments11 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression7(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array6)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output8 = '';

$output8 .= '
                <div style="
                width:120px;
                height:120px;
                flex-shrink:0;
                overflow:hidden;
                border-radius:12px;
            ">

                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure10 = function() use ($renderingContext) {
return NULL;
};

$arguments9 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'src' => '',
'treatIdAsReference' => false,
'crop' => NULL,
'cropVariant' => 'default',
'fileExtension' => NULL,
'minWidth' => NULL,
'minHeight' => NULL,
'maxWidth' => NULL,
'maxHeight' => NULL,
'absolute' => false,
'base64' => false,
'image' => $renderingContext->getVariableProvider()->getByPath('student.image'),
'width' => 120,
'height' => 120,
'style' => '
                        width:100%;
                        height:100%;
                        object-fit:cover;
                        display:block;
                        box-shadow:0 4px 12px rgba(0,0,0,0.15);
                    ',
];

$output8 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::class, $arguments9, $renderingContext, $renderChildrenClosure10);

$output8 .= '

                </div>
            ';
return $output8;
},
];

$output5 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments11, $renderingContext)
;

$output5 .= '

            <!-- CONTENT -->
            <div style="flex:1;">

                <div style="
                font-size:20px;
                font-weight:700;
                margin-bottom:6px;
            ">
                    ';

$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('student.firstName')]);

$output5 .= ' ';

$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('student.lastName')]);

$output5 .= '
                </div>

                <div style="
                font-size:14px;
                color:#555;
                margin-bottom:18px;
            ">
                    ';

$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('student.email')]);

$output5 .= '
                </div>

                <!-- EDIT BUTTON -->
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure13 = function() use ($renderingContext) {
return '
                    ✏ Edit
                ';
};

$array14 = [
'student' => $renderingContext->getVariableProvider()->getByPath('student'),
];
$output15 = '';

$output15 .= '
                    padding:8px 18px;
                    background:';

$output15 .= $renderingContext->getVariableProvider()->getByPath('student.color');

$output15 .= ';
                    color:#ffffff;
                    text-decoration:none;
                    border-radius:25px;
                    font-size:13px;
                    font-weight:600;
                    display:inline-block;
                ';

$arguments12 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'controller' => NULL,
'extensionName' => NULL,
'pluginName' => NULL,
'pageUid' => NULL,
'pageType' => 0,
'noCache' => NULL,
'language' => NULL,
'section' => '',
'format' => '',
'linkAccessRestrictedPages' => false,
'additionalParams' => [],
'absolute' => false,
'addQueryString' => false,
'argumentsToBeExcludedFromQueryString' => [],
'action' => 'edit',
'arguments' => $array14,
'style' => $output15,
];

$output5 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::class, $arguments12, $renderingContext, $renderChildrenClosure13);

$output5 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure17 = function() use ($renderingContext) {
return '
                    🗑 Delete
                ';
};

$array18 = [
'student' => $renderingContext->getVariableProvider()->getByPath('student'),
];

$arguments16 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'controller' => NULL,
'extensionName' => NULL,
'pluginName' => NULL,
'pageUid' => NULL,
'pageType' => 0,
'noCache' => NULL,
'language' => NULL,
'section' => '',
'format' => '',
'linkAccessRestrictedPages' => false,
'additionalParams' => [],
'absolute' => false,
'addQueryString' => false,
'argumentsToBeExcludedFromQueryString' => [],
'action' => 'delete',
'arguments' => $array18,
'onclick' => 'return confirm(\'Are you sure you want to delete this student?\');',
'style' => '
                    padding:8px 18px;
                    background:#d30000;
                    color:#ffffff;
                    text-decoration:none;
                    border-radius:25px;
                    font-size:13px;
                    font-weight:600;
                    display:inline-block;
                    margin-left: 10px;
                ',
];

$output5 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::class, $arguments16, $renderingContext, $renderChildrenClosure17);

$output5 .= '

            </div>

        </div>

    ';
return $output5;
};

$arguments3 = [
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
'each' => $renderingContext->getVariableProvider()->getByPath('students'),
'as' => 'student',
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::class, $arguments3, $renderingContext, $renderChildrenClosure4);

$output0 .= '

</div>

</html>';

    return $output0;
}

}

#