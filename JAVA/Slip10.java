/*
Q.1) Define an interface “Operation” which has method volume( ).Define a constant PI having a value 3.142 
Create a class cylinder which implements this interface (members – radius, height). Create one object and 
calculate the volume.
*/
import java.util.Scanner;
interface operation
{
    void input();
    void output();
}
class cylinder implements operation
{
    double r,h;
    public void input()
    {
         Scanner s=new Scanner(System.in);
         System.out.println("Enter radius :");
         r=s.nextDouble();
         System.out.println("Enter Height :");
         h=s.nextDouble();
    }
    public void output()
    {
          double v=3.14*r*r*h;
          System.out.println("Volume of Cylinder : "+v);
    }
}
public class Slip10
{
     public static void main(String[] args)
     {
          cylinder c=new cylinder();
          c.input();
          c.output();
     }
}