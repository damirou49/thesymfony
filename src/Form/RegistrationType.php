<?php

namespace App\Form;


use App\Entity\User;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;



//premet de generer un formulaire//

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            
            ->add('firstname')
            ->add('lastname')
            ->add('username')
            ->add('phone');

    }
     public function getParent()
  {
      return 'FOS\UserBundle\Form\Type\RegistrationFormType';
  }



}
