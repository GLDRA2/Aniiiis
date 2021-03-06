<?php

namespace App\Form;

use App\Entity\Question;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AnswerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // $builder
        //     ->add('confirm',  TextType::class, [
        //         'label' =>false ,
                
        //         'required' => false,
        //         'attr' =>[
        //             'placeholder'=>'answer',
        //             'class' => 'form-control',
        //             'type' => 'text'
        //         ]
        //     ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Question::class,
        ]);
    }
}
