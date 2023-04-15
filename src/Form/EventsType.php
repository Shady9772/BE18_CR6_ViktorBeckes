<?php

namespace App\Form;

use App\Entity\Events;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EventsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Name', null, array("attr"=>["class"=>"text formcolor"]))
            ->add('Description', null, array("attr"=>["class"=>"text formcolor"]))
            ->add('Image', null, array("attr"=>["class"=>"text formcolor"]))
            ->add('Capacity', null, array("attr"=>["class"=>"text formcolor"]))
            ->add('email', null, array("attr"=>["class"=>"text formcolor"]))
            ->add('Contact', null, array("attr"=>["class"=>"text formcolor"]))
            ->add('Address', null, array("attr"=>["class"=>"text formcolor"]))
            ->add('URL', null, array("attr"=>["class"=>"text formcolor"]))
            ->add('Type', null, array("attr"=>["class"=>"text formcolor"]))
            ->add('Date', null, array("attr"=>["class"=>"text formcolor w-25 container form-control"]))
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Events::class,
        ]);
    }
}
