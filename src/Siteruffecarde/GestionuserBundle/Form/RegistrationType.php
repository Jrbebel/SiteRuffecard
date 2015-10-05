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
                ->add('Prenom','text')
                ->add('Birthday')
                ->add('Tel','integer')
                ->add('Adresse','text')
                ->add('Complement','text')
                ->add('CdePostal')
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
