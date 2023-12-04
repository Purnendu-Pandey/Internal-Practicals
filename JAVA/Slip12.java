/*
Q.1) Write a program to accept a file name from command prompt, if the file exits then display number
of words and lines in that file.
*/
import java.io.*;
import java.util.*;
class Slip12
{
public static void main(String args[])throws IOException 
{
	String filename=args[0];
	File file=new File(filename);
	int wc=0,lc=0;
	FileReader read=new FileReader(filename);
	BufferedReader bf=new BufferedReader(read);
	if(file.exists())
	{
		String line;
		while((line=bf.readLine())!=null)
		{
			lc++;
			for(int i=0; i<line.length(); i++)
			{
			if((line.charAt(i))==' ')
			{
				wc++;
			}
		        }
		        wc+=1;
		}
		System.out.println("No of lines in file:"+lc);
		System.out.println("No of words in file:"+wc);
	}
	else
	{
	 System.out.println("File Not found....");
	}
}
}
