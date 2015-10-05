<?php
namespace Siteruffecarde\GestionuserBundle\Form;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;


/**
 * Description of RegistrationType
 *
 * @author jrbebel
 */
class RegistrationType extends AbstractType{
   
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('Nom','text')
                ->add('Prenom','text',array('label'=>'Prénom'))
                ->add('Birthday','date',array('label'=>'Né(e) le','years'=> range('2010','1940')))
                ->add('Tel','integer',array('label'=>'Téléphone'))
                ->add('Adresse','text')
                ->add('Complement','text',array('label'=>'Complément','required'=>false))
                ->add('CdePostal','integer',array('label'=>'Code Postal'))
                ->add('Ville','text')
            ;
    }

    public function getParent()
    {
        return 'fos_user_registration';
    }

    public function getName()
    {
        return 'siteruffecarde_user_registration';
    }
}
