/*
Q.1) Write a program for multilevel inheritance such that Country is inherited from Continent.
State is inherited from Country. Display the place, State, Country and Continent. 
*/
import java.util.Scanner;
class continent
{
	String cname;
	continent(String cname)
	{
	   this.cname=cname;
	}
}
class country extends continent
{
	String coname;
	country(String cname,String coname)
	{
	   super(cname);
	   this.coname=coname;
	}
}
class state extends country
{	
	 String sname;
	 state(String cname,String coname,String sname)
	 {
	      super(cname,coname);
	      this.sname=sname;
	 }
}
class Slip04
{
	public static void main(String[] args)
	{
	    Scanner s=new Scanner(System.in);
	    System.out.println("Enter the Continent name:");
	    String cname=s.nextLine();
	    
	    System.out.println("Enter the Country name:");
	    String coname=s.nextLine();
	    
	    System.out.println("Enter the state name:");
	    String sname=s.nextLine();
	    
	    System.out.println("Enter the palce name:");
	    String pname=s.nextLine();
	    
	    System.out.println("-----MultiHeritance-----:");
	    System.out.println("Continent:"+cname);
	    System.out.println("Contry:"+coname);	
	    System.out.println("State:"+sname);	
	    System.out.println("Place:"+pname);	
	 }
}

	    