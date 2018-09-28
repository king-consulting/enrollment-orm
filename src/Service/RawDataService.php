<?php

namespace KingConsulting\Service;

use Doctrine\ORM\Query\ResultSetMapping;

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
      return false;
    }
    return true;
  }

  public function findRowsWithEmptyValues()
  {
    try
    {
      $stmt = $this->entityManager->getConnection()->prepare('SELECT DISTINCT CDS_CODE, COUNTY, DISTRICT, SCHOOL FROM RawData WHERE COUNTY = ""');
      $stmt->execute();
      return $stmt->fetchAll();
    }
    catch (Exception $e) {
      print 'Caught exception: ' .  $e->getMessage() . "\n";
      return false;
    }
  }

  public function findRowsWithNoEmptyValues()
  {
    try
    {
      $stmt = $this->entityManager->getConnection()->prepare('SELECT DISTINCT CDS_CODE, COUNTY, DISTRICT, SCHOOL FROM RawData WHERE COUNTY != ""');
      $stmt->execute();
      return $stmt->fetchAll();
    }
    catch (Exception $e) {
      print 'Caught exception: ' .  $e->getMessage() . "\n";
      return false;
    }
  }

}

