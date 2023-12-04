/*
Q.1) Define a class MyNumber having one private int data member. Write a default constructor to 
initialize it to 0 and another constructor to initialize it to a value (Use this). Write methods 
isNegative, isPositive, isZero, isOdd, isEven. Create an object in main.Use command line 
arguments to pass a value to the Object
*/
import java.util.Scanner;
class MyNumber
{
	private int no;
  	MyNumber()
   	{
   	   no=0;
        }
        MyNumber(int no)
        {
          this.no=no;
        }
	void negative()
	{
          if(no<0)
          System.out.println(+no+ "is Negative");
  	}
	void Positive()
	{
          if(no>0)
          System.out.println(+no+ "Number is Positive");
   	}
	void Zero()
	{
  	  if(no==0)
  	  System.out.println(+no+ "Number is Zero");
   	}
 	void Odd()
 	{
  	  if(no%2!=0)
  	  System.out.println(+no+ "Number is Odd");
 	}
	void Even()
	{
 	   if(no%2==0)
 	   System.out.println(+no+ "Number is Even");
  	}
 
 	public static void main(String [] args) 
 	{
   		System.out.println("Enter the number ");
   		Scanner s=new Scanner(System.in);
   		int no=s.nextInt();
   		MyNumber m=new MyNumber(no);
  		m.Positive(); 
  		m.negative(); 		
  		m.Even();   		
  		m.Odd();
   		m.Zero();  		
 }
}
