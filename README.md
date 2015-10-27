Victoire DCMS SocialPage Bundle
============

##What is the purpose of this bundle

This bundles gives you access to the *Social Page Widget*.
This widget integrates the Facebook Page Plugin to promote any Facebook Page on any Victoire's website.

More social networks integration will come in the future.

##Set Up Victoire

If you haven't already, you can follow the steps to set up Victoire *[here](https://github.com/Victoire/victoire/blob/master/setup.md)*

##Install the bundle

    php composer.phar require friendsofvictoire/socialpage-widget

###Reminder

Do not forget to add the bundle in your AppKernel !

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
