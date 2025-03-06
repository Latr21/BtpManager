<?php

namespace App\Tests\Form;

use App\Entity\User;
use App\Form\RegistrationFormType;
use Symfony\Component\Form\Test\TypeTestCase;
use Symfony\Component\Form\Extension\Validator\ValidatorExtension;
use Symfony\Component\Validator\Validation;

class RegistrationFormTypeTest extends TypeTestCase
{
    protected function getExtensions(): array
    {
        $validator = Validation::createValidator();

        return [
            new ValidatorExtension($validator),
        ];
    }

    public function testSubmitValidData(): void
    {
        $formData = [
            'email' => 'test@example.com',
            'agreeTerms' => true,
            'plainPassword' => 'securepassword',
        ];

        $user = new User();
        $form = $this->factory->create(RegistrationFormType::class, $user);

        $form->submit($formData);

        $this->assertTrue($form->isSynchronized());
        $this->assertEquals('test@example.com', $user->getEmail());
    }

    public function testFormHasFields(): void
    {
        $form = $this->factory->create(RegistrationFormType::class);

        $this->assertTrue($form->has('email'));
        $this->assertTrue($form->has('agreeTerms'));
        $this->assertTrue($form->has('plainPassword'));
    }

    public function testInvalidData(): void
{
    $formData = [
        'email' => '', // Email vide
        'agreeTerms' => false, // L'utilisateur doit accepter les termes
        'plainPassword' => '123', // Trop court (< 6 caractères)
    ];

    $form = $this->factory->create(RegistrationFormType::class);
    $form->submit($formData);

    // Vérifie que le formulaire est bien invalide
    $this->assertFalse($form->isValid());

    // Vérifie que chaque champ a bien une erreur
    $this->assertTrue($form->get('email')->getErrors()->count() > 0, "L'email ne devrait pas être vide.");
    $this->assertTrue($form->get('plainPassword')->getErrors()->count() > 0, "Le mot de passe devrait être d'au moins 6 caractères.");
    $this->assertTrue($form->get('agreeTerms')->getErrors()->count() > 0, "L'utilisateur doit accepter les termes.");
}
}