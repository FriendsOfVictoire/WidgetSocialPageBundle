<?php

namespace Victoire\Widget\SocialPageBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Victoire\Bundle\CoreBundle\Form\WidgetType;
use Victoire\Bundle\WidgetBundle\Entity\Widget;

/**
 * WidgetSocialPage form type.
 */
class WidgetSocialPageType extends WidgetType
{
    /**
     * define form fields.
     *
     * @param FormBuilderInterface $builder
     *
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('width', null, [
                'label' => 'widget_socialpage.form.width.label',
            ])
            ->add('height', null, [
                'label' => 'widget_socialpage.form.height.label',
            ])
            ->add('adapt', null, [
                'label' => 'widget_socialpage.form.adapt.label',
            ])
            ->add('friends', null, [
                'label' => 'widget_socialpage.form.friends.label',
            ])
            ->add('small', null, [
                'label' => 'widget_socialpage.form.small.label',
            ])
            ->add('cover', null, [
                'label' => 'widget_socialpage.form.cover.label',
            ])
            ->add('posts', null, [
                'label' => 'widget_socialpage.form.posts.label',
            ]);

        $mode = $options['mode'];
        if ($mode === Widget::MODE_STATIC) {
            $builder
                ->add('name', null, [
                    'label'    => 'widget_socialpage.form.name.label',
                    'required' => true,
                ])
                ->add('url', null, [
                    'label'    => 'widget_socialpage.form.url.label',
                    'required' => true,
                ]);
        }

        parent::buildForm($builder, $options);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        parent::configureOptions($resolver);

        $resolver->setDefaults([
            'data_class'         => 'Victoire\Widget\SocialPageBundle\Entity\WidgetSocialPage',
            'widget'             => 'SocialPage',
            'translation_domain' => 'victoire',
        ]);
    }
}
