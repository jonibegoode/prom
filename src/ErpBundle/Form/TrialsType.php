<?php

namespace ErpBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TrialsType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('protocole')->add('code')->add('sponsor')->add('country')->add('responsible')->add('technician')->add('state')->add('experimentalProduct')->add('kindOfTrial')->add('kindOfCrop')->add('settingDate')->add('countryOfTrial')->add('effectiveDate')->add('confirmedQuotation')->add('first50Invoiced')->add('farmerCompensation')->add('area');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ErpBundle\Entity\Trials'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'erpbundle_trials';
    }


}
