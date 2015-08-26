Victoire CMS SocialPage Bundle
============

Need to add a social page like box in a victoire website ?

First you need to have a valid Symfony2 Victoire edition.
Then run:

```
    php composer.phar require friendsofvictoire/socialpage-widget
```

Declare the bundle in your AppKernel

```php
    class AppKernel extends Kernel
    {
        public function registerBundles()
        {
            $bundles = array(
                ...
                new Victoire\Widget\SocialPageBundle\VictoireWidgetSocialPageBundle(),
            );

            return $bundles;
        }
    }
```
