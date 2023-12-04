/*
Q.1) Write a program to accept the two dimensional array from user and display sum of its diagonal 
elements.
*/
import java.io.*;
import java.util.*;
public class Slip17
{
	public static void main(String[] args) 
  {
		Scanner sc =new Scanner(System.in);
		int n,m,i,j;
		
		System.out.print("Enter the no of rows : ");
    m=sc.nextInt();
    System.out.print("Enter the no of columns : ");
    n=sc.nextInt();
             
    int a[][]=new int[m][n];
    System.out.println("Enter the array elements  : ");
    for (i=0;i<m;i++)
    { 
      System.out.println("Enter for row : "+(i+1));
      for (j=0;j<n;j++)
          a[i][j]=sc.nextInt();
    }
                      
    System.out.println(" the array elements  : ");
    int sum=0;
    for (i=0;i<m;i++)
        { 
          for (j=0;j<n;j++)
          {
            System.out.print(" "+a[i][j]);
            if (i==j)
            {
              sum=sum+a[i][j];
              }
          }
          System.out.println();
        }
        System.out.println("Sum of diagonal elements :"+sum);		
	}
}