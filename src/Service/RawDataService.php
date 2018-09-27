<?php

namespace KingConsulting\Service;

class RawDataService {

  private $entityManager;

  public function __construct($entityManager)
  {
    $this->entityManager = $entityManager;
  }

  public function addRow($year, $header, $line)
  {
    $values = explode("\t", trim($line));
    $values = array_map('addslashes', $values);
    $insert = "INSERT INTO RawData (YEAR," . join(',', $header) . ") VALUES ('$year', '" . join("','", $values) . "');\n";
    #print $insert . "\n";

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

