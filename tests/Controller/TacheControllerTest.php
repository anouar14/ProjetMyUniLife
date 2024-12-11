<?php

namespace App\Tests\Controller;

use App\Entity\Tache;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

final class TacheControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private EntityManagerInterface $manager;
    private EntityRepository $repository;
    private string $path = '/tache/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->manager = static::getContainer()->get('doctrine')->getManager();
        $this->repository = $this->manager->getRepository(Tache::class);

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
        self::assertPageTitleContains('Tache index');

        // Use the $crawler to perform additional assertions e.g.
        // self::assertSame('Some text on the page', $crawler->filter('.p')->first());
    }

    public function testNew(): void
    {
        $this->markTestIncomplete();
        $this->client->request('GET', sprintf('%snew', $this->path));

        self::assertResponseStatusCodeSame(200);

        $this->client->submitForm('Save', [
            'tache[nomT]' => 'Testing',
            'tache[desT]' => 'Testing',
            'tache[dateDebut]' => 'Testing',
            'tache[dateFin]' => 'Testing',
            'tache[timeOn]' => 'Testing',
            'tache[timeOut]' => 'Testing',
            'tache[statutT]' => 'Testing',
            'tache[user]' => 'Testing',
        ]);

        self::assertResponseRedirects($this->path);

        self::assertSame(1, $this->repository->count([]));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Tache();
        $fixture->setNomT('My Title');
        $fixture->setDesT('My Title');
        $fixture->setDateDebut('My Title');
        $fixture->setDateFin('My Title');
        $fixture->setTimeOn('My Title');
        $fixture->setTimeOut('My Title');
        $fixture->setStatutT('My Title');
        $fixture->setUser('My Title');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Tache');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Tache();
        $fixture->setNomT('Value');
        $fixture->setDesT('Value');
        $fixture->setDateDebut('Value');
        $fixture->setDateFin('Value');
        $fixture->setTimeOn('Value');
        $fixture->setTimeOut('Value');
        $fixture->setStatutT('Value');
        $fixture->setUser('Value');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'tache[nomT]' => 'Something New',
            'tache[desT]' => 'Something New',
            'tache[dateDebut]' => 'Something New',
            'tache[dateFin]' => 'Something New',
            'tache[timeOn]' => 'Something New',
            'tache[timeOut]' => 'Something New',
            'tache[statutT]' => 'Something New',
            'tache[user]' => 'Something New',
        ]);

        self::assertResponseRedirects('/tache/');

        $fixture = $this->repository->findAll();

        self::assertSame('Something New', $fixture[0]->getNomT());
        self::assertSame('Something New', $fixture[0]->getDesT());
        self::assertSame('Something New', $fixture[0]->getDateDebut());
        self::assertSame('Something New', $fixture[0]->getDateFin());
        self::assertSame('Something New', $fixture[0]->getTimeOn());
        self::assertSame('Something New', $fixture[0]->getTimeOut());
        self::assertSame('Something New', $fixture[0]->getStatutT());
        self::assertSame('Something New', $fixture[0]->getUser());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();
        $fixture = new Tache();
        $fixture->setNomT('Value');
        $fixture->setDesT('Value');
        $fixture->setDateDebut('Value');
        $fixture->setDateFin('Value');
        $fixture->setTimeOn('Value');
        $fixture->setTimeOut('Value');
        $fixture->setStatutT('Value');
        $fixture->setUser('Value');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertResponseRedirects('/tache/');
        self::assertSame(0, $this->repository->count([]));
    }
}
