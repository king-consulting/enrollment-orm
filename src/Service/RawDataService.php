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

  public function updateRowsWithEmptyValues($cdsCode, $info)
  {
    try
    {
      $update = "UPDATE RawData SET COUNTY = '" . addslashes($info['COUNTY']) . "', DISTRICT = '" . addslashes($info['DISTRICT']) . "', SCHOOL = '" . addslashes($info['SCHOOL']) ."' WHERE CDS_CODE = '$cdsCode' AND COUNTY = ''";
      #print $update."\n";

      $stmt = $this->entityManager->getConnection()->prepare($update);
      $stmt->execute();
    }
    catch (Exception $e) {
      print 'Caught exception: ' .  $e->getMessage() . "\n";
      return false;
    }
    return true;
  }

  public function findDistinctYears()
  {
    try
    {
      $stmt = $this->entityManager->getConnection()->prepare("SELECT DISTINCT YEAR FROM RawData WHERE COUNTY != '' ORDER BY YEAR DESC");
      $stmt->execute();
      return $stmt->fetchAll();
    }
    catch (Exception $e) {
      print 'Caught exception: ' .  $e->getMessage() . "\n";
      return false;
    }
  }

  public function findDistinctCounties()
  {
    try
    {
      $stmt = $this->entityManager->getConnection()->prepare("SELECT DISTINCT COUNTY FROM RawData WHERE COUNTY != '' ORDER BY COUNTY");
      $stmt->execute();
      return $stmt->fetchAll();
    }
    catch (Exception $e) {
      print 'Caught exception: ' .  $e->getMessage() . "\n";
      return false;
    }
  }

  public function getDistrictsByCounty($county)
  {
    try
    {
      $stmt = $this->entityManager->getConnection()->prepare("SELECT DISTINCT DISTRICT FROM RawData WHERE COUNTY = '$county' ORDER BY DISTRICT");
      $stmt->execute();
      return $stmt->fetchAll();
    }
    catch (Exception $e) {
      print 'Caught exception: ' .  $e->getMessage() . "\n";
      return false;
    }
  }

  public function getDataByDistrictAndYear($district, $year)
  {
    $sql = '
SELECT
        COUNTY, DISTRICT, SCHOOL, CDS_CODE, YEAR,
        sum(KDGN) as KD, sum(GR_1) as "1st", sum(GR_2) as "2nd",
        sum(GR_3) as "3rd", sum(GR_4) as "4th", sum(GR_5) as "5th",
        sum(GR_6) as "6th", sum(GR_7) as "7th", sum(GR_8) as "8th",
        sum(GR_9) as "9th", sum(GR_10) as "10th", sum(GR_11) as "11th",
        sum(GR_12) as "12th", sum(ENR_TOTAL) as Total,
        sum(UNGR_ELM) as "Ungr Elem", sum(UNGR_SEC) as "Ungr Sec"
FROM RawData
WHERE DISTRICT = "' . $district . '"
AND YEAR = ' . $year . '
AND SCHOOL NOT IN ("Nonpublic, Nonsectarian Schools")
GROUP BY CDS_CODE, YEAR
ORDER BY SCHOOL
    ';

    try
    {
      $stmt = $this->entityManager->getConnection()->prepare($sql);
      $stmt->execute();
      return $stmt->fetchAll();
    }
    catch (Exception $e) {
      print 'Caught exception: ' .  $e->getMessage() . "\n";
      return false;
    }
  }

}

