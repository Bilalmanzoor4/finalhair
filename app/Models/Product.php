<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
  
class Product extends Model
{
    use HasFactory;
  
    protected $fillable = [
        'name', 'description' , 'price', 'rent_price', 'image1', 'image2', 'image3', 'image4', 'status', 'delivery_charges' , 'stock' , 'color' , 'lenght'
    ];

 /**
     * Set the categories
     *
     */
    public function setColorAttribute($value)
    {
        $this->attributes['color'] = json_encode($value);
      
    }
     public function setLengthAttribute($value)
    {
        $this->attributes['length'] = json_encode($value);
    }
  
     /**
     * Get the categories
     *
     */
    public function getColorAttribute($value)
    {
        return $this->attributes['color'] = json_decode($value);
    }
    public function getLengthAttribute($value)
    {
        return $this->attributes['length'] = json_decode($value);
    }




}