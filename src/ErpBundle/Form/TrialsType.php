<?php

namespace ErpBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TrialsType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('protocole', TextType::class, array('required'=>false))
            ->add('code', TextType::class, array('required'=>false))
            ->add('sponsor', TextType::class, array('required'=>false))
            ->add('country', TextType::class, array('required'=>false))
            ->add('responsible', TextType::class, array('required'=>false))
            ->add('technician', TextType::class, array('required'=>false))
            ->add('state', TextType::class, array('required'=>false))
            ->add('experimentalProduct', TextType::class, array('required'=>false))
            ->add('kindOfTrial', TextType::class, array('required'=>false))
            ->add('kindOfCrop', TextType::class, array('required'=>false))
            ->add('settingDate', DateType::class, array('required'=>false))
            ->add('countryOfTrial', TextType::class, array('required'=>false))
            ->add('effectiveDate', DateType::class, array('required'=>false))
            ->add('confirmedQuotation', CheckboxType::class, array('required'=>false))
            ->add('first50Invoiced', CheckboxType::class, array('required'=>false))
            ->add('farmerCompensation', IntegerType::class, array('required'=>false))
            ->add('area', TextType::class, array('required'=>false))
            ->add('save', SubmitType::class)
        ;
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
