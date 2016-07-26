<?php

namespace Admin\AdminBundle\Form\Frontend;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\CallbackValidator;
use Symfony\Component\Form\FormError;

class AdminType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
		->add('nombre')
			->add('apellidos')
			->add('email', EmailType::class)
			->add('usuario')
			->add('password', RepeatedType::class, array(
				'type' => PasswordType::class,
				'invalid_message' => 'The password fields must match.',
				'options' => array('attr' => array('class' => 'password-field')),
				'required' => true,
				'first_options'  => array('label' => "Password"),
				'second_options' => array('label' => 'Repeat Password')))
			;
		$builder->add('adminC', ChoiceType::class, array(
				'choices' => array(
				  'Si' => 'si',
				  'No' => 'no'
				),
				'label' => false,
				'multiple' => false,
				'expanded' => true,
				'required' => true,
				'mapped' => false,
			));

	}
	public function setDefaultOptions(OptionsResolverInterface $resolver)
	{
		$resolver->setDefaults(array(
		'data_class' => 'AppBundle\Entity\Usuario'
		));
	}
	public function getName()
	{
		return 'finanzas_adminbundle_admintype';
	}
}
