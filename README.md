BilibooInterventionImageBundle
==================

Use InterventionImage in Sf2

## Enable the bundle

To start using the bundle, register the bundle in your application's kernel class:

``` php
// app/AppKernel.php
public function registerBundles()
{
    $bundles = array(
        // ...
        new Biliboo\ChartBundle\BilibooInterventionImageBundle(),
        // ...
    );
)
```

## Register a manager

``` yaml
# app/config/config.yml
biliboo_intervention_image:
    managers:
        imagick:
            driver: imagick
```

## Using a manager

``` php
$manager = $this->container->get('biliboo_intervention_image.managers.imagick');
```

License
-------

This bundle is under the [MIT license](LICENSE.md).