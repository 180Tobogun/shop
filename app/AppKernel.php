<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),

            new JMS\SerializerBundle\JMSSerializerBundle(),
            new Knp\Bundle\MenuBundle\KnpMenuBundle(),
            new FOS\UserBundle\FOSUserBundle(),
            new Sonata\CoreBundle\SonataCoreBundle(),
            new Sonata\BlockBundle\SonataBlockBundle(),
            new Sonata\DoctrineORMAdminBundle\SonataDoctrineORMAdminBundle(),
            new Sonata\AdminBundle\SonataAdminBundle(),
            new Sonata\EasyExtendsBundle\SonataEasyExtendsBundle(),
            new Sonata\IntlBundle\SonataIntlBundle(),
            new Sonata\NotificationBundle\SonataNotificationBundle(),
            new Sonata\UserBundle\SonataUserBundle(),
            new Sonata\CustomerBundle\SonataCustomerBundle(),
            new Sonata\ProductBundle\SonataProductBundle(),
            new Sonata\BasketBundle\SonataBasketBundle(),
            new Sonata\OrderBundle\SonataOrderBundle(),
            new Sonata\InvoiceBundle\SonataInvoiceBundle(),
            new Sonata\MediaBundle\SonataMediaBundle(),
            new Sonata\DeliveryBundle\SonataDeliveryBundle(),
            new Sonata\PaymentBundle\SonataPaymentBundle(),
            new Sonata\PriceBundle\SonataPriceBundle(),

            new Application\Sonata\CustomerBundle\ApplicationSonataCustomerBundle(),
            new Application\Sonata\DeliveryBundle\ApplicationSonataDeliveryBundle(),
            new Application\Sonata\BasketBundle\ApplicationSonataBasketBundle(),
            new Application\Sonata\InvoiceBundle\ApplicationSonataInvoiceBundle(),
            new Application\Sonata\MediaBundle\ApplicationSonataMediaBundle(),
            new Application\Sonata\OrderBundle\ApplicationSonataOrderBundle(),
            new Application\Sonata\PaymentBundle\ApplicationSonataPaymentBundle(),
            new Application\Sonata\ProductBundle\ApplicationSonataProductBundle(),

            new AppBundle\AppBundle(),
            new Tobogun\HomepageBundle\TobogunHomepageBundle(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new Symfony\Bundle\DebugBundle\DebugBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function init()
    {
        bcscale(3);
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load($this->getRootDir().'/config/config_'.$this->getEnvironment().'.yml');
    }
}
