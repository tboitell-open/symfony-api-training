<?php 
use Symfony\Component\Serializer\SerializerInterface;
use App\Entity\Greenspace;


final class GreenspaceService
{
	private $repository;

	public function __construct(GreenspaceRepositoryInterface $repository)
	{
		$this->repository = $repository;
	}

	public function get(int $id): ?Greenspace
	{
		return $this->repository->findById($id);
	}

	public function getAll(): ?array
	{
		return $this->repository->findAll();
	}

	public function add(array $fields): Greenspace
	{
		$greenspace = new Greenspace();
		$methods = get_class_methods($greenspace);
		$properties = array();
		foreach ($methods as $method_name)
		{
			if (strncmp($method_name, "set", 3) === 0)
			{
				$property_name = substr($method_name, 3, strlen($method_name) - 3);
				$property_len = strlen($property_name);
				$i = 1;
				while ($i < $property_len)
				{
					if (ctype_upper($property_name[$i]))
						$property_name = substr_replace($property_name, "_", $i++, 0);
					$i++;
				}
				$property_name = strtolower($property_name);
				if (array_key_exists($property_name, $fields)
					$greenspace->$method_name($fields[$property_name]);
			}
		}
		// Need to call a validator here.       
		$this->repository->persist($greenspace);
		$this->repository->flush($greenspace);
		return($greenspace);
	}

	public function update(int $id, array $fields): ?Article
	{
	}

	public function delete(int $id): void
	{
		$greenspace = $this->repository->findById($id);
		if ($greenspace)
			$this->repository->delete($greenspace);
	}
}
