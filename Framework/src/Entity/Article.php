<?php
namespace App\Entity;

class Article {

//certains attributs peuvent ne pas être initialisés. On les spécifies optionnels avec le caractère ?
  private ?int $id;
  private ?string $title;
  private ?string $description;
  private ?string $content;

// getters = accesseurs et setters = mutateurs 
  public function getId(): ?int {
    return $this->id;
  }

  public function getTitle(): ?string {
    return $this->title;
  }
  public function setTitle(?string $title): void {
    $this->title = $title;
  }

  public function getDescription(): ?string {
    return $this->description;
  }
  public function setDescription(?string $description): void {
    $this->description = $description;
  }

  public function getContent(): ?string {
    return $this->content;
  }
  public function setContent(?string $content): void {
    $this->content = $content;
  }

}