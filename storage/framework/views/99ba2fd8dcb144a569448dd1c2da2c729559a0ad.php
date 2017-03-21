<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel 5.3 - Angular 2</title>

        <!-- 1. Load libraries -->
        <!-- Polyfill(s) for older browsers -->
        <?php echo e(Html::script('core-js/client/shim.min.js')); ?>

        <?php echo e(Html::script('zone.js/dist/zone.js')); ?>

        <?php echo e(Html::script('reflect-metadata/Reflect.js')); ?>

        <?php echo e(Html::script('systemjs/dist/system.src.js')); ?>

        <?php echo e(Html::script('systemjs.config.js')); ?>


        <script>
            System.import('app').catch(function(err){ console.error(err); });
        </script>
    </head>
    <!-- 3. Display the application -->
    <body>
    <my-app>Loading...</my-app>
    <products></products>
    </body>
</html>