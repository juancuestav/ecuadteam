<?php
  include_once 'database.php';

  class PokemonModel extends Model {

    public function __construct() {
      parent::__construct();
    }

    public function obtenerPokemons() {
      $query = $this->db->connect()->query('SELECT * FROM pokemons');
      return $query;
    }

    public function obtenerPokemon($id) {
      $query = $this->db->connect()->prepare('SELECT * FROM pokemons WHERE id = :id');
      $query->execute(['id' => $id]);
      return $query;
    }

    public function registerPokemon ($pokemon) {
      try {
        $query = $this->db->connect()->prepare('INSERT INTO pokemons(name, image_svg) VALUES(:name, :image_svg)');
        $query->execute(['name' => $pokemon['name'], 'image_svg' => $pokemon['image_svg']]);
        return true;
      } catch(PDOException $e) {
        return false;
      }
    }
  }
?>