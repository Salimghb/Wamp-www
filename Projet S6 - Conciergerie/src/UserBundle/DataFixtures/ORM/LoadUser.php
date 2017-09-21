<?php
namespace UserBundle\DataFixtures\ORM;

use UserBundle\Entity\User;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class LoadUser extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface
{

  private $container;

  public function setContainer(ContainerInterface $container = null)
  {
    $this->container = $container;
  }

  public function load(ObjectManager $manager)
  {
    $factory = $this->container->get('security.encoder_factory');
    $manager = $this->container->get('fos_user.user_manager');

    $admin1 = new User();
    $admin1->setUsername('admin1');
    $admin1->setPlainPassword('pass');
    $admin1->setEmail('admin1@google.com');
    $admin1->setRoles(array('ROLE_ADMIN'));
    $admin1->setEnabled(true);
    $encoder = $factory->getEncoder($admin1);
    $password = $encoder->encodePassword($admin1->getPlainPassword(), $admin1->getSalt());
    $admin1->setPassword($password);

    $admin2 = new User();
    $admin2->setUsername('admin2');
    $admin2->setPlainPassword('pass');
    $admin2->setEmail('admin2@google.com');
    $admin2->setRoles(array('ROLE_ADMIN'));
    $admin2->setEnabled(true);
    $encoder = $factory->getEncoder($admin2);
    $password = $encoder->encodePassword($admin2->getPlainPassword(), $admin2->getSalt());
    $admin2->setPassword($password);

    $manager->updateUser($admin1);
    $manager->updateUser($admin2);
    $this->addReference('UAdmin1', $admin1);
    $this->addReference('UAdmin2', $admin2);

    $faker = \Faker\Factory::create();

    for ($i = 1; $i <= 5; $i++)
    {
      $user = new User();
      $user->setUsername("Entreprise".$i);
      $user->setPlainPassword('pass');
      $user->setEmail("entreprise".$i."@google.com");
      $user->setRoles(array('ROLE_ENTREPRISE'));
      $user->setEnabled(true);
      $encoder = $factory->getEncoder($user);
      $password = $encoder->encodePassword($user->getPlainPassword(), $user->getSalt());
      $user->setPassword($password);
      $manager->updateUser($user);
      $this->addReference('UEntreprise'.$i, $user);
    }

    for ($i = 1; $i <= 10; $i++)
    {
      $user = new User();
      $user->setUsername("Prestataire".$i);
      $user->setPlainPassword('pass');
      $user->setEmail("prestataire".$i."@google.com");
      $user->setRoles(array('ROLE_PRESTATAIRE'));
      $user->setEnabled(true);
      $encoder = $factory->getEncoder($user);
      $password = $encoder->encodePassword($user->getPlainPassword(), $user->getSalt());
      $user->setPassword($password);
      $manager->updateUser($user);
      $this->addReference('UPrestataire'.$i, $user);
    }

    for ($i = 1; $i <= 20; $i++)
    {
      $user = new User();
      $user->setUsername("Salarie".$i);
      $user->setPlainPassword('pass');
      $user->setEmail("salarie".$i."@google.com");
      $user->setRoles(array('ROLE_SALARIE'));
      $user->setEnabled(true);
      $encoder = $factory->getEncoder($user);
      $password = $encoder->encodePassword($user->getPlainPassword(), $user->getSalt());
      $user->setPassword($password);
      $manager->updateUser($user);
      $this->addReference('USalarie'.$i, $user);
    }

  }

  public function getOrder()
  {
    return 4;
  }

}