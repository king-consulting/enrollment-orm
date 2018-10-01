<?php

namespace KingConsulting\Service;

/*
$newProductName = $argv[1];

$product = new Product();
$product->setName($newProductName);

$entityManager->persist($product);
$entityManager->flush();

echo "Created Product with ID " . $product->getId() . "\n";
*/

class CountyService {

  private $entityManager;

  public function __construct($entityManager)
  {
    $this->entityManager = $entityManager;
  }

  public function addCounty($county)
  {
    $county = new County();
    $county->setName();

    $entityManager->persist($county);
    $entityManager->flush();
  }

}

