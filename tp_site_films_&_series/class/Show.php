<?php
class Show
{
  private $_id;
  private $_name;
  private $_img;
  private $_original_name;
  private $_vote_average;
  private $_vote_count;
  private $_date;
  private $_overview;



  public function __construct(int $id, string $name, string $img, string $original_name, float $vote_average, int $vote_count, string $date, string $overview)
  {
    $this->setId($id);
    $this->setName($name);
    $this->setImg($img);
    $this->setOriginalName($original_name);
    $this->setVoteAverage($vote_average);
    $this->setVoteCount($vote_count);
    $this->setDate($date);
    $this->setOverview($overview);
  }

  public function setId(string $id)
  {
    $this->_id = $id;
  }
  public function getId(): string
  {
    return $this->_id;
  }

  public function setName(string $name)
  {
    $this->_name = $name;
  }
  public function getName(): string
  {
    return $this->_name;
  }

  public function setImg(string $img)
  {
    $this->_img = $img;
  }
  public function getImg(): string
  {
    return $this->_img;
  }

  public function setOriginalName(string $original_name)
  {
    $this->_original_name = $original_name;
  }
  public function getOriginalName(): string
  {
    return $this->_original_name;
  }

  public function setVoteAverage(float $vote_average)
  {
    $this->_vote_average = $vote_average;
  }
  public function getVoteAverage(): float
  {
    return $this->_vote_average;
  }

  public function setVoteCount(int $vote_count)
  {
    $this->_vote_count = $vote_count;
  }
  public function getVoteCount(): int
  {
    return $this->_vote_count;
  }

  public function setDate(string $date)
  {
    $this->_date = $date;
  }
  public function getDate(): string
  {
    return $this->_date;
  }

  public function setOverview(string $overview)
  {
    $this->_overview = $overview;
  }
  public function getOverview(): string
  {
    return $this->_overview;
  }
}
