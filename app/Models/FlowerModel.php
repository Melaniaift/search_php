<?php
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class FlowerModel extends Model
{
    protected $table='flori';
    protected $primaryKey='id';
    protected $allowedFields=['nume','culoare','marime','pret'];
}