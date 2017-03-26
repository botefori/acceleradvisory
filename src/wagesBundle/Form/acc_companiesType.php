<?php

namespace wagesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class acc_companiesType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('socialrason')->add('siret')->add('phone')->add('ccn')->add('existsbefore')->add('existsbeforevalue')->add('employeesnumber')->add('declacadres')->add('cadrenumber')->add('ccpyesno')->add('ccp')->add('ssw')->add('rrcname')->add('rrcnumcontract')->add('mutuellecontractnum')->add('mutuelleMonthlyBonusAmount')->add('mutuellAmountonEmplayerCharge')->add('prevoyanceContractNum')->add('retirementContractNum')->add('retirement')->add('mutuelle')->add('prevoyance');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'wagesBundle\Entity\acc_companies'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'wagesbundle_acc_companies';
    }


}
