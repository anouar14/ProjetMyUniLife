<?php

namespace App\Tests\Controller;

use App\Entity\Activite;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

final class ActiviteControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private EntityManagerInterface $manager;
    private EntityRepository $repository;
    private string $path = '/activite/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->manager = static::getContainer()->get('doctrine')->getManager();
        $this->repository = $this->manager->getRepository(Activite::class);

        foreach ($this->repository->findAll() as $object) {
            $this->manager->remove($object);
        }

        $this->manager->flush();
    }

    public function testIndex(): void
    {
        $this->client->followRedirects();
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Activite index');

        // Use the $crawler to perform additional assertions e.g.
        // self::assertSame('Some text on the page', $crawler->filter('.p')->first());
    }

    public function testNew(): void
    {
        $this->markTestIncomplete();
        $this->client->request('GET', sprintf('%snew', $this->path));

        self::assertResponseStatusCodeSame(200);

        $this->client->submitForm('Save', [
            'activite[nomAC]' => 'Testing',
            'activite[dateAC]' => 'Testing',
            'activite[HeureAC]' => 'Testing',
            'activite[typeAC]' => 'Testing',
            'activite[RappelAC]' => 'Testing',
            'activite[user]' => 'Testing',
        ]);

        self::assertResponseRedirects($this->path);

        self::assertSame(1, $this->repository->count([]));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Activite();
        $fixture->setNomAC('My Title');
        $fixture->setDateAC('My Title');
        $fixture->setHeureAC('My Title');
        $fixture->setTypeAC('My Title');
        $fixture->setRappelAC('My Title');
        $fixture->setUser('My Title');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Activite');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Activite();
        $fixture->setNomAC('Value');
        $fixture->setDateAC('Value');
        $fixture->setHeureAC('Value');
        $fixture->setTypeAC('Value');
        $fixture->setRappelAC('Value');
        $fixture->setUser('Value');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'activite[nomAC]' => 'Something New',
            'activite[dateAC]' => 'Something New',
            'activite[HeureAC]' => 'Something New',
            'activite[typeAC]' => 'Something New',
            'activite[RappelAC]' => 'Something New',
            'activite[user]' => 'Something New',
        ]);

        self::assertResponseRedirects('/activite/');

        $fixture = $this->repository->findAll();

        self::assertSame('Something New', $fixture[0]->getNomAC());
        self::assertSame('Something New', $fixture[0]->getDateAC());
        self::assertSame('Something New', $fixture[0]->getHeureAC());
        self::assertSame('Something New', $fixture[0]->getTypeAC());
        self::assertSame('Something New', $fixture[0]->getRappelAC());
        self::assertSame('Something New', $fixture[0]->getUser());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();
        $fixture = new Activite();
        $fixture->setNomAC('Value');
        $fixture->setDateAC('Value');
        $fixture->setHeureAC('Value');
        $fixture->setTypeAC('Value');
        $fixture->setRappelAC('Value');
        $fixture->setUser('Value');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertResponseRedirects('/activite/');
        self::assertSame(0, $this->repository->count([]));
    }
}
