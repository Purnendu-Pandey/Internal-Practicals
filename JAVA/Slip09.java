/*
Q.1) Write a program to find the cube of given number using functional interface
*/
import java.util.Scanner;
@FunctionalInterface
interface fun
{
	int cal(int k);
}
public class Slip09
{
	public static void main(String[] args)
	{
	    Scanner s=new Scanner(System.in);
	    System.out.println("Enter the Number:");
	    int x=s.nextInt();
	    fun c=(int k)->k*k*k;
	    int ans=c.cal(x);
	    System.out.println("Cube:"+ans);
	}
}