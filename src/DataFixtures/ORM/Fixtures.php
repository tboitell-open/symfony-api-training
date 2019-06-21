<?php

namespace App\DataFixtures\ORM;

use App\Entity\Greenspace;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class Fixtures extends Fixture
{
	public function load(ObjectManager $manager)
	{
		$geodata = json_decode(file_get_contents(__DIR__ . '/../../../vendor/espaces_verts.json'));
		$i = 0;
		foreach ($geodata as $entrie)
		{
			$greenspace = new Greenspace();
			foreach ($entrie->fields as $key => $data)
			{
				$key_words = explode('_', $key);
				array_walk($key_words, function (&$s) {
					$s = ucfirst($s);
				});
				$callback_name = 'set' . implode($key_words);
				if (method_exists($greenspace, $callback_name))
					$greenspace->$callback_name($data);
			}
			$manager->persist($greenspace);
			if ($i === 0)
			{
				print_r($greenspace);	
				$manager->flush();
				$manager->clear();
			}
			$i++;
		}
	}
}
