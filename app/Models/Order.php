<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Auth;
class Order extends Model
{
    use HasFactory, SoftDeletes;

    public function OrderItems(){
        return $this->hasMany(OrderItem::class);
    }

    public function getTotal(){
        $total = 0;

        foreach($this->OrderItems as $item){
            $total += $item->total;
        }

        return $total;
    }
    
    public function address(){
        return $this->belongsTo(Address::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    

    


}
