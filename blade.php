<?php 
/** @var \Illuminate\View\Compilers\BladeCompiler $bladeCompiler */

$bladeCompiler->directive('datetime', function ($timestamp) {
    return '<?php echo date("l, F j, Y", ' . $timestamp . '); ?>';
});
