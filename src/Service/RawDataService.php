<?php

namespace KingConsulting\Service;

class RawDataService {

  private $entityManager;

  public function __construct($entityManager)
  {
    $this->entityManger = $entityManger;
  }

  public function addRow($year, $header, $line)
  {
    $values = explode("\t", trim($line));
    $values = array_map('addslashes', $values);
    $insert = "INSERT INTO EnrollmentRawData (YEAR," . join(',', $header) . ") VALUES ('$year', '" . join("','", $values) . "');\n";

    try
    {
      $stmt = $this->entityManager->getConnection()->prepare($insert);
      $stmt->execute();
    }
    catch (Exception $e) {
      print 'Caught exception: ' .  $e->getMessage() . "\n";
    }
  }
}

