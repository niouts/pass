<?php
namespace Niouts\MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class IdentifiantType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder->add('libelle', 'text', array('label' => 'identifiant.label.libelle'));
		$builder->add('contenu', 'textarea', array('label' => 'identifiant.label.contenu'));
		$builder->add('valider', 'submit', array('label' => 'identifiant.label.valider'));
	}

	public function getName()
	{
		return 'identifiant';
	}
	
	public function setDefaultOptions(OptionsResolverInterface $resolver)
	{
		$resolver->setDefaults(array(
			'data_class' => 'Niouts\MainBundle\Entity\Identifiant',
		));
	}
}