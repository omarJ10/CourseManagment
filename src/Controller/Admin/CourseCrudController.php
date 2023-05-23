<?php

namespace App\Controller\Admin;

use App\Entity\Course;
use EasyCorp\Bundle\EasyAdminBundle\Field\UrlField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use Vich\UploaderBundle\Form\Type\VichImageType;

class CourseCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Course::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name'),
            ImageField::new('photo',"Course Image")
            ->setBasePath('/uploads/images/products')
            ->setUploadDir('public/uploads/images/products')
            ->setUploadedFileNamePattern('[randomhash].[extension]'),       
            AssociationField::new('categorie'),
            AssociationField::new('teacher'),
            NumberField::new('price'),
            TextField::new('outline'),
            NumberField::new('rate'),
            TextField::new('description'),
            UrlField::new('video'),
        ];
    }
    
}
