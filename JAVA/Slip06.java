/*
Q.1) Write a program to accept a text file from user and display the contents of a file in
reverse order and change its case.
*/
import java.io.*;
import java.util.*;
class Slip06
{
	public static void main(String[] args) throws IOException {
		
		Scanner sc1= new Scanner(System.in);
		System.out.print("\n Enter file name : ");
		String file = sc1.next();
		
		FileReader f = new FileReader(file);
		Scanner sc = new Scanner(f);
		String ch,ch3;
		while (sc.hasNext())
    {
			
			StringBuilder ch1 = new StringBuilder();
			ch= sc.next();
			ch1.append(ch);
			ch1=ch1.reverse();
			ch3=ch1.toString();
		   ch3=ch3.toUpperCase();
		  System.out.println(ch3);
		}
		f.close();
	}

}