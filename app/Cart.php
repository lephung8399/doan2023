<?php


namespace App;


class Cart
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart)
    {
        if ($oldCart) {
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    public function add($item, $id)
    {
        //Tao mot phan tu trong gio hang
        $storedItem = ['qty' => 0, 'price' => $item->ProductPrice, 'item' => $item];
        if ($this->items) {
            //Kiem tra san pham da ton tai trong gio hang chua
            //Neu co roi thi cap nhat phan tu do
            if (array_key_exists($id, $this->items)) {
                $storedItem = $this->items[$id];
            }
        }

        $storedItem['qty']++;
        $storedItem['price'] = $item->ProductPrice * $storedItem['qty'];

        $this->items[$id] = $storedItem;

        //Tang tong so luong san pham trong gio hang
        $this->totalQty++;
        //Tinh tong gia tien trong gi hang
        $this->totalPrice += $item->ProductPrice;
    }

    public function remove($id)
    {
        if ($this->items) {
            $productsIntoCart = $this->items;
            if (array_key_exists($id, $productsIntoCart)) {
                $priceProDelete = $productsIntoCart[$id]['price'];
                $this->totalPrice -= $priceProDelete;
                //giam tong so luong san pham co trong gio hang
                $this->totalQty -= $productsIntoCart[$id]['qty'];
                unset($productsIntoCart[$id]);
                $this->items = $productsIntoCart;
            }
        } else {
            $this->totalQty = 0;
        }
    }

    public function update($request, $id)
    {
        if ($this->items) {
            $itemsIntoCart = $this->items;
            if (array_key_exists($id, $itemsIntoCart)) {
                $itemUpdate = $itemsIntoCart[$id];

                //update tong so luong san pham trong gio hang
                $qtyUpdate = $request->qty - $itemUpdate['qty'];
                $this->totalQty += $qtyUpdate;
                //update tong gia cua gio hang
                $priceUpdate = $itemUpdate['item']->price * $request->qty - $itemUpdate['price'];
                $this->totalPrice += $priceUpdate;
                //update so luong san pham do
                $itemUpdate['qty'] = $request->qty;

                //update tong gia cua san pham do
                $itemUpdate['price'] = $itemUpdate['item']->price * $request->qty;
                $this->items[$id] = $itemUpdate;

            }
        }
    }

}
