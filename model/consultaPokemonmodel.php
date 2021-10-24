<?php
  include_once 'database.php';
  include_once 'model/pokemon.php';

  class consultaPokemonModel extends Model {

    public function __construct() {
      parent::__construct();
    }

    public function get() {
      $items = [];
      try{
        $query = $this->db->connect()->query('SELECT * FROM pokemons');
        while ($row = $query->fetch()) {
          $pokemon = new Pokemon();
          $pokemon->id = $row['id'];
          $pokemon->name = $row['name'];
          $pokemon->image_svg = $row['image_svg'];
          $pokemon->image_png = $row['image_png'];
          array_push($items, $pokemon);
        }
        return $items;
      } catch(PDOException $e) {
        return [];
      }
    }

    public function obtenerPokemonById($id) {
      $item = new Pokemon();

      $query = $this->db->connect()->prepare('SELECT * FROM pokemons WHERE id = :id');
      try {
        $query->execute(['id' => $id]);

        while ($row = $query->fetch()) {
          $item->id = $row['id'];
          $item->name = $row['name'];
          $item->image_svg = $row['image_svg'];
          $item->image_png = $row['image_png'];
        }
        return $item;
      } catch (PDOException $e) {
        return null;
      }
    }

    public function updatePokemon($pokemon) {
      $query = $this->db->connect()->prepare('UPDATE pokemons SET name = :name, image_svg = :image_svg, image_png = :image_png WHERE id = :id');
      try {
        $query->execute([
          'id' => $pokemon['id'],
          'name' => $pokemon['name'],
          'image_svg' => $pokemon['image_svg'],
          'image_png' => $pokemon['image_png'],
        ]);
        return true;
      } catch (PDOException $e) {
        return false;
      }
    }

    public function deletePokemon($pokemonId) {
      $query = $this->db->connect()->prepare('DELETE FROM pokemons WHERE id = :id');
      try {
        $query->execute([
          'id' => $pokemonId
        ]);
        return true;
      } catch (PDOException $e) {
        return false;
      }
    }
  }
?>