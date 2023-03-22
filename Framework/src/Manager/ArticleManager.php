<?php
namespace App\Manager;

use Plugo\Manager\AbstractManager;
use App\Entity\Article;

class ArticleManager extends AbstractManager {
   
    // simplifie la récupération d'une ressource spécifique par son id. Exploite readOne ()
    public function find(int $id) {
    return $this->readOne(Article::class, [ 'id' => $id ]);
  }
  
  //récupère toutes les ressources répondant à un ou plusieurs critères, de les ordonner, limiter leur nombre et décaler le curseur de sélection. Exploite readMany()
   public function findBy(array $filters, array $order = [], int $limit = null, int $offset = null) {
    return $this->readMany(Article::class, $filters, $order, $limit, $offset);
  }
    
    //simplifie l'insertion d'une ressource pour une entité donnée. Exploite create()
    public function add(Article $article) {
    return $this->create(Article::class, [
        'title' => $article->getTitle(),
        'description' => $article->getDescription(),
        'content' => $article->getContent()
      ]
    );
  }
  
  //simplifie l'insertion d'une ressource pour une entité donnée. Exploite l'update ()
   public function edit(Article $article) {
    return $this->update(Article::class, [
        'title' => $article->getTitle(),
        'description' => $article->getDescription(),
        'content' => $article->getContent()
      ],
      $article->getId()
    );
  }
  
  //simplifie la suppression d'une ressource pour une entité donnée. Exploite delete()
  public function remove(Article $article) {
  return $this->delete(Article::class, $article->getId());
  }
}