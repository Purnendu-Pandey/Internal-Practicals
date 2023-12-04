/*
Q.1) Write a Program to print all Prime numbers in an array of ‘n’ elements.
(use command line arguments).
*/
import java.util.*;
import java.io.*;
public class Slip01
{
		public static void main(String args[])
		{
			int len=args.length;
			for(int i=0; i<len; i++)
			{
			        int no=Integer.parseInt(args[i]);
			        int flag=0;
				for(int j=2; j<no; j++)
				{				
				if(no%j==0)
				{
				 flag=1;
				}
			        }
			        if(flag==1)
			        {
			        System.out.println(no+" is not a prime no....");
			        }
			        else
			        {
			           System.out.println(no+" is a prime no");	
			        }
		}
		}
	}
