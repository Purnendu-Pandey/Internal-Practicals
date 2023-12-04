/*
Q.1) Define a Item class (item_number, item_name, item_price). Define a default and parameterized 
constructor. Keep a count of objects created. Create objects using parameterized constructor 
and display the object count after each object is created.(Use static member and method).Also 
display the contents of each object.
*/

class Item 
{
    int item_number;
    String item_name;
    double item_price;
    static int objectCount = 0;

    public Item(int item_number, String item_name, double item_price) {
        this.item_number = item_number;
        this.item_name = item_name;
        this.item_price = item_price;
        objectCount++;
    }

    public void displayItem() 
	  {
        System.out.println("Item Number: " + item_number);
        System.out.println("Item Name: " + item_name);
        System.out.println("Item Price: $" + item_price);
    }

    public static void displayObjectCount() {
        System.out.println("Number of objects created: " + objectCount);
    }
}

public class Slip23
 {
    public static void main(String[] args) {
        Item item1 = new Item(1, "Item A", 10.99);
        item1.displayItem();
        Item.displayObjectCount();

        Item item2 = new Item(2, "Item B", 15.49);
        item2.displayItem();
        Item.displayObjectCount();
    }
}