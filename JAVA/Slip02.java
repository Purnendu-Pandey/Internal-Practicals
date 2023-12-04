/*
Q.1)Write a program to read the First Name and Last Name of a person, his weight and height using
command line arguments. Calculate the BMI Index which is defined as the individual's body mass
divided by the square of their height.(Hint : BMI = Wts. In kgs / (ht)2)
import java.util.*;
import java.io.*;
*/
public class Slip02
{       
      float wt;
	    float ht;
	    String fn;
	    String ln;
	float bm;
	Slip02()
	{
		wt=0;
		ht=0;
		fn=" ";
		ln=" ";
		bm=0;
	}
	Slip02(float ht,float wt,String fn,String ln)
	{
		this.fn=fn;
		this.ln=ln;
		this.wt=wt;
		this.ht=ht;
		this.bm=wt/(ht*ht);
	}
	void display()
	{
	
		System.out.println("First Name||Last Name||Weight(kg)||Height(cm)||BMI");
		System.out.println("  "+fn+"   "+ln+"    "+wt+"   "+ht+"   "+(bm));
	}
	public static void main(String args[])
	{
		String fn=args[0];
		String ln=args[1];
		float wt=Float.parseFloat(args[2]);
		float ht=Float.parseFloat(args[3]);
		Slip02 b1=new Slip02(ht,wt,fn,ln);
		b1.display();
		
	}
}
